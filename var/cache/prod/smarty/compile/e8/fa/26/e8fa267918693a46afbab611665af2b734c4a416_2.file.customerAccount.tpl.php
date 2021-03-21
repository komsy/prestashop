<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-20 13:34:41
  from '/opt/lampp/htdocs/prestashop_1.7.7.0/modules/psgdpr/views/templates/front/customerAccount.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6055cfc1c819f2_54996028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8fa267918693a46afbab611665af2b734c4a416' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop_1.7.7.0/modules/psgdpr/views/templates/front/customerAccount.tpl',
      1 => 1610362258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6055cfc1c819f2_54996028 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="psgdpr-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['front_controller']->value, ENT_QUOTES, 'UTF-8');?>
">
    <span class="link-item">
        <i class="material-icons">account_box</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'GDPR - Personal data','mod'=>'psgdpr'),$_smarty_tpl ) );?>

    </span>
</a>
<?php }
}
