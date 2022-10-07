<?php

$i = 2;
switch($i) {
    case 0:
        echo '$iは0です。', "\n";
        break;
    case 1:
        echo '$iは1です。', "\n";
        break;
    default:
        echo '$iは0でも1でもありません。', "\n", "大変申し訳ございません。", "\n";
        break;
}

// 
$i = 2;
switch($i) {
    case '2a':
        echo "i は '2a'です \n";
        break;

    case '2':
        echo "i は '2'(string)です \n";
        break;

    case 2:
        echo "i は 2(int)です \n";
        break;

}