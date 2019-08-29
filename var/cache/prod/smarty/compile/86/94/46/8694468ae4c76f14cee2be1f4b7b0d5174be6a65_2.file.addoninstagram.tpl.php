<?php
/* Smarty version 3.1.33, created on 2019-08-29 06:28:51
  from 'D:\xamppp\htdocs\jms_kasos\themes\jms_kasos\modules\jmspagebuilder\views\templates\hook\addoninstagram.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d67a8e38b18f1_88285999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8694468ae4c76f14cee2be1f4b7b0d5174be6a65' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_kasos\\themes\\jms_kasos\\modules\\jmspagebuilder\\views\\templates\\hook\\addoninstagram.tpl',
      1 => 1564557652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d67a8e38b18f1_88285999 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="addon-instagram">
	<div class="addon-title">
		<h3>
			Follow <br>@Kasos Store
		</h3>
	</div>
	<div class="instagram-carousel">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['insta_images']->value, 'img');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
?>
			<a class="grouped_elements" data-fancybox-group="gallery" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['img']->value['link'];?>
">
				<img src="<?php echo $_smarty_tpl->tpl_vars['img']->value['url'];?>
" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Instagram Image','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl ) );?>
"/>
			</a>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
</div>

<?php }
}
