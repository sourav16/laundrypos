<?php return array (
  'app' => 
  array (
    'name' => 'Laravel',
    'env' => 'local',
    'debug' => true,
    'url' => 'http://localhost',
    'asset_url' => NULL,
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'key' => 'base64:QWBoMekmMpKph/b8kTpFmZmCwPcrRdysWRar5dmdSlc=',
    'cipher' => 'AES-256-CBC',
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'Maatwebsite\\Excel\\ExcelServiceProvider',
      23 => 'App\\Providers\\AppServiceProvider',
      24 => 'App\\Providers\\AuthServiceProvider',
      25 => 'App\\Providers\\EventServiceProvider',
      26 => 'App\\Providers\\RouteServiceProvider',
      27 => 'Intervention\\Image\\ImageServiceProvider',
      28 => 'Barryvdh\\DomPDF\\ServiceProvider',
      29 => 'Jackiedo\\DotenvEditor\\DotenvEditorServiceProvider',
      30 => 'Mews\\Purifier\\PurifierServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Arr' => 'Illuminate\\Support\\Arr',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'Date' => 'Illuminate\\Support\\Facades\\Date',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Http' => 'Illuminate\\Support\\Facades\\Http',
      'Js' => 'Illuminate\\Support\\Js',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'RateLimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'Str' => 'Illuminate\\Support\\Str',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Image' => 'Intervention\\Image\\Facades\\Image',
      'PDF' => 'Barryvdh\\DomPDF\\Facade',
      'DotenvEditor' => 'Jackiedo\\DotenvEditor\\Facades\\DotenvEditor',
      'Purifier' => 'Mews\\Purifier\\Facades\\Purifier',
      'Excel' => 'Maatwebsite\\Excel\\Facades\\Excel',
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'sanctum' => 
      array (
        'driver' => 'sanctum',
        'provider' => NULL,
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
        'throttle' => 60,
      ),
    ),
    'password_timeout' => 10800,
  ),
  'broadcasting' => 
  array (
    'default' => 'log',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => '',
        'secret' => '',
        'app_id' => '',
        'options' => 
        array (
          'cluster' => 'mt1',
          'useTLS' => true,
        ),
      ),
      'ably' => 
      array (
        'driver' => 'ably',
        'key' => NULL,
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
        'serialize' => false,
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
        'lock_connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => 'C:\\xampp\\htdocs\\pos\\storage\\framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'cache',
        'lock_connection' => 'default',
      ),
      'dynamodb' => 
      array (
        'driver' => 'dynamodb',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'table' => 'cache',
        'endpoint' => NULL,
      ),
      'octane' => 
      array (
        'driver' => 'octane',
      ),
    ),
    'prefix' => 'laravel_cache',
  ),
  'cors' => 
  array (
    'paths' => 
    array (
      0 => 'api/*',
      1 => 'sanctum/csrf-cookie',
    ),
    'allowed_methods' => 
    array (
      0 => '*',
    ),
    'allowed_origins' => 
    array (
      0 => '*',
    ),
    'allowed_origins_patterns' => 
    array (
    ),
    'allowed_headers' => 
    array (
      0 => '*',
    ),
    'exposed_headers' => 
    array (
    ),
    'max_age' => 0,
    'supports_credentials' => false,
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'url' => NULL,
        'database' => 'pos',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'pos',
        'username' => 'root',
        'password' => '',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'pos',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'pos',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'phpredis',
      'options' => 
      array (
        'cluster' => 'redis',
        'prefix' => 'laravel_database_',
      ),
      'default' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => '0',
      ),
      'cache' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => '1',
      ),
    ),
  ),
  'dompdf' => 
  array (
    'show_warnings' => false,
    'orientation' => 'portrait',
    'convert_entities' => true,
    'defines' => 
    array (
      'font_dir' => 'C:\\xampp\\htdocs\\pos\\storage\\fonts',
      'font_cache' => 'C:\\xampp\\htdocs\\pos\\storage\\fonts',
      'temp_dir' => 'C:\\Users\\asus\\AppData\\Local\\Temp',
      'chroot' => 'C:\\xampp\\htdocs\\pos',
      'enable_font_subsetting' => false,
      'pdf_backend' => 'CPDF',
      'default_media_type' => 'screen',
      'default_paper_size' => 'a4',
      'default_font' => 'serif',
      'dpi' => 96,
      'enable_php' => false,
      'enable_javascript' => true,
      'enable_remote' => true,
      'font_height_ratio' => 1.1,
      'enable_html5_parser' => false,
    ),
  ),
  'excel' => 
  array (
    'exports' => 
    array (
      'chunk_size' => 1000,
      'pre_calculate_formulas' => false,
      'strict_null_comparison' => false,
      'csv' => 
      array (
        'delimiter' => ',',
        'enclosure' => '"',
        'line_ending' => '
',
        'use_bom' => false,
        'include_separator_line' => false,
        'excel_compatibility' => false,
        'output_encoding' => '',
        'test_auto_detect' => true,
      ),
      'properties' => 
      array (
        'creator' => '',
        'lastModifiedBy' => '',
        'title' => '',
        'description' => '',
        'subject' => '',
        'keywords' => '',
        'category' => '',
        'manager' => '',
        'company' => '',
      ),
    ),
    'imports' => 
    array (
      'read_only' => true,
      'ignore_empty' => false,
      'heading_row' => 
      array (
        'formatter' => 'slug',
      ),
      'csv' => 
      array (
        'delimiter' => NULL,
        'enclosure' => '"',
        'escape_character' => '\\',
        'contiguous' => false,
        'input_encoding' => 'UTF-8',
      ),
      'properties' => 
      array (
        'creator' => '',
        'lastModifiedBy' => '',
        'title' => '',
        'description' => '',
        'subject' => '',
        'keywords' => '',
        'category' => '',
        'manager' => '',
        'company' => '',
      ),
    ),
    'extension_detector' => 
    array (
      'xlsx' => 'Xlsx',
      'xlsm' => 'Xlsx',
      'xltx' => 'Xlsx',
      'xltm' => 'Xlsx',
      'xls' => 'Xls',
      'xlt' => 'Xls',
      'ods' => 'Ods',
      'ots' => 'Ods',
      'slk' => 'Slk',
      'xml' => 'Xml',
      'gnumeric' => 'Gnumeric',
      'htm' => 'Html',
      'html' => 'Html',
      'csv' => 'Csv',
      'tsv' => 'Csv',
      'pdf' => 'Dompdf',
    ),
    'value_binder' => 
    array (
      'default' => 'Maatwebsite\\Excel\\DefaultValueBinder',
    ),
    'cache' => 
    array (
      'driver' => 'memory',
      'batch' => 
      array (
        'memory_limit' => 60000,
      ),
      'illuminate' => 
      array (
        'store' => NULL,
      ),
    ),
    'transactions' => 
    array (
      'handler' => 'db',
      'db' => 
      array (
        'connection' => NULL,
      ),
    ),
    'temporary_files' => 
    array (
      'local_path' => 'C:\\xampp\\htdocs\\pos\\storage\\framework/cache/laravel-excel',
      'remote_disk' => NULL,
      'remote_prefix' => NULL,
      'force_resync_remote' => NULL,
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\xampp\\htdocs\\pos\\storage\\app',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\xampp\\htdocs\\pos\\public',
        'url' => 'http://localhost/public',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'bucket' => '',
        'url' => NULL,
        'endpoint' => NULL,
        'use_path_style_endpoint' => false,
      ),
    ),
    'links' => 
    array (
      'C:\\xampp\\htdocs\\pos\\public\\storage' => 'C:\\xampp\\htdocs\\pos\\storage\\app/public',
    ),
  ),
  'global' => 
  array (
    'translation' => 
    array (
      'section' => 
      array (
        'main' => 
        array (
          'name' => 'Main Section',
          'values' => 
          array (
            'addon' => 'Addon',
            'addons' => 'Addons',
            'category' => 'Category',
            'dashboard' => 'Dashboard',
            'expense' => 'Expense',
            'search_here' => 'Search Here',
            'expense_list' => 'Expense List',
            'expense_category' => 'Expense Category',
            'add_new_category' => 'Add New Category',
            'add_service' => 'Add Service',
            'edit_service' => 'Edit Service',
            'add_service_type' => 'Add Service Type',
            'edit_service_type' => 'Edit Service Type',
            'services' => 'Services',
            'service' => 'Service',
            'service_list' => 'Service List',
            'service_type' => 'Service Type',
            'service_types' => 'Service Types',
            'service_price' => 'Service Price',
            'reports' => 'Reports',
            'daily_report' => 'Daily Report',
            'order_report' => 'Order Report',
            'sales_report' => 'Sales Report',
            'expense_report' => 'Expense Report',
            'tax_report' => 'Tax Report',
            'tax_percentage' => 'Tax Percentage',
            'logout' => 'Logout',
            'price' => 'Price',
            'is_active' => 'Is Active',
            'is_important' => 'Is Important',
            'active' => 'Active',
            'inactive' => 'InActive',
            'yes' => 'Yes',
            'no' => 'No',
            'actions' => 'Actions',
            'customer_name' => 'Customer Name',
            'customer_address' => 'Customer Address',
            'enter_customer_name' => 'Enter Customer Name',
            'enter_addon_name' => 'Enter Addon Name',
            'enter_category_name' => 'Enter Category Name',
            'choose_expense_category' => 'Choose Expense Category',
            'asset' => 'asset',
            'liability' => 'Liability',
            'enter_notes' => 'Enter Notes',
            'customer' => 'Customer',
            'customers' => 'Customers',
            'total_balance' => 'Total Balance',
            'total_payments' => 'Total Payments',
            'invoice_total' => 'Invoice Total',
            'total_invoices' => 'Total Invoices',
            'phone_number' => 'Phone Number',
            'tax_number' => 'Tax Number',
            'enter_phone_number' => 'Enter Phone Number',
            'enter_email' => 'Enter Email',
            'enter_tax_number' => 'Enter Tax Number',
            'enter_address' => 'Enter Address',
            'name' => 'Name',
            'address' => 'Address',
            'email' => 'Email',
            'password' => 'Password',
            'order' => 'Order',
            'orders' => 'Orders',
            'order_type' => 'Order Type',
            'order_status_screen' => 'Order Status Screen',
            'order_status' => 'Order Status',
            'transactions' => 'Transactions',
            'settings' => 'Settings',
            'tools' => 'Tools',
            'financial_year' => 'Financial Year',
            'staff_management' => 'Staff Management',
            'staff' => 'Staff',
            'add_staff' => 'Add Staff',
            'staff_name' => 'Staff Name',
            'enter_staff_name' => 'Enter Staff Name',
            'role' => 'Role',
            'billing' => 'Billing',
            'edit_staff' => 'Edit Staff',
            'store_name' => 'Store Name',
            'enter_store_name' => 'Ente Store Name',
            'store_details' => 'STORE DETAILS',
            'store_logo' => 'Store Logo',
            'master_settings' => 'Master Settings',
            'translations' => 'Translations',
            'edit_translations' => 'Edit Translations',
            'add_translations' => 'Add Translations',
            'view_orders' => 'View Orders',
            'description' => 'Description',
            'order_id' => 'Order ID ',
            'total' => 'Total',
            'type' => 'Type',
            'not_started' => 'Not Started',
            'charge' => 'Charge',
            'walk_in_customer' => 'Walk In Customer',
            'payment_status' => 'Payment Status',
            'paid' => 'PAID',
            'unpaid' => 'UNPAID',
            'quantity' => 'Quantity',
            'color' => 'Color',
            'sub_total' => 'Sub Total',
            'discount' => 'Discount',
            'tax_amount' => 'Tax Amount',
            'gross_total' => 'Gross Total',
            'tax' => 'Tax',
            'image' => 'Image',
            'images' => 'Images',
            'rate' => 'Rate',
            'qty' => 'QTY',
            'vat' => 'VAT',
            'invoice_to' => 'Invoice To',
            'created_at' => 'Created At',
            'received_amount' => 'Received Amount',
            'payable' => 'Payable',
            'remaining' => 'Remaining',
            'order_details' => 'Order Details',
            'order_date' => 'Order Date',
            'pending_order' => 'Pending Order',
            'all_orders' => 'All Orders',
            'pending' => 'Pending',
            'processing_order' => 'Processing Order',
            'processing' => 'Processing',
            'ready_to_deliver' => 'Ready To Deliver',
            'delivered' => 'Delivered',
            'returned' => 'Returned',
            'delivered_orders' => 'Delivered Orders',
            'todays_delivery' => 'Today\'s Delivery',
            'overview' => 'Overview',
            'service_name' => 'Service Name',
            'print_invoice' => 'Print Invoice',
            'enter_amount' => 'Enter Amount',
            'enter_service_name' => 'Enter Service Name',
            'clear_all' => 'Clear All',
            'save_continue' => 'Save and Continue',
            'save_print' => 'Save and Print',
            'add_expense_category' => 'Add Expense Category',
            'add_expense' => 'Add Expense',
            'edit_expense' => 'Edit Expense',
            'add_financial_year' => 'Add Financial Year',
            'edit_financial_year' => 'Edit Financial Year',
            'error' => 'Error',
            'financial_year_not_created' => 'Financial year not created',
            'financial_year_line_1' => 'It looks like you have not yet created a financial year or has not set it as active.',
            'financial_year_line_2' => 'Create a financial year from the tools section',
            'financial_year_line_3' => 'Set the created financial year in master settings',
            'edit_expense_category' => 'Edit Expense Category',
            'date' => 'Date',
            'note' => 'Note',
            'amount' => 'Amount',
            'towards' => 'Towards',
            'tax_included' => 'Tax Included',
            'payment_mode' => 'Payment Mode',
            'created_by' => 'Created By',
            'country_code' => 'Country Code',
            'delivered_sms_only' => 'Delivered Status SMS only',
          ),
        ),
        'crud' => 
        array (
          'name' => 'Secondary Section',
          'values' => 
          array (
            'add_new_order' => 'Add New Order',
            'add_order' => 'Add Order',
            'add_customer' => 'Add Customer',
            'add_new_customer' => 'Add New Customer',
            'export_excel' => 'Export Excel',
            'payment_receipt' => 'Payment Receipt',
            'payment_receipts' => 'Payment Receipts',
            'add_new_expense' => 'Add New Expense',
            'add_new_addon' => 'Add New Addon',
            'add_new_service' => 'Add New Service',
            'add_new_service_type' => 'Add New Service Type',
            'add_addon' => 'Add Addon',
            'order_info' => 'Order Info',
            'order_amount' => 'Order Amount',
            'status' => 'Status',
            'category_name' => 'Category Name',
            'category_type' => 'Category Type',
            'payment' => 'Payment',
            'delivery_date' => 'Delivery Date',
            'total_amount' => 'Total Amount',
            'paid_amount' => 'Paid Amount',
            'expense_amount' => 'Expense Amount',
            'add_payment' => 'Add Payment',
            'fully_paid' => 'Fully Paid',
            'view' => 'View',
            'payment_details' => 'Payment Details',
            'balance' => 'Balance',
            'payment_type' => 'Payment Type',
            'choose_payment_mode' => 'Choose Payment Mode',
            'choose_payment_type' => 'Choose Payment Type',
            'choose_expense_category' => 'Choose Expense Category',
            'cash' => 'Cash',
            'upi' => 'UPI',
            'card' => 'Card',
            'cheque' => 'Cheque',
            'bank_transfer' => 'Bank Transfer',
            'notes_remarks' => 'Notes/Remarks',
            'notes' => 'Notes',
            'save' => 'Save',
            'cancel' => 'Cancel',
            'submit' => 'Submit',
            'close' => 'Close',
            'back' => 'Back',
            'service_addons' => 'Service Addons',
            'add' => 'Add',
            'edit' => 'Edit',
            'delete' => 'Delete',
            'select_a_customer' => 'Select A Customer',
            'select_service_type' => 'Select A Service Type',
            'edit_customer' => 'Edit Customer',
            'particulars' => 'Particulars',
            'value' => 'Value',
            'new_orders' => 'New Orders',
            'no_of_orders_delivered' => 'No. of Orders Delivered',
            'total_sales' => 'Total Sales',
            'sales' => 'Sales',
            'total_orders' => 'Total Orders',
            'total_payment' => 'Total Payment',
            'total_expense' => 'Total Expense',
            'total_expense_amount' => 'Total Expense Amount',
            'total_order_amount' => 'Total Order Amount',
            'total_tax_amount' => 'Total Tax Amount',
            'download_report' => 'Download Report',
            'print_report' => 'Print Report',
            'total_expenses' => 'Total Expenses',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'filter' => 'Filter',
            'before_tax' => 'Before Tax',
            'addon_name' => 'Addon Name',
            'addon_price' => 'Addon Price',
            'select_icon' => 'Select Icon',
            'service_type_name' => 'Service Type Name',
            'enter_service_type_name' => 'Enter Service Type Name',
            'add_new_financial_year' => 'Add New Financial Year',
            'year' => 'Year',
            'manage_services' => 'Manage Services',
            'manage_customers' => 'Manage Customers',
            'contact' => 'Contact',
          ),
        ),
        'settings' => 
        array (
          'name' => 'Setting Section',
          'values' => 
          array (
            'application_details' => 'Application Details',
            'application_name' => 'Application Name',
            'app_logo' => 'App Logo',
            'favicon' => 'Fav Icon',
            'finance_settings' => 'Finance Settings',
            'currency_symbol' => 'Currency Symbol',
            'firm_address' => 'Firm Address',
            'country' => 'Country',
            'state' => 'State',
            'city' => 'City',
            'district' => 'District',
            'zip_code' => 'Zip Code',
            'store_email' => 'Store Email',
            'store_tax_number' => 'Store Tax Number',
            'other_settings' => 'Other Settings',
            'printer_pos' => 'Printer POS',
            'pos' => 'POS',
            'thermal' => 'Thermal',
            'thermal_80mm' => 'Thermal 80mm',
            'mail_settings' => 'Mail Settings',
            'select_financial_year' => 'Select a financial year',
            'sms_settings' => 'SMS Settings',
            'twilio_sms_settings' => 'Twilio SMS Settings',
            'account_sid' => 'Account SID',
            'auth_token' => 'Auth Token',
            'twilio_number' => 'Twilio Number',
            'sms_enabled' => 'SMS Enabled',
            'sms_format' => 'SMS Format',
            'create_order' => 'Create Order',
            'status_change' => 'Status Change',
          ),
        ),
        'validation' => 
        array (
          'name' => 'Validation Section',
          'values' => 
          array (
            'error_required' => 'must not be empty',
            'error_email' => 'must be a valid email',
            'error_numeric' => 'must be a number',
            'error_email_unique' => 'This email already exists',
          ),
        ),
        'file_tools' => 
        array (
          'name' => 'File Upload',
          'values' => 
          array (
            'file_manager' => 'File Manager',
            'file_tools' => 'File Tools',
            'upload_image' => 'Upload Image',
            'important' => 'Important!',
            'upload_description' => 'Upload 1:1 <b>".png"</b> images or icons only & the image name should not contain any spaces.',
          ),
        ),
        'ledger' => 
        array (
          'name' => 'Ledger',
          'values' => 
          array (
            'customer_ledger' => 'Customer Ledger',
            'view_customer' => 'View Customer',
            'customer_details' => 'Customer Details',
            'ledger' => 'Ledger',
            'ledger_report' => 'Ledger Report',
            'debits' => 'Debits',
            'credits' => 'Credits',
            'opening_balance' => 'Opening Balance',
            'particulars' => 'Particulars',
            'voucher_no' => 'Voucher No',
            'debit' => 'Debit',
            'credit' => 'Credit',
            'from' => 'From',
            'view_ledger' => 'View Ledger',
            'fetch' => 'Fetch',
            'select_customer' => 'Select Customer',
          ),
        ),
      ),
    ),
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 65536,
      'threads' => 1,
      'time' => 4,
    ),
  ),
  'image' => 
  array (
    'driver' => 'gd',
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'deprecations' => NULL,
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'single',
        ),
        'ignore_exceptions' => false,
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => 'C:\\xampp\\htdocs\\pos\\storage\\logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => 'C:\\xampp\\htdocs\\pos\\storage\\logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'debug',
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
      'null' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\NullHandler',
      ),
      'emergency' => 
      array (
        'path' => 'C:\\xampp\\htdocs\\pos\\storage\\logs/laravel.log',
      ),
    ),
  ),
  'mail' => 
  array (
    'default' => 'smtp',
    'mailers' => 
    array (
      'smtp' => 
      array (
        'transport' => 'smtp',
        'host' => 'mailpit',
        'port' => '1025',
        'encryption' => NULL,
        'username' => NULL,
        'password' => NULL,
        'timeout' => NULL,
        'auth_mode' => NULL,
      ),
      'ses' => 
      array (
        'transport' => 'ses',
      ),
      'mailgun' => 
      array (
        'transport' => 'mailgun',
      ),
      'postmark' => 
      array (
        'transport' => 'postmark',
      ),
      'sendmail' => 
      array (
        'transport' => 'sendmail',
        'path' => '/usr/sbin/sendmail -t -i',
      ),
      'log' => 
      array (
        'transport' => 'log',
        'channel' => NULL,
      ),
      'array' => 
      array (
        'transport' => 'array',
      ),
      'failover' => 
      array (
        'transport' => 'failover',
        'mailers' => 
        array (
          0 => 'smtp',
          1 => 'log',
        ),
      ),
    ),
    'from' => 
    array (
      'address' => 'hello@example.com',
      'name' => 'Laravel',
    ),
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => 'C:\\xampp\\htdocs\\pos\\resources\\views/vendor/mail',
      ),
    ),
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
        'after_commit' => false,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => 0,
        'after_commit' => false,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => '',
        'secret' => '',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'default',
        'suffix' => NULL,
        'region' => 'us-east-1',
        'after_commit' => false,
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
        'after_commit' => false,
      ),
    ),
    'failed' => 
    array (
      'driver' => 'database-uuids',
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'sanctum' => 
  array (
    'stateful' => 
    array (
      0 => 'localhost',
      1 => 'localhost:3000',
      2 => '127.0.0.1',
      3 => '127.0.0.1:8000',
      4 => '::1',
      5 => 'localhost',
    ),
    'guard' => 
    array (
      0 => 'web',
    ),
    'expiration' => NULL,
    'middleware' => 
    array (
      'verify_csrf_token' => 'App\\Http\\Middleware\\VerifyCsrfToken',
      'encrypt_cookies' => 'App\\Http\\Middleware\\EncryptCookies',
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
      'endpoint' => 'api.mailgun.net',
    ),
    'postmark' => 
    array (
      'token' => NULL,
    ),
    'ses' => 
    array (
      'key' => '',
      'secret' => '',
      'region' => 'us-east-1',
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => '120',
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => 'C:\\xampp\\htdocs\\pos\\storage\\framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'laravel_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => NULL,
    'http_only' => true,
    'same_site' => 'lax',
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pos\\resources\\views',
    ),
    'compiled' => 'C:\\xampp\\htdocs\\pos\\storage\\framework\\views',
  ),
  'flare' => 
  array (
    'key' => NULL,
    'reporting' => 
    array (
      'anonymize_ips' => true,
      'collect_git_information' => false,
      'report_queries' => true,
      'maximum_number_of_collected_queries' => 200,
      'report_query_bindings' => true,
      'report_view_data' => true,
      'grouping_type' => NULL,
      'report_logs' => true,
      'maximum_number_of_collected_logs' => 200,
      'censor_request_body_fields' => 
      array (
        0 => 'password',
      ),
    ),
    'send_logs_as_events' => true,
    'censor_request_body_fields' => 
    array (
      0 => 'password',
    ),
  ),
  'ignition' => 
  array (
    'editor' => 'phpstorm',
    'theme' => 'light',
    'enable_share_button' => true,
    'register_commands' => false,
    'ignored_solution_providers' => 
    array (
      0 => 'Facade\\Ignition\\SolutionProviders\\MissingPackageSolutionProvider',
    ),
    'enable_runnable_solutions' => NULL,
    'remote_sites_path' => '',
    'local_sites_path' => '',
    'housekeeping_endpoint_prefix' => '_ignition',
  ),
  'livewire' => 
  array (
    'class_namespace' => 'App\\Http\\Livewire',
    'view_path' => 'C:\\xampp\\htdocs\\pos\\resources\\views/livewire',
    'layout' => 'layouts.app',
    'asset_url' => NULL,
    'app_url' => NULL,
    'middleware_group' => 'web',
    'temporary_file_upload' => 
    array (
      'disk' => NULL,
      'rules' => NULL,
      'directory' => NULL,
      'middleware' => NULL,
      'preview_mimes' => 
      array (
        0 => 'png',
        1 => 'gif',
        2 => 'bmp',
        3 => 'svg',
        4 => 'wav',
        5 => 'mp4',
        6 => 'mov',
        7 => 'avi',
        8 => 'wmv',
        9 => 'mp3',
        10 => 'm4a',
        11 => 'jpg',
        12 => 'jpeg',
        13 => 'mpga',
        14 => 'webp',
        15 => 'wma',
      ),
      'max_upload_time' => 5,
    ),
    'manifest_path' => NULL,
    'back_button_cache' => false,
    'render_on_redirect' => false,
  ),
  'purifier' => 
  array (
    'encoding' => 'UTF-8',
    'finalize' => true,
    'ignoreNonStrings' => false,
    'cachePath' => 'C:\\xampp\\htdocs\\pos\\storage\\app/purifier',
    'cacheFileMode' => 493,
    'settings' => 
    array (
      'default' => 
      array (
        'HTML.Doctype' => 'HTML 4.01 Transitional',
        'HTML.Allowed' => 'div,b,strong,i,em,u,a[href|title],ul,ol,li,p[style],br,span[style],img[width|height|alt|src]',
        'CSS.AllowedProperties' => 'font,font-size,font-weight,font-style,font-family,text-decoration,padding-left,color,background-color,text-align',
        'AutoFormat.AutoParagraph' => true,
        'AutoFormat.RemoveEmpty' => true,
      ),
      'test' => 
      array (
        'Attr.EnableID' => 'true',
      ),
      'youtube' => 
      array (
        'HTML.SafeIframe' => 'true',
        'URI.SafeIframeRegexp' => '%^(http://|https://|//)(www.youtube.com/embed/|player.vimeo.com/video/)%',
      ),
      'custom_definition' => 
      array (
        'id' => 'html5-definitions',
        'rev' => 1,
        'debug' => false,
        'elements' => 
        array (
          0 => 
          array (
            0 => 'section',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          1 => 
          array (
            0 => 'nav',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          2 => 
          array (
            0 => 'article',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          3 => 
          array (
            0 => 'aside',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          4 => 
          array (
            0 => 'header',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          5 => 
          array (
            0 => 'footer',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          6 => 
          array (
            0 => 'address',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          7 => 
          array (
            0 => 'hgroup',
            1 => 'Block',
            2 => 'Required: h1 | h2 | h3 | h4 | h5 | h6',
            3 => 'Common',
          ),
          8 => 
          array (
            0 => 'figure',
            1 => 'Block',
            2 => 'Optional: (figcaption, Flow) | (Flow, figcaption) | Flow',
            3 => 'Common',
          ),
          9 => 
          array (
            0 => 'figcaption',
            1 => 'Inline',
            2 => 'Flow',
            3 => 'Common',
          ),
          10 => 
          array (
            0 => 'video',
            1 => 'Block',
            2 => 'Optional: (source, Flow) | (Flow, source) | Flow',
            3 => 'Common',
            4 => 
            array (
              'src' => 'URI',
              'type' => 'Text',
              'width' => 'Length',
              'height' => 'Length',
              'poster' => 'URI',
              'preload' => 'Enum#auto,metadata,none',
              'controls' => 'Bool',
            ),
          ),
          11 => 
          array (
            0 => 'source',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
            4 => 
            array (
              'src' => 'URI',
              'type' => 'Text',
            ),
          ),
          12 => 
          array (
            0 => 's',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          13 => 
          array (
            0 => 'var',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          14 => 
          array (
            0 => 'sub',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          15 => 
          array (
            0 => 'sup',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          16 => 
          array (
            0 => 'mark',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          17 => 
          array (
            0 => 'wbr',
            1 => 'Inline',
            2 => 'Empty',
            3 => 'Core',
          ),
          18 => 
          array (
            0 => 'ins',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
            4 => 
            array (
              'cite' => 'URI',
              'datetime' => 'CDATA',
            ),
          ),
          19 => 
          array (
            0 => 'del',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
            4 => 
            array (
              'cite' => 'URI',
              'datetime' => 'CDATA',
            ),
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            0 => 'iframe',
            1 => 'allowfullscreen',
            2 => 'Bool',
          ),
          1 => 
          array (
            0 => 'table',
            1 => 'height',
            2 => 'Text',
          ),
          2 => 
          array (
            0 => 'td',
            1 => 'border',
            2 => 'Text',
          ),
          3 => 
          array (
            0 => 'th',
            1 => 'border',
            2 => 'Text',
          ),
          4 => 
          array (
            0 => 'tr',
            1 => 'width',
            2 => 'Text',
          ),
          5 => 
          array (
            0 => 'tr',
            1 => 'height',
            2 => 'Text',
          ),
          6 => 
          array (
            0 => 'tr',
            1 => 'border',
            2 => 'Text',
          ),
        ),
      ),
      'custom_attributes' => 
      array (
        0 => 
        array (
          0 => 'a',
          1 => 'target',
          2 => 'Enum#_blank,_self,_target,_top',
        ),
      ),
      'custom_elements' => 
      array (
        0 => 
        array (
          0 => 'u',
          1 => 'Inline',
          2 => 'Inline',
          3 => 'Common',
        ),
      ),
    ),
  ),
  'dotenv-editor' => 
  array (
    'autoBackup' => true,
    'backupPath' => 'C:\\xampp\\htdocs\\pos\\storage/dotenv-editor/backups/',
    'alwaysCreateBackupFolder' => false,
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'alias' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);
