<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>KAOLIN スタートページ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="slider">
        <div class="slide" style="display: block;">
            <img class="img" src="img/start1.jpeg" alt="香りとケアの口コミ">
            <p>KAOLINは「香り」「ケア」の口コミが見れて、お買い物もできるアプリ</p>
        </div>
        <div class="slide">
            <img class="img" src="img/start2.jpeg" alt="いつでもお買い物">
            <p>アイテムをアプリでいつでも買える！</p>
        </div>
        <div class="slide">
            <img class="img" src="img/start3.jpeg" alt="通知をONに">
            <p>お得な情報が届くので通知をONにしてね！</p>
        </div>
    </div>
    <div id="slider-dots">
    <span class="dot active" onclick="goToSlide(1)"></span>
    <span class="dot" onclick="goToSlide(2)"></span>
    <span class="dot" onclick="goToSlide(3)"></span>
</div>
    <button id="next-button">次へ</button>
    <a href="pre_regilog.php" class="use-now-button">KAOLINをすぐに使う</a>
    <script src="script.js"></script>
</body>
</html>
