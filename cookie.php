<?php
ob_start();
// h
function h(string $s): string
{
    return htmlspecialchars($s, ENT_QUOTES);
}
// load from cookie
$counter = intval($_COOKIE['counter'] ?? 1);
// 
echo "あなたがこのサイトを訪れたのは　", h( strval($counter) ), "回目ですね。";
// 
$next_counter = strval($counter + 1);
// 
setcookie('counter', $next_counter);
// 
ob_end_flush();