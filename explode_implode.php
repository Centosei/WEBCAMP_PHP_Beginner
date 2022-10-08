<?php

$base_string = "Stollen;Panettone;Pandoro;Kouglof;Lussekatter";
echo "元の配列\n";
var_dump($base_string);

// explode()
$exploded_array = explode(";", $base_string);
echo "\nexplodeした配列\n";
var_dump($exploded_array);

// implode()
$imploded_array = implode(",", $exploded_array);
echo "\nimplodeした文字列\n";
var_dump($imploded_array);