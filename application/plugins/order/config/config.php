<?php

$config = [];

// db
$config['$root$']['db']['table']['order_order'] = '___db.table.prefix___order';

// количество записей на страницы
$config['per_page'] = 30;

$config['validate'] = [
    'title' => [
        'min' => 2,
        'max' => 250
    ],
    'text' => [
        'min' => 3,
        'max' => 10000
    ]
];


// роутинг
$config['$root$']['router']['page']['order'] = 'PluginOrder_ActionOrder';
$config['$root$']['router']['page']['orders'] = 'PluginOrder_ActionOrders';

return $config;