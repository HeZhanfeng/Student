<?php 
    header("Content-Type:text/html;Charset=utf-8");
    $expire=time()+60*60*24*30;
    setcookie("user","KCN",$expire);

    //输出cookie的值
    echo @$_COOKIE["user"]."<br>";

    //查看所有cookie
    //print_r($_COOKIE);

    //使用isset()函数来确认是否已经设置了cookie
    if (isset($_COOKIE["user"])) {
        echo "欢迎 " . $_COOKIE["user"] . "<br>";
    }
    else{
        echo "普通访客！<br>";
    }

    //删除cookie时，使用过去的时间点
    //setcookie("user","KCN",time-3600);
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php的cookie练习</title>
</head>
<body>
    
</body>
</html>