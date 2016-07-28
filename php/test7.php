<?php 
    header("Content-Type:text/html;Charset=utf-8");
    $int = 222;
    $min = 1;
    $max = 200;
    $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
    //filter_var()函数 来检测一个INT型的变量是否在min-max之内。
    if (filter_var($int,FILTER_VALIDATE_INT,array("options" =>array("min_range" =>$min,"max_range" =>$max)))===false) {
        echo ("变量不在合法范围内。");
    } else {
        echo ("变量值在合法范围内。");
    }
    //检查$ip变量是不是IPV6地址
    if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
        echo ("$ip 是一个IP6地址");
    } else {
        echo("$ip 不是一个IP6地址");
    }
    
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>过滤练习</title>
</head>
<body>
    
</body>
</html>