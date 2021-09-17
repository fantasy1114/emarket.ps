<?php /* Smarty version Smarty-3.1.7, created on 2021-03-06 18:41:54
         compiled from "/home/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/Settings/Vtiger/ConfigEditorEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3831622686043ccf207cf49-79952553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8440b802529bb302a1d9ccc891c3639e52a9ccfc' => 
    array (
      0 => '/home/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/Settings/Vtiger/ConfigEditorEdit.tpl',
      1 => 1602587794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3831622686043ccf207cf49-79952553',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODEL' => 0,
    'CURRENT_USER_MODEL' => 0,
    'QUALIFIED_MODULE' => 0,
    'FIELD_NAME' => 0,
    'FIELD_DATA' => 0,
    'FIELD_DETAILS' => 0,
    'WIDTHTYPE' => 0,
    'optionLabel' => 0,
    'optionName' => 0,
    'FIELD_VALIDATION' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6043ccf211a47',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6043ccf211a47')) {function content_6043ccf211a47($_smarty_tpl) {?>
<div class="editViewPageDiv " id="editViewContent"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 "><div class="contents"><form id="ConfigEditorForm" class="form-horizontal" data-detail-url="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getDetailViewUrl();?>
" method="POST"><?php $_smarty_tpl->tpl_vars['WIDTHTYPE'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('rowheight'), null, 0);?><?php $_smarty_tpl->tpl_vars['FIELD_VALIDATION'] = new Smarty_variable(array('HELPDESK_SUPPORT_EMAIL_ID'=>'data-rule-email="true"','upload_maxsize'=>'data-rule-range=[1,5] data-rule-positive="true" data-rule-wholeNumber="true"','history_max_viewed'=>'data-rule-range=[1,5] data-rule-positive="true" data-rule-wholeNumber="true"','listview_max_textlength'=>'data-rule-range=[1,100] data-rule-positive="true" data-rule-wholeNumber="true"','list_max_entries_per_page'=>'data-rule-range=[1,100] data-rule-positive="true" data-rule-wholeNumber="true"'), null, 0);?><div><h4><?php echo vtranslate('LBL_CONFIG_EDITOR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h4></div><hr><br><div class="detailViewInfo"><?php $_smarty_tpl->tpl_vars['FIELD_DATA'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODEL']->value->getViewableData(), null, 0);?><?php  $_smarty_tpl->tpl_vars['FIELD_DETAILS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_DETAILS']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['MODEL']->value->getEditableFields(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_DETAILS']->key => $_smarty_tpl->tpl_vars['FIELD_DETAILS']->value){
$_smarty_tpl->tpl_vars['FIELD_DETAILS']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_NAME']->value = $_smarty_tpl->tpl_vars['FIELD_DETAILS']->key;
?><div class="row form-group"><div class="col-lg-4 control-label fieldLabel"><label><?php if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value=='upload_maxsize'){?><?php if ($_smarty_tpl->tpl_vars['FIELD_DATA']->value[$_smarty_tpl->tpl_vars['FIELD_NAME']->value]>5){?><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_DETAILS']->value['label'],$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,$_smarty_tpl->tpl_vars['FIELD_DATA']->value[$_smarty_tpl->tpl_vars['FIELD_NAME']->value]);?>
<?php }else{ ?><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_DETAILS']->value['label'],$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,5);?>
<?php }?><?php }else{ ?><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_DETAILS']->value['label'],$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }?></label></div><div  class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
  col-lg-4 input-group"><?php if ($_smarty_tpl->tpl_vars['FIELD_DETAILS']->value['fieldType']=='picklist'){?><select class="select2-container inputElement select2 col-lg-11" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" ><?php  $_smarty_tpl->tpl_vars['optionLabel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['optionLabel']->_loop = false;
 $_smarty_tpl->tpl_vars['optionName'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['MODEL']->value->getPicklistValues($_smarty_tpl->tpl_vars['FIELD_NAME']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['optionLabel']->key => $_smarty_tpl->tpl_vars['optionLabel']->value){
$_smarty_tpl->tpl_vars['optionLabel']->_loop = true;
 $_smarty_tpl->tpl_vars['optionName']->value = $_smarty_tpl->tpl_vars['optionLabel']->key;
?><?php if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value!='default_reply_to'){?><option <?php if ($_smarty_tpl->tpl_vars['optionLabel']->value==$_smarty_tpl->tpl_vars['FIELD_DATA']->value[$_smarty_tpl->tpl_vars['FIELD_NAME']->value]){?> selected <?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['optionLabel']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php }elseif($_smarty_tpl->tpl_vars['FIELD_NAME']->value=='default_reply_to'){?><option value="<?php echo $_smarty_tpl->tpl_vars['optionName']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['optionName']->value==$_smarty_tpl->tpl_vars['FIELD_DATA']->value[$_smarty_tpl->tpl_vars['FIELD_NAME']->value]){?> selected <?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['optionName']->value);?>
</option><?php }else{ ?><option value="<?php echo $_smarty_tpl->tpl_vars['optionName']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['optionLabel']->value==$_smarty_tpl->tpl_vars['FIELD_DATA']->value[$_smarty_tpl->tpl_vars['FIELD_NAME']->value]){?> selected <?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['optionLabel']->value,$_smarty_tpl->tpl_vars['optionLabel']->value);?>
</option><?php }?><?php } ?></select><?php if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value=='default_reply_to'){?><div class="input-group-addon input-select-addon"><i class="fa fa-info-circle" data-toggle="tooltip" data-placement="right" title="<?php echo vtranslate('LBL_DEFAULT_REPLY_TO_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></i></div><?php }?><?php }elseif($_smarty_tpl->tpl_vars['FIELD_NAME']->value=='USE_RTE'){?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" value="false" /><div class=" "> <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" value="true" <?php if ($_smarty_tpl->tpl_vars['FIELD_DATA']->value[$_smarty_tpl->tpl_vars['FIELD_NAME']->value]=='true'){?> checked <?php }?> /></div><?php }elseif($_smarty_tpl->tpl_vars['FIELD_NAME']->value=='email_tracking'){?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" value="No" /><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" value="Yes" <?php if ($_smarty_tpl->tpl_vars['FIELD_DATA']->value[$_smarty_tpl->tpl_vars['FIELD_NAME']->value]=="Yes"){?> checked <?php }?> /><div class="input-info-addon"> <i class="fa fa-question-circle"  data-toggle="tooltip" data-placement="right" title="<?php echo vtranslate('LBL_PERSONAL_EMAIL_TRACKING_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></i></div><?php }else{ ?><div class=" input-group inputElement"><input type="text" class="inputElement "  name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" data-rule-required="true" <?php if ($_smarty_tpl->tpl_vars['FIELD_VALIDATION']->value[$_smarty_tpl->tpl_vars['FIELD_NAME']->value]){?> <?php echo $_smarty_tpl->tpl_vars['FIELD_VALIDATION']->value[$_smarty_tpl->tpl_vars['FIELD_NAME']->value];?>
 <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['FIELD_DATA']->value[$_smarty_tpl->tpl_vars['FIELD_NAME']->value];?>
" /><?php if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value=='upload_maxsize'){?><div class="input-group-addon"><?php echo vtranslate('LBL_MB',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><?php }?></div><?php }?></div></div><?php } ?></div><div class='modal-overlay-footer clearfix'><div class=" row clearfix"><div class=' textAlignCenter col-lg-12 col-md-12 col-sm-12 '><button type='submit' class='btn btn-success saveButton'  ><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button>&nbsp;&nbsp;<a class='cancelLink' type="reset"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div></div></div></form></div></div></div>

<?php }} ?>