<?php /* Smarty version Smarty-3.1.7, created on 2021-03-15 08:27:33
         compiled from "/home/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/Import/ImportStepTwo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1170660101604f1a75cc22b9-66561101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aae82e959aaebf3ef88aeb36463e6a2ce4473b34' => 
    array (
      0 => '/home/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/Import/ImportStepTwo.tpl',
      1 => 1606475862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1170660101604f1a75cc22b9-66561101',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'AUTO_MERGE_TYPES' => 0,
    '_MERGE_TYPE' => 0,
    '_MERGE_TYPE_LABEL' => 0,
    'AVAILABLE_FIELDS' => 0,
    '_FIELD_NAME' => 0,
    '_FIELD_INFO' => 0,
    'FOR_MODULE' => 0,
    'ENTITY_FIELDS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_604f1a75ce2b0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_604f1a75ce2b0')) {function content_604f1a75ce2b0($_smarty_tpl) {?>

<div class = "importBlockContainer hide" id="importStep2Conatiner">
    <span>
        <h4>&nbsp;&nbsp;&nbsp;<?php echo vtranslate('LBL_DUPLICATE_RECORD_HANDLING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h4>
    </span>
    <hr>
    <table class = "table table-borderless" id="duplicates_merge_configuration">
        <tr>
            <td>
                <span><strong><?php echo vtranslate('LBL_SPECIFY_MERGE_TYPE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></span>
                <select name="merge_type" id="merge_type" class ="select select2 form-control">
                    <?php  $_smarty_tpl->tpl_vars['_MERGE_TYPE_LABEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_MERGE_TYPE_LABEL']->_loop = false;
 $_smarty_tpl->tpl_vars['_MERGE_TYPE'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['AUTO_MERGE_TYPES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_MERGE_TYPE_LABEL']->key => $_smarty_tpl->tpl_vars['_MERGE_TYPE_LABEL']->value){
$_smarty_tpl->tpl_vars['_MERGE_TYPE_LABEL']->_loop = true;
 $_smarty_tpl->tpl_vars['_MERGE_TYPE']->value = $_smarty_tpl->tpl_vars['_MERGE_TYPE_LABEL']->key;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['_MERGE_TYPE']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['_MERGE_TYPE_LABEL']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><strong><?php echo vtranslate('LBL_SELECT_MERGE_FIELDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></td>
        </tr>
        <tr>
            <td>
                <table>
                    <tr>
                        <td><b><?php echo vtranslate('LBL_AVAILABLE_FIELDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</b></td>
                        <td></td>
                        <td><b><?php echo vtranslate('LBL_SELECTED_FIELDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</b></td>
                    </tr>
                    <tr>
                        <td>
                            <select id="available_fields" multiple size="10" name="available_fields" class="txtBox" style="width: 100%">
                                <?php  $_smarty_tpl->tpl_vars['_FIELD_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_FIELD_INFO']->_loop = false;
 $_smarty_tpl->tpl_vars['_FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['AVAILABLE_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_FIELD_INFO']->key => $_smarty_tpl->tpl_vars['_FIELD_INFO']->value){
$_smarty_tpl->tpl_vars['_FIELD_INFO']->_loop = true;
 $_smarty_tpl->tpl_vars['_FIELD_NAME']->value = $_smarty_tpl->tpl_vars['_FIELD_INFO']->key;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['_FIELD_NAME']->value=='tags'){?> <?php continue 1?> <?php }?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['_FIELD_INFO']->value->getFieldLabelKey(),$_smarty_tpl->tpl_vars['FOR_MODULE']->value);?>
</option>
                                <?php } ?>
                            </select>
                        </td>
                        <td width="6%">
                            <div align="center">
                                <button class="btn btn-default btn-lg" onClick ="return Vtiger_Import_Js.copySelectedOptions('#available_fields', '#selected_merge_fields')"><span class="glyphicon glyphicon-arrow-right"></span></button>
                                <button class="btn btn-default btn-lg" onClick ="return Vtiger_Import_Js.removeSelectedOptions('#selected_merge_fields')"><span class="glyphicon glyphicon-arrow-left"></span></button>
                            </div>
                        </td>
                        <td>
                            <input type="hidden" id="merge_fields" size="10" name="merge_fields" value="" />
                            <select id="selected_merge_fields" size="10" name="selected_merge_fields" multiple class="txtBox" style="width: 100%">
                                <?php  $_smarty_tpl->tpl_vars['_FIELD_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_FIELD_INFO']->_loop = false;
 $_smarty_tpl->tpl_vars['_FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ENTITY_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_FIELD_INFO']->key => $_smarty_tpl->tpl_vars['_FIELD_INFO']->value){
$_smarty_tpl->tpl_vars['_FIELD_INFO']->_loop = true;
 $_smarty_tpl->tpl_vars['_FIELD_NAME']->value = $_smarty_tpl->tpl_vars['_FIELD_INFO']->key;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['_FIELD_INFO']->value->getFieldLabelKey(),$_smarty_tpl->tpl_vars['FOR_MODULE']->value);?>
</option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>

<?php }} ?>