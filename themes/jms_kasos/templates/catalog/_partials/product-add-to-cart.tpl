{**
 * 2007-2016 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2016 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<div class="product-add-to-cart">
    {if !$configuration.is_catalog}
        {block name='product_quantity'}
            <div class="product-quantity">
                <div class="customs">
                    <div class="title">
                        {l s='Quantity' d='Shop.Theme.Actions'}:
                    </div>
                    <div class="qty">
                      <input
                        type="text"
                        name="qty"
                        id="quantity_wanted"
                        value="{$product.quantity_wanted}"
                        class="input-group"
                        min="{$product.minimal_quantity}"
                        aria-label="{l s='Quantity' d='Shop.Theme.Actions'}"
                      />
                    </div>
                </div>
      		    <div class="add">
                    <button 
                        title="{if $product.quantity < 1}{l s='Sold Out' d='Shop.Theme.Actions'}{else}{l s='Add to Cart' d='Shop.Theme.Actions'}{/if}" 
                        class="btn-default add-to-cart product-btn cart-button 
                        {if $product.quantity < 1}disabled{/if}" 
                        data-button-action="add-to-cart" 
                        type="submit" 
                        {if !$product.add_to_cart_url}disabled{/if}
                    >
                        <span class="fa fa-spin fa-spinner"></span>
                        <span class="fa fa-check"></span>
                        <span class="text-addcart">{l s='Add to cart' d='Shop.Theme.Actions'}</span>		
                        <span class="text-outofstock">{l s='Out of stock' d='Shop.Theme.Actions'}</span>                           
                    </button>
                    {if isset($jpb_wishlist) && $jpb_wishlist}                          
                        <a class="addToWishlist" onclick="WishlistCart('wishlist_block_list', 'add', '{$product.id_product|escape:'html'}', false, 1); return false;" data-id-product="{$product.id_product|escape:'html'}" title="{l s='Add to Wishlist'}"></a>
                    {/if}
                </div>
                {hook h='displayProductActions' product=$product}
            </div>
            <div class="clearfix"></div>
        {/block}

        {block name='product_availability'}
            <div class="not-enough-product mt-20">
                {if $product.show_availability && $product.availability_message}
                <span id="product-availability">
                    {if $product.availability == 'available'}
                        <span class="hidden" style="color:#fff; background:#25A799">{$product.availability_message}</span>
                    {elseif $product.availability == 'last_remaining_items'}
                        <i class="hidden material-icons product-last-items">&#xE002;</i>
                    {else}
                        <span style="color:#d43f3a;">{$product.availability_message}</span>
                    {/if}
                </span>
                {/if}
            </div>
        {/block}

        {block name='product_minimal_quantity'}
            <p class="product-minimal-quantity">
                {if $product.minimal_quantity > 1}
                    {l
                        s='The minimum purchase order quantity for the product is %quantity%.'
                        d='Shop.Theme.Checkout'
                        sprintf=['%quantity%' => $product.minimal_quantity]
                    }
                {/if}
            </p>
        {/block}
    {/if}
</div>
