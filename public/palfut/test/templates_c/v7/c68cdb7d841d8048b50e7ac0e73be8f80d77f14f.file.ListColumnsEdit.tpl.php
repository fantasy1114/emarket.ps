<?php /* Smarty version Smarty-3.1.7, created on 2021-05-07 10:52:42
         compiled from "/home1/emarket/public_html/public/palfut/includes/runtime/../../layouts/v7/modules/Vtiger/ListColumnsEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199805421360951bfa1c92b4-29283745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c68cdb7d841d8048b50e7ac0e73be8f80d77f14f' => 
    array (
      0 => '/home1/emarket/public_html/public/palfut/includes/runtime/../../layouts/v7/modules/Vtiger/ListColumnsEdit.tpl',
      1 => 1602587794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199805421360951bfa1c92b4-29283745',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'HEADER_TITLE' => 0,
    'CV_MODEL' => 0,
    'QUALIFIED_MODULE' => 0,
    'SELECTED_FIELDS' => 0,
    'FIELD_MODEL' => 0,
    'FIELD_MODULE_NAME' => 0,
    'RECORD_STRUCTURE' => 0,
    'RAND_ID' => 0,
    'BLOCK_LABEL' => 0,
    'SOURCE_MODULE' => 0,
    'BLOCK_FIELDS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60951bfa218f2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60951bfa218f2')) {function content_60951bfa218f2($_smarty_tpl) {?>

<div class="modal-dialog modal-lg configColumnsContainer"><div class="modal-content"><?php ob_start();?><?php echo vtranslate('LBL_CONFIG_COLUMNS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['HEADER_TITLE'] = new Smarty_variable($_tmp1, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>(($_smarty_tpl->tpl_vars['HEADER_TITLE']->value).(' - ')).($_smarty_tpl->tpl_vars['CV_MODEL']->value->get('viewname'))), 0);?>
<form class="form-horizontal configColumnsForm" method="post" action="index.php"><input type="hidden" name="module" value="CustomView"/><input type="hidden" name="action" value="SaveAjax"/><input type="hidden" name="mode" value="updateColumns"/><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['CV_MODEL']->value->getId();?>
" /><div class="modal-body"><div class="row"><div class="col-lg-6 selectedFieldsContainer"><h5><?php echo vtranslate('LBL_SELECTED_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><div class="selectedFieldsListContainer"><ul id="selectedFieldsList"><?php  $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SELECTED_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->key => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value){
$_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value&&$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayType()!='6'){?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModule()->getName();?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['FIELD_MODULE_NAME'] = new Smarty_variable($_tmp2, null, 0);?><li class="item" data-cv-columnname="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getCustomViewColumnName();?>
" data-columnname="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('column');?>
" data-field-id='<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getId();?>
'><span class="dragContainer"><img src="<?php echo vimage_path('drag.png');?>
" class="cursorPointerMove" border="0" title="<?php echo vtranslate('LBL_DRAG',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></span><span class="fieldLabel"><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['FIELD_MODULE_NAME']->value);?>
</span><span class="pull-right removeField"><i class="fa fa-times" title="<?php echo vtranslate('LBL_REMOVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></i></span></li><?php }?><?php } ?></ul><li class="item-dummy hide"><span class="dragContainer"><img src="<?php echo vimage_path('drag.png');?>
" class="cursorPointerMove" border="0" title="<?php echo vtranslate('LBL_DRAG',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></span><span class="fieldLabel"></span><span class="pull-right removeField"><i class="fa fa-times"></i></span></li></div></div><div class="col-lg-6 availFiedlsContainer"><div class="row"><div class="col-lg-10"><h5><?php echo vtranslate('LBL_AVAILABLE_FIELDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h5><input type="text" class="inputElement searchAvailFields" placeholder="<?php echo vtranslate('LBL_SEARCH_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /><div class="panel-group avialFieldsListContainer" id="accordion"><div class="panel panel-default" id="avialFieldsList"><?php  $_smarty_tpl->tpl_vars['BLOCK_FIELDS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->_loop = false;
 $_smarty_tpl->tpl_vars['BLOCK_LABEL'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->key => $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value){
$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->_loop = true;
 $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value = $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->key;
?><?php $_smarty_tpl->tpl_vars['RAND_ID'] = new Smarty_variable(mt_rand(10,1000), null, 0);?><div class="instafilta-section"><div id="<?php echo $_smarty_tpl->tpl_vars['RAND_ID']->value;?>
_accordion" class="availFieldBlock" role="tab"><a class="fieldLabel" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $_smarty_tpl->tpl_vars['RAND_ID']->value;?>
"><i class="fa fa-caret-right"></i><span><?php echo vtranslate($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value,$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
</span></a></div><div id="<?php echo $_smarty_tpl->tpl_vars['RAND_ID']->value;?>
" class="panel-collapse collapse"><div class="panel-body"><?php  $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->key => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value){
$_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_NAME']->value = $_smarty_tpl->tpl_vars['FIELD_MODEL']->key;
?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModule()->getName();?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['FIELD_MODULE_NAME'] = new Smarty_variable($_tmp3, null, 0);?><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayType()=='6'){?><?php continue 1?><?php }?><div class="instafilta-target item <?php if (array_key_exists($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getCustomViewColumnName(),$_smarty_tpl->tpl_vars['SELECTED_FIELDS']->value)){?>hide<?php }?>" data-cv-columnname="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getCustomViewColumnName();?>
" data-columnname='<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('column');?>
' data-field-id='<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getId();?>
'><span class="fieldLabel"><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['FIELD_MODULE_NAME']->value);?>
</span></div><?php } ?></div></div></div><?php } ?><div class="instafilta-target item-dummy hide"><span class="fieldLabel"></span></div></div></div></div></div></div></div></div><div class="modal-footer "><button class="btn btn-success" type="submit" name="saveButton"><strong><?php echo vtranslate('LBL_UPDATE_LIST');?>
</strong></button><a href="#" class="cancelLink" type="reset" data-dismiss="modal"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div></form></div></div><?php }} ?>