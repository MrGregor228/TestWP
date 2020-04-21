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
define( 'DB_NAME', 'testwp_db' );

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
define( 'AUTH_KEY',         'bV`$/Iu|EW%qPd=1=v-lOLa.}/e#u}2NO9sVS97SJ?p.WVo5J`iQ;Pk?f@Wi)02q' );
define( 'SECURE_AUTH_KEY',  'd{iFY;T.|wX%bQ<Dsw2jZ|oI^0)<JMLrl!e!;=dWf5#Hl$A~BFzh2XAu,U rdD@4' );
define( 'LOGGED_IN_KEY',    'u3E2*t@*7(8NW#d&5=BB,A=qHpkD_rvMhj5;u@:h*eRy?sHWvT@BpOpf}kNoRr^b' );
define( 'NONCE_KEY',        '5SW=9LTBzx] c7jDvUyh=8h0BKFK6J0g/cYs2D!RZuHs_o`aovV`&VerM3@fiE6/' );
define( 'AUTH_SALT',        'rRD7$ji3w7*2_<3;mss6ccrc{=Q.S(nm(V6[W*U<)1R!=i6Znk+-pk2(vB@fVJR$' );
define( 'SECURE_AUTH_SALT', 'd|66-GNCWLcDZ?]}u_YVdh~)y|u$a]jo#3R892T4sTnC/Z7nVSrC>OS]C^o}NJKK' );
define( 'LOGGED_IN_SALT',   'qhl%I/p+PQiy2~qEDr(&X7/Ys15b[>[m,y19xc@}A`B ilL=tY1q@IJb^[rz{DU@' );
define( 'NONCE_SALT',       'l6,zaMA0C0k?d[5`<ShG;y.`yCrp0J 2!W0$;og$G(ML4m1B^S09|_L]A2kOv2}t' );

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
