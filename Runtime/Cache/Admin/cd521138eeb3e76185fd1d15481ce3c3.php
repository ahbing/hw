<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	
<title>HelloWorld后台管理系统</title>
<meta charset="utf-8">
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="/hw/Public/Admin/css/index.css">
<script src="http://cfdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="httfp://cfdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


</head>
<body>
	<!-- 头部 -->
	<header>

<nav class="navbar navbar-default">
	<div class="container-fluid">
	<div class="navbar-header">
  		<a class="navbar-brand" href="<?php echo U('admin/index/index');?>">
    		<!--<img alt="Brand" src="logo1.jpg">-->HelloWorld后台管理系统
  			
  		</a>
	</div>
	<div class="btn-group">
		<span class="glyphicon glyphicon-user dropdown-toggle" data-toggle="dropdown" aria-expanded="false"></span>
		<ul class="dropdown-menu dropdown-menu-right" role="menu">
		    <li><a href="<?php echo U('admin/user/logout');?>">退出</a></li>
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
<li><a href="<?php echo U('admin/produce/producelist');?>">产品展示模块</a></li>
<li><a href="<?php echo U('admin/partner/partnerlist');?>">合作伙伴展示模块</a></li>
<li><a href="<?php echo U('admin/registration/registration');?>">报名数据模块</a></li>
</ul> 
</div> 
<div class="col-md-8">
</div>
</include>


<div class="col-md-8">
	<table class="table table-bordered table-hover">
		<tr>
		  	<th>姓名</th>
		  	<th>性别</th>
		  	<th>院系</th>
		  	<th>学号</th>
		  	<th>手机号</th>
		  	<th>邮箱</th>
		  	<th>意向部门</th>
		  	<th>介绍</th>
		</tr>
		<?php if(is_array($apply)): foreach($apply as $key=>$vo): ?><tr>
			<td><?php echo ($vo["name"]); ?></td>
			<td><?php echo ($vo["gender"]); ?></td>
			<td><?php echo ($vo["major"]); ?></td>
			<td><?php echo ($vo["number"]); ?></td>
			<td><?php echo ($vo["mobile"]); ?></td>
			<td><?php echo ($vo["email"]); ?></td>
			<td><?php echo ($vo["department"]); ?></td>
			<td><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">隐藏/显示</a></td>
		</tr>
		
		<tr id="collapseTwo" class="panel-collapse collapse">
			<td colspan="8" class="panel-body"><?php echo ($vo["info"]); ?></td>
		</tr><?php endforeach; endif; ?>
	</table>
</div>


</div>

	<!-- /主体 -->

	<!-- 底部 -->
	<footer>
<!--底部-->


</footer>

	<!-- /底部 -->
</body>
</html>