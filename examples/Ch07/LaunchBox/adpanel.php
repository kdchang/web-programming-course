<?php
include_once 'helpers/helper.php';
session_start();
$username = $_SESSION['username'];
$logined = $_SESSION['logined'];
if (!$logined) {
	redirect('admin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>便當當</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/jumbotron-narrow.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <div class="container">
        <h2>LaunchBox 後台管理系統：</h2>
        <hr>
        <ul class="nav nav-tabs" role="tablist">
            <li class="active"><a href="#">訂單資訊</a></li>
            <li><a href="#">商品上架</a></li>
            <li><a href="#">設定</a></li>
            <li><a href="logout.php">登出</a></li>
        </ul>

        <div class="footer">
            <p>&copy; Company 2014</p>
        </div>

    </div>
    <!-- /container -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
