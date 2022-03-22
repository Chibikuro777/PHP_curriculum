<?php
require_once('db_connect.php');

require_once('function.php');

check_user_logged_in();

// ログイン処理開始
$pdo = db_connect();
try {
    // SQL文の準備 FILL_IN 
    $sql = "SELECT * FROM books ORDER BY date ASC;";
    // プリペアドステートメントの作成 FILL_IN 
    $stmt = $pdo->prepare($sql);
    // 実行 FILL_IN
    $stmt->execute();
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>在庫一覧</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="mt-5" style="width: 50%; margin: 0 auto;">
    <header class="mb-3">
        <h1>在庫一覧画面</h1>
        <a href="book_registration.php"><button type="submit" class="btn bg-primary" style="color: white;">新規登録</button></a>
        <a href="logout.php"><button type="submit" class="btn bg-secondary" style="color: white;">ログアウト</button></a>
    </header>
    <form action="" method="POST">
        <table class="table table-bordered">
            <thead>
                <tr class="table-secondary">
                    <th>タイトル</th>
                    <th>発売日</th>
                    <th>在庫数</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['stock']; ?></td>
                        <td><a href="delete_book.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">削除</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </form>
</body>

</html>