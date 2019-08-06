<?php
/* Smarty version 3.1.33, created on 2019-08-06 06:22:55
  from 'D:\xamppp\htdocs\jms_kasos\themes\jms_kasos\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4954ff3fc230_92029699',
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
function content_5d4954ff3fc230_92029699 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value, ENT_QUOTES, 'UTF-8');?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1334173415d4954ff3f4536_87192123', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_content_top'} */
class Block_15060410125d4954ff3f83b0_57751291 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_20119994955d4954ff3f83b3_97508504 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <!-- Page content -->
                <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_6695515175d4954ff3f83b1_83749782 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <section id="content" class="page-content card card-block">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15060410125d4954ff3f83b0_57751291', 'page_content_top', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20119994955d4954ff3f83b3_97508504', 'page_content', $this->tplIndex);
?>

            </section>
        <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_16530091755d4954ff3fc233_83829636 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1334173415d4954ff3f4536_87192123 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1334173415d4954ff3f4536_87192123',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_6695515175d4954ff3f83b1_83749782',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_15060410125d4954ff3f83b0_57751291',
  ),
  'page_content' => 
  array (
    0 => 'Block_20119994955d4954ff3f83b3_97508504',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_16530091755d4954ff3fc233_83829636',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6695515175d4954ff3f83b1_83749782', 'page_content_container', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16530091755d4954ff3fc233_83829636', 'page_footer_container', $this->tplIndex);
?>

    </section>
<?php
}
}
/* {/block 'content'} */
}
