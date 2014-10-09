<?php

//input text & password & hidden & textarea
if(isset($_POST['id'])) {
	echo "帳號：";
	echo $_POST['id'];
	echo '<br>';
	echo "密碼：";
	echo $_POST['pwd'];
	echo '<br>';
	echo "Hidden Value：";
	echo $_POST['token'];
	echo '<br>';
	echo 'Textarea：';
	echo $_POST['comment'];
}

// radio & 
echo $_GET['hero'];
echo '<br>';

switch($_GET['hero']) {
	case 1:
		echo "曹操";
		break;
}

$man = $_POST['man'];
print_r($man);

$img = $_FILES['img'];
print_r($img);

?>