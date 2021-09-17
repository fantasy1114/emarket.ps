<?php /* Smarty version Smarty-3.1.7, created on 2021-04-28 09:39:30
         compiled from "/home1/emarket/public_html/public/palfut/includes/runtime/../../layouts/v7/modules/Settings/CustomerPortal/Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204171399860892d528e7361-15593883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50f506d2ce85b30a32dcffe0ce22e4e76a86750d' => 
    array (
      0 => '/home1/emarket/public_html/public/palfut/includes/runtime/../../layouts/v7/modules/Settings/CustomerPortal/Index.tpl',
      1 => 1607784104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204171399860892d528e7361-15593883',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'USER_MODELS' => 0,
    'USER_MODEL' => 0,
    'USER_ID' => 0,
    'CURRENT_DEFAULT_ASSIGNEE' => 0,
    'GROUP_MODELS' => 0,
    'GROUP_MODEL' => 0,
    'GROUP_ID' => 0,
    'PORTAL_URL' => 0,
    'MODULES_MODELS' => 0,
    'MODEL' => 0,
    'TAB_ID' => 0,
    'MODULE_NAME' => 0,
    'WIDGETS' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60892d5292752',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60892d5292752')) {function content_60892d5292752($_smarty_tpl) {?>

<div class="listViewPageDiv" id="listViewContent"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><br><form id="customerPortalForm" name="customerPortalForm" action="index.php" method="POST" class="form-horizontal"><input type="hidden" name="portalModulesInfo" value="" /><div class="col-sm-12 col-xs-12 input-group"><div class="form-group"><label for="defaultAssignee" class="col-sm-4 control-label fieldLabel"><span><?php echo vtranslate('LBL_DEFAULT_ASSIGNEE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></label><div class="fieldValue col-lg-3 col-md-3 col-sm-3 input-group"><select name="defaultAssignee" class="select2 inputElement"><optgroup label="<?php echo vtranslate('LBL_USERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" ><?php  $_smarty_tpl->tpl_vars['USER_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['USER_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['USER_MODELS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['USER_MODEL']->key => $_smarty_tpl->tpl_vars['USER_MODEL']->value){
$_smarty_tpl->tpl_vars['USER_MODEL']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['USER_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['USER_MODEL']->value->getId(), null, 0);?><option value="<?php echo $_smarty_tpl->tpl_vars['USER_ID']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['CURRENT_DEFAULT_ASSIGNEE']->value==$_smarty_tpl->tpl_vars['USER_ID']->value){?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->getName();?>
</option><?php } ?></optgroup><optgroup label="<?php echo vtranslate('LBL_GROUPS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php  $_smarty_tpl->tpl_vars['GROUP_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['GROUP_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['GROUP_MODELS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['GROUP_MODEL']->key => $_smarty_tpl->tpl_vars['GROUP_MODEL']->value){
$_smarty_tpl->tpl_vars['GROUP_MODEL']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['GROUP_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['GROUP_MODEL']->value->getId(), null, 0);?><option value="<?php echo $_smarty_tpl->tpl_vars['GROUP_ID']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['CURRENT_DEFAULT_ASSIGNEE']->value==$_smarty_tpl->tpl_vars['GROUP_ID']->value){?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['GROUP_MODEL']->value->getName();?>
</option><?php } ?></optgroup></select><div class="input-group-addon input-select-addon"><a href="#" rel="tooltip" title="<?php echo vtranslate('LBL_DEFAULT_ASSIGNEE_MESSAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><i class="fa fa-info-circle"></i></a></div></div></div></div><div class="col-sm-12 col-xs-12 input-group"><div class="form-group"><label for="portal-url" class="col-sm-4 control-label fieldLabel"><?php echo vtranslate('LBL_PORTAL_URL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-5"><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['PORTAL_URL']->value;?>
" class="help-inline" style="width: 300px;color:blue;"><?php echo $_smarty_tpl->tpl_vars['PORTAL_URL']->value;?>
</a><div class="pull-left input-group-addon input-select-addon"><a href="#" rel="tooltip" title="<?php echo vtranslate('LBL_PORTAL_URL_MESSAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><i class="fa fa-info-circle"></i></a></div></div></div></div><br><br><div class="row" style="margin-bottom: 100px;"><div class="col-sm-3 paddingRight0"><ul class="nav nav-tabs nav-stacked cp-nav-header-wrapper" ><li class="disabled unsortable portalMenuHeader" data-sequence="1" data-module="Dashboard"><a class="cp-nav-header"><?php echo vtranslate('LBL_LAYOUT_HEADER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></li></ul><ul class="nav nav-tab nav-stacked" id="portalModulesTable"><li class="portalModuleRow active unsortable cp-modules-home" data-id="" data-sequence="1" data-module="Dashboard"><a href="javascript:void(0);"><strong class="portal-home-module"><?php echo vtranslate('LBL_HOME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li><?php  $_smarty_tpl->tpl_vars['MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['TAB_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['MODULES_MODELS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['MODEL']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['MODEL']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['MODEL']->key => $_smarty_tpl->tpl_vars['MODEL']->value){
$_smarty_tpl->tpl_vars['MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['TAB_ID']->value = $_smarty_tpl->tpl_vars['MODEL']->key;
 $_smarty_tpl->tpl_vars['MODEL']->iteration++;
 $_smarty_tpl->tpl_vars['MODEL']->last = $_smarty_tpl->tpl_vars['MODEL']->iteration === $_smarty_tpl->tpl_vars['MODEL']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['moduleModels']['last'] = $_smarty_tpl->tpl_vars['MODEL']->last;
?><?php $_smarty_tpl->tpl_vars['MODULE_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODEL']->value->get('name'), null, 0);?><li class="portalModuleRow bgColor cp-tabs" <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['moduleModels']['last']){?> style="border-color: #ddd; border-image: none; border-style: solid; border-width: 0 0 1px 1px;"<?php }?>data-id="<?php echo $_smarty_tpl->tpl_vars['TAB_ID']->value;?>
" data-sequence="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->get('sequence');?>
"data-module="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"><input type="hidden" name="portalModulesInfo[<?php echo $_smarty_tpl->tpl_vars['TAB_ID']->value;?>
][sequence]" value="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->get('sequence');?>
" /><a href="javascript:void(0);" class="cp-modules" style="width:100%;"><span class="checkbox"><img class="drag-portal-module" src="layouts/v7/resources/Images/drag.png" border="0" title="Drag And Drop To Reorder Portal Menu In Customer Portal"/>&nbsp;&nbsp;<input class="enabledModules portal-module-name" name='<?php echo $_smarty_tpl->tpl_vars['TAB_ID']->value;?>
' type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->get('visible');?>
" <?php if ($_smarty_tpl->tpl_vars['MODEL']->value->get('visible')){?>checked<?php }?> />&nbsp;&nbsp;<?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span></a></li><?php } ?></ul></div><div class="col-sm-9 portal-dashboard"><div id="dashboardContent" class="show" ><h4><?php echo vtranslate('LBL_HOME_LAYOUT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h4><hr class="hrHeader"><input type="hidden" name="defaultWidgets" value='<?php echo Vtiger_Functions::jsonEncode($_smarty_tpl->tpl_vars['WIDGETS']->value,true);?>
'/><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('CustomerPortalDashboard.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php  $_smarty_tpl->tpl_vars['MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['TAB_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['MODULES_MODELS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MODEL']->key => $_smarty_tpl->tpl_vars['MODEL']->value){
$_smarty_tpl->tpl_vars['MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['TAB_ID']->value = $_smarty_tpl->tpl_vars['MODEL']->key;
?><div id="fieldContent_<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->get('name');?>
" class="hide"><?php echo $_smarty_tpl->tpl_vars['MODEL']->value->get('name');?>
</div><?php } ?></div><div class="textAlignCenter col-lg-12 col-md-12 col-sm-12"><button type="submit" class="btn btn-success saveButton pull-right" id="savePortalInfo" name="savePortalInfo" type="submit" disabled><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button>&nbsp;&nbsp;</div></div></form></div></div>
<?php }} ?>