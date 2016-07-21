<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>信息录入</title>
    <link href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.css" rel="stylesheet">
    <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="http://apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="test10.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="bootstrap-datetimepicker.js"></script>
    <script src="bootstrap-datetimepicker.fr.js"></script>

</head>
<body>
    <div class="container">
        <span>欢迎登录KCN的博客</span>
        <form class="form-signin">
            <h2 class="form-signin-heading">请输入信息</h2>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="text" id="inputPassword" class="form-control" placeholder="姓名：" required aut of ocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="text" id="inputPassword" class="form-control" placeholder="职业：" required>
            <input type="text" id="inputPassword" class="form-control" placeholder="部门：" required>
            <!-- Split button -->
            <div class="btn-group">
              <button type="button" id="dizhi" class="btn btn-danger"><font class="dizhi">地址：</font></button>
              <button type="button" id="xuanze" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </div>
            <input type="text" id="inputPassword" class="form-control" placeholder="电话：029-12345678" required>
            <input type="text" id="inputPassword" class="form-control" placeholder="手机：" required>
            <input type="text" id="inputPassword" class="form-control" placeholder="传真：" required>
            <input type="text" id="inputPassword" class="form-control" placeholder="Email：" required>
            <input type="textarea" id="inputPassword" class="form-control" placeholder="备注：" required>
           
           <div class="input-append date form_datetime">
                <input id="shengri" size="16" type="text" value="" readonly placeholder="  生日：">
                <span class="add-on"><i class="glyphicon glyphicon-th"></i></span>
            </div>
 
            <script type="text/javascript">
                $("#shengri").datetimepicker({
                    format: "yyyy MM dd ",
                    autoclose: true,
                    todayBtn: true,
                    pickerPosition: "bottom-left"
                });
            </script>   
            
            <button class="btn btn-lg btn-primary btn-block" type="submit">提交</button>
            <input type="reset" id="reset" class="btn btn-lg btn-primary btn-block" required>
        </form>
    </div>
</body>
</html>