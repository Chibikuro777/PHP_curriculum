<?php
// count（要素の数を数える）
$members = ['suzuki', 'matsumoto', 'yamada', 'tanaka'];
echo count($members) . "<br>";

// sort（要素の並べ替え）
sort($members);
var_dump($members) . "<br>";

// in_array（配列に中にある要素が存在しているか）
var_dump(in_array("tanaka", $members));

if (in_array('tanaka', $members)) {
    echo "田中さんがいるよ！";
} else {
    echo "田中さんはいないよ！";
}

// implode（配列を結合して文字列に変換）
$atstr = implode("@", $members);
var_dump($atstr . "<br>");
// $atstr = implode($members);
// var_dump($atstr . "<br>");

// explode（文字列を指定の区切りで配列にする）
$re_members = explode("@", $atstr);
var_dump($re_members);

// 要件定義(要求仕様書)とは…
// システム開発などのプロジェクトを始める前の段階で、必要な機能や要求をわかりやすくまとめていく作業のこと

// 単体テスト・結合テストとは…
// 単体テストは単体機能、結合テストは機能間・他システム間、総合テストは構築したシステム全体（非機能も含む）

//  テスト仕様書(どのようなもの、項目)とは…
// システムやソフトウェアが、クライアントのヒアリングをもとに作り上げた要件定義書の通りに機能するかどうか、テストするポイントをまとめたドキュメントです。
// テストを行う機能を大項目に分類。機能のサイズに合わせて、中項目、小項目とカテゴライズします。
// テスト仕様書に記述すべきものとして、以下の事項があります。

// テストを実施した環境
// 実施するテストの内容
// テストを実施するためのシステムの操作手順
// テストの実行結果
// 個々のテスト項目を識別するための番号や記号（通し番号など）
// テストを実施した年月日
// テストを実行した担当者
// 障害報告票番号（発生した障害の詳細を開発グループに報告する帳票の識別番号）
