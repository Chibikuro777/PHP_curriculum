<?php

// db_connect.phpの読み込みFILL_IN
require_once('db_connect.php');

// POSTで送られていれば処理実行
// nameとpassword両方送られてきたら処理実行
$name = $_POST['name'];
$password = $_POST['password'];

if (isset($_POST['signUp'])) {
    if (!empty($name || $password)) {
        // PDOのインスタンスを取得FILL_IN
        try {
            // SQL文の準備 FILL_IN 
            $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            // プリペアドステートメントの作成 FILL_IN 
            $stmt = $pdo->prepare("INSERT INTO users(name, password) VALUES (?, ?)");
            // パスワードをハッシュ化
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            // 実行 FILL_IN
            $stmt->execute(array($name, $password_hash));
            //　登録完了メッセージ出力
            echo '登録が完了しました。';
        } catch (PDOException $e) {
            // エラーメッセージの出力 FILL_IN 
            echo $e->getMessage();
            // 終了 FILL_IN
            die();
        }
    } else {
        echo "入力してください";
    }
}






?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    <h1>新規登録</h1>
    <form method="POST" action="">
        user:<br>
        <input type="text" name="name" id="name">
        <br>
        password:<br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="submit" id="signUp" name="signUp">
    </form>
</body>

</html>