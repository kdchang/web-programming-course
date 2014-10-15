<?php
session_start();
$username = $_SESSION['username'];
$logined = $_SESSION['logined'];
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
    </div>
    <div class="container">

        <div class="header">
            <ul class="nav nav-pills pull-right">
                <li class="active"><a href="index.php">首頁</a>
                </li>
                <li><a href="#">關於</a>
                </li>
<?php
if ($logined === true) {
	echo '<li><a href="profile.php">' . "Hi, $username" . '</a></li>';
	echo '<li><a href="logout.php">登出</a></li>';
} else {
	echo '<li><a href="login.php">登入</a></li>';
}
?>
</ul>
            <h3 class="text-muted">LaunchBox 便當當</h3>
        </div>

        <div>
            <div>
                <h1>懷舊鐵路便當</h1>
            </div>
            <div>
                <img class="meal-img" id="meal-img" src="assets/images/rail_lunch.jpg" alt="">
            </div>
            <div>
                <h2>內容物：香Q白米飯、帶骨里肌排、炒芥藍菜(或季節蔬菜)、炒高麗菜(或季節蔬菜)、滷豆輪、蜜汁海帶結、海鮮魚板、美味滷蛋、麻油瓜。</h2>
                <h3>價格(每份)：NT 80</h3>
            </div>
            <hr>
            <div>
                <a href="order.php"><button class="btn btn-success btn-lg btn-block">馬上下訂</button></a>
            </div>
        </div>



        <div class="footer">
            <p>&copy; Company 2014</p>
        </div>
        <!-- /container -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>

</html>
