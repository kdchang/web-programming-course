<?php
$file = "sample.txt";
$fp = fopen($file, "a");

$content = "hihi, php";
fputs($fp, $content, 10);
// fclose$file);
// // 讀取指定位元檔案內容
$contents = fread($fp, filesize($file));
// 讀取檔案，每一換行到陣列
$line = file($file);
// 輸出到緩衝區
$num = readfile($file);
?>