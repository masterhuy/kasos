{*
 * @package Jms Ajax Search
 * @version 1.1
 * @Copyright (C) 2009 - 2015 Joommasters.
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @Website: http://www.joommasters.com
*}
<div class="btn-group menu-collapse compact-hidden jms_ajax_search" id="jms_ajax_search">
	<a href="#" class="btn-search" data-toggle="modal" data-target="#search-form"></a>
	<div id="search-form" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content container">
				<div class="search-box">
					<div class="label-form">
						<p>{l s='WHAT ARE YOU LOOKING FOR?' d='Modules.JmsAjaxsearch'}</p>
						<i class="d-flex" data-dismiss="modal">
							<svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-theme-164" viewBox="0 0 24 24">
								<path d="M19.583 4.965a.65.65 0 0 1-.176.449l-6.445 6.426 6.445 6.426c.117.131.176.28.176.449a.65.65 0 0 1-.176.449.846.846 0 0 1-.215.127.596.596 0 0 1-.468 0 .846.846 0 0 1-.215-.127l-6.426-6.445-6.426 6.445a.846.846 0 0 1-.215.127.596.596 0 0 1-.468 0 .846.846 0 0 1-.215-.127.65.65 0 0 1-.176-.449c0-.169.059-.318.176-.449l6.445-6.426-6.445-6.426a.65.65 0 0 1-.176-.449c0-.169.059-.318.176-.449a.652.652 0 0 1 .449-.176c.169 0 .319.059.449.176l6.426 6.445 6.426-6.445a.652.652 0 0 1 .449-.176c.169 0 .319.059.449.176.117.13.176.28.176.449z"></path>
							</svg>
						</i>
					</div>
					<form method="get" action="{$link->getPageLink('search')|escape:'html':'UTF-8'}" class="searchbox">
						<input type="hidden" name="controller" value="search" />
						<input type="hidden" name="orderby" value="position" />
						<input type="hidden" name="orderway" value="desc" />
						<input autofocus type="text" id="ajax_search" name="search_query" placeholder="{l s='Search Products...' d='Modules.JmsAjaxsearch'}" class="form-control ajax_search" />
					</form>
					<div id="search_result"></div>
				</div>	
			</div>
		</div>
	</div>
</div>

