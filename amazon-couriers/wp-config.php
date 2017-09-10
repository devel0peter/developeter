<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ss_dbname_6lk76jc1dh');

/** MySQL database username */
define('DB_USER', 'eRBSk2i5egZ7yWr');

/** MySQL database password */
define('DB_PASSWORD', 'Fc0inT4cQldDZ5mz');

/** MySQL hostname */
define('DB_HOST', 'developetercom.ipagemysql.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'jF/^T%XmmvYE|$RFHI!MFuml(DTz-hYN(nO-tABBT(!rJwUDYnQhY@EEGBJT%FKhSs[;ID(oPV-b_RcF[mPkl}XK%Zf-M}Wg<hsVk{c(^?xeZ(zl{zFq*!^/Yb-t=}HS');
define('SECURE_AUTH_KEY', 'j*+?I[a%ya{wnA>k??FB|[fW?;|NWxQ%qjxncrKzuCVeoNB>=(BdKNEi!Gl]{XwFQxh&xuWiL;QmmYWhwaSG-qfPR^yaQ-@WvWL/sIRur(zVKJaI/NDC]GknhI+PU!@?');
define('LOGGED_IN_KEY', 'qcLh<Nz!yd(Vq%{Fa}tBd=<&iQsYxvxF;|t}-fziy/nMd(BgQS;uFBQaOFEp-[G*kLLJf-O/V_I(BKi=}odX;gJQ=Lrm/>rZera(K<|U(/-+x&sSAl%lqs_(|cDLx|[r');
define('NONCE_KEY', 'bC>f_Bxr]Nzsk[;noNfUyFsIc[}baqZ<]!LvLjH&uHOnDaJdtB-K$DaSou^aR^]J<-;LV$|boTL[_Po!H?!i+SaZpRm>]QdNFvcK^+<HFQg@elPQt>$h|/v]]?;ePmDx');
define('AUTH_SALT', '^_n%Y-YDWsgiQ(Pp]|oFr[YI/%!nWyapl@qv>J>xewm{%}k?nNf)oBSkqaOc$Adr-+&C@vO_BMYIV@&vdMocYSmtVDJRP&IE]Ho{)rKcv|mt_@VEx?rfIIB<xfsQSu@!');
define('SECURE_AUTH_SALT', 'TB]Mn@ABFnuqs[+pqjh*nqyXqAslK<mGWyls$>*l>uridVh+seg]e/^+_wSv|V+wb=H=eW[p]M+v&-O/y%FQ+]<D|_;/nOQV{w<sL*%JuvR>vM<?-s/j}dmtS={/dosP');
define('LOGGED_IN_SALT', 'Bw+FY}vRNsCua)A$bp&(ZN/aeTRkfk>(umo&dG!VylLKuFPyNiDwZTYDvNBJSr+/AQc?^@FD@g(W^@}<N>TT>gM==f@s<-lxJs?$;EP]SC>Jk(fGV=+PVIg?L/i[]&RK');
define('NONCE_SALT', 'NMAHuKw;fCJG)l[TxxmiWObJKKe[t({*L!/XZN_PosWZab*$T|Qc|UMcEY[wl)BxF?+^lVXKqsl@AHzJP$aGqV=bX=saj*wFhSeACNeO$(>tBzNCH=u>MeykloD%MDR&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_rltk_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
