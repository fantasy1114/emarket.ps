<?php /* Smarty version Smarty-3.1.7, created on 2021-07-10 11:27:50
         compiled from "/home1/emarket/public_html/public/dana/includes/runtime/../../layouts/v7/modules/Import/ImportSchedule.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5565310960e9843685a8a7-19025408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb8a288f9ad4404f423e5f25b668042126665224' => 
    array (
      0 => '/home1/emarket/public_html/public/dana/includes/runtime/../../layouts/v7/modules/Import/ImportSchedule.tpl',
      1 => 1625912898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5565310960e9843685a8a7-19025408',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'HEADER_TITLE' => 0,
    'ERROR_MESSAGE' => 0,
    'ENABLE_SCHEDULE_IMPORT_CRON' => 0,
    'FOR_MODULE' => 0,
    'IMPORT_ID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60e984368ab2a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60e984368ab2a')) {function content_60e984368ab2a($_smarty_tpl) {?>



<div class='fc-overlay-modal modal-content'>
    <div class="overlayHeader">
        <?php ob_start();?><?php echo vtranslate('LBL_IMPORT_SCHEDULED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['HEADER_TITLE'] = new Smarty_variable($_tmp1, null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>

    </div>
    <div class='modal-body' style="margin-bottom:250px">
        <div>
            <table class="table table-borderless">
                <?php if ($_smarty_tpl->tpl_vars['ERROR_MESSAGE']->value!=''){?>
                    <tr>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['ERROR_MESSAGE']->value;?>

                        </td>
                    </tr>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['ENABLE_SCHEDULE_IMPORT_CRON']->value){?>
                    <tr>
                        <td style="padding-left: 15px;">
                            <?php echo vtranslate('LBL_ENABLE_CRON',$_smarty_tpl->tpl_vars['MODULE']->value);?>

                        </td>
                    </tr>
                <?php }?>
                <tr>
                    <td>
                        <table cellpadding="10" cellspacing="0" align="center" class="table table-borderless">
                            <tr>
                                <td><?php echo vtranslate('LBL_SCHEDULED_IMPORT_DETAILS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>   
    <div class='modal-overlay-footer border1px clearfix'>
        <div class="row clearfix">
            <div class='textAlignCenter col-lg-12 col-md-12 col-sm-12 '>
                <button  name="cancel" value="<?php echo vtranslate('LBL_CANCEL_IMPORT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="btn btn-lg btn-danger"
                         onclick="Vtiger_Import_Js.cancelImport('index.php?module=<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
&view=Import&mode=cancelImport&import_id=<?php echo $_smarty_tpl->tpl_vars['IMPORT_ID']->value;?>
')"><?php echo vtranslate('LBL_CANCEL_IMPORT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button>
                <button class="btn btn-success btn-lg" name="ok" onclick="Vtiger_Import_Js.scheduleImport('index.php?module=<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
&view=Import')"><?php echo vtranslate('LBL_OK_BUTTON_LABEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button> 
            </div>
        </div>
    </div>
</div>
<?php }} ?>