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
	<table class="table table-hover">
		<tr>
		  	<th>
		  		<INPUT name="chkAll" id="chkAll" title="全选" onClick="ChkAllClick('chkSon','chkAll')" type="checkbox" />
		  	</th>
		  	<th>序号</th>
		  	<th>合作伙伴名称</th>
		  	<th>logo</th>
		  	<th>链接</th>
		  	<th>操作</th>
		</tr>
		<tr>
			<td>
				<INPUT name="chkSon" id="chkSon1" type="checkbox" value='1' onclick="ChkSonClick('chkSon','chkAll')" />
			</td>
			<td>1</td>
			<td>名称1</td>
			<td><img src="bootstrap-logo.png" alt="..." style="width:auto;height:20px"/></td>
			<td><a href="http://www.bootcss.com/">http://www.bootcss.com/</a></td>
			<td>
				<a href="Partner.html" style="text-decoration:none"><span>编辑</span></a>
				<span data-toggle="modal" data-target="#myModal">删除</span>
			</td>
		</tr>
		<tr>
			<td>
				<INPUT name="chkSon" id="chkSon2" type="checkbox" value='2' onclick="ChkSonClick('chkSon','chkAll')" />
			</td>
			<td>2</td>
			<td>名称2</td>
			<td><img src="baidu_logo.gif" alt="..." style="width:auto;height:20px"/></td>
			<td><a href="http://www.baidu.com">http://www.baidu.com</a></td>
			<td>
				<a href="Partner.html"><span>编辑</span></a>
				<span>删除</span>
			</td>
		</tr>
	</table>
	<!--modal-->
  	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
    	<div class="modal-dialog"style="width:20%;">
      		<div class="modal-content">
		        <div class="modal-body">
		          	<center>确定删除？</center>
		        </div>
		        <div class="modal-footer">
		          	<button type="button" class="btn btn-success" data-dismiss="modal" >是</button>
		          	<button type="button" class="btn btn-primary" data-dismiss="modal">取消</button>
		        </div>
      		</div>
    	</div>
  	</div><!--end of modal-->
	<a class="btn btn-success btn-lg btn-block" href="<?php echo U('publish');?>" role="button">添加</a>
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