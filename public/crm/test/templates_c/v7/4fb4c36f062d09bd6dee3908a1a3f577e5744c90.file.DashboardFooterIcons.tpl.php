<?php /* Smarty version Smarty-3.1.7, created on 2021-04-08 13:43:10
         compiled from "/home1/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/Vtiger/dashboards/DashboardFooterIcons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:788043100606f086e230a56-55122829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fb4c36f062d09bd6dee3908a1a3f577e5744c90' => 
    array (
      0 => '/home1/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/Vtiger/dashboards/DashboardFooterIcons.tpl',
      1 => 1602587794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '788043100606f086e230a56-55122829',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SETTING_EXIST' => 0,
    'CHART_TYPE' => 0,
    'DATA' => 0,
    'CHART_DATA' => 0,
    'CHART_VALUES' => 0,
    'REPORT_MODEL' => 0,
    'MODULE' => 0,
    'WIDGET' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_606f086e24009',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_606f086e24009')) {function content_606f086e24009($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['SETTING_EXIST']->value){?>
<a name="dfilter">
	<i class='fa fa-cog' border='0' align="absmiddle" title="<?php echo vtranslate('LBL_FILTER');?>
" alt="<?php echo vtranslate('LBL_FILTER');?>
"/>
</a>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['CHART_TYPE']->value)){?>
    <?php $_smarty_tpl->tpl_vars['CHART_DATA'] = new Smarty_variable(ZEND_JSON::decode($_smarty_tpl->tpl_vars['DATA']->value), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['CHART_VALUES'] = new Smarty_variable($_smarty_tpl->tpl_vars['CHART_DATA']->value['values'], null, 0);?>
<?php }?>
<?php if ((!empty($_smarty_tpl->tpl_vars['DATA']->value)&&empty($_smarty_tpl->tpl_vars['CHART_TYPE']->value))||!empty($_smarty_tpl->tpl_vars['CHART_VALUES']->value)){?>
<a href="javascript:void(0);" name="widgetFullScreen">
	<i class="fa fa-arrows-alt" hspace="2" border="0" align="absmiddle" title="<?php echo vtranslate('LBL_FULLSCREEN');?>
" alt="<?php echo vtranslate('LBL_FULLSCREEN');?>
"></i>
</a>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['CHART_TYPE']->value)&&$_smarty_tpl->tpl_vars['REPORT_MODEL']->value->isEditable()==true){?>
<a href="<?php echo $_smarty_tpl->tpl_vars['REPORT_MODEL']->value->getEditViewUrl();?>
" name="customizeChartReportWidget">
	<i class="fa fa-edit" hspace="2" border="0" align="absmiddle" title="<?php echo vtranslate('LBL_CUSTOMIZE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" alt="<?php echo vtranslate('LBL_CUSTOMIZE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></i>
</a>
<?php }?>
<a href="javascript:void(0);" name="drefresh" data-url="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getUrl();?>
&linkid=<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->get('linkid');?>
&content=data">
	<i class="fa fa-refresh" hspace="2" border="0" align="absmiddle" title="<?php echo vtranslate('LBL_REFRESH');?>
" alt="<?php echo vtranslate('LBL_REFRESH');?>
"></i>
</a>
<?php if (!$_smarty_tpl->tpl_vars['WIDGET']->value->isDefault()){?>
	<a name="dclose" class="widget" data-url="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getDeleteUrl();?>
">
		<i class="fa fa-remove" hspace="2" border="0" align="absmiddle" title="<?php echo vtranslate('LBL_REMOVE');?>
" alt="<?php echo vtranslate('LBL_REMOVE');?>
"></i>
	</a>
<?php }?><?php }} ?>