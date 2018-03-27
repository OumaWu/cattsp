/**
 * 验证登录信息
 */
function login_check() {
	var boo;
	$.ajax({
        type: 'POST',
        url: '/userCtr/static/login',
        dataType: 'json',
        async: false,
        success: function(result){
        	boo = result;
        }
    });
	
	return boo;
}


/**
 * 发布技术
 */
function pushTech($this) {
	if(login_check().success) {
		$.ajax({
			url : '/userCtr/isBasicMessageIntegrity', 
			type: 'POST',
			data: '',
			dataType : 'json',
			success:function(result){
				if(result.body=='true'){
					window.location.href="/techInfoCtr/publishTech.html";
				}else if(result.body=='false'){
					alert("请先完善基本信息");
						window.location.href="/userCtr/selectUBasicMessage.html";
				}
			}
		});
	} else {
		show_login();
	}
}
/**
 * 发布需求
 */
function pushNeed() {
	if(login_check().success) {
		$.ajax({
			type: 'POST',
			data: '',
			url : '/userCtr/isBasicMessageIntegrity',
			dataType : 'json',
			success:function(result){
				if(result.body=='true'){
					window.location.href="/requireInfoCtr/toRequireForm.html";
				}else if(result.body=='false'){
					alert("请先完善基本信息");
					window.location.href="/userCtr/selectUBasicMessage.html";
				}
			}
		});
	} else {
		show_login();
	}
}
/**
 * 加入专家
 */
function joinSpec() {
	if(login_check().success) {
		$.ajax({
			type: 'POST',
			data: '',
			url : '/userCtr/isBasicMessageIntegrity',
			dataType : 'json',
			success:function(result){
				if(result.body=='true'){
					var flag = '0';
					$.ajax({
						type: 'POST',
						data: '',
						url : '/userCtr/selectUsrRoleByKey',
						dataType : 'json',
						success:function(result2){
							$.each(result2.body,function(i,item){
								if(item == 3){
									$(".suc_addPat").show();
									$(".suc_addPat h3").text("您已成为专家")
									$(".layouts").show();
									$(".true_btns").click(function(){
										$(".suc_addPat").hide();
										$(".layouts").hide();
									})
									$("#closePatent").click(function(){
										$(".suc_addPat").hide();
										$(".layouts").hide();
									})
									flag = '1';
								}
							})
							if(flag=='0'){
								window.location.href="/expertCtr/toExpertForm.html";
							}
						}
					});
				}else if(result.body=='false'){
					alert("请先完善基本信息");
					window.location.href="/userCtr/selectUBasicMessage.html";
				}
			}
		});
	} else {
		show_login();
	}
}
/**
 * 注册投资机构
 */
function resOrg() {
	if(login_check().success) {
		$.ajax({
			type: 'POST',
			data: '',
			url : '/userCtr/isBasicMessageIntegrityOrg',
			dataType : 'json',
			success:function(result){
				if(result.body=='true'){
					var flag = '0';
					$.ajax({
						type: 'POST',
						data: '',
						url : '/userCtr/selectUsrRoleByKey',
						dataType : 'json',
						success:function(result2){
							$.each(result2.body,function(i,item){
								if(item == 4){
									$(".suc_addPat").show();
									$(".suc_addPat h3").text("您已成为投资机构")
									$(".layouts").show();
									$(".true_btns").click(function(){
										$(".suc_addPat").hide();
										$(".layouts").hide();
									})
									$("#closePatent").click(function(){
										$(".suc_addPat").hide();
										$(".layouts").hide();
									})
									flag = '1';
								}
							})
							if(flag=='0'){
								window.location.href="/investOrgCtr/toInvestOrgForm.html";
							}
						}
					});
				}else if(result.body=='false'){
					alert("请先完善基本信息中的单位名称和单位简介");
					window.location.href="/userCtr/selectUBasicMessage.html";
				}
			}
		});
	} else {
		show_login();
	}
}
//显示登录
function show_login(){
	$(".login_load,.layout").show();
	$(".login_load iframe").attr("src","/login.html");
}

