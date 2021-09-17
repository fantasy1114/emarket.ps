<?php /* Smarty version Smarty-3.1.7, created on 2021-03-06 18:39:05
         compiled from "/home/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/Settings/Workflows/WorkFlowConditions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9786371566043cc49cdb7d2-81434702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5988e3cea11c9d551ad5ee630e5768183ce2d562' => 
    array (
      0 => '/home/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/Settings/Workflows/WorkFlowConditions.tpl',
      1 => 1602587794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9786371566043cc49cdb7d2-81434702',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WORKFLOW_MODEL' => 0,
    'QUALIFIED_MODULE' => 0,
    'IS_FILTER_SAVED_NEW' => 0,
    'RECORD_STRUCTURE' => 0,
    'TASK_TYPES' => 0,
    'TASK_TYPE' => 0,
    'RECORD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6043cc49d7232',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6043cc49d7232')) {function content_6043cc49d7232($_smarty_tpl) {?>
<input type="hidden" name="conditions" id="advanced_filter" value='' /><input type="hidden" id="olderConditions" value='<?php echo Vtiger_Util_Helper::toSafeHTML(ZEND_JSON::encode($_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->get('conditions')));?>
' /><input type="hidden" name="filtersavedinnew" value="<?php echo $_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->get('filtersavedinnew');?>
" /><div class="editViewHeader"><div class='row'><div class="col-lg-12 col-md-12 col-lg-pull-0"><h4><?php echo vtranslate('LBL_WORKFLOW_CONDITION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h4></div></div></div><hr style="margin-top: 0px !important;"><div class="editViewBody"><div class="editViewContents" style="padding-bottom: 0px;"><div class="form-group"><div class="col-sm-12"><?php if ($_smarty_tpl->tpl_vars['IS_FILTER_SAVED_NEW']->value==false){?><div class="alert alert-info"><?php echo vtranslate('LBL_CREATED_IN_OLD_LOOK_CANNOT_BE_EDITED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="row"><span class="col-sm-6"><input type="radio" name="conditionstype" class="alignMiddle" checked=""/>&nbsp;&nbsp;<span class="alignMiddle"><?php echo vtranslate('LBL_USE_EXISTING_CONDITIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></span><span class="col-sm-6"><input type="radio" id="enableAdvanceFilters" name="conditionstype" class="alignMiddle recreate"/>&nbsp;&nbsp;<span class="alignMiddle"><?php echo vtranslate('LBL_RECREATE_CONDITIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></span></div><br><?php }?><div id="advanceFilterContainer"  class="conditionsContainer <?php if ($_smarty_tpl->tpl_vars['IS_FILTER_SAVED_NEW']->value==false){?> zeroOpacity <?php }?>"><div class="col-sm-12"><div class="table table-bordered" style="padding: 5%"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('AdvanceFilter.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value), 0);?>
</div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("FieldExpressions.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('EXECUTION_CONDITION'=>$_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->get('execution_condition')), 0);?>
</div></div></div></div></div><div class="editViewHeader"><div class='row'><div class="col-lg-12 col-md-12 col-lg-pull-0"><h4><?php echo vtranslate('LBL_WORKFLOW_ACTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h4></div></div></div><hr style="margin-top: 0px !important;"><div class="editViewBody" id="workflow_action" style="padding-bottom: 15px;"><div style="padding-left: 15px;"><div class="btn-group"><button class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="true"><strong><?php echo vtranslate('LBL_ADD_TASK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong>&nbsp;&nbsp;<span class="caret"></span></button><ul class="dropdown-menu" role="menu"><?php  $_smarty_tpl->tpl_vars['TASK_TYPE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TASK_TYPE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TASK_TYPES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TASK_TYPE']->key => $_smarty_tpl->tpl_vars['TASK_TYPE']->value){
$_smarty_tpl->tpl_vars['TASK_TYPE']->_loop = true;
?><li><a class="cursorPointer" data-url="index.php<?php echo $_smarty_tpl->tpl_vars['TASK_TYPE']->value->getV7EditViewUrl();?>
&for_workflow=<?php echo $_smarty_tpl->tpl_vars['RECORD']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['TASK_TYPE']->value->get('label'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></li><?php } ?></ul></div></div><div id="taskListContainer" style="min-height: 250px;"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('TasksList.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div>
<?php }} ?>