<?php 
    header("Content-Type:text/html;Charset=utf-8");//设置为utf-8，防止出现乱码。
    echo "<h2> PHP is fun!</h2>";
    echo "K", "C", "N","<br>";
    print "KCN";

    //关联数组
    $from = array("shannxi" => "陕西","beijing"=>"北京","shanghai"=>"上海");
    echo "<br>".$from["shanghai"]."<br>".$from['shannxi']."<br>";
    //遍历关联数组from
    foreach ($from as $key => $value) {
        echo "key=" .$key .", value=".$value;
        echo "<br>";
    }
    //php常量定义
    define("PI", "3.14");//常量默认是全局的
    $r = 4;
    $s = PI*$r*$r;
    echo "S=".$s."<br>";

    //单引号和双引号的区别
    echo "a\nb"."<br>";
    echo 'a\nb'."<br>";

    //双引号可以输出变量
    $user='KCN';
    echo 'Hello $user'."<br>";
    echo "Hello $user";
    echo "<br>";


    $arr = array("KCN","HZF","LXX");//定义数组arr并初始化
    echo count($arr);//返回数组的长度
    echo "<br>";
    $arrlength = count($arr);
    //遍历数值数组
    for ($i=0; $i < $arrlength; $i++) { 
        echo $arr[$i];
        echo "<br>";
    }
    echo "<br>";
    /**
     * sort() - 对数组进行升序排列
     *rsort() - 对数组进行降序排列
     *asort() - 根据关联数组的值，对数组进行升序排列
     *ksort() - 根据关联数组的键，对数组进行升序排列
     *arsort() - 根据关联数组的值，对数组进行降序排列
     *krsort() - 根据关联数组的键，对数组进行降序排列
     */
    $x = 0xf1;//十六进制数f1
    echo "<br>";
    var_dump($x);//返回变量的数据类型和值
    echo "<br>";
    var_dump($user);
    echo "<br>";
    var_dump($from);
    echo "<br>";
    var_dump($arr);
    echo "<br>";

    echo  __line__ ;//输出当前行号
    echo "<br>";
    echo __file__;//输出当前所在路径
    echo "<br>";
    echo floor(10/3);//php中这样下取整
    echo "<br>";
    echo round(11/3);//四舍五入
    echo "<br>";
    //定义Car类
    class Car{
        //类属性必须定义为公有，受保护，私有之一。如果用 var 定义，则被视为公有。
        var $color;//定义变量color
        //php中构造方法用__construct()来表示
        function __construct($color="green"){
            $this->color = $color;
        }
        //定义输出颜色的方法
        function what_color(){
            return $this->color;
        }
    }
    //创建Car的对象
    $herbie = new Car("black");
    //调用输出颜色的方法
    echo $herbie->what_color();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php基础练习</title>
</head>
<body>

   
</body>
</html>