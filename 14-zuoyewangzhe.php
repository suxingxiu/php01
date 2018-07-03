<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    *{ 
    margin:0;
    padding:0;   
    list-style: none; 
}

a{
    text-decoration: none; 
}

.header{
    height: 160px;
    background: #ddd;
    font-size: 60px;
    text-align: center;
    line-height: 160px;      
    margin-bottom: 10px;
}

.container{
    width: 80%;
    background: #eee;
    margin:0 auto;
}

.container > p{
    background-color: rgba(100, 100, 100, 0.7);
    line-height: 50px;
    text-align: center;
    font-size: 20px;
}

.container p a{
    margin: 30px;
    color:#fff;
}

.container ul{
    margin-top: 15px;
    overflow: hidden;
}

.container ul>li{
    float: left;
    width: 25%;
    padding:10px;
    padding-bottom: 0;
    text-align: center;
    box-sizing: border-box;
}

.container ul>li img{
    width: 100%;
}

.footer{
    height: 120px;
    margin-top: 10px;
    background-color: #ddd;   
    text-align: center;
    line-height: 120px;      
}
    </style>
</head>
<body>
    <?php 
    $list=[
        0=>['href'=>'./img/1.jpg','src'=>'./img/1.jpg','name'=>'妲己','size'=>'1920*1080'],
        1=>['href'=>'./img/21.jpg','src'=>'./img/2.jpg','name'=>'妲己','size'=>'1920*1080'],
        2=>['href'=>'./img/3.jpg','src'=>'./img/3.jpg','name'=>'妲己','size'=>'1920*1080'],
        3=>['href'=>'./img/4.jpg','src'=>'./img/4.jpg','name'=>'妲己','size'=>'1920*1080'],
        4=>['href'=>'./img/5.jpg','src'=>'./img/5.jpg','name'=>'妲己','size'=>'1920*1080'],
        5=>['href'=>'./img/6.jpg','src'=>'./img/6.jpg','name'=>'妲己','size'=>'1920*1080'],
        6=>['href'=>'./img/7.jpg','src'=>'./img/7.jpg','name'=>'妲己','size'=>'1920*1080']
    ];
    
    ?>

    <div class="header">
        王者荣耀精美壁纸
    </div>
    <div class="container">
        <p>
            <a href="javascript:;">射手</a>
            <a href="javascript:;">法师</a>
            <a href="javascript:;">刺客</a>
            <a href="javascript:;">战士</a>
        </p>   
        <ul>
        <?php foreach($list as $value) { ?>
            <li>
                <a href="<?php echo $value['href'];?>">
                <img src="<?php echo $value['src'];?>">
                <?php echo $value['name'].$value['size'];?></a>
            </li>  
            <?php } ?>    
        </ul>
    </div>
    <div class="footer">
        传智播客 版权所有
    </div>

</body>
</html>