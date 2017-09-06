$(function(){
//	移民指南tag选项卡
//      $('.content').hide().eq(0).show();
        $('.guide_tag ul li').hover(function(){
            // index方法获取当前索引
            var i = $(this).index();
            $('.content').hide().eq(i).show();
            $('.guide_tag ul li').removeClass().eq(i).addClass('active');
        })
// 移民项目tag选项卡      
		$('.immigrant_tag ul li').eq(0).addClass('active');
     $('.immigrant_content').hide().eq(0).show();
         $('.immigrant_tag ul li').hover(function(){
            // index方法获取当前索引
            var i = $(this).index();
            $('.immigrant_content').hide().eq(i).show();;
            $('.immigrant_tag ul li').removeClass().eq(i).addClass('active');
        })
//获取更多移民项目
         $(".more_down_up .more_down_investment_immigrant").click(function(){
         		$('.investment_immigrant .immigrant_content_lists:gt(1)').show();
         		$('.more_down_investment_immigrant').hide();
         		$('.more_up_investment_immigrant').show();
         })
         $(".more_down_up .more_up_investment_immigrant").click(function(){
         		$('.investment_immigrant .immigrant_content_lists:gt(1)').hide();
         		$('.more_down_investment_immigrant').show();
         		$('.more_up_investment_immigrant').hide();
         })
         
         $(".more_down_up .more_down_skilled_migration").click(function(){
         		$('.skilled_migration .immigrant_content_lists:gt(1)').show();
         		$('.more_down_skilled_migration').hide();
         		$('.more_up_skilled_migration').show();
         })
         $(".more_down_up .more_up_skilled_migration").click(function(){
         		$('.skilled_migration .immigrant_content_lists:gt(1)').hide();
         		$('.more_down_skilled_migration').show();
         		$('.more_up_skilled_migration').hide();
         })
         
         $(".more_down_up .more_down_entrepreneurship_immigrant").click(function(){
         		$('.entrepreneurship_immigrant .immigrant_content_lists:gt(1)').show();
         		$('.more_down_entrepreneurship_immigrant').hide();
         		$('.more_up_entrepreneurship_immigrant').show();
         })
         $(".more_down_up .more_up_entrepreneurship_immigrant").click(function(){
         		$('.entrepreneurship_immigrant .immigrant_content_lists:gt(1)').hide();
         		$('.more_down_entrepreneurship_immigrant').show();
         		$('.more_up_entrepreneurship_immigrant').hide();
         })
         
         
         
         
        var investment_immigrant_len = $('.investment_immigrant .immigrant_content_lists').length;
        var skilled_migration_len = $('.skilled_migration .immigrant_content_lists').length ;
        var entrepreneurship_immigrant_len = $('.entrepreneurship_immigrant .immigrant_content_lists').length;
        
         if(investment_immigrant_len>2){
         	$('.more_down_up_investment_immigrant').show();
         }else{
         	$('.more_down_up_investment_immigrant').hide();
         }
         if(skilled_migration_len>2){
         	$('.more_down_up_skilled_migration').show();
         }else{
         	$('.more_down_up_skilled_migration').hide();
         }
         if(entrepreneurship_immigrant_len>2){
         	$('.more_down_up_entrepreneurship_immigrant').show();
         }else{
         	$('.more_down_up_entrepreneurship_immigrant').hide();
         }
         
         
        
})