<?php /* Smarty version Smarty-3.1.7, created on 2021-06-06 17:48:21
         compiled from "/home1/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/Vtiger/FindDuplicateContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126293699860bd0a65ceb001-56238996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '135f2a4fbf2a417dc45eeed7f4cf30f36779dc3e' => 
    array (
      0 => '/home1/emarket/public_html/public/crm/includes/runtime/../../layouts/v7/modules/Vtiger/FindDuplicateContents.tpl',
      1 => 1602587794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126293699860bd0a65ceb001-56238996',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'LISTVIEW_ENTRIES_COUNT' => 0,
    'PAGING_MODEL' => 0,
    'PAGE_NUMBER' => 0,
    'DUPLICATE_SEARCH_FIELDS' => 0,
    'VIEW_NAME' => 0,
    'TOTAL_COUNT' => 0,
    'IGNORE_EMPTY' => 0,
    'MODULE_MODEL' => 0,
    'CURRENT_USER_PRIVILAGES_MODEL' => 0,
    'IS_DELETABLE' => 0,
    'LISTVIEW_HEADERS' => 0,
    'LISTVIEW_HEADER' => 0,
    'IS_EDITABLE' => 0,
    'LISTVIEW_ENTRIES' => 0,
    'LISTVIEW_ENTRY' => 0,
    'RECORD' => 0,
    'GROUP_NAME' => 0,
    'recordCount' => 0,
    'groupCount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60bd0a65d20ca',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bd0a65d20ca')) {function content_60bd0a65d20ca($_smarty_tpl) {?>



<div>
	<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("FindDuplicateHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<div id="findDuplicateContents" class="container-fluid" style="padding-top:5px;">
	<div class="row">
		<div class="col-lg-12">
			<input type="hidden" id="listViewEntriesCount" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value;?>
" />
			<input type="hidden" id="pageStartRange" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getRecordStartRange();?>
" />
			<input type="hidden" id="pageEndRange" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getRecordEndRange();?>
" />
			<input type="hidden" id="previousPageExist" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isPrevPageExists();?>
" />
			<input type="hidden" id="nextPageExist" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isNextPageExists();?>
" />
			<input type="hidden" id="pageNumber" value= "<?php echo $_smarty_tpl->tpl_vars['PAGE_NUMBER']->value;?>
"/>
			<input type="hidden" id="pageLimit" value= "<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getPageLimit();?>
" />
			<input type="hidden" id="noOfEntries" value= "<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value;?>
" />
			<input type="hidden" id="duplicateSearchFields" value=<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['DUPLICATE_SEARCH_FIELDS']->value);?>
 />
			<input type="hidden" id="viewName" value="<?php echo $_smarty_tpl->tpl_vars['VIEW_NAME']->value;?>
" />
			<input type="hidden" id="totalCount" value="<?php echo $_smarty_tpl->tpl_vars['TOTAL_COUNT']->value;?>
" />
			<input type='hidden' id='ignoreEmpty' value="<?php echo $_smarty_tpl->tpl_vars['IGNORE_EMPTY']->value;?>
" />
			<input type="hidden" id="mergeSelectedIds" />
			<?php $_smarty_tpl->tpl_vars['IS_EDITABLE'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENT_USER_PRIVILAGES_MODEL']->value->hasModuleActionPermission($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getId(),'EditView'), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['IS_DELETABLE'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENT_USER_PRIVILAGES_MODEL']->value->hasModuleActionPermission($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getId(),'Delete'), null, 0);?>

			<table id="listview-table" class="listview-table table table-bordered" style="border-top:1px solid #ddd;">
				<thead>
					<tr class="listViewContentHeader">
						<?php if ($_smarty_tpl->tpl_vars['IS_DELETABLE']->value){?>
							<th>
								<center><input type="checkbox" class="listViewEntriesMainCheckBox" /></center>
							</th>
						<?php }?>
						<?php  $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->key => $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = true;
?>
							<th>
								<center><?php echo vtranslate($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</center>
							</th>
						<?php } ?>
						<?php if ($_smarty_tpl->tpl_vars['IS_EDITABLE']->value&&$_smarty_tpl->tpl_vars['IS_DELETABLE']->value){?>
							<th> <center><?php echo vtranslate('LBL_MERGE_SELECT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</center></th>
							<th> <center><?php echo vtranslate('LBL_ACTION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</center></th>
						<?php }?>
					</tr>
				</thead>
				<?php  $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->_loop = false;
 $_smarty_tpl->tpl_vars['GROUP_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->key => $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->_loop = true;
 $_smarty_tpl->tpl_vars['GROUP_NAME']->value = $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->key;
?>
					<?php $_smarty_tpl->tpl_vars['groupCount'] = new Smarty_variable(sizeof($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value), null, 0);?>
					<?php $_smarty_tpl->tpl_vars['recordCount'] = new Smarty_variable(0, null, 0);?>
					<?php  $_smarty_tpl->tpl_vars['RECORD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RECORD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['listview']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['RECORD']->key => $_smarty_tpl->tpl_vars['RECORD']->value){
$_smarty_tpl->tpl_vars['RECORD']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['listview']['index']++;
?>
						<tr class="listViewEntries" data-id='<?php echo $_smarty_tpl->tpl_vars['RECORD']->value['recordid'];?>
' id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listView_row_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['listview']['index']+1;?>
">
							<?php if ($_smarty_tpl->tpl_vars['IS_DELETABLE']->value){?>
								<td>
									<center><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value['recordid'];?>
" class="listViewEntriesCheckBox"/></center>
								</td>
							<?php }?>
							<?php $_smarty_tpl->tpl_vars['sameRowValues'] = new Smarty_variable(true, null, 0);?>
							<?php  $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->key => $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = true;
?>
							<?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name')=='recordid'){?>
								<td nowrap>
									<center><a href="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getDetailViewUrl($_smarty_tpl->tpl_vars['RECORD']->value['recordid']);?>
"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name')];?>
</a></center>
								</td>
							<?php }else{ ?>
								<td name="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name');?>
" nowrap style='border-bottom:1px solid #DDD;' data-value="<?php echo strip_tags($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getDisplayValue($_smarty_tpl->tpl_vars['RECORD']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('column')],$_smarty_tpl->tpl_vars['RECORD']->value['recordid']));?>
">
									<center><?php echo strip_tags($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getDisplayValue($_smarty_tpl->tpl_vars['RECORD']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('column')],$_smarty_tpl->tpl_vars['RECORD']->value['recordid']));?>
</center>
								</td>
							<?php }?>
							<?php } ?>
							<?php if ($_smarty_tpl->tpl_vars['IS_EDITABLE']->value&&$_smarty_tpl->tpl_vars['IS_DELETABLE']->value){?>
								<td>
									<center><input type="checkbox" data-id='<?php echo $_smarty_tpl->tpl_vars['RECORD']->value['recordid'];?>
' name="mergeRecord" data-group="<?php echo $_smarty_tpl->tpl_vars['GROUP_NAME']->value;?>
"/></center>
								</td>
								<?php if ($_smarty_tpl->tpl_vars['recordCount']->value==0){?>
									<td rowspan="<?php echo $_smarty_tpl->tpl_vars['groupCount']->value;?>
" style="vertical-align: middle;">
										<center><input type="button" value="<?php echo vtranslate('Merge',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" name="merge" class="btn btn-success" data-group="<?php echo $_smarty_tpl->tpl_vars['GROUP_NAME']->value;?>
"></center>
									</td>
								<?php }?>
							<?php }?>
							<?php $_smarty_tpl->tpl_vars['recordCount'] = new Smarty_variable($_smarty_tpl->tpl_vars['recordCount']->value+1, null, 0);?>
						</tr>
					<?php } ?>
				<?php } ?>
			</table>
			<?php if ($_smarty_tpl->tpl_vars['recordCount']->value==0){?>
				<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 listViewContentDiv list-table-wrapper" id="listViewContents">
					<table class="emptyRecordsDiv">
						<tbody class="overflow-y">
							<tr class="emptyRecordDiv">
								<td colspan="8">
									<div class="emptyRecordsContent portal-empty-records-content">
										<?php echo vtranslate('LBL_NO_DUPLICATED_FOUND');?>
.
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			<?php }?>
		</div>
	</div>
</div><?php }} ?>