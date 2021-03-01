<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-13 16:24:37
  from '/opt/lampp/htdocs/prestashop_1.7.7.0/pdf/invoice.shipping-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ffef495ad65a8_40546195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4e1b99b6a17e1b5059dbdcf8a2be7aaaa2dbc57' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop_1.7.7.0/pdf/invoice.shipping-tab.tpl',
      1 => 1610360314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffef495ad65a8_40546195 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }
}
