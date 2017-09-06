$(document).ready(function(){
//	$(".about_us_tag ul li").mouseover(function(){
//		$(this).find(".focus_lock").show();//显示
//		}).mouseout(function(){
//			$(this).find(".focus_lock").hide();//隐藏
//	})

//		$('.about_us_content').hide().eq(0).show();
		$('.project_btitle').hide().eq(0).show();
		$('.about_us_tag ul li').eq(0).addClass('about_us_tag_active');
        $('.about_us_tag ul li h4').eq(0).addClass('about_us_tag_active_h4');
        $('.about_us_tag ul li').hover(function(){
            // index方法获取当前索引
            var i = $(this).index();
            $('.about_us_content').hide().eq(i).show();
            $('.project_btitle').hide().eq(i).show();
            $('.about_us_tag ul li').removeClass().eq(i).addClass('about_us_tag_active');
             $('.about_us_tag ul li h4').removeClass().eq(i).addClass('about_us_tag_active_h4');
        })
        
         $('#myCarousel').carousel({interval:4000});//每隔4秒自动轮播 
//  图片放大效果     
    var x = 22; 
     var y = 20; 
     $("a.smallimage").hover(function(e){  //绑定一个鼠标悬停时事件 
     //新建一个p标签来存放大图片，this.rel就是获取到a标签的大图片的路径，然后追加到body中 
         $("body").append('<p id="bigimage"><img src="'+ this.rel + '" alt="" /></p>');  
     //改变小图片的透明度为0.5，结合上面的CSS，看起来就象是图片变暗了 
         $(this).find('img').stop().fadeTo('slow',0.5); 
    //将鼠标的坐标和声明的x，y做运算并赋值给大图片绝对定位的坐标，然后以fadeIn的效果显示 
         $("#bigimage").css({top:(e.pageY - y ) + 'px',left:(e.pageX + x ) + 'px'}).fadeIn('fast'); 
     },function(){ //鼠标离开后  
     //将变暗的图片复原 
        $(this).find('img').stop().fadeTo('slow',1); 
     //移除新增的p标签 
         $("#bigimage").remove(); 
     }); 
     $("a.smallimage").mousemove(function(e){  //绑定一个鼠标移动的事件 
     //将鼠标的坐标和声明的x，y做运算并赋值给大图片绝对定位的坐标，这样大图片就能跟随图片而移动了 
     $("#bigimage").css({top:(e.pageY -y ) + 'px',left:(e.pageX + x ) + 'px'}); 
     }); 
         
         
         
})

