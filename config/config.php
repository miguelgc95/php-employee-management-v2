<?php
//TODO change want must be changed
define('PROTOCOL', (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS'] == 'on')) ? 'https://' : 'http://');
define('DOMAIN', $_SERVER['HTTP_HOST']);
define('URL', preg_replace("/\/$/", '', PROTOCOL . DOMAIN . str_replace(array('\\', "index.php", "index.html"), '', dirname(htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES))), 1) . '/');

define('HOST', 'localhost');
define('DB', 'employees_manager');
define('USER', 'root');
define('PASSWORD', "");
define('CHARSET', 'utf8mb4');
