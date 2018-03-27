function park_manae_addsave() {
    $.ajax({
        url: "/server/park/savemanae/",
        type: 'post',
        dataType: 'json',
        data: $("#f1").serialize(),
        success: function (data) {
            if (data != null) {
                if (data.msg == 0) {
                    alert(data.text);
                }
                else {
                    alert(data.text);
                }
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert(XMLHttpRequest.status);
            alert(XMLHttpRequest.readyState);
            alert(textStatus);
        }
    });
}

function park_manae_setSel(p_values) {
    if (p_values != "") {
        var strs = new Array();
        strs = p_values.split(",");
        for (i = 0; i < strs.length; i++) {
            if ($("#clsmid" + (i + 1)).length > 0) {
                $("#clsmid" + (i + 1)).val(strs[i]);
            }
        }
    }
}

function park_manae_setcover(p_obj) {
    $("input[name='piccover']").val("0");
    $(".picss").html("设为封面");
    $(p_obj).html("取消封面");
    $(p_obj).parent().find("input[name='piccover']").val("1");
}
/**************************人才需求开始*********************************/
//加载窗体
function park_manae_addhire(p_id) {
    if (p_id != "") {
        $.ajax({
            url: "/server/park/gethire/",
            type: 'post',
            dataType: 'json',
            data: { "hid": p_id },
            success: function (data) {
                if (data != null) {
                    if (data.msg == 0) {
                        $("#h_id").val(p_id);
                        $("#h_companyname").val(decodeURIComponent(data.enterprise));
                        $("#h_jobname").val(decodeURIComponent(data.position));
                        $("input[name='h_isfulltime'][value='" + data.isfulltime + "']").attr("checked", true);
                        $("#h_edu").val(data.education);
                        $("#h_sex").val(data.sex);
                        $("#h_experience").val(data.experience);
                        $("#h_salarymin").val(data.salarymin);
                        $("#h_salarymax").val(data.salarymax);
                        $("#h_qualifications").val(decodeURIComponent(data.qualifications));
                        $("#h_contact").val(decodeURIComponent(data.contact));
                        $("#h_telephone").val(data.telephone);
                        $("#h_email").val(data.email);
                        InitPronice("h_province", data.province);
                        InitCityByPName("h_city", data.province, data.city);
                        $('#remarks').show();
                        $('#screen').show();
                    }
                    else {
                        alert(data.text);
                    }
                }
            },
            error: function () {
                alert("系统错误，请联系管理员");
            }
        });
    }
    else {
        InitPronice("h_province", "");
        InitCityByPName("h_city", "", "");
        $("#h_id").val("0");
        $("#fm2").find("input[type='text']").val("");
        $("#fm2").find("textarea").val("");
        $('#remarks').show();
        $('#screen').show();
    }
}
//保存数据
function park_manae_savehire() {
    $.ajax({
        url: "/server/park/savehire/",
        type: 'post',
        dataType: 'json',
        data: $("#fm2").serialize(),
        success: function (data) {
            if (data != null) {
                if (data.msg == 0) {
                    if ($("#hire_" + data.hid).length > 0) {
                        $("#hire_" + data.hid).find("span").html(data.title);
                    }
                    else {
                        var html = "";
                        html += '<li id="hire_' + data.hid + '">';
                        html += '<a href="javascript:park_manae_delhire(' + data.hid + ')" >删除</a>';
                        html += '<a href="javascript:park_manae_addhire(' + data.hid + ')" >修改</a>';
                        html += '<span>'+data.title + '</span></li>';

                        $("#hirelist").append(html);
                    }
                    $('#remarks').hide();
                    $('#screen').hide();
                }
                else {
                    alert(data.text);
                }
            }
        },
        error: function () {
            alert("系统错误，请联系管理员");
        }
    });
}
//删除数据
function park_manae_delhire(p_id) {
    if (p_id != "") {
        $.ajax({
            url: "/server/park/delhire/",
            type: 'post',
            dataType: 'json',
            data: { "hid": p_id },
            success: function (data) {
                if (data != null) {
                    if (data.msg == 0) {
                        $("#hire_" + p_id).remove();
                    }
                    else {
                        alert(data.text);
                    }
                }
            },
            error: function () {
                alert("系统错误，请联系管理员");
            }
        });
    }
}
/**************************人才需求结束*********************************/
/**************************人才政策开始*********************************/
//加载窗体
function park_manae_addpolicy(p_id) {
    if (p_id != "") {
        $.ajax({
            url: "/server/park/getpolicy/",
            type: 'post',
            dataType: 'json',
            data: { "pid": p_id },
            success: function (data) {
                $("#pl_id").val("0");
                $("#fm3").find("input[type='text']").val("");
                $("#pl_policylist li").remove();
                if (data != null) {
                    if (data.msg == 0) {
                        $("#pl_id").val(p_id);
                        $("#pl_title").val(decodeURIComponent(data.title));
                        $("#pl_content1").val(decodeURIComponent(data.content1));
                        $("#pl_content2").val(decodeURIComponent(data.content2));
                        $("#pl_content3").val(decodeURIComponent(data.content3));
                        $("#pl_content4").val(decodeURIComponent(data.content4));
                        $("#pl_content5").val(decodeURIComponent(data.content5));
                        $("#pl_content6").val(decodeURIComponent(data.content6));
                        $("#pl_content7").val(decodeURIComponent(data.content7));
                        $("#pl_content8").val(decodeURIComponent(data.content8));
                        for (var o in data.file) {
                            var html = '<li class="onn" style="height:36px; line-height:36px;">';
                            html += '<span style=" float:right;"><a style="height:36px; line-height:36px; margin-left:5px;cursor:pointer;" onclick="$(this).parent().parent().remove();" >删除</a></span>';
                            html += '<input type="hidden" name="pl_fileurl" value="' + data.file[o].file + '" /><input type="hidden" name="pl_filename" value="' + decodeURIComponent(data.file[o].title) + '" />';
                            html += decodeURIComponent(data.file[o].title) + '</li>';
                            $("#pl_policylist").append(html);
                        }
                        $('#remarks1').show();
                        $('#screen').show();
                    }
                    else {
                        alert(data.text);
                    }
                }
            },
            error: function () {
                alert("系统错误，请联系管理员");
            }
        });
    }
    else {
        $("#pl_id").val("0");
        $("#fm3").find("input[type='text']").val("");
        $("#pl_policylist li").remove();
        $('#remarks1').show();
        $('#screen').show();
    }
}
//保存数据
function park_manae_savepolicy() {
    $.ajax({
        url: "/server/park/savepolicy/",
        type: 'post',
        dataType: 'json',
        data: $("#fm3").serialize(),
        success: function (data) {
            if (data != null) {
                if (data.msg == 0) {
                    if ($("#policy_" + data.pid).length > 0) {
                        $("#policy_" + data.pid).find("span").html(data.title);
                    }
                    else {
                        var html = "";
                        html += '<li id="policy_' + data.pid + '">';
                        html += '<a href="javascript:park_manae_delpolicy(' + data.pid + ')" >删除</a>';
                        html += '<a href="javascript:park_manae_addpolicy(' + data.pid + ')" >修改</a>';
                        html += '<span>'+data.title + '</span></li>';

                        $("#policylist").append(html);
                    }
                    $('#remarks1').hide();
                    $('#screen').hide();
                }
                else {
                    alert(data.text);
                }
            }
        },
        error: function () {
            alert("系统错误，请联系管理员");
        }
    });
}
//删除数据
function park_manae_delpolicy(p_id) {
    if (p_id != "") {
        $.ajax({
            url: "/server/park/delpolicy/",
            type: 'post',
            dataType: 'json',
            data: { "pid": p_id },
            success: function (data) {
                if (data != null) {
                    if (data.msg == 0) {
                        $("#policy_" + p_id).remove();
                    }
                    else {
                        alert(data.text);
                    }
                }
            },
            error: function () {
                alert("系统错误，请联系管理员");
            }
        });
    }
}
/**************************人才政策结束*********************************/
/***********************列表页*******************************/
//人才登记管理数据加载
function park_people_message(page) {
    var companyname = $('#companyname').val();
    var position = $('#position').val();
    var education = $('#education').val();
    var clsmid = $('#clsmidp').val();
    var clsid = $('#clsidp').val();
    var scnl = $('#scnl').val();
    var provincep = $('#provincep').val();
    var cityp = $('#cityp').val();
    var areap = $('#areap').val();
    var addtime1 = $('#addtimea').val();
    var addtime2 = $('#addtimeb').val();
    $("#message tr:gt(0)").remove();
    $.ajax({
        type: 'post',
        url: '/server/park/peopledata',
        data: 'companyname=' + companyname + '&position=' + position + '&education=' + education + '&clsmid=' + clsmid + '&clsid=' + clsid + '&nl=' + scnl + '&province=' + provincep + '&city=' + cityp + '&area=' + areap + '&addtime1=' + addtime1 + '&addtime2=' + addtime2,
        dataType: 'json',
        cache: false,
        success: function (json) {
            if (json != null) {
                var data = json;
                $.each(data, function (i) {
                    var html = "";
                    html += '<tr>';
                    html += ' <td class="rc_tb"><em>' + data[i].truename + '</em></td>';
                    html += '<td class="rc_tb"><em>' + data[i].companyname + '</em></td>';
                    html += '<td class="rc_tb"><em>' + data[i].position + '</em></td>';
                    html += '<td class="rc_tb"><em>' + data[i].education + '</em></td>';
                    html += '<td class="rc_tb"><em>' + data[i].hyname + '</em></td>';
                    html += '<td class="rc_tb"><em>' + data[i].scnl + '</em></td>';
                    html += '<td class="rc_tb"><em>' + data[i].addtime + '</em></td>';
                    html += '</tr>';
                    $("#message").append(html);
                });

            }


        }
    });
}