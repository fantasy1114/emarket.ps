<?php /* Smarty version Smarty-3.1.7, created on 2020-11-29 06:22:35
         compiled from "/home/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/PurchaseOrder/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17538176445fc33e2ba41d25-74487242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '071d6ec6453ea73f91e2d48429b20e132a6a45ea' => 
    array (
      0 => '/home/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/PurchaseOrder/ModuleSummaryView.tpl',
      1 => 1602587794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17538176445fc33e2ba41d25-74487242',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fc33e2ba4767',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fc33e2ba4767')) {function content_5fc33e2ba4767($_smarty_tpl) {?>
<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>