<?php
/* Smarty version 3.1.33, created on 2019-09-06 05:59:45
  from 'D:\xamppp\htdocs\jms_kasos\themes\jms_kasos\modules\jmswishlist\jmswishlist_top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d722e115b4539_82530451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdd0123c0e238534e46a6b921e6cafa309db376e' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_kasos\\themes\\jms_kasos\\modules\\jmswishlist\\jmswishlist_top.tpl',
      1 => 1563937369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d722e115b4539_82530451 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    var loggin_required= '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loggin_required']->value, ENT_QUOTES, 'UTF-8');?>
';
    var added_to_wishlist= '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['added_to_wishlist']->value, ENT_QUOTES, 'UTF-8');?>
';
    var mywishlist_url= '<?php echo $_smarty_tpl->tpl_vars['mywishlist_url']->value;?>
';
<?php echo '</script'; ?>
>
<?php }
}
