<?php
/* Smarty version 3.1.33, created on 2019-08-09 04:39:00
  from 'D:\xamppp\htdocs\jms_kasos\themes\jms_kasos\templates\checkout\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4d312434f733_92208463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc952901e7606ed510f4a8f2ed22c87892d6e26e' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_kasos\\themes\\jms_kasos\\templates\\checkout\\cart.tpl',
      1 => 1563937369,
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
function content_5d4d312434f733_92208463 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14464677365d4d3124328630_48100430', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'cart_overview'} */
class Block_20778481255d4d3124328635_19029084 extends Smarty_Internal_Block
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
class Block_16236757645d4d312434f733_57943158 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  			<a class="btn-continue-shopping btn-default active" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
							<i class="d-i-flex">
								<svg aria-hidden="true" focusable="false" role="presentation"
										class="icon icon-theme-012" viewBox="0 0 24 24">
									<path d="M21.036 12.569a.601.601 0 0 1-.439.186H4.601l4.57 4.551c.117.13.176.28.176.449a.652.652 0 0 1-.176.449.877.877 0 0 1-.215.127.596.596 0 0 1-.468 0 .877.877 0 0 1-.215-.127l-5.625-5.625a2.48 2.48 0 0 1-.068-.107c-.02-.032-.042-.068-.068-.107a.736.736 0 0 1 0-.468 2.48 2.48 0 0 0 .068-.107c.02-.032.042-.068.068-.107l5.625-5.625a.652.652 0 0 1 .449-.176c.169 0 .319.059.449.176.117.13.176.28.176.449a.652.652 0 0 1-.176.449l-4.57 4.551h15.996a.6.6 0 0 1 .439.186.601.601 0 0 1 .186.439.599.599 0 0 1-.186.437z"/>
								</svg>
							</i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue shopping','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

			  			</a>
					<?php
}
}
/* {/block 'continue_shopping'} */
/* {block 'cart_totals'} */
class Block_10189047365d4d312434f735_25394406 extends Smarty_Internal_Block
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
class Block_10453191625d4d312434f732_36323757 extends Smarty_Internal_Block
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
class Block_13450792885d4d312434f734_18345164 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  		<div class="card cart-summary">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCart'),$_smarty_tpl ) );?>


						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10189047365d4d312434f735_25394406', 'cart_totals', $this->tplIndex);
?>


						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10453191625d4d312434f732_36323757', 'cart_actions', $this->tplIndex);
?>

			  		</div>
					<?php
}
}
/* {/block 'cart_summary'} */
/* {block 'display_reassurance'} */
class Block_1578463095d4d312434f735_24411756 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

					<?php
}
}
/* {/block 'display_reassurance'} */
/* {block 'content'} */
class Block_14464677365d4d3124328630_48100430 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14464677365d4d3124328630_48100430',
  ),
  'cart_overview' => 
  array (
    0 => 'Block_20778481255d4d3124328635_19029084',
  ),
  'continue_shopping' => 
  array (
    0 => 'Block_16236757645d4d312434f733_57943158',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_13450792885d4d312434f734_18345164',
  ),
  'cart_totals' => 
  array (
    0 => 'Block_10189047365d4d312434f735_25394406',
  ),
  'cart_actions' => 
  array (
    0 => 'Block_10453191625d4d312434f732_36323757',
  ),
  'display_reassurance' => 
  array (
    0 => 'Block_1578463095d4d312434f735_24411756',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section id="main">
	<div class="cart-block">
        <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shopping Bag','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h1>
    </div>
    <div class="cart-grid">
		<div class="row first">
      		<!-- Left Block: cart product informations & shpping -->
      		<div class="cart-grid-body col-lg-9 col-md-9 col-sm-12 col-xs-12">
				<div class="cart-box">
					<!-- cart products detailed -->
					<div class="cart cart-container">
					  	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20778481255d4d3124328635_19029084', 'cart_overview', $this->tplIndex);
?>

					</div>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16236757645d4d312434f733_57943158', 'continue_shopping', $this->tplIndex);
?>


					<!-- shipping informations -->
					<div>
			  			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCartFooter'),$_smarty_tpl ) );?>

					</div>
				</div>
    		</div>

      		<!-- Right Block: cart subtotal & cart total -->
      		<div class="cart-grid-right pull-right col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<div class="right-box">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13450792885d4d312434f734_18345164', 'cart_summary', $this->tplIndex);
?>


					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1578463095d4d312434f735_24411756', 'display_reassurance', $this->tplIndex);
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
