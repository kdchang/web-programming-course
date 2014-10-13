<?php 
$file = 'count.txt';
if(!file_exists('count.txt')) {
	$counter = 0;
	$fp = fopen($file, 'w+');
	fputs($fp, $counter);
	fclose($fp);
} else {
	$fp = fopen($file, "r");
	$counter = fread($fp, filesize($file));
	$counter += 1;

	fclose($fp);
	$fp = fopen($file, 'w');
	fputs($fp, $counter);
	fclose($fp);
}
?>