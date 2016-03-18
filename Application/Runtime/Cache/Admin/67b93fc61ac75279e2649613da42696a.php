<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>

<head>
    <title>HelloWorld后台管理系统</title>
    <meta charset="utf-8">
    <script src="/Public/Admin/js/jquery.min.js"></script>
    <script src="/Public/Admin/js/bootstrap.min.js"></script>
    <link href="/Public/Admin/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/Public/Admin/css/index.css">
</head>

<body>
    <!-- 头部 -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo U('admin/index/index');?>">
                        HelloWorld后台管理系统
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?php echo U('Admin/User/logout');?>">退出</a></li>
                        </ul>
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
	<form action="<?php echo U('Admin/news/publish');?>" method="post" enctype="multipart/form-data">
	  <div class="form-group">
	    <label for="title">标题</label>
	    <input type="input" class="form-control" id="title" name="title" placeholder="在此输入标题" required>
	  </div>
	  <div class="form-group">
	    <label for="text">正文</label>
	    <input class="form-control" type="url" id="text" placeholder="链接地址：http://www.baidu.com" name="url" required>
	  </div>
	  <div class="form-group">
	    <label for="media">添加媒体</label>
	    <input type="file" id="media" name="pic" required>
	  </div>
	  <button type="submit" class="btn btn-success btn-lg btn-block"  style="text-align:center;">发布</button>
	</form> 
	
</div>


    </div>
    <!-- /主体 -->
    <!-- 底部 -->
    <footer>
    </footer>
    <!-- /底部 -->
    <script>
        $(function(){
            var url = window.location.href;
            var a = $('#nav').find('a');
            $.each(a, function(index, val) {
                 /* iterate through array or object */
                 if(val.href == url){
                    $(val).parent().addClass('active');
                 }
                 else {
                    $(val).parent().removeClass('active');
                 }
            });
        })
    </script>
</body>

</html>