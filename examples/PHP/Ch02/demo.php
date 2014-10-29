<?php
function discount($price) {
	if ($price > 500) {
		return $price * 0.9;
	} else {
		return $price;
	}
}
echo discount(1000);
?>