<?php
/* Smarty version 3.1.33, created on 2019-09-09 23:01:57
  from 'D:\xamppp\htdocs\jms_kasos\themes\jms_kasos\templates\_partials\stylesheets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d771225bdc0d2_73892327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '752e2e47eb513cb72ac7657a8964e669a4d595e9' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_kasos\\themes\\jms_kasos\\templates\\_partials\\stylesheets.tpl',
      1 => 1564649994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d771225bdc0d2_73892327 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['theme_assets'], ENT_QUOTES, 'UTF-8');?>
css/digitalicon.css" />
<link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['theme_assets'], ENT_QUOTES, 'UTF-8');?>
css/typo-icon.css" />
<link rel="stylesheet" href="//maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['theme_assets'], ENT_QUOTES, 'UTF-8');?>
css/global.css" />
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stylesheets']->value['external'], 'stylesheet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->value) {
?>
<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['media'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stylesheets']->value['inline'], 'stylesheet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->value) {
?>
<style>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['content'], ENT_QUOTES, 'UTF-8');?>

</style>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php }
}
