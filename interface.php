<?php
// 
interface interfaccia_A
{
    public function method_A();
}
// 
interface interfaccia_B
{
    public function method_B(int $i);
}

// 
class Hoge implements interfaccia_A, interfaccia_B
{
    public function method_A()
    {
        echo "method_A\n";
    }
    public function method_B(int $i)
    {
        echo "method_B {$i}\n";
    }
}

// 
$obj = new Hoge();
var_dump($obj);
$obj->method_A();
$obj->method_B(999);