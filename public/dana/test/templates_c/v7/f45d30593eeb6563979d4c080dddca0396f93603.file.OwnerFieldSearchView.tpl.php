<?php /* Smarty version Smarty-3.1.7, created on 2021-07-10 10:37:40
         compiled from "/home1/emarket/public_html/public/dana/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/OwnerFieldSearchView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31219709760e978749b8a10-70993758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f45d30593eeb6563979d4c080dddca0396f93603' => 
    array (
      0 => '/home1/emarket/public_html/public/dana/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/OwnerFieldSearchView.tpl',
      1 => 1625748915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31219709760e978749b8a10-70993758',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'FIELD_INFO' => 0,
    'SEARCH_INFO' => 0,
    'SEARCH_VALUES' => 0,
    'MODULE' => 0,
    'USER_MODEL' => 0,
    'ASSIGNED_USER_ID' => 0,
    'ALL_ACTIVEUSER_LIST' => 0,
    'OWNER_NAME' => 0,
    'OWNER_ID' => 0,
    'ACCESSIBLE_USER_LIST' => 0,
    'CURRENT_USER_ID' => 0,
    'ALL_ACTIVEGROUP_LIST' => 0,
    'ACCESSIBLE_GROUP_LIST' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60e978749d5bc',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60e978749d5bc')) {function content_60e978749d5bc($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["FIELD_INFO"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo(), null, 0);?><div class="select2_search_div"><?php $_smarty_tpl->tpl_vars['ASSIGNED_USER_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name'), null, 0);?><?php $_smarty_tpl->tpl_vars['ALL_ACTIVEUSER_LIST'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_INFO']->value['picklistvalues'][vtranslate('LBL_USERS')], null, 0);?><?php $_smarty_tpl->tpl_vars['SEARCH_VALUES'] = new Smarty_variable(explode(',',$_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue']), null, 0);?><?php $_smarty_tpl->tpl_vars['SEARCH_VALUES'] = new Smarty_variable(array_map("trim",$_smarty_tpl->tpl_vars['SEARCH_VALUES']->value), null, 0);?><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')=='52'||$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')=='77'){?><?php $_smarty_tpl->tpl_vars['ALL_ACTIVEGROUP_LIST'] = new Smarty_variable(array(), null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['ALL_ACTIVEGROUP_LIST'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_INFO']->value['picklistvalues'][vtranslate('LBL_GROUPS')], null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['ACCESSIBLE_USER_LIST'] = new Smarty_variable($_smarty_tpl->tpl_vars['USER_MODEL']->value->getAccessibleUsersForModule($_smarty_tpl->tpl_vars['MODULE']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['ACCESSIBLE_GROUP_LIST'] = new Smarty_variable($_smarty_tpl->tpl_vars['USER_MODEL']->value->getAccessibleGroupForModule($_smarty_tpl->tpl_vars['MODULE']->value), null, 0);?><input type="text" class="listSearchContributor inputElement select2_input_element"/><select class="select2 listSearchContributor <?php echo $_smarty_tpl->tpl_vars['ASSIGNED_USER_ID']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['ASSIGNED_USER_ID']->value;?>
" multiple data-fieldinfo='<?php echo htmlspecialchars(Zend_Json::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value), ENT_QUOTES, 'UTF-8', true);?>
' style="display:none"><optgroup label="<?php echo vtranslate('LBL_USERS');?>
"><?php  $_smarty_tpl->tpl_vars['OWNER_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['OWNER_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['OWNER_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ALL_ACTIVEUSER_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['OWNER_NAME']->key => $_smarty_tpl->tpl_vars['OWNER_NAME']->value){
$_smarty_tpl->tpl_vars['OWNER_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['OWNER_ID']->value = $_smarty_tpl->tpl_vars['OWNER_NAME']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
" data-picklistvalue= '<?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
' <?php if (in_array(trim(decode_html($_smarty_tpl->tpl_vars['OWNER_NAME']->value)),$_smarty_tpl->tpl_vars['SEARCH_VALUES']->value)){?> selected <?php }?><?php if (array_key_exists($_smarty_tpl->tpl_vars['OWNER_ID']->value,$_smarty_tpl->tpl_vars['ACCESSIBLE_USER_LIST']->value)){?> data-recordaccess=true <?php }else{ ?> data-recordaccess=false <?php }?>data-userId="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
</option><?php } ?></optgroup><?php if (count($_smarty_tpl->tpl_vars['ALL_ACTIVEGROUP_LIST']->value)>0){?><optgroup label="<?php echo vtranslate('LBL_GROUPS');?>
"><?php  $_smarty_tpl->tpl_vars['OWNER_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['OWNER_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['OWNER_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ALL_ACTIVEGROUP_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['OWNER_NAME']->key => $_smarty_tpl->tpl_vars['OWNER_NAME']->value){
$_smarty_tpl->tpl_vars['OWNER_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['OWNER_ID']->value = $_smarty_tpl->tpl_vars['OWNER_NAME']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
" data-picklistvalue= '<?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
' <?php if (in_array(trim(decode_html($_smarty_tpl->tpl_vars['OWNER_NAME']->value)),$_smarty_tpl->tpl_vars['SEARCH_VALUES']->value)){?> selected <?php }?><?php if (array_key_exists($_smarty_tpl->tpl_vars['OWNER_ID']->value,$_smarty_tpl->tpl_vars['ACCESSIBLE_GROUP_LIST']->value)){?> data-recordaccess=true <?php }else{ ?> data-recordaccess=false <?php }?> ><?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
</option><?php } ?></optgroup><?php }?></select></div><?php }} ?>