<?php
echo "原始檔名: " . $_FILES['file']['name'] . '<br>';
echo "暫存檔名: " . $_FILES['file']['tmp_name'] . '<br>';
echo "檔案大小: " . $_FILES['file']['size'] . '<br>';
echo "檔案類型: " . $_FILES['file']['type'] . '<br>';
echo "錯誤編碼: " . $_FILES['file']['error'] . '<br>';

for ($i = 0; $i < (count($_FILES['file']) - 1);
	$i++) {
	echo "Name: " . $_FILES['file']['name'][$i] . '<br>';
	echo "Temp: " . $_FILES['file']['tmp_name'][$i] . '<br>';
	echo "Size: " . $_FILES['file']['size'][$i] . '<br>';
	echo "Type: " . $_FILES['file']['type'][$i] . '<br>';
	echo "Error: " . $_FILES['file']['error'][$i] . '<br>';
}
?>