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
			<i class="d-flex close-cart">
				<svg aria-hidden="true" focusable="false" role="presentation"
						class="icon icon-theme-164" viewBox="0 0 24 24">
					<path d="M19.583 4.965a.65.65 0 0 1-.176.449l-6.445 6.426 6.445 6.426c.117.131.176.28.176.449a.65.65 0 0 1-.176.449.846.846 0 0 1-.215.127.596.596 0 0 1-.468 0 .846.846 0 0 1-.215-.127l-6.426-6.445-6.426 6.445a.846.846 0 0 1-.215.127.596.596 0 0 1-.468 0 .846.846 0 0 1-.215-.127.65.65 0 0 1-.176-.449c0-.169.059-.318.176-.449l6.445-6.426-6.445-6.426a.65.65 0 0 1-.176-.449c0-.169.059-.318.176-.449a.652.652 0 0 1 .449-.176c.169 0 .319.059.449.176l6.426 6.445 6.426-6.445a.652.652 0 0 1 .449-.176c.169 0 .319.059.449.176.117.13.176.28.176.449z"/>
				</svg>
			</i>
			<span class="ajax_cart_no_product" {if $cart.products_count != 0}style="display:none"{/if}>{l s='There is no product' d='Shop.Theme.Actions'}</span>
			{if $cart.products_count > 0}
				<span class="quantity">{l s='My Bag' d='Shop.Theme.Actions'} ({$cart.products_count})</span>
			{/if}
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
						<span class="label">{$subtotal.label}:</span>
						<span class="value">{$subtotal.value}</span>
					</div>
				{/foreach}
			</div>
			<div class="cart-button">
				<a class="btn-default active" href="{$urls.pages.order}" title="{l s='Proceed to checkout' d='Shop.Theme.Actions'}" rel="nofollow">
					{l s='PROCEED TO CHECKOUT' d='Shop.Theme.Actions'}
				</a>
				<a class="btn-default" href="{$cart_url}" title="{l s='View shopping bag' d='Shop.Theme.Actions'}" rel="nofollow">
					{l s='VIEW SHOPPING BAG' d='Shop.Theme.Actions'}
				</a> 
			</div>
		</div>
	</div>
	<div class="bg-overlay"></div>
</div>
