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
	<title>学生学院查询页面</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="style/style.css" type="text/css">
</head>
<body>
<div class="container-fluid1">
    <div class="box4"><p>欢迎您：<?php session_start();
	$username=$_SESSION['username'];echo $_SESSION['username'];?>同学！| <a href="system.php">退出</a></p></div>
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
					<li><a href="inst_query.php">学院信息查询</a></li>
                    <li><a href="dept_query.php">所在系查询</a></li>
                    <li><a href="class_query.php">班级信息查询</a></li>
					<li class="dropdown">
						<a href="" class="dropdown-toggle" data-toggle="dropdown">个人信息查询<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="student_query.php">学生查询</a></li>
							<li><a href="student_query.php">学生查询</a></li>
							<li class="divider"></li>
							<li><a href="student_query.php">学生查询</a></li>
							<li class="divider"></li>
							<li><a href="student_query.php">学生查询</a></li>
						</ul>
					</li>
                    <li><a href="course_query.php">课程信息查询</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<div class="content">
		<ol class="breadcrumb">
		  <li class="active glyphicon glyphicon-home">&nbsp;学生</li>
          <li><a href="system.php">首页</a></li>
		  <li class="active">学院信息查询</li>
		</ol>
		<div class="box6">
		<div class="box7">
        <div class="title">学院信息查询</div>
<!--$sql1=mysqli_query($conn,"insert into tb_stud('1',2,3,4) values(1,2,3,4)");-->
<?php
            $conn = mysqli_connect("yxr.dev.dxdc.net:3306","a0915222653","57558434","a0915222653");
			mysqli_query($conn,"set names utf8");
			$sql=mysqli_query($conn,"select trim(i.Inst_No),trim(Inst_Name),trim(Tel),trim(Inst_Add) from tb_stud s inner join tb_class c on s.Class_No=c.Class_No inner join tb_dept
			d on d.Dept_No=c.Dept_No inner join tb_inst i on i.Inst_No=d.Inst_No where Sname='$username'"); 
					$info=mysqli_fetch_array($sql);					
?>
		<table class="table table-bordered">
    <tbody>
        <tr class="info">
            <th scope="col" width="20%">学院编号</th>
            <th scope="col" width="25%">学院名称</th>
            <th scope="col" width="25%">学院电话</th>
            <th scope="col" width="30%">学院地址</th>
        </tr>
        <tr>
            <td><?php echo $info['trim(i.Inst_No)'];	?></td>
            <td><?php echo $info['trim(Inst_Name)'];	?></td>
            <td><?php echo $info['trim(Tel)'];	?></td>
            <td><?php echo $info['trim(Inst_Add)'];	?></td>
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