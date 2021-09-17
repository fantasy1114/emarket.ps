<?php /* Smarty version Smarty-3.1.7, created on 2021-04-08 14:14:55
         compiled from "/home1/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/PurchaseOrder/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:722695672606f0fdf81f159-78724557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd78dbd0c9125374052c7a42abaaac18b8406cea' => 
    array (
      0 => '/home1/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/PurchaseOrder/ModuleSummaryView.tpl',
      1 => 1602587794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '722695672606f0fdf81f159-78724557',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_606f0fdf823c6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_606f0fdf823c6')) {function content_606f0fdf823c6($_smarty_tpl) {?>
<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>