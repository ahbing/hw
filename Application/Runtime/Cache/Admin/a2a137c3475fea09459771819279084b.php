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
	<table class="table table-hover">
		<tr>
		  	<th>#</th>
		  	<th>部门</th>
		  	<th>介绍</th>
		  	<th>操作</th>
		</tr>
	<?php if(is_array($intro)): foreach($intro as $key=>$vo): ?><tr>
			<td><?php echo ($key+1); ?></td>
			<td><?php echo ($vo["department"]); ?></td>
			<td><a data-toggle="collapse" data-parent="#accordion" href="#<?php echo ($vo["id"]); ?>">隐藏/显示</a></td>
			<td>
				<a href="<?php echo U('Admin/Intro/edit/id/'.$vo['id']);?>" style="text-decoration:none"><span style="text-align:center;color:red">编辑</span></a>
				<a href="<?php echo U('Admin/Intro/delete/id/'.$vo['id']);?>" style="text-decoration:none"><span style="text-align:center;color:red">删除</span></a>
			</td>
		</tr>
		<tr id="<?php echo ($vo["id"]); ?>" class="panel-collapse collapse">
			<td colspan="8" class="panel-body"><?php echo ($vo["intro"]); ?></td>
		</tr><?php endforeach; endif; ?>
	</table>
	<a class="btn btn-success btn-lg btn-block" href="<?php echo U('Admin/Intro/add');?>" role="button">添加</a>
</div>



    </div>
    <!-- /主体 -->
    <!-- 底部 -->
    <footer>
    </footer>
    <!-- /底部 -->
</body>

</html>