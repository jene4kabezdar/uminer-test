<?php
/**
 * Настройки для локального сервера.
 * Для использования - переименовать файл в config.local.php
 * Именно в этом файле необходимо переопределять все настройки конфига
 */

/**
 * Настройка базы данных
 */
$config['db']['params']['host'] = 'localhost';
$config['db']['params']['port'] = '3306';
$config['db']['params']['user'] = 'test_user';
$config['db']['params']['pass'] = 'password';
$config['db']['params']['type']   = 'mysqli';
$config['db']['params']['dbname'] = 'test';
$config['db']['table']['prefix'] = 'prefix_';

/**
 * Настройки кеширования
 */
$config['sys']['cache']['use'] = false;               // использовать кеширование или нет
$config['sys']['cache']['type'] = 'file';             // тип кеширования: file, xcache и memory. memory использует мемкеш, xcache - использует XCache

/**
 * Параметры обработки css/js-файлов
 */
$config['module']['asset']['force_https'] = true; // При использовании https принудительно заменять http на https у путях до css/js
$config['module']['asset']['css']['merge'] = true; // указывает на необходимость слияния css файлов
$config['module']['asset']['js']['merge'] = true; // указывает на необходимость слияния js файлов

/**
 * Общие настройки
 */
// Делаем сайт доступным только для авторизованных пользователей
$config['general']['close'] = true; // использовать закрытый режим работы сайта, сайт будет доступен только авторизованным пользователям

/**
 * Настройки роутинга
 */
// Глобальные настройки роутинга
$config['router']['config']['default']['action'] = 'orders'; // Устанавливаем страницу orders по умолчанию

return $config;