<?php

$array_1 = ["Red", "Yellow", "Green", "Blue", "Black"];

foreach($array_1 as $k => $v) {
    echo "key:'{$k}' => value:'{$v}'\n";
}

$array_2 = [
    "Red" => "#ff0000",
    "Yellow" => "#ffff00",
    "Green" => "#00ff00",
    "Blue" => "#0000ff",
    "Black" => "#000000",
];

echo "\n";
foreach($array_2 as $k => $v) {
    echo "{$k}'s hexidecimal color code is: {$v}\n";
}