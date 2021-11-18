<?php
$fruits = ["りんご", "みかん", "ぶどう"];

$fruits[] = "バナナ";

var_dump($fruits);

$colour = ["red" => "赤", "blue" => "青", "green" => "緑"];
var_dump($colour);
$colour["yellow"] = "黄色";
var_dump($colour);

//git flowとは
// ・プラグイン（ツール）のこと。
// ・Vincent Driessen氏がブログに書いた"A successful Git branching model" というブランチモデルの導入を簡単にする git プラグインである。
// ・開発前にブランチを切り分けて使用する仕組みをつくること。
// ・Gitflow には永続的なブランチと大規模なコミットがある。
