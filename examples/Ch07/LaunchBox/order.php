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
                <li><a href="#">聯絡我們</a>
                </li>
            </ul>
            <h3 class="text-muted">LaunchBox 便當當</h3>
        </div>

        <div>
            <form action="make_deal.php" method="post">
                <div>
                    <h1>懷舊鐵路便當</h1>
                </div>
                <hr>
                <div>
                    <img class="meal-img" id="meal-img" src="assets/images/rail_lunch.jpg" alt="">
                </div>
                <br>
                <div>
                    <h2>內容物：香Q白米飯、帶骨里肌排、炒芥藍菜(或季節蔬菜)、炒高麗菜(或季節蔬菜)、滷豆輪、蜜汁海帶結、海鮮魚板、美味滷蛋、麻油瓜。</h2>
                    <h3>價格(每份)：NT 80</h3>
                </div>
                <br>
                <div>
                    <legend>訂購人</legend>
                    <input type="text" name="receiver" placeholder="訂購人姓名" required>
                </div>
                <br>
                <div>
                    <legend>聯絡電話</legend>
                    <input type="text" name="phone" placeholder="聯絡電話" required>
                </div>
                <br>
                <div>
                    <legend>配送地址</legend>
                    <input type="text" name="address" placeholder="配送地址" required>
                </div>
                <br>
                <div>
                    <legend>訂購數量</legend>
                    <select name="count" id="count">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="5">6</option>
                        <option value="5">7</option>
                        <option value="5">8</option>
                        <option value="5">9</option>
                    </select>
                </div>
                <input type="hidden" name="meal-id" value="">
                <hr>
                <div>
                    <button class="btn btn-warning btn-lg btn-block" type="submit">送出訂單</button>
                </div>
            </form>
        </div>

        <div class="footer">
            <p>&copy; Company 2014</p>
        </div>
        <!-- /container -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>

</html>
