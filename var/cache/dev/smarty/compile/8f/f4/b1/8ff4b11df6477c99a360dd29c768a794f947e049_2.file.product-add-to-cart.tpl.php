<?php
/* Smarty version 3.1.33, created on 2019-09-05 03:24:32
  from 'D:\xamppp\htdocs\jms_kasos\themes\jms_kasos\templates\catalog\_partials\product-add-to-cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d70b83084a5d0_60341165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ff4b11df6477c99a360dd29c768a794f947e049' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_kasos\\themes\\jms_kasos\\templates\\catalog\\_partials\\product-add-to-cart.tpl',
      1 => 1566187157,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d70b83084a5d0_60341165 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="product-add-to-cart">
    <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15864733235d70b83082b1c5_49713515', 'product_quantity');
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122384995d70b83083abc6_36648426', 'product_availability');
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_870057165d70b8308428d5_14973857', 'product_minimal_quantity');
?>

    <?php }?>
</div>
<?php }
/* {block 'product_quantity'} */
class Block_15864733235d70b83082b1c5_49713515 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_quantity' => 
  array (
    0 => 'Block_15864733235d70b83082b1c5_49713515',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="product-quantity">
                <div class="customs">
                    <div class="title">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
:
                    </div>
                    <div class="qty">
                      <input
                        type="text"
                        name="qty"
                        id="quantity_wanted"
                        value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity_wanted'], ENT_QUOTES, 'UTF-8');?>
"
                        class="input-group"
                        min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
"
                      />
                    </div>
                </div>
      		    
                <button title="<?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] < 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sold Out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
}?>" class="btn-default active add-to-cart product-btn cart-button <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] < 1) {?>disabled<?php }?>" data-button-action="add-to-cart" type="submit" <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>disabled<?php }?>>
                    <span class="fa fa-spin fa-spinner"></span>
                    <span class="fa fa-check"></span>
                    <span class="text-addcart"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>		
                    <span class="text-outofstock"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out of stock','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>                           
                </button>

                <?php if (isset($_smarty_tpl->tpl_vars['jpb_wishlist']->value) && $_smarty_tpl->tpl_vars['jpb_wishlist']->value) {?>                          
                    <a class="addToWishlist" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'],'html' )), ENT_QUOTES, 'UTF-8');?>
', false, 1); return false;" data-id-product="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'],'html' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Wishlist'),$_smarty_tpl ) );?>
"></a>
                <?php }?>

            </div>
            <div class="clearfix"></div>
        <?php
}
}
/* {/block 'product_quantity'} */
/* {block 'product_availability'} */
class Block_122384995d70b83083abc6_36648426 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_availability' => 
  array (
    0 => 'Block_122384995d70b83083abc6_36648426',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="not-enough-product mt-20">
                <?php if ($_smarty_tpl->tpl_vars['product']->value['show_availability'] && $_smarty_tpl->tpl_vars['product']->value['availability_message']) {?>
                <span id="product-availability">
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'available') {?>
                        <span class="hidden" style="color:#fff; background:#25A799"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>
</span>
                    <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'last_remaining_items') {?>
                        <i class="hidden material-icons product-last-items">&#xE002;</i>
                    <?php } else { ?>
                        <span style="color:#d43f3a;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>
</span>
                    <?php }?>
                </span>
                <?php }?>
            </div>
        <?php
}
}
/* {/block 'product_availability'} */
/* {block 'product_minimal_quantity'} */
class Block_870057165d70b8308428d5_14973857 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_minimal_quantity' => 
  array (
    0 => 'Block_870057165d70b8308428d5_14973857',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <p class="product-minimal-quantity">
                <?php if ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'] > 1) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The minimum purchase order quantity for the product is %quantity%.','d'=>'Shop.Theme.Checkout','sprintf'=>array('%quantity%'=>$_smarty_tpl->tpl_vars['product']->value['minimal_quantity'])),$_smarty_tpl ) );?>

                <?php }?>
            </p>
        <?php
}
}
/* {/block 'product_minimal_quantity'} */
}
