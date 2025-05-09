<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h2 class="header-ttl">お問い合わせフォーム</h2>
    </header>
    <aside id="sidebar">
        <ul>
            <li><a href="#">トップページ</a></li>
            <li><a href="#">人気投稿</a></li>
            <li><a href="#">エンジニアおすすめ商品</a></li>
            <li><a href="#">エンジニアおすすめ記事</a></li>
            <li><a href="#">投稿ページ</a></li>
        </ul>
    </aside>
        
    <main>
        <form action="confirm.php" method="POST">
            <table id="dataTable">
                <tr>
                    <th>お名前</th>
                    <td><input type="text" name="username" id="username" size="40"></td>
                </tr>
                <tr>
                    <th>会社名</th>
                    <td><input type="text" name="companyName" id="companyName" size="40"></td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td><input type="text" name="email" id="email" size="40"></td>
                </tr>
                <tr>
                    <th>年齢</th>
                    <td><input type="text" name="age" id="age" size="40"></td>
                </tr>
                <tr>
                    <th>お問い合わせ内容</th>
                    <td><textarea name="message" id="message"></textarea></td>
                </tr>
            </table>
            <div class="sendButton-wrapper">
                <input id="sendButton" type="submit" value="送信">
            </div><!-- /.sendButton-wrapper -->
        </form>
        
    </main>

    <footer>
        <p>横のボタンを押すとfooterの背景色が変わります。</p>
        <input type="button" value="押してみてね！">
    </footer>
    <script src="style.js"></script>
</body>
</html>