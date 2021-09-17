<?php /* Smarty version Smarty-3.1.7, created on 2021-03-06 18:39:58
         compiled from "/home/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/Settings/Vtiger/OutgoingServerEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9604286016043cc7edd4526-78910710%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '316d4c7146a47a40d6311911c4805944bd010461' => 
    array (
      0 => '/home/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/Settings/Vtiger/OutgoingServerEdit.tpl',
      1 => 1602587794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9604286016043cc7edd4526-78910710',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'CURRENT_USER_MODEL' => 0,
    'MODEL' => 0,
    'WIDTHTYPE' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6043cc7ee863a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6043cc7ee863a')) {function content_6043cc7ee863a($_smarty_tpl) {?>


<div class="editViewPageDiv editViewContainer" id="EditViewOutgoing" style="padding-top:0px;"><div class="col-lg-12 col-md-12 col-sm-12"><div><h3 style="margin-top: 0px;"><?php echo vtranslate('LBL_OUTGOING_SERVER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3>&nbsp;<?php echo vtranslate('LBL_OUTGOING_SERVER_DESC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><?php $_smarty_tpl->tpl_vars['WIDTHTYPE'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('rowheight'), null, 0);?><form id="OutgoingServerForm" data-detail-url="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getDetailViewUrl();?>
" method="POST"><input type="hidden" name="default" value="false" /><input type="hidden" name="server_port" value="0" /><input type="hidden" name="server_type" value="email"/><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->get('id');?>
"/><div class="blockData"><br><div class="hide errorMessage"><div class="alert alert-danger"><?php echo vtranslate('LBL_TESTMAILSTATUS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<strong><?php echo vtranslate('LBL_MAILSENDERROR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></div></div><div class="block"><div><div class="btn-group pull-right"><button class="btn t-btn resetButton" type="button" title="<?php echo vtranslate('LBL_RESET_TO_DEFAULT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><strong><?php echo vtranslate('LBL_RESET_TO_DEFAULT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><h4><?php echo vtranslate('LBL_MAIL_SERVER_SMTP',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h4></div><hr><table class="table editview-table no-border"><tbody><tr><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 fieldLabel"><label><?php echo vtranslate('LBL_SERVER_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 fieldValue"><div class=" col-lg-6 col-md-6 col-sm-12"><select class="select2 inputElement col-lg-12 col-md-12 col-lg-12" name="serverType"><option value=""><?php echo vtranslate('LBL_SELECT_OPTION','Vtiger');?>
</option><option value="<?php echo "ssl://smtp.gmail.com:465";?>
" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['MODEL']->value->get('server');?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=="ssl://smtp.gmail.com:465"){?> selected <?php }?>><?php echo vtranslate('LBL_GMAIL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 </option><option value="<?php echo "smtp.live.com";?>
" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['MODEL']->value->get('server');?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2=="smtp.live.com"){?> selected <?php }?>><?php echo vtranslate('LBL_HOTMAIL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="<?php echo "smtp-mail.outlook.com";?>
" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['MODEL']->value->get('server');?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3=="smtp.live.com"){?> selected <?php }?>><?php echo vtranslate('LBL_OFFICE365',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="<?php echo "smtp.mail.yahoo.com";?>
" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['MODEL']->value->get('server');?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4=="smtp.mail.yahoo.com"){?> selected <?php }?>><?php echo vtranslate('LBL_YAHOO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value=""><?php echo vtranslate('LBL_OTHERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></div></td></tr><tr><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 fieldLabel"><label><?php echo vtranslate('LBL_SERVER_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label>&nbsp;<span class="redColor">*</span></td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 fieldValue"><div class=" col-lg-6 col-md-6 col-sm-12"><input type="text" class="inputElement" name="server" data-rule-required="true" value="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->get('server');?>
" ></div></td></tr><tr><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 fieldLabel"><label><?php echo vtranslate('LBL_USER_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 fieldValue" ><div class=" col-lg-6 col-md-6 col-sm-12"><input type="text" class="inputElement" name="server_username" value="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->get('server_username');?>
" ></div></td></tr><tr><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 fieldLabel"><label><?php echo vtranslate('LBL_PASSWORD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 fieldValue" ><div class=" col-lg-6 col-md-6 col-sm-12"><input type="password" class="inputElement" name="server_password" value="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->get('server_password');?>
" ></div></td></tr><tr><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 fieldLabel"><label><?php echo vtranslate('LBL_FROM_EMAIL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 fieldValue" ><div class=" col-lg-6 col-md-6 col-sm-12"><input type="text" class="inputElement" name="from_email_field" data-rule-email="true" data-rule-illegal="true" value="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->get('from_email_field');?>
" ></div> </td></tr><tr><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 fieldLabel">&nbsp;</td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 fieldValue" ><div class=" col-lg-12 col-md-12 col-sm-12"><div class="alert alert-info alert-mini"><?php echo vtranslate('LBL_OUTGOING_SERVER_FROM_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></div></td></tr><tr><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 fieldLabel"><label><?php echo vtranslate('LBL_REQUIRES_AUTHENTICATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" style="border-left: none;"><div class=" col-lg-6 col-md-6 col-sm-12"><input type="checkbox" name="smtp_auth" <?php if ($_smarty_tpl->tpl_vars['MODEL']->value->isSmtpAuthEnabled()){?>checked<?php }?> ></div></td></tr></tbody></table></div><br><div class='modal-overlay-footer clearfix'><div class="row clearfix"><div class='textAlignCenter col-lg-12 col-md-12 col-sm-12 '><button type='submit' class='btn btn-success saveButton' ><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button>&nbsp;&nbsp;<a class='cancelLink' data-dismiss="modal" href="#"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div></div></div></div></form></div></div>
<?php }} ?>