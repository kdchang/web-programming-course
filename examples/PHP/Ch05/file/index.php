<?php
// 取得執行檔案名稱，去除附檔名 .php
$file = basename($_SERVER['PHP_SELF'], ".php");
echo $file;
// 取得檔案實際路徑
$path = realpath($file . ".php");
echo "實際路徑： $path<bt>";
$parts = pathinfo($path);
// 取得路徑陣列資料
echo "路徑" . $parts["dirname"] . "<br>";
echo "檔名" . $parts["basename"] . "<br>";
echo "附檔名" . $parts["extension"] . "<br>";
// 判斷檔案是否存在
if(file_exists($file . ".php")) {
	echo "$file 檔案存在";
} else {
	echo "檔案不存在";
}
// 複製檔案
if(!copy($file. ".php", $file. ".html")) {
	echo "複製失敗";
} else {
	echo "複製成功！";
}
// 更改檔名
rename($file . ".html", "rename.txt");
// 刪除檔案
unlink($file . ".html");
?>