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

    $to = 'sh.tar.ngzk@gmail.com'; 
    $subject = 'お問い合わせフォームからのメッセージ';
    $content = <<<EOT
    以下の内容でお問い合わせを受け付けました。

    お名前: {$username}
    会社名: {$companyName}
    メールアドレス: {$email}
    年齢: {$age}
    お問い合わせ内容:{$message}
    EOT;

    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム - 送信完了画面</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="send-wrapper">
        <h1>お問い合わせフォーム - 送信完了画面</h1>
        <?php 
            // メール送信
            $success = mail($to, $subject, $content, $headers);

            if ($success) {
                echo "お問い合わせが送信されました。ありがとうございます！";
            } else {
                echo "送信に失敗しました。再度お試しください。";
            }   
        ?>
        <a class="backContactForm" href="contact.php">お問い合わせフォームに戻る</a>
    </div><!-- /.send-wrapper -->
    <script script src="style.js"></script>
</body>
</html>