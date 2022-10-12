<?php
class MyException extends Exception
{
}

// 
try {
    throw new \MyException('MyException Error');
    throw new TypeError('Type Error');
    throw new Exception('Exception');
} catch(\MyException $e) {
    echo "My Exception is catched\n";
    var_dump($e->getMessage());
} catch(\Error $e) {
    echo "Error is catched\n";
    var_dump($e->getMessage());
} catch(\Throwable $e) {
    echo "Something Throwable is catched\n";
    var_dump($e->getMessage());
}
// 
echo "fin.\n";