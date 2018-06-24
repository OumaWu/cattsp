$(function () {
    $.ajax({
        type: 'POST',
        data: '',
        url: '/userCtr/selectUsrRoleByKey',
        dataType: 'json',
        success: function (result) {
            $.each(result.body, function (i, item) {
                if (item == 1) {
                    $("<li class='role_1'><a onClick='javascript:selectRole(1)'>技术持有人</a></li>").appendTo($(userRoleSelect));
                }
                if (item == 2) {
                    $("<li class='role_2'><a onClick='javascript:selectRole(2)'>技术需求方</a></li>").appendTo($(userRoleSelect));
                }
                if (item == 3) {
                    $("<li class='role_3'><a onClick='javascript:selectRole(3)'>行业专家</a></li>").appendTo($(userRoleSelect));
                }
                if (item == 4) {
                    $("<li class='role_4'><a onClick='javascript:selectRole(4)'>投资机构</a></li>").appendTo($(userRoleSelect));
                }
                if (result.body.length == 1) {
                    $(".tech_coll").hide();
                    $(".persons_cen").hide();
                }
            })
        }
    });

    $.ajax({
        type: 'POST',
        data: '',
        url: '/userCtr/getCurrentRole',
        dataType: 'json',
        success: function (data) {
            if (data.body == 0) {
                $(".persons_cen").hide();
                $(".tech_coll").hide();
            } else if (data.body == 1) {
                $(".tech_coll").show();
                $(".tech_coll i").removeClass("icon2 role1 role2 role3 role4").addClass("role1");
                $(".tech_coll b").text("技术持有人");
                $(".order_go").show();
            } else if (data.body == 2) {
                $(".tech_coll").show();
                $(".tech_coll i").removeClass("icon2 role1 role2 role3 role4").addClass("role2");
                $(".tech_coll b").text("技术需求方");
                $(".order_go").hide();
            } else if (data.body == 3) {
                $(".tech_coll").show();
                $(".tech_coll i").removeClass("icon2 role1 role2 role3 role4").addClass("role3");
                $(".tech_coll b").text("行业专家");
                $(".order_go").show();
            } else if (data.body == 4) {
                $(".tech_coll").show();
                $(".tech_coll i").removeClass("icon2 role1 role2 role3 role4").addClass("role4");
                $(".tech_coll b").text("投资机构");
                $(".order_go").hide();
            }
        }
    })

    $(".search_wrap").click(function () {
        var keyWords = $(".logo_search").val();
        var url = $(".logo_right dt").attr("url");
        var val = $(".logo_right dt").attr("val");
        var param;
        if ($.isEmpty(keyWords)) {
            alert("搜索关键字不能为空");
        } else {
            if (val == 1) {
                window.location.href = url + "?techName=" + keyWords;
                tech(keyWords);
            } else if (val == 2) {
                window.location.href = url + "?reqName=" + keyWords;
                req(keyWords);
            } else if (val == 3) {
                window.location.href = url + "?usrRealName=" + keyWords;
                expert(keyWords);
            } else if (val == 4) {
                window.location.href = url + "?usrOrgName=" + keyWords;
                org(keyWords);
            }
            $.post(url, param);
        }

    })
})

function selectRole(roleParam) {
    var usr = $(".tech_per").attr("val");
    $.ajax({
        type: 'POST',
        data: 'role=' + roleParam,
        url: '/userCtr/setCurrentRole',
        dataType: 'json',
        success: function (result) {
            if (roleParam == 1) {
                $("#_homePage").attr("href", "javascript:queryTechHome(" + usr + ");");
                location.href = '/techInfoCtr/techInfoUsrList.html';
            } else if (roleParam == 2) {
                $("#_homePage").attr("href", "javascript:queryReqHome(" + usr + ");");
                location.href = '/requireInfoCtr/queryRequireUsr.html';
            } else if (roleParam == 3) {
                $("#_homePage").attr("href", "javascript:queryExpert(" + usr + ");");
                location.href = '/expertCtr/selectExpertMessage.html';
            } else if (roleParam == 4) {
                $("#_homePage").attr("href", "javascript:queryOrg(" + usr + ");");
                location.href = '/investOrgCtr/queryInvestOrgMessage.html';
            }
        }
    })
}

function tech(keyWords) {
    param = {
        techName: keyWords
    }
}

function req(keyWords) {
    param = {
        reqName: keyWords
    }
}

function expert(keyWords) {
    param = {
        usrRealName: keyWords
    }
}

function org(keyWords) {
    param = {
        usrOrgName: keyWords
    }
}

/**
 * 查询列表
 */
function queryList(svTypeId, svLevel, type) {
    var frm = document.getElementById("search_form");
    if (type == "1") {
        frm.action = "/techInfoCtr/static/totech.html";
    } else if (type == "2") {
        frm.action = "/requireInfoCtr/static/toreq.html";
    } else if (type == "3") {
        frm.action = "/expertCtr/static/toexpert.html";
    } else if (type == "4") {
        frm.action = "/investOrgCtr/static/toorg.html";
    }
    $("#svTypeId").val(svTypeId);
    $("#svLevel").val(svLevel);
    frm.submit();
}


/*验证不能为空*/
jQuery.isEmpty = function (v) {
    if (v == null || $.trim(v) == "") {
        return true;
    } else {
        return false;
    }
};