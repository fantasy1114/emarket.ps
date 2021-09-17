<?php /* Smarty version Smarty-3.1.7, created on 2021-04-28 09:44:00
         compiled from "/home1/emarket/public_html/public/palfut/includes/runtime/../../layouts/v7/modules/Import/ImportError.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64836695160892e60c4e668-64081690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8829d5e101e3ce4cb9849f5ccf1c9b12aa20d582' => 
    array (
      0 => '/home1/emarket/public_html/public/palfut/includes/runtime/../../layouts/v7/modules/Import/ImportError.tpl',
      1 => 1607784100,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64836695160892e60c4e668-64081690',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'TITLE' => 0,
    'FOR_MODULE' => 0,
    'ERROR_MESSAGE' => 0,
    'ERROR_DETAILS' => 0,
    '_TITLE' => 0,
    '_VALUE' => 0,
    'CUSTOM_ACTIONS' => 0,
    '_LABEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60892e60c8f88',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60892e60c8f88')) {function content_60892e60c8f88($_smarty_tpl) {?>
<div class='fc-overlay-modal modal-content'>
    <div class="overlayHeader">
        <?php ob_start();?><?php echo vtranslate('LBL_IMPORT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo vtranslate('LBL_ERROR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['TITLE'] = new Smarty_variable($_tmp1." - ".$_tmp2, null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['TITLE']->value), 0);?>
 
    </div>
    <div class='modal-body' style="margin-bottom:380px" id = "landingPageDiv">
        <input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
" />
        <div class = "alert alert-danger">
            <?php echo $_smarty_tpl->tpl_vars['ERROR_MESSAGE']->value;?>

        </div>
        <table class = "table table-borderless">
            <tr>
                <td valign="top">
                    <table  class="table table-borderless">
                        
                        <?php if ($_smarty_tpl->tpl_vars['ERROR_DETAILS']->value!=''){?>
                            <tr>
                                <td>
                                    <?php echo vtranslate('ERR_DETAILS_BELOW',$_smarty_tpl->tpl_vars['MODULE']->value);?>

                                    <table cellpadding="5" cellspacing="0">
                                        <?php  $_smarty_tpl->tpl_vars['_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['_TITLE'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ERROR_DETAILS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_VALUE']->key => $_smarty_tpl->tpl_vars['_VALUE']->value){
$_smarty_tpl->tpl_vars['_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['_TITLE']->value = $_smarty_tpl->tpl_vars['_VALUE']->key;
?>
                                            <tr>
                                                <td><?php echo $_smarty_tpl->tpl_vars['_TITLE']->value;?>
</td>
                                                <td>-</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['_VALUE']->value;?>
</td>
                                            </tr>
                                        <?php } ?>
                                    </table>
                                </td>
                            </tr>
                        <?php }?>
                    </table>
                </td>
            </tr>
            <tr>
                <td align="right">

                </td>
            </tr>
        </table>
    </div> 
    <div class='modal-overlay-footer border1px clearfix'>
        <div class="row clearfix">
            <div class='textAlignCenter col-lg-12 col-md-12 col-sm-12 '>
                <?php if ($_smarty_tpl->tpl_vars['CUSTOM_ACTIONS']->value!=''){?>
                    <?php  $_smarty_tpl->tpl_vars['_ACTION'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_ACTION']->_loop = false;
 $_smarty_tpl->tpl_vars['_LABEL'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CUSTOM_ACTIONS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_ACTION']->key => $_smarty_tpl->tpl_vars['_ACTION']->value){
$_smarty_tpl->tpl_vars['_ACTION']->_loop = true;
 $_smarty_tpl->tpl_vars['_LABEL']->value = $_smarty_tpl->tpl_vars['_ACTION']->key;
?>
                        <button name="<?php echo $_smarty_tpl->tpl_vars['_LABEL']->value;?>
" onclick="return Vtiger_Import_Js.clearSheduledImportData()" class="btn btn-danger btn-lg"><?php echo vtranslate($_smarty_tpl->tpl_vars['_LABEL']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button>
                    <?php } ?>
                <?php }?>
            </div>
        </div>
    </div>
</div><?php }} ?>