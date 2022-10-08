<?php

function myFuncStringAdd(string $str_1, string $str_2): string
{
    $string_combined = $str_1 . $str_2;
    return $string_combined;
}

var_dump(myFuncStringAdd('Hello ', 'World'));