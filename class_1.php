<?php

class class_name
{
    // 
    private $var_web;
    
    public function class_func()
    {
        echo "FUBAR\n";
    }
    
    // accessor
    public function set_var($v)
    {
       $this->var_web = $v;
    }
    // 
    public function get_var()
    {
        return $this->var_web;
    }
}

$obj = new class_name();
var_dump($obj);
$obj->class_func();

// 
// echo $obj->var_web, "\n";
// 
$obj->set_var('data');
echo $obj->get_var(), "\n";

