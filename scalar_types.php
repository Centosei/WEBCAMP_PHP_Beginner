<?php

// Integer
$i = 123;
var_dump($i);

var_dump(PHP_INT_MAX);
var_dump(PHP_INT_MIN);

$over_max = PHP_INT_MAX + 1;
$under_min = PHP_INT_MIN - 1;
var_dump($over_max);
var_dump($under_min);

// Float
$f = 3.14;
var_dump($f);

$f = 10 / 0;

// String
$s = "hello world";
var_dump($s);

echo $s[1], "\n";

$multi_string = "あいうえお";
var_dump($multi_string);
echo $multi_string[0], "\n";

// number and value
$num_i = 123;
$num_s = "123";
var_dump($num_i);
var_dump($num_s);

$single_s = 'num is {$num_i} \n';
var_dump($single_s);

// boolean
$bool_t = true;
$bool_f = false;
var_dump($bool_t);
var_dump($bool_f);

$bool_t_large = TRUE;
var_dump($bool_t_large);

$null_val = null;
var_dump($null_val);