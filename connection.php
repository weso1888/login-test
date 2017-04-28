<?php

define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'azure');
define('DB_PASSWORD', 'password');
define('DB_DATABASE', 'login-test');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

?>
