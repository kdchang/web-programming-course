<?php
$man = $_GET['man'];

echo '使用者喜歡的三國人物是：<br>';
foreach ($man as $value) {
	switch($value) {
		case 'a':
			echo '張飛, ';
			break;
		case 'b':
			echo '趙雲, ';
			break;
		case 'c':
			echo '關羽';
			break;
		default:
			echo '不喜歡五虎將嗎？';
	}
}
?>