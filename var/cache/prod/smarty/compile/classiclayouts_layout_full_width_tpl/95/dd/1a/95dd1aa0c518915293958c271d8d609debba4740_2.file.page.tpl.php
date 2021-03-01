<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-13 16:24:10
  from '/opt/lampp/htdocs/prestashop_1.7.7.0/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ffef47ab8ef82_79564706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95dd1aa0c518915293958c271d8d609debba4740' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop_1.7.7.0/themes/classic/templates/page.tpl',
      1 => 1610360315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffef47ab8ef82_79564706 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1891513915ffef47ab88874_15727235', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_9970845175ffef47ab89865_66979478 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_7912069115ffef47ab89077_27004298 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9970845175ffef47ab89865_66979478', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_17574688065ffef47ab8cc53_79336856 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_16890818255ffef47ab8d484_96094490 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_14585040065ffef47ab8c615_42704172 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17574688065ffef47ab8cc53_79336856', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16890818255ffef47ab8d484_96094490', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_15495868405ffef47ab8e3a0_38565237 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_10071245555ffef47ab8df68_98821109 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15495868405ffef47ab8e3a0_38565237', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1891513915ffef47ab88874_15727235 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1891513915ffef47ab88874_15727235',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_7912069115ffef47ab89077_27004298',
  ),
  'page_title' => 
  array (
    0 => 'Block_9970845175ffef47ab89865_66979478',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_14585040065ffef47ab8c615_42704172',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_17574688065ffef47ab8cc53_79336856',
  ),
  'page_content' => 
  array (
    0 => 'Block_16890818255ffef47ab8d484_96094490',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_10071245555ffef47ab8df68_98821109',
  ),
  'page_footer' => 
  array (
    0 => 'Block_15495868405ffef47ab8e3a0_38565237',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7912069115ffef47ab89077_27004298', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14585040065ffef47ab8c615_42704172', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10071245555ffef47ab8df68_98821109', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
