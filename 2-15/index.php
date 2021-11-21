<?php
echo date("Y-m-d H:i:s", time());
echo date("Y年m月d日 H時i分s秒", time());
echo strtotime("2017/2/16 11:25:00");

// 先週の日曜日
echo strtotime("last Sunday");
// 2日後
echo strtotime("+2 day");
