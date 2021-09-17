<?php /* Smarty version Smarty-3.1.7, created on 2020-11-29 06:22:35
         compiled from "/home/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/PurchaseOrder/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15189291285fc33e2ba5e0a4-03859308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12b1dcefc5a4b6028168a07de667eb1fac16c915' => 
    array (
      0 => '/home/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/PurchaseOrder/DetailViewSummaryContents.tpl',
      1 => 1602587794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15189291285fc33e2ba5e0a4-03859308',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fc33e2ba62b8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fc33e2ba62b8')) {function content_5fc33e2ba62b8($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>