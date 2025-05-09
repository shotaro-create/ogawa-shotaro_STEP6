<?php
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header('Location: http://localhost:8080/contact.php');
        exit();
    }
    $username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
    $companyName = htmlspecialchars($_POST['companyName'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
    $age = htmlspecialchars($_POST['age'], ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム - 確認画面</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h2 class="header-ttl">お問い合わせフォーム - 確認画面</h2>
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
        <form action="send.php" method="POST">
            <table id="dataTable">
                <tr>
                    <th>お名前</th>
                    <td>
                        <?php echo $username; ?>
                    </td>
                </tr>
                <tr>
                    <th>会社名</th>
                    <td>
                        <?php echo $companyName; ?>
                    </td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td>
                        <?php echo $email; ?>
                    </td>
                </tr>
                <tr>
                    <th>年齢</th>
                    <td>
                        <?php echo $age; ?>
                    </td>
                </tr>
                <tr>
                    <th>お問い合わせ内容</th>
                    <td>
                        <?php echo $message; ?>
                    </td>
                </tr>
            </table>

            <!-- hiddenフィールド -->
            <input type="hidden" name="username" value="<?php echo $username; ?>">
            <input type="hidden" name="companyName" value="<?php echo $companyName; ?>">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            <input type="hidden" name="age" value="<?php echo $age; ?>">
            <input type="hidden" name="message"  value="<?php echo $message; ?>">


            <div class="backButton-wrapper">
                <input type="button" value="戻る" onclick="history.back()">
            </div><!-- /.backButton-wrapper -->
            <div class="sendButton-wrapper">
                <input id="sendButton" type="submit" value="送信">
            </div><!-- /.sendButton-wrapper -->
            
        </form>
        
    </main>
    <footer>

    </footer>
    <script src="style.js"></script>
</body>
</html>