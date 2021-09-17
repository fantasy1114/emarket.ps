<?php /* Smarty version Smarty-3.1.7, created on 2021-07-10 11:32:54
         compiled from "/home1/emarket/public_html/public/dana/includes/runtime/../../layouts/v7/modules/Vtiger/NoComments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157481450460e9856634f3e2-00758245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f2554aa0d2befcd98eea9bcbfd23932153aa5d6' => 
    array (
      0 => '/home1/emarket/public_html/public/dana/includes/runtime/../../layouts/v7/modules/Vtiger/NoComments.tpl',
      1 => 1625748915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157481450460e9856634f3e2-00758245',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60e985663524f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60e985663524f')) {function content_60e985663524f($_smarty_tpl) {?>
<div class="noCommentsMsgContainer noContent"><p class="textAlignCenter"> <?php echo vtranslate('LBL_NO_COMMENTS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</p></div><?php }} ?>