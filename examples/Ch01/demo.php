<?php
if(!file_exists("demo.txt")){
    $file_ref = fopen("demo.txt", "w");    //打開檔案
    //echo $file_ref;
    echo get_resource_type($file_ref);    // 輸出：stream
    fclose($file_ref);		    //關閉文件
}
?>