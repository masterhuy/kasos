<?php
/* Smarty version 3.1.33, created on 2019-09-10 05:50:01
  from 'D:\xamppp\htdocs\jms_kasos\themes\jms_kasos\templates\checkout\_partials\address-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d7771c9e35472_22956198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a890871d3a7d24a70241ad66725bb886144bddae' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_kasos\\themes\\jms_kasos\\templates\\checkout\\_partials\\address-form.tpl',
      1 => 1563937369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d7771c9e35472_22956198 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18377543765d7771c9e21bf3_90682479', 'form_field');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13704807805d7771c9e298f5_10207863', 'form_fields');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12357931175d7771c9e2d772_12160505', 'form_buttons');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/_partials/address-form.tpl');
}
/* {block 'form_field'} */
class Block_18377543765d7771c9e21bf3_90682479 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field' => 
  array (
    0 => 'Block_18377543765d7771c9e21bf3_90682479',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['field']->value['name'] == "alias") {?>
      <?php } else { ?>
    <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

  <?php }
}
}
/* {/block 'form_field'} */
/* {block 'form_fields'} */
class Block_13704807805d7771c9e298f5_10207863 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_fields' => 
  array (
    0 => 'Block_13704807805d7771c9e298f5_10207863',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <input type="hidden" name="saveAddress" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
">
  <?php if ($_smarty_tpl->tpl_vars['type']->value === "delivery") {?>
    <div class="form-group row">
      <div class="col-md-9">
        <input name = "use_same_address" type = "checkbox" value = "1" <?php if ($_smarty_tpl->tpl_vars['use_same_address']->value) {?> checked <?php }?>>
        <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use this address for invoice too','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</label>
      </div>
    </div>
  <?php }
}
}
/* {/block 'form_fields'} */
/* {block 'form_buttons'} */
class Block_12357931175d7771c9e2d772_12160505 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_buttons' => 
  array (
    0 => 'Block_12357931175d7771c9e2d772_12160505',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if (!$_smarty_tpl->tpl_vars['form_has_continue_button']->value) {?>
    <button type="submit" class="btn btn-primary pull-xs-right button-small"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button>
    <a class="js-cancel-address pull-xs-right btn-default" href="?cancelAddress=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
  <?php } else { ?>
    <form>
      <button type="submit" class="btn-default pull-xs-right" name="confirm-addresses" value="1">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

      </button>
      <?php if (count($_smarty_tpl->tpl_vars['customer']->value['addresses']) > 0) {?>
        <a class="js-cancel-address pull-xs-right btn-default" href="?cancelAddress=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
      <?php }?>
    </form>
  <?php }
}
}
/* {/block 'form_buttons'} */
}
