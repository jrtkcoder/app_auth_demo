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
    include 'farmwork.php';
	header("content-type:text/html;charset=utf-8");
	login();

	$id = $_GET['id'];
	$sql = "delete FROM `authorize` WHERE id ='$id';";
	$result=mysql_query($sql);
    echo "<script>alert('删除成功！');window.location.href='authorize.php'</script>";
?>
