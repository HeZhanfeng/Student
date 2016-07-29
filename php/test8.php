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

    //使用sql创建表
    // $sql = "CREATE TABLE info(
    //     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     firstname VARCHAR(30) NOT NULL,
    //     lastname VARCHAR(30) NOT NULL,
    //     email VARCHAR(50),
    //     reg_date TIMESTAMP
    // )";
    //检查是否创建成功！
    // if ($conn->query($sql)===TRUE) {
    //     echo "创建成功！";
    // } else {
    //     echo "创建数据表错误：".$conn->error;
    // }
    //插入
    // $sql = "INSERT INTO MyGuests (firstname,lastname,email)
    // VALUES('John','Doe','join@example.com')";
    // //执行上面的sql语句
    // $conn->query($sql);

    // $sql = "INSERT INTO MyGuests(firstname,lastname,email)
    // VALUES('占峰','贺','993134187@qq.com')";
    // $sql = "INSERT INTO MyGuests(firstname,lastname,email)
    // VALUES('三','张','12345678@sds.com')";
    // //执行多条sql语句
    // $conn->multi_query($sql);

    $sql = "INSERT INTO info select * from MyGuests";
    $conn->query($sql);
    $sql = "INSERT INTO info (firstname) VALUES select *from MyGuests where lastname='Doe'";
    $conn->query($sql);
    //关闭连接
    $conn->close(); 
    //PDO连接
    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        echo "PDO连接成功！";
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
    //关闭数据库连接
    $conn = null;
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP 数据库练习</title>
</head>
<body>
    
</body>
</html>