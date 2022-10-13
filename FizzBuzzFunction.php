<?php
function fizzBuzz(int $max) {
    for($i = 1; $i <= $max; $i++) {
        if (($i % 15) === 0) {
            echo "Fizz Buzz";
        } elseif (($i % 3) === 0) {
            echo "Fizz";
        } elseif (($i % 5) === 0) {
            echo "Buzz";
        } else {
            echo $i;
        }
        echo "\n";
    }
}
// test call
fizzBuzz(50);