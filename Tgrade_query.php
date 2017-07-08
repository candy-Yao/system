<!-- 
===================================
@auther:姚星如
@data:2016-11-29
@content:学生信息管理系统
@Last Modified Time:2016-11-29
===================================
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>老师查询所有成绩页面</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="style/style.css" type="text/css">
</head>
<body>
<div class="container-fluid1">
    <div class="box4"><p>欢迎您：<?php session_start();
	$username=$_SESSION['username'];echo $_SESSION['username'];?>老师！| <a href="system.php">退出</a></p></div>
    <div class="media">
        <div class="media-left">
            <div class="box">
                <a href="" ><img src="images/logo_low.jpg" alt="logo" class="media-object img-responsive"></a>
            </div>
        </div>  
        <div class="media-body">
	        <div class="media-muted">
            <span class="title3">学生信息管理系统</span>           
            </div>
        </div>  
    </div>
	<img src="images/info_bg.gif" alt="图片" class="pull-right img-responsive">
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="active"><a href="system.php">返回首页</a></li>
					<li><a href="Tteach_query.php">老师信息查询</a></li>
                    <li><a href="Tgrade_add.php">学生成绩添加</a></li>
                    <li><a href="Tgrade_query.php">学生成绩查询</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<div class="content">
		<ol class="breadcrumb">
		  <li class="active glyphicon glyphicon-home">&nbsp;老师</li>
          <li><a href="system.php">首页</a></li>
		  <li class="active">学生成绩查询</li>
		</ol>
		<div class="box6">
		<div class="box7">
        <div class="title">老师查询所带学生的成绩</div>
<!--$sql1=mysqli_query($conn,"insert into tb_stud('1',2,3,4) values(1,2,3,4)");-->
<table class="table table-bordered">
    <tbody>
        <tr class="info">
            <th scope="col" width="35%">学生学号</th>
            <th scope="col" width="35%">课程编号</th>
            <th scope="col" width="30%">成绩</th>
        </tr>
<?php
            $conn = mysqli_connect("yxr.dev.dxdc.net:3306","a0915222653","57558434","a0915222653");
			mysqli_query($conn,"set names utf8");
			$sql=mysqli_query($conn,"SELECT g.Sno,g.Cno,Grade from tb_teach t INNER JOIN tb_cour c on c.Cno=t.Cno inner JOIN
tb_grade g on g.Cno=c.Cno INNER JOIN tb_stud s on s.Sno=g.Sno ") ; 
					 if($sql)
			 {
				 while($info=mysqli_fetch_array($sql))
				 {
					
?>
		
        <tr>
            <td><?php echo $info['Sno'];	?></td>
            <td><?php echo $info['Cno'];	?></td>
            <td><?php echo $info['Grade'];	?></td>
        </tr>
         <?php 
				 }
			 }
			 mysqli_free_result($sql);
			
		?>
    </tbody>
</table>
				

             </div>
         </div>
      	 </div>
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>	
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>