<?php
include_once 'helpers/helpers.php';
session_start();

if (isset($_POST['receiver']) && isset($_POST['address']) && isset($_POST['phone']) && isset($_POST['count'])) {
	$order_user_name = $_POST['receiver'];
	$order_user_address = $_POST['address'];
	$order_user_phone = $_POST['phone'];
	$order_user_count = $_POST['count'];
	$order_query = "INSERT INTO `order_info` (order) VALUES;"
} else {

}
?>