<?php
require_once('db_connect.php');

require_once('function.php');

check_user_logged_in();

// ログイン処理開始
$pdo = db_connect();

// URLの?以降で渡されるIDをキャッチ
$id = $_GET['id'];
try {
    // SQL文の準備 FILL_IN 
    $sql = "DELETE FROM books WHERE id = :id";
    // プリペアドステートメントの作成 FILL_IN 
    $stmt = $pdo->prepare($sql);
    // idのバインド
    $stmt->bindParam(':id', $id);
    // 実行 FILL_IN
    $stmt->execute();
    // main.phpにリダイレクト
    header("Location: main.php");
    exit;
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}
