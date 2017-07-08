<meta charset="utf-8">
<?php
						
						$instno=$_POST['instno'];
						$instname=$_POST['instname'];
						$instphone=$_POST['instphone'];
						$instaddress=$_POST['instaddress'];
						//include("conn/conn.php");
						$conn = mysqli_connect("yxr.dev.dxdc.net:3306","a0915222653","57558434","a0915222653");
			mysqli_query($conn,"set names utfe8");
						$sql=mysqli_query($conn,"insert into tb_inst(Inst_No,Inst_Name,Tel,Inst_Add)
						 values('$instno','$instname','$instphone','$instaddress')");
						 
						 if($sql){
						 echo "<script>alert('插入成功');
					window.location.href='inst_add.php';</script>";
						
						}else{
							 echo "<script>alert('插入不成功');window.location.href='manager.php';</script>";
						
						}
						
						?>