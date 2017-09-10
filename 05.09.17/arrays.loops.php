<?php
// task 1
echo '<pre>';
echo '<h2>TASK1</h2>'.PHP_EOL;
$n= 7;
for ($i=1 ;$i <=$n; $i++ ) {
    echo $i;
    echo'=Silence is Golden' .PHP_EOL;
}
//task 2
//for
echo '<h2>TASK2</h2>'.PHP_EOL;
$n=150;
$sum=0;
for ($i=1;$i<=$n;$i++){
    $sum=$sum+$i;
}
echo 'Сумма всех чисел равна(for)  ',$sum.PHP_EOL;
//while
$n=150;
$sum=0;
$i=1;
while ($i<=$n){
    $sum=$sum+$i;
    $i++;
}
echo 'Сумма всех чисел равна (while) ',$sum .PHP_EOL;
//task 3
echo '<h2>TASK3</h2>'.PHP_EOL;
$n=200;
for ($i=1;$i<=$n;$i++){
    echo $i.' '.PHP_EOL;
}
//task 4
//for
echo '<h2>TASK4</h2>'.PHP_EOL;
$n=1;
for ($i=200;$i>=$n;$i--){
    echo $i.PHP_EOL;
}
echo '<br>';
//while
$n=1;
$i=200;
while ($i>=$n) {
    echo $i,' '.PHP_EOL;
    $i--;
}
echo '<br>';
//foreach
$a=range(200,1);
foreach ($a as $key=>$value){
    echo $value.PHP_EOL;
}
//task 5
echo '<h2>TASK5</h2>'.PHP_EOL;
//for
$n=50;
$mult=1;
for ($i=1;$i<=$n;$i++) {
    $mult = $mult * $i;
}
echo $mult.PHP_EOL;
//foreach
$mult=1;
$a=range(1,50);
foreach ($a as $value){
    $mult=$mult * $value;
}
echo $mult.PHP_EOL;
//Task 6
echo '<h2>TASK6</h2>'.PHP_EOL;
//for
$n=1000;
$ostatok1=0;
$ostatok2=0;
for ($i=1;$i<=$n;$i++){
    $ostatok1=$i%3;
    $ostatok2=$i%5;
    if ($ostatok1==0 and $ostatok2==0){
        echo $i.PHP_EOL;
    }

}
//while
$i=1;
$n=1000;
while ($i<$n) {
    $ostatok1 = $i % 3;
    $ostatok2 = $i % 5;

    if ($ostatok1==0 and $ostatok2==0){
        echo $i.PHP_EOL;
    }
     $i++;
}
echo '<h2>TASK7</h2>'.PHP_EOL;
//Task 7
$count=0;
$happy=0;
$all=0;
for($i=100000; $i<=999999; $i++){
    $num = (string)$i;
    if($num[0]+$num[1]+$num[2] == $num[3]+$num[4]+$num[5]) {
        print_r($i.PHP_EOL);
        $count++;
    }
          $all++;
}
   $happy=($count/$i)*100;
   echo'Сумма всех билетов:' ,$all,'<br />Всего счастливых: ' . $count,'<br />Процент Счастливых: ',$happy.PHP_EOL;


echo '<h2>TASK8</h2>'.PHP_EOL;
 //Task 8 (for)
 $arr=array();
 $n=50;
for($i = 0; $i < $n; $i++) {
   $arr[]= $i & 1;
}
print_r($arr).PHP_EOL;
//Task 8 (while)
$arr=array();
$n=50;
$i=0;
while($i < $n){
    $arr[]=$i & 1;
    $i++;

}
print_r($arr).PHP_EOL;

echo '<h2>TASK9</h2>'.PHP_EOL;
//Task 9
$arr=array();
$n=50;
for ($i=0;$i<$n;$i++){
    $arr[$i]=$i*$i;

}
print_r($arr).PHP_EOL;

echo '<h2>TASK10</h2>'.PHP_EOL;
//Task 10
$arr1=range(1,17);
$arr2=range(5,20);
$arr3=array_merge($arr1,$arr2);
sort($arr3);
print_r($arr3);

echo '<h2>TASK11</h2>'.PHP_EOL;
//Task 11
(string)$n=789456;
$num=strrev($n);
print_r($n);
echo ' ';
if (isset($num[5])){
switch ($num[5]){
    case(0):
        echo ' ';
        break;
    case(1):
        echo 'сто ';
        break;
    case(2):
        echo 'двести ';
        break;
    case(3):
        echo 'триста ';
        break;
    case(4):
        echo 'четыреста ';
        break;
    case(5):
        echo 'пятьсот ';
        break;
    case(6):
        echo 'шестьшот ';
        break;
    case(7):
        echo 'семьсот ';
        break;
    case(8):
        echo 'восемьсот ';
        break;
    case(9):
        echo 'девятьсот ';
        break;
}
}
if ( isset($num[4]) and $num[4]==1){
    switch ($num[3]){
        case(0):
            echo ' десять ';
            break;
        case(1):
            echo ' одиннадцать ';
            break;
        case(2):
            echo ' двенадцать ';
            break;
        case(3):
            echo ' тринадцать ';
            break;
        case(4):
            echo ' четырнадцать ';
            break;
        case(5):
            echo ' пятнадцать ';
            break;
        case(6):
            echo ' шестнадцать ';
            break;
        case(7):
            echo ' семнадцать ';
            break;
        case(8):
            echo ' восемнадцать ';
            break;
        case(9):
            echo ' девятнадцать ';
            break;
    }
    echo 'тысячь  ';

}
else {
if (isset($num[4])) {
    switch ($num[4]) {
        case(0):
            echo ' ';
            break;
        case(1):
            echo 'десять ';
            break;
        case(2):
            echo 'двадцать ';
            break;
        case(3):
            echo 'тридцать ';
            break;
        case(4):
            echo 'сорок ';
            break;
        case(5):
            echo 'пятьдесят ';
            break;
        case(6):
            echo 'шестьдесят ';
            break;
        case(7):
            echo 'семьдесят ';
            break;
        case(8):
            echo 'восемьдесят ';
            break;
        case(9):
            echo 'девяносто ';
            break;
    }
}
if (isset($num[3])) {
    switch ($num[3]) {
        case(0):
            echo ' ';
            break;
        case(1):
            echo 'одна ';
            break;
        case(2):
            echo 'две ';
            break;
        case(3):
            echo 'три ';
            break;
        case(4):
            echo 'четыре ';
            break;
        case(5):
            echo 'пять ';
            break;
        case(6):
            echo 'шесть ';
            break;
        case(7):
            echo 'семь ';
            break;
        case(8):
            echo 'восемь ';
            break;
        case(9):
            echo 'девять ';
            break;
    }
}
echo 'тысячь  ';
}
if (isset($num[2])){
switch ($num[2]) {
    case(0):
        echo ' ';
        break;
    case(1):
        echo 'сто ';
        break;
    case(2):
        echo 'двести ';
        break;
    case(3):
        echo 'триста ';
        break;
    case(4):
        echo 'четыреста ';
        break;
    case(5):
        echo 'пятьсот ';
        break;
    case(6):
        echo 'шестьшот ';
        break;
    case(7):
        echo 'семьсот ';
        break;
    case(8):
        echo 'восемьсот ';
        break;
    case(9):
        echo 'девятьсот ';
        break;
}
}
if ( isset($num[1])and $num[1]==1){
    switch ($num[0]){
        case(0):
            echo ' десять ';
            break;
        case(1):
            echo ' одиннадцать ';
            break;
        case(2):
            echo ' двенадцать ';
            break;
        case(3):
            echo ' тринадцать ';
            break;
        case(4):
            echo ' четірнадцать ';
            break;
        case(5):
            echo ' пятнадцать ';
            break;
        case(6):
            echo ' шестнадцать ';
            break;
        case(7):
            echo ' семнадцать ';
            break;
        case(8):
            echo ' восемнадцать ';
            break;
        case(9):
            echo ' девятнадцать ';
            break;
    }
}
else{
if (isset($num[1])){
switch ($num[1]){
    case(0):
        echo '';
        break;
    case(2):
        echo 'двадцать ';
        break;
    case(3):
        echo 'тридцать ';
        break;
    case(4):
        echo 'сорок ';
        break;
    case(5):
        echo 'пятьдесят ';
        break;
    case(6):
        echo 'шестьдесят ';
        break;
    case(7):
        echo 'семьдесят ';
        break;
    case(8):
        echo 'восемьдесят ';
        break;
    case(9):
        echo 'девяносто ';
        break;
}
}
if (isset($num[0])){
switch ($num[0]) {
    case(0):
        echo ' ';
        break;
    case(1):
        echo 'один ';
        break;
    case(2):
        echo 'два ';
        break;
    case(3):
        echo 'три ';
        break;
    case(4):
        echo 'четыре ';
        break;
    case(5):
        echo 'пять ';
        break;
    case(6):
        echo 'шесть ';
        break;
    case(7):
        echo 'семь ';
        break;
    case(8):
        echo 'восемь ';
        break;
    case(9):
        echo 'девять ';
        break;
}
}
}
echo '<h2>TASK12</h2>'.PHP_EOL;
//Task 12
$arr=range('A','Z');
foreach($arr as $key=>$value) {
    if ($key % 2 != 0) {
        echo "$key - $value" . PHP_EOL;
    }
}


?>



































