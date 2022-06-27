<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
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
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'cs75930_sputnik' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'cs75930_sputnik' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'db4eQE8h' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_31zzG.B<FGAf/jpOf**1_X{]@G7ywz+,n)L^7wfhGs-en;bo%1_c/NZ)7/0S)[0' );
define( 'SECURE_AUTH_KEY',  'Pfb*!2$D`,qw$VSsH>Zdl31[k%f1D54e!* <2!NhhF;1|1Nhxaer1c!GF,/Bh7JK' );
define( 'LOGGED_IN_KEY',    '5S`5trJv18+!5$04F%_yF(QkpVH5lhr66_diCYdVa2Gnp?Vq*=S7>[+I|WpV^mKD' );
define( 'NONCE_KEY',        'eZsCV9drAN~nbEEyh<$sVwzDJ)CAD/)oIpEzzqt*7BY.gJPTA6;[2qpg.jaXl;V6' );
define( 'AUTH_SALT',        '6eq`ZZV?&A2fD2$uF<asc(+k@z=wxN,-iLNo&?G:(M%D=-bIU6481{{Td>.p|Fdk' );
define( 'SECURE_AUTH_SALT', '.sFl}<yN:WbTR`SZ5xzH?EL-f#RC>xwo;.Y`(%wo!WotXDvt$eZr!c~4D0njV8m.' );
define( 'LOGGED_IN_SALT',   '1-`eJ=N0BlS?TMd|ZzcbI%|x<DjHJ2-r/u%bp(HO5uaR6`r~OH|`@?AA?Vat8PHH' );
define( 'NONCE_SALT',       'MXMRetL#Su1+)bknREI+q}H_6v?35uue^]}x}MK3xqpO13gD]L3{@t;#z^Z(B2Ng' );

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
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';