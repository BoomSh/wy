$(document).ready(function(){
//		导航条滚动置顶显示 侧边菜单
	$( window ).scroll(function() {
  		if($(this).scrollTop() > $('.top').height()+40) {
    	$(".menus_container .pc_nav").addClass("fixednav")
		$('.pc_nav').show()
    	$('.menu_lists').css({top:'40px'})
		$('.side_consult').addClass('suspend')
		$('.side_consult_e').addClass('suspend')
  	}else{
    	$(".menus_container .pc_nav").removeClass("fixednav")
    	$('.menus_container').css({paddingLeft:'0px'})
    	$('.pc_nav').hide()
    	$('.menu_lists').css({top:'65px'})
		$('.side_consult').removeClass('suspend')
		$('.side_consult_e').removeClass('suspend')
  		}
  	});
////  移民专栏
//	$(".special_column_policy").mouseover(function(){
//		$(this).find(".focus_lock").show();//显示
//		}).mouseout(function(){
//			$(this).find(".focus_lock").hide();//隐藏
//	})
//	热门国家
	$('.nation_li').mouseover(function(e) {
        $(this).siblings().stop().fadeTo(500,0.5).addClass('gg');
    });
	$('.nation_li').mouseout(function(e) {
        $(this).siblings().stop().fadeTo(500,1).removeClass('gg');
    });
//	导航栏鼠标滑过状态
	$(".menus_nav ul li").mouseover(function(){
		$(this).find(".menu_lists").show();//显示
	}).mouseout(function(){
		$(this).find(".menu_lists").hide();//隐藏
	});
//	侧边导航
	$(".side_consult ul li").mouseover(function(){
		$(this).find(".side_lists").show();//显示
	}).mouseout(function(){
	$(this).find(".side_lists").hide();//隐藏
});
//侧边导航确定按钮隐藏
$('.side_lists span').click(function(){
	$('.side_lists').hide();
})

//限制详情页图片响应式
$('.details_essay img').addClass('img-responsive');

//导航
$('.demo-buttons span, .opener > button').fancynav();
//弹窗
$('.popup_window .close_x img').click(function(){
	$(".popup_window").hide();
})
setTimeout(function(){
	$(".popup_window").show();
},5000)


})
//返回顶部
window.onload = function(){
	var btn_top=document.getElementById('btn_top');
	var v=-30;
	var t=0;
	var tp;
	btn_top.onclick=function(){
		scro();
	}
	window.onscroll=function(){
	tp=document.documentElement.scrollTop||document.body.scrollTop;
	return tp;
	};
	function scro(){
	clearInterval(timer);
	var timer=setInterval(function(){
	v=(0-tp)/50;
	if(tp<=0){tp=0;clearInterval(timer)}
	document.documentElement.scrollTop=tp+v;
	document.body.scrollTop=tp+v;
	},16)
	}
	
}
////	弹窗免费接听电话
//	document.getElementById("callBtn").onclick = function () {lxb.call(document.getElementById("telInput"));};
//	document.write('<script type="text/javascript"  data-lxb-uid="7250109" data-lxb-gid="102927" src="http://lxbjs.baidu.com/api/asset/api.js?t=' + new Date().getTime() + '" charset="utf-8"></scr' + 'ipt>' );
//	侧边栏免费接听电话
	document.getElementById("side_callBtn").onclick = function () {lxb.call(document.getElementById("side_telInput"));};
	document.write('<script type="text/javascript"  data-lxb-uid="7250109" data-lxb-gid="102927" src="http://lxbjs.baidu.com/api/asset/api.js?t=' + new Date().getTime() + '" charset="utf-8"></scr' + 'ipt>' );