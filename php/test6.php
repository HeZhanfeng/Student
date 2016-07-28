<?php 
    //开启对话
    session_start();//必须位于html之前

    $_SESSION['views'] = 1;

    echo "浏览量：".$_SESSION['views']."<br>";

    if (isset($_SESSION['views'])) {
        $_SESSION['views'] = $_SESSION['views']+1;
    }
    else{
        $_SESSION['views'] = 1;
    }
    echo "浏览量：".$_SESSION['views'];

    //彻底销毁session
    //session_destroy();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php的session练习</title>
</head>
<body>
    
</body>
</html>