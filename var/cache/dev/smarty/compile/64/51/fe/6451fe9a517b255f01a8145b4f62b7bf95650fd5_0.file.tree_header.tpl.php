<?php
/* Smarty version 3.1.33, created on 2019-09-05 03:58:32
  from 'D:\xamppp\htdocs\jms_kasos\admin201ucslkx\themes\default\template\helpers\tree\tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d70c028855ba4_56332474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6451fe9a517b255f01a8145b4f62b7bf95650fd5' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_kasos\\admin201ucslkx\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1562774834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d70c028855ba4_56332474 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}
