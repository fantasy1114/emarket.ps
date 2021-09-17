<?php /* Smarty version Smarty-3.1.7, created on 2021-07-10 17:56:31
         compiled from "/home1/emarket/public_html/public/dana/includes/runtime/../../layouts/v7/modules/Settings/CustomerPortal/CustomerPortalDashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101970602960e9df4fe60739-38746459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3259040d82e36e39ed8f2d20294b130d20a61f4' => 
    array (
      0 => '/home1/emarket/public_html/public/dana/includes/runtime/../../layouts/v7/modules/Settings/CustomerPortal/CustomerPortalDashboard.tpl',
      1 => 1625912901,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101970602960e9df4fe60739-38746459',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'ANNOUNCEMENT' => 0,
    'WIDGETS' => 0,
    'module' => 0,
    'WIDGETS_MODULE_LIST' => 0,
    'status' => 0,
    'DEFAULT_SHORTCUTS' => 0,
    'SHORT' => 0,
    'key' => 0,
    'value' => 0,
    'value1' => 0,
    'key1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60e9df4fe8a0b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60e9df4fe8a0b')) {function content_60e9df4fe8a0b($_smarty_tpl) {?>

<div class="col-lg-7 col-md-7 col-sm-7 row"><div class="portal-annoucement-widget-container"><div class="portal-annoucement-widget" ><h5><?php echo vtranslate('LBL_ANNOUNCEMENT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5></div><div class="portal" ><textarea class="inputElement portal" name="announcement" id="portalAnnouncement" style="resize:vertical;"><?php echo $_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value;?>
</textarea></div></div><br><?php  $_smarty_tpl->tpl_vars['status'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['status']->_loop = false;
 $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['WIDGETS']->value['widgets']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['status']->key => $_smarty_tpl->tpl_vars['status']->value){
$_smarty_tpl->tpl_vars['status']->_loop = true;
 $_smarty_tpl->tpl_vars['module']->value = $_smarty_tpl->tpl_vars['status']->key;
?><?php if ($_smarty_tpl->tpl_vars['module']->value=='HelpDesk'&&isset($_smarty_tpl->tpl_vars['WIDGETS_MODULE_LIST']->value['HelpDesk'])){?><div class="portal-record-widget-container" ><div class="portal-record-widget-content" ><h5><?php echo vtranslate('LBL_RECENT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['module']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo vtranslate($_tmp1,'Vtiger');?>
 <?php echo vtranslate('LBL_REC_WIDGET',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5></div><div class="portal-record-control-container"><div class="checkbox label-checkbox" style="padding: 10px 5px;"><label><input id="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
" type="checkbox" class="widgetsInfo" value="<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
" name="widgets[]" <?php if ($_smarty_tpl->tpl_vars['status']->value){?>checked<?php }?>/>&nbsp;&nbsp;Enable</label></div></div></div><?php }?><?php } ?></div><div class="col-sm-5"><?php if ($_smarty_tpl->tpl_vars['WIDGETS_MODULE_LIST']->value['HelpDesk']==1||$_smarty_tpl->tpl_vars['WIDGETS_MODULE_LIST']->value['Documents']==1){?><div class="portal-shortcuts-container" ><div class="portal-shortcuts-header" ><h5><?php echo vtranslate('LBL_SHORTCUTS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5></div><div class="portal-shortcuts-content" ><input type="hidden" name="defaultShortcuts" value='<?php echo $_smarty_tpl->tpl_vars['DEFAULT_SHORTCUTS']->value;?>
' /><div id="portal-shortcutsContainer"><ul class="nav nav-tabs nav-stacked" id="shortcutItems"><?php $_smarty_tpl->tpl_vars["SHORT"] = new Smarty_variable(json_decode($_smarty_tpl->tpl_vars['DEFAULT_SHORTCUTS']->value,true), null, 0);?><?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SHORT']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?><?php if (isset($_smarty_tpl->tpl_vars['WIDGETS_MODULE_LIST']->value[$_smarty_tpl->tpl_vars['key']->value])){?><?php  $_smarty_tpl->tpl_vars['value1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value1']->_loop = false;
 $_smarty_tpl->tpl_vars['key1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value1']->key => $_smarty_tpl->tpl_vars['value1']->value){
$_smarty_tpl->tpl_vars['value1']->_loop = true;
 $_smarty_tpl->tpl_vars['key1']->value = $_smarty_tpl->tpl_vars['value1']->key;
?><?php if ($_smarty_tpl->tpl_vars['value1']->value==1){?><li class="portal-shortcut-list" data-field="<?php echo $_smarty_tpl->tpl_vars['key1']->value;?>
">&nbsp;<div class="btn btn-large"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['key1']->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo vtranslate($_tmp2,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;&nbsp; </div></li><?php }?><?php } ?><?php }?><?php } ?></ul></div></div></div><?php }?><br><?php  $_smarty_tpl->tpl_vars['status'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['status']->_loop = false;
 $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['WIDGETS']->value['widgets']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['status']->key => $_smarty_tpl->tpl_vars['status']->value){
$_smarty_tpl->tpl_vars['status']->_loop = true;
 $_smarty_tpl->tpl_vars['module']->value = $_smarty_tpl->tpl_vars['status']->key;
?><?php if ($_smarty_tpl->tpl_vars['module']->value!='HelpDesk'&&isset($_smarty_tpl->tpl_vars['WIDGETS_MODULE_LIST']->value[$_smarty_tpl->tpl_vars['module']->value])){?><div class="portal-helpdesk-widget-container" ><div class="portal-helpdesk-widget-header" ><h5><?php echo vtranslate('LBL_RECENT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['module']->value;?>
<?php $_tmp3=ob_get_clean();?><?php echo vtranslate($_tmp3,'Vtiger');?>
 <?php echo vtranslate('LBL_REC_WIDGET',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5></div><div class="portal-helpdesk-widget-controls"><div class="checkbox label-checkbox" style="padding: 10px 5px;"><label><input class="widgetsInfo" id="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
" name="widgets[]" <?php if ($_smarty_tpl->tpl_vars['status']->value){?>checked<?php }?>/>&nbsp;&nbsp;Enable</label></div></div></div><?php }?><?php } ?></div><br>
<?php }} ?>