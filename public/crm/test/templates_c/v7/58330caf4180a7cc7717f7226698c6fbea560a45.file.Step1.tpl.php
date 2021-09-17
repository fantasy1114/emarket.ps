<?php /* Smarty version Smarty-3.1.7, created on 2020-11-27 11:10:17
         compiled from "/home/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/Install/Step1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2852548805fc0de99145f47-76015655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58330caf4180a7cc7717f7226698c6fbea560a45' => 
    array (
      0 => '/home/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/Install/Step1.tpl',
      1 => 1602587794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2852548805fc0de99145f47-76015655',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANGUAGES' => 0,
    'header' => 0,
    'CURRENT_LANGUAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fc0de991679a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fc0de991679a')) {function content_5fc0de991679a($_smarty_tpl) {?>

<div class="row main-container">
	<div class="inner-container">
		<div class="row">
			<div class="col-sm-10">
				<h4><?php echo vtranslate('LBL_WELCOME','Install');?>
</h4>
			</div>
			<div class="col-sm-2">
				<a href="https://wiki.vtiger.com/vtiger6/" target="_blank" class="pull-right">
					<img src="<?php echo vimage_path('help.png');?>
" alt="Help-Icon"/>
				</a>
			</div>
		</div>
		<hr>

		<form class="form-horizontal" name="step1" method="post" action="index.php">
			<input type=hidden name="module" value="Install" />
			<input type=hidden name="view" value="Index" />
			<input type=hidden name="mode" value="Step2" />
			<div class="row">
				<div class="col-sm-4 welcome-image">
					<img src="<?php echo vimage_path('wizard_screen.png');?>
" alt="Vtiger Logo"/>
				</div>
				<div class="col-sm-8">
					<div class="welcome-div">
						<h3><?php echo vtranslate('LBL_WELCOME_TO_VTIGER7_SETUP_WIZARD','Install');?>
</h3>
						<?php echo vtranslate('LBL_VTIGER7_SETUP_WIZARD_DESCRIPTION','Install');?>

					</div>
					<?php if (count($_smarty_tpl->tpl_vars['LANGUAGES']->value)>1){?>
						<div>
							<span><?php echo vtranslate('LBL_CHOOSE_LANGUAGE','Install');?>

								<select name="lang" id="lang">
									<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['header'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LANGUAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['header']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['header']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['header']->value==$_smarty_tpl->tpl_vars['CURRENT_LANGUAGE']->value){?>selected<?php }?>><?php echo vtranslate(($_smarty_tpl->tpl_vars['language']->value),'Install');?>
</option>
									<?php } ?>
								</select>
							</span>
						</div>
					<?php }?>
				</div>
			</div>
			<div class="row">
				<div class="button-container col-sm-12">
					<input type="submit" class="btn btn-large btn-primary pull-right" value="<?php echo vtranslate('LBL_INSTALL_BUTTON','Install');?>
"/>
				</div>
			</div>
		</form>
	</div>
</div><?php }} ?>