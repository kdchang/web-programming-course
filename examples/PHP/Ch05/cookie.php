<?php
$cookie_value = "餅乾真好吃^^";
$expire_time = strtotime("+10 days", time()); 

// 新增 Cookie
setcookie("my_cookie", $cookie_value, $expire_time);

// 讀取 Cookie
$item = $_COOKIE['my_cookie'];
echo $item;

// 刪除 Cookie(目前 timestamp - 10 hours)
setcookie("my_cookie", "", time()-3600);
?>