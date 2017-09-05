<?php
$a=800;
$b=156;
$operator='/';
$result=0;

switch ($operator){
    case('+'):
        $result=($a+$b);
        break;
    case('-'):
        $result=($a-$b);
        break;
    case('*'):
        $result=($a*$b);
        break;
    case('/'):
        if ($b==0){
         $result = 'На ноль делить нельзя';
        }
        else {
         $result=($a/$b);
        }
        break;
    case('%'):
        if ($b==0){
            $result = 'На ноль делить нельзя';
        }
        else {
            $result=($a%$b ) ;
        }
        break;
    default : $result = 'Неизвестный оператор';

}

echo 'Переменная А= ',$a,'<br>';
echo 'Переменная Б= ',$b,'<br>';
echo 'Оператор= ',$operator,'<br>';
echo 'Результат= ',$result,'<br>';


?>