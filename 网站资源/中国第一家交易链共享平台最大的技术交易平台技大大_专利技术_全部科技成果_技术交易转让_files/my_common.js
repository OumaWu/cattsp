//<link href="/tools/scripts/artdialog/ui-dialog.css" rel="stylesheet" type="text/css" />
//<script type="text/javascript" charset="utf-8" src="/tools/scripts/artdialog/dialog-plus-min.js"></script>
//<script src="/js/my_common.js"></script>


//========================基于artdialog插件========================
//可以自动关闭的提示，基于artdialog插件
function jsprint(msgtitle, url, callback) {
    var d = dialog({content: msgtitle}).show();
    setTimeout(function () {
        d.close().remove();
    }, 2000);
    if (url == "back") {
        history.back(-1);
    } else if (url != "") {
        location.href = url;
    }
    //执行回调函数
    if (arguments.length == 3) {
        callback();
    }
}

//弹出一个Dialog窗口
function jsdialog(msgtitle, msgcontent, url, callback) {
    var d = dialog({
        title: msgtitle,
        content: msgcontent,
        okValue: '确定',
        ok: function () {
        },
        onclose: function () {
            if (url == "back") {
                history.back(-1);
            } else if (url != "") {
                location.href = url;
            }
            //执行回调函数
            if (argnum == 5) {
                callback();
            }
        }
    }).showModal();
}

//打开一个最大化的Dialog
function ShowMaxDialog(tit, url) {
    dialog({
        title: tit,
        url: url
    }).showModal();
}

//执行回传函数
function ExePostBack(objId, objmsg) {
    //checkedselect("ckb", "");
    if ($(".checkall input:checked").size() < 1) {
        dialog({
            title: '提示',
            content: '对不起，请选中您要操作的记录！',
            okValue: '确定',
            ok: function () {
            }
        }).showModal();
        return false;
    }
    var msg = "删除记录后不可恢复，您确定吗？";
    if (arguments.length == 2) {
        msg = objmsg;
    }
    dialog({
        title: '提示',
        content: msg,
        okValue: '确定',
        ok: function () {
            __doPostBack(objId, '');
        },
        cancelValue: '取消',
        cancel: function () {
        }
    }).showModal();

    return false;
}

//检查是否有选中再决定回传
function CheckPostBack(objId, objmsg) {
    //checkedselect("ckb", "");
    var msg = "对不起，请选中您要操作的记录！";
    if (arguments.length == 2) {
        msg = objmsg;
    }
    if ($(".checkall input:checked").size() < 1) {
        dialog({
            title: '提示',
            content: msg,
            okValue: '确定',
            ok: function () {
            }
        }).showModal();
        return false;
    }
    __doPostBack(objId, '');
    return false;
}

//执行回传无复选框确认函数
function ExeNoCheckPostBack(objId, objmsg) {
    //checkedselect("ckb", "");
    var msg = "删除记录后不可恢复，您确定吗？";
    if (arguments.length == 2) {
        msg = objmsg;
    }
    dialog({
        title: '提示',
        content: msg,
        okValue: '确定',
        ok: function () {
            __doPostBack(objId, '');
        },
        cancelValue: '取消',
        cancel: function () {
        }
    }).showModal();

    return false;
}

//======================以上基于artdialog插件======================

/*验证手机号码的正确性*/
function chkPhoneNum(curval) {
    return curval.match(/^(((1)[0-9]{1})+\d{9})$/);
}


function sendcode() {
    $.ajax({
        type: "post",
        url: "/data/MoblieCode.ashx?op=1&mobile=" + $("#txtPhone").val(),
        dataType: "json",
        beforeSend: function () {
            var txtphone = $("#txtPhone").val();
            //var oldval = $("#hfPhone").val();
            if (txtphone == "") {
                alert("手机号码不能为空！");
                return false;
            }
        },
        success: function (data) {
            if (data.result == 1) {
                jsprint("发送成功！", "");
                var btn = $("#btnSendCode");
                test.init(btn);
            }
            else {
                jsprint(data.err, "");
                return false;
            }
        }
    });
}

function sendcode2() {
    $.ajax({
        type: "post",
        url: "/data/MoblieCode.ashx?op=1&mobile=" + $("#txtPhone").val(),
        dataType: "json",
        beforeSend: function () {
            var txtphone = $("#txtPhone").val();
            var oldval = $("#hfPhone").val();
            if (txtphone == "") {
                //jsprint("手机号码不能为空！", "");
                alert("手机号码不能为空！");
                return false;
            }
            else if (txtphone == oldval && oldval != "") {
                //jsprint("账号已绑定此手机号码，不需要再操作！", "");
                alert("账号已绑定此手机号码，不需要再操作！");
                return false;
            }
        },
        success: function (data) {
            if (data.result == 1) {
                jsprint("发送成功！", "");
                var btn = $("#btnSendCode");
                test.init(btn);
            }
            else {
                jsprint(data.err, "");
                return false;
            }
        }
    });
}


//发送验证码一分钟倒计时
var test = {
    node: null,
    count: 180,
    start: function () {
        if (this.count > 0) {
            this.node.val("剩余" + (this.count--) + "秒");
            this.node.css("cursor", "");
            var _this = this;
            setTimeout(function () {
                _this.start();
            }, 1000);
        } else {
            this.node.removeAttr("disabled");
            this.node.val("再次发送");
            this.node.css("cursor", "pointer");
            this.count = 180;
        }
    },
    //初始化
    init: function (node) {
        this.node = node;
        this.node.attr("disabled", true);
        this.start();
    }
};


//智能浮动层函数
$.fn.smartFloat = function () {
    var position = function (element) {
        //var obj = element.children("div");
        var obj = element;
        var top = obj.position().top;
        var pos = obj.css("position");
        $(window).scroll(function () {
            var scrolls = $(this).scrollTop();
            if (scrolls > top) {
                obj.width(element.width());
                element.height(obj.outerHeight());
                if (window.XMLHttpRequest) {
                    obj.css({
                        position: "fixed",
                        top: 0
                    });
                } else {
                    obj.css({
                        top: scrolls
                    });
                }
            } else {
                obj.css({
                    position: pos,
                    top: top
                });
            }
        });
    };
    return $(this).each(function () {
        position($(this));
    });
};