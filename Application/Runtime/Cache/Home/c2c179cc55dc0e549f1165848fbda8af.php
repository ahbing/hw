<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>HW club</title>
  <script type="text/javascript" src="/hw/Public/web/js/jquery.js"></script>
</head>
<script type="text/javascript" src="/hw/Public/web/js/main.js"></script>  
<link rel="stylesheet" href="/hw/Public/web/css/main.css"/>
<script type="text/javascript" src="/hw/Public/web/js/jquery.mousewheel.min.js"></script>
<style type="text/css">
   
</style>
<script type="text/javascript">
</script>
<body>

<nav id="nav"> 
   <div id='new'>
   <img src="/hw/Public/web/images/logo.png"  id='logo'> <b id='b1'>HelloWorld</b>
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
<span id="closeVideo">关闭窗口</span>
     <video id="video">
      <source src="/hw/Public/web/movies/movie.mp4" type="video/mp4" />
      <source src="/hw/Public/web/movies/movie.ogg" type="video/ogg" />
      <source src="/hw/Public/web/movies/movie.webm" type="video/webm" />
     </video>
<div id='container'>
<!--第一页-->
  <div class='page' id="firstPage"> 
           <div id='HelloWorld'> 
            <h1>HelloWorld</h2><br><br>
            <h3>Life is but a tale,told by hacker. </h3><br>
            <h3>Hack forward,until limitless. </h3><br><br>
             <h4>观看宣传视频<img  id="playVideo" src="/hw/Public/web/images/play.png" align="top"/></h4> 
           </div>
    </div>

<!--第二页-->
  <div class='page' id="secondPage"><br><br><br><br>

  </div>

<!--第三页-->  
  <div class='page' id="thirdPage"><br><br><br><br><br><br><br>
     <div id="newsArea">
       <div id="case1">11111111111</div>
       <div id="case2">2222222222</div>
       <div id="case3">3333333333</div>
       <div id="case4">4444444444</div>
       <div id="case5">5555555555</div>

     </div>

     <div id="newsLine">
       <div id="newsLast"><<</div>
       <ul id="newsTime">
       <li index="case1">1</li>
       <li index="case2">2</li>
       <li index="case3">3</li>
       <li index="case4">4</li>
       <li index="case5">5</li>
       </ul>
       <div id="newsNext">>></div>
     </div> 
  </div>
<!--第四页-->
  <div class='page' id="fourthPage"><br><br><br><br><br><br>
   <div id="formDiv">
    <form action="/" method="post">
     <div class="formLeft" id="formName"> 
      <label for="name">姓名:</label>  
      <input type="text" id="name" name="name" placeholder="请输入你的名字" >
     </div>
     <div class="formRight" id="formSex">
      <label>性别:</label>&nbsp;&nbsp;
      <input type="radio" name="sex" value="0" checked>男
      <input type="radio" name="sex" value="1">女
     </div> 
     <div class="formLeft" id="formPhone">
      <label for="phone">手机:</label>
      <input type="text" id="phone" name="phone" placeholder="请输入你的手机号">
     </div>
     <div class="formRight" id="formNumber">  
      <label for="number">学号:</label>
      <input type="text" id="number" name="number" placeholder="请输入你的学号">
     </div>
     <div class="formLeft" id="formAcademy">
      <label for="academy">院系:</label>
      <input type="text" id="academy" name="academy" placeholder="请输入你的院系">
     </div>
     <div class="formRight" id="formMind">
      意向部门:&nbsp;
      <select name="mind">
        <option value="0" selected>行政</option>
        <option value="1">运营</option>
        <option value="2">设计</option>
        <option value="3">前端</option>
        <option value="4">后台</option>
        <option value="5">ios</option>
        <option value="6">安卓</option>
      </select>
      </div>
      <div class="formLeft" id="formIntro">
      <label for="intro">介绍:</label>
      <textarea  id="intro" placeholder="请自我介绍下自己"></textarea>
      </div>
      <input type="submit" id="formSubmit"></input> 
    </form>
   </div>
  </div>  
</div>  

<!-- <div id="next-page"></div> -->
</body>
</html>