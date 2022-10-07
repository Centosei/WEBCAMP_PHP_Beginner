<?php
// 
if (print "「この文章をあなたが読んでいるということは\n　") {
    echo "ifはtrueだったということです」\n";
}
// 
if (false) {
    echo "「この文章をあなたが読んでいるということは\n　ifはtrueだったということです」\n";
} else {
    echo "「この文章をあなたが読んでいるということは\n　ifはfalseだったということです」\n";
}

//
$age = 20;
echo "君は";
if ($age >= 20) {
    echo "成人です";
}
if ($age < 20) {
    echo "未成年です";
}
echo "よ\n";

// 
$age = 19;
echo "あなたは";
if ($age >= 20) {
    echo "成人です";
} else {
    echo "未成年です";
}
echo "ね？\n";

// 
$age = 20;
echo "あなたは";
if ($age > 20) {
    echo "とっくに成人";
} else if ($age === 20) {
    echo "ようやく成人";
} else {
    echo "いまだに未成年";
}
echo "だよ。\n";