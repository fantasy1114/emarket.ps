<?php /* Smarty version Smarty-3.1.7, created on 2021-03-15 08:29:48
         compiled from "/home/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/Import/Import_Default_Values_Widget.tpl" */ ?>
<?php /*%%SmartyHeaderCode:575809822604f1afc902445-38737046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8009c5e08dfdf7a0f15e30504a3e24892a12ea9a' => 
    array (
      0 => '/home/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/Import/Import_Default_Values_Widget.tpl',
      1 => 1606475862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '575809822604f1afc902445-38737046',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'IMPORTABLE_FIELDS' => 0,
    '_FIELD_NAME' => 0,
    '_FIELD_INFO' => 0,
    '_FIELD_TYPE' => 0,
    'FOR_MODULE' => 0,
    '_PICKLIST_DETAILS' => 0,
    'USERS_LIST' => 0,
    '_ID' => 0,
    '_NAME' => 0,
    'GROUPS_LIST' => 0,
    'DATE_FORMAT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_604f1afc952cd',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_604f1afc952cd')) {function content_604f1afc952cd($_smarty_tpl) {?>

<div style="visibility: hidden; height: 0px;" id="defaultValuesElementsContainer">
	<?php  $_smarty_tpl->tpl_vars['_FIELD_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_FIELD_INFO']->_loop = false;
 $_smarty_tpl->tpl_vars['_FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['IMPORTABLE_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_FIELD_INFO']->key => $_smarty_tpl->tpl_vars['_FIELD_INFO']->value){
$_smarty_tpl->tpl_vars['_FIELD_INFO']->_loop = true;
 $_smarty_tpl->tpl_vars['_FIELD_NAME']->value = $_smarty_tpl->tpl_vars['_FIELD_INFO']->key;
?>
	<span id="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue_container" name="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue">
		<?php $_smarty_tpl->tpl_vars["_FIELD_TYPE"] = new Smarty_variable($_smarty_tpl->tpl_vars['_FIELD_INFO']->value->getFieldDataType(), null, 0);?>
		<?php if ($_smarty_tpl->tpl_vars['_FIELD_TYPE']->value=='picklist'||$_smarty_tpl->tpl_vars['_FIELD_TYPE']->value=='multipicklist'||($_smarty_tpl->tpl_vars['FOR_MODULE']->value=='Users'&&$_smarty_tpl->tpl_vars['_FIELD_TYPE']->value=='userRole')){?>
			<select id="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue" name="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue" class="select2 inputElement width75per">
            <?php if ($_smarty_tpl->tpl_vars['_FIELD_NAME']->value!='hdnTaxType'){?> <option value=""><?php echo vtranslate('LBL_SELECT_OPTION','Vtiger');?>
</option> <?php }?>
			<?php  $_smarty_tpl->tpl_vars['_PICKLIST_DETAILS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_PICKLIST_DETAILS']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_FIELD_INFO']->value->getPicklistDetails(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_PICKLIST_DETAILS']->key => $_smarty_tpl->tpl_vars['_PICKLIST_DETAILS']->value){
$_smarty_tpl->tpl_vars['_PICKLIST_DETAILS']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['_PICKLIST_DETAILS']->value['value'];?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['_PICKLIST_DETAILS']->value['label'],$_smarty_tpl->tpl_vars['FOR_MODULE']->value);?>
</option>
			<?php } ?>
			</select>
		<?php }elseif($_smarty_tpl->tpl_vars['_FIELD_TYPE']->value=='integer'){?>
			<input type="text" id="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue" name="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue" value="0" class ="inputElement width75per" />
		<?php }elseif($_smarty_tpl->tpl_vars['_FIELD_TYPE']->value=='owner'||$_smarty_tpl->tpl_vars['_FIELD_INFO']->value->getUIType()=='52'){?>
			<select id="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue" name="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue" class="select2 inputElement width75per">
				<option value="">--<?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['FOR_MODULE']->value);?>
--</option>
			<?php  $_smarty_tpl->tpl_vars['_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['USERS_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_NAME']->key => $_smarty_tpl->tpl_vars['_NAME']->value){
$_smarty_tpl->tpl_vars['_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['_ID']->value = $_smarty_tpl->tpl_vars['_NAME']->key;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['_NAME']->value;?>
</option>
			<?php } ?>
			<?php if ($_smarty_tpl->tpl_vars['_FIELD_INFO']->value->getUIType()=='53'){?>
				<?php  $_smarty_tpl->tpl_vars['_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['GROUPS_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_NAME']->key => $_smarty_tpl->tpl_vars['_NAME']->value){
$_smarty_tpl->tpl_vars['_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['_ID']->value = $_smarty_tpl->tpl_vars['_NAME']->key;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['_NAME']->value;?>
</option>
				<?php } ?>
			<?php }?>
			</select>
		<?php }elseif($_smarty_tpl->tpl_vars['_FIELD_TYPE']->value=='date'){?>
			<input type="text" id="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue" name="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue"
					data-date-format="<?php echo $_smarty_tpl->tpl_vars['DATE_FORMAT']->value;?>
" class="dateField inputElement width75per" value="" />
		<?php }elseif($_smarty_tpl->tpl_vars['_FIELD_TYPE']->value=='datetime'){?>
				<input type="text" id="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue" name="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue"
					   class="inputElement dateField width75per" value="" data-date-format="<?php echo $_smarty_tpl->tpl_vars['DATE_FORMAT']->value;?>
"/>
		<?php }elseif($_smarty_tpl->tpl_vars['_FIELD_TYPE']->value=='boolean'){?>
			<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue" name="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue" class ="inputElement width75per"/>
		<?php }elseif($_smarty_tpl->tpl_vars['_FIELD_TYPE']->value!='reference'){?>
			<input type="input" id="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue" name="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue" class ="inputElement width75per"/>
		<?php }?>
		</span>
	<?php } ?>
</div>
<script type="text/javascript">
	jQuery(document).ready(function() {
		$('.inputElement .dateField').datepicker();
	});
</script><?php }} ?>