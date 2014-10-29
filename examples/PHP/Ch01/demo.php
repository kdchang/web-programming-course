<?php
$time = 11;

if ($time < 10 && $time > 5) { 
  echo 'Good morning'; 
} elseif ($time > 20 && $time < 24) { 
  echo 'Good Night';
} else { 
  echo 'Good Evening';
}

?>