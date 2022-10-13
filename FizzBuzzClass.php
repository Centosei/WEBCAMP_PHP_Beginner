<?php
class FizzBuzz
{
    // property
    private int $max;
    
    // method
    public function setMax(int $i) {
        $this->max = $i;
    }
    
    public function exec() {
        for($i = 1; $i <= $this->max; $i++) {
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
}

// test call
$obj = new FizzBuzz();
$obj->setMax(50);
$obj->exec();