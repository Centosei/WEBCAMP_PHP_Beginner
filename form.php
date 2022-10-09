<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
// 
function h(string $s): string
{
    return htmlspecialchars($s, ENT_QUOTES);
}
$input = $_GET['input_text'] ?? "ERROR:[ユーザからの入力がありません]";
echo "あなたが入力したのは '", h($input), "' ですね？\n";