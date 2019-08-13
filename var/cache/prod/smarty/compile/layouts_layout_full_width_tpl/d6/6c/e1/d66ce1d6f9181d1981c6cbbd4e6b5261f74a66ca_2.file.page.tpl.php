<?php
/* Smarty version 3.1.33, created on 2019-08-13 06:23:16
  from 'D:\xamppp\htdocs\jms_kasos\themes\jms_kasos\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d528f94314616_84881320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd66ce1d6f9181d1981c6cbbd4e6b5261f74a66ca' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_kasos\\themes\\jms_kasos\\templates\\page.tpl',
      1 => 1563937369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d528f94314616_84881320 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value, ENT_QUOTES, 'UTF-8');?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5717439145d528f94310793_57181213', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_content_top'} */
class Block_5309205135d528f94310799_19981623 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_529635355d528f94310799_48607533 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <!-- Page content -->
                <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_3871385965d528f94310792_51623049 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <section id="content" class="page-content card card-block">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5309205135d528f94310799_19981623', 'page_content_top', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_529635355d528f94310799_48607533', 'page_content', $this->tplIndex);
?>

            </section>
        <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_1061674165d528f94314617_46584645 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_5717439145d528f94310793_57181213 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5717439145d528f94310793_57181213',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_3871385965d528f94310792_51623049',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_5309205135d528f94310799_19981623',
  ),
  'page_content' => 
  array (
    0 => 'Block_529635355d528f94310799_48607533',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1061674165d528f94314617_46584645',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3871385965d528f94310792_51623049', 'page_content_container', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1061674165d528f94314617_46584645', 'page_footer_container', $this->tplIndex);
?>

    </section>
<?php
}
}
/* {/block 'content'} */
}
