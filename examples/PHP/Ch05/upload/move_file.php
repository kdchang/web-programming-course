<?php
$target_path = "uploads/";
$target_path = $target_path . basename($_FILES['file']['name']);
if ($_FILES["file"]["error"] > 0) {
	echo '檔案錯誤';
} else {
	$tmp_name = $_FILES["file"]["tmp_name"];
	$name = $_FILES["file"]["name"];
	$upload_img = move_uploaded_file($_FILES['file']['tmp_name'], $target_path);
	if ($upload_img) {
		echo '上傳成功';
	} else {
		echo '上傳失敗';
	}
}
?>