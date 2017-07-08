<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php
	
		header("content-type:text/html;charset=utf-8");

		//开启session
		session_start();

		//接收表单传递的用户名和密码
		$name=$_POST['username'];
		$pwd=$_POST['password'];
		$id = $_POST['inlineRadioOptions'];
		
	 $conn = mysqli_connect("yxr.dev.dxdc.net:3306","a0915222653","57558434","a0915222653");
			mysqli_query($conn,"set names utf8");
	           $query="select * from tb_user11 
			    where username='".($name)."' and pwd='".$pwd."' and role='".($id)."'";
			
				$result=mysqli_query($conn,$query);
				$info=mysqli_fetch_array($result);
			
				if($info==false){
					echo "<script>alert('登录失败');
					window.location.href='system.php';</script>";
					
				}else{
					if($id=='老师'){
					echo "<script>alert('老师登录成功');
					window.location.href='Tteach_query.php';</script>";
				}else if($id=='管理员'){
						echo "<script>alert('管理员登录成功');
					window.location.href='inst_add.php';</script>";
					
				}else if($id=='学生'){
					echo "<script>alert('学生登录成功');
					window.location.href='inst_query.php';</script>";
				
				}
							
				$_SESSION['username']=$info['username'];
				
					
				
				}
				
	?>		
    
    
