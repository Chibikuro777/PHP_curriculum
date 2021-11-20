<?php
$myname = "ruby";

function sayHi($name = "goto")
{
    // 関数の中で定義する変数 => ローカル変数
    $myname = "php";
    return "Hi! " . $name . " from " . $myname;
}

echo sayHi();
echo $myname . "<br><br>";

function getRectangularArea($width, $height, $depth)
{
    $area = $width * $height * $depth;
    echo "体積は、" . $area . "m²です。";
}

getRectangularArea(10, 5, 8);

// ハッシュ化とは…
// ハッシュ関数と呼ばれる特殊な計算方法によって、一見ランダムに見える別の値（ハッシュ値）にデータを変換する方法です。ハッシュ値は復号できないため、パスワードを保管する際などに活用されています。

// 総合テストとは…
// システム開発会社（ベンダー）側の最終テスト。
// 開発したシステム全体が発注側の要求を満足していることを検証する。
// 要件定義書に基づいて、機能要件および非機能要件に関する不具合を検出する。

// デバッグとは、プログラム内のバグを見つけて改修する作業で、デバッギングともいいます。
// 機能が正常に動かない、あるいは期待する結果が得られない場合には、そこにバグがあります。
// そのバグを見つけ、期待値が返ってくるように改善するのが「デバッグ」です。