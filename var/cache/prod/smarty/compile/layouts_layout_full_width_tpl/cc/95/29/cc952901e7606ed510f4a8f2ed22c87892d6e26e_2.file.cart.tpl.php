<?php
/* Smarty version 3.1.33, created on 2019-09-12 06:02:36
  from 'D:\xamppp\htdocs\jms_kasos\themes\jms_kasos\templates\checkout\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d7a17bcd3b818_34961670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc952901e7606ed510f4a8f2ed22c87892d6e26e' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_kasos\\themes\\jms_kasos\\templates\\checkout\\cart.tpl',
      1 => 1565845172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-detailed.tpl' => 1,
    'file:checkout/_partials/cart-detailed-totals.tpl' => 1,
    'file:checkout/_partials/cart-detailed-actions.tpl' => 1,
  ),
),false)) {
function content_5d7a17bcd3b818_34961670 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15002075625d7a17bcd24118_05041815', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'cart_overview'} */
class Block_10713332655d7a17bcd27f99_68061103 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
					  	<?php
}
}
/* {/block 'cart_overview'} */
/* {block 'continue_shopping'} */
class Block_17961272635d7a17bcd2fc97_49792824 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  			<a class="btn-default btn-border-bottom continue-shopping pull-right" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue shopping','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

			  			</a>
					<?php
}
}
/* {/block 'continue_shopping'} */
/* {block 'cart_totals'} */
class Block_14767909485d7a17bcd33b13_46497880 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						  	<?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed-totals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
						<?php
}
}
/* {/block 'cart_totals'} */
/* {block 'cart_actions'} */
class Block_12252670625d7a17bcd37998_80096040 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						  	<?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed-actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
						<?php
}
}
/* {/block 'cart_actions'} */
/* {block 'cart_summary'} */
class Block_4660904795d7a17bcd33b16_89306653 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  		<div class="card cart-summary">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCart'),$_smarty_tpl ) );?>


						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14767909485d7a17bcd33b13_46497880', 'cart_totals', $this->tplIndex);
?>


						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12252670625d7a17bcd37998_80096040', 'cart_actions', $this->tplIndex);
?>

			  		</div>
					<?php
}
}
/* {/block 'cart_summary'} */
/* {block 'display_reassurance'} */
class Block_17838568245d7a17bcd37990_42541143 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

					<?php
}
}
/* {/block 'display_reassurance'} */
/* {block 'content'} */
class Block_15002075625d7a17bcd24118_05041815 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15002075625d7a17bcd24118_05041815',
  ),
  'cart_overview' => 
  array (
    0 => 'Block_10713332655d7a17bcd27f99_68061103',
  ),
  'continue_shopping' => 
  array (
    0 => 'Block_17961272635d7a17bcd2fc97_49792824',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_4660904795d7a17bcd33b16_89306653',
  ),
  'cart_totals' => 
  array (
    0 => 'Block_14767909485d7a17bcd33b13_46497880',
  ),
  'cart_actions' => 
  array (
    0 => 'Block_12252670625d7a17bcd37998_80096040',
  ),
  'display_reassurance' => 
  array (
    0 => 'Block_17838568245d7a17bcd37990_42541143',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section id="main">
	<div class="cart-block">
        <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shopping Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h1>
    </div>
    <div class="cart-grid">
		<div class="row first">
      		<!-- Left Block: cart product informations & shpping -->
      		<div class="cart-grid-body col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="cart-box">
					<!-- cart products detailed -->
					<div class="cart cart-container">
					  	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10713332655d7a17bcd27f99_68061103', 'cart_overview', $this->tplIndex);
?>

					</div>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17961272635d7a17bcd2fc97_49792824', 'continue_shopping', $this->tplIndex);
?>


					<!-- shipping informations -->
					<div>
			  			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCartFooter'),$_smarty_tpl ) );?>

					</div>
				</div>
    		</div>

      		<!-- Right Block: cart subtotal & cart total -->
      		<div class="cart-grid-right pull-right col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="right-box">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4660904795d7a17bcd33b16_89306653', 'cart_summary', $this->tplIndex);
?>


					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17838568245d7a17bcd37990_42541143', 'display_reassurance', $this->tplIndex);
?>

				</div>
      		</div>
		</div>
    </div>
</section>
<?php
}
}
/* {/block 'content'} */
}
