document.write('<link href="http://image.1633.com/webuploader/webuploader.css" rel="stylesheet"/>');document.write('<script src="http://image.1633.com/webuploader/webuploader.js"><\/script>');var mimeTypesObj=[{ext:"doc",mimetype:"application/msword"},{ext:"docx",mimetype:"application/vnd.openxmlformats-officedocument.wordprocessingml.document"},{ext:"xls",mimetype:"application/vnd.ms-excel"},{ext:"xlsx",mimetype:"application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"},{ext:"ppt",mimetype:"application/vnd.ms-powerpoint"},{ext:"pptx",mimetype:"application/vnd.openxmlformats-officedocument.presentationml.presentation"},{ext:"rar",mimetype:"application/rar"},{ext:"zip",mimetype:"application/zip"},{ext:"pdf",mimetype:"application/pdf"},{ext:"txt",mimetype:"text/plain"},{ext:"rm",mimetype:"audio/x-pn-realaudio"},{ext:"avi",mimetype:"video/x-msvideo"},{ext:"mkv",mimetype:"video/x-matroska"},{ext:"swf",mimetype:"application/x-shockwave-flash"},{ext:"jpg",mimetype:"image/jpeg"},{ext:"jpeg",mimetype:"image/jpeg"},{ext:"gif",mimetype:"image/gif"},{ext:"png",mimetype:"image/png"},{ext:"bmp",mimetype:"image/x-ms-bmp"}];var kywebUploader={webUploaderBase:function(b,h,c,a){if(!WebUploader.Uploader.support()){if(confirm("上传控件 不支持您的浏览器！如果你使用的是IE浏览器，请尝试升级 flash 播放器\n是否现在就去升级?")){window.open("https://get.adobe.com/cn/flashplayer/")}return}var f="";var p="";var d="";var g=true;var j="webuploader-pick";var l=1;var o=2048;var u="";var v="";if(b!=undefined){if(b.username!=undefined){f=b.username}if(b.channelcode!=undefined){p=b.channelcode}if(b.pick!=undefined){d=b.pick}if(b.isImg!=undefined){g=b.isImg}if(b.btnClassName!=undefined){j=b.btnClassName}if(b.fileSingleSizeLimit!=undefined){o=b.fileSingleSizeLimit}if(b.fileNumLimit!=undefined){l=b.fileNumLimit}if(b.extensions!=undefined){u=b.extensions;var r=u.split(",");if(r.length>0){for(var t=0;t<r.length;t++){for(var s=0;s<mimeTypesObj.length;s++){if(r[t]===mimeTypesObj[s].ext){v+=mimeTypesObj[s].mimetype+","}}}}}}if(u==""){u="*";v="*"}var e;if(!g){e={title:"Files",extensions:u,mimeTypes:v}}else{e={title:"Images",extensions:"gif,jpg,jpeg,bmp,png",mimeTypes:"image/*"}}var q=WebUploader.create({auto:true,duplicate:true,fileSingleSizeLimit:o*1024,fileNumLimit:l,swf:imageDomain+"/webuploader/Uploader.swf",server:apiDomain+"/upload/UploadByWebUploader?username="+f+"&channelcode="+p+"&qiniuspacename="+a,pick:d,accept:e});var n=$(d).find(".webuploader-pick");if(n.size()>0){n.removeClass("webuploader-pick");n.addClass(j);var m=parseInt(n.css("width").replace("px",""));if(m>200||m<=0){m=80;n.css("width",m+"px").css("text-align","center")}}q.on("error",function(k,i){if(k==="F_EXCEED_SIZE"){alert("文件大小超过限制,限制大小为"+o+"KB")}});q.on("uploadSuccess",function(k,i){h(i)});q.on("filesQueued",function(k){if(typeof(c)=="function"){var i=c();if(!i){$.each(q.getFiles("queued"),function(){q.removeFile(this,true)})}}})},kybwebUploaderBase:function(a,g,b){if(!WebUploader.Uploader.support()){if(confirm("上传控件 不支持您的浏览器！如果你使用的是IE浏览器，请尝试升级 flash 播放器\n是否现在就去升级?")){window.open("https://get.adobe.com/cn/flashplayer/")}return}var e="";var o="";var c="";var f=true;var h="webuploader-pick";var j=1;var n=2048;var t="";var u="";if(a!=undefined){if(a.username!=undefined){e=a.username}if(a.channelcode!=undefined){o=a.channelcode}if(a.pick!=undefined){c=a.pick}if(a.isImg!=undefined){f=a.isImg}if(a.btnClassName!=undefined){h=a.btnClassName}if(a.fileSingleSizeLimit!=undefined){n=a.fileSingleSizeLimit}if(a.fileNumLimit!=undefined){j=a.fileNumLimit}if(a.extensions!=undefined){t=a.extensions;var q=t.split(",");if(q.length>0){for(var s=0;s<q.length;s++){for(var r=0;r<mimeTypesObj.length;r++){if(q[s]===mimeTypesObj[r].ext){u+=mimeTypesObj[r].mimetype+","}}}}}}if(t==""){t="*";u="*"}var d;if(!f){d={title:"Files",extensions:t,mimeTypes:u}}else{d={title:"Images",extensions:"gif,jpg,jpeg,bmp,png",mimeTypes:"image/*"}}var p=WebUploader.create({runtimeOrder:"",auto:true,duplicate:true,fileSingleSizeLimit:n*1024,fileNumLimit:j,swf:imageDomain+"/webuploader/Uploader.swf",server:apiDomain+"/upload/UploadToKyb?username="+e,formData:{username:e},pick:c,accept:d});var m=$(c).find(".webuploader-pick");if(m!=undefined){m.removeClass("webuploader-pick");m.addClass(h);var l=parseInt(m.css("width").replace("px",""));if(l>200||l<=0){l=80;m.css("width",l+"px").css("text-align","center")}}p.on("error",function(k,i){if(k==="F_EXCEED_SIZE"){alert("文件大小超过限制,限制大小为"+n+"KB")}});p.on("uploadSuccess",function(k,i){g(i)});p.on("filesQueued",function(k){if(typeof(b)=="function"){var i=b();if(!i){$.each(p.getFiles("queued"),function(){p.removeFile(this,true)})}}})},InitToUpload1633:function(c,a,b){kywebUploader.webUploaderBase(c,a,b,"upload1633")},InitToBBS1633:function(c,a,b){kywebUploader.webUploaderBase(c,a,b,"bbs1633")},InitToChatFile:function(c,a,b){kywebUploader.webUploaderBase(c,a,b,"chatfile")},InitToCloud1633:function(c,a,b){kywebUploader.webUploaderBase(c,a,b,"cloud1633")},InitToFireXun1633:function(c,a,b){kywebUploader.webUploaderBase(c,a,b,"firexun1633")},InitToImage1633:function(c,a,b){kywebUploader.webUploaderBase(c,a,b,"image1633")},InitToK8008:function(c,a,b){kywebUploader.webUploaderBase(c,a,b,"k8008")},InitToKeYibao:function(c,a,b){kywebUploader.webUploaderBase(c,a,b,"keyibao")},InitToLSF1633:function(c,a,b){kywebUploader.webUploaderBase(c,a,b,"lsf1633")},InitToVideo:function(c,a,b){kywebUploader.webUploaderBase(c,a,b,"video")},InitToKeYiBao:function(c,a,b){kywebUploader.kybwebUploaderBase(c,a,b)}};