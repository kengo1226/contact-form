<?php
// 直リンクされた時にindex.phpにリダイレクト　POSTされない時にリダイレクト？
if($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: index.php");
    exit();
}

// 各項目の内容を取得する
$name = $_POST['name'];
$email = $_POST['email'];
$sex = $_POST['sex'];
$pref = $_POST['pref'];
$contact_body = $_POST['contact_body'];

// チェックボックスの値をスラッシュ区切りで取り出す
$reason = implode('/', $_POST['reason']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>確認画面</title>
</head>
<body>
    <form action="complete.php" method="post">
        <div class="input-area">
            <p>名前</p>
            <?php echo htmlspecialchars($email,ENT_QUOTES,'UTF-8'); ?>
        </div>

        <div class="input-area">
            <p>メール</p>
            <?php echo htmlspecialchars($email,ENT_QUOTES,'UTF-8'); ?>
        </div>

        <div class="input-area">
            <p>性別</p>
            <?php echo $sex; ?>
        </div>

        <div class="input-area">
            <p>お住いの地域</p>
            <?php echo $pref; ?>
        </div>

        <div class="input-area">
            <p>お問い合わせ理由</p>
            <?php echo $reason; ?>
        </div>

        <div class="input-area">
            <p>お問い合わせ内容</p>
            <?php echo nl2br(htmlspecialchars($contact_body,ENT_QUOTES,'UTF-8')); ?>
        </div>

        <div class="input-area">
            <input type="button" onclick="history.back()" value="戻る" class="btn-border">
            <input type="submit" name="submit" value="送信" class="btn-border">
            <input type="hidden" name="name" value="<?php echo $name; ?>">
            <input type="hidden" name="eemail" value="<?php echo $email; ?>">
            <input type="hidden" name="sex" value="<?php echo $sex; ?>">
            <input type="hidden" name="pref" value="<?php echo $pref; ?>">
            <input type="hidden" name="reason" value="<?php echo $reason; ?>">
            <input type="hidden" name="contact_body" value="<?php echo $contact_body; ?>">
        </div>
    </form>
</body>
</html>