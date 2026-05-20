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

    <h1>ユーザー登録(2/3)確認</h1>
    <p>以下の内容で登録します。よろしいですか？</p>

    <table border="1">
        <tr>
            <th>お名前</th>
            <td><?php echo $safe_name ?></td>
        </tr>
        <tr>
            <th>メールアドレス</th>
            <td><?php echo $safe_email ?></td>
        </tr>
        <tr>
            <th>年齢</th>
            <td><?php echo $safe_age ?></td>
        </tr>
    </table>

    <form action="complete.php" method="post">
        <input type="hidden" name="name" value="<?php echo $safe_name ?>">
        <input type="hidden" name="email" value="<?php echo $safe_email ?>">
        <input type="hidden" name="age" value="<?php echo $safe_age ?>">

        <button type="button" onclick="history.back()">戻る</button>
        <button type="submit">登録する</button>
    </form>
</body>
</html>