<?php 
    //echo "hello";
    //print_r($_GET);

 ?>

 <?php
    $servername = "rdsfqu7bij3y7zipublic.mysql.rds.aliyuncs.com";
    $username = "kcn";
    $password = "xian2016";
    $dbname = "study";
 ?>
 <?php 
header("Content-Type:text/html;Charset=utf-8");
//     $name = isset($_GET['uname'])
    
//     // if ($name == "admin") {
//     //     echo "hello";
//     // }

//     echo $name;



    
        $name = $_GET['name'];
        //连上数据库
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        //echo $_GET;
        //查找
        $sql = "SELECT * FROM test_students_all WHERE  (student_name='$name')";
        // //$sql = "SELECT * FROM test_shop WHERE goods_name LIKE '%".$_GET['uname']."%'";
        //执行
        $result = $conn->query($sql);
        //输出值
        if ($result->num_rows > 0) {

            echo "*用户已存在";
             // 输出每行数据
             // while($row = $result->fetch_assoc()) {
             //   echo '<p>' . $row['student_nbr'] .  $row['student_name'] . $row['sex'] . $row['class'] . $row['major'].'</p>';
             //   echo '<p><img src="student_images/' . $row['class'] . '/' . $row['student_nbr'] . '.jpg" /></p>';
             //    }
        } else {
            echo "*用户可注册";
        }
        //关闭数据库连接，释放资源
        $conn->close();
    
          
 ?>