<?php
/* Smarty version 3.1.33, created on 2019-08-13 05:56:11
  from 'D:\xamppp\htdocs\jms_kasos\themes\jms_kasos\templates\layouts\layout-right-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d52893beb1d50_04319575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '355342d33dfc78cd1b47f74ba8b3ce42ee1591a8' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_kasos\\themes\\jms_kasos\\templates\\layouts\\layout-right-column.tpl',
      1 => 1563937369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d52893beb1d50_04319575 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17524210585d52893beaded8_57977052', 'left_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4127302005d52893beaded1_63463917', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_17524210585d52893beaded8_57977052 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_17524210585d52893beaded8_57977052',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'content'} */
class Block_5059831675d52893beaded5_34746869 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_4127302005d52893beaded1_63463917 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_4127302005d52893beaded1_63463917',
  ),
  'content' => 
  array (
    0 => 'Block_5059831675d52893beaded5_34746869',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" class="right-column col-xs-12 col-sm-12 col-md-9">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5059831675d52893beaded5_34746869', 'content', $this->tplIndex);
?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
