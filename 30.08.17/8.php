<?php

$age ='j';
if ($age>=18 & $age<=59) {

    echo 'Вам еще работать и работать';
}
elseif ($age>59) {

    echo 'Вам пора на пенсию';
}
elseif ($age>0 & $age<=17 or $age===0) {

    echo 'Вам еще рано работать';
}
else {
    echo 'Неизвестный возраст';
};
?>