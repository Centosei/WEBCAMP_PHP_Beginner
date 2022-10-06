<?php

$i = 1;
echo "等しいかどうか\n";
var_dump($i === 1);
var_dump($i === 2);

// 
echo "\n等しくないかどうか\n";
var_dump($i !== 1);
var_dump($i !== 2);

// 
echo "\n等しいかどうか(文字列)\n";
$s = 'abc';
var_dump($s === 'abc');
var_dump($s === 'ABC');
var_dump($s === 'a');

// == & ===
echo "\n==と===の違い\n";
var_dump($i === 1);
var_dump($i == 1);
var_dump($i === '1');
var_dump($i == '1');

// 2a問題
echo "\n2a問題\n";
$i = 2;
var_dump($i === '2a');
var_dump($i == '2a');