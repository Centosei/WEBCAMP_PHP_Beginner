<?php
// 
try {
    // 
    throw new \Exception('I threw this');
    // 
    $obj = new SplFileObject('dummy');
    // 
    echo "this sentence will not be displayed \n";
} catch(\Throwable $e) {
    echo "error occured \n";
    var_dump($e->getMessage());
}
// 
echo "fin.\n";