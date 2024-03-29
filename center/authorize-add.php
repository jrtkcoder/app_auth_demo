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
	
	$action = $_GET['action'];
	if($action=='do'){
		$username = $_POST['username'];
		$domain = $_POST['domain'];
		$ip = $_POST['ip'];
		$qq = $_POST['qq'];
	    $tel = $_POST['tel'];
		$version = $_POST['version'];
		$syskey = $_POST['syskey'];
		$ip_qh = $_POST['ip_qh'];
		$yumi = $_POST['yumi'];
		$time = strtotime($_POST['time']);
        
		if(!$domain||!$time){
		   echo "<script type=\"text/javascript\">alert('添加失败');</script>";
		}else{
		   $sql = "INSERT INTO `authorize` (`username`, `domain`, `ip`, `qq`, `tel`, `time`, `version`, `syskey`, `ip_qh`, `yumi`) VALUES ('$username', '$domain', '$ip', '$qq', '$tel', '$time', '$version', '$syskey', '$ip_qh', '$yumi');";
	       mysql_query($sql);
		   mysql_close();
		   echo "<script>alert('添加成功！');window.location.href='authorize.php'</script>";
		   die;
		}
	}

$li1='class="active"';
$li11='class="active"';
?>
<?php include 'header.php';?>
    <title>添加授权-<?php echo $title?></title>
<?php include 'list.php';?>
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
<?php include 'overview.php';?>
            <div class="row">
                <div class="col-lg-12">
                    <!--work progress start-->
                    <section class="panel">
                        <div class="panel-body progress-panel">
                            <div class="task-progress">
                                <h1>添加新授权</h1>
                                <p>填写授权信息并保存.</p>
                            </div>
                        </div>
						<form action="authorize-add.php?action=do" method="post"  role="form">
                            <div class="form-group">
                                <label for="txtDomain">名称</label>
                                <input type="text" name="username" class="form-control" placeholder="名称">
                            </div>
                            <div class="form-group">
                                <label for="txtDomain">授权域名</label>
                                <input type="text" name="domain" class="form-control" placeholder="0766city.com">
                            </div>
                            <div class="form-group">
                                <label for="txtDomain">IP</label>
                                <input type="text" name="ip" class="form-control" placeholder="127.0.0.1">
                            </div>
                            <div class="form-group">
                                <label for="txtDomain">QQ</label>
                                <input type="text" name="qq" class="form-control" value='<?php echo $qq?>'>
                            </div>
                            <div class="form-group">
                                <label for="txtDomain">电话</label>
                                <input type="text" name="tel" class="form-control" value='<?php echo $tel?>'>
                            </div>
                            <div class="form-group">
                                <label for="txtDomain">版本号</label>
                                <input type="text" name="version" class="form-control" value='<?php echo $version?>'>
                            </div>
                            <div class="form-group">
                                <label for="txtDomain"><i class="fa fa-key"></i>升级KEY<input class="btn btn-primary btn-xs" type= "button" name= "Submit1 " value= "生成" onclick= "show()"></label>
                                <input type="text" name="syskey" id="syskey"  class="form-control" value='<?php echo $syskey?>'>
 					<script language=javascript> 
						function show() 
						{ 
						var str= "0123456789abcdefghijklmnopqrstuvwxyz" 
						var result= " " 
						for(var i=0;i <32;i++) 
						{ 
						var temp=Math.floor(Math.random()*36) 
						result+=str.charAt(temp) 
						} 
						hash = result.MD5();
						document.getElementById( "syskey").value=hash
						} 
					</script>
                            </div>
                            <div class="form-group">
                                <label for="txtDomain">验证方式</label>
                                <select name="ip_qh" class="form-control">
                                            <?php if($ip_qh==1){?>
                                            <option value="1">1_IP双重验证</option>
                                            <option value="0">0_单域名验证</option>
                                            <?php }else{?>
                                            <option value="0">0_单域名验证</option>
                                            <option value="1">1_IP双重验证</option>
                                            <?php }?>
                                        </select>
                            </div>
							
                            <div class="form-group">
                                <label for="txtDomain">域名授权方式</label>
                                <select name="yumi" class="form-control">
                                            <?php if($yumi==1){?>
                                            <option value="1">1_顶级泛域名方式</option>
                                            <option value="0">0_当前单域名方式</option>
                                            <?php }else{?>
                                            <option value="0">0_当前单域名方式</option>
                                            <option value="1">1_顶级泛域名方式</option>
                                            <?php }?>
                                        </select>
										<span class="help-block">顶级泛域名授权是指，授权weby.cc后该域名所有的泛域名都可以使用</span>
										<span class="help-block">当前单域名授权是指，只授权当前域名</span>
																			
                            </div>
							
                            <div class="form-group">
                                <label for="txtDomain">到期时间</label>
                                <input type="text" name="time" class="form-control" id="time1" placeholder="2017-01-01">
                            </div>
			<div id="bottom" >
			  <button class="btn btn-info" type="submit" value="true" id="submit"/><strong>添加授权</strong></button>
            </div>
                        </form>
                    </section>
                    <!--work progress end-->
                </div>

        </section>
    </section>
    <!--main content end-->

<?php include 'footer.php';?>