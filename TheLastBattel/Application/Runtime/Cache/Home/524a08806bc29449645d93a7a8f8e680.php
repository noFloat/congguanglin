<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/thelastbattel/Public/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="/thelastbattel/Public/css//admin.css">
<title>the last battel</title>
	<!--[if lt IE 9]>
	<script type="text/javascript" src="/assets/js/html5shiv.min.js"></script>
	<script type="text/javascript" src="/assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">zzzz注册2333</div>
				<div class="panel-body">
                    <form class="form-horizontal" id="yw0" action="/thelastbattel/index.php/Home/Login/checkRegister" method="post" onsubmit="return check()">                    <div class="form-group">
                        <label class="col-md-3 control-label required" for="LoginForm_username">用户名 <span class="required">*</span></label>                        <div class="col-md-9">
                            <input class="form-control" name="username" id="LoginForm_username" type="text">                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label required" for="LoginForm_password">密码 <span class="required">*</span></label>                        <div class="col-md-9">
                            <input class="form-control" name="password" id="LoginForm_password" type="password">                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-md-3 control-label required" for="LoginForm_password">再次输入密码 <span class="required">*</span></label>                        <div class="col-md-9">
                            <input class="form-control" name="passwordCheck" id="LoginForm_password" type="password">                        </div>
                    </div>                   
                         <div class="col-md-offset-1 col-md-2">
                            <input class="btn btn-default" name="yt0" value="注册" type="submit">
                        </div>

                    </div>
                    </form>		

                         <div class="col-md-offset-1 col-md-2" style="float:;">
                           
                            	<a class="btn btn-default" href="/thelastbattel/index.php/Home/Login/index">登陆</a>
                        </div>		
  
    
                </div>
				<div class="panel-footer">
												</div>
			</div>
		</div>
	</div>
</div>
	<div class="spinner" id="loading" style="display:none;">
		<div class="spinner-container container1">
			<div class="circle1"></div>
			<div class="circle2"></div>
			<div class="circle3"></div>
			<div class="circle4"></div>
		</div>
		<div class="spinner-container container2">
			<div class="circle1"></div>
			<div class="circle2"></div>
			<div class="circle3"></div>
			<div class="circle4"></div>
		</div>
		<div class="spinner-container container3">
			<div class="circle1"></div>
			<div class="circle2"></div>
			<div class="circle3"></div>
			<div class="circle4"></div>
		</div>
	</div>
<script type="text/javascript" src="/thelastbattel/Public/js/jquery.js"></script>
<script type="text/javascript" src="/thelastbattel/Public/js/bootstrap.js"></script>
<script type="text/javascript" src="/thelastbattel/Public/js//jquery_002.js"></script>
<script>
function check(){
if(yw0.username.value==""){
	alert("用户名不许为空！");
	yw0.username.focus();
	return false;
}else if(yw0.passwordCheck.value==""){
	alert("密码不许为空！");
	yw0.passwordCheck.focus();
	return false;
}else if(yw0.password.value==""){
	alert("密码不许为空！");
	yw0.password.focus();
	return false;
}else{
return true;
}
}
</script>
</body></html>