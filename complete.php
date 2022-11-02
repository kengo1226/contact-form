<?php
// 直リンクされた時にindex.phpにリダイレクト　POSTされない時にリダイレクト？
if($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: index.php");
    exit();
}

// 日本語設定
mb_language("Japanese");
mb_internal_encoding("UTF-8");

// 送信先アドレス
$to = $_POST['email'];
// メール件名
$subject = "お問い合わせありがとうございます";
// メッセージ本文を見やすくする
$message =  <<< EOM
お問い合わせありがとうございます。

以下の内容で承りました。
---------------------------------
【お名前】
{$_POST["name"]}

【メール】
{$_POST["email"]}

【性別】
{$_POST["sex"]}

【お住いの地域】
{$_POST["pref"]}

【お問い合わせ理由】
{$_POST["reason"]}

【お問い合わせ内容】
{$_POST["contact_body"]}

----------------------------------
EOM;
// 送信元
$headers = "From: kengo1226size@gmail.com";
// メール送信
mb_send_mail($to, $subject, $message, $headers);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>完了画面</title>
</head>
<body>
    <h2>お問い合わせ完了</h2>
    <p>お問い合わせありがとうございます</p>
    <p><a href="index.php">お問い合わせトップへ</a></p>
</body>
</html>