<?php

class Hoge
{
    private static $static_property;
    // 
    public static function static_function()
    {
        echo "It's very still \n";
    }
    // 
    public static function set_static_var($v)
    {
        static::$static_property = $v;
    }
    public static function get_static_var()
    {
        return static::$static_property;
    }
}

Hoge::static_function();

Hoge::set_static_var('foo');
echo Hoge::get_static_var(), "\n";