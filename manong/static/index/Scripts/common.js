//阅读全文
$(function(){
	if(document.getElementById('iwrap')){
		var slideHeight = 515;
	}else{
		var slideHeight = 290;
	}
	var defHeight = $('#wrap').height();
	if(defHeight > slideHeight){
		$('#gradient').fadeIn();
		$('#wrap').css('height' , slideHeight + 'px');
		$('#read-more').append('<a class="layui-btn">阅读全文</a>');
		$('#read-more a').click(function(){
			var curHeight = $('#wrap').height();
			if(curHeight == slideHeight){
				$('#wrap').animate({
				  height: "100%"
				}, "normal");
				$('#read-more a').html('折叠隐藏');
				$('#gradient').fadeOut();
			}else{
				$('#wrap').animate({
				  height: slideHeight
				}, "normal");
				$('#read-more a').html('阅读全文');
				$('#gradient').fadeIn();
			}
			return false;
		});		
	}
});
$(function(){
    $('a[href*=#],area[href*=#]').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var $target = $(this.hash);
            $target = $target.length && $target || $('[name=' + this.hash.slice(1) + ']');
            if ($target.length) {
                var targetOffset = $target.offset().top;
                $('html,body').animate({
                    scrollTop: targetOffset
                },200);
                return false;
            }
        }
    });    
});


//客服
!function(){
    var util = layui.util,layer = layui.layer,flow = layui.flow,element = layui.element;
    flow.lazyimg();
    util.fixbar({
        bar1: ''
				,bar2: ''
        ,click: function(type){
          if(type === 'bar2'){
            layer.open({
					type: 1
					,title: false //不显示标题栏
					,closeBtn: true
					,area: '300px;'
					,shade: 0.5
					,id: 'LAY_layuipro' //设定一个id，防止重复弹出
					,btn: ['联系客服']
					,btnAlign: 'c'
					,moveType: 1 //拖拽模式，0或者1
					,content: '<div style="padding: 50px 20px; line-height: 22px; background-color: #393D49; color: #fff;"><div style="text-align: center;padding-bottom: 20px;">码农网专业的源码分享平台</div>本站是源码分享平台，资源均为会员分享，码农网进行审核，并没有售后以及安装服务，请悉知！所有资源是针对有一定技术基础人员，研究学习使用。</div>'
					,success: function(layero){
						var btn = layero.find('.layui-layer-btn');
						btn.find('.layui-layer-btn0').attr({
							href: 'http://wpa.qq.com/msgrd?v=3&uin=786199846&site=manong.yahoi.cc&menu=yes'
							,target: '_blank'
						});
					}
				});
					} else if(type === 'bar1') {
        		location.href = '/index/index/vip';
      		}
        }
    });
}();
//提示框
function dr_tips( msg, code, time) {
    if (!time) {
        time = 3000;
    }
    var tip = '<i class="layui-icon"></i>';
    if (code == 1) {
        tip = '<i class="layui-icon"></i>';
    } else if (code == 0) {
        tip = '<i class="layui-icon">ဇ</i>';
    }
    layer.msg(tip+'  '+msg);
}
//轮播
layui.use('carousel', function(){
  	var carousel = layui.carousel;
  	//建造实例
  	carousel.render({
    elem: '#thumb'
    ,width: '100%' //设置容器宽度
	,height: '100%'
    ,arrow: 'always' //始终显示箭头
    ,indicator: 'none' //切换动画方式
  });
});
//相册层
layer.photos({
  photos: '#thumb'
  ,anim: 5
});
//代码修饰器
layui.code({
  	elem: 'pre', //默认值为.layui-code
	about: false
});
//提示层
layui.use('layer', function() {
    var layer = layui.layer;
    $(".show-title h1 i").hover(function() {
        if ($(this).text() != '') {
            layer.tips($(this).text(), $(this).parent("h1"), { area: ["auto"], tips: [3, '#5fb878'] });
        }
    }, function() {
        layer.closeAll();
    });


});
//退出
function dr_loginout(msg) {
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "/index.php?s=member&c=login&m=out",
        success: function(data) {
            dr_tips(msg,1);
            setTimeout('window.location.href="' + data.backurl + '"', 2000);
            var sync_url = data.syncurl;
            for (var i in sync_url) {
                $.ajax({
                    type: "GET",
                    async: false,
                    url: sync_url[i],
                    dataType: "jsonp",
                    success: function(json) {},
                    error: function() {}
                })
            }
        },
        error: function(HttpRequest, ajaxOptions, thrownError) {
            alert(HttpRequest.responseText);
        }
    })
}
// 模块收藏
function dr_favorite(dir, id) {
    $.get("/index.php?s="+dir+"&c=api&m=favorite&is_delete=1&id="+id, function(data){
        if (data == 1) {
    		dr_tips("没有登录，不能收藏",0);
    	} else if (data == 2) {
        	dr_tips("文档不存在，无法收藏",0);
    	} else if (data == 3) {
        	dr_tips("取消收藏",1);
    	} else if (data == 4) {
        	dr_tips("收藏成功",1);
    	}
    });
}
function dr_login() {
    top.dialog({
        quickClose: true,
        url: memberpath + "index.php?s=member&c=login&m=ajax",
        title: lang["login"],
        opacity: 0.1,
        lock: true,
        width: 380,
        height: 220,
        okValue: lang['ok'],
        ok: function() {
            window.location.reload(true);
            return false
        },
        cancelValue: lang['cancel'],
        cancel: function() {}
    }).show()
};
function download() {
    layer.open({
		type: 1,
		anim: 2,//弹出动画
        skin: 'layui-layer-rim', //样式类名
		title:false,
        area: ['480px', ''], //宽高
		resize:false,//是否允许拉伸
        content: $('#download'),
		end: function(){
			 $("#download").hide();
  		}
    });
};
//搜索url
$(function() {
	$(".searchBtn").click(function() {
        var a = $(".searchInput");
        if ("" == a.val().replace(/\s/, "")) return layer.alert("\u8bf7\u8f93\u5165\u641c\u7d22\u5173\u952e\u8bcd",{icon: 0});
        location.href = "/search/keyword-" + a.val()
    });
});
$(".search-inp").on("keypress", function(a) {
    13 == (a.keyCode ? a.keyCode : a.which ? a.which : a.charCode) && $(this).closest(".searchBox").find(".searchBtn").click()
});
//滚动
function autoScroll(obj){
	$(obj).find("ul").animate({ 
		marginTop : "-58px"
	},500,function(){
		$(this).css({marginTop : "0px"}).find("li:eq(0),li:eq(1)").appendTo(this);
	})
}
function autoScroll2(obj){
	$(obj).find("ul").animate({ 
		marginTop : "-40px"
	},500,function(){
		$(this).css({marginTop : "0px"}).find("li:eq(0)").appendTo(this);
	})
}
$(function(){ 
	setInterval('autoScroll(".layui-show.index-gun")',3000);
	setInterval('autoScroll2(".show-gun")',2000);
});
//ajax加载登陆
$(function() {
	$.ajax({
		type: "GET",
        async: true,
        url:"/index.php?c=api&m=html&name=user&format=jsonp",
        dataType: "jsonp",
        success: function(json){
        	$("#dr_user").html(json.html);
					var element = layui.element;
					element.render('nav', 'user');
        	},
            error: function(){ }
	});
	
});
/*弹幕*/
