<?php
$file = "index.php";
echo $file . "<br>";
// 檔案類型
echo filetype($file);
// 最後存取時間
echo date("n/d/Y h:i:s", fileatime($file));
// 最後更改時間
echo date("n/d/Y h:i:s", filemtime($file));
echo '<br>';

// 檔案大小
echo filesize($file);
// 是否為資料夾
echo is_dir($file);
// 是否為檔案
echo is_file($file);
// 是否可以讀寫、是否為上傳檔案
echo is_readable($file);
echo is_writable($file);
echo is_uploaded_file($file);
?>