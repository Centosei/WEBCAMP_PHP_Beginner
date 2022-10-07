<?php
// continue
echo "\n-----continueの確認-----\n";
echo "MR.FOR : 奇数か偶数か確認していこう\n";
for($i = 0; $i < 10; ++$i) {
    echo "MR.FOR : {$i}は奇数かな？\n";
    if ( ($i % 2) === 1 ) {
        echo "MR.ECHO: たぶん{$i}は奇数ですな\n";
        continue;
    }
    echo "MR.ECHO: {$i}、こいつぁ、どうやら偶数って感じですぜ\n";
}
echo "MR>FOR : ご苦労。君がいて助かったよ\n";

// break
echo "\n-----breakの確認-----\n";
$i = 0;
while($i < 10) {
    echo "{$i} \n";
    //
    if ($i >= 5) {
        // ループを抜ける
        echo "{$i}なのでループを抜けます\n";
        break;
    }
    //
    ++$i;
}