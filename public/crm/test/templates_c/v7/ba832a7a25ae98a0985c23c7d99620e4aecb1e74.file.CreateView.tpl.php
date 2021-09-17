<?php /* Smarty version Smarty-3.1.7, created on 2020-11-29 06:50:59
         compiled from "/home/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/Settings/Picklist/CreateView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6767757965fc344d3e6c729-63159589%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba832a7a25ae98a0985c23c7d99620e4aecb1e74' => 
    array (
      0 => '/home/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/Settings/Picklist/CreateView.tpl',
      1 => 1602587794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6767757965fc344d3e6c729-63159589',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'SELECTED_MODULE_NAME' => 0,
    'SELECTED_PICKLIST_FIELDMODEL' => 0,
    'SELECTED_PICKLISTFIELD_ALL_VALUES' => 0,
    'QUALIFIED_MODULE' => 0,
    'HEADER_TITLE' => 0,
    'ROLES_LIST' => 0,
    'ROLE' => 0,
    'qualifiedName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fc344d3ea918',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fc344d3ea918')) {function content_5fc344d3ea918($_smarty_tpl) {?>
<div class="modalContents"><div class="modal-dialog basicCreateView"><div class='modal-content'><form name="addItemForm" class="form-horizontal" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="source_module" value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value;?>
" /><input type="hidden" name="action" value="SaveAjax" /><input type="hidden" name="mode" value="add" /><input type="hidden" name="picklistName" value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_PICKLIST_FIELDMODEL']->value->get('name');?>
" /><input type="hidden" name="pickListValues" value='<?php echo Vtiger_Util_Helper::toSafeHTML(ZEND_JSON::encode($_smarty_tpl->tpl_vars['SELECTED_PICKLISTFIELD_ALL_VALUES']->value));?>
' /><?php ob_start();?><?php echo vtranslate('LBL_ADD_ITEM_TO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo vtranslate($_smarty_tpl->tpl_vars['SELECTED_PICKLIST_FIELDMODEL']->value->get('label'),$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['HEADER_TITLE'] = new Smarty_variable((($_tmp1).(" ")).($_tmp2), null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>
<div class="modal-body"><div class="form-group"><div class="control-label col-sm-4 col-xs-4"><?php echo vtranslate('LBL_ITEM_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<span class="redColor">*</span></div><div class="controls col-sm-3 col-xs-3"><input style="min-width: 220px;" name="newValue" class="form-control select2" data-rule-required="true"/></div></div><?php if ($_smarty_tpl->tpl_vars['SELECTED_PICKLIST_FIELDMODEL']->value->isRoleBased()){?><div class="form-group"><div class="control-label col-sm-4 col-xs-4"><?php echo vtranslate('LBL_ASSIGN_TO_ROLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="input-info-addon cursorPointer"><i class="fa fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="<?php echo vtranslate('LBL_ASSIGN_TO_ROLE_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></i></span></div><div class="controls col-sm-3 col-xs-3"><select class="rolesList form-control" name="rolesSelected[]" multiple style="min-width: 220px" data-placeholder="<?php echo vtranslate('LBL_CHOOSE_ROLES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><option value="all" selected><?php echo vtranslate('LBL_ALL_ROLES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php  $_smarty_tpl->tpl_vars['ROLE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ROLE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ROLES_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ROLE']->key => $_smarty_tpl->tpl_vars['ROLE']->value){
$_smarty_tpl->tpl_vars['ROLE']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['ROLE']->value->get('roleid');?>
"><?php echo $_smarty_tpl->tpl_vars['ROLE']->value->get('rolename');?>
</option><?php } ?></select></div><div class="input-info-addon cursorPointer" style='line-height: 2;'><i class="fa fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="<?php echo vtranslate('LBL_ASSIGN_TO_ROLE_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></i></div></div><?php }?><div class="form-group"><div class="control-label col-sm-4 col-xs-4"><?php echo vtranslate('LBL_SELECT_COLOR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="controls col-sm-3 col-xs-3"><input type="hidden" name="selectedColor" /><div class="colorPicker"></div></div></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['qualifiedName']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div></div></div><?php }} ?>