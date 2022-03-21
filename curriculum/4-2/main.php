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
                <tr>
                    <th>1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
            </tbody>
        </table>
    </form>
</body>

</html>