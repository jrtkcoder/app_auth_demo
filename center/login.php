<?php
/**
 * PHP域名授权系统
 * =======================================================
 * 版权所有 (C) 2010-2020 www.weby.cc，并保留所有权利。
 * 网站地址: http://www.weby.cc
 * Q Q: 403700890
 * -------------------------------------------------------
 *
 * @version :    v2.6.x
 * =======================================================
 */
 
	header('content-type:text/html;charset=utf-8');
    include 'farmwork.php';
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$safepassword = $_POST['safepassword'];
	if($safe!==$safepassword){
	   echo "<script>alert('安全码错误！');window.location.href='$site_name'</script>";
	   exit();
	}
	$sql = "select * from user where username='$username' and password='$password'";
	$result = mysql_query($sql);
	if($result && mysql_num_rows($result)>0){
		$data=mysql_fetch_array($result);
		$_SESSION['username']=$data['username'];
		$_SESSION['uid']=$data['id'];
		$_SESSION['email']=$data['email'];
		$_SESSION['time']=$data['lotime'];
		$_SESSION['ip']=$data['login'];
		setcookie(session_name(),session_id(),time()+3600);
		echo "<script>window.location.href='../center/index.php'</script>";
		exit();
	}else{
		echo "<script>alert('账号或密码错误！');window.location.href='$site_name'</script>";
		exit();
	}
?>