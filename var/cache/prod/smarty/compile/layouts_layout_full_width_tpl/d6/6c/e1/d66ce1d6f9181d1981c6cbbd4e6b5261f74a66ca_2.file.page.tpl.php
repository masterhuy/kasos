<?php
/* Smarty version 3.1.33, created on 2019-08-15 04:54:11
  from 'D:\xamppp\htdocs\jms_kasos\themes\jms_kasos\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d551db3dfc886_65866523',
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
function content_5d551db3dfc886_65866523 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value, ENT_QUOTES, 'UTF-8');?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18478206065d551db3df4b83_56118795', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_content_top'} */
class Block_12445543055d551db3df4b84_31946503 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_10880774545d551db3df8a07_52187693 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <!-- Page content -->
                <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_2603832965d551db3df4b83_21466756 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <section id="content" class="page-content card card-block">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12445543055d551db3df4b84_31946503', 'page_content_top', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10880774545d551db3df8a07_52187693', 'page_content', $this->tplIndex);
?>

            </section>
        <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_9528687975d551db3df8a06_86882263 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_18478206065d551db3df4b83_56118795 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18478206065d551db3df4b83_56118795',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_2603832965d551db3df4b83_21466756',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_12445543055d551db3df4b84_31946503',
  ),
  'page_content' => 
  array (
    0 => 'Block_10880774545d551db3df8a07_52187693',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_9528687975d551db3df8a06_86882263',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2603832965d551db3df4b83_21466756', 'page_content_container', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9528687975d551db3df8a06_86882263', 'page_footer_container', $this->tplIndex);
?>

    </section>
<?php
}
}
/* {/block 'content'} */
}
