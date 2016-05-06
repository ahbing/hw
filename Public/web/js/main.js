window.onload=function()
{   
  var oCon=document.getElementById('container');

  var oFirst_P=document.getElementById('firstPage');
  var oSecond_P=document.getElementById('secondPage');
  var oThird_P=document.getElementById('thirdPage');
  var oFour_P=document.getElementById('fourthPage');
  var oVideo=document.getElementById('video');
  var oNext_P=document.getElementById('next-page');
  // var oHW=document.getElementById('HelloWorld');

  // var oNav=document.getElementById('nav');
  var oClose=document.getElementById('closeVideo');
  var NAV=document.getElementById('nav');

  var clientHeight=document.documentElement.clientHeight;
  var clientWidth=document.documentElement.clientWidth;
  // var navHeight=oNav.offsetHeight;
  var introType=document.getElementById('introType');
  var introTech=document.getElementById('introTech');
  introType.onselectstart = function(){return false;}
  introTech.onselectstart = function(){return false;}
  NAV.onselectstart = function(){return false;}
     $('.page').height(clientHeight);
    
     oCon.style.height=4*clientHeight+'px';
     
     oVideo.style.height=clientHeight+'px';
     oVideo.style.width=clientWidth+'px';
     
     // oNext_P.style.left=0.5*clientWidth-25+'px'

     var i=0;
     function pageScroll()
     {
      $('#container').animate({
               top: -clientHeight*(i-1)
          },'slow');
     };

   
   // 响应右上角
     $('#home').bind('click',
      function()
      { 
        i=1;
        pageScroll(); 
      });
     $('#introduction').bind('click',
      function()
      { 
        i=2;
        pageScroll(); 
      });
     $('#news').bind('click',
      function()
      { 
        i=3;
        pageScroll(); 
      });
     $('#joinUs').bind('click',
      function()
      { 
        i=4;
        pageScroll(); 
      });
  // 响应左边li   
     $('#leftLi1').bind('click',function(){ i=1;pageScroll(); });
     $('#leftLi2').bind('click',function(){ i=2;pageScroll(); });
     $('#leftLi3').bind('click',function(){ i=3;pageScroll(); });
     $('#leftLi4').bind('click',function(){ i=4;pageScroll(); });

  // 响应鼠标
        var j=1;
      $('html').one('mousewheel',scroll)
      function scroll(event)
      {
         setTimeout(function(){$('html').one('mousewheel',scroll)},500);
               
              
              if (event.deltaY>0) 
               {    
                    //上拉
                    if(j>1)
                          --j;
                    i=j;
              } 
              else if(event.deltaY<0) 
              {   
                  //下拉
                  if(j<4)
                        ++j;
                  i=j;
               };
               pageScroll();
             
      }
   // 弹出视频
  $('#playVideo').bind('click',
      function(){
        $('#video').show();
        oVideo.play();
        $('#closeVideo').show();
      })
   //关闭视频
    $('#closeVideo').bind('click',
      function(){
        $('#video').hide();
        oVideo.pause();
        $('#closeVideo').hide();
      })
  //部门介绍界面
    $('#jishu').bind('click',
      function(){
      var introLoc=$('#introTech').offset().left;
       if(introLoc==730) 
      {
        $('#introTech').animate({
          left: '880px'
        },'slow');
      }
      else
      {
        $('#introTech').animate({
           left: '730px'
        },'slow');
      }
      
      })
    $('#jishu').bind('mouseover',function(){
      var js=$(this).attr('index');
        $('#introArea div').hide();
        $('#'+js).show();
    })
    $('#introTech li').bind('mouseover',
      function(){
        var idli=$(this).attr('index');
        $('#introArea div').hide();
        $('#'+idli).show();
      })
    $('#xingzheng').bind('mouseover',
      function(){
        var xz=$(this).attr('index');
        $('#introArea div').hide();
        $('#'+xz).show();
      })
    $('#yunying').bind('mouseover',
      function(){
        var yy=$(this).attr('index');
        $('#introArea div').hide();
        $('#'+yy).show();
      })

  //新闻页面timeline
     $('#newsTime>li').bind('click',
      function(){
        var id=$(this).attr('index');
        $('#newsArea>div').hide();
        $("#"+id).show();
     })

     $('#newsNext').bind('click',
      function(){
        $('#newsTime').animate({
          left: '-800px'
        },"slow");
      })
     $('#newsLast').bind('click',
      function(){
        $('#newsTime').animate({
          left: '0px'
        },"slow");
      })
     
}