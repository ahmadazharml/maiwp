<?php

$path = $_SERVER['SERVER_NAME'];

//echo "Path: " . $path;

$app = "moja-app"; // app
$public = "/moja/";

define('APP', $app);
define('BASEURL', 'http://' . $path . $public);
define('ACTVURL', 'create/email_activation/');
define('TIMEZONE', date_default_timezone_set("Asia/Kuala_Lumpur"));

// DB
define('DB_HOST', '');
define('DB_USER', '');
define('DB_PASS', '');
define('DB_NAME', ''); //crud-mvc
