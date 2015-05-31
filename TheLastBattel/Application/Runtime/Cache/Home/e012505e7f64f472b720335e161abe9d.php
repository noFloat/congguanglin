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
					<li class="active"><a href="/thelastbattel/index.php/Home/Index/deleteArticle">删除</a></li>
					<li class="active"><a href="/thelastbattel/index.php/Home/Index/remark">评论</a></li>
                    <li><a href="" target="_blank"></a></li>				
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
	<ol class="breadcrumb">
	  <li><a href="#"><?php echo ($article["kind"]); ?></a></li>
	  <li><a href="#">By <?php echo ($article['user_name']); ?></a></li>
	  <li class="active"><?php echo ($article["time"]); ?>	</li>
	</ol>
    <div class="container-fluid blog-container">
	    <div class="row">
			<div class="col-md-9 blog-container-list">
				<div class="page-header">
				
				</div>
				<div class="panel">
					<div class="panel-body" id ="articleContent">
						<?php echo ($article["content"]); ?>
					</div>
	
				</div>
				</div>
		</div>
	</div>
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
   更改
</button>

<div id="div2"><p></p></div>
<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" 
               aria-hidden="true">×
            </button>
            <h4 class="modal-title" id="myModalLabel">
               评论
            </h4>
         </div>
         <div class="modal-footer">
   <form class="form-horizontal" role="form"method="post" action="/thelastbattel/index.php/Home/Index/remark" name="edit" id ="edit" target="_top">
   <div class="form-group">
      <label for="firstname" class="col-sm-2 control-label">评论</label>
      <div class="col-sm-10">
         <input type="text" class="form-control" id="firstname" name = "content" id="content"
            placeholder="请输入内容">
      </div>
   </div>
      <div class="col-sm-offset-2 col-sm-10">
         <button type="submit" id = "div1"class="btn btn-default">评论</button>
      </div>
   </div>
</form>

         </div>
      </div>
   </div>
</div>

</body>
</html>