<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(-1);
// error_reporting(E_ERROR|E_WARNING);

$q = "SELECT * FROM `member`;";

$mysqli = new mysqli("localhost", "ibelieveican", "bb09284786", "launch_box");
/* Create table doesn't return a resultset */
$result = $mysqli->query($q);
while ($row = $result->fetch_object()) {
	//printf("Select returned %d rows.\n", $result->num_rows);
	print_r($row);
	//echo $row['user_email'];
	/* free result set */
	$result->close();
}
?>