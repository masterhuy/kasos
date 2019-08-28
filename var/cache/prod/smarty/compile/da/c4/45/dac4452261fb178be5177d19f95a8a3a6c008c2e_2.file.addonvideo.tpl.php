<?php
/* Smarty version 3.1.33, created on 2019-08-28 05:44:08
  from 'D:\xamppp\htdocs\jms_kasos\themes\jms_kasos\modules\jmspagebuilder\views\templates\hook\addonvideo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d664ce88af900_58329280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dac4452261fb178be5177d19f95a8a3a6c008c2e' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_kasos\\themes\\jms_kasos\\modules\\jmspagebuilder\\views\\templates\\hook\\addonvideo.tpl',
      1 => 1555036157,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d664ce88af900_58329280 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="addon-video">
    <?php if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
        <div class="addon-title">
            <h3><?php echo $_smarty_tpl->tpl_vars['addon_title']->value;?>
</h3>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
        <p class="addon-desc"><?php echo $_smarty_tpl->tpl_vars['addon_desc']->value;?>
</p>
    <?php }?>
    <span class="btn-close"><i class="fa fa-close" aria-hidden="true"></i></span>
    <div class="jms-addon jms-video">
        
        <?php if ($_smarty_tpl->tpl_vars['src']->value) {?>
            <iframe width="<?php echo $_smarty_tpl->tpl_vars['width']->value;?>
" height="<?php echo $_smarty_tpl->tpl_vars['height']->value;?>
" src="<?php echo $_smarty_tpl->tpl_vars['src']->value;?>
" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        <?php }?>
        <div class="bg-overlay"></div>
    </div>
</div><?php }
}
