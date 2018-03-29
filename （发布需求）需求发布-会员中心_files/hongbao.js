function hongbao_GetOrderStateTime(ordernum) {
    var status = "";
    $("#statustime div[status]").each(function (index, element) {
        status += $(element).attr("status") + ",";
    });
    if (status == "" || status == ",") {
        return false;
    }
    //�ύ��ѯ
    $.ajax({
        type: "get",
        url: "/server/hongbao/order/GetStateTime?ordernum=" + ordernum + "&statuses=" + status,
        dataType: "json",
        success: function (json) {
            if (json.data != null) {
                if (json.data.length > 0) {
                    for (var i = 0; i < json.data.length; i++) {
                        var status = json.data[i].status;
                        var date = json.data[i].date;
                        var hour = json.data[i].hour;

                        $("#statustime div[status='" + status + "']").find("span[class='org']:eq(0)").html(date);
                        $("#statustime div[status='" + status + "']").find("span[class='org']:eq(1)").html(hour);

                        $("#statustime div[status='" + status + "']").find("span[class='lc_blue']:eq(0)").html(date);
                        $("#statustime div[status='" + status + "']").find("span[class='lc_blue']:eq(1)").html(hour);
                    }

                }
            }
        }
    });

}