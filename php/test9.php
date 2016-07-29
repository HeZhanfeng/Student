<?php 
    header("Content-Type:text/html;Charset=utf-8");
    $servername = "rdsfqu7bij3y7zipublic.mysql.rds.aliyuncs.com";
    $username = "kcn";
    $password = "xian2016";
    $dbname = "study";

    //创建连接(mysqli)
    $conn = new mysqli($servername, $username, $password,$dbname);
    //检测连接
    if ($conn->connect_error) {
        die("连接失败：". $conn->connect_error);
    }
    echo "mysqli连接成功！<br>";   

    //预处理及绑定
    $stmt = $conn->prepare("INSERT INTO MyGuests (firstname,lastname,email) VALUES (?,?,?)");
    $stmt->bind_param("sss", $firstname, $lastname, $email);

    //设置参数并执行
    $firstname = "KCN";
    $lastname = "HZF";
    $email = "993134187@qq.com";
    $stmt->execute();

    $firstname = "四";
    $lastname = "李";
    $email = "993134@qq.com";
    $stmt->execute();

    $firstname = "五";
    $lastname = "王";
    $email = "3134187@qq.com";
    $stmt->execute();

    echo "新记录插入成功";

    $stmt->close();
    $conn->close();
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php预处理练习</title>
</head>
<body>
    
</body>
</html>