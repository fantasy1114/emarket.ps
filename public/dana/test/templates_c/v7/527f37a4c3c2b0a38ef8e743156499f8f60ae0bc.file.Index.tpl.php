<?php /* Smarty version Smarty-3.1.7, created on 2021-07-10 18:14:51
         compiled from "/home1/emarket/public_html/public/dana/includes/runtime/../../layouts/v7/modules/Settings/MenuEditor/Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173628145860e9e39b1950f4-43356117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '527f37a4c3c2b0a38ef8e743156499f8f60ae0bc' => 
    array (
      0 => '/home1/emarket/public_html/public/dana/includes/runtime/../../layouts/v7/modules/Settings/MenuEditor/Index.tpl',
      1 => 1625748915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173628145860e9e39b1950f4-43356117',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE_NAME' => 0,
    'APP_IMAGE_MAP' => 0,
    'APP_NAME' => 0,
    'APP_LIST' => 0,
    'APP_IMAGE' => 0,
    'TRANSLATED_APP_NAME' => 0,
    'APP_MAPPED_MODULES' => 0,
    'moduleName' => 0,
    'moduleModel' => 0,
    'translatedModuleLabel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60e9e39b1d239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60e9e39b1d239')) {function content_60e9e39b1d239($_smarty_tpl) {?>



<?php $_smarty_tpl->tpl_vars['APP_IMAGE_MAP'] = new Smarty_variable(Vtiger_MenuStructure_Model::getAppIcons(), null, 0);?>
<div class="listViewPageDiv detailViewContainer col-sm-12" id="listViewContent">
	<div class="col-sm-12">
		<div class="row">
			<div class=" vt-default-callout vt-info-callout">
				<h4 class="vt-callout-header"><span class="fa fa-info-circle"></span><?php echo vtranslate('LBL_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
</h4>
				<p><?php echo vtranslate('LBL_MENU_EDITOR_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
</p>
			</div>
		</div>
	</div>
	<div class="col-lg-12" style="margin-top: 10px;">
		<div class="row" style="margin-left: -28px;">
			<?php $_smarty_tpl->tpl_vars['APP_LIST'] = new Smarty_variable(Vtiger_MenuStructure_Model::getAppMenuList(), null, 0);?>
			<?php  $_smarty_tpl->tpl_vars['APP_IMAGE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['APP_IMAGE']->_loop = false;
 $_smarty_tpl->tpl_vars['APP_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['APP_IMAGE_MAP']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['APP_MAP']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['APP_IMAGE']->key => $_smarty_tpl->tpl_vars['APP_IMAGE']->value){
$_smarty_tpl->tpl_vars['APP_IMAGE']->_loop = true;
 $_smarty_tpl->tpl_vars['APP_NAME']->value = $_smarty_tpl->tpl_vars['APP_IMAGE']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['APP_MAP']['index']++;
?>
				<?php if (!in_array($_smarty_tpl->tpl_vars['APP_NAME']->value,$_smarty_tpl->tpl_vars['APP_LIST']->value)){?> <?php continue 1?> <?php }?>
				<div class="col-lg-2<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['APP_MAP']['index']==0||count($_smarty_tpl->tpl_vars['APP_LIST']->value)==1){?><?php }?>">
					<div class="menuEditorItem app-<?php echo $_smarty_tpl->tpl_vars['APP_NAME']->value;?>
" data-app-name="<?php echo $_smarty_tpl->tpl_vars['APP_NAME']->value;?>
">
						<span class="fa <?php echo $_smarty_tpl->tpl_vars['APP_IMAGE']->value;?>
"></span>
						<?php ob_start();?><?php echo vtranslate("LBL_".($_smarty_tpl->tpl_vars['APP_NAME']->value));?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['TRANSLATED_APP_NAME'] = new Smarty_variable($_tmp1, null, 0);?>
						<div class="textOverflowEllipsis" title="<?php echo $_smarty_tpl->tpl_vars['TRANSLATED_APP_NAME']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['TRANSLATED_APP_NAME']->value;?>
</div>
					</div>
					<div class="sortable appContainer" data-appname="<?php echo $_smarty_tpl->tpl_vars['APP_NAME']->value;?>
">
						<?php  $_smarty_tpl->tpl_vars['moduleModel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['moduleModel']->_loop = false;
 $_smarty_tpl->tpl_vars['moduleName'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['APP_MAPPED_MODULES']->value[$_smarty_tpl->tpl_vars['APP_NAME']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['moduleModel']->key => $_smarty_tpl->tpl_vars['moduleModel']->value){
$_smarty_tpl->tpl_vars['moduleModel']->_loop = true;
 $_smarty_tpl->tpl_vars['moduleName']->value = $_smarty_tpl->tpl_vars['moduleModel']->key;
?>
							<div class="modules noConnect" data-module="<?php echo $_smarty_tpl->tpl_vars['moduleName']->value;?>
">
								<i data-appname="<?php echo $_smarty_tpl->tpl_vars['APP_NAME']->value;?>
" class="fa fa-times pull-right whiteIcon menuEditorRemoveItem" style="margin: 5%;padding-top:15px;"></i>
								<div class="menuEditorItem menuEditorModuleItem">
									<span class="pull-left marginRight10px marginTop5px">
										<img class="alignMiddle cursorDrag" src="<?php echo vimage_path('drag.png');?>
"/>
									</span>
									<?php $_smarty_tpl->tpl_vars['translatedModuleLabel'] = new Smarty_variable(vtranslate($_smarty_tpl->tpl_vars['moduleModel']->value->get('label'),$_smarty_tpl->tpl_vars['moduleName']->value), null, 0);?>
									<span>
										<span class="marginRight10px marginTop5px pull-left"><?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getModuleIcon();?>
</span>
									</span>
									<div class="textOverflowEllipsis marginTop5px textAlignLeft" title="<?php echo $_smarty_tpl->tpl_vars['translatedModuleLabel']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['translatedModuleLabel']->value;?>
</div>
								</div>
							</div>
						<?php } ?>
						<div class="menuEditorItem menuEditorModuleItem menuEditorAddItem" data-appname="<?php echo $_smarty_tpl->tpl_vars['APP_NAME']->value;?>
">
							<i class="fa fa-plus pull-left marginTop5px"></i>
							<div class="marginTop10px"><?php echo vtranslate('LBL_SELECT_HIDDEN_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
</div>
						</div> 
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
<?php }} ?>