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
define( 'DB_NAME', 'lesson' );

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
define( 'AUTH_KEY',         '}$p*7*6Pg+Z?(PEKWLiC==@BTA9/gXhc):nOG/W:JEx$x7QsmNnRHtcq_zG5$F$Q' );
define( 'SECURE_AUTH_KEY',  ']Ex]/]KT{/jq%6pREBJY&q|2GAn*qf n*lQFeO93e#]JCu$_H gGv(;[;--~I,W]' );
define( 'LOGGED_IN_KEY',    '4|Y%SCTm!u&>Z|4^-(*R,Qet;RJ*3&SNFD-9rQtTkMa|y?-F5mk+Dm>[5-HismYy' );
define( 'NONCE_KEY',        '5c^B+wc@01D-xuzc`kH<MWTL_ygG|?Ef&3&8ym:s;!KZHdwz^5che#`8h/2l:-_a' );
define( 'AUTH_SALT',        'cu.<@AY&W6fKI3i$~F4vuT`M$FWr`aX1; >SomEAz_x8=),_Xv5b;IfC4:$ziu=k' );
define( 'SECURE_AUTH_SALT', '@u5;P]jLuMpJ7 iu6;3z<KGQeu}T!c:I!1iy *XSMmx`L<,eE#~UTn<OF>>-* )-' );
define( 'LOGGED_IN_SALT',   'R)T9?qLv;fr0`z0-pc8D1_JcaM*)-+e~TQS~g1;!a38QCbQ2]$@R4mvP@+6U>+D[' );
define( 'NONCE_SALT',       'ixG5-|HT#a.:V=LI1s?q:Q{EseVc8x3UyzAP1U?^/[LOa<izjzKioGuE2O18{`vv' );

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
