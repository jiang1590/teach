<?php
// 数据库语句
// 增加语句

    // 从数据库中获得数据
    // 1.连接数据库,参数1:数据库地址，参数二：数据库登录帐号，参数三：数据库名称
    $mysql = new mysqli("localhost","root","","users");
    // 判断数据库连接是否正确，如果不正确，调用die函数结束
    if($mysql->connect_errno) {
        die($mysql->connect_errno);
    }
    // 2.将要查询的内容设置为utf8编码格式
    $mysql->query("set names utf8");
    // 3.创建将要执行的sql语句
    $sqlstr = "insert into user values(\"heuuullo\",\"123\",\"昵称\",\"mail\")";
    // 4.执行sql语句并返回执行的结果
    $result = $mysql->query($sqlstr);
    var_dump($result);




 ?>
