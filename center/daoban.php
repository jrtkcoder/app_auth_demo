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

$li5='class="active"';
$li5='class="active"';
?>
<?php include 'header.php';?>
    <title>盗版列表-<?php echo $title?></title>
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
                                <h1>盗版使用者域名 - <span class="2h2f65">0</span><span class="2352435">7</span><span class="9hf2fs225">6</span><span class="hffs295">6</span><span class="hffs295">c</span><span class="hgg125">i</span><span class="hgg125">t</span><span class="hgg125">y</span><span class="hffs22935">.</span><span class="hf9f2s2425">c</span><span class="hff9s525">o</span><span class="hff9s25">m</span></h1>
                                <p>盗版域名列表一览.</p>
                            </div>
                        </div>
                        <table  class="display table table-bordered table-striped" id="dynamic-table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>域名</th>
                                <th>时间</th>
                            </tr>
                            </thead>
                            <tbody>
									<?php
 $page = $_GET["page"];
 if(isset($_POST["page"]) && $_POST["page"] != "")
    {
     $page = $_POST['page'];
     }
 if($page == ""){
     $page = 1;
     }

 $page_size = 10; //每页多少条数据
 $_pageNum = 10; //最多显示多少个页码
 $query = "select count(*) as total from daoban";
 $result = mysql_query($query);
 $rownum = mysql_fetch_row($result);
 $message_count = $rownum[0];

 $page_count = ceil($message_count / $page_size);
 $offset = ($page-1) * $page_size;
 $pages = $page_count;
 $_start = $page - floor($_pageNum / 2); //计算开始页
 $_start = $_start < 1 ? 1 : $_start;
 $_end = $page + floor($_pageNum / 2); //计算结束页
 $_end = $_end > $pages? $pages : $_end;

 $_curPageNum = $_end - $_start + 1;
 // 左调整
if($_curPageNum < $_pageNum && $_start > 1){
     $_start = $_start - ($_pageNum - $_curPageNum);
     $_start = $_start < 1 ? 1 : $_start;
     $_curPageNum = $_end - $_start + 1;
     }
 // 右边调整
if($_curPageNum < $_pageNum && $_end < $pages){
     $_end = $_end + ($_pageNum - $_curPageNum);
     $_end = $_end > $pages? $pages : $_end;
     }


 ?>
 									<?php 
										$sql="select * from daoban ORDER BY `id` DESC  limit $offset,$page_size";
										$result=mysql_query($sql);
										if($result&&mysql_num_rows($result)){
											while ($row=mysql_fetch_assoc($result)) {
											echo "<tr class='gradeX'>";
											echo "<td >".$row['id']."</td>";
											echo "<td ><a href=http://".$row['domain']." target='_blank'>".$row['domain']."</a></td>";
											echo "<td >".date("Y-m-d H:i:s",$row['time'])."</td>";
											echo "</tr>";
											}
										}
									?>                           
                            </tfoot>
                        </table>
						<table  class="display table table-bordered table-striped" id="dynamic-table">
						<tfoot>
							<tr>
							<td ><ul class="pagination"><li class="disabled"><a>当前页码：<?php echo $page;?>/<?php echo $page_count;?></a></li><li class="disabled"><a>记录条数：<?php echo $message_count;?>条</a></li>

							
							<?php


if($page != 1){
     echo "<li ><a href=?page=1>首页</a></li>";
     echo "<li ><a href=?page=" . ($page-1) . ">&laquo;</a></li>";
     } else {
echo '<li class="disabled"><a>首页</a></li>';
echo '<li class="disabled"><a>&laquo;</a></li>';
}

for ($i = $_start; $i <= $_end; $i++){
     if($i == $page){
         $_pageHtml .= '<li ><a>' . $i . '</a></li>';
         }else{
         $_pageHtml .= '<li ><a href="' . $url . '?page=' . $i . '">' . $i . '</a></li>';
         }
     }
echo $_pageHtml;
if($page < $page_count){
     echo "<li ><a href=?page=" . ($page + 1) . ">&raquo;</a></li>";
     echo "<li ><a href=?page=" . $page_count . ">尾页</a></li>";
     } else {
echo '<li class="disabled"><a>&raquo;</a></li>';
echo '<li class="disabled"><a>尾页</a></li>';
}	 
echo'</ul></td>';
?>
							</tr>
							</tfoot>
							</table>
                    </section>
                    <!--work progress end-->
                </div>

        </section>
    </section>
    <!--main content end-->

<?php include 'footer.php';?>