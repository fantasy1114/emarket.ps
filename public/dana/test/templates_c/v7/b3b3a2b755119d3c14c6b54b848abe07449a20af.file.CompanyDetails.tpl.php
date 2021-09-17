<?php /* Smarty version Smarty-3.1.7, created on 2021-07-10 11:46:47
         compiled from "/home1/emarket/public_html/public/dana/includes/runtime/../../layouts/v7/modules/Settings/Vtiger/CompanyDetails.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197951239060e988a7eb0bf2-00627050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3b3a2b755119d3c14c6b54b848abe07449a20af' => 
    array (
      0 => '/home1/emarket/public_html/public/dana/includes/runtime/../../layouts/v7/modules/Settings/Vtiger/CompanyDetails.tpl',
      1 => 1625748915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197951239060e988a7eb0bf2-00627050',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'CURRENT_USER_MODEL' => 0,
    'ERROR_MESSAGE' => 0,
    'MODULE_MODEL' => 0,
    'FIELD' => 0,
    'WIDTHTYPE' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60e988a7eeefb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60e988a7eeefb')) {function content_60e988a7eeefb($_smarty_tpl) {?>




<div class=" col-lg-12 col-md-12 col-sm-12"><input type="hidden" id="supportedImageFormats" value='<?php echo ZEND_JSON::encode(Settings_Vtiger_CompanyDetails_Model::$logoSupportedFormats);?>
' /><div class="clearfix"><div class="btn-group pull-right editbutton-container"><button id="updateCompanyDetails" class="btn btn-default "><?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></div><?php $_smarty_tpl->tpl_vars['WIDTHTYPE'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('rowheight'), null, 0);?><div id="CompanyDetailsContainer" class=" detailViewContainer <?php if (!empty($_smarty_tpl->tpl_vars['ERROR_MESSAGE']->value)){?>hide<?php }?>" ><div class="block"><div><h4><?php echo vtranslate('LBL_COMPANY_LOGO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h4></div><hr><div class="blockData"><table class="table detailview-table no-border"><tbody><tr><td class="fieldLabel"><div class="companyLogo"><?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getLogoPath()){?><img src="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getLogoPath();?>
" class="alignMiddle" style="max-width:700px;"/><?php }else{ ?><?php echo vtranslate('LBL_NO_LOGO_EDIT_AND_UPLOAD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }?></div></td></tr></tbody></table></div></div><br><div class="block"><div><h4><?php echo vtranslate('LBL_COMPANY_INFORMATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h4></div><hr><div class="blockData"><table class="table detailview-table no-border"><tbody><?php  $_smarty_tpl->tpl_vars['FIELD_TYPE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_TYPE']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getFields(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_TYPE']->key => $_smarty_tpl->tpl_vars['FIELD_TYPE']->value){
$_smarty_tpl->tpl_vars['FIELD_TYPE']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD']->value = $_smarty_tpl->tpl_vars['FIELD_TYPE']->key;
?><?php if ($_smarty_tpl->tpl_vars['FIELD']->value!='logoname'&&$_smarty_tpl->tpl_vars['FIELD']->value!='logo'){?><tr><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 fieldLabel" style="width:25%"><label ><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" style="word-wrap:break-word;"><?php if ($_smarty_tpl->tpl_vars['FIELD']->value=='address'){?> <?php echo nl2br(decode_html($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get($_smarty_tpl->tpl_vars['FIELD']->value)));?>
 <?php }else{ ?> <?php echo decode_html($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get($_smarty_tpl->tpl_vars['FIELD']->value));?>
 <?php }?></td></tr><?php }?><?php } ?></tbody></table></div></div></div><div class="editViewContainer"><form class="form-horizontal <?php if (empty($_smarty_tpl->tpl_vars['ERROR_MESSAGE']->value)){?>hide<?php }?>" id="updateCompanyDetailsForm" method="post" action="index.php" enctype="multipart/form-data"><input type="hidden" name="module" value="Vtiger" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="action" value="CompanyDetailsSave" /><div class="form-group companydetailsedit"><label class="col-sm-2 fieldLabel control-label"> <?php echo vtranslate('LBL_COMPANY_LOGO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="fieldValue col-sm-5" ><div class="company-logo-content"><img src="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getLogoPath();?>
" class="alignMiddle" style="max-width:700px;"/><br><hr><input type="file" name="logo" id="logoFile" /></div><br><div class="alert alert-info" ><?php echo vtranslate('LBL_LOGO_RECOMMENDED_MESSAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></div></div><?php  $_smarty_tpl->tpl_vars['FIELD_TYPE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_TYPE']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getFields(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_TYPE']->key => $_smarty_tpl->tpl_vars['FIELD_TYPE']->value){
$_smarty_tpl->tpl_vars['FIELD_TYPE']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD']->value = $_smarty_tpl->tpl_vars['FIELD_TYPE']->key;
?><?php if ($_smarty_tpl->tpl_vars['FIELD']->value!='logoname'&&$_smarty_tpl->tpl_vars['FIELD']->value!='logo'){?><div class="form-group companydetailsedit"><label class="col-sm-2 fieldLabel control-label "><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php if ($_smarty_tpl->tpl_vars['FIELD']->value=='organizationname'){?>&nbsp;<span class="redColor">*</span><?php }?></label><div class="fieldValue col-sm-5"><?php if ($_smarty_tpl->tpl_vars['FIELD']->value=='address'){?><textarea class="form-control col-sm-6 resize-vertical" rows="2" name="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get($_smarty_tpl->tpl_vars['FIELD']->value);?>
</textarea><?php }elseif($_smarty_tpl->tpl_vars['FIELD']->value=='website'){?><input type="text" class="inputElement" data-rule-url="true" name="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get($_smarty_tpl->tpl_vars['FIELD']->value);?>
"/><?php }else{ ?><input type="text" <?php if ($_smarty_tpl->tpl_vars['FIELD']->value=='organizationname'){?> data-rule-required="true" <?php }?> class="inputElement" name="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get($_smarty_tpl->tpl_vars['FIELD']->value);?>
"/><?php }?></div></div><?php }?><?php } ?><div class="modal-overlay-footer clearfix"><div class="row clearfix"><div class="textAlignCenter col-lg-12 col-md-12 col-sm-12"><button type="submit" class="btn btn-success saveButton"><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button>&nbsp;&nbsp;<a class="cancelLink" data-dismiss="modal" href="#"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div></div></div></form></div></div></div>
<?php }} ?>