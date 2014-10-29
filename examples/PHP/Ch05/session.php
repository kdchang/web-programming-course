<?php
// 啟用交談期(Session)，把這個 PHP 加入 Session
session_start();

$_SESSION['my_session'] = "我想吃餅乾";
if (isset($_SESSION["my_session"])) {
	echo $_SESSION['my_session'];
}
// 回傳 Session ID
$session_id = session_id();
echo $session_id;

// 刪除參數的 Session 看是否存在
unset($_SESSION['my_session']);

// 關閉交談期和刪除所有 Session 變數
session_destroy();
?>