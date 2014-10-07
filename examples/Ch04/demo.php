<?php
ob_start();

for($i = 0; $i < 10; $i++) {
	echo $i; // 輸出字串的一個字
    if(($i % 2) == 0) {
        ob_flush(); // 輸出緩衝區
    } else { 
        ob_clean(); // 清除緩衝區
    }
}
echo "偶數字：";
ob_end_flush();
?>