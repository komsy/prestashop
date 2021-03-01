<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-01 16:42:39
  from '/opt/lampp/htdocs/prestashop_1.7.7.0/modules/dashproducts/views/templates/hook/dashboard_zone_two.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_603cef4f91fb72_88880326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebf61f21a4d10f11b503fa1f118bed27a29042df' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop_1.7.7.0/modules/dashproducts/views/templates/hook/dashboard_zone_two.tpl',
      1 => 1610360315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603cef4f91fb72_88880326 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="dashproducts" class="panel widget <?php if ($_smarty_tpl->tpl_vars['allow_push']->value) {?> allow_push<?php }?>">
  <header class="panel-heading">
    <i class="icon-bar-chart"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Products and Sales','d'=>'Modules.Dashproducts.Admin'),$_smarty_tpl ) );?>

    <span class="panel-heading-action">
      <?php if (!empty($_smarty_tpl->tpl_vars['dashproducts_config_form']->value)) {?>
        <a class="list-toolbar-btn" href="#" onclick="toggleDashConfig('dashproducts'); return false;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configure','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
">
          <i class="process-icon-configure"></i>
        </a>
      <?php }?>
      <a class="list-toolbar-btn" href="#"  onclick="refreshDashboard('dashproducts'); return false;"  title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refresh','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
">
        <i class="process-icon-refresh"></i>
      </a>
    </span>
  </header>

  <?php if (!empty($_smarty_tpl->tpl_vars['dashproducts_config_form']->value)) {?>
    <section id="dashproducts_config" class="dash_config hide">
      <header><i class="icon-wrench"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configuration','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</header>
      <?php echo $_smarty_tpl->tpl_vars['dashproducts_config_form']->value;?>

    </section>
  <?php }?>

  <section>
    <nav>
      <ul class="nav nav-pills">
        <li class="active">
          <a href="#dash_recent_orders" data-toggle="tab">
            <i class="icon-fire"></i>
            <span class="hidden-inline-xs"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recent Orders','d'=>'Modules.Dashproducts.Admin'),$_smarty_tpl ) );?>
</span>
          </a>
        </li>
        <li>
          <a href="#dash_best_sellers" data-toggle="tab">
            <i class="icon-trophy"></i>
            <span class="hidden-inline-xs"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Best Sellers','d'=>'Modules.Dashproducts.Admin'),$_smarty_tpl ) );?>
</span>
          </a>
        </li>
        <li>
          <a href="#dash_most_viewed" data-toggle="tab">
            <i class="icon-eye-open"></i>
            <span class="hidden-inline-xs"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Most Viewed','d'=>'Modules.Dashproducts.Admin'),$_smarty_tpl ) );?>
</span>
          </a>
        </li>
        <li>
          <a href="#dash_top_search" data-toggle="tab">
            <i class="icon-search"></i>
            <span class="hidden-inline-xs"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Top Searches','d'=>'Modules.Dashproducts.Admin'),$_smarty_tpl ) );?>
</span>
          </a>
        </li>
      </ul>
    </nav>

    <div class="tab-content panel">
      <div class="tab-pane active" id="dash_recent_orders">
        <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Last %d orders','sprintf'=>intval($_smarty_tpl->tpl_vars['DASHPRODUCT_NBR_SHOW_LAST_ORDER']->value),'d'=>'Modules.Dashproducts.Admin'),$_smarty_tpl ) );?>
</h3>
        <div class="table-responsive">
          <table class="table data_table" id="table_recent_orders">
            <thead></thead>
            <tbody></tbody>
          </table>
        </div>
      </div>
      <div class="tab-pane" id="dash_best_sellers">
        <h3>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Top %d products','sprintf'=>intval($_smarty_tpl->tpl_vars['DASHPRODUCT_NBR_SHOW_BEST_SELLER']->value),'d'=>'Modules.Dashproducts.Admin'),$_smarty_tpl ) );?>

          <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"From",'d'=>'Modules.Dashproducts.Admin'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['date_from']->value,'htmlall','UTF-8' ));?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"to",'d'=>'Modules.Dashproducts.Admin'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['date_to']->value,'htmlall','UTF-8' ));?>
</span>
        </h3>
        <div class="table-responsive">
          <table class="table data_table" id="table_best_sellers">
            <thead></thead>
            <tbody></tbody>
          </table>
        </div>
      </div>
      <div class="tab-pane" id="dash_most_viewed">
        <h3>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Most Viewed",'d'=>'Modules.Dashproducts.Admin'),$_smarty_tpl ) );?>

          <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"From",'d'=>'Modules.Dashproducts.Admin'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['date_from']->value,'htmlall','UTF-8' ));?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"to",'d'=>'Modules.Dashproducts.Admin'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['date_to']->value,'htmlall','UTF-8' ));?>
</span>
        </h3>
        <div class="table-responsive">
          <table class="table data_table" id="table_most_viewed">
            <thead></thead>
            <tbody></tbody>
          </table>
        </div>
      </div>
      <div class="tab-pane" id="dash_top_search">
        <h3>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Top %d most search terms','sprintf'=>intval($_smarty_tpl->tpl_vars['DASHPRODUCT_NBR_SHOW_TOP_SEARCH']->value),'d'=>'Modules.Dashproducts.Admin'),$_smarty_tpl ) );?>

          <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"From",'d'=>'Modules.Dashproducts.Admin'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['date_from']->value,'htmlall','UTF-8' ));?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"to",'d'=>'Modules.Dashproducts.Admin'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['date_to']->value,'htmlall','UTF-8' ));?>
</span>
        </h3>
        <div class="table-responsive">
          <table class="table data_table" id="table_top_10_most_search">
            <thead></thead>
            <tbody></tbody>
          </table>
        </div>
      </div>
    </div>

  </section>
</section>
<?php }
}
