<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

class Reports_Folder_Action extends Vtiger_Action_Controller {

	function __construct() {
		parent::__construct();
		$this->exposeMethod('save');
		$this->exposeMethod('delete');
	}

	public function requiresPermission(\Vtiger_Request $request) {
		$permissions = parent::requiresPermission($request);
		$permissions[] = array('module_parameter' => 'module', 'action' => 'DetailView');
		return $permissions;
	}

	public function process(Vtiger_Request $request) {
		$mode = $request->get('mode');
		if(!empty($mode)) {
			$this->invokeExposedMethod($mode, $request);
			return;
		}
	}

	/**
	 * Function that saves/updates the Folder
	 * @param Vtiger_Request $request
	 */
	function save(Vtiger_Request $request) {
		$moduleName = $request->getModule();
		$folderModel = Reports_Folder_Model::getInstance();
		$folderId = $request->get('folderid');

		if(!empty($folderId)) {
			$folderModel->set('folderid', $folderId);
		}

        // we need to decode if encoded values are given(for XSS vulnerability)
		$folderModel->set('foldername', decode_html($request->get('foldername')));
		$folderModel->set('description', decode_html($request->get('description')));

		if ($folderModel->checkDuplicate()) {
			throw new AppException(vtranslate('LBL_FOLDER_EXISTS', $moduleName));
		}

		$folderModel->save();
		$result = array('success' => true, 'message' => vtranslate('LBL_FOLDER_SAVED', $moduleName), 'info' => $folderModel->getInfoArray());

		$response = new Vtiger_Response();
		$response->setResult($result);
		$response->emit();
	}

	/**
	 * Function that deletes the Folder
	 * @param Vtiger_Request $request
	 */
	function delete(Vtiger_Request $request) {
		$folderId = $request->get('folderid');
		$moduleName = $request->getModule();
		if ($folderId) {
			$folderModel = Reports_Folder_Model::getInstanceById($folderId);
			$success = false;
			if ($folderModel->isDefault()) {
				$message = vtranslate('LBL_FOLDER_CAN_NOT_BE_DELETED', $moduleName);
			} else {
				if ($folderModel->hasReports()) {
					$message = vtranslate('LBL_FOLDER_NOT_EMPTY', $moduleName);
				} else {
					$folderModel->delete();
					$message = vtranslate('LBL_FOLDER_DELETED', $moduleName);
					$success = true;
				}
			}
			
			$result = array('success' => $success, 'message' => $message);
			$response = new Vtiger_Response();
			$response->setResult($result);
			$response->emit();
		}
	}
    
    public function validateRequest(Vtiger_Request $request) {
        return true;
    }
}