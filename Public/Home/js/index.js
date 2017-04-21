  //判断浏览器是否为IE，若为IE检测其版本
  //检测IE的版本
  function getIEVer() {
    var ua = navigator.userAgent; //获取用户端信息
    var b = ua.indexOf("MSIE "); //检测特殊字符串"MSIE "的位置
    if (b < 0) {
  return 10;
  }
   return parseFloat(ua.substring(b + 5, ua.indexOf(";", b))); //截取版本号字符串，并转换为数值
  }
 $(function(){
  if (getIEVer()<=9) {alert("网页不支持IE9以下的浏览器，请使用最新版本的浏览器打开！")};
 })

	//此处引用：鼠标滚轮mousewheel插件
	!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):"object"==typeof exports?module.exports=a:a(jQuery)}(function(a){function b(b){var g=b||window.event,h=i.call(arguments,1),j=0,l=0,m=0,n=0,o=0,p=0;if(b=a.event.fix(g),b.type="mousewheel","detail"in g&&(m=-1*g.detail),"wheelDelta"in g&&(m=g.wheelDelta),"wheelDeltaY"in g&&(m=g.wheelDeltaY),"wheelDeltaX"in g&&(l=-1*g.wheelDeltaX),"axis"in g&&g.axis===g.HORIZONTAL_AXIS&&(l=-1*m,m=0),j=0===m?l:m,"deltaY"in g&&(m=-1*g.deltaY,j=m),"deltaX"in g&&(l=g.deltaX,0===m&&(j=-1*l)),0!==m||0!==l){if(1===g.deltaMode){var q=a.data(this,"mousewheel-line-height");j*=q,m*=q,l*=q}else if(2===g.deltaMode){var r=a.data(this,"mousewheel-page-height");j*=r,m*=r,l*=r}if(n=Math.max(Math.abs(m),Math.abs(l)),(!f||f>n)&&(f=n,d(g,n)&&(f/=40)),d(g,n)&&(j/=40,l/=40,m/=40),j=Math[j>=1?"floor":"ceil"](j/f),l=Math[l>=1?"floor":"ceil"](l/f),m=Math[m>=1?"floor":"ceil"](m/f),k.settings.normalizeOffset&&this.getBoundingClientRect){var s=this.getBoundingClientRect();o=b.clientX-s.left,p=b.clientY-s.top}return b.deltaX=l,b.deltaY=m,b.deltaFactor=f,b.offsetX=o,b.offsetY=p,b.deltaMode=0,h.unshift(b,j,l,m),e&&clearTimeout(e),e=setTimeout(c,200),(a.event.dispatch||a.event.handle).apply(this,h)}}function c(){f=null}function d(a,b){return k.settings.adjustOldDeltas&&"mousewheel"===a.type&&b%120===0}var e,f,g=["wheel","mousewheel","DOMMouseScroll","MozMousePixelScroll"],h="onwheel"in document||document.documentMode>=9?["wheel"]:["mousewheel","DomMouseScroll","MozMousePixelScroll"],i=Array.prototype.slice;if(a.event.fixHooks)for(var j=g.length;j;)a.event.fixHooks[g[--j]]=a.event.mouseHooks;var k=a.event.special.mousewheel={version:"3.1.12",setup:function(){if(this.addEventListener)for(var c=h.length;c;)this.addEventListener(h[--c],b,!1);else this.onmousewheel=b;a.data(this,"mousewheel-line-height",k.getLineHeight(this)),a.data(this,"mousewheel-page-height",k.getPageHeight(this))},teardown:function(){if(this.removeEventListener)for(var c=h.length;c;)this.removeEventListener(h[--c],b,!1);else this.onmousewheel=null;a.removeData(this,"mousewheel-line-height"),a.removeData(this,"mousewheel-page-height")},getLineHeight:function(b){var c=a(b),d=c["offsetParent"in a.fn?"offsetParent":"parent"]();return d.length||(d=a("body")),parseInt(d.css("fontSize"),10)||parseInt(c.css("fontSize"),10)||16},getPageHeight:function(b){return a(b).height()},settings:{adjustOldDeltas:!0,normalizeOffset:!0}};a.fn.extend({mousewheel:function(a){return a?this.bind("mousewheel",a):this.trigger("mousewheel")},unmousewheel:function(a){return this.unbind("mousewheel",a)}})});
	
	$(function(){
		var i=0;
		var $btn = $('.section-btn li'),
			$wrap = $('.section-wrap'),
			$arrow = $('.arrow');
			$topBtn=$('#bs-example-navbar-collapse-1 a');
		
		/*当前页面赋值*/
		function up(){i++;if(i==$btn.length){i=0};}
		function down(){i--;if(i<0){i=$btn.length-1};}
		
		/*页面滑动*/
		function run(){
            $("#bs-example-navbar-collapse-1").find('.niceColor').removeClass('niceColor');	
			
			$topBtn.eq(i).addClass('niceColor');
			$wrap.attr("class","section-wrap").addClass(function() { return "put-section-"+i; }).find('.section').eq(i).find('.title').addClass('active');
		};
		
		/*右侧按钮点击	
		$btn.each(function(index) {
			$(this).click(function(){
				i=index;
				run();
			})
		});*/
		
		//顶部按钮点击	
		$topBtn.each(function(index) {
			$(this).click(function(){
				i=index;
				run();
				$(this).blur()	;
			})
		});

		
		/*翻页按钮点击*/

		$arrow.one('click',go);

		function go(){
			up();run();
			setTimeout(function(){$arrow.one('click',go)},300)
		};
		
 
		
		/*响应鼠标*/
	 	$wrap.one('mousewheel',mouse_);
		function mouse_(event){
			if(event.deltaY<0) {up()}
			else{down()}
			run();
			setTimeout(function(){$wrap.one('mousewheel',mouse_)},300)
		};
		
		/*响应键盘上下键
		$(document).one('keydown',k);
		function k(event){
			var e=event||window.event;
			var key=e.keyCode||e.which||e.charCode;
			switch(key)	{
				case 38: down();run();	
				break;
				case 40: up();run();	
				break;
			};
			setTimeout(function(){$(document).one('keydown',k)},300);
		}
		$(".navbar-brand").click(function(){window.location.reload()});*/
	});

/*导航栏的点击变色*/
	$(function()
{
	$("#bs-example-navbar-collapse-1 a").bind("click",function()
	{
		
		$('#bs-example-navbar-collapse-1').find('.niceColor').removeClass('niceColor');
		$(this).addClass('niceColor');
		
	})
}) 
/*时间轴变化*/  
    $(
    	function()
         {
                     
	  $("#timerSpot  li").hover(
          function(){$(this).find('.bigger').slideDown(500);}
                    ,
             function()
             {$(this).find('.bigger').slideUp(300)})
      
     var ArrWindow=
      ["<img src='Public/Home/images/ActPhoto1.jpg'/>2014年7月。社团成立。",
      "<img src='Public/Home/images/ActPhoto2.jpg'/>2014年12月，社团牵头，组建了浙江省高校联盟。",
      "<img src='Public/Home/images/ActPhoto3.jpg'/>2015年3月社团响应下沙政府号召，联合企业共同创办了杭州第一家O2O 店。",
      "<img src='Public/Home/images/ActPhoto4.jpg'/>2015年5月，承办了浙江高校安控杯 --【黑客马拉松大赛。】"]
       $("#timerSpot  li").bind('mouseover',
         function()
         { 
       	     var timerWindow=ArrWindow[$(this).attr("index")];  
       	     setTimeout(function(){$('#timerWindow').html(timerWindow)},300)
       	 })
     

/*每个部门图标对应介绍内容*/
   var ArrSign1=
   ["<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HW主席团是HW的日常工作机构，实行主席团负责制，经每年选举产生，向HW社团负责。HW主席团执行HW社团的各项职权，落实各部门提出的任务，挑动各部门的积极性，调节整个社团氛围，并做好HW社团各大活动的筹备。主席团构成：主席团由HW社长，副社长，部长，副部长，社长助理，技术部组长组成。",
   "<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;行政部是负责贯彻主席团指示。做好上下联络沟通工作，及时向主席团成员反映情况、反馈信息；搞好各部门间相互配合、综合协调工作；对各项工作和计划的督办和检查。组织安排社团重大活动或会议，或会同有关部门筹备社团其他会议及有关重要活动，做好会议记录和整理会议纪要，根据需要按会议决定发文。做好社团历年大事记的原始资料收集和编纂工作，以及人员变动信息。为丰富社团成员文化生活，组织安排各种文体活动和旅游活动。",
   "<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;产品部聚集了一群富有热情，同时对市场有敏锐的洞察力的小伙伴。每一款优秀的产品，都需要一个优秀的产品经理携手团队成员去打造。如果你脑洞大开，思想昂扬，对用户体验有着深刻的理解，喜欢与人沟通，肯吃苦，那么来产品部是你的不二选择。"];
    
   $(".sectorSign").bind('mouseover',
   	    function()
   	    {
          var signShow1=ArrSign1[$(this).attr('date')] ;    
   	      $('#signShow').html(signShow1);
   	    })
      
   var ArrSign2=
   ["<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;进入了移动互联网时代，各种手机app应运而生。 你想做基于android系统好的软件吗，这里无疑是你最好的选择。iOS组：开发基于苹果系统的软件。想进入一个以后可能会爆红的行业吗？这里将是你梦想的启航站。",
   "<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;一个网站给人的第一印象，往往取决与美工的设计。所以，美工的作用就是设计引人入胜的网页，与前台协同工作，打造一个经典的网页。美工常用的工具就是Photoshop ，如果你有独特的审美观，欢迎加入",
   "<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;前端主要运用HTML HTML5 CSS Javascript JQuery等语言码出漂亮，精美的网站，微信页面。如果对精美的网站充满好奇，来前台组绝对是正确的选择。",
   "<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;开发基于苹果系统的软件。想进入一个以后可能会爆红的行业吗？这里将是你梦想的启航站。",
   "<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hello World和杭州多家公司微信团体保持合作关系，而运营部就负责与他们的联系。运营部的日常工作是微信消息的推送，微信后台管理和维护，PHP HTML的学习，活动策划与实行，代码的修改与完善。当然如果有强烈的兴趣和责任心，无论精通技术与否，你都可成为我们的一部分。",
   "<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;后台主要运用PHP C++ Java Python Ajax 等语言加上搭建数据库，为网站前台做强有力的支持，与前台共同协作完成网站的搭建。"];
    $(".tecSign").bind('mouseover',
   	    function()
   	    {
          var signShow2=ArrSign2[$(this).attr('index')] ;    
   	      $('#signShow').html(signShow2);
   	    })

 }) 
 /*报名表异步数据传递*/
$(
function()
{
$("#submitBtn").bind(
  	'click',	function()
                  {    
                  	
                  	//   var username=$('#personName').val();
                  	//   var collage=$(' #personStudy').val();
                  	//   var phone=$('#phoneName ').val();
                   //     var stunumber=$('#studyName').val();
                   //     var email=$(' #emailName').val();
                   //     var textarea=$('textarea').val();
                   //     var gender=$('input[name=gender]')[0].checked;
                   //     var department=$('select[name=department]')[0].options[$('select[name=department]')[0].selectedIndex].value;
                   //     console.log(collage);
                  	// $.ajax
                  	// ({
                   //      url:"../index.html",
                   //      data:{
                   //         	username:username,
                   //      	collage:collage ,
                   //      	phone:phone,
                   //             stunumber:stunumber,
                   //            email:email,
                   //            textarea:textarea, 
                   //            gender:gender,
                   //            department:department
                   //      },
                   //      dataType:"JSON",
                   //      success:function(){},
                   //      error:function(){},   
                   //      type:"post",
                  	// }  );  
                 	 var form = $("form").serializeArray();
                     
                 	$.ajax({
                 		url:'/1.php',
                 		type:'post',
                 		dataType:'json',
                 		data:{form:form},
                 		success:function(data){    },
                 		error:function(){   }
                 	});
                });
 })         


