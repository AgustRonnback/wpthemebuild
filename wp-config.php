<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsens installationsrutin, utan kan kopiera
 * denna fil direkt till "wp-config.php" och fylla i alla värden.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define( 'DB_NAME', 'db_ato' );

/** MySQL-databasens användarnamn */
define( 'DB_USER', 'ato' );

/** MySQL-databasens lösenord */
define( 'DB_PASSWORD', 'ato' );

/** MySQL-server */
define( 'DB_HOST', 'localhost' );

/** Teckenkodning för tabellerna i databasen. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')$R_vyw):<*{zEUiO.e8x?<+{-gI2vT>Vm?c]%CoG/2=P^:YO%Hm}xr>ED>T3k]G' );
define( 'SECURE_AUTH_KEY',  '?mp)RKE5ol?|2@Lk|M[&sg(v3%Od`cHW/CM)HJ@E_dbdzE,+KOl#L1P_Hl[br}K#' );
define( 'LOGGED_IN_KEY',    'vGPH-bg9QOA3N+Yh)CkYkVaot6^i2QKrN62*q2Xsz, GugX>1-Yyr&t|ynj&m8G+' );
define( 'NONCE_KEY',        '6wn[XoP?!@.ayoG#4foQDQPp0.i=uhO?dcI]W5}Df[exM[rkpTCP_pt:}GC#Nq!J' );
define( 'AUTH_SALT',        'l%BI=WvX+_pfk<aEo4l21}!(|U)AUq!7kdSy 8`RT[0H/;e`ov(_2wZx,lIGRlvl' );
define( 'SECURE_AUTH_SALT', 'a7PS],LRt}FaMOkVYG!<%wTT}6Vh9PY=&y0W|^1^5ufS`{Lz.P`3bYI{UzniYF)M' );
define( 'LOGGED_IN_SALT',   ':Y#:4TL6#TI`C3euKp,2Li*dsFV`11/Hd@%c:prI[+M$GW2.pUHS2LZ-oV!KB*1@' );
define( 'NONCE_SALT',       '[Cc9Rta>WNytuUTdbif$Zm1ICZd83|;vp3`@Pwc0ph(tR[ yjLJ.&S9t,!v(O<fc' );

/**#@-*/

/**
 * Tabellprefix för WordPress-databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Använd endast siffror, bokstäver och understreck!
 */
$table_prefix = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det rekommenderas att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera här och börja publicera! */

/** Absolut sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');