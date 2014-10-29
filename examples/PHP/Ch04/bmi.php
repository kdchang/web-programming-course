<?php
$height = $_GET['height'];
$weight = $_GET['weight'];
function BMI($height, $weight) {
	//$bmi = $weight / (float) ();
	//return $bmi;
	echo ($weight / (pow((float) ($height / 100), 2)));
}
echo BMI($height, $weight);
?>