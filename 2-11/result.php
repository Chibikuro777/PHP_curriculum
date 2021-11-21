<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $my_name = $_POST['my_name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    ?>
    <p>私の名前は、<?php echo $my_name; ?></p>
    <p>私のメールアドレスは、<?php echo $email; ?></p>
    <p>私のパスワードは、<?php echo $password; ?></p>
</body>

</html>

<!-- 仕様書・設計書とは…
工業製品やソフトウェア、情報システム、サービスなどを開発する際に、備えるべき機能やその性能、特性、満たすべき要件などを図表や文章などで記述した文書。

Gitとは…
プログラムのソースコードなどの変更履歴を記録・追跡するための分散型バージョン管理システムである。

マージツールとは…
ソースコードの大規模、複雑化の一途をたどっている昨今。
そのような開発現場ではチームで開発することが一般的だ。しかしチーム開発においてやっかいなのが、修正箇所がコンフリクトしたり不整合が起こったりすること。
それを比較してマージする際に、手戻りが発生するなどして作業時間が大幅にかかってしまうといった経験をした方も多いのではないだろうか。そのようなチーム開発における非生産的な作業を効率化するのが、マージツール -->