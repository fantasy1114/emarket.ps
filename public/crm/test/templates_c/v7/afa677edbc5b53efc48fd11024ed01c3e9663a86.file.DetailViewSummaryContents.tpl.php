<?php /* Smarty version Smarty-3.1.7, created on 2021-04-08 14:14:55
         compiled from "/home1/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/PurchaseOrder/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1927609341606f0fdf865e99-17261295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afa677edbc5b53efc48fd11024ed01c3e9663a86' => 
    array (
      0 => '/home1/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/PurchaseOrder/DetailViewSummaryContents.tpl',
      1 => 1602587794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1927609341606f0fdf865e99-17261295',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_606f0fdf86ab5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_606f0fdf86ab5')) {function content_606f0fdf86ab5($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>