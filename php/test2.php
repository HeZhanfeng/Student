<?php 
    header("Content-Type:text/html;Charset=utf-8");
    @$nemeErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";
    //$_SERVER["REQUEST_METHOD"]检测表单是否被提交
    //如果REQUEST_METHOD是POST，表单将被提交-数据将被验证。
    //如果表单未提交将跳过验证并显示空白。
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //empty()函数判断表单是否为空
        if (empty($_POST["name"])) {
            $nameErr = "名字必填。";
        }
        else {
            $name = test_input($_POST["name"]);

            if (!preg_match("/^[a-zA-Z]*$/", $name)) {
                $nameErr = "只允许字母和空格";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "邮箱必填。";
        } else {
            $email = test_input($_POST["email"]);
            if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
                $emailErr = "非法邮箱格式";
            }
        }
        
        if (empty($_POST["website"])) {
           $websiteErr = "";

        } else {
            $website = test_input($_POST["website"]);
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
         $websiteErr = "非法的 URL 的地址"; 
      }
        }
        
        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }
        
        if (empty($_POST["gender"])) {
            $genderErr = "性别必填。";
        } else {
            $gender = test_input($_POST["gender"]);
        }
        
        
        

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
    <title>php表单练习2</title>
    <style>
        .error {color: #f00;}
    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        名字：<input type="text" name="name">
        <span class="error">* <?php echo @$nameErr; ?></span>
        <br><br>
        E-mail：<input type="text" name="email">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br><br>
        网站：<input type="text" name="website">
        <span class="error"><?php echo $websiteErr; ?></span>
        <br><br>
        备注：<textarea name="comment" row="5" cols="40"></textarea>
        <br><br>
        性别：
        <input type="radio" name="gender" value="女">女
        <input type="radio" name="gender" value="男">男
        <span class="error">* <?php echo $genderErr; ?></span>
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