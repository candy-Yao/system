function check_input(inst){	
	   if(form.instno.value==""){
		alert("请输入学院编号");
		form.pass.focus();
		return(false);
	} else 	if(form.instname.value==""){
		alert("请输入学院名");
		form.username.select();
		return(false);
	}else if(form.instphone.value==""){			
		alert("请输入联系方式!");
		form.tel.select();
		return(false);
	}
	else if(form.instaddress.value==""){			
		alert("请输入地址!");
		form.qq.select();
		return(false);
	}else{
	
	
	
	return(true);
	}
	}