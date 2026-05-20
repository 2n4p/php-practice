<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7-4-3_hands-on</title>
</head>
<body>
    <?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $safe_name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    $safe_email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    $safe_age = htmlspecialchars($age, ENT_QUOTES, 'UTF-8');
    ?>

    <h1>ユーザー登録(3/3)完了</h1>
    <p><?php echo $safe_name ?>さん、登録が完了しました！</p>
    <p>確認メールを<?php echo $safe_email ?>に送信しました。</p>
    <a href="input.php">最初に戻る</a>

</body>
</html>