<?php
    // 数组
    // $arr = [];
    // $b = 100;
    // echo $b;
    // 创建数组
    // $a = 10;
    // $arr = [$a];
    // print_r($arr);
    // 创建数组2
    // $arr[] = 1000;
    // $arr[] = "999";
    // var_dump($arr);

    // 创建数组3
    // key=>value
    // $arr = ["name"=>"nihao","sex"=>"kkk"];
    // // print_r($arr["first"]);
    // echo "<br>";
    //
    // $arr[] = "nan";
    // print_r($arr);

    // 遍历数组1
    // $arr = ["11","hello","9fe","oa"];
    // for ($i=0; $i < count($arr); $i++) {
    //     echo $arr[$i];
    //     echo "<br>";
    // }

    // 遍历数组二
    // $arr = ["name"=>"张","sex"=>"na","age"=>"19"];
    // var_dump($arr);
    //
    // foreach ($arr as $key=>$value) {
    //     echo $key;
    //     echo "<br>";
    //     var_dump($arr);
    // }

    // 将数组转换为JSON字符串
    $arr1 = ["name"=>"饿死","sex"=>"男","age"=>"19"];
    // $b = json_encode($arr1);
    // echo $b;
    $arr = ["hello","ni",$arr1];
    $a = json_encode($arr);
    echo $a;







 ?>
