var jiaoYuZhuanYeDataObject=[{id:1,name:"数理科学",son:[{id:2,name:"数学"},{id:3,name:"力学"},{id:4,name:"天文学"},{id:5,name:"物理学"}]},{id:6,name:"化学科学",son:[{id:7,name:"无机化学"},{id:8,name:"有机化学"},{id:9,name:"物理化学"},{id:10,name:"高分子科学"},{id:11,name:"分析化学"},{id:12,name:"化学工程及工业化学"},{id:13,name:"环境化学"}]},{id:14,name:"生命科学",son:[{id:15,name:"微生物学"},{id:16,name:"植物学"},{id:17,name:"生态学"},{id:18,name:"动物学"},{id:19,name:"生物物理、生物化学与分子生物学"},{id:20,name:"遗传学与生物信息学"},{id:21,name:"细胞生物学"},{id:22,name:"免疫学"},{id:23,name:"神经科学、认知科学与心理学"},{id:24,name:"生物力学与组织工程学"},{id:25,name:"生理学与整合生物学"},{id:26,name:"发育生物学与生殖生物学"},{id:27,name:"农学基础与作物学"},{id:28,name:"植物保护学"},{id:29,name:"园艺学与植物营养学"},{id:30,name:"林学"},{id:31,name:"畜牧学与草地科学"},{id:32,name:"兽医学"},{id:33,name:"水产学"},{id:34,name:"食品科学"}]},{id:35,name:"地球科学",son:[{id:36,name:"地理学"},{id:37,name:"地质学"},{id:38,name:"地球化学"},{id:39,name:"地球物理学和空间物理学"},{id:40,name:"大气科学"},{id:41,name:"海洋科学"}]},{id:42,name:"工程材料",son:[{id:43,name:"金属材料"},{id:44,name:"无机非金属材料"},{id:45,name:"有机高分子材料"},{id:46,name:"冶金与矿业"},{id:47,name:"机械工程"},{id:48,name:"工程热物理与能源利用"},{id:49,name:"电气科学与工程"},{id:50,name:"建筑环境与结构工程"},{id:51,name:"水利科学与海洋工程"}]},{id:52,name:"信息科学",son:[{id:53,name:"电子学与信息系统"},{id:54,name:"计算机科学"},{id:55,name:"自动化"},{id:56,name:"半导体科学与信息器件"},{id:57,name:"光学和光电子学"}]},{id:58,name:"医学科学",son:[{id:59,name:"呼吸系统"},{id:60,name:"循环系统"},{id:61,name:"消化系统"},{id:62,name:"生殖系统/围生医学/新生儿"},{id:63,name:"泌尿系统"},{id:64,name:"运动系统"},{id:65,name:"内分泌系统/代谢和营养支持"},{id:66,name:"血液系统"},{id:67,name:"神经系统和精神疾病"},{id:68,name:"医学免疫学"},{id:69,name:"皮肤及其附属器"},{id:70,name:"眼科学"},{id:71,name:"耳鼻咽喉头颈科学"},{id:72,name:"口腔颅颌面科学"},{id:73,name:"急重症医学/创伤/烧伤/整形"},{id:74,name:"肿瘤学"},{id:75,name:"康复医学"},{id:76,name:"影像医学与生物医学工程"},{id:77,name:"医学病原微生物与感染"},{id:78,name:"检验医学"},{id:79,name:"特种医学"},{id:80,name:"放射医学"},{id:81,name:"法医学"},{id:82,name:"地方病学/职业病学"},{id:83,name:"老年医学"},{id:84,name:"预防医学"},{id:85,name:"中医学"},{id:86,name:"中药学"},{id:87,name:"中西医结合"},{id:88,name:"药物学"},{id:89,name:"药理学"}]},{id:90,name:"人文学科",son:[{id:91,name:" 哲学"},{id:92,name:"中国语言文学"},{id:93,name:"外国语言文学"},{id:94,name:"新闻传播学"},{id:95,name:"艺术学"},{id:96,name:"历史学"}]},{id:97,name:"社会科学",son:[{id:98,name:"经济学"},{id:99,name:"法学"},{id:100,name:"政治学"},{id:101,name:"社会学"},{id:102,name:"民族学"},{id:103,name:"马克思主义理论"},{id:104,name:"教育学"},{id:105,name:"心理学（可授教育学、理学学位）"},{id:106,name:"体育学"}]},{id:107,name:"军事科学",son:[{id:108,name:"军事思想及军事历史"},{id:109,name:"战略学"},{id:110,name:"战役学"},{id:111,name:"战术学"},{id:112,name:"军队指挥学"},{id:113,name:"军制学"},{id:114,name:"军队政治工作学"},{id:115,name:"军事后勤学与军事装备学"}]},{id:116,name:"管理科学",son:[{id:117,name:"管理科学与工程(可授管理学、工学学位)"},{id:118,name:"工商管理"},{id:119,name:"农林经济管理"},{id:120,name:"公共管理"},{id:121,name:"图书馆、情报与档案管理"}]}];var jiaoYuZhuanYeObject={data:jiaoYuZhuanYeDataObject,getName:function(g){var c="";for(var e=0;e<jiaoYuZhuanYeObject.data.length;e++){var d=jiaoYuZhuanYeObject.data[e];if(parseInt(d.id)===parseInt(g)){c=d.name;break}var f=d.son;for(var a=0;a<f.length;a++){var b=f[a];if(parseInt(b.id)===parseInt(g)){c=b.name;break}}}return c},init:function(b,a,d,c){jiaoYuZhuanYeObject.set1(b,d);jiaoYuZhuanYeObject.set2(a,d,c);$("#"+b).bind("change",function(){jiaoYuZhuanYeObject.change(b,a)})},set1:function(a,f){$("#"+a).empty();$("#"+a).append("<option value=''>请选择</option>");for(var d=0;d<jiaoYuZhuanYeObject.data.length;d++){var c=jiaoYuZhuanYeObject.data[d];var e=c.id;var b=c.name;$("#"+a).append("<option value='"+e+"'>"+b+"</option>")}if(f!=undefined){$("#"+a).val(f)}},set2:function(h,l,j){$("#"+h).empty();$("#"+h).append("<option value=''>请选择</option>");for(var f=0;f<jiaoYuZhuanYeObject.data.length;f++){var m=jiaoYuZhuanYeObject.data[f];var d=m.id;var b=m.name;if(parseInt(d)===parseInt(l)){for(var e=0;e<m.son.length;e++){var g=m.son[e];var c=g.id;var a=g.name;$("#"+h).append("<option value='"+c+"'>"+a+"</option>")}if(j!=undefined){$("#"+h).val(j)}}}},change:function(b,a){var c=parseInt($("#"+b).val());jiaoYuZhuanYeObject.set2(a,c)}};var xueliObject={data:[{id:1,name:"博士"},{id:2,name:"硕士"},{id:3,name:"本科"},{id:4,name:"专科及以下"}],init:function(a,c){var b='<option value="">请选择</option>';$("#"+a).append(b);$(xueliObject.data).each(function(e,f){var h=f.id;var d=f.name;var g='<option value="'+h+'">'+d+"</option>";$("#"+a).append(g)});if(c!=undefined){$("#"+a).val(c)}}};