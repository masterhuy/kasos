<div class="btn-group compact-hidden blockcart cart-preview {if $cart.products_count > 0}active{else}inactive{/if} dropdown {if isset($jpb_addtocart) && $jpb_addtocart == 'ajax_cartbottom'}shoppingcart-bottom{/if}" id="cart_block" data-refresh-url="{$refresh_url}">
	<a href="#" class="cart-icon dropdown-toggle type1" data-toggle="dropdown" aria-expanded="false">
		<span class="ajax_cart_quantity">{$cart.products_count}</span>
	</a>
	<div class="text-custom">
		<span class="cart_block_total ajax_block_cart_total">{$cart.totals.total.value}</span>
	</div>
	<a href="#" class="btn-xs dropdown-toggle tab-title" data-toggle="dropdown" aria-expanded="true">		 
		<span><span class="box-cart ajax_cart_quantity"> {$cart.products_count}</span> {l s='item(s) in your cart' mod='blockcart'}<i class="fa fa-chevron-down"></i><i class="fa fa-chevron-up"></i></span>
	</a>
	<div class="dropdown-menu shoppingcart-box">
		<div class="shoppingcart-content">
			<span class="ajax_cart_no_product" {if $cart.products_count != 0}style="display:none"{/if}>{l s='There is no product' d='Shop.Theme.Actions'}</span>
			<ul class="list products cart_block_list">
				{foreach from=$cart.products item=product}
					<li>{include 'module:ps_shoppingcart/ps_shoppingcart-product-line.tpl' product=$product}</li>
				{/foreach}
			</ul>
		</div>
		<div class="cart-prices">
			<div class="checkout-info">
				{foreach from=$cart.subtotals item="subtotal"}
					<div class="{if $subtotal.type == ''}hidden {else}$subtotal.type {/if} cart-prices-line">
						<span class="label sss-bold">{$subtotal.label}:</span>
						<span class="value sss-bold">{$subtotal.value}</span>
					</div>
				{/foreach}
			</div>
			<div class="cart-button">
				<a class="btn-default btn-black w-100 text-center" href="{$cart_url}" title="{l s='Proceed to checkout' d='Shop.Theme.Actions'}" rel="nofollow">
					{l s='Check out' d='Shop.Theme.Actions'}
				</a>
			</div>
		</div>
	</div>
</div>
