<?php /* Smarty version Smarty-3.1.7, created on 2020-11-28 10:39:55
         compiled from "/home/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/Vtiger/DetailViewFullContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10820730425fc228fba92e17-52921558%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85023290824ea53c64beb6667622f98e234997b1' => 
    array (
      0 => '/home/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/Vtiger/DetailViewFullContents.tpl',
      1 => 1602587794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10820730425fc228fba92e17-52921558',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
    'RECORD_STRUCTURE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fc228fbb192f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fc228fbb192f')) {function content_5fc228fbb192f($_smarty_tpl) {?>



<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('DetailViewBlockView.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0);?>
</form>
<?php }} ?>