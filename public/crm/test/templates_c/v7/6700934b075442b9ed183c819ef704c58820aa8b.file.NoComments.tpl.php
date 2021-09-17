<?php /* Smarty version Smarty-3.1.7, created on 2021-04-08 14:14:58
         compiled from "/home1/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/Vtiger/NoComments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111736537606f0fe2db10e1-25811245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6700934b075442b9ed183c819ef704c58820aa8b' => 
    array (
      0 => '/home1/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/Vtiger/NoComments.tpl',
      1 => 1602587794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111736537606f0fe2db10e1-25811245',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_606f0fe2db49c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_606f0fe2db49c')) {function content_606f0fe2db49c($_smarty_tpl) {?>
<div class="noCommentsMsgContainer noContent"><p class="textAlignCenter"> <?php echo vtranslate('LBL_NO_COMMENTS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</p></div><?php }} ?>