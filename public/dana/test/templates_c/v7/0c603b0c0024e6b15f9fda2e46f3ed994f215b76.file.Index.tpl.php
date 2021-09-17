<?php /* Smarty version Smarty-3.1.7, created on 2021-07-10 11:34:50
         compiled from "/home1/emarket/public_html/public/dana/includes/runtime/../../layouts/v7/modules/Settings/Vtiger/Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18416097460e985da74bc09-40890110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c603b0c0024e6b15f9fda2e46f3ed994f215b76' => 
    array (
      0 => '/home1/emarket/public_html/public/dana/includes/runtime/../../layouts/v7/modules/Settings/Vtiger/Index.tpl',
      1 => 1625748915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18416097460e985da74bc09-40890110',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'USERS_COUNT' => 0,
    'ACTIVE_WORKFLOWS' => 0,
    'ACTIVE_MODULES' => 0,
    'SETTINGS_SHORTCUTS' => 0,
    'COUNTER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60e985da79372',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60e985da79372')) {function content_60e985da79372($_smarty_tpl) {?>
<div class="settingsIndexPage col-lg-12 col-md-12 col-sm-12"><div><h4><?php echo vtranslate('LBL_SUMMARY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h4></div><hr><div class="row"><span class="col-lg-4 col-md-4 col-sm-4 settingsSummary"><a href="index.php?module=Users&parent=Settings&view=List"><h2 class="summaryCount"><?php echo $_smarty_tpl->tpl_vars['USERS_COUNT']->value;?>
</h2><p class="summaryText" style="margin-top:20px;"><?php echo vtranslate('LBL_ACTIVE_USERS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</p></a></span><span class="col-lg-4 col-md-4 col-sm-4 settingsSummary"><a href="index.php?module=Workflows&parent=Settings&view=List&parentblock=LBL_AUTOMATION"><h2 class="summaryCount"><?php echo $_smarty_tpl->tpl_vars['ACTIVE_WORKFLOWS']->value;?>
</h2><p class="summaryText" style="margin-top:20px;"><?php echo vtranslate('LBL_WORKFLOWS_ACTIVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</p></a></span><span class="col-lg-4 col-md-4 col-sm-4 settingsSummary"><a href="index.php?module=ModuleManager&parent=Settings&view=List"><h2 class="summaryCount"><?php echo $_smarty_tpl->tpl_vars['ACTIVE_MODULES']->value;?>
</h2><p class="summaryText" style="margin-top:20px;"><?php echo vtranslate('LBL_MODULES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</p></a></span></div><br><br>&nbsp;<h4><?php echo vtranslate('LBL_SETTINGS_SHORTCUTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h4><hr><div id="settingsShortCutsContainer" style="min-height: 500px;"><div class="col-lg-12"><?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable(0, null, 0);?><?php  $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->key => $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value){
$_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['COUNTER']->value==4){?></div><div class="col-lg-12"><?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable(1, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable($_smarty_tpl->tpl_vars['COUNTER']->value+1, null, 0);?><?php }?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SettingsShortCut.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php } ?></div></div></div><?php }} ?>