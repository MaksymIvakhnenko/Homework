<?php
 $Distance=570;
 $Hours=8;
 $Speed= $Distance/$Hours;

 echo 'Distance= ',$Distance,' km <br>','Hours= ',$Hours,' h<br>','Speed= ',$Speed,' km/h=' ,
 round($Speed*1000/3600,2),  ' m/s';



?>
