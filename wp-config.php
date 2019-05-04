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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'my-wine' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '^D6IX|)0OURy=/fmlzYm,}qaAs2y/N7sc9^O^uDyJF[5kaMie&.sx#5q9cOq?@Y/' );
define( 'SECURE_AUTH_KEY',  'k^xvDJj0p0CVXr=&5;0U[W7@oYdAl.$zuqvT5Jhc4+xBlZmgeB<8g84w69%ngrhq' );
define( 'LOGGED_IN_KEY',    'pgA,O!gT&quezW_hf>VVIE2X}eE`fN7*[~#A}xA/hl:vm|2D$MD+ZEd;=5ka*ev0' );
define( 'NONCE_KEY',        'i`C{&I2 mVrI%pr:^g.zzhI3K3H.d/L;>fu])F|Hff^R-8KxFTn;[HPR;KWxs{FA' );
define( 'AUTH_SALT',        'W@0La?!ITKx7qWPOrw(&tLK1P,<V3|Q.@ESu@z`rb.M|ca&^|6YMtV5lA-YI:k7f' );
define( 'SECURE_AUTH_SALT', 'UA|AbG{cZ$@MRz]Y=YP^m?$w_POf<[+.T!}QE7T7EJ$X,>I,_BGsjPuQ+Py3BwHj' );
define( 'LOGGED_IN_SALT',   'xg9/@OgWO+(>+b1kn{YrYO,q5H<qBkyV}#rPXv7>Dy}OjM~zMdvU<IlPemGr>Tn!' );
define( 'NONCE_SALT',       ';d.dr,`O9bI+N}DmF8_>]b5)G)kPBHBpJIOs6[Mv*!8yjT_ZE}__:N!Fe96nza8>' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wi_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
