<?php
$name = $_POST['name'];

//①画像を参考に問題文の選択肢の配列を作成してください。
$numbers = [80, 22, 20, 21];

$langs = ["PHP", "Python", "Java", "HTML"];

$commands = ["join", "select", "insert", "update"];

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

<body>
    <div id="wrapper">
        <form action="answer.php" method="POST" class="form_area">
            <p>お疲れ様です<?php echo $name . "さん" ?></p>
            <input type="hidden" name="name" value="<?php echo $name ?>">
            <h2>①ネットワークのポート番号は何番？</h2>
            <?php foreach ($numbers as  $value) : ?>
                <input type="radio" name="numbers" value="<?php echo $value ?>"> <?php echo $value ?>
            <?php endforeach; ?>
            <br>
            <h2>②Webページを作成するための言語は？</h2>
            <?php foreach ($langs as $value) : ?>
                <input type="radio" name="langs" value="<?php echo $value ?>"> <?php echo $value ?>
            <?php endforeach; ?>
            <br>
            <h2>③MySQLで情報を取得するためのコマンドは？</h2>
            <?php foreach ($commands as $value) : ?>
                <input type="radio" name="commands" value="<?php echo $value ?>"> <?php echo $value ?>
            <?php endforeach; ?>
            <br>
            <button type="submit" name="button" value="answer" class="button">回答する</button>
        </form>
    </div>
</body>

</html>