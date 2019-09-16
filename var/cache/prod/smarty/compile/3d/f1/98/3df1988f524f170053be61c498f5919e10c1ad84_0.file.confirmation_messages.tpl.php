<?php
/* Smarty version 3.1.33, created on 2019-09-16 04:47:38
  from 'D:\xamppp\htdocs\jms_kasos\admin201ucslkx\themes\new-theme\template\components\layout\confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d7f4c2a30fad3_29098162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3df1988f524f170053be61c498f5919e10c1ad84' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_kasos\\admin201ucslkx\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1562774834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d7f4c2a30fad3_29098162 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
