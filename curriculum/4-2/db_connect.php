<?php
// DB名
define('DB_DATABASE', '4-2_book_store');
// MySQLのユーザー名
define('DB_USERNAME', 'root');
// MySQLのログインパスワード
define('DB_PASSWORD', 'root');
// DSN
define('PDO_DSN', 'mysql:host=localhost;charset=utf8;dbname=' . DB_DATABASE);

function db_connect()
{
    try {
        // SQL文の準備 FILL_IN 
        $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        return $pdo;
    } catch (PDOException $e) {
        // エラーメッセージの出力 FILL_IN 
        echo $e->getMessage();
        // 終了 FILL_IN
        die();
    }
}
