var PGEdit_IE32_CLASSID="3A2C8BC3-5B68-4AE5-81D6-6DC378708F3E";
var PGEdit_IE32_CAB="PassGuardCtrl.cab#version=1,0,1,8";
var PGEdit_IE32_EXE="PassGuardSetupIE.exe";

var PGEdit_IE64_CLASSID="206F48A0-61BB-48C8-B54C-7700B7923CFD";
var PGEdit_IE64_CAB="PassGuardX64.cab#version=1,0,0,6";
var PGEdit_IE64_EXE="PassGuardSetupX64.exe";

var PGEdit_FF="PassGuardSetupFF.exe";
var PGEdit_FF_VERSION="2.0.8.3";

var PGEdit_Linux32="";
var PGEdit_Linux64="";
var PGEdit_Linux_VERSION="";

var PGEdit_MacOs="PassGuardCtrl.dmg";
var PGEdit_MacOs_VERSION="1.0.0.3";

var PGEdit_MacOs_Safari="PassGuardSafari.dmg";
var PGEdit_MacOs_Safari_VERSION="1.0.0.1";

var PGEdit_PATH="./ocx/";

if(navigator.userAgent.indexOf("MSIE")<0){
	   navigator.plugins.refresh();
}
function _PGEObj(id){
	return document.getElementById(id);
}

var PGEcert="";


//控件初始化
function PGEdit(options){
	this.pgePath=options.pgePath;
	this.pgeId=options.pgeId;
	this.pgeEdittype=options.pgeEdittype;
	this.pgeRandomNum=options.pgeRandomNum;
	this.pgeEreg1=options.pgeEreg1;
	this.pgeEreg2=options.pgeEreg2;
	this.pgeMaxlength=options.pgeMaxlength;
	this.pgeTabindex=options.pgeTabindex;
	this.pgeClass=options.pgeClass;
	this.pgeInstallClass=options.pgeInstallClass;
	this.pgeOnkeydown=options.pgeOnkeydown;
	this.tabCallback=options.tabCallback;
	this.pgeOnFocus=options.pgeOnFocus;
	this.pgeFontName=options.pgeFontName;
	this.pgeFontSize=options.pgeFontSize;
	
	
	//this.pgePath=PGEdit_PATH;
	this.pgeDownText="请点此安装控件";
	this.osBrowser = this.checkOsBrowser();
	this.pgeVersion = this.getVersion();
	this.isInstalled = this.checkInstall();
}
//判断操作系统和浏览器
PGEdit.prototype.checkOsBrowser = function() {
	var userosbrowser;
	if((navigator.platform =="Win32") || (navigator.platform =="Windows")){
		if(navigator.userAgent.indexOf("MSIE")>0 || navigator.userAgent.indexOf("msie")>0){		
			userosbrowser=1;//windows32ie32
			this.pgeditIEClassid=PGEdit_IE32_CLASSID;
			this.pgeditIECab=PGEdit_IE32_CAB;
			this.pgeditIEExe=PGEdit_IE32_EXE;
		}else{
			userosbrowser=2; //windowsff
			this.pgeditFFExe=PGEdit_FF;
		}
	}else if((navigator.platform=="Win64")){
		if(navigator.userAgent.indexOf("MSIE")>0 || navigator.userAgent.indexOf("msie")>0){
			userosbrowser=3;//windows64ie64
			this.pgeditIEClassid=PGEdit_IE64_CLASSID;
			this.pgeditIECab=PGEdit_IE64_CAB;
			this.pgeditIEExe=PGEdit_IE64_EXE;			
		}else{
			userosbrowser=2;//windowsff
			this.pgeditFFExe=PGEdit_FF;
		}
	}else if(navigator.userAgent.indexOf("Linux")>0){
		if(navigator.userAgent.indexOf("_64")>0){
			userosbrowser=4;//linux64
			this.pgeditFFExe=PGEdit_Linux64;
		}else{
			userosbrowser=5;//linux32
			this.pgeditFFExe=PGEdit_Linux32;
		}
		if(navigator.userAgent.indexOf("Android")>0){
            userosbrowser=7;//Android
         }					
	}else if(navigator.userAgent.indexOf("Macintosh")>0){
		if(navigator.userAgent.indexOf("Safari")>0 && (navigator.userAgent.indexOf("Version/5.1")>0 || navigator.userAgent.indexOf("Version/5.2")>0 || navigator.userAgent.indexOf("Version/5.3")>0 || navigator.userAgent.indexOf("Version/5.4")>0)){
			userosbrowser=8;//macos Safari 5.1 more
			this.pgeditFFExe=PGEdit_MacOs_Safari;
		}else if(navigator.userAgent.indexOf("Firefox")>0 || navigator.userAgent.indexOf("Chrome")>0){
			userosbrowser=6;//macos
			this.pgeditFFExe=PGEdit_MacOs;						
		}else if(navigator.userAgent.indexOf("Opera")>=0 && (navigator.userAgent.indexOf("Version/11.6")>0 || navigator.userAgent.indexOf("Version/11.7")>0)){
			userosbrowser=6;//macos
			this.pgeditFFExe=PGEdit_MacOs;						
		}else if(navigator.userAgent.indexOf("Safari")>=0 && (navigator.userAgent.indexOf("Version/4.0")>0 || navigator.userAgent.indexOf("Version/5.0")>0 || navigator.userAgent.indexOf("Version/6")>0)){
			userosbrowser=6;//macos
			this.pgeditFFExe=PGEdit_MacOs;			
		}else{
			userosbrowser=0;//macos
			this.pgeditFFExe="";
		}
	}
	return userosbrowser;
}
//控件脚本
PGEdit.prototype.getpgeHtml = function() {

	if (this.osBrowser==1 || this.osBrowser==3) {
		
		var pgeOcx='<div id="'+this.pgeId+'_pge" style="display:none;"><OBJECT ID="' + this.pgeId + '" CLASSID="CLSID:' + this.pgeditIEClassid + '" codebase="'+this.pgePath+ this.pgeditIECab +'"' ;
		
		if(this.pgeOnkeydown!=undefined && this.pgeOnkeydown!="") pgeOcx+=' onkeydown="if(13==event.keyCode || 27==event.keyCode)'+this.pgeOnkeydown+';"';
		
		if(this.pgeOnFocus!=undefined && this.pgeOnFocus!="") pgeOcx+=' onFocus="' + this.pgeOnFocus + '"';
		
		if(this.pgeTabindex!=undefined && this.pgeTabindex!="") pgeOcx+=' tabindex="'+this.pgeTabindex+'"';
		
		if(this.pgeClass!=undefined && this.pgeClass!="") pgeOcx+=' class="' + this.pgeClass + '" ';		
		
		pgeOcx+='>';
		
		if(this.pgeFontName!=undefined && this.pgeFontName!="") pgeOcx+=' <param name="FontName" value="'+this.pgeFontName+'">';
		
		if(this.pgeFontSize!=undefined && this.pgeFontSize!="") pgeOcx+=' <param name="FontSize" value="'+Number(this.pgeFontSize)+'">';		
		
		if(this.pgeEdittype!=undefined && this.pgeEdittype!="") pgeOcx+='<param name="edittype" value="'+ this.pgeEdittype + '">';
		
		if(this.pgeMaxlength!=undefined && this.pgeMaxlength!="") pgeOcx+='<param name="maxlength" value="' + this.pgeMaxlength +'">';
		
		if(this.pgeEreg1!=undefined && this.pgeEreg1!="") pgeOcx+='<param name="input2" value="'+ this.pgeEreg1 + '">';
		
		if(this.pgeEreg2!=undefined && this.pgeEreg2!="") pgeOcx+='<param name="input3" value="'+ this.pgeEreg2 + '">';
		
		pgeOcx+='</OBJECT></div>';
		
		pgeOcx+='<div id="'+this.pgeId+'_down" class="'+this.pgeInstallClass+'" style="text-align:center;display:none;"><a href="'+this.pgePath+this.pgeditIEExe+'">'+this.pgeDownText+'</a></div>';

		return pgeOcx;
		
	} else if (this.osBrowser==2 || this.osBrowser==4 || this.osBrowser==5) {
		
		var pgeOcx='<embed ID="' + this.pgeId + '"  maxlength="'+this.pgeMaxlength+'" input_2="'+this.pgeEreg1+'" input_3="'+this.pgeEreg2+'" edittype="'+this.pgeEdittype+'" ';
        
		if(this.pgeOnFocus!=undefined && this.pgeOnFocus!="") pgeOcx+=' onFocus="' + this.pgeOnFocus + '"';
			
		if(this.pgeOnkeydown!=undefined && this.pgeOnkeydown!="") pgeOcx+=' input_1013="'+this.pgeOnkeydown+'"';
		
		if(this.tabCallback!=undefined && this.tabCallback!="") pgeOcx+=' input_1009="document.getElementById(\''+this.tabCallback+'\').focus()"';
		
		if(this.pgeFontName!=undefined && this.pgeFontName!="") pgeOcx+=' FontName="'+this.pgeFontName+'"';
		
		if(this.pgeFontSize!=undefined && this.pgeFontSize!="") pgeOcx+=' FontSize='+Number(this.pgeFontSize)+'';
		
		pgeOcx+=' type="application/x-pass-guard" tabindex="'+this.pgeTabindex+'" class="' + this.pgeClass + '" >';
		
		return pgeOcx;
		 
	} else if (this.osBrowser==6) {
		
		return '<embed ID="' + this.pgeId + '" input2="'+ this.pgeEreg1 + '" input3="'+ this.pgeEreg2 + '" input4="'+Number(this.pgeMaxlength)+'" input0="'+Number(this.pgeEdittype)+'" type="application/microdone-passguard-plugin" version="'+PGEdit_MacOs_VERSION+'" tabindex="'+this.pgeTabindex+'" class="' + this.pgeClass + '">';
	
	} else if (this.osBrowser==8) {

		return '<embed ID="' + this.pgeId + '" input2="'+ this.pgeEreg1 + '" input3="'+ this.pgeEreg2 + '" input4="'+Number(this.pgeMaxlength)+'" input0="'+Number(this.pgeEdittype)+'" type="application/microdone-passguard-safari-plugin" version="'+PGEdit_MacOs_Safari_VERSION+'" tabindex="'+this.pgeTabindex+'" class="' + this.pgeClass + '">';

	} else {

		return '<span id="'+this.pgeId+'_down" class="'+this.pgeClass+'" style="text-align:center;">暂不支持此浏览器</span>';

	}	

}
//下载地址
PGEdit.prototype.getDownHtml = function() {

	if (this.osBrowser==1 || this.osBrowser==3) {
		return '<div id="'+this.upeId+'_down" class="'+this.pgeInstallClass+'" style="text-align:center;"><a href="'+this.pgePath+this.pgeditIEExe+'">'+this.pgeDownText+'</a></div>';
	} else if (this.osBrowser==2 || this.osBrowser==4 || this.osBrowser==5 || this.osBrowser==6 || this.osBrowser==8) {

		return '<div id="'+this.upeId+'_down" class="'+this.pgeInstallClass+'" style="text-align:center;"><a href="'+this.pgePath+this.pgeditFFExe+'">'+this.pgeDownText+'</a></div>';
	
	} else {

		return '<div id="'+this.pgeId+'_down" class="'+this.pgeInstallClass+'" style="text-align:center;">暂不支持此浏览器</div>';

	}	

}

PGEdit.prototype.load = function() {
	if (!this.checkInstall()) {
		return this.getDownHtml();
	}else{		
	   if(this.osBrowser==2){  
			if(this.pgeVersion!=PGEdit_FF_VERSION){
				this.setDownText();
				return document.write(this.getDownHtml());	
			}				    
	   }else if(this.osBrowser==4 || this.osBrowser==5){
			if(this.pgeVersion!=PGEdit_Linux_VERSION){
				this.setDownText();
				return this.getDownHtml();	
			}
		} else if (this.osBrowser==6) {
			if(this.pgeVersion!=PGEdit_MacOs_VERSION){
				this.setDownText();
				return this.getDownHtml();	
			}
		}else if (this.osBrowser==8) {
			if(this.pgeVersion!=PGEdit_MacOs_Safari_VERSION){
				this.setDownText();
				return this.getDownHtml();	
			}
		}					
		return this.getpgeHtml();
	}	
	
}

//控件脚本
PGEdit.prototype.generate = function() {
	
	   if(this.osBrowser==2){
			if(this.pgeVersion!=PGEdit_FF_VERSION){
				this.setDownText();
				return document.write(this.getDownHtml());	
			}
       }else if(this.osBrowser==4 || this.osBrowser==5){   
			if(this.pgeVersion!=PGEdit_Linux_VERSION){
				this.setDownText();
				return document.write(this.getDownHtml());	
			}
		} else if (this.osBrowser==6) {
			if(this.pgeVersion!=PGEdit_MacOs_VERSION){
				this.setDownText();
				return document.write(this.getDownHtml());	
			}
		}else if (this.osBrowser==8) {
			if(this.pgeVersion!=PGEdit_MacOs_Safari_VERSION){
				this.setDownText();
				return document.write(this.getDownHtml());
			}
		}
		return document.write(this.getpgeHtml());
		


}

//清空输入框
PGEdit.prototype.pwdclear = function() {
	if (this.checkInstall()) {
		var control = document.getElementById(this.pgeId);
		control.ClearSeCtrl();
	}	
	
}
//设置随机数
PGEdit.prototype.pwdSetSk = function(s) {
	if (this.checkInstall()) {
		try {
			var control = document.getElementById(this.pgeId);
			if (this.osBrowser==1 || this.osBrowser==3 || this.osBrowser==6 || this.osBrowser==8) {
				control.input1=s;
			} else if (this.osBrowser==2 || this.osBrowser==4 || this.osBrowser==5) {
				control.input(1,s);
			}					
		} catch (err) {
		}
	}
}

//密文
PGEdit.prototype.pwdResult = function() {

	var code = '';

	if (!this.checkInstall()) {

		code = '01';
	}
	else{	
		try {
			var control = document.getElementById(this.pgeId);
			if (this.osBrowser==1 || this.osBrowser==3) {
				code = control.output1;
			} else if (this.osBrowser==2 || this.osBrowser==4 || this.osBrowser==5) {
				code = control.output(7);
			}else if (this.osBrowser==6 || this.osBrowser==8) {
				code = control.get_output1();
			}					
		} catch (err) {
			code = '02';
		}
	}
	return code;
}
//机器网卡信息
PGEdit.prototype.machineNetwork = function() {

	var code = '';

	if (!this.checkInstall()) {

		code = '01';
	}
	else{
		try {
			var control = document.getElementById(this.pgeId);
			if (this.osBrowser==1 || this.osBrowser==3) {
				code = control.GetIPMacList();
			} else if (this.osBrowser==2 || this.osBrowser==4 || this.osBrowser==5) {
				control.package=0;
				code = control.output(9);
			}else if (this.osBrowser==6 || this.osBrowser==8) {
				code = control.get_output7(0);
			}
		} catch (err) {

			code = '02';

		}
	}
	return code;

}

PGEdit.prototype.machineDisk = function() {
	var code = '';

	if (!this.checkInstall()) {

		code = '01';
	}
	else{
		try {
			var control = document.getElementById(this.pgeId);
			if (this.osBrowser==1 || this.osBrowser==3) {
				code = control.GetNicPhAddr(1);
			} else if (this.osBrowser==2 || this.osBrowser==4 || this.osBrowser==5) {
				control.package=0;
				code = control.output(11);
			}else if (this.osBrowser==6 || this.osBrowser==8) {
				code = control.get_output7(2);
			}
		} catch (err) {

			code = '02';

		}
	}
	return code;	
	
}

PGEdit.prototype.machineCPU = function() {
	var code = '';

	if (!this.checkInstall()) {

		code = '01';
	}
	else{
		try {
			var control = document.getElementById(this.pgeId);
			if (this.osBrowser==1 || this.osBrowser==3) {
				code = control.GetNicPhAddr(2);
			} else if (this.osBrowser==2 || this.osBrowser==4 || this.osBrowser==5) {
				control.package=0;
				code = control.output(10);
			}else if (this.osBrowser==6 || this.osBrowser==8) {
				code = control.get_output7(1);
			}
		} catch (err) {
			code = '02';
		}
	}
	return code;
}
//密码是否符合要求
PGEdit.prototype.pwdValid = function() {
	var code = '';

	if (!this.checkInstall()) {

		code = 1;
	}
	else{
		try {
			var control = document.getElementById(this.pgeId);
			if (this.osBrowser==1 || this.osBrowser==3) {
				if(control.output1) code = control.output5;
			} else if (this.osBrowser==2 || this.osBrowser==4 || this.osBrowser==5) {
				code = control.output(5);
			}else if (this.osBrowser==6 || this.osBrowser==8) {
				code = control.get_output5();
			}
		} catch (err) {

			code = 1;

		}
	}
	return code;	
}
//密码hash值
PGEdit.prototype.pwdHash = function() {
	var code = '';

	if (!this.checkInstall()) {

		code = 0;
	}
	else{
		try {
			var control = document.getElementById(this.pgeId);
			if (this.osBrowser==1 || this.osBrowser==3) {
				code = control.output2;
			} else if (this.osBrowser==2 || this.osBrowser==4 || this.osBrowser==5) {
				code = control.output(2);
			}else if (this.osBrowser==6 || this.osBrowser==8) {
				code = control.get_output2();
			}
		} catch (err) {

			code = 0;

		}
	}
	return code;	
}
//密码长度
PGEdit.prototype.pwdLength = function() {
	var code = '';

	if (!this.checkInstall()) {

		code = 0;
	}
	else{
		try {
			var control = document.getElementById(this.pgeId);
			if (this.osBrowser==1 || this.osBrowser==3) {
				code = control.output3;
			} else if (this.osBrowser==2 || this.osBrowser==4 || this.osBrowser==5) {
				code = control.output(3);
			}else if (this.osBrowser==6 || this.osBrowser==8) {
				code = control.get_output3();
			}
		} catch (err) {

			code = 0;

		}
	}
	return code;	
}
//密码强度
PGEdit.prototype.pwdStrength = function() {

	var code = 0;

	if (!this.checkInstall()) {

		code = 0;

	}

	else{

		try {

			var control = document.getElementById(this.pgeId);

			if (this.osBrowser==1 || this.osBrowser==3) {
				var l=control.output3;
				var n=control.output4;
			} else if (this.osBrowser==2 || this.osBrowser==4 || this.osBrowser==5) {
				var l=control.output(3);
				var n=control.output(4);
			}else if (this.osBrowser==6 || this.osBrowser==8) {
				var l=control.get_output3();
				var n=control.get_output4();
			}
			if(l==0){
				code = 0;
			}
			if(l<6){
				code = 1;
			}
			if(n==1 && l>=6){
				code = 2;
			}						
			if(n==2 && l>=6){
				code = 3;
			}	
			if(n==3 && l>=6){
				code = 4;
			}
		} catch (err) {

			code = 0;

		}

	}		
	return code;

}

//检查控件是否安装
PGEdit.prototype.checkInstall = function() {
	try {
		if (this.osBrowser==1) {

			var comActiveX = new ActiveXObject("PassGuardCtrl.PassGuard.1"); 
		} else if (this.osBrowser==2 || this.osBrowser==4 || this.osBrowser==5 || this.osBrowser==6 || this.osBrowser==8) {

		    var arr=new Array();
		    if(this.osBrowser==6){
		    	var pge_info=navigator.plugins['PassGuard 1G'].description;
		    }else if(this.osBrowser==8){
		    	var pge_info=navigator.plugins['PassGuard Safari 1G'].description;
		    }else{
		    	var pge_info=navigator.plugins['PassGuard'].description;
		    }
		    
			if(pge_info.indexOf(":")>0){
				arr=pge_info.split(":");
				var pge_version = arr[1];
			}else{
				var pge_version = "";
			}
			
		} else if (this.osBrowser==3) {
			var comActiveX = new ActiveXObject("PassGuardX64.PassGuard.1");
		}
	}catch(e){
		return false;
	}
	return true;
	
}

//控件版本号
PGEdit.prototype.getVersion = function() {
	try {
		if(navigator.userAgent.indexOf("MSIE")<0){
			var arr=new Array();
		    if(this.osBrowser==6){
		    	var pge_info=navigator.plugins['PassGuard 1G'].description;
		    }else if(this.osBrowser==8){
		    	var pge_info=navigator.plugins['PassGuard Safari 1G'].description;					    	
		    }else{
		    	var pge_info=navigator.plugins['PassGuard'].description;
		    }
			if(pge_info.indexOf(":")>0){
				arr=pge_info.split(":");
				var pge_version = arr[1];
			}else{
				var pge_version = "";
			}
		}
		return pge_version;
	}catch(e){
		return "";
	}		
}
PGEdit.prototype.setDownText = function() {
	if(this.pgeVersion!=undefined && this.pgeVersion!=""){
		this.pgeDownText="请点此升级控件";
	}	
}

PGEdit.prototype.pgInitialize = function() {
	if(this.checkInstall()){
		if(this.osBrowser==1 || this.osBrowser==3){ 
			_PGEObj(this.pgeId+'_pge').style.display="block"; 
		}
		if(this.pgeRandomNum!=undefined && this.pgeRandomNum!="") this.pwdSetSk(this.pgeRandomNum);
		
		//var control = document.getElementById(this.pgeId);

		
	}else{
		if(this.osBrowser==1 || this.osBrowser==3){
			_PGEObj(this.pgeId+'_down').style.display="block"; 
		}	
		
	}	

}

