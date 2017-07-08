<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册验证</title>
</head>
<body>
   <?php
        header("content-type:text/html;charset=utf-8");

        //开启session
        session_start();      
        
        //接收表单传递的用户名和密码
        $name=$_POST['username'];
        $pwd=$_POST['password'];
        $repwd=$_POST['repassword'];
        
        //判断密码是否一致
        if($pwd!=$repwd){
            echo"<script>alert('两次密码输入不一致，请重新输入');</script>";
            echo"<script>location='system.html'</script>";
        }
        else{  
                //通过php连接到mysql数据库
               /* $conn=mysql_connect("localhost:3306","a0918224524","19474093");大宇服务器连接*/
                $host="127.0.0.1";
                $username="root";
                $password="";
                $conn=mysql_connect($host,$username,$password);
                //选择数据库
                mysql_select_db("a0918224524",$conn);

                //设置客户端和连接字符集
                mysql_query("set names utf8");

                //通过php进行insert操作
                $sqlinsert="insert into user(user,pwd) values('{$name}','{$pwd}')";

                //添加用户信息到数据库
                mysql_query($sqlinsert);
                                
                mysql_close($conn);//从结果中拿出一行
                
                echo "<script>alert('注册成功，请登录');</script>";
                echo"<script>location='system.html'</script>";}   
</body>
</html>