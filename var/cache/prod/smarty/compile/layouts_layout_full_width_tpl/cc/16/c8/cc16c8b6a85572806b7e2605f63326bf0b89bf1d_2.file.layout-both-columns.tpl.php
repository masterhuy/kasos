<?php
/* Smarty version 3.1.33, created on 2019-08-13 06:23:16
  from 'D:\xamppp\htdocs\jms_kasos\themes\jms_kasos\templates\layouts\layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d528f94356ca5_23844824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc16c8b6a85572806b7e2605f63326bf0b89bf1d' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_kasos\\themes\\jms_kasos\\templates\\layouts\\layout-both-columns.tpl',
      1 => 1563937369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/head.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_5d528f94356ca5_23844824 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
    <head>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2663555425d528f9432bd17_77602720', 'head');
?>

    </head>

    <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
 <?php if (isset($_smarty_tpl->tpl_vars['jpb_homeclass']->value) && $_smarty_tpl->tpl_vars['jpb_homeclass']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['jpb_homeclass']->value, ENT_QUOTES, 'UTF-8');
}?> <?php if ($_smarty_tpl->tpl_vars['jpb_rtl']->value) {?> rtl<?php }?>">
    	<?php if ($_smarty_tpl->tpl_vars['jpb_loadingstyle']->value) {?>
    		<div class="preloader">
    			<div class="spinner<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jpb_loadingstyle']->value, ENT_QUOTES, 'UTF-8');?>
">
    				<div class="dot1"></div>
    				<div class="dot2"></div>
    			    <div class="bounce1"></div>
    			    <div class="bounce2"></div>
    			    <div class="bounce3"></div>
    			</div>
    		</div>
    	<?php }?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

    	<?php if ($_smarty_tpl->tpl_vars['jpb_mobilemenu']->value) {?>
    		<div class="menu-wrap hidden-lg hidden-md">
    			<button id="close-button" class="close-button">
                    <i class="d-i-flex">
                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-theme-164" viewBox="0 0 24 24">
                            <path d="M19.583 4.965a.65.65 0 0 1-.176.449l-6.445 6.426 6.445 6.426c.117.131.176.28.176.449a.65.65 0 0 1-.176.449.846.846 0 0 1-.215.127.596.596 0 0 1-.468 0 .846.846 0 0 1-.215-.127l-6.426-6.445-6.426 6.445a.846.846 0 0 1-.215.127.596.596 0 0 1-.468 0 .846.846 0 0 1-.215-.127.65.65 0 0 1-.176-.449c0-.169.059-.318.176-.449l6.445-6.426-6.445-6.426a.65.65 0 0 1-.176-.449c0-.169.059-.318.176-.449a.652.652 0 0 1 .449-.176c.169 0 .319.059.449.176l6.426 6.445 6.426-6.445a.652.652 0 0 1 .449-.176c.169 0 .319.059.449.176.117.13.176.28.176.449z"></path>
                        </svg>
                     </i>
                </button>
    			<nav id="off-canvas-menu">					
    				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTopColumn'),$_smarty_tpl ) );?>

    			</nav>				
    		</div>
            <div class="bg-overlay"></div>
    	<?php }?>

        <div class="main-site">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7654308595d528f9433b728_07405779', 'product_activation');
?>

            <header id="header">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15251676505d528f9433f5a9_51275792', 'header');
?>

            </header>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15526089355d528f9433f5a9_76398305', 'notifications');
?>

    		<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index') {?>
    			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10022683375d528f94343427_07290041', 'breadcrumb');
?>

    		<?php }?>
            <div id="wrapper" <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index') {
}?>> 
                <div class="container">
                    <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index') {?>
                        <div class="row">
                    <?php }?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18328976945d528f943472a0_49249695', "left_column");
?>


                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1985932205d528f9434b127_63533277', "content_wrapper");
?>


                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7666363685d528f9434efa8_95209419', "right_column");
?>

    			
                    <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index') {?>
                    </div>
                    <?php }?>
                </div>
    		</div>

            <footer id="footer">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18575802855d528f94352e26_57624328', "footer");
?>

            </footer>
        </div>

        

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7944615105d528f94356ca9_31765540', 'javascript_bottom');
?>


        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

    </body>
</html>
<?php }
/* {block 'head'} */
class Block_2663555425d528f9432bd17_77602720 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_2663555425d528f9432bd17_77602720',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'head'} */
/* {block 'product_activation'} */
class Block_7654308595d528f9433b728_07405779 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_7654308595d528f9433b728_07405779',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
class Block_15251676505d528f9433f5a9_51275792 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_15251676505d528f9433f5a9_51275792',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'header'} */
/* {block 'notifications'} */
class Block_15526089355d528f9433f5a9_76398305 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_15526089355d528f9433f5a9_76398305',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

         
            <?php
}
}
/* {/block 'notifications'} */
/* {block 'breadcrumb'} */
class Block_10022683375d528f94343427_07290041 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_10022683375d528f94343427_07290041',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    			   <?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    			<?php
}
}
/* {/block 'breadcrumb'} */
/* {block "left_column"} */
class Block_18328976945d528f943472a0_49249695 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_18328976945d528f943472a0_49249695',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <div id="left-column" class="page-column col-sm-12 col-md-3 col-lg-3 col-xs-12 col-sm-12">
                                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct'),$_smarty_tpl ) );?>

                                <?php } else { ?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

                                <?php }?>
                            </div>
                        <?php
}
}
/* {/block "left_column"} */
/* {block "content"} */
class Block_3954987835d528f9434b129_13217349 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <p>Hello world! This is HTML5 Boilerplate.</p>
                                <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_1985932205d528f9434b127_63533277 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_1985932205d528f9434b127_63533277',
  ),
  'content' => 
  array (
    0 => 'Block_3954987835d528f9434b129_13217349',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <div id="content-wrapper" class="left-column right-column col-sm-12 col-md-6">
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3954987835d528f9434b129_13217349', "content", $this->tplIndex);
?>

                            </div>
                        <?php
}
}
/* {/block "content_wrapper"} */
/* {block "right_column"} */
class Block_7666363685d528f9434efa8_95209419 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_7666363685d528f9434efa8_95209419',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <div id="right-column" class="col-xs-12 col-sm-12 col-md-3">
                                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct'),$_smarty_tpl ) );?>

                                <?php } else { ?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>

                                <?php }?>
                            </div>
                        <?php
}
}
/* {/block "right_column"} */
/* {block "footer"} */
class Block_18575802855d528f94352e26_57624328 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_18575802855d528f94352e26_57624328',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block "footer"} */
/* {block 'javascript_bottom'} */
class Block_7944615105d528f94356ca9_31765540 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_7944615105d528f94356ca9_31765540',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>
        <?php
}
}
/* {/block 'javascript_bottom'} */
}
