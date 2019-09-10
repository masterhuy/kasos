<?php
/* Smarty version 3.1.33, created on 2019-09-10 05:47:54
  from 'D:\xamppp\htdocs\jms_kasos\themes\jms_kasos\templates\customer\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d77714ad69273_47838407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab5b169346eb9e145611c273351b18858ac78a86' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_kasos\\themes\\jms_kasos\\templates\\customer\\page.tpl',
      1 => 1563937369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/notifications.tpl' => 1,
    'file:customer/_partials/my-account-links.tpl' => 1,
  ),
),false)) {
function content_5d77714ad69273_47838407 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21005129105d77714ad5d6f2_52633774', 'notifications');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4470297205d77714ad61574_68892659', 'page_content_top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16768803415d77714ad653f1_14115689', 'page_footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'notifications'} */
class Block_21005129105d77714ad5d6f2_52633774 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_21005129105d77714ad5d6f2_52633774',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'notifications'} */
/* {block 'customer_notifications'} */
class Block_15078329985d77714ad61572_20393950 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block 'customer_notifications'} */
/* {block 'page_content_top'} */
class Block_4470297205d77714ad61574_68892659 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_top' => 
  array (
    0 => 'Block_4470297205d77714ad61574_68892659',
  ),
  'customer_notifications' => 
  array (
    0 => 'Block_15078329985d77714ad61572_20393950',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15078329985d77714ad61572_20393950', 'customer_notifications', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_content_top'} */
/* {block 'my_account_links'} */
class Block_7549817945d77714ad69277_94513065 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:customer/_partials/my-account-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block 'my_account_links'} */
/* {block 'page_footer'} */
class Block_16768803415d77714ad653f1_14115689 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer' => 
  array (
    0 => 'Block_16768803415d77714ad653f1_14115689',
  ),
  'my_account_links' => 
  array (
    0 => 'Block_7549817945d77714ad69277_94513065',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7549817945d77714ad69277_94513065', 'my_account_links', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_footer'} */
}
