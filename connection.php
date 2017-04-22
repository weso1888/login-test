<?php
define('DB_SERVER', 'login-test1');
define('DB_USERNAME', 'azure');
define('DB_PASSWORD', 'password');
define('DB_DATABASE', 'localdb');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>
