<?php
$age = 22;

if ($age >= 20) {
    echo "お酒が飲めるぞ！";
} else {
    echo "お酒は二十歳になってから！";
}

echo "<br>";

$age = 24;
// 学生かどうか
$is_student = true;

if ($age < 25 && $is_student) {
    echo '学割パックが使えるよ';
}

echo "<br>";

$age = 24;
// 学生かどうか
$is_student = true;

if ($age < 25 && $is_student) {
    echo '学割パックが使えるよ';
} elseif ($age < 25) {
    echo '若者応援割引が使えるよ';
}

echo "<br>";

$blood = 'B';
if ($blood == 'A') {
    echo "A型です";
} elseif ($blood == 'B') {
    echo "B型です";
} elseif ($blood == 'O') {
    echo "O型です";
} elseif ($blood == 'AB') {
    echo "AB型です";
} else {
    echo "A/B/O/ABから選択してください";
}

echo "<br>";

$string = '1';
$int = 1;

if (1 === $string) {
    echo '変数stringはint型です。';
} else {
    echo '変数stringはstring型です。';
}
// 「変数stringはstring型です」が出力される

if (1 === $int) {
    echo '変数stringはint型です。';
} else {
    echo '変数stringはstring型です。';
}

echo "<br>";

$name = "taro";
$password = "pass";

if ($name = "taro" && $password = "pass") {
    echo "ログイン成功です";
} elseif ($name = "taro" && $password != "pass") {
    echo "パスワードが間違っています。";
} elseif ($name != "taro" && $password = "pass") {
    echo "名前が間違っています。";
} else {
    echo "入力情報が間違っています";
}

echo "<br>";

$num = 0;
while ($num < 10) {
    echo $num;
    $num++;
}

echo "<br>";

$num = 0;
do {
    echo $num;
    $num++;
} while ($num < 10);

echo "<br>";

// $number = 0;

// for ($i = 0; $i < 10; $i++) {
//     echo $number;
// }

echo "<br>";

$num = 0;
for ($num = 0; $num <= 100; $num++) {
    echo $num . "<br>";
}
