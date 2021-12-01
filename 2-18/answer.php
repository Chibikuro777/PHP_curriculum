<?php
$name     = $_POST['name'];
$numbers  = $_POST['numbers'];
$langs    = $_POST['langs'];
$commands = $_POST['commands'];

// 選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成
function answer1($numbers)
{
    if ($numbers === "80") {
        echo "正解！";
    } else {
        echo "残念・・・";
    }
}

function answer2($langs)
{
    if ($langs === "HTML") {
        echo "正解！";
    } else {
        echo "残念・・・";
    }
}

function answer3($commands)
{
    if ($commands === "select") {
        echo "正解！";
    } else {
        echo "残念・・・";
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
    <span class="text_color"><?php answer1($numbers) ?></span>
    <p>②の答え</p>
    <?php answer2($langs) ?>
    <p>③の答え</p>
    <?php answer3($commands) ?>
</body>

</html>