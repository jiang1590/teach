<?

    $mysql = new mysqli("localhost","root","","taobao");
    if($mysql->connect_errno) {
        die($mysql->connect_errno);
    }
    $mysql->query("set names utf8");
    $sqlstr = "select * from goods_introduce";
    $result = $mysql->query($sqlstr);
    // var_dump($result);
    // 将查询出来的数据放到数组中
    // 创建数组;
    $myArray = array();
    // fetch_assoc：查询出每一条在result中的数据
    while($record = $result->fetch_assoc()){
        array_push($myArray,$record);
    }

    echo json_encode($myArray);

 ?>
