<?php /* Smarty version Smarty-3.1.7, created on 2020-11-27 11:19:22
         compiled from "/home/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/Vtiger/Header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5378085fc0e0ba993737-79940663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5c80e68541dbcfd0d8ebce2b9ad1fae799eb4b1' => 
    array (
      0 => '/home/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/Vtiger/Header.tpl',
      1 => 1602587794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5378085fc0e0ba993737-79940663',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PAGETITLE' => 0,
    'QUALIFIED_MODULE' => 0,
    'INVENTORY_MODULES' => 0,
    'SELECTED_MENU_CATEGORY' => 0,
    'V7_THEME_PATH' => 0,
    'STYLES' => 0,
    'cssModel' => 0,
    'MODULE' => 0,
    'VIEW' => 0,
    'PARENT_MODULE' => 0,
    'NOTIFIER_URL' => 0,
    'EXTENSION_MODULE' => 0,
    'EXTENSION_VIEW' => 0,
    'CURRENT_USER_MODEL' => 0,
    'USER_CURRENCY_SYMBOL' => 0,
    'LANGUAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fc0e0baa3fe3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fc0e0baa3fe3')) {function content_5fc0e0baa3fe3($_smarty_tpl) {?>
<!DOCTYPE html><html><head><title><?php echo vtranslate($_smarty_tpl->tpl_vars['PAGETITLE']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</title><link rel="SHORTCUT ICON" href="layouts/v7/skins/images/favicon.ico"><meta name="viewport" content="width=device-width, initial-scale=1.0" /><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><link type='text/css' rel='stylesheet' href='layouts/v7/lib/todc/css/bootstrap.min.css'><link type='text/css' rel='stylesheet' href='layouts/v7/lib/todc/css/docs.min.css'><link type='text/css' rel='stylesheet' href='layouts/v7/lib/todc/css/todc-bootstrap.min.css'><link type='text/css' rel='stylesheet' href='layouts/v7/lib/font-awesome/css/font-awesome.min.css'><link type='text/css' rel='stylesheet' href='layouts/v7/lib/jquery/select2/select2.css'><link type='text/css' rel='stylesheet' href='layouts/v7/lib/select2-bootstrap/select2-bootstrap.css'><link type='text/css' rel='stylesheet' href='libraries/bootstrap/js/eternicode-bootstrap-datepicker/css/datepicker3.css'><link type='text/css' rel='stylesheet' href='layouts/v7/lib/jquery/jquery-ui-1.11.3.custom/jquery-ui.css'><link type='text/css' rel='stylesheet' href='layouts/v7/lib/vt-icons/style.css'><link type='text/css' rel='stylesheet' href='layouts/v7/lib/animate/animate.min.css'><link type='text/css' rel='stylesheet' href='layouts/v7/lib/jquery/malihu-custom-scrollbar/jquery.mCustomScrollbar.css'><link type='text/css' rel='stylesheet' href='layouts/v7/lib/jquery/jquery.qtip.custom/jquery.qtip.css'><link type='text/css' rel='stylesheet' href='layouts/v7/lib/jquery/daterangepicker/daterangepicker.css'><input type="hidden" id="inventoryModules" value=<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['INVENTORY_MODULES']->value);?>
><?php $_smarty_tpl->tpl_vars['V7_THEME_PATH'] = new Smarty_variable(Vtiger_Theme::getv7AppStylePath($_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value), null, 0);?><?php if (strpos($_smarty_tpl->tpl_vars['V7_THEME_PATH']->value,".less")!==false){?><link type="text/css" rel="stylesheet/less" href="<?php echo vresource_url($_smarty_tpl->tpl_vars['V7_THEME_PATH']->value);?>
" media="screen" /><?php }else{ ?><link type="text/css" rel="stylesheet" href="<?php echo vresource_url($_smarty_tpl->tpl_vars['V7_THEME_PATH']->value);?>
" media="screen" /><?php }?><?php  $_smarty_tpl->tpl_vars['cssModel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cssModel']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['STYLES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cssModel']->key => $_smarty_tpl->tpl_vars['cssModel']->value){
$_smarty_tpl->tpl_vars['cssModel']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['cssModel']->key;
?><link type="text/css" rel="<?php echo $_smarty_tpl->tpl_vars['cssModel']->value->getRel();?>
" href="<?php echo vresource_url($_smarty_tpl->tpl_vars['cssModel']->value->getHref());?>
" media="<?php echo $_smarty_tpl->tpl_vars['cssModel']->value->getMedia();?>
" /><?php } ?><style type="text/css">@media print {.noprint { display:none; }}</style><script type="text/javascript">var __pageCreationTime = (new Date()).getTime();</script><script src="<?php echo vresource_url('layouts/v7/lib/jquery/jquery.min.js');?>
"></script><script src="<?php echo vresource_url('layouts/v7/lib/jquery/jquery-migrate-1.0.0.js');?>
"></script><script type="text/javascript">var _META = { 'module': "<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
", view: "<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
", 'parent': "<?php echo $_smarty_tpl->tpl_vars['PARENT_MODULE']->value;?>
", 'notifier':"<?php echo $_smarty_tpl->tpl_vars['NOTIFIER_URL']->value;?>
", 'app':"<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" };<?php if ($_smarty_tpl->tpl_vars['EXTENSION_MODULE']->value){?>var _EXTENSIONMETA = { 'module': "<?php echo $_smarty_tpl->tpl_vars['EXTENSION_MODULE']->value;?>
", view: "<?php echo $_smarty_tpl->tpl_vars['EXTENSION_VIEW']->value;?>
"};<?php }?>var _USERMETA;<?php if ($_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value){?>_USERMETA =  { 'id' : "<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('id');?>
", 'menustatus' : "<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('leftpanelhide');?>
",'currency' : "<?php echo $_smarty_tpl->tpl_vars['USER_CURRENCY_SYMBOL']->value;?>
", 'currencySymbolPlacement' : "<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('currency_symbol_placement');?>
",'currencyGroupingPattern' : "<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('currency_grouping_pattern');?>
", 'truncateTrailingZeros' : "<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('truncate_trailing_zeros');?>
"};<?php }?></script></head><?php $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL'] = new Smarty_variable(Users_Record_Model::getCurrentUserModel(), null, 0);?><body data-skinpath="<?php echo Vtiger_Theme::getBaseThemePath();?>
" data-language="<?php echo $_smarty_tpl->tpl_vars['LANGUAGE']->value;?>
" data-user-decimalseparator="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('currency_decimal_separator');?>
" data-user-dateformat="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('date_format');?>
"data-user-groupingseparator="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('currency_grouping_separator');?>
" data-user-numberofdecimals="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('no_of_currency_decimals');?>
" data-user-hourformat="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('hour_format');?>
"data-user-calendar-reminder-interval="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->getCurrentUserActivityReminderInSeconds();?>
"><input type="hidden" id="start_day" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('dayoftheweek');?>
" /><div id="page"><div id="pjaxContainer" class="hide noprint"></div><div id="messageBar" class="hide"></div><?php }} ?>