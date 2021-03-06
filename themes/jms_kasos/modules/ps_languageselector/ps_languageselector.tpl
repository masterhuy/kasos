{*
* 2007-2018 PrestaShop
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
*  @copyright  2007-2018 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<!-- Block languages module -->
{if count($languages) > 1}
	<div class="btn-group compact-hidden languages-info type-1">
		<a href="#" class="btn-xs dropdown-toggle" data-toggle="dropdown">
			<img class="flag" alt="{$language.iso_code}" src="{$urls.base_url}img/l/{$current_language.id_lang}.jpg" width="18" height="11"/>
			<img src="{$urls.base_url}themes/jms_kasos/assets/img/icon/icon-down.png" />
		</a>
		<div class="dropdown-menu">
			<ul>
				{foreach from=$languages key=k item=language name="languages"}
					<li {if $language.id_lang == $current_language.id_lang} class="current" {/if}>
						<a href="{url entity='language' id=$language.id_lang}" class="collapse-item">
							<img class="flag" alt="{$language.iso_code}" src="{$urls.base_url}img/l/{$language.id_lang}.jpg" width="18" height="11"/>
							{$language.name_simple}
						</a>
					</li>
				{/foreach}		
			</ul>
		</div>
	</div>

	<div class="btn-group compact-hidden languages-info type-2">
		<a href="#" class="btn-xs dropdown-toggle" data-toggle="dropdown">
			<img class="flag" alt="{$language.iso_code}" src="{$urls.base_url}img/l/{$current_language.id_lang}.jpg" width="20" height="13"/>
			{$current_language.name_simple} <i class="fa fa-angle-down" aria-hidden="true"></i>
		</a>
		<div class="dropdown-menu">
			<ul>
				{foreach from=$languages key=k item=language name="languages"}
					<li {if $language.id_lang == $current_language.id_lang} class="current" {/if}>
						<a href="{url entity='language' id=$language.id_lang}" class="collapse-item">
							<img class="flag" alt="{$language.iso_code}" src="{$urls.base_url}img/l/{$language.id_lang}.jpg" width="20" height="13"/>
							{$language.name_simple}
						</a>
					</li>
				{/foreach}		
			</ul>
		</div>
	</div>

	<div class="btn-group compact-hidden languages-info type-3">
		<ul class="languages-list">
			{foreach from=$languages key=k item=language name="languages"}
				<li {if $language.id_lang == $current_language.id_lang} class="current" {/if}>
					<a href="{url entity='language' id=$language.id_lang}" class="collapse-item">
						{$language.name_simple}
					</a>
				</li>
			{/foreach}		
		</ul>
	</div>
{/if}
<!-- /Block languages module -->



