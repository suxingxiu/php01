<?php 
header('content-type:text/html;charset=utf-8');
        $list = [
            0=>['goods_name'=>'iphone','goods_color'=>'red'],
            1=>['goods_name'=>'oppo','goods_color'=>'玫瑰金'],
            2=>['goods_name'=>'xiaomi','goods_color'=>'白色']
        ];
        //遍历

        //第一种写法
            foreach($list as $key=>$value){
                //$key就是索引/键  $value是值
                echo $value['goods_name'].$value['goods_color'].'<br>';
            }

        //第二种写法
        foreach($list as $value){//$value数组$list的每个单元的值
    
            echo $value['goods_name'].$value['goods_color'].'<br>';
        }


?>