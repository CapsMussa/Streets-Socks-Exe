<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Srore-Socks</title>
    <style>
        body{
            margin:0px;
        }
        .header{
            width:100%;
            height:100px;
            background: rgba(52,141,255,0.87);
        }
        .href{
            float: left;
            text-decoration: none;
           margin-top:40px;
            margin-left:50px;
            font-size: 20px;
            color:#fff;

        }
.block{
    float:left;
    padding: 5px;
    margin-top:25px;
    margin-left:25px;
    width:200px;
    height:300px;
    box-shadow: 0px 0px 3px #555;
}
.block:hover{
    box-shadow: 0px 0px 10px black;
}

.img{
    float:left;
    width:200px;
    height:200px;
    background: #555;
}
.sub{
    float: left;
    margin-top: 5px;
    width:200px;
    height: 50px;
    text-align: center;
    color: #555;
    font-size: 14px;
}
.submit {
    margin-top: 10px;
    width: 150px;
    height: 30px;
    background: rgba(52, 141, 255, 0.87);
    border: 0px solid #fff;
    color: #fff;
    font-size: 14px;
    border:0px solid red;
}
.submit:hover{
    height: 30px;
    border-bottom:2px solid #777;
}

    </style>
</head>
<body>
<div class="header">
    <a href="/" class="href">Главная</a>
</div>

<?php include 'bd/id/1.php'; ?>



</body>
</html>

<?php

//массив
// id товара
// описание товара (размер)
//цена