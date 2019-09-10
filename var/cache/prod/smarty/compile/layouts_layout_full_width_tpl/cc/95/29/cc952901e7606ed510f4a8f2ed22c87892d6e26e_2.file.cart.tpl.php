<?php
/* Smarty version 3.1.33, created on 2019-09-10 05:50:25
  from 'D:\xamppp\htdocs\jms_kasos\themes\jms_kasos\templates\checkout\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d7771e12382e0_29889898',
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
function content_5d7771e12382e0_29889898 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17483647375d7771e1220be0_39535570', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'cart_overview'} */
class Block_5662967405d7771e1224a64_06516872 extends Smarty_Internal_Block
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
class Block_3933998715d7771e12288e4_25186568 extends Smarty_Internal_Block
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
class Block_13743093345d7771e12305e3_94111098 extends Smarty_Internal_Block
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
class Block_13069060895d7771e12305e4_79963350 extends Smarty_Internal_Block
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
class Block_3877423895d7771e122c761_68092042 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  		<div class="card cart-summary">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCart'),$_smarty_tpl ) );?>


						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13743093345d7771e12305e3_94111098', 'cart_totals', $this->tplIndex);
?>


						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13069060895d7771e12305e4_79963350', 'cart_actions', $this->tplIndex);
?>

			  		</div>
					<?php
}
}
/* {/block 'cart_summary'} */
/* {block 'display_reassurance'} */
class Block_5955353295d7771e1234469_57172543 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

					<?php
}
}
/* {/block 'display_reassurance'} */
/* {block 'content'} */
class Block_17483647375d7771e1220be0_39535570 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17483647375d7771e1220be0_39535570',
  ),
  'cart_overview' => 
  array (
    0 => 'Block_5662967405d7771e1224a64_06516872',
  ),
  'continue_shopping' => 
  array (
    0 => 'Block_3933998715d7771e12288e4_25186568',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_3877423895d7771e122c761_68092042',
  ),
  'cart_totals' => 
  array (
    0 => 'Block_13743093345d7771e12305e3_94111098',
  ),
  'cart_actions' => 
  array (
    0 => 'Block_13069060895d7771e12305e4_79963350',
  ),
  'display_reassurance' => 
  array (
    0 => 'Block_5955353295d7771e1234469_57172543',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5662967405d7771e1224a64_06516872', 'cart_overview', $this->tplIndex);
?>

					</div>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3933998715d7771e12288e4_25186568', 'continue_shopping', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3877423895d7771e122c761_68092042', 'cart_summary', $this->tplIndex);
?>


					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5955353295d7771e1234469_57172543', 'display_reassurance', $this->tplIndex);
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
