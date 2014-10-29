<?php
$str = 'I want to make a website';
$lstr = substr_replace($str, 'I love to make a website', 0);
echo $lstr;
echo '<br>';
$lstr = explode(' ', $lstr);
print_r($lstr);

?>