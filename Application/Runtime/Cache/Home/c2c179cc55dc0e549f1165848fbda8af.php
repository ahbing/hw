<?php if (!defined('THINK_PATH')) exit();?>		<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HW club</title>
	<script type="text/javascript" src="/Public/web/js/jquery.js"></script>
</head>
<script type="text/javascript" src="/Public/web/js/main.js"></script>
<link rel="stylesheet" href="/Public/web/css/main.css"/>
<script type="text/javascript" src="/Public/web/js/jquery.mousewheel.min.js"></script>
<style type="text/css">

</style>
<script type="text/javascript">
</script>
<body>

<nav id="nav">
   <div id='new'>
	 <img src="/Public/web/images/logo.png"  id='logo'> <b id='b1'>HelloWorld</b>
   </div>
   <ul id='navUl'>
    <li><b class="b2" id="joinUs">JoinUs</b></li>
    <li ><b class="b2"id="news">News</b></li>
    <li ><b class="b2"id="introduction">Introduction</b></li>
    <li ><b class="b2"id='home'>Home</b></li>
   </ul>
</nav>
<ul id="leftUl">
    <li id='leftLi1'></li>
    <li id='leftLi2'></li>
    <li id='leftLi3'></li>
    <li id='leftLi4'></li>
</ul>
<div id='container'>

	<div class='page' id="firstPage">
    <div id='HelloWorld'>
      <h1>HelloWorld</h2><br><br>
      <h3>Life is but a tale,told by hacker. </h3><br>
      <h3>Hack forward,until limitless. </h3><br><br>
      <h4>观看宣传视频</h4> <img  id="playVideo" src="/Public/web/images/play.png" >
    </div>
    <span id="closeVideo">关闭窗口</span>
    <embed
      id="video"
      src="http://player.youku.com/player.php/sid/XNTEyOTM1MDQ4/v.swf"
      allowFullScreen="true"
      quality="high"
      autostart="false"
      width="700"
      height="200"
      align="middle"  allowScriptAccess="always" type="application/x-shockwave-flash">
    </embed>
	</div>

	<div class='page' id="secondPage"><br><br><br><br>第二页</div>
	<div class='page' id="thirdPage"><br><br><br><br>第三页</div>
	<div class='page' id="fourthPage"><br><br><br><br>第四页</div>

</div>



</body>
</html>