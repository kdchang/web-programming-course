<?php
// 計算分頁數
$per_page_records = 3;
if (isset($_GET['pages'])) {
	$pages = $_GET['pages'];
} else {
	$pages = 1;
}

$total_fields = mysqli_num_fields($result);
$total_records = mysqli_num_rows($result);
$total_pages = ceil($total_records / $per_page_records);
$offset = ($pages - 1) * $per_page_records;
mysqli_data_seek($result, $offset);

// 顯示分頁記錄
$j = 1;
while ($rows = mysqli_fetch_array($result, MYSQLI_NUM) && $j <= $per_page_records) {
	for ($i = 0; $i <= $total_fields - 1; $i++) {
		echo $rows[$i]	
	}
	$j++;
}

// 顯示上一頁和下一頁
if($pages > 1) {
	echo "<a href='paganation.php?pages=" . ($pages - 1) . "'>上一頁</a>";
}
for($i = 1; $i <= $total_pages; $i++) {
	if($i != $pages) 
		echo "<a href='paganation.php?pages='" . ($i)  . ">" . $i ."</a>";
	else 
		echo $i;
}
if($pages < $total_pages) {
	echo "<a href='paganation.php?pages='" . ($pages + 1)  . ">下一頁</a>";
}
?>