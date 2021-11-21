<?php
// ceil（切り上げ）
$x = 1.5;
echo ceil($x) . "<br>";

// floor（切り捨て）
$x = 5.5;
echo floor($x) . "<br>";

// round（四捨五入）
$x = 8.4;
echo round($x) . "<br>";

// pi（円周率）
echo pi() . "<br>";

function circleArea($r)
{
    $circleArea = $r * $r * pi();
    echo $circleArea . "<br>";
}

circleArea(5);

// mt_rand（乱数）
echo mt_rand(1, 50) . "<br>";

// strlen（文字列の長さ）
$str = "helloWorld";
echo strlen($str) . "<br>";

// strpos（検索）
$str = "helloWorld!";
echo strpos($str, "o") . "<br>";

// substr（文字列の切り取り）
$str = "helloWorld!!";
echo substr($str, 2, 2) . "<br>";

// str_replace（置換）
$str = "hello World!!!";
echo str_replace(" ", "", $str) . "<br>";

// printf（フォーマット化した文字列を出力）
$name = "Matt";
$limit_number = 60;

printf("%sの残り時間はあと%d秒です" . "<br>", $name, $limit_number);

// sprintf（変数に代入できるprintf）
$limit_minutes = 5;
$message = sprintf("%sの残り時間は%d分%d秒です！", $name, $limit_minutes, $limit_number);
echo $message;

// PostgreSQL・Oracle SQL
// PostgreSQL（ポストグレスキューエル）はオープンソースのリレーショナルデータベース管理システム（RDBMS）です。Linux、macOSといったUNIX系OSはもちろんのこと、Windowsにも対応しています。
// Oracle社が開発・販売しているリレーショナル・データベース管理システムです。

// TortoiseGit・TortoiseSVN
// Gitをより扱いやすくするために開発されたWindows用ソフトウェアです。無料で扱うことができ、コマンドを打ち込んで実行するという少し初心者にはハードルの高い状態をこのTortoiseGitが解消してくれます。
// // TortoiseGitを使えばファイルを右クリックして、ファイルの追加、コミットができたり、プッシュもできるようになります。そういった基本操作だけでなく、ブランチの作成やマージといった事もでき、一通りの作業がマウスだけでできてしまうという素晴らしいソフトウェアです！
// TortoiseSVN は、Subversion のクライアントで、Windowsのシェルエクステンションとして機能します。専用のGUIを備えており、CUI の Subversion より、直感的で簡単に扱うことが出来ます。Subversion はクライアント/サーバ型の集中型バージョン管理システムです。TortoiseSVN はサーバ（Subversion）に対するクライアントとなります。

// 外部設計・内部設計
// 外部設計は、システムの外側でユーザーやクライアントの目に触れる部分（インターフェース）、システム全体の概要、主な機能を設計します。
// システムを開発するときに必要な部分やシステムの裏側（内部）でデータがどのように処理されているのかなど、ユーザーにもクライアントにも見えない部分を設計します。