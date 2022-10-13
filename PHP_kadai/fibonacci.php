<?php
class Fibonacci
{
    private int $max;
    
    function __construct(int $max)
    {
        $this->max = $max;
    }
    
    public function exec()
    {
        if ($this->max >= 0) {
            for (print ($second_last = 0) . "\n" . ($first_last = 1) . "\n"; $first_last <= $this->max;)
            {
                // 
                $sum = $second_last + $first_last;
                echo $sum."\n";
                // 
                $second_last = $first_last;
                $first_last = $sum;
            }
        } else {
            echo 0 . "\n";
        }
    }
}

// test
$obj = new Fibonacci(10000);
$obj->exec();