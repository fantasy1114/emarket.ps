<?php /* Smarty version Smarty-3.1.7, created on 2021-04-26 19:55:21
         compiled from "/home1/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/SalesOrder/SummaryViewWidgets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175898784760871aa96fce14-93562551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5489a0236740ba71f064cd113b0c64d4993c7e8f' => 
    array (
      0 => '/home1/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/SalesOrder/SummaryViewWidgets.tpl',
      1 => 1602587794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175898784760871aa96fce14-93562551',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DETAILVIEW_LINKS' => 0,
    'DETAIL_VIEW_WIDGET' => 0,
    'MODULE_NAME' => 0,
    'MODULE_SUMMARY' => 0,
    'DOCUMENT_WIDGET_MODEL' => 0,
    'RECORD' => 0,
    'PARENT_ID' => 0,
    'RELATED_ACTIVITIES' => 0,
    'COMMENTS_WIDGET_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60871aa971bae',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60871aa971bae')) {function content_60871aa971bae($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEWWIDGET']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->key => $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value){
$_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->_loop = true;
?><?php if (($_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value->getLabel()=='Documents')){?><?php $_smarty_tpl->tpl_vars['DOCUMENT_WIDGET_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value, null, 0);?><?php }elseif(($_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value->getLabel()=='ModComments')){?><?php $_smarty_tpl->tpl_vars['COMMENTS_WIDGET_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value, null, 0);?><?php }?><?php } ?><div class="left-block col-lg-5"><div class="summaryView"><div class="summaryViewHeader"><h4><?php echo vtranslate('LBL_KEY_FIELDS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h4></div><div class="summaryViewFields"><?php echo $_smarty_tpl->tpl_vars['MODULE_SUMMARY']->value;?>
</div></div><?php if ($_smarty_tpl->tpl_vars['DOCUMENT_WIDGET_MODEL']->value){?><div class="summaryWidgetContainer"><div class="widgetContainer_documents" data-url="<?php echo $_smarty_tpl->tpl_vars['DOCUMENT_WIDGET_MODEL']->value->getUrl();?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['DOCUMENT_WIDGET_MODEL']->value->getLabel();?>
"><div class="widget_header clearfix"><input type="hidden" name="relatedModule" value="<?php echo $_smarty_tpl->tpl_vars['DOCUMENT_WIDGET_MODEL']->value->get('linkName');?>
" /><span class="toggleButton pull-left"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;</span><h3 class="display-inline-block pull-left"><?php echo vtranslate($_smarty_tpl->tpl_vars['DOCUMENT_WIDGET_MODEL']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h3><?php if ($_smarty_tpl->tpl_vars['DOCUMENT_WIDGET_MODEL']->value->get('action')){?><?php $_smarty_tpl->tpl_vars['PARENT_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD']->value->getId(), null, 0);?><div class="pull-right"><div class="dropdown"><button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="fa fa-plus" title="<?php echo vtranslate('LBL_NEW_DOCUMENT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span>&nbsp;<?php echo vtranslate('LBL_NEW_DOCUMENT','Documents');?>
&nbsp; <span class="caret"></span></button><ul class="dropdown-menu"><li class="dropdown-header"><i class="fa fa-upload"></i> <?php echo vtranslate('LBL_FILE_UPLOAD','Documents');?>
</li><li id="VtigerAction"><a href="javascript:Documents_Index_Js.uploadTo('Vtiger',<?php echo $_smarty_tpl->tpl_vars['PARENT_ID']->value;?>
,'<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
')"><img style="  margin-top: -3px;margin-right: 4%;" title="Vtiger" alt="Vtiger" src="layouts/v7/skins//images/Vtiger.png"><?php ob_start();?><?php echo vtranslate('LBL_VTIGER','Documents');?>
<?php $_tmp1=ob_get_clean();?><?php echo vtranslate('LBL_TO_SERVICE','Documents',$_tmp1);?>
</a></li><li role="separator" class="divider"></li><li class="dropdown-header"><i class="fa fa-link"></i> <?php echo vtranslate('LBL_LINK_EXTERNAL_DOCUMENT','Documents');?>
</li><li id="shareDocument"><a href="javascript:Documents_Index_Js.createDocument('E',<?php echo $_smarty_tpl->tpl_vars['PARENT_ID']->value;?>
,'<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
')">&nbsp;<i class="fa fa-external-link"></i>&nbsp;&nbsp; <?php ob_start();?><?php echo vtranslate('LBL_FILE_URL','Documents');?>
<?php $_tmp2=ob_get_clean();?><?php echo vtranslate('LBL_FROM_SERVICE','Documents',$_tmp2);?>
</a></li><li role="separator" class="divider"></li><li id="createDocument"><a href="javascript:Documents_Index_Js.createDocument('W',<?php echo $_smarty_tpl->tpl_vars['PARENT_ID']->value;?>
,'<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
')"><i class="fa fa-file-text"></i> <?php ob_start();?><?php echo vtranslate('SINGLE_Documents','Documents');?>
<?php $_tmp3=ob_get_clean();?><?php echo vtranslate('LBL_CREATE_NEW','Documents',$_tmp3);?>
</a></li></ul></div></div><?php }?></div><div class="widget_contents"></div></div></div><?php }?></div><div class="middle-block col-lg-7"><div id="relatedActivities"><?php echo $_smarty_tpl->tpl_vars['RELATED_ACTIVITIES']->value;?>
</div><?php if ($_smarty_tpl->tpl_vars['COMMENTS_WIDGET_MODEL']->value){?><div class="summaryWidgetContainer"><div class="widgetContainer_comments" data-url="<?php echo $_smarty_tpl->tpl_vars['COMMENTS_WIDGET_MODEL']->value->getUrl();?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['COMMENTS_WIDGET_MODEL']->value->getLabel();?>
"><div class="widget_header"><input type="hidden" name="relatedModule" value="<?php echo $_smarty_tpl->tpl_vars['COMMENTS_WIDGET_MODEL']->value->get('linkName');?>
" /><h3 class="display-inline-block"><?php echo vtranslate($_smarty_tpl->tpl_vars['COMMENTS_WIDGET_MODEL']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h3></div><div class="widget_contents"></div></div></div><?php }?></div><?php }} ?>