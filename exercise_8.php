<?php
// 
/*
$file_name = __FILE__;
$file_obj = new SplFileObject($file_name);
// 
$write_name = __DIR__ . "/file_copy.php";
// 
foreach($file_obj as $line) {
    echo $line;
    file_put_contents($write_name, $line, FILE_APPEND | LOCK_EX);
}
*/
// 
$self_file_string = file_get_contents( __FILE__ );
file_put_contents("./file_copy.php", $self_file_string);