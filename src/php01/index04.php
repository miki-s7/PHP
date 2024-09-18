<?php

$a = 5;
if( $a === 5 ){
    echo "\$aは5です";// 真の時に実行される処理
}

echo "<br />";
echo "<br />";

$aa = 7;
if( $aa === 5 ){
    echo "\$aaは5です";// 真の時に実行される処理
}else{
    echo "\$aaは5以外です";// 偽の時に実行される処理
}

echo "<br />";
echo "<br />";

$aaa = 7;
if( $aaa === 5 ){
    echo "\$aaaは5です";// 真の時に実行される処理
}elseif($aaa === 7 ){
    echo "\$aaaは7です";// 偽の時に実行される処理
}else {
    echo "\$aaaは5と7以外です";
}

echo "<br />";
echo "<br />";

$people = "Saburo";
switch($people){
    case "Saburo";
    echo "三郎です";
    break;
}

echo "<br />";
echo "<br />";

$aaaa = 7;
$b = ($aaaa === 7) ? "TRUE" : "FALSE";
echo $b;