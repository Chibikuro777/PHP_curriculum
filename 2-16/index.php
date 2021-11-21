<?php
$test_file = "test2.txt";

if (is_readable($test_file)) {
    // 読み込み可能なときの処理
    // 対象のファイルを開く
    $fp = fopen($test_file, "r");
    // 開いたファイルから1行ずつ読み込む
    while ($line = fgets($fp)) {
        // 改行コード込みで1行ずつ出力
        echo $line . '<br>';
    }
    // ファイルを閉じる
    fclose($fp);
} else {
    // 読み込み不可のときの処理
    echo "not readable!";
    exit;
}

$test_file2 = "test.txt";
$content = "Writing Hello";

if (is_writable($test_file2)) {
    $fp = fopen($test_file2, "a");
    fwrite($fp, $content);
    fclose($fp);
    echo "Completed writing!";
} else {
    echo "Not writable!";
    exit;
}

// CakePHPの2系・3系の違い
// CakePHP 3.x で変わったところ
// 2.x ではデバッグレベル（0～2）を指定できましたが、3.x からはデバッグを使用するか、しないかの bool 値をとるようになりました。
// $helpers 、 $components プロパティーは、AppController を継承したクラスに設定されているプロパティとマージされるようになりました。
// request オブジェクトを介して アクセスするようになりました。
// beforeFilterを使う際にControllerに定義が必要です。
// redirect() を使用すると 2.x ではそこで処理が終わりましたが、3.x ではそのあとの処理が完了してからメソッドを抜けるときにリダイレクトされます。

// LAMP
// LAMPとは、オープンソースソフトウェアの組み合わせを指す言葉（略称）です。
// 具体的にはOSのLinux、WebサーバーのApache、データベースのMySQL、プログラミングのPerl、PHP、Pythonを指します。
// LAMPとはこれらの頭文字を取ったものです。いずれも、データベース連動型で動的なコンテンツを含むWebサイトの構築に適しており、かつ人気の高いものです。

// AWS
// クラウドコンピューティングを使ったサービス。
// AWSとはAmazon Web Servicesの略で、Amazonが提供している100以上のクラウドコンピューティングサービスの総称です。
// クラウドコンピューティングとは、インターネットを介してサーバー・ストレージ・データベース・ソフトウェアといったコンピューターを使った様々なサービスを利用することを指します。