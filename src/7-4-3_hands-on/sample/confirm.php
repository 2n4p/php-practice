<?php
$name = $_POST["name"];
$email = $_POST["email"];
$age = $_POST["age"];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録 - 確認</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            text-align: center;
            border-bottom: 3px solid #ff9900;
            padding-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f9f9f9;
            width: 40%;
        }
        .buttons {
            display: flex;
            gap: 10px;
        }
        button {
            flex: 1;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .btn-back {
            background-color: #999;
            color: white;
        }
        .btn-submit {
            background-color: #ff9900;
            color: white;
        }
        .btn-back:hover { background-color: #777; }
        .btn-submit:hover { background-color: #e68a00; }
        .step {
            text-align: center;
            color: #666;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <p class="step">ステップ 2/3</p>
        <h1>入力内容の確認</h1>

        <p>以下の内容で登録します。よろしいですか？</p>

        <table>
            <tr>
                <th>お名前</th>
                <td><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td><?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></td>
            </tr>
            <tr>
                <th>年齢</th>
                <td><?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?>歳</td>
            </tr>
        </table>

        <form action="complete.php" method="post">
            <input type="hidden" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
            <input type="hidden" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>">
            <input type="hidden" name="age" value="<?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?>">

            <div class="buttons">
                <button type="button" class="btn-back" onclick="history.back()">戻る</button>
                <button type="submit" class="btn-submit">登録する</button>
            </div>
        </form>
    </div>
</body>
</html>
