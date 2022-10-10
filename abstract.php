<?php
abstract class abst_class
{
    abstract public function abst_method();
    // 
    public function normal_method()
    {
        echo "there's nothing unusual\n";
    }
}
// 
class le_petit_prince extends abst_class
{
    public function abst_method()
    {
        echo "the son defined this abst method\n";
    }
}

// $obj = new abst_class();

// 
$obj = new le_petit_prince();
$obj->normal_method();
$obj->abst_method();