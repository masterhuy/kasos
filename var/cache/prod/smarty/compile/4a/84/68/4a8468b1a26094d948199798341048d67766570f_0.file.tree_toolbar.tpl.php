<?php
/* Smarty version 3.1.33, created on 2019-08-14 02:53:59
  from 'D:\xamppp\htdocs\jms_kasos\admin201ucslkx\themes\default\template\helpers\tree\tree_toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d53b0075268c4_03541298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a8468b1a26094d948199798341048d67766570f' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_kasos\\admin201ucslkx\\themes\\default\\template\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1562774834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d53b0075268c4_03541298 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actions']->value, 'action');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
</div>
<?php }
}
