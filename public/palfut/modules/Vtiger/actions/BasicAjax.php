<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

class Vtiger_BasicAjax_Action extends Vtiger_Action_Controller {

    public function requiresPermission(\Vtiger_Request $request) {
        $permissions = parent::requiresPermission($request);
        $permissions[] = array('module_parameter' => 'module', 'action' => 'DetailView');
         if (!empty($request->get('search_module'))) {
            $permissions[] = array('module_parameter' => 'search_module', 'action' => 'DetailView');
         }
        if (!empty($request->get('parent_module'))) {
            $permissions[] = array('module_parameter' => 'parent_module', 'action' => 'DetailView');
        }
        return $permissions;
    }

    public function process(Vtiger_Request $request) {
        $searchValue = $request->get('search_value');
        $searchModule = $request->get('search_module');

        $parentRecordId = $request->get('parent_id');
        $parentModuleName = $request->get('parent_module');
        $relatedModule = $request->get('module');

        $searchModuleModel = Vtiger_Module_Model::getInstance($searchModule);
        $records = $searchModuleModel->searchRecord($searchValue, $parentRecordId, $parentModuleName, $relatedModule);

        $baseRecordId = $request->get('base_record');
        $result = array();
        foreach ($records as $moduleName => $recordModels) {
            foreach ($recordModels as $recordModel) {
                if ($recordModel->getId() != $baseRecordId) {
                    $result[] = array('label' => decode_html($recordModel->getName()), 'value' => decode_html($recordModel->getName()), 'id' => $recordModel->getId());
                }
            }
        }

        $response = new Vtiger_Response();
        $response->setResult($result);
        $response->emit();
    }

}
