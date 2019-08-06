<?php
/* Smarty version 3.1.33, created on 2019-08-06 06:22:51
  from 'D:\xamppp\htdocs\jms_kasos\themes\jms_kasos\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4954fb3ff4e1_12600618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc420c52ba90bfa02ba279e93ed981f557b8438b' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_kasos\\themes\\jms_kasos\\templates\\index.tpl',
      1 => 1563937369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4954fb3ff4e1_12600618 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1683447145d4954fb3ff4e8_78402107', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_4345720545d4954fb3ff4e7_27608639 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_7758390275d4954fb3ff4e7_15278789 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1683447145d4954fb3ff4e8_78402107 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1683447145d4954fb3ff4e8_78402107',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_4345720545d4954fb3ff4e7_27608639',
  ),
  'page_content' => 
  array (
    0 => 'Block_7758390275d4954fb3ff4e7_15278789',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4345720545d4954fb3ff4e7_27608639', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7758390275d4954fb3ff4e7_15278789', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
