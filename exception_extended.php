<?php
class MyException extends Exception
{
}

// 
try {
    throw new \MyException("I threw this");
    $obj = SplFileObject('dummy');
    echo "this sentence won't be shown \n";
} catch(\Throwable $e) {
    echo "error occured\n";
    var_dump($e->getMessage());
}
// 
echo "fin \n";