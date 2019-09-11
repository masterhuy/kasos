<?php
/* Smarty version 3.1.33, created on 2019-09-11 02:34:24
  from 'D:\xamppp\htdocs\jms_kasos\themes\jms_kasos\templates\catalog\listing\product-list-banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d78957015fd87_74809818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a06ce98ec0916f6eb4988542e83804de58bb59fe' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_kasos\\themes\\jms_kasos\\templates\\catalog\\listing\\product-list-banner.tpl',
      1 => 1565756753,
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
function content_5d78957015fd87_74809818 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10266563075d789570140983_49353434', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'product_list_top'} */
class Block_13037430655d789570150380_94406525 extends Smarty_Internal_Block
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
class Block_1403337965d789570154209_35099107 extends Smarty_Internal_Block
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
class Block_5619995245d789570158080_38501387 extends Smarty_Internal_Block
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
class Block_7062503335d78957015bf05_93817600 extends Smarty_Internal_Block
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
class Block_10266563075d789570140983_49353434 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10266563075d789570140983_49353434',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_13037430655d789570150380_94406525',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_1403337965d789570154209_35099107',
  ),
  'product_list' => 
  array (
    0 => 'Block_5619995245d789570158080_38501387',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_7062503335d78957015bf05_93817600',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="main">
    <section id="products">
			<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == "category") {?>
				<?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['url'], ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
if (isset($_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['url']) && $_prefixVariable1 != '') {?>
					<?php if ($_smarty_tpl->tpl_vars['jpb_productperrow']->value < 5) {?>
          <div class="image-banner-category">
            <img class="img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="">
          </div>
          <?php }?>
				<?php }?>
			<?php }?>
        <div class="category-title">
            <h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
</h3>
        </div>
      <?php if (count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>
        <div id="">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13037430655d789570150380_94406525', 'product_list_top', $this->tplIndex);
?>

        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1403337965d789570154209_35099107', 'product_list_active_filters', $this->tplIndex);
?>


          <div id="product_list" class="product_list <?php if ($_smarty_tpl->tpl_vars['jpb_grid']->value == 1) {?>products-list-in-column<?php } else { ?>products-list-in-row<?php }?>  products-list-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jpb_productperrow']->value, ENT_QUOTES, 'UTF-8');?>
">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5619995245d789570158080_38501387', 'product_list', $this->tplIndex);
?>

        </div>

        <div id="js-product-list-bottom">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7062503335d78957015bf05_93817600', 'product_list_bottom', $this->tplIndex);
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
