<?php

class class_papa
{
    public function papa_method()
    {
        echo "I'm your father.\n";
    }
    public function one_method()
    {
        echo "just a method\n";
    }
}
// 
class class_son extends class_papa
{
    public function son_method()
    {
        echo "I'm not your son!\n";
    }
    public function one_method()
    {
        echo "another sample method\n";
    }
}

$luke = new class_son();
$luke->son_method();
$luke->papa_method();
$luke->one_method();