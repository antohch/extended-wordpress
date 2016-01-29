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
define('DB_NAME', 'extended');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=W:O7#s=zLX~d>!>H15(42-1$=Ny2z3o;_&H0Y!%:1<c}NJl-vf-*(e[MV[.+jyR');
define('SECURE_AUTH_KEY',  '+sK;=}O[wQ06-]&__F8&1TYUM@p*]0(yx|{vUW-<lr3Jbc}QbU-I7<4X^v*2Elyn');
define('LOGGED_IN_KEY',    '.sgwj=d5Ck;3KY4>wsMZ>)o}tq$EZ|Oywl#*xH=>%}1cEp<PU=-:NC*`MwXj/(+v');
define('NONCE_KEY',        'Y-EcFW0)h_@(Vj1ftc0RhpZAHu7/N`sBwn)a3n%{Du$mQZ ,x,gJ[4&O64Bc8B97');
define('AUTH_SALT',        '-~zdtI1,w`p|ls3@X!EaC!766; +WzM810Y-EeRDFZ^.|;9}u8Jd8)!ifp9{$zJH');
define('SECURE_AUTH_SALT', '|I$`[X<&!yoWK ;hOi2YC=w^ygS-bEf+4VYm`##/JZx#L>e /Qh?.Vd-7+=-fBmV');
define('LOGGED_IN_SALT',   '*LWYBh IzN$,UymNm(z@-<SiW+s3c{V1imyaw^@qL@9F6bud+*&G,x/i8:BA-5I@');
define('NONCE_SALT',       'I!!Gr~YOW2+U|px~M;B&/gaoU7u<OYw/C,|CE{ZcbMOcI. -bKLe@b6eup-pb/T:');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'ext_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
