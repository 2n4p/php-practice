<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practice</title>
</head>
<body>
    <?php
    //task1
    $original_price = 5000;
    $discount_rate = 0.2;
    $discount_amount = $original_price * $discount_rate;
    $final_price = $original_price - $discount_amount;

    echo "元の価格: " . $original_price . "円<br>";
    echo "割引率: " . $discount_rate * 100 . "%<br>";
    echo "最終金額: " . $final_price . "円<br><br>";
    ?>
</body>
</html>