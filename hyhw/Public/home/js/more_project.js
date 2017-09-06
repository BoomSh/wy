$(function(){
//  		$('.all_items_content').hide().eq(0).show();
    		$('.all_state ul li h4').eq(1).addClass('all_project_active')
    		$('.all_state ul li').eq(0).css({borderRight:'none'})
    		$('.all_state li').click(function(){
    			var i = $(this).index();
            	$('.all_items_content').hide().eq(i-1).show();
            	$('.all_state ul li h4').removeClass().eq(i).addClass('all_project_active');
            	$('.all_state ul li').css({borderRight:'1px solid #d7d7d7'}).eq(i).css({borderRight:'none'})
    		})
    		
//  		alert($(window).height());
//  		$('.all_state ul').css({height:'hei',overflowY:'scroll'})
//		alert( window.screen.height )

})