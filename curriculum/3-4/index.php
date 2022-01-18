<?php
require_once('getData.php');

$getData = new getData();
$userData = $getData->getUserData();
$postData = $getData->getPostData();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/reset.css?<?php echo date('Ymd-Hi'); ?>" type="text/css">
    <link rel="stylesheet" href="./css/style.css?<?php echo date('Ymd-Hi'); ?>" type="text/css">
</head>

<body>
    <header>
        <img src="img/logo.png" alt="logo" class="left_header">
        <div class="right_header">
            <div class="right_top">
                <p><?php echo "ようこそ、" . $userData['last_name'] . $userData['first_name'] . "さん" ?></p>
            </div>
            <div class="right_bottom">
                <p><?php echo "最終ログイン日：" . $userData['last_login'] ?></p>
            </div>
        </div>
    </header>

    <main>
        <table class="table_design">
            <tr>
                <th>記事ID</th>
                <th>タイトル</th>
                <th>カテゴリ</th>
                <th>本文</th>
                <th>投稿日</th>
            </tr>
            <?php foreach ($postData as $key => $value) : ?>
                <tr>
                    <td><?php echo $value['id'] ?></td>
                    <td><?php echo $value['title'] ?></td>
                    <td><?php if ($value['category_no'] === "1") {
                            echo "食事";
                        } elseif ($value['category_no'] === "2") {
                            echo "旅行";
                        } else {
                            echo "その他";
                        }
                        ?>
                    </td>
                    <td><?php echo $value['comment'] ?></td>
                    <td><?php echo $value['created'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </main>

    <footer>Y&I group.inc</footer>
</body>

</html>