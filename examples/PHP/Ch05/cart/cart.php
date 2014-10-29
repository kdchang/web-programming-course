<?php
$choice = $_GET['choice'];
switch ($choice) {
	case 0:
		setcookie('0', '都叫受', time() + 3600);
		break;
	case 1:
		setcookie('1', '車人錶', time() + 3600);
		break;
	case 2:
		setcookie('2', '誦會瞧', time() + 3600);
		break;
	default:
		echo '沒選寒星耶';
}
header('Location:view_cart.php');
?>