<?php
echo '<pre>';
echo '<h2>TASK 1</h2>'.PHP_EOL;
//1
$str1='dfjgojghjgh !@# bfdbdbsdsttrrykmf 223srtyj645 bbkkndvnbn bb;dfb  nngbvbc56vcvcvfd:  bbddbmtt;fgnbrep #($fdfd(#( 32dfdf3 bfpdfdjrjgi';
echo $q=substr_count($str1,' b').PHP_EOL;

echo '<h2>TASK 2</h2>'.PHP_EOL;
//2
$str2='dfjgojghjgh !@# bfdbdbsdsttrrykmf 223srtyj645 bbkkndvnbn bb;dfb  nngbvbc56vcvcvfd:  bbddbmtt;fgnbrep #($fdfd(#( 32dfdf3 bfpdfdjrjgi';
$arr=array(
    substr_count($str2,'r'),
    substr_count($str2,'k'),
    substr_count($str2,'t')
);
print_r($arr).PHP_EOL;

echo '<h2>TASK 3</h2>'.PHP_EOL;
$str3='dfjgojghjgh !@# bfdbdbsdsttrrykmf 223srtyj645 bbkkndvnbn bb;dfb  nngbvbc56vcvcvfd:  bbddbmtt;fgnbrep #($fdfd(#( 32dfdf3 bfpdfdjrjgi';
$arr=explode(' ',$str3);
$arr1=array_filter ($arr);
foreach ($arr1 as &$value){
    $value= strlen($value);
}
$max=max($arr1);
$min=min($arr1);
echo'Длинна самого длинного слово ', $max,'<br>','Длинна самого короткого слова ',$min.PHP_EOL;

echo '<h2>TASK 4</h2>'.PHP_EOL;
//4
$str4='dfjgojghjgh !@# bfdbdbsdsttrrykmf 223srtyj645 bbkkndvnbn: bb;dfb  nngbvbc56vcvcvfd  bbddbmtt;fgnbrep #($fdfd(#( 32dfdf3 bfpdfdjrjgi';
echo $q= stripos($str4,':').PHP_EOL;

echo '<h2>TASK 5</h2>'.PHP_EOL;
//5
$str5='abc dfs fg;f gldgmb sgaksdbabc abcsargndnb sdabc psdfabc';
echo $q=substr_count($str5,'abc').PHP_EOL;

echo '<h2>TASK 6</h2>'.PHP_EOL;
//6
$str6='dfjgaojghgjgh !@# bfdbdbsdstbtfrrykmf 223srtyj645 bbekkcndvnbnd: bb;dfb lmnop qrstuvwxyz  nnigbvbch56vkcvcvfd  bbddgbmtt;fgnbrep #($fdfd(#( 32dfdf3 bfpdfdjrjgi';
print_r($q = str_split(count_chars($str6,3))).PHP_EOL;

echo '<h2>TASK 7</h2>'.PHP_EOL;
//7
$str7='This is aa looppool while bob   the example @#dfj 4556 #!)# dsgkfk; : fsdg: sg; sdgf:af235;; sdg;;dsf;';
$arr7=array_filter(explode(' ',$str7));
foreach ($arr7 as $key=>$value){
    if($value[0] == $value[strlen($value)-1])
    echo $value.PHP_EOL;
}

echo '<h2>TASK 8</h2>'.PHP_EOL;
//8
$str8='This is: a looppool while: the example: @#dfj 4556 #!)# dsgkfk : fsdg: sg sdgf:af235 sdgdsf';
echo str_replace(':',';',$str8,$count).PHP_EOL;
echo'Количество замен - ',$count.PHP_EOL;

echo '<h2>TASK 9</h2>'.PHP_EOL;
//9
$str9='bear 48 ta9il read13 bl0b';
$str9=preg_replace('/[^0-9\s]/','',$str9);
$arr9=explode(' ',$str9);
foreach ($arr9 as $key=>$value){
    if($value==''){
        unset($arr9[$key]);
    }
}
print_r($arr9);

echo '<h2>TASK 10</h2>'.PHP_EOL;
//10
$str10='The big clock on the tower of the Palace of Westminster in London is often called Big Ben.';
$up=preg_replace('/[^A-Z]/','',$str10);

$low=preg_replace('/[^a-z]/','',$str10);

if(strlen($up)>strlen($low)){
    echo strtoupper($str10).PHP_EOL;
}
elseif (strlen($up)<strlen($low)){
    echo strtolower($str10).PHP_EOL;
}
else{
    echo $str10.PHP_EOL;
}

echo '<h2>TASK 11</h2>'.PHP_EOL;
//11
$str11 = 'lollol';
$i= strrev($str11);
if ($i == $str11) {
    echo $str11 . ' - это слово палиндром'.PHP_EOL;
}

echo '<h2>TASK 12</h2>'.PHP_EOL;
//12
$str12='tset ti ro eid';
$arr12=explode(' ',$str12);
foreach ($arr12 as &$value){
    $value =strrev($value);
}
print_r(implode(' ',$arr12));

echo '<h2>TASK 13</h2>'.PHP_EOL;
//13
$str13='The big clock on the tower of the Palace of Westminster in London is often called Big Benaaaaaaaaaaaaaaaaaaaa.';
$vowel=preg_replace('/[^a, i, u, e, o, y]/i','',$str13);
$consonant=preg_replace('/[^q, w, r, t, p, s, d, f, g, h, j, k, l, z, x, c, v, b, n, m]/i','',$str13);

if(strlen($consonant)<strlen($vowel)){
    echo '<h5>Больше гласных</h5>'.PHP_EOL;
}
elseif (strlen($consonant)>strlen($vowel)){
    echo '<h5>Больше согласных</h5>'.PHP_EOL;
}
else {
    echo '<h5>Одинаково</h5>'.PHP_EOL;
}
echo strlen($consonant),'-Количесвто согласных'.PHP_EOL;
echo strlen($vowel),'-Количество гласны'.PHP_EOL;



echo '<h2>TASK 14</h2>'.PHP_EOL;
//14
$arr14=array(
    0=> 'Бабушкин А.О.',
    1=> 'Эддингтон В.Ю.',
    2=> 'Капица А.А.',
    3=> 'Бабушкин В.В.',
    4=> 'Михалков К.Е.',
    5=> 'Павлов М.В.',
    6=> 'Дункан В.К.',
    7=> 'Бабушкин П.С.',
    8=> 'Гинзбург В.В',
    9=> 'Песков С.С.',
    10=> 'Любарская Т.А.',
    11=> 'Звягинцев В.В.',
    12=> 'Бабушкина Н.Н.',
    13=> 'Любарский В.Н.',
    14=> 'Вишневский К.К.',
    15=> 'Вишневская М.А.',
    16=> 'Песков Г.Е.',
    17=> 'Михалкова К.Е.',
);
foreach ($arr14 as &$value){
    $value=strstr($value,' ',true);
    echo $value .PHP_EOL;
}
print_r(array_count_values($arr14=preg_replace("[ий|ая|а$]i",'',$arr14)));




?>
