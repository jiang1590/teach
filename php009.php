<?php
    // 获得详情数据的php
    // $id = $_GET["id"];

    $mysql = new mysqli("localhost","root","","taobao");
    if($mysql->connect_errno) {
        die($mysql->connect_errno);
    }
    $mysql->query("set names utf8");
    $sql = "select goods_logo from goods_introduce union all select * from goods_detail where goods_id=28839";
    $result = $mysql->query($sql);
    $images = [];
    while($a = $result->fetch_assoc()){
        array_push($images,$a);
    }
    print_r($images);

    select goods_introduce.goods_logo from goods_introduce where goods_id=28839 inner join select goods_detail.goods_shop from goods_detail where goods_id=28839
    select * from goods_introduce inner join goods_detail on goods_introduce.goods_id=goods_detail.goods_id




 ?>
