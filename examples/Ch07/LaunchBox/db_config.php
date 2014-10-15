<?php
/*
'mysql' => array(
'driver'    => 'mysql',
'host'      => 'localhost',
'database'  => 'laravel-blog',
'username'  => 'homestead',
'password'  => 'secret',
'charset'   => 'utf8',
'collation' => 'utf8_unicode_ci',
'prefix'    => '',
),
 */
$DB_HOST = 'localhost';
$DB_USER = 'ibelieveican';
$DB_PASSWORD = 'bb09284786';
$DB_NAME = 'launch_box';
$DB_DRIVER = 'mysql';

$connect = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD) or die('cannot connect to db!');
mysqli_select_db($connect, $DB_NAME);
mysqli_set_charset($connect, 'utf8');
?>