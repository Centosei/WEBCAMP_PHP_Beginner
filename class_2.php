<?php

class MyClass
{
    // object constant
    const HOGE = 'string';
    // 
    public function __construct()
    {
        echo "コンストラクタが動いた!! \n";
    }
    public function __destruct()
    {
        echo "デストラクタが動いた!! \n";
    }
}
// use object constant
var_dump(MyClass::HOGE);

// 
$obj = new MyClass();