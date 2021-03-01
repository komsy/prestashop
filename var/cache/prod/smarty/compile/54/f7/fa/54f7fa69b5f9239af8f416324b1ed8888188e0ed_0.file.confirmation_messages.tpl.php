<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-24 16:12:06
  from '/opt/lampp/htdocs/prestashop_1.7.7.0/admin922axdc40/themes/new-theme/template/components/layout/confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600d7226390351_28983734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54f7fa69b5f9239af8f416324b1ed8888188e0ed' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop_1.7.7.0/admin922axdc40/themes/new-theme/template/components/layout/confirmation_messages.tpl',
      1 => 1610360313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600d7226390351_28983734 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
