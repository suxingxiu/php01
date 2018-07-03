<?php 

    header('content-type:text/html;charset=utf-8');

    $list=[
        0=>['goods_name'=>'小米','goods_color'=>'红色','goods_price'=>'2300'],
        1=>['goods_name'=>'oppo','goods_color'=>'黑色','goods_price'=>'3400'],
        2=>['goods_name'=>'魅族','goods_color'=>'蓝色','goods_price'=>'3200'],
    ];

    echo "<table border='1' width='600'>";
    echo "<thead><tr>";
    echo "<th>商品名称</th><th>商品颜色</th><th>商品价格</th>";
    echo "</tr></thead>";
    echo"<tbody>";
    foreach ($list as $value){
    echo'<tr><td>'.$value['goods_name'].'</td><td>'.$value['goods_color'].'</td><td>'.$value['goods_price'].'</td></tr>';
}
    echo"</tbody>";
    echo "</table>";
?>