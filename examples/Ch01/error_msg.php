<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
error_reporting(E_ERROR | E_WARNING);
$x = 13;
$y = 0;
$z = @($x / $y);
echo $z;
echo '錯誤訊息：' . $php_errormsg;
?>