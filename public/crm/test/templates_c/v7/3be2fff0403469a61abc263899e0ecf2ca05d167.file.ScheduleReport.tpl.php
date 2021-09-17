<?php /* Smarty version Smarty-3.1.7, created on 2021-03-12 13:28:08
         compiled from "/home/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/Reports/ScheduleReport.tpl" */ ?>
<?php /*%%SmartyHeaderCode:557987363604b6c6807ab13-76004803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3be2fff0403469a61abc263899e0ecf2ca05d167' => 
    array (
      0 => '/home/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/Reports/ScheduleReport.tpl',
      1 => 1602587794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '557987363604b6c6807ab13-76004803',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_report_scheduled' => 0,
    'SCHEDULEDREPORTS' => 0,
    'MODULE' => 0,
    'scheduleid' => 0,
    'QUALIFIED_MODULE' => 0,
    'dayOfWeek' => 0,
    'dayOfMonth' => 0,
    'specificDate' => 0,
    'specificDate1' => 0,
    'CURRENT_USER' => 0,
    'ANNUAL_DATES' => 0,
    'DATES' => 0,
    'ALL_ACTIVEUSER_LIST' => 0,
    'USER_ID' => 0,
    'USERID' => 0,
    'recipients' => 0,
    'USER_NAME' => 0,
    'ALL_ACTIVEGROUP_LIST' => 0,
    'GROUP_ID' => 0,
    'GROUPID' => 0,
    'GROUP_NAME' => 0,
    'ROLES' => 0,
    'ROLE_ID' => 0,
    'ROLEID' => 0,
    'ROLE_OBJ' => 0,
    'specificemailids' => 0,
    'TYPE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_604b6c6812ae1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_604b6c6812ae1')) {function content_604b6c6812ae1($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['show_report_scheduled'] = new Smarty_variable(true, null, 0);?><div class="row"><div><label><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['show_report_scheduled']->value==false){?> disabled="disabled" <?php }?> <?php if ($_smarty_tpl->tpl_vars['show_report_scheduled']->value==true&&$_smarty_tpl->tpl_vars['SCHEDULEDREPORTS']->value->get('scheduleid')!=''){?> checked="checked" <?php }?> value="<?php if ($_smarty_tpl->tpl_vars['SCHEDULEDREPORTS']->value->get('scheduleid')!=''){?>true<?php }?>" name='enable_schedule' style="margin-top: 0px !important;"> &nbsp;<strong><?php echo vtranslate('LBL_SCHEDULE_REPORTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></label></div></div><?php if ($_smarty_tpl->tpl_vars['show_report_scheduled']->value==true){?><div id="scheduleBox" class='row well contentsBackground <?php if ($_smarty_tpl->tpl_vars['SCHEDULEDREPORTS']->value->get('scheduleid')==''){?> hide <?php }?>'><div class='col-lg-12' style="padding:5px 0px;"><div class='col-lg-3' style='position:relative;top:5px;'><?php echo vtranslate('LBL_RUN_REPORT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div class='col-lg-4'><?php $_smarty_tpl->tpl_vars['scheduleid'] = new Smarty_variable($_smarty_tpl->tpl_vars['SCHEDULEDREPORTS']->value->get('scheduleid'), null, 0);?><select class='select2 inputElement col-lg-3' id='schtypeid' name='schtypeid' style="width: 280px;"><option value="1" <?php if ($_smarty_tpl->tpl_vars['scheduleid']->value==1){?>selected<?php }?>><?php echo vtranslate('LBL_DAILY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><option value="2" <?php if ($_smarty_tpl->tpl_vars['scheduleid']->value==2){?>selected<?php }?>><?php echo vtranslate('LBL_WEEKLY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><option value="5" <?php if ($_smarty_tpl->tpl_vars['scheduleid']->value==5){?>selected<?php }?>><?php echo vtranslate('LBL_SPECIFIC_DATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="3" <?php if ($_smarty_tpl->tpl_vars['scheduleid']->value==3){?>selected<?php }?>><?php echo vtranslate('LBL_MONTHLY_BY_DATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><option value="4" <?php if ($_smarty_tpl->tpl_vars['scheduleid']->value==4){?>selected<?php }?>><?php echo vtranslate('LBL_YEARLY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option></select></div></div><div class='col-lg-12 <?php if ($_smarty_tpl->tpl_vars['scheduleid']->value!=2){?> hide <?php }?>' id='scheduledWeekDay' style='padding:5px 0px;'><div class='col-lg-3' style='position:relative;top:5px;'><?php echo vtranslate('LBL_ON_THESE_DAYS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div class='col-lg-4'><?php $_smarty_tpl->tpl_vars['dayOfWeek'] = new Smarty_variable(Zend_Json::decode($_smarty_tpl->tpl_vars['SCHEDULEDREPORTS']->value->get('schdayoftheweek')), null, 0);?><select style='width:280px;' multiple class='select2'  name='schdayoftheweek' data-rule-required="true" id='schdayoftheweek'><option value="7" <?php if (is_array($_smarty_tpl->tpl_vars['dayOfWeek']->value)&&in_array('7',$_smarty_tpl->tpl_vars['dayOfWeek']->value)){?> selected <?php }?>><?php echo vtranslate('LBL_DAY0','Calendar');?>
</option><option value="1" <?php if (is_array($_smarty_tpl->tpl_vars['dayOfWeek']->value)&&in_array('1',$_smarty_tpl->tpl_vars['dayOfWeek']->value)){?> selected <?php }?>><?php echo vtranslate('LBL_DAY1','Calendar');?>
</option><option value="2" <?php if (is_array($_smarty_tpl->tpl_vars['dayOfWeek']->value)&&in_array('2',$_smarty_tpl->tpl_vars['dayOfWeek']->value)){?> selected <?php }?>><?php echo vtranslate('LBL_DAY2','Calendar');?>
</option><option value="3" <?php if (is_array($_smarty_tpl->tpl_vars['dayOfWeek']->value)&&in_array('3',$_smarty_tpl->tpl_vars['dayOfWeek']->value)){?> selected <?php }?>><?php echo vtranslate('LBL_DAY3','Calendar');?>
</option><option value="4" <?php if (is_array($_smarty_tpl->tpl_vars['dayOfWeek']->value)&&in_array('4',$_smarty_tpl->tpl_vars['dayOfWeek']->value)){?> selected <?php }?>><?php echo vtranslate('LBL_DAY4','Calendar');?>
</option><option value="5" <?php if (is_array($_smarty_tpl->tpl_vars['dayOfWeek']->value)&&in_array('5',$_smarty_tpl->tpl_vars['dayOfWeek']->value)){?> selected <?php }?>><?php echo vtranslate('LBL_DAY5','Calendar');?>
</option><option value="6" <?php if (is_array($_smarty_tpl->tpl_vars['dayOfWeek']->value)&&in_array('6',$_smarty_tpl->tpl_vars['dayOfWeek']->value)){?> selected <?php }?>><?php echo vtranslate('LBL_DAY6','Calendar');?>
</option></select></div></div><div class='col-lg-12 <?php if ($_smarty_tpl->tpl_vars['scheduleid']->value!=3){?> hide <?php }?>' id='scheduleMonthByDates' style="padding:5px 0px;"><div class='col-lg-3' style='position:relative;top:5px;'><?php echo vtranslate('LBL_ON_THESE_DAYS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div class='col-lg-4'><?php $_smarty_tpl->tpl_vars['dayOfMonth'] = new Smarty_variable(Zend_Json::decode($_smarty_tpl->tpl_vars['SCHEDULEDREPORTS']->value->get('schdayofthemonth')), null, 0);?><select style="width: 280px !important;" multiple class="select2 col-lg-6" data-rule-required="true"  name='schdayofthemonth' id='schdayofthemonth' ><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['foo'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['name'] = 'foo';
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] = is_array($_loop=31) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total']);
?><option value=<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['foo']['iteration'];?>
 <?php if (is_array($_smarty_tpl->tpl_vars['dayOfMonth']->value)&&in_array($_smarty_tpl->getVariable('smarty')->value['section']['foo']['iteration'],$_smarty_tpl->tpl_vars['dayOfMonth']->value)){?>selected<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['foo']['iteration'];?>
</option><?php endfor; endif; ?></select></div></div><div class='col-lg-12 <?php if ($_smarty_tpl->tpl_vars['scheduleid']->value!=5){?> hide <?php }?>' id='scheduleByDate' style="padding:5px 0px;"><div class='col-lg-3' style='position:relative;top:5px;'><?php echo vtranslate('LBL_CHOOSE_DATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div class='col-lg-2'><div class="input-group inputElement date" style="margin-bottom: 3px"><?php $_smarty_tpl->tpl_vars['specificDate'] = new Smarty_variable(Zend_Json::decode($_smarty_tpl->tpl_vars['SCHEDULEDREPORTS']->value->get('schdate')), null, 0);?><?php if ($_smarty_tpl->tpl_vars['specificDate']->value[0]!=''){?> <?php $_smarty_tpl->tpl_vars['specificDate1'] = new Smarty_variable(DateTimeField::convertToUserFormat($_smarty_tpl->tpl_vars['specificDate']->value[0]), null, 0);?> <?php }?><input style='width: 185px;' type="text" class="dateField form-control" id="schdate" name="schdate" value="<?php echo $_smarty_tpl->tpl_vars['specificDate1']->value;?>
" data-date-format="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->date_format;?>
" data-rule-required="true" /><span class="input-group-addon"><i class="fa fa-calendar "></i></span></div></div></div><div class='col-lg-12 <?php if ($_smarty_tpl->tpl_vars['scheduleid']->value!=4){?> hide <?php }?>' id='scheduleAnually' style='padding:5px 0px;'><div class='col-lg-3' style='position:relative;top:5px;'><?php echo vtranslate('LBL_SELECT_MONTH_AND_DAY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div class='col-lg-5'><div id='annualDatePicker'></div></div><div class='col-lg-3'><div style='padding-bottom:5px;'><?php echo vtranslate('LBL_SELECTED_DATES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div><input type=hidden id=hiddenAnnualDates value='<?php echo $_smarty_tpl->tpl_vars['SCHEDULEDREPORTS']->value->get('schannualdates');?>
' /><?php $_smarty_tpl->tpl_vars['ANNUAL_DATES'] = new Smarty_variable(Zend_Json::decode($_smarty_tpl->tpl_vars['SCHEDULEDREPORTS']->value->get('schannualdates')), null, 0);?><select multiple class="select2 inputElement col-lg-3" id='annualDates' name='schannualdates' data-rule-required="true"  data-date-format="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->date_format;?>
"><?php  $_smarty_tpl->tpl_vars['DATES'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['DATES']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ANNUAL_DATES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['DATES']->key => $_smarty_tpl->tpl_vars['DATES']->value){
$_smarty_tpl->tpl_vars['DATES']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['DATES']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['DATES']->value;?>
</option><?php } ?></select></div></div></div><div class='col-lg-12' id='scheduledTime' style='padding:5px 0px 10px 0px;'><div class='col-lg-3' style='position:relative;top:5px;'><?php echo vtranslate('LBL_AT_TIME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<span class="redColor">*</span></div><div class='col-lg-2' id='schtime'><div class='input-group inputElement time'><input type='text' class='timepicker-default form-control ui-timepicker-input' data-format='<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('hour_format');?>
' name='schtime' value="<?php echo $_smarty_tpl->tpl_vars['SCHEDULEDREPORTS']->value->get('schtime');?>
" data-rule-required="true" data-rule-time="true" /><span class="input-group-addon"><i class="fa fa-clock-o"></i></span></div></div></div><div class='col-lg-12' id='recipientsList' style='padding:5px 0px 10px 0px;'><div class='col-lg-3' style='position:relative;top:5px;'><?php echo vtranslate('LBL_SELECT_RECIEPIENTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<span class="redColor">*</span></div><div class='col-lg-4'><?php $_smarty_tpl->tpl_vars['ALL_ACTIVEUSER_LIST'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENT_USER']->value->getAccessibleUsers(), null, 0);?><?php $_smarty_tpl->tpl_vars['ALL_ACTIVEGROUP_LIST'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENT_USER']->value->getAccessibleGroups(), null, 0);?><?php $_smarty_tpl->tpl_vars['recipients'] = new Smarty_variable(Zend_Json::decode($_smarty_tpl->tpl_vars['SCHEDULEDREPORTS']->value->get('recipients')), null, 0);?><select multiple class="select2 col-lg-6" id='recipients' name='recipients' data-rule-required="true" style="width: 280px !important;"><optgroup label="<?php echo vtranslate('LBL_USERS');?>
"><?php  $_smarty_tpl->tpl_vars['USER_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['USER_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['USER_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ALL_ACTIVEUSER_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['USER_NAME']->key => $_smarty_tpl->tpl_vars['USER_NAME']->value){
$_smarty_tpl->tpl_vars['USER_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['USER_ID']->value = $_smarty_tpl->tpl_vars['USER_NAME']->key;
?><?php $_smarty_tpl->tpl_vars['USERID'] = new Smarty_variable("USER::".($_smarty_tpl->tpl_vars['USER_ID']->value), null, 0);?><option value="<?php echo $_smarty_tpl->tpl_vars['USERID']->value;?>
" <?php if (is_array($_smarty_tpl->tpl_vars['recipients']->value)&&in_array($_smarty_tpl->tpl_vars['USERID']->value,$_smarty_tpl->tpl_vars['recipients']->value)){?> selected <?php }?> data-picklistvalue= '<?php echo $_smarty_tpl->tpl_vars['USER_NAME']->value;?>
'> <?php echo $_smarty_tpl->tpl_vars['USER_NAME']->value;?>
 </option><?php } ?></optgroup><optgroup label="<?php echo vtranslate('LBL_GROUPS');?>
"><?php  $_smarty_tpl->tpl_vars['GROUP_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['GROUP_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['GROUP_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ALL_ACTIVEGROUP_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['GROUP_NAME']->key => $_smarty_tpl->tpl_vars['GROUP_NAME']->value){
$_smarty_tpl->tpl_vars['GROUP_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['GROUP_ID']->value = $_smarty_tpl->tpl_vars['GROUP_NAME']->key;
?><?php $_smarty_tpl->tpl_vars['GROUPID'] = new Smarty_variable("GROUP::".($_smarty_tpl->tpl_vars['GROUP_ID']->value), null, 0);?><option value="<?php echo $_smarty_tpl->tpl_vars['GROUPID']->value;?>
" <?php if (is_array($_smarty_tpl->tpl_vars['recipients']->value)&&in_array($_smarty_tpl->tpl_vars['GROUPID']->value,$_smarty_tpl->tpl_vars['recipients']->value)){?> selected <?php }?> data-picklistvalue= '<?php echo $_smarty_tpl->tpl_vars['GROUP_NAME']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['GROUP_NAME']->value;?>
</option><?php } ?></optgroup><optgroup label="<?php echo vtranslate('Roles','Roles');?>
"><?php  $_smarty_tpl->tpl_vars['ROLE_OBJ'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ROLE_OBJ']->_loop = false;
 $_smarty_tpl->tpl_vars['ROLE_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ROLES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ROLE_OBJ']->key => $_smarty_tpl->tpl_vars['ROLE_OBJ']->value){
$_smarty_tpl->tpl_vars['ROLE_OBJ']->_loop = true;
 $_smarty_tpl->tpl_vars['ROLE_ID']->value = $_smarty_tpl->tpl_vars['ROLE_OBJ']->key;
?><?php $_smarty_tpl->tpl_vars['ROLEID'] = new Smarty_variable("ROLE::".($_smarty_tpl->tpl_vars['ROLE_ID']->value), null, 0);?><option value="<?php echo $_smarty_tpl->tpl_vars['ROLEID']->value;?>
" <?php if (is_array($_smarty_tpl->tpl_vars['recipients']->value)&&in_array($_smarty_tpl->tpl_vars['ROLEID']->value,$_smarty_tpl->tpl_vars['recipients']->value)){?> selected <?php }?> data-picklistvalue= '<?php echo $_smarty_tpl->tpl_vars['ROLE_OBJ']->value->get('rolename');?>
'><?php echo $_smarty_tpl->tpl_vars['ROLE_OBJ']->value->get('rolename');?>
</option><?php } ?></optgroup></select></div></div><div class='col-lg-12' id='specificemailsids' style='padding:5px 0px 10px 0px;'><div class='col-lg-3' style='position:relative;top:5px;'><?php echo vtranslate('LBL_SPECIFIC_EMAIL_ADDRESS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div class='col-lg-4'><?php $_smarty_tpl->tpl_vars['specificemailids'] = new Smarty_variable(Zend_Json::decode($_smarty_tpl->tpl_vars['SCHEDULEDREPORTS']->value->get('specificemails')), null, 0);?><input id="specificemails" style="width: 281px !important;" class="col-lg-6 inputElement" type="text" value="<?php echo $_smarty_tpl->tpl_vars['specificemailids']->value;?>
" name="specificemails" data-validation-engine="validate[funcCall[Vtiger_MultiEmails_Validator_Js.invokeValidation]]"></input></div></div><?php if ($_smarty_tpl->tpl_vars['TYPE']->value!='Chart'){?><div class='col-lg-12' id='fileformat' style='padding:5px 0px 10px 0px;'><div class='col-lg-3' style='position:relative;top:5px;'><?php echo vtranslate('LBL_FILE_FORMAT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div class='col-lg-2'><select class="select2 inputElement" id='fileformat' name='fileformat' data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" ><option value="CSV" <?php if ($_smarty_tpl->tpl_vars['SCHEDULEDREPORTS']->value->get('fileformat')=='CSV'){?> selected <?php }?> data-picklistvalue= 'CSV'>CSV</option><option value="XLS" <?php if ($_smarty_tpl->tpl_vars['SCHEDULEDREPORTS']->value->get('fileformat')=='XLS'){?> selected <?php }?> data-picklistvalue= 'XLS'>Excel</option></select></div></div><?php }?><?php if ($_smarty_tpl->tpl_vars['SCHEDULEDREPORTS']->value->get('next_trigger_time')){?><div class="col-lg-12" style="padding:5px 0px 10px 0px;"><div class='col-lg-3'><span class=''><?php echo vtranslate('LBL_NEXT_TRIGGER_TIME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></div><div class='col-lg-5'><?php echo $_smarty_tpl->tpl_vars['SCHEDULEDREPORTS']->value->getNextTriggerTimeInUserFormat();?>
<span>&nbsp;(<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->time_zone;?>
)</span></div></div><?php }?></div><?php }?><?php }} ?>