<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php 
$list = [
    0 => ['goods_name'=>'小米 6',   'goods_price'=>1999, 'goods_color'=>'绿色'],
    1 => ['goods_name'=>'华为 P20', 'goods_price'=>5499, 'goods_color'=>'蓝色'],
    2 => ['goods_name'=>'iPhone X', 'goods_price'=>8399, 'goods_color'=>'黑色'],
];
?>

<table border="1" width="600">
    <thead>
        <tr>
        <th>商品名称</th>
        <th>商品价格</th>
        <th>商品颜色</th>
        </tr>
    </thead>
    <tbody>
       <?php foreach ($list as $value) { ?>
        <tr>
        <td><?php echo $value['goods_name']; ?></td>
        <td><?php echo $value['goods_price']; ?></td>
        <td><?php echo $value['goods_color']; ?></td>
        </tr>
       <?php } ?>
    </tbody>


</table>
</body>
</html>