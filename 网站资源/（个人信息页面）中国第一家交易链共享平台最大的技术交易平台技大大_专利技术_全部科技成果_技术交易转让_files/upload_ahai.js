/* 
*作者：ahai
*时间：2015-12-21
----------------------------------------------------------*/

var extType = "jpg,png,gif,bmp,jpeg";

//初始化WebUploader
function initWebUploader(Obj, returnObj, returnImg, filetype, name) {
    if (filetype == "video") {
        extType = "rar,zip";
    }
    if (name == "") {
        name = "上传文件";
    }
    var parentObj = $(Obj);
    var btnObj = $('<div class="upload-btn">' + name + '</div>').appendTo(parentObj);
    var uploader = WebUploader.create({
        auto: true, //自动上传
        swf: '/tools/scripts/webuploader/uploader.swf', //SWF路径
        server: '/tools/ajax/upload_ajax.ashx?action=SingleFile', //上传地址
        pick: {
            id: btnObj,
            multiple: false
        },
        accept: {
            //title: 'Images',
            extensions: extType
            //mimeTypes: 'image/*'
        },
        formData: {
            'DelFilePath': '' //定义参数
        },
        fileVal: 'Filedata', //上传域的名称
        fileSingleSizeLimit: 30 * 1024 * 1024 //文件大小
    });
    //当validate不通过时，会以派送错误事件的形式通知
    uploader.on('error', function (type) {
        switch (type) {
            case 'Q_EXCEED_NUM_LIMIT':
                alert("错误：上传文件数量过多！");
                break;
            case 'Q_EXCEED_SIZE_LIMIT':
                alert("错误：文件总大小超出限制！");
                break;
            case 'F_EXCEED_SIZE':
                alert("错误：文件大小超出限制！");
                break;
            case 'Q_TYPE_DENIED':
                alert("错误：禁止上传该类型文件！只允许上传格式：" + extType + "。");
                break;
            case 'F_DUPLICATE':
                alert("错误：请勿重复上传该文件！");
                break;
            default:
                alert('错误代码：' + type);
                break;
        }
    });
    //当有文件添加进来的时候
    uploader.on('fileQueued', function (file) {
        uploader.options.formData.DelFilePath = $('#hideFileName').val();
        //防止重复创建
        if (parentObj.children(".upload-progress").length == 0) {
            //创建进度条
            var fileProgressObj = $('<div class="upload-progress"></div>').appendTo(parentObj);
            var progressText = $('<span class="txt">正在上传，请稍候...</span>').appendTo(fileProgressObj);
            var progressBar = $('<span class="bar"><b></b></span>').appendTo(fileProgressObj);
            var progressCancel = $('<a class="close" title="取消上传">关闭</a>').appendTo(fileProgressObj);
            //绑定点击事件
            progressCancel.click(function () {
                uploader.cancelFile(file);
                fileProgressObj.remove();
            });
        }
    });
    //文件上传过程中创建进度条实时显示
    uploader.on('uploadProgress', function (file, percentage) {
        var progressObj = parentObj.children(".upload-progress");
        progressObj.children(".txt").html(file.name);
        progressObj.find(".bar b").width(percentage * 100 + "%");
    });
    //当文件上传出错时触发
    uploader.on('uploadError', function (file, reason) {
        uploader.removeFile(file); //从队列中移除
        alert(file.name + "上传失败，错误代码：" + reason);
    });
    //当文件上传成功时触发
    uploader.on('uploadSuccess', function (file, data) {
        if (data.msg == "1") {
            if (filetype == "pic") {
                $(returnObj).val(data.msgbox);
                $(returnImg).attr("src", data.msgbox);
            } else {
                $(returnObj).val(data.msgbox);
                $(returnImg).show();
            }
        }
        else {
            alert(data.msgbox);
        }
    });
    //不管成功或者失败，文件上传完成时触发
    uploader.on('uploadComplete', function (file) {
        var progressObj = parentObj.children(".upload-progress");
        progressObj.children(".txt").html("上传完成");
        //如果队列为空，则移除进度条
        if (uploader.getStats().queueNum == 0) {
            progressObj.remove();
        }
    });
}