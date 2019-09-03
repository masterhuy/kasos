<?php
/* Smarty version 3.1.33, created on 2019-09-03 04:12:30
  from 'D:\xamppp\htdocs\jms_kasos\themes\jms_kasos\modules\jmsvermegamenu\views\templates\hook\jmsvermegamenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d6e206e48b8b8_39704515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0e792219a984e7a2e944ec0cdda35a7cfaf09db' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_kasos\\themes\\jms_kasos\\modules\\jmsvermegamenu\\views\\templates\\hook\\jmsvermegamenu.tpl',
      1 => 1563937369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d6e206e48b8b8_39704515 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['vermenu_html']->value;?>

<?php echo '<script'; ?>
 type="text/javascript">
	var jmvmm_event = '<?php echo $_smarty_tpl->tpl_vars['JMSVMM_MOUSEEVENT']->value;?>
';
	var jmvmm_duration = <?php echo $_smarty_tpl->tpl_vars['JMSVMM_DURATION']->value;?>
;	
<?php echo '</script'; ?>
>
<style type="text/css">
.jms-vermegamenu .dropdown-menu {    
	transition:all <?php echo $_smarty_tpl->tpl_vars['JMSVMM_DURATION']->value;?>
ms;
}
</style><?php }
}
