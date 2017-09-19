<?php
echo '<pre>';
echo '<h2>Task 1</h2>'.PHP_EOL;
//1
function power($num,$power)
{ if ($power===0){
      $result=1;}
    else{
        $result = $num;
        for($i = 1;$i < $power;$i++){
        $result *= $num;
        }
       }
    return $result;
}
echo power(3,2);

echo '<h2>Task 2</h2>'.PHP_EOL;
//2
function array_create($start,$end,$length)
{
    $result = array();
    for ($i = 0; $i < $length; $i++) {
        $result[$i] = random_int($start, $end);
    }
    return $result;
}
$arr2=array_create(1,12,6);
print_r($arr2);

echo '<h2>Task 3</h2>'.PHP_EOL;
//3
function sum($arr=array())
{  $sum=0;
  foreach ($arr as $value){
      $sum += $value;
  }
    return $sum;

}
$a=sum($arr2);
print_r($a);



echo '<h2>Task 4</h2>'.PHP_EOL;
//4
$max=0;
$maxarray=array();
for ($i = 0;$i < 10;$i++){
    $$i=array_create(1,12,6);
    $sum = sum($$i);
    if($sum>$max){
        $max=$sum;
        $maxarray=$$i;
        }
    }

echo 'Сумма элемнтов массива-',$max.PHP_EOL;
print_r($maxarray);

echo '<h2>Task 5</h2>'.PHP_EOL;
//5
$str5='hello world';
function_str($str5);
print_r($str5);
function function_str(&$str5)
{
    $str5.= ' functioned!';
}

echo '<h2>Task 6</h2>'.PHP_EOL;
//6
$n = 1;
recursive_number(100);
function recursive_number($num)
{
    if ( $num >= 1){
        recursive_number($num-1);
        echo ($num)." ";
    }

}
