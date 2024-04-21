<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::V5VxLKYojNtUCAfq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/upload-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.upload-file',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.js' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LKjNUEQrmCQcanPk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.js.map' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::F12BEXPlIphI9OMD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Uzh6vRzivu0UQj6J',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/expense/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.expense_categories',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/expense' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.expenses',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/service' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.service_list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/service/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.service_create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/service/addons' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.service_addons',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/service/type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.service_type',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/customers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customers',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/receipt' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.receipt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.view_orders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/orders/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.create_orders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.pos',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/order-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.status_screen_order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/master' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.master_settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/translations/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.add_translations',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/translations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.translations',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/financial-year' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.financial_year_settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/mail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.mail_settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/file-tools' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.filetools',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/sms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sms',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/staff' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.staff',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reports/daily' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.daily_report',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reports/expense' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.expense_report',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reports/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.order_report',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reports/sales' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales_report',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reports/tax' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tax_report',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reports/ledger' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ledger_report',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'install',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/dbsettings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dbsettings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/postDatabase' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'postDatabase',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/completed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'install_completed',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/livewire/message/([^/]++)(*:33)|/([^/]++)/livewire/message/([^/]++)(*:75)|/livewire/preview\\-file/([^/]++)(*:114)|/reset\\-password/([^/]++)(*:147)|/admin/(?|se(?|rvice/edit/([^/]++)(*:189)|ttings/translations/edit/([^/]++)(*:230))|customers/(?|ledger/([^/]++)(*:267)|view/(?|([^/]++)(*:291)|payments/([^/]++)(*:316)))|orders/(?|view/([^/]++)(*:349)|print\\-order/([^/]++)(*:378))|reports/(?|print\\-report/(?|expense/([^/]++)/([^/]++)(*:440)|sales/([^/]++)/([^/]++)(*:471)|tax/([^/]++)/([^/]++)/([^/]++)(*:509)|order/([^/]++)/([^/]++)/([^/]++)(*:549))|download\\-report/(?|expense/([^/]++)/([^/]++)(*:603)|sales/([^/]++)/([^/]++)(*:634)|tax/([^/]++)/([^/]++)/([^/]++)(*:672)|order/([^/]++)/([^/]++)/([^/]++)(*:712)))))/?$}sDu',
    ),
    3 => 
    array (
      33 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.message',
          ),
          1 => 
          array (
            0 => 'name',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      75 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.message-localized',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'name',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      114 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.preview-file',
          ),
          1 => 
          array (
            0 => 'filename',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      147 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XC8pQfhmvxZVZiL8',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      189 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.service_edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      230 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.edit_translations',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      267 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer_ledger',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      291 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer_view_invoice',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      316 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer_view_payments',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      349 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.view_single_order',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      378 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IgX94YqEEBbRbyvG',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      440 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Giv5q9hCemfF5ahc',
          ),
          1 => 
          array (
            0 => 'from_date',
            1 => 'to_date',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      471 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GrAwLcfabD2Ge8en',
          ),
          1 => 
          array (
            0 => 'from_date',
            1 => 'to_date',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      509 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oK85Ab00Hd4UbRNM',
          ),
          1 => 
          array (
            0 => 'from_date',
            1 => 'to_date',
            2 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      549 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Q0q7cffXL1h3DZPg',
          ),
          1 => 
          array (
            0 => 'from_date',
            1 => 'to_date',
            2 => 'status',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      603 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YINZCjWvsJqtNnfz',
          ),
          1 => 
          array (
            0 => 'from_date',
            1 => 'to_date',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      634 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Lm1REx6eUFZvgMRL',
          ),
          1 => 
          array (
            0 => 'from_date',
            1 => 'to_date',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      672 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cHPSJvjnLmNJByin',
          ),
          1 => 
          array (
            0 => 'from_date',
            1 => 'to_date',
            2 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      712 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QEo0wecfiRAEZk0l',
          ),
          1 => 
          array (
            0 => 'from_date',
            1 => 'to_date',
            2 => 'status',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::V5VxLKYojNtUCAfq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::V5VxLKYojNtUCAfq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/message/{name}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\HttpConnectionHandler@__invoke',
        'controller' => 'Livewire\\Controllers\\HttpConnectionHandler',
        'as' => 'livewire.message',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.message-localized' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/livewire/message/{name}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\HttpConnectionHandler@__invoke',
        'controller' => 'Livewire\\Controllers\\HttpConnectionHandler',
        'as' => 'livewire.message-localized',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.upload-file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/upload-file',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'controller' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'as' => 'livewire.upload-file',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.preview-file' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/preview-file/{filename}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'controller' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'as' => 'livewire.preview-file',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LKjNUEQrmCQcanPk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'as' => 'generated::LKjNUEQrmCQcanPk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::F12BEXPlIphI9OMD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js.map',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'as' => 'generated::F12BEXPlIphI9OMD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Uzh6vRzivu0UQj6J' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007870000000000000000";}";s:4:"hash";s:44:"kfAabWEjMnezN78bbQbVhRnJskceDHeCbbQ7WbrvCbs=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Uzh6vRzivu0UQj6J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'installed',
          2 => 'installed',
        ),
        'uses' => 'App\\Http\\Livewire\\Login@__invoke',
        'controller' => 'App\\Http\\Livewire\\Login@__invoke',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XC8pQfhmvxZVZiL8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reset-password/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\ResetPassword@__invoke',
        'controller' => 'App\\Http\\Livewire\\ResetPassword@__invoke',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::XC8pQfhmvxZVZiL8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Dashboard@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Dashboard',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.expense_categories' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/expense/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Expense\\ExpenseCategories@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Expense\\ExpenseCategories',
        'namespace' => NULL,
        'prefix' => 'admin/expense',
        'where' => 
        array (
        ),
        'as' => 'admin.expense_categories',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.expenses' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/expense',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Expense\\Expenses@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Expense\\Expenses',
        'namespace' => NULL,
        'prefix' => 'admin/expense',
        'where' => 
        array (
        ),
        'as' => 'admin.expenses',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.service_list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Service\\ServiceList@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Service\\ServiceList',
        'namespace' => NULL,
        'prefix' => 'admin/service',
        'where' => 
        array (
        ),
        'as' => 'admin.service_list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.service_create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/service/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Service\\ServiceCreate@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Service\\ServiceCreate',
        'namespace' => NULL,
        'prefix' => 'admin/service',
        'where' => 
        array (
        ),
        'as' => 'admin.service_create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.service_edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/service/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Service\\ServiceEdit@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Service\\ServiceEdit',
        'namespace' => NULL,
        'prefix' => 'admin/service',
        'where' => 
        array (
        ),
        'as' => 'admin.service_edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.service_addons' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/service/addons',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Service\\ServiceAddons@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Service\\ServiceAddons',
        'namespace' => NULL,
        'prefix' => 'admin/service',
        'where' => 
        array (
        ),
        'as' => 'admin.service_addons',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.service_type' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/service/type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Service\\ServiceType@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Service\\ServiceType',
        'namespace' => NULL,
        'prefix' => 'admin/service',
        'where' => 
        array (
        ),
        'as' => 'admin.service_type',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customers' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Customers\\Customers@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Customers\\Customers',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.customers',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.receipt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/receipt',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Payments\\PaymentReceipt@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Payments\\PaymentReceipt',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.receipt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer_ledger' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customers/ledger/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Customers\\CustomerLedger@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Customers\\CustomerLedger',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.customer_ledger',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer_view_invoice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customers/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Customers\\ViewCustomerInvoice@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Customers\\ViewCustomerInvoice',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.customer_view_invoice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer_view_payments' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customers/view/payments/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Customers\\ViewCustomerPayments@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Customers\\ViewCustomerPayments',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.customer_view_payments',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.view_orders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Orders\\ViewOrders@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Orders\\ViewOrders',
        'namespace' => NULL,
        'prefix' => 'admin/orders',
        'where' => 
        array (
        ),
        'as' => 'admin.view_orders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.create_orders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/orders/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Orders\\AddOrders@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Orders\\AddOrders',
        'namespace' => NULL,
        'prefix' => 'admin/orders',
        'where' => 
        array (
        ),
        'as' => 'admin.create_orders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.view_single_order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/orders/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Orders\\ViewSingleOrder@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Orders\\ViewSingleOrder',
        'namespace' => NULL,
        'prefix' => 'admin/orders',
        'where' => 
        array (
        ),
        'as' => 'admin.view_single_order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IgX94YqEEBbRbyvG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/orders/print-order/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Orders\\PrintInvoice\\OrderInvoicePrint@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Orders\\PrintInvoice\\OrderInvoicePrint',
        'namespace' => NULL,
        'prefix' => 'admin/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::IgX94YqEEBbRbyvG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.pos' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Orders\\AddOrders@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Orders\\AddOrders',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.pos',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.status_screen_order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/order-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Orders\\OrderStatusScreen@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Orders\\OrderStatusScreen',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.status_screen_order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.master_settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/master',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\MasterSetting@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\MasterSetting',
        'namespace' => NULL,
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
        'as' => 'admin.master_settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.add_translations' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/translations/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Translations\\AddTranslations@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Translations\\AddTranslations',
        'namespace' => NULL,
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
        'as' => 'admin.add_translations',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.translations' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/translations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Translations\\Translations@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Translations\\Translations',
        'namespace' => NULL,
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
        'as' => 'admin.translations',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.edit_translations' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/translations/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Translations\\EditTranslations@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Translations\\EditTranslations',
        'namespace' => NULL,
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
        'as' => 'admin.edit_translations',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.financial_year_settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/financial-year',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\FinancialYearSettings@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\FinancialYearSettings',
        'namespace' => NULL,
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
        'as' => 'admin.financial_year_settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.mail_settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/mail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\MailSettings@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\MailSettings',
        'namespace' => NULL,
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
        'as' => 'admin.mail_settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.filetools' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/file-tools',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\FileTools@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\FileTools',
        'namespace' => NULL,
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
        'as' => 'admin.filetools',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sms' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/sms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\SMSSettings@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\SMSSettings',
        'namespace' => NULL,
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
        'as' => 'admin.sms',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.staff' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/staff',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Staff\\Staff@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Staff\\Staff',
        'namespace' => NULL,
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
        'as' => 'admin.staff',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.daily_report' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/daily',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Reports\\DailyReport@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Reports\\DailyReport',
        'namespace' => NULL,
        'prefix' => 'admin/reports',
        'where' => 
        array (
        ),
        'as' => 'admin.daily_report',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.expense_report' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/expense',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Reports\\ExpenseReport@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Reports\\ExpenseReport',
        'namespace' => NULL,
        'prefix' => 'admin/reports',
        'where' => 
        array (
        ),
        'as' => 'admin.expense_report',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.order_report' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Reports\\OrderReport@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Reports\\OrderReport',
        'namespace' => NULL,
        'prefix' => 'admin/reports',
        'where' => 
        array (
        ),
        'as' => 'admin.order_report',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sales_report' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/sales',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Reports\\SalesReport@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Reports\\SalesReport',
        'namespace' => NULL,
        'prefix' => 'admin/reports',
        'where' => 
        array (
        ),
        'as' => 'admin.sales_report',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tax_report' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/tax',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Reports\\TaxReport@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Reports\\TaxReport',
        'namespace' => NULL,
        'prefix' => 'admin/reports',
        'where' => 
        array (
        ),
        'as' => 'admin.tax_report',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ledger_report' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/ledger',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Reports\\CustomerLedger@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Reports\\CustomerLedger',
        'namespace' => NULL,
        'prefix' => 'admin/reports',
        'where' => 
        array (
        ),
        'as' => 'admin.ledger_report',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Giv5q9hCemfF5ahc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/print-report/expense/{from_date}/{to_date}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
          3 => 'admin',
          4 => 'admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Reports\\PrintReport\\ExpenseReport@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Reports\\PrintReport\\ExpenseReport',
        'namespace' => NULL,
        'prefix' => 'admin/reports/print-report',
        'where' => 
        array (
        ),
        'as' => 'generated::Giv5q9hCemfF5ahc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GrAwLcfabD2Ge8en' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/print-report/sales/{from_date}/{to_date}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
          3 => 'admin',
          4 => 'admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Reports\\PrintReport\\SalesReport@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Reports\\PrintReport\\SalesReport',
        'namespace' => NULL,
        'prefix' => 'admin/reports/print-report',
        'where' => 
        array (
        ),
        'as' => 'generated::GrAwLcfabD2Ge8en',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oK85Ab00Hd4UbRNM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/print-report/tax/{from_date}/{to_date}/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
          3 => 'admin',
          4 => 'admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Reports\\PrintReport\\TaxReport@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Reports\\PrintReport\\TaxReport',
        'namespace' => NULL,
        'prefix' => 'admin/reports/print-report',
        'where' => 
        array (
        ),
        'as' => 'generated::oK85Ab00Hd4UbRNM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Q0q7cffXL1h3DZPg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/print-report/order/{from_date}/{to_date}/{status}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
          3 => 'admin',
          4 => 'admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Reports\\PrintReport\\OrderReport@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Reports\\PrintReport\\OrderReport',
        'namespace' => NULL,
        'prefix' => 'admin/reports/print-report',
        'where' => 
        array (
        ),
        'as' => 'generated::Q0q7cffXL1h3DZPg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YINZCjWvsJqtNnfz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/download-report/expense/{from_date}/{to_date}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
          3 => 'admin',
          4 => 'admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Reports\\DownloadReport\\ExpenseReport@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Reports\\DownloadReport\\ExpenseReport',
        'namespace' => NULL,
        'prefix' => 'admin/reports/download-report',
        'where' => 
        array (
        ),
        'as' => 'generated::YINZCjWvsJqtNnfz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Lm1REx6eUFZvgMRL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/download-report/sales/{from_date}/{to_date}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
          3 => 'admin',
          4 => 'admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Reports\\DownloadReport\\SalesReport@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Reports\\DownloadReport\\SalesReport',
        'namespace' => NULL,
        'prefix' => 'admin/reports/download-report',
        'where' => 
        array (
        ),
        'as' => 'generated::Lm1REx6eUFZvgMRL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cHPSJvjnLmNJByin' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/download-report/tax/{from_date}/{to_date}/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
          3 => 'admin',
          4 => 'admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Reports\\DownloadReport\\TaxReport@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Reports\\DownloadReport\\TaxReport',
        'namespace' => NULL,
        'prefix' => 'admin/reports/download-report',
        'where' => 
        array (
        ),
        'as' => 'generated::cHPSJvjnLmNJByin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QEo0wecfiRAEZk0l' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/download-report/order/{from_date}/{to_date}/{status}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'store',
          2 => 'installed',
          3 => 'admin',
          4 => 'admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Reports\\DownloadReport\\OrderReport@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Reports\\DownloadReport\\OrderReport',
        'namespace' => NULL,
        'prefix' => 'admin/reports/download-report',
        'where' => 
        array (
        ),
        'as' => 'generated::QEo0wecfiRAEZk0l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'install' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\InstallController@install',
        'controller' => 'App\\Http\\Controllers\\InstallController@install',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'install',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dbsettings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/dbsettings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\InstallController@dbsettings',
        'controller' => 'App\\Http\\Controllers\\InstallController@dbsettings',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'dbsettings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'postDatabase' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/postDatabase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\InstallController@postDatabase',
        'controller' => 'App\\Http\\Controllers\\InstallController@postDatabase',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'postDatabase',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'install_completed' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/completed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\InstallController@install_completed',
        'controller' => 'App\\Http\\Controllers\\InstallController@install_completed',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'install_completed',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Update\\Updater@__invoke',
        'controller' => 'App\\Http\\Livewire\\Update\\Updater',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
