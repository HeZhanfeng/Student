<?php 
    header("Content-Type:text/html;Charset=utf-8");
    $name = $email = $gender = $comment = $website = "";
    //$_SERVER["REQUEST_METHOD"]检测表单是否被提交
    //如果REQUEST_METHOD是POST，表单将被提交-数据将被验证。
    //如果表单未提交将跳过验证并显示空白。
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $website = test_input($_POST["website"]);
        $comment = test_input($_POST["comment"]);
        $gender = test_input($_POST["gender"]);

    }
    function test_input($data){
        $data = trim($data);//trim()函数去除用户输入中不必要的字符（空格，tab，换行等）
        $data = stripslashes($data);//去除反斜杠（\）
        $data = htmlspecialchars($data);
        return $data;
    }
  
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php表单练习</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        名字：<input type="text" name="name">*
        <br><br>
        E-mail：<input type="text" name="email">
        <br><br>
        网站：<input type="text" name="website">
        <br><br>
        备注：<textarea name="comment" row="5" cols="40"></textarea>
        <br><br>
        性别：
        <input type="radio" name="gender" value="female">女
        <input type="radio" name="gender" value="male">男
        <br><br>
        <input type="submit" value="提交">
    </form>
</body>
</html>
<?php
    echo "<h2>您输入的内容是：</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
?>