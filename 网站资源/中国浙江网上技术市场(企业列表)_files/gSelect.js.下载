/**
 * 自定义下拉列
 * 
 * Licensed under the GPL:
 *   http://www.gnu.org/licenses/gpl.txt
 *
 * Copyright 2010 goldensoft.com 
 * 
 */
var gSelect = {};

var oldValue = ""; // 上一次输入的值，

gSelect.bindInputs = new Map();

gSelect.vcode = new Map();

gSelect.currentOpen = null;
gSelect.canClose = true;
gSelect.isDrpWdInit=false;

gSelect.init = function (D){
	if (gSelect.isDrpWdInit)
		return;
		
	var domain = "";
	if (typeof(HOST_DOMAIN)!='undefined'){
		if (HOST_DOMAIN!=""){
			domain = "<script>document.domain='"+HOST_DOMAIN+"';</script>";
		}
	}
	try{
		D.open();
		D.write("<html>");
		D.write("<head>");
		D.write(domain); // Write Domain
		D.write("<style>");
		D.write(".gd_selected_style {background-Color: #102681;color: #fff;}");
		D.write("div,td{font-size:9pt;}img{border:none;}");
		D.write("</style>");
		D.write("</head>");
		D.write('<body topmargin="0" leftmargin="3" rightmargin="2" bottommargin="0"><div id="iframediv"></div></body>');
		D.write("</html>");
		// 判断IE浏览器，IE浏览器close会触发load，死循环
		//alert(navigator.userAgent);
		//IE7-10
		//if(navigator.userAgent.indexOf("MSIE")>0) { 
		//	gSelect.isDrpWdInit = true;
		//}
		//IE11
		//if(u_agent.indexOf('Trident')>-1&&u_agent.indexOf('rv:11')>-1){
		//	gSelect.isDrpWdInit = true;
		//}
		//modify by wjl 20150105
		if(!!window.ActiveXObject || "ActiveXObject" in window){
			gSelect.isDrpWdInit = true;
		}
		/**add by wjl 20150105
			一些说明如下：
			1.IE早些版本时，IE10及以下，window.ActiveXObject 返回一个对象，!window.ActiveXObject则变为false，!!window.ActiveXObject则为true，因为是或||符号后续无需再判断，返回true。
			2.IE11中，window.ActiveXObject返回undefine，!window.ActiveXObject则变成了true，!!window.ActiveXObject则变成了false，进入 "window.ActiveXObject" in window判断，该判断条件在IE11下返回true。
			3.其他非IE浏览器，如chrome，firefox，window.ActiveXObject都是undefine，!!window.ActiveXObject都是返回的false，而 "window.ActiveXObject" in window也是返回false，因此上述判断函数在非IE浏览器中返回的都是false。
		**/
		D.close();
	} catch(E) {
		
	}
	
	gSelect.iframe = $("#__ieselect");
	gSelect.iframediv = gSelect.iframe.contents().find("#iframediv");
	
}

/**
 * 绑定下拉事件到控件
 * parm:
 *  id 		-- 需要绑定的input控件ID
 * 	url		-- 取值URL（必须返回规定的格式）
 *	params	-- 调用HTTP参数
 * 	codeid	-- code回写的input控件ID（可选）
 *  showclosebt -- 是否显示关闭按钮（可选，默认true，若为false，则关闭及分页不再显示）
 *  isEncode	-- 关键字是否编码（可选，默认false，若为true，则进行编码）
 */
gSelect.bind = function (id,_url,_params,_codeid,_showclosebt,_isEncode){
	if (this.bindInputs.containsKey(id)){
		var f = this.bindInputs.get(id);
		f.params = _params;
		
		if (_showclosebt==undefined){
			_showclosebt = true;
		}

		if (_isEncode==undefined){
			_isEncode = false;
		}
		
		return;
	}
	
	if (!this.outerDiv){
		this.iframe = null;
		this.iframediv=null;
		this.outerDiv = $("#_smanDisp");
		this.outerDiv.mouseenter(function (e){
			gSelect.canClose = false;
		});
		this.outerDiv.mouseleave(function (e){
			gSelect.canClose = true;
		});
		
		var src = "about:blank";
		if (typeof(HOST_DOMAIN)!='undefined'){
			if (HOST_DOMAIN!=""){
				src = "javascript:void((function(){document.open();document.domain='"+HOST_DOMAIN+"';document.write('');document.close()})())"
			}
		}
		
		var _iframe = document.createElement("iframe");
	    _iframe.src = src;
	    _iframe.scrolling = "no";
	    _iframe.id = "__ieselect";
	    _iframe.setAttribute('frameborder', '0' , 0);
	    var smanDisp = document.getElementById("_smanDisp");
	    
	    
		if (_iframe.attachEvent){
			_iframe.attachEvent("onload", function(){
				//判断对象是否为空,同时捕获异常 bug：52994 edit by gt 2013-6-28
				try{
					if("undefined"!=typeof(_iframe.contentWindow) && "undefined" != typeof(_iframe.contentWindow.document)){					
						var D = _iframe.contentWindow.document;
						gSelect.init(D);
					}
				}catch(e){
				}
				
			});
			
		}else{
			_iframe.onload = function(){
				var D = _iframe.contentWindow.document;
				gSelect.init(D);
			}
		}
		
		smanDisp.appendChild(_iframe);
		
	}
	
	this.bindInputs.put(id,new bindInput(id,_url,_params,_codeid,_showclosebt,_isEncode));
	
	function bindInput(id,_url,_params,_codeid,_showclosebt,_isEncode){
		this.id = "#"+id;
		this.input = $(this.id);
		this.params = _params;
		this.url = _url;
		if (_codeid){
			this.codeid = _codeid;
		}
		// 是否显示按钮，默认显示
		if (_showclosebt==undefined){
			_showclosebt = true;
		}
		this._showclosebt = _showclosebt;
		// 关键字是否编码，默认不编码
		if (_isEncode==undefined){
			_isEncode = false;
		}
		this._isEncode = _isEncode;
		
		this.input.bind("click",function (e){
			// this.id -> input.id
			if (null!=gSelect.currentOpen&&gSelect.currentOpen == this.id)return;
			if (this.readOnly){
				this.value="";
			}
			var fun = gSelect.bindInputs.get(this.id);
			onFocus(this,fun);
		});
		
		this.input.bind("blur",function (e){
			try{
				this.value = this.value.toUpperCase();
				if (!gSelect.canClose) return;
			}catch(e){
			}
			gSelect.closeDivPage();
		});
		
		function onFocus(ipt,e){
			ipt.select();
			gSelect.load(ipt.id,e,1);
			ipt.focus();
		}
		
		this.input.keyup(function (e){
			// 转大写这个放到失去焦点的时候吧，放着这里IE下焦点有问题
			//this.value = this.value.toUpperCase();
			
			// 如果值没有变化，就不重新加载了吧
			if(oldValue != "" && oldValue == this.value){
				return false;
			}
			oldValue = this.value;
			gSelect.nextpage(this.id,1);
		});
	}
}

gSelect.nextpage = function (id,page){
	var fun = gSelect.bindInputs.get(id);
	gSelect.load(id,fun,page);
}

gSelect.load = function(id,fun,page){
	var input = $("#"+id);
	var param = fun.params;
	//清空MAP
	gSelect.vcode = new Map();
	var strInput = input.val();
	var divWidth = 50;
	// 增加分页
	param.page = page;
	// 关键字是否编码
	if(fun._isEncode){
		param.keyworld = encodeURI(strInput);
	}else{
		param.keyworld = strInput; 
	}
	// 打开下拉
	divPosition();
	$.post(fun.url,fun.params,function (result){
		var allpage = result[0].allPage;
		var pageno = result[0].pageNo;
        var allcount = result[0].allCount;
		var closeHTML = "<font size='2'> <a href=javascript:parent.gSelect.closeDivPage()> 关闭 </a></font>";
		if (!fun._showclosebt)
			closeHTML = ""; // 不显示关闭按钮
		
	    gSelect.iframediv.html("<div align='right' style='height:12px;width:"+divWidth+"px;' id='' > "+closeHTML+" </div>");
	    var ret = result[1];
	    
	    for (intTmp = 0; intTmp < ret.length; intTmp++) 
	    {
	    	// 把key全部扔到map里，方便后面取
	    	gSelect.vcode.put(intTmp,ret[intTmp].code);
			addOption(ret[intTmp].value, strInput.toUpperCase(), intTmp);
 	    }
 	    
	    // 加入分页
	    if (fun._showclosebt == true)
	    	addSplitPage(parseInt(pageno),parseInt(allpage),parseInt(allcount));
	    
		// 加载完成后，让input拿到焦点
		input.focus();
	},"json");
	
	
	gSelect.currentOpen = id; // 当前打开的对象
	
	function addOption(value, keyw, num) 
	{
		var v = value.replace(keyw, "<b><font color=red>" + keyw + "</font></b>");
		var innerHTML = "<div align='left' style='width:"+divWidth+"px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;' onmouseover=\"this.className='gd_selected_style'\" " +
						"onmouseout=\"this.className=''\" "+
						"onmousedown=\"parent.gSelect.selectVal(this,'"+num+"')\" title=\""+value+"\">" + v + "</div>";
		
		gSelect.iframediv.append(innerHTML);
		changeSize();
	}
	
	function addSplitPage(pageno,pages,allcount){
		var pagetext = "";
		
		pagetext = '<table border="0" cellspacing="0" width="100%" cellpadding="0"><tr><td width="20%">';
		if(parseInt(pageno)>1){
			pagetext +="<a href=javascript:parent.gSelect.nextpage('"+id+"',"+(parseInt(pageno)-1)+")><img src='"+DOC_BASE_PATH+"/images/pagination_first.gif'></a>";
		}else{
			pagetext += "&nbsp;";
		}
		
		pagetext += "</td><td align='center' width='60%'>";
		pagetext += " 共"+allcount+"条 ";
		pagetext += "</td><td width='20%'>";
		
		if(parseInt(pageno)<parseInt(pages)){
			pagetext +="<a href=javascript:parent.gSelect.nextpage('"+id+"',"+(parseInt(pageno)+1)+")><img src='"+DOC_BASE_PATH+"/images/pagination_last.gif'></a>";
		}
		pagetext += "</td></tr></table>";
       
	   var innerHTML = "<div align='center' style='width:"+divWidth+"px;' id='' >"+pagetext+"</div>"; 
	   gSelect.iframediv.append(innerHTML);
	   changeSize();
	}
	
	function divPosition() {
		var width = input.width();
		if (width < 60) {
			width = 60;
		}
		var itop = input.offset().top + input.height() + 4;
		var ileft = input.offset().left;
		gSelect.iframediv.html("<center><img src='"+DOC_BASE_PATH+"/images/panel_loading.gif'></center>");
		gSelect.outerDiv.css("top",itop);
		gSelect.outerDiv.css("left",ileft);
		gSelect.outerDiv.css("display","");
		gSelect.outerDiv.css("width", width);
		divWidth = width - 8;
		gSelect.iframe.width(width-2);
		changeSize();
		
	}
	function changeSize() {
		gSelect.iframe.height(gSelect.iframediv.height()+2);
		gSelect.outerDiv.css("height",gSelect.iframe.height());
	}
	
}

//关闭下拉框 
gSelect.closeDivPage = function closeDivPage()
{
	gSelect.outerDiv.css("display","none");
	gSelect.currentOpen = null;
}

gSelect.selectVal = function(div, num){
	if (null==gSelect.currentOpen)return;
	var input = $("#"+gSelect.currentOpen);
	var value = "";
	if (2==checkWebBrowse()){
		// FF
		value = div.textContent;
	}else{
		// IE or Other
		value = div.innerText;
	}
	input.val(gScript.trim(value));
	// code id
	var f = gSelect.bindInputs.get(gSelect.currentOpen);
	if (f.codeid){
		var codipt = $("#"+f.codeid).val(gSelect.vcode.get(num));
	}
	// Fire
	input.trigger('change');
	gSelect.closeDivPage();
}
//清楚绑定的所有ID
gSelect.selectClear = function(){
	gSelect.bindInputs.clear();
}
//移出指定ID的绑定事件
gSelect.selectRemove = function(id){
	gSelect.bindInputs.remove(id);
}