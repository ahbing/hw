// --列头全选框被单击--- 
function ChkAllClick(sonName, cbAllId){ 
var arrSon = document.getElementsByName(sonName); 
var cbAll = document.getElementById(cbAllId); 
var tempState=cbAll.checked; 
for(i=0;i<arrSon.length;i++) { 
if(arrSon[i].checked!=tempState) 
arrSon[i].click(); 
} 
} 

// --子项复选框被单击--- 
function ChkSonClick(sonName, cbAllId) { 
var arrSon = document.getElementsByName(sonName); 
var cbAll = document.getElementById(cbAllId); 
for(var i=0; i<arrSon.length; i++) { 
if(!arrSon[i].checked) { 
cbAll.checked = false; 
return; 
} 
} 
cbAll.checked = true; 
} 
//导航栏
window.onload=function(){
	var nav = document.getElementById("nav");
	var links = nav.getElementsByTagName("li");
	var lilen = nav.getElementsByTagName("a");//判断地址
	var currenturl = document.location.href;
	var last = 0;
	for (var i=0;i<links.length;i++)
	{
		var linkurl =  lilen[i].getAttribute("href");
		if(currenturl.indexOf(linkurl)!=-1)
	        {
	    		last = i;
	        }
	}
	links[last].className = "active";  
}
