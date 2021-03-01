<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-01 16:42:39
  from '/opt/lampp/htdocs/prestashop_1.7.7.0/admin922axdc40/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_603cef4fa26d63_33946476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e7c3fe54bb16a00a0dc6a278f049dbc02cf22a6' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop_1.7.7.0/admin922axdc40/themes/default/template/content.tpl',
      1 => 1610360313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603cef4fa26d63_33946476 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
