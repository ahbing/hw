<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />
  <meta name="renderer" content="webkit">
  <title>HW官网</title>
<head>
<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<script src="/hw/Public/Home/js/bootstrap.min.js"></script>
<link href="/hw/Public/Home/css/bootstrap.min.css" rel="stylesheet">
<script src="/hw/Public/Home/js/index.js"></script>
<link href="/hw/Public/Home/css/index.css" rel="stylesheet">
</head>
<body>
<nav class="naver-default  navbar-fixed-top" style="min-width:965px;">

    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div  id="bs-example-navbar-collapse-1">
      <img src="/hw/Public/home/image/logo.png" />
      <ul class="nav navbar-nav navbar-right" style="list-style:none;">
               
        <li><a href="#" class="niceColor" >
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;首页&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                
        <li><a href="#">社团介绍</a></li> 
                
        <li><a href="#" >产品展示</a></li>
                
        <li><a href="#" >社团动态</a></li>
              
        <li><a href="#" >合作伙伴</a></li>
                
        <li><a href="#" >加入我们</a></li>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </ul>

        
      
    </div><!-- /.navbar-collapse -->

</nav>
 <section class="section-wrap">     
    <div class="section section-1" >
           <img src="/hw/Public/Home/image/background1.jpg" style="width:100%;height:100%;min-width:965px;overflow-y:hidden;"/>
      <div class="title active" >
        
      </div>
    </div>
    <div class="section section-2">
      
             
<!--社团介绍轮播页面开始-->           
 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="height:100%;" >
  <!-- Indicators -->   
  <!-- Wrapper for slides -->
        <div class="carousel-inner" style="height:100%;" >
          
          <div class="item active"  style="height:100%;">
            <img src="/hw/Public/Home/image/HWIntroduce1.jpg" style="min-height:650px;min-width:1300px;width:100%;height:100%;"  alt="1" >
          </div>
       
          <div class="item"   style="height:100%;">
             <img src="/hw/Public/Home/image/HWIntroduce2.jpg" style="min-height:650px;min-width:1300px;width:100%;height:100%;" alt="2">
           <div id="preSign" class="sectorSign">主席团</div>
          </div>
          
          <div class="item" style="height:100%;">
             <img src="/hw/Public/Home/image/HWIntroduce1.jpg" style="min-height:650px;min-width:1300px;width:100%;height:100%;" alt="3">
            
          </div>
         
       </div>

  <!-- Controls -->
     <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
       <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
       <span class="sr-only">Previous</span>
     </a>
     <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
       <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
       <span class="sr-only">Next</span>
     </a>
 </div>
<!--社团介绍轮播页面结束--> 
    </div>
    <div class="section section-3">
      
            
      
          
    </div>
   <!--社团介绍开始-->  
   <div class="section section-4">
         <img src="/hw/Public/Home/image/orgAct.jpg" style="min-height:650px;min-width:1300px;width:100%;height:100%;overflow-y:hidden;"/>
          
            <div  id="timerLine" style="height:5px;background:#484848;width:100%;position:absolute;top:580px;">
            </div>
             <!--时间轴上的点-->
            
             <ul id="timerSpot">
              <li><div class="bigger"><span style="line-height:100px;font-size:20px;">1月</span></div></li>
              <li><div class="bigger"></div></li>
              <li><div class="bigger"></div></li>
              <li><div class="bigger"></div></li>
              <li><div class="bigger"></div></li>
              <li><div class="bigger"></div></li>
              <li><div class="bigger"></div></li>
              <li><div class="bigger"></div></li>
              <li><div class="bigger"></div></li>
             </ul>
 
          <!--一个大的DIV随鼠标移动内容变化-->   
          <div id="timerWindow">{社团动态}</div>
          
    </div>
   <!--社团介绍结束--> 
         <div class="section section-5">
      
            
            
    </div>
<!--加入我们开始-->   
<div class="section section-6">
<img src="/hw/Public/Home/image/joinUs.jpg" style="min-height:650px;min-width:1300px;width:100%;height:100%;overflow-y:hidden;"/>
  <div class="title">
   <div id="formContainer">
     <form action="handle" method="post">
    <div id="formLeft">
     
     <div class="form-group">
      <label for="personName">姓名</label>&nbsp;&nbsp;&nbsp;
       <input type="text" id="personName" placeholder="请输入姓名" name="name">
     </div>
     
     <div class="form-group">
      <label for="personStudy">院系</label>&nbsp;&nbsp;&nbsp;
      <input type="text"  id="personStudy" placeholder="请输入学院" name="major">
     </div>
     
     <div class="form-group">
      <label for="phoneName">手机</label>&nbsp;&nbsp;&nbsp;
      <input type="tel" id="phoneName" placeholder="请输入手机号" name="mobile">
     </div>
    </div>
   
    <div id="formRight">
    
     
      <div class="radio"><span>性别</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <label>
      <input type="radio" name="gender" id="optionsRadios1" value="男" checked><span>男</span>
      </label>
      &nbsp;&nbsp;&nbsp;&nbsp;
      <label>
      <input type="radio" name="gender" id="optionsRadios2" value="女"><span>女</span>
      </label>
      </div>
     
      <div class="form-group">
      <label for="studyName">学号</label> &nbsp;&nbsp;&nbsp;
      <input type="tel"  id="studyName" placeholder="请输入学号" name="number">
      </div>
   
   
      <div class="form-group">
      <label for="emailName">邮箱</label> &nbsp;&nbsp;&nbsp;
      <input type="email"  id="emailName" placeholder="请输入邮箱" name="email">
      </div>
     
    </div>
  
   <div id="formBottom">
   
    <span>意向部门:</span>&nbsp;&nbsp;&nbsp;&nbsp;
    <select name="department"style="border-radius:5px;color:#000;" >
      <option><span>办公室</span></option>
      <option><span>外联部</span></option>
      <option><span>美工组</span></option>
      <option><span>运营部</span></option>
      <option><span>前台组</span></option>
      <option><span>后台组</span></option>
      <option><span>安卓组</span></option>
      <option><span>IOS组</span></option>
    </select> <br/><br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <textarea  rows="10" placeholder="简单介绍一下自己为什么想加入这个部门" style="width:570px;height:150px;border-radius:10px;color:#000;" name="info"></textarea>
 
   </div>
    <button id="submitBtn" type="submit" class="btn btn-primary" >提交</button>
   </form>
    </div> 
   <div id="forum"><a href="#">内部论坛</a></div> 
   <div id="census"><a href="#">站长统计</a></div>
   </div>
 </div>
<!--加入我们结束-->
  </section>
  <ul class="section-btn" style="list-style:none;">
    <li class="on"></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
      <li></li>
  </ul>
  <div class="arrow">&laquo;</div>




</body>
</html>