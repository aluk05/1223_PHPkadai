<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>KAOLIN 新規登録</title>
    <link rel="stylesheet" href="style_regi.css">
</head>
<body>
    <div class="tab">
        <button class="tablinks active" onclick="openTab(event, 'Email')">メールアドレスで登録</button>
        <button class="tablinks" onclick="openTab(event, 'Phone')">電話番号で登録</button>
    </div>

    <div id="Email" class="tabcontent" style="display: block;">
        <form action="register.php" method="post">
            <input type="email" name="email" placeholder="メールアドレス">
            <input type="password" name="password" placeholder="パスワード" id="password">
            <button type="button" onclick="togglePasswordVisibility()">表示する</button>
            <p class="note">8文字以上128文字以下の半角英数字記号のみ</p>
            <label>
                <input type="checkbox" name="newsletter">
                KAOLINからのおすすめ情報やお知らせをメールで受け取る
            </label>
            <p class="terms">ご登録の前に以下の規約・ガイドラインをお読みください</p>
            <div class="terms-links">
                <button type="button">KAOLIN総合利用規約</button>
                <button type="button">個人情報の取扱について</button>
            </div>
            <input type="submit" value="上記の規約に同意してメールアドレスで登録する">
        </form>
    </div>

    <div id="Phone" class="tabcontent">
        <!-- 電話番号での登録フォーム（未実装） -->
    </div>

    <script src="script.js"></script>
</body>
</html>
