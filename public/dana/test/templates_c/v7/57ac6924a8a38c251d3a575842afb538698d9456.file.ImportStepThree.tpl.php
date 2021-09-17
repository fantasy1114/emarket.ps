<?php /* Smarty version Smarty-3.1.7, created on 2021-07-10 11:27:21
         compiled from "/home1/emarket/public_html/public/dana/includes/runtime/../../layouts/v7/modules/Import/ImportStepThree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:146792062560e98419f174b9-14614987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57ac6924a8a38c251d3a575842afb538698d9456' => 
    array (
      0 => '/home1/emarket/public_html/public/dana/includes/runtime/../../layouts/v7/modules/Import/ImportStepThree.tpl',
      1 => 1625912898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146792062560e98419f174b9-14614987',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'IMPORTABLE_FIELDS' => 0,
    'AVAILABLE_FIELDS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60e98419f1f46',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60e98419f1f46')) {function content_60e98419f1f46($_smarty_tpl) {?>



<span>
    <h4><?php echo vtranslate('LBL_IMPORT_MAP_FIELDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h4>
</span>
<hr>
<div id="savedMapsContainer"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Import_Saved_Maps.tpl",'Import'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
<div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Import_Mapping.tpl",'Import'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
<div class="form-inline" style="padding-bottom: 10%;">
    <input type="checkbox" name="save_map" id="save_map">&nbsp;&nbsp;<label for="save_map"><?php echo vtranslate('LBL_SAVE_AS_CUSTOM_MAPPING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label>
    &nbsp;&nbsp;<input type="text" name="save_map_as" id="save_map_as" class = "form-control">
</div>
<?php if (!$_smarty_tpl->tpl_vars['IMPORTABLE_FIELDS']->value){?>
	<?php $_smarty_tpl->tpl_vars['IMPORTABLE_FIELDS'] = new Smarty_variable($_smarty_tpl->tpl_vars['AVAILABLE_FIELDS']->value, null, 0);?>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Import_Default_Values_Widget.tpl",'Import'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('IMPORTABLE_FIELDS'=>$_smarty_tpl->tpl_vars['IMPORTABLE_FIELDS']->value), 0);?>
<?php }} ?>