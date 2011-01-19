<?php
if($_SERVER[HTTP_HOST]=="localhost"){
define('__PS_BASE_URI__', '/rc-seller.com/prestashop/');
define('_THEME_NAME_', 'prestashop');
//define('_DB_NAME_', 'prestashop');
define('_DB_NAME_', 'db347058579');
define('_DB_SERVER_', 'localhost');
define('_DB_USER_', 'root');
//define('_DB_PREFIX_', 'ps_');
define('_DB_PREFIX_', '');
define('_DB_PASSWD_', '');
define('_DB_TYPE_', 'MySQL');
define('_COOKIE_KEY_', 'N1sT7IQ5Vz5hOPad4GgYB4SbdYjk55aAbRZoGovjOmqKSviWHAyW1Xo4');
define('_COOKIE_IV_', 'YMmhjrqQ');
define('_PS_VERSION_', '1.3.1.1');
error_reporting(-1);
}else{
define('__PS_BASE_URI__', '/');
define('_THEME_NAME_', 'prestashop');
define('_DB_NAME_', 'db347058579');
define('_DB_SERVER_', 'db33.1and1.es');
define('_DB_USER_', 'dbo347058579');
define('_DB_PREFIX_', '');
define('_DB_PASSWD_', 'prestashop');
define('_DB_TYPE_', 'MySQL');
define('_COOKIE_KEY_', 'N1sT7IQ5Vz5hOPad4GgYB4SbdYjk55aAbRZoGovjOmqKSviWHAyW1Xo4');
define('_COOKIE_IV_', 'YMmhjrqQ');
define('_PS_VERSION_', '1.3.1.1');
}
?>
