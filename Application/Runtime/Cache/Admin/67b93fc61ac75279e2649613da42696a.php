<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>

<head>
    <title>HelloWorld后台管理系统</title>
    <meta charset="utf-8">
    <script src="/hw/Public/Admin/js/jquery.min.js"></script>
    <script src="/hw/Public/Admin/js/bootstrap.min.js"></script>
    <link href="/hw/Public/Admin/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/hw/Public/Admin/css/index.css">
</head>

<body>
    <!-- 头部 -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo U('admin/index/index');?>">
                        HelloWorld后台管理系统
                    </a>
                </div>
                <div class="btn-group">
                        <li><a href="<?php echo U('Admin/User/logout');?>">退出</a></li>
                </div>
            </div>
        </nav>
    </header>
    <!-- /头部 -->
    <!-- 主体 -->
    
    <div class="row">
        <div class="col-md-2">
            <ul class="nav nav-pills nav-stacked" id="nav">
                <li><a href="<?php echo U('admin/news/newslist');?>">新闻动态模块</a></li>
                <li><a href="<?php echo U('admin/apply/apply');?>">报名数据模块</a></li>
                <li><a href="<?php echo U('admin/intro/intro');?>">社团介绍模块</a></li>
            </ul>
        </div>
        <div class="col-md-8">
        </div>
        

<div class="col-md-8">
	<form >
	  <div class="form-group">
	    <label for="title">标题</label>
	    <input type="input" class="form-control" id="title" placeholder="在此输入标题">
	  </div>
	  <div class="form-group">
	    <label for="text">正文</label>
	    <textarea class="form-control" rows="10" id="text"></textarea>
	  </div>
	  <div class="form-group">
	    <label for="media">添加媒体</label>
	    <input type="file" id="media">
	  </div>
	</form> 
	<button type="button" class="btn btn-success btn-lg btn-block"  style="text-align:center;">发布</button>
</div>


    </div>
    <!-- /主体 -->
    <!-- 底部 -->
    <footer>
    </footer>
    <!-- /底部 -->
</body>

</html>