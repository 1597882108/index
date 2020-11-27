<?php
	header("Content-Type:text/html;charset=utf-8");
	 
	function getConnect($sql){
		//连接数据源
		$conn = mysqli_connect("localhost","root","");
		//连接数据库
		mysqli_select_db($conn,"flowersweb");
		//设置字符编码
		mysqli_query($conn,"set names utf8");
		//定义sql语句
		//echo $sql;//写后续代码之前，最好先打印一个sql语句 ，把打印好的语句直接放到数据中运行一下，如果执行没有问题才继续往下写
		
		//执行sql语句 
		$result = mysqli_query($conn,$sql);
		
		return $result;
	}
?>