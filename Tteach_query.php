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
	<title>老师个人信息查询页面</title>
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
		  <li class="active">老师信息查询</li>
		</ol>
		<div class="box6">
		<div class="box7">
        <div class="title">老师个人信息查询</div>
<!--$sql1=mysqli_query($conn,"insert into tb_stud('1',2,3,4) values(1,2,3,4)");-->
<?php
            $conn = mysqli_connect("yxr.dev.dxdc.net:3306","a0915222653","57558434","a0915222653");
			mysqli_query($conn,"set names utf8");
			$sql=mysqli_query($conn,"SELECT T_No,T_Name,T_sex from tb_teach t INNER JOIN tb_cour c on c.Cno=t.Cno inner JOIN
tb_grade g on g.Cno=c.Cno INNER JOIN tb_stud s on s.Sno=g.Sno WHERE T_Name='$username'"); 
					$info=mysqli_fetch_array($sql);
					
?>
		<table class="table table-bordered">
    <tbody>
        <tr class="info">
            <th scope="col" width="20%">教师编号</th>
            <th scope="col" width="25%">教师姓名</th>
            <th scope="col" width="25%">教师性别</th>
        </tr>
        <tr>
            <td><?php echo $info['T_No'];	?></td>
            <td><?php echo $info['T_Name'];	?></td>
            <td><?php echo $info['T_sex'];	?></td>
        </tr>
    </tbody>
</table>
				

             </div>
         </div>
              <div class="foot_query">重庆师范大学&nbsp;计算机科学与技术专业&nbsp;爱好编程&&擅长写代码的姚星如&nbsp;版权所有&nbsp;Tel:18323230431&nbsp;QQ:2651169635</div>
	 </div>
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>	
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>