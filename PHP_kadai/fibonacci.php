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
        echo 0 . "\n" . 1 . "\n";
        for ($second_last = 0, $first_last = 1; $first_last <= $this->max;)
        {
            // 
            $sum = $second_last + $first_last;
            echo $sum."\n";
            // 
            $second_last = $first_last;
            $first_last = $sum;
        }
    }
}

// test
$obj = new Fibonacci(10000);
$obj->exec();