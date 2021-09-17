<?php /* Smarty version Smarty-3.1.7, created on 2021-05-23 15:44:52
         compiled from "/home1/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/Settings/LayoutEditor/DuplicateHandling.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143201916160aa78741eea88-82487488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbc509fbc440823a08ddfb99ab5142d5840fc502' => 
    array (
      0 => '/home1/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/Settings/LayoutEditor/DuplicateHandling.tpl',
      1 => 1602587794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143201916160aa78741eea88-82487488',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SOURCE' => 0,
    'SOURCE_MODULE' => 0,
    'QUALIFIED_MODULE' => 0,
    'SOURCE_MODULE_MODEL' => 0,
    'FIELDS' => 0,
    'BLOCK_LABEL' => 0,
    'FIELD_MODELS' => 0,
    'FIELD_MODEL' => 0,
    'ACTIONS' => 0,
    'ACTION_ID' => 0,
    'ACTION_NAME' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60aa7874241a2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60aa7874241a2')) {function content_60aa7874241a2($_smarty_tpl) {?>

<div class="duplicateHandlingDiv padding20"><form class="duplicateHandlingForm"><input type="hidden" name="_source" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE']->value;?>
" /><input type="hidden" name="sourceModule" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
" id="sourceModule" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="module" value="LayoutEditor" /><input type="hidden" name="action" value="Field" /><input type="hidden" name="mode" value="updateDuplicateHandling" /><div><div class="vt-default-callout vt-info-callout"><h4 class="vt-callout-header"><span class="fa fa-info-circle"></span>&nbsp; Info </h4><div class="duplicationInfoMessage"><?php echo vtranslate('LBL_DUPLICATION_INFO_MESSAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></div></div><br><div class="row"><div class="col-lg-12"><div class="col-lg-2 marginTop5px"><?php echo vtranslate('LBL_DUPLICATE_CHECK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div><input type="hidden" class="rule" name="rule" value=""><input type="checkbox" class="duplicateCheck" data-on-color="success" data-off-color="danger" data-current-rule="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE_MODEL']->value->allowDuplicates;?>
" <?php if (!$_smarty_tpl->tpl_vars['SOURCE_MODULE_MODEL']->value->isFieldsDuplicateCheckAllowed()){?>readonly="readonly"<?php }?>data-on-text="<?php echo vtranslate('LBL_YES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" data-off-text="<?php echo vtranslate('LBL_NO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /></div></div></div><br><br><div class="duplicateHandlingContainer show col-lg-12"><div class="fieldsBlock"><div><b><?php echo vtranslate('LBL_SELECT_FIELDS_FOR_DUPLICATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></div><br><select class="col-lg-7 select" id="fieldsList" multiple name="fieldIdsList[]" data-placeholder="<?php echo vtranslate('LBL_SELECT_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" data-rule-required="true" ><?php  $_smarty_tpl->tpl_vars['FIELD_MODELS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_MODELS']->_loop = false;
 $_smarty_tpl->tpl_vars['BLOCK_LABEL'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODELS']->key => $_smarty_tpl->tpl_vars['FIELD_MODELS']->value){
$_smarty_tpl->tpl_vars['FIELD_MODELS']->_loop = true;
 $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value = $_smarty_tpl->tpl_vars['FIELD_MODELS']->key;
?><optgroup label='<?php echo vtranslate($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value,$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
'><?php  $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['FIELD_MODELS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->key => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value){
$_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY']->value = $_smarty_tpl->tpl_vars['FIELD_MODEL']->key;
?><option <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isUniqueField()){?>selected=""<?php }?> value=<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getId();?>
><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
</option><?php } ?></optgroup><?php } ?></select><div class="col-lg-5 marginTop5px marginLeftZero"><b>&nbsp;&nbsp;<?php echo vtranslate('LBL_MAX_3_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></div></div><br><br><br><?php if ($_smarty_tpl->tpl_vars['SOURCE_MODULE_MODEL']->value->isSyncable){?><div class="ruleBlock"><div><b><?php echo vtranslate('LBL_DUPLICATES_IN_SYNC_MESSAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></div><br><div><select class="select actionsList" name="syncActionId"><?php  $_smarty_tpl->tpl_vars['ACTION_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ACTION_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['ACTION_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ACTIONS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ACTION_NAME']->key => $_smarty_tpl->tpl_vars['ACTION_NAME']->value){
$_smarty_tpl->tpl_vars['ACTION_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['ACTION_ID']->value = $_smarty_tpl->tpl_vars['ACTION_NAME']->key;
?><option <?php if ($_smarty_tpl->tpl_vars['SOURCE_MODULE_MODEL']->value->syncActionForDuplicate==$_smarty_tpl->tpl_vars['ACTION_ID']->value){?>selected=""<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['ACTION_ID']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['ACTION_NAME']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php } ?></select><span class="input-info-addon syncMessage"><a class="fa fa-info-circle" data-toggle="tooltip" data-html="true" data-placement="right" title="<?php echo vtranslate('LBL_SYNC_TOOLTIP_MESSAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></a></span></div></div><br><br><?php }?><div class="formFooter hide"><button class="btn btn-success" type="submit" name="saveButton"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><a class="cancelLink" type="reset" data-dismiss="modal"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div></div></form></div><?php }} ?>