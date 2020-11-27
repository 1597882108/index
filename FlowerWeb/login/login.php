<?php
// echo "成功";
$username = $_REQUEST['uname'];
$password = $_REQUEST['upwd'];
// echo $username;
// echo $password;


//链接数据库
// $conn = mysqli_connect('localhost','root','','flowersweb');
// $sql = "SELECT * FROM `user` WHERE `uname` = '$username'";

// $result=mysqli_query($conn,$sql)
// // $result = getConnect($sql);
// //只提取关联数据
// $arr= mysqli_fetch_assoc($result);
// //print_r($arr);

// if(!!$arr){//用户存在 
//     //判断密码
//     if($upwd === $arr["upwd"]){
//         //登录成功:跳转首页
//         echo "<script>location.href='../index/index.html'</script>";
//     }else{
//         //密码有误
//         //跳转登录页
//         echo "<script>alert('密码有误');location.href='login.html'</script>";
//     }
// }else{//用户名不存在 
//     //跳转登录页
//     echo "<script>alert('用户名不存在 ');location.href='login.html'</script>";
// }







header("Content-type:text/html;charset=utf-8");
// 链接数据库
$link=mysqli_connect('localhost','root','','flowersweb');
// 设置编码
mysqli_set_charset($link,'utf8');

// 获取通过post方式发送的数
$username = $_POST['uname'];
$password = $_POST['upwd'];
// 编写操作数据库的语句
//验证注册的账号是否重复，user表格名，username表格字段名
$sql="select * from `user` where `uname`='$username' and `upwd`='$password'";

// 执行mysql语句
$result=mysqli_query($link,$sql);
// 判断是否有内容
if($row = mysqli_fetch_assoc($result)){
    echo "<script>alert('登录成功');location.href='../index/index.html'</script>";
}else{
    echo "<script>alert('账号或密码错误，请重新输入');location.href='./login.html'</script>";
}
?>


