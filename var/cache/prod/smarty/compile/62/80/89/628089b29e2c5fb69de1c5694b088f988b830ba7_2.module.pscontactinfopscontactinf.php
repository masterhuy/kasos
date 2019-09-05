<?php
/* Smarty version 3.1.33, created on 2019-09-05 05:29:42
  from 'module:pscontactinfopscontactinf' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d70d5867a0326_91702729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '628089b29e2c5fb69de1c5694b088f988b830ba7' => 
    array (
      0 => 'module:pscontactinfopscontactinf',
      1 => 1565775081,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d70d5867a0326_91702729 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="contact-rich">
  <div class="addon-title">
    <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact Info','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h3>
  </div>
  <div class="block">
    <div class="address section">
      <p class="info-address"><?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['address1'];?>
</p>
        <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
          <div class="data phone">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Call','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
:
            <a href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['phone'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['phone'], ENT_QUOTES, 'UTF-8');?>
</a>
          </div>
        <?php }?>
    </div>
  </div>
  <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['fax']) {?>
    <div class="block">
      <div class="icon"><i class="material-icons">&#xE0DF;</i></div>
      <div class="data">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fax:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
<br/>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['fax'], ENT_QUOTES, 'UTF-8');?>

      </div>
    </div>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email']) {?>
    <div class="block">
      <div class="data email">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
:
       <a href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['email'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a>
      </div>
    </div>
  <?php }?>
  <div class="contact-map">
    <iframe width="100%" height="500" style="border:0"
      src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBwY_0PWuwH_A5y4iwNAqpaUbUjRPySkFc%0A%20%20%20%20&q=7563%20St.%20Vicent%20Place,%20Glasgow"
      allowfullscreen="">
    </iframe>
  </div>
  <div class="social_icon">
    <ul>
    <li><a href="#"><i class="fa fa-facebook-square"><span class="hidden">facebook</span></i></a></li>
    <li><a href="#"><i class="fa fa-twitter"><span class="hidden">twitter</span></i></a></li>
    <li><a href="#"><i class="fa fa-behance"><span class="hidden">behance</span></i></a></li>
    <li><a href="#"><i class="fa fa-pinterest"><span class="hidden">pinterest</span></i></a></li>
    <li><a href="#"><i class="fa fa-instagram"><span class="hidden">instagram</span></i></a></li>
    </ul>
  </div>
</div>
<?php }
}
