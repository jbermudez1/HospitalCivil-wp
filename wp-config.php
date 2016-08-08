<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'hospitalcivil');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'ce{  LhHV2QUGWc3?V.&ANf7pSJQeO+8e8a~d[-K(-_uAB|cb/:&tC&q;<:PbqV`');
define('SECURE_AUTH_KEY', 'p4mRt7>dTEI7 rNG^DDumM~;&2:4hrzd$DSTG2<I|Ud9xXje?vG]xwck]98~Jd~~');
define('LOGGED_IN_KEY', 'kOeq0>QHjwph-Ndu<# bd?aV%uJw&2BohNkL/@VIVl|6EZGm&rnzk|wA4O`mztRp');
define('NONCE_KEY', '$0iiPnyV^+3&!G[Rh6>[I<j2l<0{Qr=k4pp]Y=6bs:rg6T@x/;H:nqb0[3oe4TKF');
define('AUTH_SALT', '26+7a}4(+RYS>HPy0DN$,K8|P$.sQY|P&.5c9QOC)hnEc&<TTr .~/)3BrF?R%bN');
define('SECURE_AUTH_SALT', 'jp7ey)%E-C7s-`~5zZ o|=pjl1<7ok% cd3&PO)*`-!xbCGmyJ|h_U~!|_d3q5*Q');
define('LOGGED_IN_SALT', 'YG@5s[bWpBs_07O}dj*-A`|}{d b|A46Og2v(yy?Owb%emmB7#.]xYz9Jgr|$T-v');
define('NONCE_SALT', '9][^dcC:_ ^|sa6P(4A^7<WN.p8m:~|!|D(QKLfv4P^&1>9-ES-+>-TtA[a$;frm');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

