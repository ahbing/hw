;(function(){
	var dpr, rem, scale;
	var docEl = document.documentElement;
	var fontEl = document.createElement('style');
	var metaEl = document.querySelector('meta[name="viewport"]');

	// 获取dpr
	dpr = window.devicePixelRatio || 1;
	// 设置基准值  除以10是为了方便计算
	rem = docEl.clientWidth * dpr / 10;
	scale = 1 / dpr;
	// 设置viewport，进行缩放，达到高清效果
	metaEl.setAttribute('content', 'width=' +  scale*docEl.clientWidth + ',initial-scale=' + scale + ',maximum-scale=' + scale + ', minimum-scale=' + scale + ',user-scalable=no');
	// 设置data-dpr属性，留作的css hack之用
	docEl.setAttribute('data-dpr', dpr);

	// 动态写入样式
	docEl.firstElementChild.appendChild(fontEl);
	fontEl.innerHTML = 'html{font-size:' + rem + 'px!important;}';

	// 给js调用的，某一dpr下rem和px之间的转换函数
	window.rem2px = function(v) {
	v = parseFloat(v);
	return v * rem;
	};
	window.px2rem = function(v) {
	    v = parseFloat(v);
	    return v / rem;
	};

	window.dpr = dpr;
	window.rem = rem;
})();
;(function(){
	// common function
	/*
	* replaceClass 替换className
	* @params {object} element
	* @params {string} oldClassName
	* @params {string} newClassName
	 */
	var replaceClass = function(el,o,n){
		if(el.classList.toString().indexOf(o)!==-1){
			el.classList.remove(o);
			el.classList.add(n);
		}else{
			el.classList.add(n);
		}
	}

	window.replaceClass = replaceClass;
})();

/*
* fetchDate 通过调用 api 请求数据
* @param { String } api 地址
 */
;(function (){
	function fetchDate (url,cb) {
		var xhr = new XMLHttpRequest();
		var response;
		xhr.onreadystatechange = function() {
			if(xhr.readyState == XMLHttpRequest.DONE) {
				if(xhr.status == 200){
					// handle callback
					 response = JSON.parse(xhr.responseText);
				}else{
					// handle error
					var err = "请求数据时发生了错误";
					return console.log(err);
				}
			}
		};
		/* true 异步 false 同步
		*  采用返回值的话 必须同步
		*  var data = fetchDate(url); // main.js line 439
		*  so use false
		*/
		xhr.open('GET', url, false);
		xhr.send(null);
		return response;
	};
	window.fetchDate = fetchDate;


	// 简单的封装
	// function GetData(obj) {
	// 	if(this instanceof GetData){
	// 		this.type = obj.type || 'get',
	// 		this.data = obj.data || null,
	// 		this.url  = obj.url || '',
	// 		this.sync = obj.sync || true,
	// 		this.success = obj.success || function(res){
	// 			console.log(res);
	// 		},
	// 		this.error = obj.error || function(err){
	// 			console.log(err);
	// 		};
	// 		var that = this;
	// 		var createXHR = function(){
	// 			var xhr = new XMLHttpRequest();
	// 			xhr.onreadystatechange = function(){
	// 				if(xhr.readyState == XMLHttpRequest.DONE) {
	// 					if(xhr.status == 200){
	// 						// handle callback
	// 						var res = JSON.parse(xhr.responseText);
	// 						that.success(res);
	// 					}else{
	// 						// handle error
	// 						var err = {
	// 							status:xhr.status,
	// 							statusText:xhrstatus
	// 						};
	// 						that.error(err);
	// 					}
	// 				}
	// 			}
	// 			xhr.open(that.type, that.url, that.sync);
	// 			xhr.send(that.data)
	// 		};

	// 		createXHR();
	// 	} else {
	// 		return new GetData(obj);
	// 	}
	// }
	// // demo
	// var p =  GetData({
	// 	type:'post',
	// 	url:'http://localhost/home/source/getNews',
	// 	data:{num:1},
	// 	success:function(res){
	// 		console.log(2222);
	// 		console.log(res);
	// 	},
	// 	error: function(err){
	// 		console.log(err);
	// 	},
	// 	async:false,
	// });
	
})();
