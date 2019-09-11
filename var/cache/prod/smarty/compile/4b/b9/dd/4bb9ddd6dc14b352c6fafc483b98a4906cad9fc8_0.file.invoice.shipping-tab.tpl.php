<?php
/* Smarty version 3.1.33, created on 2019-09-11 05:53:14
  from 'D:\xamppp\htdocs\jms_kasos\pdf\invoice.shipping-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d78c40a1eddf0_77037434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bb9ddd6dc14b352c6fafc483b98a4906cad9fc8' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_kasos\\pdf\\invoice.shipping-tab.tpl',
      1 => 1562774834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d78c40a1eddf0_77037434 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }
}
