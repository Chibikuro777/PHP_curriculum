<?php
// index.php

$message = "Hello World!";

echo $message;

define('ADMIN_EMAIL', 'y-i-group@gmail.com');
define("LIST_COUNT", 15);
echo '<br>';

echo ADMIN_EMAIL;
echo '<br>';
echo LIST_COUNT . "<br>";

//演算子練習
$x = 5;
$x *= 8;
echo $x . "<br>";

$y = 9;
$y += 10;
echo $y . "<br>";

$y = 9 % 5;
echo $y;
