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
define( 'DB_NAME', 'sea' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'admin_1' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '123_alt_123' );

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
define( 'AUTH_KEY',         '$MfqQgUVY6RI;Q;ok]oIJz;5.SeG F<z3nzEs08.$P|f{R+Ov{O=&9ppy3;@I#a9' );
define( 'SECURE_AUTH_KEY',  'W<_,hq]2/O<WGZ0r+@`9]LjNik-W@#G#s2f*xaE=Wx&)fZl,cRUxaD;L*hPsifIO' );
define( 'LOGGED_IN_KEY',    'a{2#G.^?a$Y|,y<}jHnD7(}g9UCh]J5~*6||u@D>Ngn&{7@`G@Uz-rr0,|GxEk^S' );
define( 'NONCE_KEY',        'v:Q~M?xPRx~Uh3Z.z;tVlg^og=<QwKq2_cFg:JXH.j|J+$BZBIESWE*$a7N47*hf' );
define( 'AUTH_SALT',        '}_WR6vq<I+j;x;W[MD4s~G4u=$u5kG}xeLK0@`KI2,u=eKHpP5m8_2&SN9_ChrXQ' );
define( 'SECURE_AUTH_SALT', 'f()z/VfEWyI_Lf6~M/3R;GKVB@BR]>}D$+#9/4NtsVyC^X1J67RTkRdsf:(yPlC@' );
define( 'LOGGED_IN_SALT',   'r#|Xl U2IMTfT//0DHr]~9=6}/sdllT x WRz*SO0zV[9n0+RH txgyc:6>iYb H' );
define( 'NONCE_SALT',       'Lq 5:b9]o28e4tsIB=O=P/w7:vxRsb@S(B]okT`;p(|ek2r1lA@?ZrDtQ&A9`ekQ' );

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
