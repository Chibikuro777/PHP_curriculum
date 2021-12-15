<?php
$name     = $_POST['name'];
$numbers  = $_POST['numbers'];
$langs    = $_POST['langs'];
$commands = $_POST['commands'];

// 選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成

$post_data = [
    $numbers, $langs, $commands,
];

$answer = ["80", "HTML", "select"];

function answer($answer, $post_data)
{
    if ($post_data === $answer) {
        echo "正解です！";
    } else {
        echo "残念・・";
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css?v=2">
</head>

<body id="wrapper" class="form_area">
    <p><?php echo $name ?>さんの結果は・・・？</p>
    <p>①の答え</p>
    <?php
    answer($answer[0], $post_data[0])
    ?>
    <p>②の答え</p>
    <?php
    answer($answer[1], $post_data[1])
    ?>
    <p>③の答え</p>
    <?php
    answer($answer[2], $post_data[2])
    ?>
</body>

</html>