<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="baidu-site-verification" content="gMSvLHvnWi">
    <meta name="keywords" content="Toruneko,特鲁尼克,戴建豪,PHP,Java,设计模式,Windows Phone,C#">
    <meta name="description" content="戴建豪(Toruneko)的博客.">
	<link rel="stylesheet" type="text/css" href="/thelastbattel/Public/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="/thelastbattel/Public/css/blog.css">
<title>the last battel</title>
   <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
   <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
	<script type="text/javascript" src="http://toruneko.sinaapp.com/assets/js/html5shiv.min.js"></script>
	<script type="text/javascript" src="http://toruneko.sinaapp.com/assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Toruneko</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar">
				<ul class="nav navbar-nav">
					<!-- <li><a href="http://www.toruneko.net/">Home</a></li> -->
					<li class="active"><a href="/thelastbattel/index.php/Home/Index/index">Blog</a></li>
					<li class="active"><a href="/thelastbattel/index.php/Home/Index/uploading">上传</a></li>
					<li class="active"><a href="/thelastbattel/index.php/Home/Index/userunset">注销</a></li>
                    <li><a href="http://123.57.74.156:88/" target="_blank"></a></li>
					
				</ul>
				<form action="http://blog.toruneko.net/search" class="navbar-form navbar-right" role="search" >
					<div class="form-group">
						<input name="kw" class="form-control" placeholder="关键字" type="text">
					</div>
					<button type="submit" class="btn btn-default">搜索</button>
				</form>
			</div>
		</div>
	</div>
 
<div style="padding: 100px 100px 10px;">
   <form class="bs-example bs-example-form" role="form" action="/thelastbattel/index.php/Home/Index/checkArticle" method="post">
					<select name = "kind">
						<option value = "xin">心情</option>
						<option value = "guanshui">灌水</option>
						<option value = "chuibi">吹逼</option>
					</selcet>
        <input type="text" class="form-control" stlye="" name="content">
        <input type="submit" class="form-control" style = "width:50px">
   </form>
</div>
</body></html>