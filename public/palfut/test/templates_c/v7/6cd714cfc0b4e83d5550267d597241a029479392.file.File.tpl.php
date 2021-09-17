<?php /* Smarty version Smarty-3.1.7, created on 2021-06-07 16:24:03
         compiled from "/home1/emarket/public_html/public/palfut/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/File.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175085639260be4823980295-25568602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cd714cfc0b4e83d5550267d597241a029479392' => 
    array (
      0 => '/home1/emarket/public_html/public/palfut/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/File.tpl',
      1 => 1602587794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175085639260be4823980295-25568602',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'MODULE' => 0,
    'FIELD_VALUE' => 0,
    'SPECIAL_VALIDATOR' => 0,
    'FIELD_INFO' => 0,
    'MAX_UPLOAD_LIMIT_MB' => 0,
    'MAX_UPLOAD_LIMIT_BYTES' => 0,
    'IS_EXTERNAL_LOCATION_TYPE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60be48239a0eb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60be48239a0eb')) {function content_60be48239a0eb($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars["FIELD_INFO"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo(), null, 0);?><?php $_smarty_tpl->tpl_vars['FIELD_VALUE'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'), null, 0);?><?php $_smarty_tpl->tpl_vars["SPECIAL_VALIDATOR"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator(), null, 0);?><div class="fileUploadContainer text-left"><div class="fileUploadBtn btn btn-sm btn-primary"><span><i class="fa fa-laptop"></i> <?php echo vtranslate('LBL_ATTACH_FILES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span><input type="file" id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
" class="inputElement <?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='ModComments'){?> multi <?php }?> " maxlength="6" name="<?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='ModComments'){?><?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
[]<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
<?php }?>"value="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
" <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)){?>data-validator='<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
'<?php }?><?php if ($_smarty_tpl->tpl_vars['FIELD_INFO']->value["mandatory"]==true){?> data-rule-required="true" <?php }?><?php if (count($_smarty_tpl->tpl_vars['FIELD_INFO']->value['validator'])){?>data-specific-rules='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value["validator"]);?>
'<?php }?>/></div>&nbsp;&nbsp;<span class="uploadFileSizeLimit fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="<?php echo vtranslate('LBL_MAX_UPLOAD_SIZE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['MAX_UPLOAD_LIMIT_MB']->value;?>
 <?php echo vtranslate('MB',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><span class="maxUploadSize" data-value="<?php echo $_smarty_tpl->tpl_vars['MAX_UPLOAD_LIMIT_BYTES']->value;?>
"></span></span><div class="uploadedFileDetails <?php if ($_smarty_tpl->tpl_vars['IS_EXTERNAL_LOCATION_TYPE']->value){?>hide<?php }?>"><div class="uploadedFileSize"></div><div class="uploadedFileName"><?php if (!empty($_smarty_tpl->tpl_vars['FIELD_VALUE']->value)&&!$_REQUEST['isDuplicate']){?>[<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_VALUE']->value);?>
]<?php }?></div></div></div>
			<script>
				jQuery(document).ready(function() {
					var fileElements = jQuery('input[type="file"]',jQuery(this).data('fieldinfo') == 'file');
					fileElements.on('change',function(e) {
						var element = jQuery(this);
						var fileSize = e.target.files[0].size;
						var maxFileSize = element.closest('form').find('.maxUploadSize').data('value');
						if(fileSize > maxFileSize) {
							alert(app.vtranslate('JS_EXCEEDS_MAX_UPLOAD_SIZE'));
							element.val(null);
						}
					});
				});
			</script>
		
<?php }} ?>