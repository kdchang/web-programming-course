<?php
$default_id = 'NTU';
$default_pwd = sha1('gogontu');
$_SESSION['logined'] = 'false';
//
//$back_url = $_SERVER['HTTP_REFERER'];
if (isset($_POST['id']) && isset($_POST['pwd'])) {
	$id = $_POST['id'];
	$pwd = sha1($_POST['pwd']);
}

if (($id == $default_id) && ($pwd == $default_pwd)) {
	echo "<h2>Hi, $id 歡迎光臨！</h2>";
	$_SESSION['logined'] = 'true';
} else {
	//header("Location:$back_url");
	echo "登入失敗";
}

?>