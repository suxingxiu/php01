<?php

header('content-type:text/html;charset=utf-8');
    //声明关联数组  下标是字符串

    $arr1 = ['name'=>'张三','age'=>45,'gender'=>'女'];
    $arr2 = ['goods_name'=>'oppo r9',
            'goods_price'=>2500,
            'goods_color'=>'红色'  
];
    // 读取
    echo $arr1['name'].'<br>';
    echo $arr2['goods_color'].'<br>';

    //写
    $arr1['name']='女神龙';
    $arr2['goods_price']='3400';
    
    echo $arr1['name'].'<br>';
    echo $arr2['goods_price'].'<br>';

    print_r($arr1);
    print_r($arr2);


?>