<?php
echo '已選購的寒星';
echo '<form action="delete_cart.php" method="get">';
if (isset($_COOKIE)) {
	foreach ($_COOKIE as $key => $value) {
		echo '<div><input type=checkbox name="cart" value="' . $key . '">' . $value . '</div>';
	}
}
echo '<input type="submit" value="刪除">';
echo '</form>';
echo '<a href="/PHP/Ch05/cart/cata.html">回上一頁</a>';
?>