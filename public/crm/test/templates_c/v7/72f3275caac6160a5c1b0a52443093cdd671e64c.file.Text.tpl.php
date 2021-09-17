<?php /* Smarty version Smarty-3.1.7, created on 2021-04-08 14:13:17
         compiled from "/home1/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/PurchaseOrder/uitypes/Text.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1664072676606f0f7d022b59-25061703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72f3275caac6160a5c1b0a52443093cdd671e64c' => 
    array (
      0 => '/home1/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/PurchaseOrder/uitypes/Text.tpl',
      1 => 1602587794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1664072676606f0f7d022b59-25061703',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'MODULE' => 0,
    'FIELD_NAME' => 0,
    'SPECIAL_VALIDATOR' => 0,
    'FIELD_INFO' => 0,
    'RECORD_STRUCTURE' => 0,
    'blockLabel' => 0,
    'pickList' => 0,
    'keys' => 0,
    'modl' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_606f0f7d0512c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_606f0f7d0512c')) {function content_606f0f7d0512c($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["FIELD_INFO"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo(), null, 0);?><?php $_smarty_tpl->tpl_vars["SPECIAL_VALIDATOR"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator(), null, 0);?><?php $_smarty_tpl->tpl_vars["FIELD_NAME"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name'), null, 0);?><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')=='19'||$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')=='20'){?><textarea rows="3" id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" class="inputElement textAreaElement col-lg-12 <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isNameField()){?>nameField<?php }?>" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value=="notecontent"){?>id="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
"<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)){?>data-validator='<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
'<?php }?><?php if ($_smarty_tpl->tpl_vars['FIELD_INFO']->value["mandatory"]==true){?> data-rule-required="true" <?php }?><?php if (count($_smarty_tpl->tpl_vars['FIELD_INFO']->value['validator'])){?>data-specific-rules='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value["validator"]);?>
'<?php }?>><?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue');?>
</textarea><?php }else{ ?><?php if ($_REQUEST['view']!='Detail'){?><?php $_smarty_tpl->tpl_vars['blockLabel'] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value['LBL_PO_INFORMATION'], null, 0);?><?php $_smarty_tpl->tpl_vars['fieldModel'] = new Smarty_variable($_smarty_tpl->tpl_vars['blockLabel']->value['accountid'], null, 0);?><?php $_smarty_tpl->tpl_vars['pickList'] = new Smarty_variable(array(''=>'LBL_SELECT_ADDRESS_OPTION','company'=>'LBL_COMPANY_ADDRESS','account'=>'LBL_ACCOUNT_ADDRESS','vendor'=>'LBL_VENDOR_ADDRESS','contact'=>'LBL_CONTACT_ADDRESS'), null, 0);?><?php if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value=="bill_street"){?><?php $_smarty_tpl->createLocalArrayVariable('pickList', null, 0);
$_smarty_tpl->tpl_vars['pickList']->value['bill'] = 'Shipping Address';?><div style="margin-bottom:5px;"><select id="BillingAddress" name="BillingAddress" data-target="bill" class="select2"><?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['keys'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pickList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['keys']->value = $_smarty_tpl->tpl_vars['value']->key;
?><?php if ($_smarty_tpl->tpl_vars['keys']->value=='vendor'||$_smarty_tpl->tpl_vars['keys']->value=='contact'||$_smarty_tpl->tpl_vars['keys']->value=='account'){?><?php $_smarty_tpl->tpl_vars['modl'] = new Smarty_variable(ucfirst(($_smarty_tpl->tpl_vars['keys']->value).("s")), null, 0);?><?php if (vtlib_isModuleActive($_smarty_tpl->tpl_vars['modl']->value)){?><option value="<?php echo $_smarty_tpl->tpl_vars['keys']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php }?><?php }else{ ?><option value="<?php echo $_smarty_tpl->tpl_vars['keys']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php }?><?php } ?></select></div><?php }elseif($_smarty_tpl->tpl_vars['FIELD_NAME']->value=="ship_street"){?><?php $_smarty_tpl->createLocalArrayVariable('pickList', null, 0);
$_smarty_tpl->tpl_vars['pickList']->value['ship'] = 'LBL_BILLING_ADDRESS';?><div style="margin-bottom:5px;"><select id="ShippingAddress" name="ShippingAddress" data-target="ship" class="select2" ><?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['keys'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pickList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['keys']->value = $_smarty_tpl->tpl_vars['value']->key;
?><?php if ($_smarty_tpl->tpl_vars['keys']->value=='vendor'||$_smarty_tpl->tpl_vars['keys']->value=='contact'||$_smarty_tpl->tpl_vars['keys']->value=='account'){?><?php $_smarty_tpl->tpl_vars['modl'] = new Smarty_variable(ucfirst(($_smarty_tpl->tpl_vars['keys']->value).("s")), null, 0);?><?php if (vtlib_isModuleActive($_smarty_tpl->tpl_vars['modl']->value)){?><option value="<?php echo $_smarty_tpl->tpl_vars['keys']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php }?><?php }else{ ?><option value="<?php echo $_smarty_tpl->tpl_vars['keys']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php }?><?php } ?></select></div><?php }?><?php }?><textarea rows="5" id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" class="inputElement <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isNameField()){?>nameField<?php }?>" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)){?>data-validator='<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
'<?php }?><?php if ($_smarty_tpl->tpl_vars['FIELD_INFO']->value["mandatory"]==true){?> data-rule-required="true" <?php }?><?php if (count($_smarty_tpl->tpl_vars['FIELD_INFO']->value['validator'])){?>data-specific-rules='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value["validator"]);?>
'<?php }?>><?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue');?>
</textarea><?php }?><?php }} ?>