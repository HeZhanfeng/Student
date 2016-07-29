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

    $sql = "SELECT id,firstname,lastname FROM MyGuests";
    $result = $conn->query($sql);
    if ($result->num_rows>0) {
        //输出每行数据
        while($row = $result->fetch_assoc()){
            echo "<br> id: ". $row["id"]. "- Name: ". $row["firstname"]. " ". $row["lastname"];
        }

    } else {
        echo "没有数据";
    }
    
    $conn->close();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>select练习</select></title>
</head>
<body>
    
</body>
</html>