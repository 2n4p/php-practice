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
    <title>ユーザー登録 - 完了</title>
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
            text-align: center;
        }
        h1 {
            color: #28a745;
            border-bottom: 3px solid #28a745;
            padding-bottom: 10px;
        }
        .success-icon {
            font-size: 60px;
            margin: 20px 0;
        }
        .message {
            font-size: 18px;
            margin: 20px 0;
        }
        .email-info {
            background-color: #f0f8ff;
            padding: 15px;
            border-radius: 8px;
            margin: 20px 0;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 30px;
            background-color: #0066cc;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            background-color: #0052a3;
        }
        .step {
            color: #666;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <p class="step">ステップ 3/3</p>
        <h1>登録完了</h1>

        <div class="success-icon">✓</div>

        <p class="message">
            <strong><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></strong>さん、<br>
            登録が完了しました！
        </p>

        <div class="email-info">
            確認メールを<br>
            <strong><?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></strong><br>
            に送信しました。
        </div>

        <a href="input.php">最初に戻る</a>
    </div>
</body>
</html>
