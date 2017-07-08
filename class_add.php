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
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>管理员添加班级的页面</title>
<script type="text/javascript">
function check_input(form){	
	   if(form.instno.value==""){
		alert("请输入班级编号");
		form.instno.focus();
		return(false);
	} else 	if(form.instname.value==""){
		alert("请输入系编号");
		form.instname.select();
		return(false);
	}else if(form.instphone.value==""){			
		alert("请输入班级人数");
		form.instphone.select();
		return(false);
	}
	else if(form.instaddress.value==""){			
		alert("请输入专业");
		form.instaddress.select();
		return(false);
	}else{
	return(true);
	}
	return(true);
	}
</script>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="style/style.css" type="text/css">
</head>
<body>
<div class="container-fluid1">
    <div class="box4">
        <p>欢迎您：：<?php session_start();$username=$_SESSION['username'];echo $_SESSION['username'];?>管理员！| <a href="system.php">退出</a></p>
    </div>
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
					<li><a href="inst_add.php">学院添加</a></li>
					<li><a href="dept_add.php">系的添加</a></li>
                    <li><a href="class_add.php">班级添加</a></li>
                    <li class="dropdown">
						<a href="student_add.php" class="dropdown-toggle" data-toggle="dropdown">学生添加<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="student_add.php">学生添加</a></li>
							<li><a href="student_add.php">学生添加</a></li>
							<li class="divider"></li>
							<li><a href="student_add.php">学生添加</a></li>
							<li class="divider"></li>
							<li><a href="student_add.php">学生添加</a></li>
						</ul>
					</li>
                    <li><a href="teacher_add.php">老师添加</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<div class="content">
		<ol class="breadcrumb">
		  <li class="active glyphicon glyphicon-home">&nbsp;管理员</li>
          <li><a href="system.php">首页</a></li>
          <li>班级添加</li>
		</ol>
		<div class="box6">
		<div class="box7">
            <form class="form-horizontal" role="form" method="post" action="class_check_ok.php" name='inst' onSubmit="return check_input(inst) ">
                <div class="title">班级添加页面</div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">班级编号：</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="instno" id="username" placeholder="please input......">
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-4 control-label"  >系编号：</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="instname" id="inputPassword3" placeholder="please input......">
                    </div>
                </div>
               <div class="form-group">
                    <label class="col-sm-4 control-label">班级人数：</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="instphone" id="username" placeholder="please input......">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label"> 专业：</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="instaddress" id="inputPassword3" placeholder="please input......">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-7 col-lg-7 col-xs-7 col-md-7">
                        <button type="reset" class="btn btn-primary pull-right">重置</button>
                        <button name='sub' type="submit" class="btn btn-primary pull-right">确定</button>
                        
                    </div>
                </div>
            </form>
        </div>
	    </div>
        </div>
	</div>



</div>
<script type="text/javascript" src="js/jquery.min.js"></script>	
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>