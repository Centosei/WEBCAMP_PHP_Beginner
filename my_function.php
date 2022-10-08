<?php

function numToDouble(int $i): int
{
    $ret = $i * 2;
    return $ret;
}

$num = numToDouble(10);
echo "10をnumToDoubleに渡したら{$num}になって返ってきた。\n";

// 
function numAdd(int $i, int $j): int
{
    $ret = $i + $j;
    return $ret;
}

$num = numAdd(5, 8);
echo "5と8をnumAddに渡したら{$num}になって返ってきた。\n";