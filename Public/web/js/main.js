window.onload=function()
{
	var oCon=document.getElementById('container');

	var oFirst_P=document.getElementById('firstPage');
	var oSecond_P=document.getElementById('secondPage');
  var oThird_P=document.getElementById('thirdPage');
  var oFour_P=document.getElementById('fourthPage');
  var oVideo=document.getElementById('video');
	var oNav=document.getElementById('nav');
  var oClose=document.getElementById('closeVideo');
  var clientHeight=document.documentElement.clientHeight;
  var navHeight=oNav.offsetHeight;
  $('.page').height(clientHeight);

	   oCon.style.height=4*clientHeight+'px';
     oSecond_P.style.top=clientHeight+'px';
     oThird_P.style.top=2*clientHeight+'px';
     oFour_P.style.top=3*clientHeight+'px';

     oVideo.style.top=navHeight+17+'px';
     oVideo.style.height=clientHeight-navHeight-17+'px';
     oClose.style.top=navHeight+'px';
     oClose.style.right=0;

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
        setTimeout(function(){$('html').one('mousewheel',scroll)},1500);
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
        $('#closeVideo').show();
      })
    //关闭视频
    $('#closeVideo').bind('click',
      function(){
        $('#video').hide();
        $('#closeVideo').hide();
      })
}