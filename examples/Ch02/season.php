<?php

$month = $_GET['month'];
$season = $month % 12 / 3;
echo $season;

if($season >= 0 && $season < 1) {
	echo '冬天好！';
} elseif($season >= 1 && $season < 2) {
	echo '春天好！';
} elseif($season >= 2 && $season < 3) {
	echo '夏天好！';
} elseif($season >= 3 && $season < 4) {
	echo '秋天好！';
} else {
	echo '您確定您是地球人嗎？';
}
?>