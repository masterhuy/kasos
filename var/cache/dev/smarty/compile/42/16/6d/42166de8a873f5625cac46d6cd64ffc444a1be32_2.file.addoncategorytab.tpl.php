<?php
/* Smarty version 3.1.33, created on 2019-09-10 23:10:31
  from 'D:\xamppp\htdocs\jms_kasos\themes\jms_kasos\modules\jmspagebuilder\views\templates\hook\addoncategorytab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d7865a7354752_08769696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42166de8a873f5625cac46d6cd64ffc444a1be32' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_kasos\\themes\\jms_kasos\\modules\\jmspagebuilder\\views\\templates\\hook\\addoncategorytab.tpl',
      1 => 1564461995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_5d7865a7354752_08769696 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
var cattab_items = <?php if ($_smarty_tpl->tpl_vars['cols']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>4<?php }?>;
var cattab_itemsDesktop = <?php if ($_smarty_tpl->tpl_vars['cols']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>4<?php }?>;
var cattab_itemsDesktopSmall = <?php if ($_smarty_tpl->tpl_vars['cols_md']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_md']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>3<?php }?>;
var cattab_itemsTablet = <?php if ($_smarty_tpl->tpl_vars['cols_sm']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_sm']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>2<?php }?>;
var cattab_itemsMobile = <?php if ($_smarty_tpl->tpl_vars['cols_xs']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_xs']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>;
var cattab_nav = <?php if ($_smarty_tpl->tpl_vars['navigation']->value == 1) {?>true<?php } else { ?>false<?php }?>;
var cattab_pag = <?php if ($_smarty_tpl->tpl_vars['pagination']->value == 1) {?>true<?php } else { ?>false<?php }?>;
var cattab_auto_play_carousel = <?php if ($_smarty_tpl->tpl_vars['autoplay']->value == 1) {?>true<?php } else { ?>false<?php }?>;
<?php echo '</script'; ?>
>
<div class="addon-title">
	<?php if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
		<h3><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addon_title']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h3>
	<?php }?>
	<div class="jms-tab <?php if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>mt-40<?php }?>">
		<ul class="nav">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['category']->value) {
?>
				<li class="nav-item <?php if ($_smarty_tpl->tpl_vars['k']->value == 0) {?> active<?php }?>">
					<a class="" data-toggle="tab" href="#category-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['id_category'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>

					</a>
				</li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	
		</ul>
	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
	<p class="addon-desc"><?php echo $_smarty_tpl->tpl_vars['addon_desc']->value;?>
</p>
<?php }?>

<div class="tab-content">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['category']->value) {
?>
		<div role="tabpanel" class="tab-pane <?php if ($_smarty_tpl->tpl_vars['k']->value == 0) {?>active <?php }?>" id="category-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['id_category'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
			<div class="product_box">
				<div class="categorytab-carousel">	
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value['products'], 'products_slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['products_slide']->value) {
?>				
						<div class="item">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products_slide']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
								<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
		 	</div>
		</div>		
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	
</div>


<?php }
}
