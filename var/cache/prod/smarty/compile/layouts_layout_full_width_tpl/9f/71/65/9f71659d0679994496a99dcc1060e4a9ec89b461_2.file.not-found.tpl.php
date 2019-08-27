<?php
/* Smarty version 3.1.33, created on 2019-08-27 01:01:15
  from 'D:\xamppp\htdocs\jms_kasos\themes\jms_kasos\templates\errors\not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d64b91b6fec65_29209373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f71659d0679994496a99dcc1060e4a9ec89b461' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_kasos\\themes\\jms_kasos\\templates\\errors\\not-found.tpl',
      1 => 1563937369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d64b91b6fec65_29209373 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-not-found"> 
	<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry for the inconvenience.','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</h4>
	<p class="small-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search again what you are looking for','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</p>
	<div class="search-box">
	 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13000279645d64b91b6fade3_37214580', 'search');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21367769545d64b91b6fec63_65312745', 'hook_not_found');
?>

	</div>
</section>
<?php }
/* {block 'search'} */
class Block_13000279645d64b91b6fade3_37214580 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'search' => 
  array (
    0 => 'Block_13000279645d64b91b6fade3_37214580',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'search'} */
/* {block 'hook_not_found'} */
class Block_21367769545d64b91b6fec63_65312745 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_not_found' => 
  array (
    0 => 'Block_21367769545d64b91b6fec63_65312745',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_not_found'} */
}
