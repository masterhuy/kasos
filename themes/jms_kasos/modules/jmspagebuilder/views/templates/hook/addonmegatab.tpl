{*
* 2007-2017 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2017 PrestaShop SA
*  @version  Release: $Revision$
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<script type="text/javascript">
var megtab_items = {if $cols}{$cols|escape:'htmlall':'UTF-8'}{else}4{/if};
var megtab_itemsDesktop = {if $cols}{$cols|escape:'htmlall':'UTF-8'}{else}4{/if};
var megtab_itemsDesktopSmall = {if $cols_md}{$cols_md|escape:'htmlall':'UTF-8'}{else}3{/if};
var megtab_itemsTablet = {if $cols_sm}{$cols_sm|escape:'htmlall':'UTF-8'}{else}2{/if};
var megtab_itemsMobile = {if $cols_xs}{$cols_xs|escape:'htmlall':'UTF-8'}{else}1{/if};
var megtab_nav = {if $navigation == 1}true{else}false{/if};
var megtab_pag = {if $pagination == 1}true{else}false{/if};
var megtab_auto_play_carousel = {if $autoplay == 1}true{else}false{/if};
</script>

<div class="mega_cates_tab">
	<div class="addon-title">
		{if $addon_title}
			<h3>{$addon_title|escape:'htmlall':'UTF-8'}</h3>
		{/if}
	</div>
	{if $addon_desc}
		<p class="addon-desc">{$addon_desc nofilter}</p>
	{/if}
	<div class="jms-tab {if $addon_title}mt-40{/if}">
		<ul class="nav">
			{foreach from = $categories key = k item = category}
				<li class="nav-item {if $k == 0} active{/if}">
					<a class="" data-toggle="tab" href="#mega-category-{$category.id_category|escape:'html':'UTF-8'}">
						{$category.name}
					</a>
				</li>
			{/foreach}	
		</ul>
	</div>

	<div class="tab-content">
		{foreach from = $categories key = k item = category}
			<div role="tabpanel" class="tab-pane fade {if $k == 0} in active {/if}" id="mega-category-{$category.id_category|escape:'html':'UTF-8'}">
				<div class="product_box">
					<div class="megatab-carousel">	
						{foreach from = $category.products item = products_slide}				
							<div class="item">
								{foreach from = $products_slide item = product}
									{include file="catalog/_partials/miniatures/product.tpl" product=$product}
								{/foreach}
							</div>
						{/foreach}
					</div>
			 	</div>
			</div>		
		{/foreach}	
	</div>
</div>