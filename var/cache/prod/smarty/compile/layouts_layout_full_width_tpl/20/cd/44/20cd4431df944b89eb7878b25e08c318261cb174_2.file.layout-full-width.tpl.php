<?php
/* Smarty version 3.1.33, created on 2019-08-13 06:23:16
  from 'D:\xamppp\htdocs\jms_kasos\themes\jms_kasos\templates\layouts\layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d528f94324016_33970501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20cd4431df944b89eb7878b25e08c318261cb174' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_kasos\\themes\\jms_kasos\\templates\\layouts\\layout-full-width.tpl',
      1 => 1563937369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d528f94324016_33970501 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8516507265d528f9431c317_62139910', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1730384525d528f94320190_60218910', 'right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3312500755d528f94320193_25500819', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_8516507265d528f9431c317_62139910 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_8516507265d528f9431c317_62139910',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'right_column'} */
class Block_1730384525d528f94320190_60218910 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_1730384525d528f94320190_60218910',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
class Block_21004539295d528f94324013_72166929 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_3312500755d528f94320193_25500819 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_3312500755d528f94320193_25500819',
  ),
  'content' => 
  array (
    0 => 'Block_21004539295d528f94324013_72166929',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != "index") {?>class="col-lg-12 col-md-12 col-sm-12 col-xs-12"<?php }?>>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21004539295d528f94324013_72166929', 'content', $this->tplIndex);
?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
