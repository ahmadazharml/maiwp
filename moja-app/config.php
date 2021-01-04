<?php

$path = $_SERVER['SERVER_NAME'];

//echo "Path: " . $path;

$app = "moja-app"; // app
$public = "/maiwp/";

define('APP', $app);
define('BASEURL', 'http://' . $path . $public);
define('ACTVURL', 'create/email_activation/');
define('TIMEZONE', date_default_timezone_set("Asia/Kuala_Lumpur"));

// DB
define('DB_HOST', 'sql101.epizy.com');
define('DB_USER', 'epiz_27545162');
define('DB_PASS', 'sI6w3kl9xw');
define('DB_NAME', 'epiz_27545162_maiwp'); //crud-mvc