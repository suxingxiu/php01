<?php 
header('content-type:text/html;charset=utf-8');
    $hour=10;
    if(0<$hour && $hour<=6){
        echo "早上好";
    }else if(6<$hour && $hour<=12){
        echo"中午好";
    }else if(12<$hour && $hour<=18){
        echo"下午好";
    }else if(18<$hour && $hour<24){
        echo"晚上好";
    }



?>