<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //

$db_user = 'root';
$db_password = 'root';
$db_name = 'ZSgmeuyOEb';
$db_host = 'localhost';

if ($_SERVER['HTTP_HOST'] !== 'PC-Assembly.local') {
	$db_user = 'ZSgmeuyOEb';
	$db_password = 'Ie9kq01Od7';	
	$db_host = 'remotemysql.com';
}

/** Имя базы данных для WordPress */
define( 'DB_NAME', $db_name );

/** Имя пользователя MySQL */
define( 'DB_USER', $db_user );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', $db_password );

/** Имя сервера MySQL */
define( 'DB_HOST', $db_host );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'впишите сюда уникальную фразу' );
define( 'SECURE_AUTH_KEY',  'впишите сюда уникальную фразу' );
define( 'LOGGED_IN_KEY',    'впишите сюда уникальную фразу' );
define( 'NONCE_KEY',        'впишите сюда уникальную фразу' );
define( 'AUTH_SALT',        'впишите сюда уникальную фразу' );
define( 'SECURE_AUTH_SALT', 'впишите сюда уникальную фразу' );
define( 'LOGGED_IN_SALT',   'впишите сюда уникальную фразу' );
define( 'NONCE_SALT',       'впишите сюда уникальную фразу' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
// define( 'WP_DEBUG', false );

define( 'WP_DEBUG', true);
define( 'WP_DEBUG_LOG', true);
define( 'WP_DEBUG_DISPLAY', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
