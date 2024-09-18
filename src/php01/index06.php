<?php
//引数と戻り値あり
function outputNumber($a)
{
  echo "引数の値は" . $a . "です";
  return;
}

outputNumber(2);

echo '<br />';
echo '<br />';

//引数と戻り値なし
function outputHello()
{
  echo "Hello world";
}

outputHello(); // ①

echo '<br />';
echo '<br />';

function text($num1, $num2)
{
  $value = $num1 + $num2;
  return $value;
}

$total = text(2, 3);
echo $total;

echo '<br />';
echo '<br />';

function num($score1, $score2, $score3)
{
    $add = $score1 + $score2 + $score3;
    if ($add > 210){
        echo "合計点は" . $add . "なので合格です";
    }else{
        echo "合計点は" . $add . "なので不合格です";
    }
}

echo (num(60, 50, 90));

echo '<br />';
echo '<br />';

function square($a, $b){
    return $a*$b .'<br />';
}
function triangle($a, $b){
    return $a*$b/2 .'<br />';
}
function trapezoid($a, $b, $c, $d){
    return ($c+$d)*$b/2 .'<br />';
}
echo square(3, 4);
echo triangle(5, 6);
echo trapezoid(8, 7, 4, 2);