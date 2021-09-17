<?php /* Smarty version Smarty-3.1.7, created on 2021-08-13 12:56:37
         compiled from "/home1/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/Image.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21842093861166c055e4718-19707779%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfb60eb48e859dae21c9f26883883591859c9609' => 
    array (
      0 => '/home1/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/Image.tpl',
      1 => 1602587794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21842093861166c055e4718-19707779',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'IMAGE_DETAILS' => 0,
    'RECORD_STRUCTURE_MODEL' => 0,
    'MODULE_NAME' => 0,
    'FIELD_MODEL' => 0,
    'MODULE' => 0,
    'FIELD_INFO' => 0,
    'SPECIAL_VALIDATOR' => 0,
    'IS_EXTERNAL_LOCATION_TYPE' => 0,
    'FIELD_VALUE' => 0,
    'IMAGE_INFO' => 0,
    'ITER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_61166c05604e8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61166c05604e8')) {function content_61166c05604e8($_smarty_tpl) {?>

<?php if (!is_array($_smarty_tpl->tpl_vars['IMAGE_DETAILS']->value)){?><?php $_smarty_tpl->tpl_vars['IMAGE_DETAILS'] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD_STRUCTURE_MODEL']->value->getRecord()->getImageDetails(), null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value=='Webforms'){?><input type="text" readonly="" /><?php }else{ ?><?php $_smarty_tpl->tpl_vars["SPECIAL_VALIDATOR"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator(), null, 0);?><?php $_smarty_tpl->tpl_vars["FIELD_INFO"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo(), null, 0);?><div class="fileUploadContainer text-left"><div class="fileUploadBtn btn btn-primary"><span><i class="fa fa-laptop"></i> <?php echo vtranslate('LBL_UPLOAD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span><input type="file" class="inputElement <?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='Products'){?>multi max-6<?php }?> <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue')&&$_smarty_tpl->tpl_vars['FIELD_INFO']->value["mandatory"]==true){?> ignore-validation <?php }?>" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue');?>
"<?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)){?>data-validator="<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['FIELD_INFO']->value["mandatory"]==true){?> data-rule-required="true" <?php }?><?php if (count($_smarty_tpl->tpl_vars['FIELD_INFO']->value['validator'])){?>data-specific-rules='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value["validator"]);?>
'<?php }?> /></div><div class="uploadedFileDetails <?php if ($_smarty_tpl->tpl_vars['IS_EXTERNAL_LOCATION_TYPE']->value){?>hide<?php }?>"><div class="uploadedFileSize"></div><div class="uploadedFileName"><?php if (!empty($_smarty_tpl->tpl_vars['FIELD_VALUE']->value)&&!$_REQUEST['isDuplicate']){?>[<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_VALUE']->value);?>
]<?php }?></div></div></div><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType()=='image'||$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType()=='file'){?><?php if ($_smarty_tpl->tpl_vars['MODULE']->value!='Products'){?><div class='redColor'><?php echo vtranslate('LBL_NOTE_EXISTING_ATTACHMENTS_WILL_BE_REPLACED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='Products'){?><div id="MultiFile1_wrap_list" class="MultiFile-list"></div><?php }?><?php  $_smarty_tpl->tpl_vars['IMAGE_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['IMAGE_INFO']->_loop = false;
 $_smarty_tpl->tpl_vars['ITER'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['IMAGE_DETAILS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['IMAGE_INFO']->key => $_smarty_tpl->tpl_vars['IMAGE_INFO']->value){
$_smarty_tpl->tpl_vars['IMAGE_INFO']->_loop = true;
 $_smarty_tpl->tpl_vars['ITER']->value = $_smarty_tpl->tpl_vars['IMAGE_INFO']->key;
?><div class="row" style="margin-top:5px;"><?php if (!empty($_smarty_tpl->tpl_vars['IMAGE_INFO']->value['url'])){?><span class="col-lg-6" name="existingImages"><img src="<?php echo $_smarty_tpl->tpl_vars['IMAGE_INFO']->value['url'];?>
" data-image-id="<?php echo $_smarty_tpl->tpl_vars['IMAGE_INFO']->value['id'];?>
" width="400" height="250" ></span><span class="col-lg-3"><span class="row"><span class="col-lg-11">[<?php echo $_smarty_tpl->tpl_vars['IMAGE_INFO']->value['name'];?>
]</span><span class="col-lg-1"><input type="button" id="file_<?php echo $_smarty_tpl->tpl_vars['ITER']->value;?>
" value="<?php echo vtranslate('LBL_DELETE','Vtiger');?>
" class="imageDelete"></span></span></span><?php }?></div><?php } ?><?php }?>
<?php }} ?>