<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(-1);
error_reporting(E_ERROR|E_WARNING);
var_dump(PDO::getAvailableDrivers());

?>