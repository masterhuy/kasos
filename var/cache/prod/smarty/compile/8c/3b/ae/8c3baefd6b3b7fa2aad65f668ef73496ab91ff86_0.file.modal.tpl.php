<?php
/* Smarty version 3.1.33, created on 2019-08-28 05:21:25
  from 'D:\xamppp\htdocs\jms_kasos\modules\ps_mbo\views\templates\admin\modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d66479510e7c2_98896299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c3baefd6b3b7fa2aad65f668ef73496ab91ff86' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_kasos\\modules\\ps_mbo\\views\\templates\\admin\\modal.tpl',
      1 => 1563936890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d66479510e7c2_98896299 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recommended Modules and Services'),$_smarty_tpl ) );?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div><?php }
}
