<?php
// 
$a = 10;
echo "global:a equals to {$a} \n";
// 
function myFunc()
{
    $b = 100;
    echo "in function:b equals to {$b} \n";
    echo "in function:a is {$a} \n";
}
myFunc();
echo "global:b is {$b} \n";