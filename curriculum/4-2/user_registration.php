<?php
require_once('db_connect.php');
// セッション開始
session_start();

$name = $_POST['user_name'];
$password = $_POST['password'];

if (!empty($_POST)) {
    // ログイン名が入力されていない場合の処理
    if (empty($_POST["user_name"])) {
        echo "名前が未入力です。" . "<br>";
    }
    // パスワードが入力されていない場合の処理
    if (empty($_POST["password"])) {
        echo "パスワードが未入力です。";
    }

    // 両方共入力されている場合
    if (!empty($_POST["user_name"]) && !empty($_POST["password"])) {
        // ログイン処理開始
        $pdo = db_connect();
        try {
            // SQL文の準備 FILL_IN 
            $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            // プリペアドステートメントの作成 FILL_IN 
            $stmt = $pdo->prepare("INSERT INTO users(name, password) VALUES (?, ?)");
            // パスワードをハッシュ化
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            // 値をセット　FILL_IN
            $stmt->bindValue(':password', $password_hash);
            // 実行 FILL_IN
            $stmt->execute(array($name, $password_hash));
            //　登録完了メッセージ出力
            echo '登録が完了しました。';
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            die();
        }
    }
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録画面</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="mt-5" style="width: 50%; margin: 0 auto;">
    <header class="d-flex justify-content-between">
        <h1>ユーザー登録画面</h1>
    </header>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="user_name" class="form-label">ユーザー名</label>
            <input type="text" class="form-control" name="user_name" placeholder="ユーザー名">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">パスワード</label>
            <input type="password" class="form-control" name="password" placeholder="パスワード">
        </div>
        <button type="submit" class="btn btn-primary px-5">新規登録</button>
    </form>
</body>

</html>