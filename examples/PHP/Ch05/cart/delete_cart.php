<?php
setcookie($_GET['cart'], '', time() - 3600);
header('Location:http://localhost:8888/PHP/Ch05/cart/view_cart.php');

?>