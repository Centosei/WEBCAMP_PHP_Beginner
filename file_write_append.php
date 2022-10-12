<?php
// 
$file_name = __DIR__ . "/file_write_append.txt";
// 
$write_string = "writing content\n";
// 
file_put_contents($file_name, $write_string, FILE_APPEND | LOCK_EX);