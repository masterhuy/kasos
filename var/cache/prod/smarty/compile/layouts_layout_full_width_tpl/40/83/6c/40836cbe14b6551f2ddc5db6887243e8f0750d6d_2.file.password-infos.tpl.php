<?php
/* Smarty version 3.1.33, created on 2019-09-10 05:32:49
  from 'D:\xamppp\htdocs\jms_kasos\themes\jms_kasos\templates\customer\password-infos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d776dc154e2a8_12297152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40836cbe14b6551f2ddc5db6887243e8f0750d6d' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_kasos\\themes\\jms_kasos\\templates\\customer\\password-infos.tpl',
      1 => 1568106517,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d776dc154e2a8_12297152 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19882073585d776dc154e2a0_86784007', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8084903125d776dc154e2a2_78854290', 'page_content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_824878015d776dc154e2a6_06510841', 'page_footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_19882073585d776dc154e2a0_86784007 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_19882073585d776dc154e2a0_86784007',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content'} */
class Block_8084903125d776dc154e2a2_78854290 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_8084903125d776dc154e2a2_78854290',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <ul class="ps-alert-success">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['successes']->value, 'success');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['success']->value) {
?>
      <li class="item">
        <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['success']->value, ENT_QUOTES, 'UTF-8');?>
</p>
      </li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
<?php
}
}
/* {/block 'page_content'} */
/* {block 'page_footer'} */
class Block_824878015d776dc154e2a6_06510841 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer' => 
  array (
    0 => 'Block_824878015d776dc154e2a6_06510841',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <ul>
    <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['authentication'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to Login','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a></li>
  </ul>
<?php
}
}
/* {/block 'page_footer'} */
}
