<?php
require_once('db_connect.php');
// セッション開始
session_start();

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
        //ログイン名とパスワードのエスケープ処理
        $name = htmlspecialchars($_POST['user_name'], ENT_QUOTES);
        $password = htmlspecialchars($_POST['password'], ENT_QUOTES);
        // ログイン処理開始
        $pdo = db_connect();
        try {
            //データベースアクセスの処理文章。ログイン名があるか判定
            $sql = "SELECT * FROM users WHERE name = :name";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            die();
        }

        // 結果が1行取得できたら
        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // ハッシュ化されたパスワードを判定する定形関数のpassword_verify
            // 入力された値と引っ張ってきた値が同じか判定しています。
            if (password_verify($password, $row['password'])) {
                // セッションに値を保存
                $_SESSION["id"] = $row['id'];
                $_SESSION["user_name"] = $row['name'];
                // main.phpにリダイレクト
                header("Location: main.php");
                exit;
            } else {
                // パスワードが違ってた時の処理
                echo "パスワードに誤りがあります。";
            }
        } else {
            //ログイン名がなかった時の処理
            echo "ユーザー名かパスワードに誤りがあります。";
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
    <title>ログイン画面</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="mt-5" style="width: 50%; margin: 0 auto;">
    <header class="d-flex justify-content-between">
        <h1>ログイン画面</h1>
        <a href="user_registration.php"><button type="submit" class="btn btn-info" style="color: white;">新規ユーザー登録</button></a>
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
        <button type="submit" class="btn btn-primary px-5">ログイン</button>
    </form>
</body>

</html>