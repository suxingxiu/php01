<?php 
    header('content-type:text/html;charset=utf-8');

    //求1-100的和

    $sum=0;
    for($i=0;$i<=100;$i++){
        $sum +=$i;
    }
    echo $sum;

?>