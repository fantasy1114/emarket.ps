<?php /* Smarty version Smarty-3.1.7, created on 2021-07-10 11:38:22
         compiled from "/home1/emarket/public_html/public/dana/includes/runtime/../../layouts/v7/modules/Vtiger/partials/EditViewContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73528130260e986ae0a6684-55688446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37987d40c9d18028ef18aaf8bf2bf8c6f7319dc6' => 
    array (
      0 => '/home1/emarket/public_html/public/dana/includes/runtime/../../layouts/v7/modules/Vtiger/partials/EditViewContents.tpl',
      1 => 1625748915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73528130260e986ae0a6684-55688446',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PICKIST_DEPENDENCY_DATASOURCE' => 0,
    'DUPLICATE_RECORDS' => 0,
    'MODULE' => 0,
    'RECORD_STRUCTURE' => 0,
    'BLOCK_FIELDS' => 0,
    'BLOCK_LABEL' => 0,
    'FIELD_MODEL' => 0,
    'refrenceList' => 0,
    'COUNTER' => 0,
    'MASS_EDITION_MODE' => 0,
    'isReferenceField' => 0,
    'refrenceListCount' => 0,
    'DISPLAYID' => 0,
    'REFERENCED_MODULE_STRUCTURE' => 0,
    'value' => 0,
    'REFERENCED_MODULE_NAME' => 0,
    'TAXCLASS_DETAILS' => 0,
    'taxCount' => 0,
    'FILE_LOCATION_TYPE_FIELD' => 0,
    'FIELD_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60e986ae10f3c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60e986ae10f3c')) {function content_60e986ae10f3c($_smarty_tpl) {?>
<?php if (!empty($_smarty_tpl->tpl_vars['PICKIST_DEPENDENCY_DATASOURCE']->value)){?><input type="hidden" name="picklistDependency" value='<?php echo Vtiger_Util_Helper::toSafeHTML($_smarty_tpl->tpl_vars['PICKIST_DEPENDENCY_DATASOURCE']->value);?>
' /><?php }?><div name='editContent'><?php if ($_smarty_tpl->tpl_vars['DUPLICATE_RECORDS']->value){?><div class="fieldBlockContainer duplicationMessageContainer"><div class="duplicationMessageHeader"><b><?php echo vtranslate('LBL_DUPLICATES_DETECTED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</b></div><div><?php echo getDuplicatesPreventionMessage($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['DUPLICATE_RECORDS']->value);?>
</div></div><?php }?><?php  $_smarty_tpl->tpl_vars['BLOCK_FIELDS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->_loop = false;
 $_smarty_tpl->tpl_vars['BLOCK_LABEL'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->key => $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value){
$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->_loop = true;
 $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value = $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->key;
?><?php if (count($_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value)>0){?><div class='fieldBlockContainer' data-block="<?php echo $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value;?>
"><h4 class='fieldBlockHeader'><?php echo vtranslate($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h4><hr><table class="table table-borderless"><tr><?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable(0, null, 0);?><?php  $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->key => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value){
$_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_NAME']->value = $_smarty_tpl->tpl_vars['FIELD_MODEL']->key;
?><?php $_smarty_tpl->tpl_vars["isReferenceField"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType(), null, 0);?><?php $_smarty_tpl->tpl_vars['FIELD_INFO'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo(), null, 0);?><?php $_smarty_tpl->tpl_vars["refrenceList"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getReferenceList(), null, 0);?><?php $_smarty_tpl->tpl_vars["refrenceListCount"] = new Smarty_variable(count($_smarty_tpl->tpl_vars['refrenceList']->value), null, 0);?><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditable()==true){?><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')=="19"){?><?php if ($_smarty_tpl->tpl_vars['COUNTER']->value=='1'){?><td></td><td></td></tr><tr><?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable(0, null, 0);?><?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['COUNTER']->value==2){?></tr><tr><?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable(1, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable($_smarty_tpl->tpl_vars['COUNTER']->value+1, null, 0);?><?php }?><td class="fieldLabel alignMiddle"><?php if ($_smarty_tpl->tpl_vars['MASS_EDITION_MODE']->value){?><input class="inputElement" id="include_in_mass_edit_<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" data-update-field="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" type="checkbox">&nbsp;<?php }?><?php if ($_smarty_tpl->tpl_vars['isReferenceField']->value=="reference"){?><?php if ($_smarty_tpl->tpl_vars['refrenceListCount']->value>1){?><?php $_smarty_tpl->tpl_vars["DISPLAYID"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'), null, 0);?><?php $_smarty_tpl->tpl_vars["REFERENCED_MODULE_STRUCTURE"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getReferenceModule($_smarty_tpl->tpl_vars['DISPLAYID']->value), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['REFERENCED_MODULE_STRUCTURE']->value)){?><?php $_smarty_tpl->tpl_vars["REFERENCED_MODULE_NAME"] = new Smarty_variable($_smarty_tpl->tpl_vars['REFERENCED_MODULE_STRUCTURE']->value->get('name'), null, 0);?><?php }?><select style="width: 140px;" class="select2 referenceModulesList"><?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['refrenceList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['value']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['REFERENCED_MODULE_NAME']->value){?> selected <?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['value']->value);?>
</option><?php } ?></select><?php }else{ ?><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php }?><?php }elseif($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')=="83"){?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('COUNTER'=>$_smarty_tpl->tpl_vars['COUNTER']->value,'MODULE'=>$_smarty_tpl->tpl_vars['MODULE']->value), 0);?>
<?php if ($_smarty_tpl->tpl_vars['TAXCLASS_DETAILS']->value){?><?php $_smarty_tpl->tpl_vars['taxCount'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['TAXCLASS_DETAILS']->value)%2, null, 0);?><?php if ($_smarty_tpl->tpl_vars['taxCount']->value==0){?><?php if ($_smarty_tpl->tpl_vars['COUNTER']->value==2){?><?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable(1, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable(2, null, 0);?><?php }?><?php }?><?php }?><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='Documents'&&$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label')=='File Name'){?><?php $_smarty_tpl->tpl_vars['FILE_LOCATION_TYPE_FIELD'] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value['LBL_FILE_INFORMATION']['filelocationtype'], null, 0);?><?php if ($_smarty_tpl->tpl_vars['FILE_LOCATION_TYPE_FIELD']->value){?><?php if ($_smarty_tpl->tpl_vars['FILE_LOCATION_TYPE_FIELD']->value->get('fieldvalue')=='E'){?><?php echo vtranslate("LBL_FILE_URL",$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;<span class="redColor">*</span><?php }else{ ?><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php }?><?php }else{ ?><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php }?><?php }else{ ?><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php }?><?php }?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()==true){?> <span class="redColor">*</span> <?php }?></td><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')!='83'){?><td <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if (in_array($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype'),array('19','69'))||$_smarty_tpl->tpl_vars['FIELD_NAME']->value=='description'||(($_smarty_tpl->tpl_vars['FIELD_NAME']->value=='recurringtype'||$_smarty_tpl->tpl_vars['FIELD_NAME']->value=='reminder_time')&&in_array($_tmp1,array('Events','Calendar')))){?> class="fieldValue fieldValueWidth80"  colspan="3" <?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable($_smarty_tpl->tpl_vars['COUNTER']->value+1, null, 0);?> <?php }elseif($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')=='56'){?> class="fieldValue checkBoxType" <?php }elseif($_smarty_tpl->tpl_vars['isReferenceField']->value=='reference'||$_smarty_tpl->tpl_vars['isReferenceField']->value=='multireference'){?> class="fieldValue p-t-8" <?php }else{ ?>class="fieldValue" <?php }?>><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td><?php }?><?php }?><?php } ?><?php if ((1 & $_smarty_tpl->tpl_vars['COUNTER']->value)){?><td></td><td></td><?php }?></tr></table></div><?php }?><?php } ?></div>
<?php }} ?>