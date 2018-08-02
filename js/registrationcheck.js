// JavaScript Document
var loginCheck = false;

function checkLogin(login) {
    if (login == "") {
        alert("用户名不能为空！");
        return false;
    }

    else if (login.length < 3) {
        alert("用户名长度过短！");
        return false;
    }
    else  {
        checkDuplicate(login , loginCheck);
        if (loginCheck == false) {
            alert("用户名已被使用！");
        }

        return loginCheck;
    }
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

function checkDuplicate(login , loginCheck) {
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
            if (xmlhttp.responseText == 1) {
                loginCheck = true;
            }
            else {
                loginCheck = false;
            }
        }
    }
}

function checkEmail(email) {
    if (email == null) {
        alert("请填邮箱！！");
        return false;
    }
    return true;
}

function checkPsw(psw, pswc) {

    if (psw != pswc) {
        alert("两次输入的密码不一致！");
        return false;
    }
    return true;
}

function checkAll() {

    var form = document.getElementById("gform");
    var psw = document.getElementById("password").value;
    var pswc = document.getElementById("pswconfirm").value;
    var login = document.getElementById("accountname").value;
    var email = document.getElementById("email").value;


    if (!checkLogin(login) || !checkPsw(psw, pswc) || !checkEmail(email)) {
        // alert("请仔细填写注册信息！");
    }

    else {
        form.submit();
    }
}

