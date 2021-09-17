<?php
/* +**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is: vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * ***********************************************************************************/

class Reports_ListViewQuickPreview_View extends Vtiger_ListViewQuickPreview_View {

    public function checkPermission(Vtiger_Request $request) {
		$moduleName = $request->getModule();
		$moduleModel = Reports_Module_Model::getInstance($moduleName);

		$record = $request->get('record');

        if(!empty($record) && !Reports_Record_Model::isReportExists($record)) {
			throw new AppException(vtranslate('LBL_RECORD_NOT_FOUND'));
		}

		$reportModel = Reports_Record_Model::getCleanInstance($record);
		$currentUserPriviligesModel = Users_Privileges_Model::getCurrentUserPrivilegesModel();
		
		$owner = $reportModel->get('owner');
        $sharingType = $reportModel->get('sharingtype');
		
		$isRecordShared = true;
		if(($currentUserPriviligesModel->id != $owner) && $sharingType == "Private"){
			$isRecordShared = $reportModel->isRecordHasViewAccess($sharingType);
		}
		if(!$isRecordShared || !$currentUserPriviligesModel->hasModulePermission($moduleModel->getId()) || $reportModel->isCustom()) {
            throw new AppException(vtranslate('LBL_PERMISSION_DENIED'));
        }
	}
    
    function process(Vtiger_Request $request) {
		$moduleName = $request->getModule();
		$viewer = $this->getViewer($request);
		$record = $request->get('record');

		$reportModel = Reports_Record_Model::getInstanceById($record);
		$reportChartModel = Reports_Chart_Model::getInstanceById($reportModel);
		$secondaryModules = $reportModel->getSecondaryModules();

		if (!$secondaryModules) {
			$viewer->assign('CLICK_THROUGH', true);
		} else {
			$viewer->assign('CLICK_THROUGH', false);
		}

		$data = $reportChartModel->getData();
		$viewer->assign('CHART_TYPE', $reportChartModel->getChartType());
		$viewer->assign('DATA', $data);
		$viewer->assign('REPORT_MODEL', $reportModel);
		$viewer->assign('RECORD_ID', $record);
		$viewer->assign('MODULE', $moduleName);

		$viewer->view('ListViewQuickPreview.tpl', $moduleName);
	}
}
