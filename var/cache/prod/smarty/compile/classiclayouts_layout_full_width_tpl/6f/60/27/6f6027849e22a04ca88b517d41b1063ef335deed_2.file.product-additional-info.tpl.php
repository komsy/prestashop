<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-20 13:18:10
  from '/opt/lampp/htdocs/prestashop_1.7.7.0/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6055cbe24ae497_18099267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f6027849e22a04ca88b517d41b1063ef335deed' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop_1.7.7.0/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1610360315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6055cbe24ae497_18099267 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
