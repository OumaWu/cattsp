// JavaScript Document
function checkLogin(login) {
    if (login == "") {
        alert("用户名不能为空！");
        return false;
    }

    else if (login.length < 6) {
        alert("用户名长度过短！");
        return false;
    }

    else checkDuplicate(login);

    return true;
}

function resetDiv() {
    var elems = document.getElementsByClassName("usrnameerror");
    for (var i = 0; i < elems.length; i++) {
        elems[i].style.display = "none";
    }
}

function resetDiv2() {
    document.getElementById("pswnotequal").style.display = "none";
}

function checkDuplicate(login) {
    var xmlhttp;
    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    }
    else {// code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.open("GET", "./sql/checklogin.php?login=" + login, true);
    xmlhttp.send(null);

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if (xmlhttp.responseText == 0) {
                return true;
            }
            else {
                alert("此用户名已被使用！");
                return false;
            }
        }
    }
}

function checkPsw(psw) {
    if (psw != document.getElementById("password").value) {
        alert("两次输入的密码不一致！");
        return false;
    }
    return true;
}

function checkAll() {
    var form = document.getElementById("gform");
    /*if (!checkLogin(form.accountname)) {
        alert("请仔细填写注册信息！");
        return false;
    }
    
    else */
    /*if(!checkPsw(form.pswconfirm)) {
        alert("请仔细填写注册信息！");
        return false;
    }
    else*/
    form.submit();
} 


