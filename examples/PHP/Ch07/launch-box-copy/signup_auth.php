<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(-1);
error_reporting(E_ERROR|E_WARNING);
session_start();
include_once 'db_function.php';
include_once 'helpers/helper.php';

if (isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password'])) {
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = sha1($_POST['password']);
	$signup_query = "INSERT INTO `member` (user_name, user_email, user_password, user_activated) VALUES ('$username', '$email', '$password', 1);";
	$signup_result = db_query($connect, $signup_query);
	if ($signup_result) {
		$_SESSION['username'] = $username;
		$_SESSION['logined'] = true;
		redirect('showcase.php');
	} else {
		redirect('signup.php');
	}
} else {
	redirect('signup.php');
}
?>