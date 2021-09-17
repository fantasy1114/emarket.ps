<?php /* Smarty version Smarty-3.1.7, created on 2020-11-29 06:21:30
         compiled from "/home/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/Picklist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20068415545fc33deade42e0-41362701%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25e739b05b595921f4473595bf3708149815046f' => 
    array (
      0 => '/home/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/Picklist.tpl',
      1 => 1602587794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20068415545fc33deade42e0-41362701',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'FIELD_INFO' => 0,
    'OCCUPY_COMPLETE_WIDTH' => 0,
    'SPECIAL_VALIDATOR' => 0,
    'PICKLIST_VALUES' => 0,
    'PICKLIST_NAME' => 0,
    'PICKLIST_COLORS' => 0,
    'CLASS_NAME' => 0,
    'PICKLIST_VALUE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fc33deae4cfa',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fc33deae4cfa')) {function content_5fc33deae4cfa($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/emarket/public_html/public/crm/libraries/Smarty/libs/plugins/modifier.replace.php';
?>

<?php $_smarty_tpl->tpl_vars["FIELD_INFO"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo(), null, 0);?><?php $_smarty_tpl->tpl_vars["SPECIAL_VALIDATOR"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator(), null, 0);?><?php $_smarty_tpl->tpl_vars['PICKLIST_VALUES'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_INFO']->value['editablepicklistvalues'], null, 0);?><?php $_smarty_tpl->tpl_vars['PICKLIST_COLORS'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_INFO']->value['picklistColors'], null, 0);?><select data-fieldname="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" data-fieldtype="picklist" class="inputElement select2 <?php if ($_smarty_tpl->tpl_vars['OCCUPY_COMPLETE_WIDTH']->value){?> row <?php }?>" type="picklist" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)){?>data-validator='<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
'<?php }?> data-selected-value='<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue');?>
'<?php if ($_smarty_tpl->tpl_vars['FIELD_INFO']->value["mandatory"]==true){?> data-rule-required="true" <?php }?><?php if (count($_smarty_tpl->tpl_vars['FIELD_INFO']->value['validator'])){?>data-specific-rules='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value["validator"]);?>
'<?php }?>><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEmptyPicklistOptionAllowed()){?><option value=""><?php echo vtranslate('LBL_SELECT_OPTION','Vtiger');?>
</option><?php }?><?php  $_smarty_tpl->tpl_vars['PICKLIST_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['PICKLIST_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->key => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value){
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['PICKLIST_NAME']->value = $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->key;
?><?php ob_start();?><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value,' ','_');?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['CLASS_NAME'] = new Smarty_variable("picklistColor_".($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName())."_".$_tmp1, null, 0);?><option value="<?php echo Vtiger_Util_Helper::toSafeHTML($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['PICKLIST_COLORS']->value[$_smarty_tpl->tpl_vars['PICKLIST_NAME']->value]){?>class="<?php echo $_smarty_tpl->tpl_vars['CLASS_NAME']->value;?>
"<?php }?> <?php if (trim(decode_html($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue')))==trim($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value)){?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value;?>
</option><?php } ?></select><?php if ($_smarty_tpl->tpl_vars['PICKLIST_COLORS']->value){?><style type="text/css"><?php  $_smarty_tpl->tpl_vars['PICKLIST_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['PICKLIST_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->key => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value){
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['PICKLIST_NAME']->value = $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->key;
?><?php ob_start();?><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value,' ','_');?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['CLASS_NAME'] = new Smarty_variable(($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName())."_".$_tmp2, null, 0);?>.picklistColor_<?php echo $_smarty_tpl->tpl_vars['CLASS_NAME']->value;?>
 {background-color: <?php echo $_smarty_tpl->tpl_vars['PICKLIST_COLORS']->value[$_smarty_tpl->tpl_vars['PICKLIST_NAME']->value];?>
 !important;<?php if ($_smarty_tpl->tpl_vars['PICKLIST_COLORS']->value[$_smarty_tpl->tpl_vars['PICKLIST_NAME']->value]=='#ffffff'){?>color: #000000 !important;<?php }?>}.picklistColor_<?php echo $_smarty_tpl->tpl_vars['CLASS_NAME']->value;?>
.select2-highlighted {white: #ffffff !important;background-color: #337ab7 !important;}<?php } ?></style><?php }?>
<?php }} ?>