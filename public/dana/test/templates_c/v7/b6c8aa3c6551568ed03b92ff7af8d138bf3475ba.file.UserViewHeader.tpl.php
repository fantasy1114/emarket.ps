<?php /* Smarty version Smarty-3.1.7, created on 2021-07-10 11:35:48
         compiled from "/home1/emarket/public_html/public/dana/includes/runtime/../../layouts/v7/modules/Users/UserViewHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141292904060e986140bf851-97255296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6c8aa3c6551568ed03b92ff7af8d138bf3475ba' => 
    array (
      0 => '/home1/emarket/public_html/public/dana/includes/runtime/../../layouts/v7/modules/Users/UserViewHeader.tpl',
      1 => 1625748915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141292904060e986140bf851-97255296',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD' => 0,
    'IMAGE_INFO' => 0,
    'NOIMAGE' => 0,
    'DETAILVIEW_LINKS' => 0,
    'DETAIL_VIEW_BASIC_LINK' => 0,
    'MODULE' => 0,
    'DETAIL_VIEW_LINK' => 0,
    'CURRENT_USER_MODEL' => 0,
    'MODULE_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60e986140fdad',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60e986140fdad')) {function content_60e986140fdad($_smarty_tpl) {?>



<div class="detailViewContainer"><div class="col-sm-12 col-xs-12"><div class="detailViewTitle" id="userPageHeader"><div class = "row"><div class="col-md-5"><div class="col-md-5 recordImage" style="height: 50px;width: 50px;"><?php $_smarty_tpl->tpl_vars['NOIMAGE'] = new Smarty_variable(0, null, 0);?><?php  $_smarty_tpl->tpl_vars['IMAGE_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['IMAGE_INFO']->_loop = false;
 $_smarty_tpl->tpl_vars['ITER'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['RECORD']->value->getImageDetails(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['IMAGE_INFO']->key => $_smarty_tpl->tpl_vars['IMAGE_INFO']->value){
$_smarty_tpl->tpl_vars['IMAGE_INFO']->_loop = true;
 $_smarty_tpl->tpl_vars['ITER']->value = $_smarty_tpl->tpl_vars['IMAGE_INFO']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['IMAGE_INFO']->value['url'])){?><img height="100%" width="100%" src="<?php echo $_smarty_tpl->tpl_vars['IMAGE_INFO']->value['url'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['IMAGE_INFO']->value['orgname'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['IMAGE_INFO']->value['orgname'];?>
" data-image-id="<?php echo $_smarty_tpl->tpl_vars['IMAGE_INFO']->value['id'];?>
"><?php }else{ ?><?php $_smarty_tpl->tpl_vars['NOIMAGE'] = new Smarty_variable(1, null, 0);?><?php }?><?php } ?><?php if ($_smarty_tpl->tpl_vars['NOIMAGE']->value==1){?><div class="name"><span style="font-size:24px;"><strong> <?php echo substr($_smarty_tpl->tpl_vars['RECORD']->value->getName(),0,2);?>
 </strong></span></div><?php }?></div><span class="font-x-x-large" style="margin:5px;font-size:24px"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
</span></div><div class="pull-right col-md-7 detailViewButtoncontainer"><div class="btn-group pull-right"><?php  $_smarty_tpl->tpl_vars['DETAIL_VIEW_BASIC_LINK'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['DETAIL_VIEW_BASIC_LINK']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEWBASIC']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['DETAIL_VIEW_BASIC_LINK']->key => $_smarty_tpl->tpl_vars['DETAIL_VIEW_BASIC_LINK']->value){
$_smarty_tpl->tpl_vars['DETAIL_VIEW_BASIC_LINK']->_loop = true;
?><button class="btn btn-default <?php if ($_smarty_tpl->tpl_vars['DETAIL_VIEW_BASIC_LINK']->value->getLabel()=='LBL_EDIT'){?><?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_detailView_basicAction_<?php echo Vtiger_Util_Helper::replaceSpaceWithUnderScores($_smarty_tpl->tpl_vars['DETAIL_VIEW_BASIC_LINK']->value->getLabel());?>
"<?php if ($_smarty_tpl->tpl_vars['DETAIL_VIEW_BASIC_LINK']->value->isPageLoadLink()){?>onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['DETAIL_VIEW_BASIC_LINK']->value->getUrl();?>
'"<?php }else{ ?>onclick="<?php echo $_smarty_tpl->tpl_vars['DETAIL_VIEW_BASIC_LINK']->value->getUrl();?>
"<?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['DETAIL_VIEW_BASIC_LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button><?php } ?><?php if (count($_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEW'])>0){?><button class="btn btn-default" data-toggle="dropdown" href="javascript:void(0);"><?php echo vtranslate('LBL_MORE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;<i class="caret"></i></button><ul class="dropdown-menu pull-right"><?php  $_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEW']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->key => $_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->value){
$_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->value->getLabel()=="Delete"){?><?php if ($_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->isAdminUser()&&$_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->getId()!=$_smarty_tpl->tpl_vars['RECORD']->value->getId()){?><li id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_detailView_moreAction_<?php echo Vtiger_Util_Helper::replaceSpaceWithUnderScores($_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->value->getLabel());?>
"><a href=<?php echo $_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->value->getUrl();?>
 ><?php echo vtranslate($_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a><?php }?><?php }else{ ?><li id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_detailView_moreAction_<?php echo Vtiger_Util_Helper::replaceSpaceWithUnderScores($_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->value->getLabel());?>
"><a href=<?php echo $_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->value->getUrl();?>
 ><?php echo vtranslate($_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><?php }?><?php } ?></ul><?php }?></div></div></div></div><hr/><div class="detailview-content userPreferences container-fluid"><?php $_smarty_tpl->tpl_vars["MODULE_NAME"] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'), null, 0);?><input id="recordId" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
" /><div class="details row"><?php }} ?>