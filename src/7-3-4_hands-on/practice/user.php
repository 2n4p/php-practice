<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7-3-4_hands-on</title>
</head>
<body>
    <?php
    class User{
        public string $name;
        public int $age;

        public function __construct(string $name, int $age) {
            $this->name = $name;
            $this->age = $age;
        }

        public function introduce(){
            echo "こんにちは、私は{$this->name}です。{$this->age}歳です。<br>";
        }

        public function judge(){
            if($this->age >= 20){
                echo "{$this->name}さんは成人です。<br>";
            }else{
                echo "{$this->name}さんは未成年です。<br>";
            }
        }
    }

    $user1 = new User("田中太郎", 25);
    $user2 = new User("佐藤花子", 17);
    $user3 = new User("鈴木一郎", 30);

    echo "<h3>自己紹介</h3>";
    $user1->introduce();
    $user2->introduce();
    $user3->introduce();
    echo "<br>";

    echo "<h3>年齢判定</h3>";
    $user1->judge();
    $user2->judge();
    $user3->judge();
    echo "<br>";
    ?>
</body>
</html>