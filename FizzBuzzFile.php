<?php
for($i = 1; $i <= 100; $i++) {
    // 
    $s = "";
    // 
    if (($i % 3) === 0) {
        $s = "Fizz ";
    }
    if (($i % 5) === 0) {
        $s = $s . "Buzz ";
    }
    if ($s === "") {
        $s = "{$i} ";
    }
    $s = $s . "\n";
    file_put_contents("./FizzBuzzFile.txt", $s, FILE_APPEND | LOCK_EX);
}