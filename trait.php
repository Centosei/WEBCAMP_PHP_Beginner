<?php
trait just_a_part
{
    public function trait_s_method()
    {
        echo "hello I am a trait\n";
    }
}
// 
class just_a_class
{
    use just_a_part;
    
    public function class_s_method()
    {
        echo "hello I am a class\n";
    }
}
// 
$obj = new just_a_class();
$obj->class_s_method();
$obj->trait_s_method();