<?php
/* Smarty version 3.1.33, created on 2019-09-10 23:24:00
  from 'module:jmsblogviewstemplatesfron' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d7868d09665d7_97430233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84ae11415e9cebb8b0f593e712edea456efea9d9' => 
    array (
      0 => 'module:jmsblogviewstemplatesfron',
      1 => 1563937368,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d7868d09665d7_97430233 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin D:\xamppp\htdocs\jms_kasos/themes/jms_kasos/modules/jmsblog/views/templates/front/category.tpl --><?php if ($_smarty_tpl->tpl_vars['sidebar']->value == 'left') {?> 
	<?php $_smarty_tpl->_assignInScope('layout', "layouts/layout-left-column.tpl");
} elseif ($_smarty_tpl->tpl_vars['sidebar']->value == 'right') {?>
	<?php $_smarty_tpl->_assignInScope('layout', "layouts/layout-right-column.tpl");
} elseif ($_smarty_tpl->tpl_vars['sidebar']->value == 'no') {?>	
	<?php $_smarty_tpl->_assignInScope('layout', "layouts/layout-full-width.tpl");
}
$_smarty_tpl->_subTemplateRender("module:jmsblog/views/templates/front/".((string)$_smarty_tpl->tpl_vars['category_layout']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><!-- end D:\xamppp\htdocs\jms_kasos/themes/jms_kasos/modules/jmsblog/views/templates/front/category.tpl --><?php }
}
