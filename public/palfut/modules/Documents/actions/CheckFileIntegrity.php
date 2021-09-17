<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

class Documents_CheckFileIntegrity_Action extends Vtiger_Action_Controller {

	public function requiresPermission(\Vtiger_Request $request) {
		$permissions = parent::requiresPermission($request);
		$permissions[] = array('module_parameter' => 'module', 'action' => 'DetailView', 'record_parameter' => 'record');
		return $permissions;
	}
	public function checkPermission(Vtiger_Request $request) {
		return parent::checkPermission($request);
	}

	public function process(Vtiger_Request $request) {
		$moduleName = $request->getModule();
		$recordId = $request->get('record');

		$documentRecordModel = Vtiger_Record_Model::getInstanceById($recordId, $moduleName);
		$resultVal = $documentRecordModel->checkFileIntegrity();

		$result = array('success'=>$resultVal);
		if ($resultVal) {
			$result['message'] = vtranslate('LBL_FILE_AVAILABLE', $moduleName);
		} else {
			if ($documentRecordModel->get('filelocationtype') == 'I') {
				$documentRecordModel->updateFileStatus();
			}
			$result['message'] = vtranslate('LBL_FILE_NOT_AVAILABLE', $moduleName);
		}

		$response = new Vtiger_Response();
		$response->setResult($result);
		$response->emit();
	}
}
