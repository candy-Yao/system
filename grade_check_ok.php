<meta charset="utf-8">
<?php
						
						$instno=$_POST['instno'];
						$instname=$_POST['instname'];
						$instphone=$_POST['instphone'];
						//include("conn/conn.php");
						$conn = mysqli_connect("yxr.dev.dxdc.net:3306","a0915222653","57558434","a0915222653");
			mysqli_query($conn,"set names utfe8");
						$sql=mysqli_query($conn,"insert into tb_grade(Sno,Cno,Grade)
						 values('$instno','$instname','$instphone')");
						 if($sql){
						 echo "<script>alert('插入成功');
					window.location.href='Tteach_query.php';</script>";
						
						}else{
							 echo "<script>alert('插入不成功');window.location.href='Tgrade_add.php';</script>";
						
						}
						
						?>