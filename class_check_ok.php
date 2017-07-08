<meta charset="utf-8">
<?php
						
						$instno=$_POST['instno'];
						$instname=$_POST['instname'];
						$instphone=$_POST['instphone'];
						$instaddress=$_POST['instaddress'];
						//include("conn/conn.php");
						$conn = mysqli_connect("yxr.dev.dxdc.net:3306","a0915222653","57558434","a0915222653");
			mysqli_query($conn,"set names utfe8");
						$sql=mysqli_query($conn,"insert into tb_class(Class_No,Dept_No,Class_Size,Major)
						 values('$instno','$instname','$instphone','$instaddress')");
						 if($sql){
						 echo "<script>alert('插入成功');
					window.location.href='inst_add.php';</script>";
						
						}else{
							 echo "<script>alert('插入不成功，信息已经存在，请重新输入！');window.location.href='class_add.php';</script>";
						
						}
						
						?>