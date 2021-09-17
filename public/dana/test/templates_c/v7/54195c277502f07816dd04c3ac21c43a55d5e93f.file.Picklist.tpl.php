<?php /* Smarty version Smarty-3.1.7, created on 2021-07-10 11:35:03
         compiled from "/home1/emarket/public_html/public/dana/includes/runtime/../../layouts/v7/modules/Users/uitypes/Picklist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126039048360e985e73f7558-31856814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54195c277502f07816dd04c3ac21c43a55d5e93f' => 
    array (
      0 => '/home1/emarket/public_html/public/dana/includes/runtime/../../layouts/v7/modules/Users/uitypes/Picklist.tpl',
      1 => 1625748915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126039048360e985e73f7558-31856814',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'FIELD_INFO' => 0,
    'EVENT_MODULE' => 0,
    'EVENTSTATUS_FIELD_MODEL' => 0,
    'ACTIVITYTYPE_FIELD_MODEL' => 0,
    'OCCUPY_COMPLETE_WIDTH' => 0,
    'SPECIAL_VALIDATOR' => 0,
    'PICKLIST_VALUES' => 0,
    'PICKLIST_NAME' => 0,
    'MODULE' => 0,
    'OPTION_VALUE' => 0,
    'PICKLIST_VALUE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60e985e741284',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60e985e741284')) {function content_60e985e741284($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['FIELD_INFO'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo(), null, 0);?><?php $_smarty_tpl->tpl_vars['PICKLIST_VALUES'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_INFO']->value['picklistvalues'], null, 0);?><?php $_smarty_tpl->tpl_vars["SPECIAL_VALIDATOR"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName()=='defaulteventstatus'){?><?php $_smarty_tpl->tpl_vars['EVENT_MODULE'] = new Smarty_variable(Vtiger_Module_Model::getInstance('Events'), null, 0);?><?php $_smarty_tpl->tpl_vars['EVENTSTATUS_FIELD_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['EVENT_MODULE']->value->getField('eventstatus'), null, 0);?><?php $_smarty_tpl->tpl_vars['PICKLIST_VALUES'] = new Smarty_variable($_smarty_tpl->tpl_vars['EVENTSTATUS_FIELD_MODEL']->value->getPicklistValues(), null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName()=='defaultactivitytype'){?><?php $_smarty_tpl->tpl_vars['EVENT_MODULE'] = new Smarty_variable(Vtiger_Module_Model::getInstance('Events'), null, 0);?><?php $_smarty_tpl->tpl_vars['ACTIVITYTYPE_FIELD_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['EVENT_MODULE']->value->getField('activitytype'), null, 0);?><?php $_smarty_tpl->tpl_vars['PICKLIST_VALUES'] = new Smarty_variable($_smarty_tpl->tpl_vars['ACTIVITYTYPE_FIELD_MODEL']->value->getPicklistValues(), null, 0);?><?php }?><select data-fieldname="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
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
?><?php if ($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value==' '&&($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name')=='currency_decimal_separator'||$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name')=='currency_grouping_separator')){?><?php $_smarty_tpl->tpl_vars['PICKLIST_VALUE'] = new Smarty_variable(vtranslate('Space',$_smarty_tpl->tpl_vars['MODULE']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['OPTION_VALUE'] = new Smarty_variable('&nbsp;', null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['OPTION_VALUE'] = new Smarty_variable(Vtiger_Util_Helper::toSafeHTML($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value), null, 0);?><?php }?><option value="<?php echo $_smarty_tpl->tpl_vars['OPTION_VALUE']->value;?>
" <?php if (decode_html($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'))==decode_html($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value)){?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value;?>
</option><?php } ?></select><?php }} ?>