<?php
require_once('db_connect.php');
// セッション開始
session_start();

$title = $_POST['title'];
$date = $_POST['date'];
$stock = $_POST['stock'];


if (!empty($_POST)) {
    // タイトルが入力されていない場合の処理
    if (empty($_POST["title"])) {
        echo "タイトルが未入力です。" . "<br>";
    }
    // 日付が入力されていない場合の処理
    if (empty($_POST["date"])) {
        echo "日付が未入力です。" . "<br>";
    }
    // 在庫数が入力されていない場合の処理
    if (empty($_POST["stock"])) {
        echo "在庫数が未入力です。";
    }

    // 両方共入力されている場合
    if (!empty($_POST["title"]) && !empty($_POST["date"]) && !empty($_POST["stock"])) {
        // ログイン処理開始
        $pdo = db_connect();
        try {
            // SQL文の準備 FILL_IN 
            $sql = "INSERT INTO books(title, date, stock) VALUES (?, ?, ?)";
            // プリペアドステートメントの作成 FILL_IN 
            $stmt = $pdo->prepare($sql);
            // 実行 FILL_IN
            $stmt->execute(array($title, $date, $stock));
            // 登録完了メッセージ出力
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
    <title>本登録画面</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="mt-5" style="width: 50%; margin: 0 auto;">
    <header class="d-flex justify-content-between mb-3">
        <h1>本登録画面</h1>
    </header>
    <form action="" method="POST">
        <div class="mb-3">
            <input type="text" class="form-control" name="title" placeholder="タイトル">
        </div>
        <div class="mb-3">
            <input type="date" class="form-control" name="date" placeholder="発売日">
        </div>

        <p>在庫数</p>
        <div class="mb-3">
            <select name="stock">
                <option value="">選択してください</option>
                <?php for ($i = 1; $i <= 100; $i++) : ?>
                    <option value="<?php echo $i; ?>">
                        <?php echo $i; ?>
                    </option>
                <?php endfor; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary px-5">登録</button>
    </form>
</body>

</html>