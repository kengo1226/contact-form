<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォームSAMPLE</title>
</head>
<body>
    <form action="confirm.php" method="post">
        <h2>お問い合わせフォーム</h2>
        <div class="input-area">
            <p>名前</p>
            <input type="text" name="name" placeholder="例）山田　太郎" required>
        </div>

        <div class="input-area">
            <p>メール</p>
            <input type="email" name="email" placeholder="sample@mail.com" required>
        </div>

        <div class="input-area">
            <p>性別</p>
            <label>
                <input type="radio" name="sex" value="男性" checked>男性
            </label>
            <label>
                <input type="radio" name="sex" value="女性">女性
            </label>
        </div>

        <div class="input-area">
            <p>お住いの地域</p>
            <select name="pref" required>
                <option value="">--選択してください--</option>
                <option value="東京都">東京都</option>
                <option value="神奈川県">神奈川県</option>
                <option value="千葉県">千葉県</option>
                <option value="大阪府">大阪府</option>
            </select>
        </div>

        <div class="input-area">
            <p>お問い合わせ内容</p>
            <label><input type="checkbox" name="reason[]" value="質問">質問</label>
            <label><input type="checkbox" name="reason[]" value="ご意見ご要望">ご意見ご要望</label>
            <label><input type="checkbox" name="reason[]" value="資料請求">資料請求</label>
            <label><input type="checkbox" name="reason[]" value="掲載依頼">掲載依頼</label>
            <label><input type="checkbox" name="reason[]" value="その他">その他</label>
        </div>

        <div class="input-area">
            <p>お問い合わせ内容</p>
            <textarea name="contact_body" rows="5" placeholder="本文を入力してください" required></textarea>
        </div>

        <div class="input-area">
            <input type="submit" name="submit" value="確認画面へ" class="btn-order">
        </div>
    </form>
</body>
</html>