<?php
/* Smarty version 3.1.33, created on 2019-08-20 04:48:20
  from 'D:\xamppp\htdocs\jms_kasos\themes\jms_kasos\modules\jmsajaxsearch\views\templates\hook\jmsajaxsearch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5bb3d4311b44_79941819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06e7cfc45e80c4bd46ecd08187772985655ac6d7' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_kasos\\themes\\jms_kasos\\modules\\jmsajaxsearch\\views\\templates\\hook\\jmsajaxsearch.tpl',
      1 => 1564979149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5bb3d4311b44_79941819 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="btn-group menu-collapse compact-hidden jms_ajax_search" id="jms_ajax_search">
	<a href="#" class="btn-search dropdown-toggle" data-toggle="dropdown"></a>
	<div id="search-form" class="dropdown-menu">
		<div class="search-box">
			<form method="get" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('search'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="searchbox">
				<input type="hidden" name="controller" value="search" />
				<input type="hidden" name="orderby" value="position" />
				<input type="hidden" name="orderway" value="desc" />
				<input type="text" id="ajax_search" name="search_query" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search everything...','d'=>'Modules.JmsAjaxsearch'),$_smarty_tpl ) );?>
" class="form-control ajax_search" />
				<button type="submit" name="submit_search" class="button-search">
					<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Modules.JmsAjaxsearch'),$_smarty_tpl ) );?>
</span>
				</button>
			</form>
			<div id="search_result"></div>
		</div>	
	</div>
</div>



<?php }
}
