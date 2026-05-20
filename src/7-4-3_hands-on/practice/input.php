<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7-4-3_hands-on</title>
</head>
<body>
    <h1>ユーザー登録(1/3)入力</h1>
    <form action="confirm.php" method="post">
        <p>
            <label for="name">お名前：</label>
            <input type="text" id="name" name="name" required>
        </p>

        <p>
            <label for="email">メールアドレス：</label>
            <input type="email" id="email" name="email" required>
        </p>

        <p>
            <label for="age">年齢：</label>
            <input type="text" id="age" name="age" required>
        </p>

        <button type="submit">確認画面へ</button>
    </form>
</body>
</html>