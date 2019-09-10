<?php
/* Smarty version 3.1.33, created on 2019-09-10 06:01:03
  from 'D:\xamppp\htdocs\jms_kasos\themes\jms_kasos\templates\catalog\listing\product-list-desc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d77745f7abd71_22035714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7888a3b92d02fd7eb0b7f5aa9a64f933e4cc98ff' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_kasos\\themes\\jms_kasos\\templates\\catalog\\listing\\product-list-desc.tpl',
      1 => 1565756772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/products-top.tpl' => 1,
    'file:catalog/_partials/products.tpl' => 1,
    'file:catalog/_partials/products-bottom.tpl' => 1,
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
function content_5d77745f7abd71_22035714 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_444911815d77745f79c365_69609016', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'product_list_top'} */
class Block_3606469485d77745f7a4077_23003637 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
          <?php
}
}
/* {/block 'product_list_top'} */
/* {block 'product_list_active_filters'} */
class Block_14689948975d77745f7a4079_02225188 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div id="" class="hidden-sm-down">
            <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_active_filters'];?>

          </div>
        <?php
}
}
/* {/block 'product_list_active_filters'} */
/* {block 'product_list'} */
class Block_16492205525d77745f7a7ef9_36129684 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
          <?php
}
}
/* {/block 'product_list'} */
/* {block 'product_list_bottom'} */
class Block_20768137535d77745f7abd73_97189434 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
          <?php
}
}
/* {/block 'product_list_bottom'} */
/* {block 'content'} */
class Block_444911815d77745f79c365_69609016 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_444911815d77745f79c365_69609016',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_3606469485d77745f7a4077_23003637',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_14689948975d77745f7a4079_02225188',
  ),
  'product_list' => 
  array (
    0 => 'Block_16492205525d77745f7a7ef9_36129684',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_20768137535d77745f7abd73_97189434',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="main">
    <section id="products">
			   <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == "category") {?>
				
						<div class="cat_desc">
              <div class="category-title">
                <h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
</h3>
              </div>
							<div class="flex-box">
								 <?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
									<div id="category-description"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
								  <?php }?>
							</div>
						</div>
				<?php }?>
			
      <?php if (count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>
        <div id="">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3606469485d77745f7a4077_23003637', 'product_list_top', $this->tplIndex);
?>

        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14689948975d77745f7a4079_02225188', 'product_list_active_filters', $this->tplIndex);
?>


        <div id="product_list" class="product_list <?php if ($_smarty_tpl->tpl_vars['jpb_grid']->value == 1) {?>products-list-in-column<?php } else { ?>products-list-in-row<?php }?>  products-list-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jpb_productperrow']->value, ENT_QUOTES, 'UTF-8');?>
">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16492205525d77745f7a7ef9_36129684', 'product_list', $this->tplIndex);
?>

        </div>

        <div id="js-product-list-bottom">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20768137535d77745f7abd73_97189434', 'product_list_bottom', $this->tplIndex);
?>

        </div>

      <?php } else { ?>

        <?php $_smarty_tpl->_subTemplateRender('file:errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <?php }?>
    </section>

  </section>
<?php
}
}
/* {/block 'content'} */
}
