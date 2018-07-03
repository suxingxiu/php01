<?php 
    header('content-type:text/html;charset=utf-8');

    //同质 数据差不多是一个样

    $list = [
        0=>['goods_name'=>'iphone','goods_color'=>'red'],
        1=>['goods_name'=>'oppo','goods_color'=>'玫瑰金'],
        2=>['goods_name'=>'xiaomi','goods_color'=>'白色']
    ];
    //遍历
    foreach($list as $value){//$value数组$list的每个单元的值

        echo $value['goods_name'].$value['goods_color'].'<br>';
    }


?>