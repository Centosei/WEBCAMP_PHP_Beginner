<?php

// 
var_dump( true && false);
var_dump( true || false);

// 
$age = 20;
$point = 400;
echo "ユーザーの年齢　　: {$age}\n";
echo "ユーザーのポイント: {$point}\n";
echo "「かつ」の場合　　＝＞　";
var_dump( ($age >= 20) && ($point >= 500));
echo "「または」の場合　＝＞　";
var_dump( ($age >= 20) || ($point >= 500));

// 
echo "\n";
$age = 25;
$point = 700;
echo "ユーザーの年齢　　: {$age}\n";
echo "ユーザーのポイント: {$point}\n";
echo "「かつ」の場合　　＝＞　";
var_dump( ($age >= 20) && ($point >= 500));
echo "「または」の場合　＝＞　";
var_dump( ($age >= 20) || ($point >= 500));