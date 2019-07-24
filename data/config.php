<?php
/**
 * PHP域名授权系统
 * =======================================================
 * 版权所有 (C) 2010-2020 www.92keji.cn，并保留所有权利。
 * 网站地址: http://www.92keji.cn
 * Q Q: 15907754
 * -------------------------------------------------------
 *
 * @version :    v2.6.x
 * =======================================================
 */
//禁用错误报告
//error_reporting(0);
session_start();

$db_server='rm-bp13qpl023g02660t.mysql.rds.aliyuncs.com:3306';
$db_user='dev';
$db_password='711e7D69f9d0c3f1';
$db_name='auth_test';
$db_charset='UTF8';

$safe = '123456';//此处为安全码，不走数据库
$conn = mysql_connect($db_server,$db_user,$db_password);
if(mysql_errno()){
		die('数据库连接失败！'.mysql_error());
}
mysql_select_db($db_name);
mysql_set_charset($db_charset);

?>
