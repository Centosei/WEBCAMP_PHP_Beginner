<?php
function h(string $s): string
{
    return htmlspecialchars($s, ENT_QUPTES);
}
// 
$html_form_param = [
    "pw" => "password",
    "radio_a" => "radio_option",
    "check" => "check_option",
    "sele" => "selected_option",
    "tarea" => "text_input",
    "hide" => "hidden_input",
];
// 
$datum = [];
// 
foreach($html_form_param as $name => $input) {
    $datum[$name] = $_POST[$name] ?? "";
}
// 
var_dump($datum);