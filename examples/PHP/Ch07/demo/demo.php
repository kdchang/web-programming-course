<?php
// PDO

$query = "SELECT * FROM `member`;";
$mysqli = mysqli_connect('localhost', 'xd', '1234', 'launch_box');
$result = mysqli_query($mysqli, $query);
while ($row = mysqli_fetch_array($result)) {
	echo $row[2] . '<br>';
}
?>