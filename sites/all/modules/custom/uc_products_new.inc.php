<?php 

$view = new view();
$view->name = 'uc_products_new';
$view->description = '';
$view->tag = 'Ubercart';
$view->base_table = 'node';
$view->human_name = '';
$view->core = 0;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Defaults */
$handler = $view->new_display('default', 'Defaults', 'default');
$handler->display->display_options['title'] = 'Умный склад';
$handler->display->display_options['use_ajax'] = TRUE;
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'perm';
$handler->display->display_options['access']['perm'] = 'administer products';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['query']['options']['query_comment'] = FALSE;
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['exposed_form']['options']['submit_button'] = 'Применить';
$handler->display->display_options['exposed_form']['options']['reset_button_label'] = 'Сбросить';
$handler->display->display_options['exposed_form']['options']['exposed_sorts_label'] = 'Сортировать';
$handler->display->display_options['exposed_form']['options']['sort_asc_label'] = 'по возрастанию';
$handler->display->display_options['exposed_form']['options']['sort_desc_label'] = 'по убыванию';
$handler->display->display_options['pager']['type'] = 'none';
$handler->display->display_options['pager']['options']['offset'] = '0';
$handler->display->display_options['style_plugin'] = 'fluid_grid';
$handler->display->display_options['style_options']['grouping'] = array(
  0 => array(
    'field' => 'uc_product_image',
    'rendered' => 0,
    'rendered_strip' => 0,
  ),
);
$handler->display->display_options['style_options']['items_width'] = '200';
$handler->display->display_options['style_options']['items_height'] = '200';
$handler->display->display_options['style_options']['advanced_layout'] = array(
  'align' => TRUE,
);
$handler->display->display_options['style_options']['list_alignment'] = 'center';
$handler->display->display_options['style_options']['items_alignment'] = 'center';
$handler->display->display_options['style_options']['box_shadow'] = '0';
$handler->display->display_options['style_options']['border_radius'] = '0';
$handler->display->display_options['row_plugin'] = 'entity';
$handler->display->display_options['row_options']['view_mode'] = 'teaser';
/* Header: Global: Text area */
$handler->display->display_options['header']['area']['id'] = 'area';
$handler->display->display_options['header']['area']['table'] = 'views';
$handler->display->display_options['header']['area']['field'] = 'area';
$handler->display->display_options['header']['area']['content'] = '<style>
    caption {
        font-size: 19px !important;
        font-weight: bold !important;
        margin-bottom: 10px !important;
        margin-top: 20px !important;
    }
.fix-width-20 {
width: 10%;
}
.fix-width-20 {
width: 10%;
}
.fix-width-10 {
width: 90px;
}
.fix-width-50 {
width: 50%;
}
.fix-width-5 {
width: 50px;
}
.text-center {
text-align:center;
}
</style>';
$handler->display->display_options['header']['area']['format'] = 'full_html';
/* Field: Content: Title */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = 'Название товара';
$handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
/* Field: Content: Image */
$handler->display->display_options['fields']['uc_product_image']['id'] = 'uc_product_image';
$handler->display->display_options['fields']['uc_product_image']['table'] = 'field_data_uc_product_image';
$handler->display->display_options['fields']['uc_product_image']['field'] = 'uc_product_image';
$handler->display->display_options['fields']['uc_product_image']['label'] = 'Фото';
$handler->display->display_options['fields']['uc_product_image']['exclude'] = TRUE;
$handler->display->display_options['fields']['uc_product_image']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['uc_product_image']['hide_alter_empty'] = FALSE;
$handler->display->display_options['fields']['uc_product_image']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['uc_product_image']['settings'] = array(
  'image_style' => 'thumbnail',
  'image_link' => 'content',
);
$handler->display->display_options['fields']['uc_product_image']['delta_limit'] = '1';
$handler->display->display_options['fields']['uc_product_image']['delta_offset'] = '0';
/* Field: Product: SKU */
$handler->display->display_options['fields']['model']['id'] = 'model';
$handler->display->display_options['fields']['model']['table'] = 'uc_products';
$handler->display->display_options['fields']['model']['field'] = 'model';
$handler->display->display_options['fields']['model']['label'] = 'Артикул';
/* Field: Content: Brand */
$handler->display->display_options['fields']['field_brend']['id'] = 'field_brend';
$handler->display->display_options['fields']['field_brend']['table'] = 'field_data_field_brend';
$handler->display->display_options['fields']['field_brend']['field'] = 'field_brend';
$handler->display->display_options['fields']['field_brend']['label'] = '';
$handler->display->display_options['fields']['field_brend']['exclude'] = TRUE;
$handler->display->display_options['fields']['field_brend']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_brend']['element_wrapper_type'] = 'h3';
$handler->display->display_options['fields']['field_brend']['type'] = 'taxonomy_term_reference_plain';
/* Field: Product: List price */
$handler->display->display_options['fields']['list_price']['id'] = 'list_price';
$handler->display->display_options['fields']['list_price']['table'] = 'uc_products';
$handler->display->display_options['fields']['list_price']['field'] = 'list_price';
$handler->display->display_options['fields']['list_price']['label'] = 'Цена закупки';
$handler->display->display_options['fields']['list_price']['precision'] = '0';
/* Field: Product: Sell price */
$handler->display->display_options['fields']['sell_price']['id'] = 'sell_price';
$handler->display->display_options['fields']['sell_price']['table'] = 'uc_products';
$handler->display->display_options['fields']['sell_price']['field'] = 'sell_price';
$handler->display->display_options['fields']['sell_price']['label'] = 'Цена продажи';
$handler->display->display_options['fields']['sell_price']['alter']['text'] = '[sell_price] [nid_1]';
$handler->display->display_options['fields']['sell_price']['element_class'] = 'fix-width-20';
$handler->display->display_options['fields']['sell_price']['precision'] = '0';
/* Field: Stock: Level */
$handler->display->display_options['fields']['stock']['id'] = 'stock';
$handler->display->display_options['fields']['stock']['table'] = 'uc_product_stock';
$handler->display->display_options['fields']['stock']['field'] = 'stock';
$handler->display->display_options['fields']['stock']['label'] = 'Остаток, шт.';
$handler->display->display_options['fields']['stock']['alter']['text'] = '[stock] [nid]';
$handler->display->display_options['fields']['stock']['element_class'] = 'fix-width-10 text-center';
/* Field: Stock: Threshold */
$handler->display->display_options['fields']['threshold']['id'] = 'threshold';
$handler->display->display_options['fields']['threshold']['table'] = 'uc_product_stock';
$handler->display->display_options['fields']['threshold']['field'] = 'threshold';
$handler->display->display_options['fields']['threshold']['label'] = 'В резерве';
$handler->display->display_options['fields']['threshold']['element_class'] = 'fix-width-10 text-center';
/* Field: Content: Nid */
$handler->display->display_options['fields']['nid_1']['id'] = 'nid_1';
$handler->display->display_options['fields']['nid_1']['table'] = 'node';
$handler->display->display_options['fields']['nid_1']['field'] = 'nid';
$handler->display->display_options['fields']['nid_1']['label'] = '';
$handler->display->display_options['fields']['nid_1']['alter']['alter_text'] = TRUE;
$handler->display->display_options['fields']['nid_1']['alter']['text'] = '<a href="/node/[nid_1]/edit/price" class="autodialog" data-dialog-ajax="true" data-dialog-ajax-disable-redirect="true" data-dialog-width="300"><img src="/sites/all/modules/ubercart/uc_store/images/order_edit.gif"></a>';
$handler->display->display_options['fields']['nid_1']['element_class'] = 'fix-width-5 text-center';
$handler->display->display_options['fields']['nid_1']['element_label_colon'] = FALSE;
/* Field: Content: Nid */
$handler->display->display_options['fields']['nid']['id'] = 'nid';
$handler->display->display_options['fields']['nid']['table'] = 'node';
$handler->display->display_options['fields']['nid']['field'] = 'nid';
$handler->display->display_options['fields']['nid']['label'] = '';
$handler->display->display_options['fields']['nid']['alter']['alter_text'] = TRUE;
$handler->display->display_options['fields']['nid']['alter']['text'] = '<a href="/node/[nid]/delete" class="autodialog" data-dialog-ajax="true" data-dialog-ajax-disable-redirect="true" data-dialog-width="300"><img src="/misc/message-16-error.png"></a>';
$handler->display->display_options['fields']['nid']['element_class'] = 'fix-width-5 text-center';
$handler->display->display_options['fields']['nid']['element_label_colon'] = FALSE;
/* Filter criterion: Product: SKU */
$handler->display->display_options['filters']['model']['id'] = 'model';
$handler->display->display_options['filters']['model']['table'] = 'uc_products';
$handler->display->display_options['filters']['model']['field'] = 'model';
$handler->display->display_options['filters']['model']['group'] = 1;
$handler->display->display_options['filters']['model']['exposed'] = TRUE;
$handler->display->display_options['filters']['model']['expose']['operator_id'] = 'model_op';
$handler->display->display_options['filters']['model']['expose']['label'] = 'Артикул';
$handler->display->display_options['filters']['model']['expose']['operator'] = 'model_op';
$handler->display->display_options['filters']['model']['expose']['identifier'] = 'model';
$handler->display->display_options['filters']['model']['expose']['remember_roles'] = array(
  2 => '2',
  1 => 0,
  5 => 0,
  3 => 0,
  4 => 0,
);
/* Filter criterion: Content: Title */
$handler->display->display_options['filters']['title']['id'] = 'title';
$handler->display->display_options['filters']['title']['table'] = 'node';
$handler->display->display_options['filters']['title']['field'] = 'title';
$handler->display->display_options['filters']['title']['operator'] = 'contains';
$handler->display->display_options['filters']['title']['group'] = 1;
$handler->display->display_options['filters']['title']['exposed'] = TRUE;
$handler->display->display_options['filters']['title']['expose']['operator_id'] = 'title_op';
$handler->display->display_options['filters']['title']['expose']['label'] = 'Название товара';
$handler->display->display_options['filters']['title']['expose']['operator'] = 'title_op';
$handler->display->display_options['filters']['title']['expose']['identifier'] = 'title';
$handler->display->display_options['filters']['title']['expose']['remember_roles'] = array(
  2 => '2',
  1 => 0,
  5 => 0,
  3 => 0,
  4 => 0,
);
/* Filter criterion: Content: Published */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'node';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = 1;
$handler->display->display_options['filters']['status']['group'] = 1;
$handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
/* Filter criterion: Node: Is a product */
$handler->display->display_options['filters']['is_product']['id'] = 'is_product';
$handler->display->display_options['filters']['is_product']['table'] = 'uc_products';
$handler->display->display_options['filters']['is_product']['field'] = 'is_product';
$handler->display->display_options['filters']['is_product']['value'] = 1;
$handler->display->display_options['filters']['is_product']['group'] = 1;
$handler->display->display_options['filters']['is_product']['expose']['operator'] = FALSE;

/* Display: Admin page */
$handler = $view->new_display('page', 'Admin page', 'admin_page');
$handler->display->display_options['defaults']['style_plugin'] = FALSE;
$handler->display->display_options['style_plugin'] = 'table';
$handler->display->display_options['style_options']['grouping'] = array(
  0 => array(
    'field' => 'field_brend',
    'rendered' => 1,
    'rendered_strip' => 0,
  ),
);
$handler->display->display_options['style_options']['columns'] = array(
  'uc_product_image' => 'uc_product_image',
  'model' => 'model',
  'field_brend' => 'field_brend',
  'title' => 'title',
  'list_price' => 'list_price',
  'display_price' => 'display_price',
  'stock' => 'stock',
  'edit_node' => 'edit_node',
);
$handler->display->display_options['style_options']['default'] = '-1';
$handler->display->display_options['style_options']['info'] = array(
  'uc_product_image' => array(
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'model' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'field_brend' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'title' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'list_price' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'display_price' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'stock' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'edit_node' => array(
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
);
$handler->display->display_options['defaults']['style_options'] = FALSE;
$handler->display->display_options['defaults']['row_plugin'] = FALSE;
$handler->display->display_options['defaults']['row_options'] = FALSE;
$handler->display->display_options['path'] = 'admin/store/custom_stock';
$handler->display->display_options['menu']['type'] = 'normal';
$handler->display->display_options['menu']['title'] = 'View products';
$handler->display->display_options['menu']['description'] = 'View and search products available through your website.';
$handler->display->display_options['menu']['weight'] = '-10';
$handler->display->display_options['menu']['name'] = 'management';


 ?>