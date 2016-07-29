<?php 
    header("Content-Type:text/html;Charset=utf-8");
    $expire=time()+60*60*24*30;
    $uname = $_POST["u"];
    setcookie("user","$uname");

    //输出cookie的值
    echo @$_COOKIE["user"]."<br>";

    //查看所有cookie
    //print_r($_COOKIE);

    //使用isset()函数来确认是否已经设置了cookie
    if (isset($_COOKIE["user"])) {
        echo "Hello " . $_COOKIE["user"] . "<br>";
    }
    else{
        echo "普通访客！<br>";
    }
    $tuichu=$_REQUEST["tuichu"];
    if ($tuichu=="tuichu") {
        
    } 
    
    //删除cookie时，使用过去的时间点
    // setcookie("user","KCN",time-3600);
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php的cookie练习</title>
</head>
<body>
    <form method="post">
        <input type="text" placeholder="用户名" name="u">
        <input type="submit">
        <a href="login_out.php">退出</a>
    </form>
   
</body>
</html>