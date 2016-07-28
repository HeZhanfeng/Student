<pre>
<?php 
    header("Content-Type:text/html;Charset=utf-8");
    include 'test1.php';//文件不存在报异常，后面的代码还会继续执行
    //require 'test1.php';//如果文件不存在报错，后面的代码不在执行
    //多维数组
    $arr = array
    (
        array("Volvo",100,96),
        array("BMW",60,59),
        array("Toyota",110,100)
    );
    print_r($arr);

 ?>
</pre>

<?php 
    header("Content-Type:text/html;Charset=utf-8");
    echo date("Y-m-d")."<br>";
    echo "第".date("j")."天<br>";
    echo date("l")."<br>";
    //对文件的操作
    $file = fopen("hello.txt", "r") or exit("无法打开文件");//打开文件，模式为只读
    //按行读取文件直至结尾
    while (!feof($file)) {
        echo fgets($file)."<br>";
    }

    fclose($file);//关闭文件

    /**
     * feof()函数检测是否已经到达文件结尾（EOF）.
     * 在循环遍历未知长度的数据时，feof()函数很有用。
     * 在w(只写)、a(追加)和x(只写)模式下，无法读取打开的文件！
     */
    // if (feof($file)) {
    //     echo "文件结尾";
    // }


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php高级教程练习</title>
</head>
<body>
    
</body>
</html>