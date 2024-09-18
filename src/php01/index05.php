<?php
for ($i = 1; $i<=5; $i++) {
    echo $i*2;
}

echo '<br />';
echo '<br />';

$count = 0;

while ($count<20) {
    $count += 1;
    echo $count;
}

echo '<br />';
echo '<br />';

$i = 0;
while ($i < 10) {
  if ($i == 5) {
    break;
    // $iが5の時、ループから抜ける。
  }
  echo $i;
  $i++;
}

echo '<br />';
echo '<br />';

while ($i < 10) {
  if ($i == 5) {
    $i++;
    continue;
    // $iが5の時、$iに1を足す処理をし、スキップをする。
  }
  echo $i;
  $i++;
}

echo '<br />';
echo '<br />';

$count = 0;

while ($count <= 100) {
    if ($count === 20) {
        break;
    }
    if ($count % 3 === 0) {
        $count++;
        continue;
     }
    echo $count;
    $count++;
}

echo '<br />';
echo '<br />';

$num = 0;
do {
  echo 'num = ' . $num . '<br />';
  $num+=1;
} while ($num < 3);

echo '<br />';
echo '<br />';

for ($num1 = 1; $num1<=50; $num1++) {
    if($num1% 3 === 0){
        echo 'Fizz' . '<br />';
    }elseif($num1 % 5 === 0){
        echo 'Buzz' . '<br />';
    }elseif($num1 % 3 === 0 && $num1 % 5 === 0){
        echo 'FizzBuzz' . '<br />';
    }else{
        echo $num1 . '<br />';
    }
}

echo '<br />';
echo '<br />';

for ($num2 = 1; $num2 < 6; $num2++) {
    for ($num3 = 1; $num3 < 6; $num3++){
        echo "●";
    }
    echo '<br />';
}