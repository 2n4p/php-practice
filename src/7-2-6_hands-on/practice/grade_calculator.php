<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $students = [
        ["name" => "田中太郎", "score" => 85],
        ["name" => "佐藤花子", "score" => 92],
        ["name" => "鈴木一郎", "score" => 78],
        ["name" => "高橋美咲", "score" => 65],
        ["name" => "伊藤健太", "score" => 58],
    ];

    function judge_score($students){
        foreach($students as $student){
            if($student["score"] >= 90){
                $grade = "A";
                $status = "優秀";
            }elseif($student["score"] >= 80){
                $grade = "B";
                $status = "良好";
            }elseif($student["score"] >= 70){
                $grade = "C";
                $status = "普通";
            }elseif($student["score"] >= 60){
                $grade = "D";
                $status = "要努力";
            }else{
                $grade = "F";
                $status = "不合格";
            }
            echo $student["name"] . ": " . $student["score"] . "点 - 評価" . $grade . "(" . $status . ")<br>";
        }
    }

    function statistics($students){
        $pass_count = 0;
        $fail_count = 0;
        $total = 0;
        $average = 0;
        foreach($students as $student){
            if($student['score'] >= 60){
                $pass_count++;
            }else{
                $fail_count++;
            }
            $total += $student['score'];
        }
        $average = $total / count($students);
        echo "合格者数: " . $pass_count . "人<br>";
        echo "不合格者数: " . $fail_count . "人<br>";
        echo "平均点: " . $average . "点<br>";
    }

    judge_score($students);
    echo "<br>";
    statistics($students);
    ?>
</body>
</html>