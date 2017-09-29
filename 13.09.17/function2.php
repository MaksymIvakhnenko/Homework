<?php
echo '<pre>';
echo '<h1>Task1</h1>'.PHP_EOL;
//1
$arr1=array('one', 'two', 'three', 'four', 'five', 'six');
uksort($arr1, function ($a,$b){
    if ($a == $b )return 0  ;
    return ($b - $a) == 1 ? 1 : 0;
});
print_r($arr1);
//
echo '<h1>Task2</h1>'.PHP_EOL;
//2
$arr2=range(1,250);
$arr_s=array_filter($arr2,function ($i){
    if($i%2 == 0 && $i%3 == 0 && $i%5 == 0){
        return $i;
}
else{return 0;}
});
print_r($arr_s);
//
echo '<h1>Task3</h1>'.PHP_EOL;
//3

$str3 = 'Walks Straight walked numbly through the destruction. Nothing left, no one alive';
$str3=explode(' ',$str3);
$str3=str_replace(array('.',','),'',$str3);
usort($str3,function ($x,$y) {
    $x = strlen($x);
    $y = strlen($y);
    if ($x > $y) return 1;
    else return 0;
});
print_r($str3);
//
echo '<h1>Task4</h1>'.PHP_EOL;
//4
function sayHello(string $name){
    static $count = 0;
    echo 'Привет,',$name.PHP_EOL;
    echo'Всего поздоровались ',++$count,' раз'.PHP_EOL;
}
sayHello('Роман');
sayHello('Владимир');
sayHello('Юрий');
sayHello('Виктория');
sayHello('Мария');
//
echo '<h1>Task5</h1>'.PHP_EOL;
//5
function average(int $num){
    static $numerator = 0;
    static $denominator= 0;
    $denominator++;
    $numerator = $num + $numerator;
    return $numerator/$denominator;
}
echo average(1).PHP_EOL;
echo average(5).PHP_EOL;
echo average(3).PHP_EOL;
echo average(31).PHP_EOL;
//
echo '<h1>Task6</h1>'.PHP_EOL;
//6
$str6='qwertytrewq';

function palindrom(string $str)
{
    if ((strlen($str)== 1)  or (strlen($str) == 0)){
        echo 'ДА';}
    else {if (substr($str,0,1) == substr($str,(strlen($str)-1),1)){
             return palindrom(substr($str,1,strlen($str)-2));}
        else {echo 'Нет';}}
}
echo 'Слово палиндром-',palindrom($str6);

//
echo '<h1>Task7</h1>'.PHP_EOL;
//7
$n = 0;
function number_reverse(int $n,int $i=0 ){
    if($n === 0){
        return $i;
    }
    else{return number_reverse($n/10,($i*10 + $n%10));}
}
echo number_reverse(456789)
?>