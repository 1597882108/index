<?php
//设置响应头，防止乱码
header("Content-type:text/html;charset=utf-8");
$username = $_REQUEST['uname'];
$password = $_REQUEST['upwd'];
// echo $username;
// echo $password;
//链接数据库
$conn = mysqli_connect('localhost','root','','flowersweb');

//查询语句
$sql = "SELECT * FROM `user` WHERE `uname` = '$username'";

mysqli_query($conn,"set names utf8");

$result = mysqli_query($conn,$sql);

//解析结果
$data = mysqli_fetch_assoc($result);
//print_r($data);
if($data){
     // 如果查询到数据库已有该账号，就无法注册
    echo "<script>alert('注册失败,该账号已注册');location.href='./register.html'</script>";
}
else{
    // 如果数据库里没有，说明可以注册
        $sql = "INSERT INTO user (uname,upwd) VALUES ('".$username."','$password')";//写后续代码之前最好先打印一个SQL语句，吧打印好的语句放到数据库运行一下，如果正常执行。在进行下一步
        //echo $sql;
        $result = mysqli_query($conn,$sql);
        //print_r($result );
        if($data){
            echo "<script>alert('注册成功');location.href='../login/login.html'</script>";
        }else{
            echo "<script>alert('服务器错误');location.href='./register.html'</script>";
            }
}




// header("content-type:text/html;charset=utf-8");
// $con=mysqli_connect("localhost","root","","flowersweb");
// mysqli_query($con,"set names utf8");
// //接收数据
// $username = $_POST["uname"];
// $password = $_POST["upwd"];
// $sql = "select * from user where uname=`$username`";
// $res = mysqli_query($con,$sql);
// $row=mysqli_fetch_assoc($res);
// if($row){
//     echo json_encode([
//         "msg"=>"用户名被占用"，
//         "status"=>3
//     ]);
// }else{
//     $sql = "insert into user(username,password) values(`$username`,`$password`)";
//     $res = mysqli_query($con,$sql);
//     if($res){
//         echo json_encode([
//             "msg"=>"注册成功"，
//             "status"=>200
//         ]);
//     }else{
//         echo json_encode([
//             "msg"=>"注册失败"，
//             "status"=>4
//         ])
//     }
// }

?>