<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

class PriceBooks_ProductListPrice_Action extends Vtiger_Action_Controller {

	public function requiresPermission(Vtiger_Request $request){
		$permissions = parent::requiresPermission($request);
		$permissions[] = array('module_parameter' => 'module', 'action' => 'DetailView', 'record_parameter' => 'record');
		
		return $permissions;
	}

	function process(Vtiger_Request $request) {
		$recordId = $request->get('record');
		$moduleModel = $request->getModule();
		$priceBookModel = Vtiger_Record_Model::getInstanceById($recordId, $moduleModel);
		$listPrice = $priceBookModel->getProductsListPrice($request->get('itemId'));
		if (empty($listPrice)) $listPrice = 0; /* Selected product not in pricebook */

		$response = new Vtiger_Response();
		$response->setResult(array($listPrice));
		$response->emit();
	}
}

?>
