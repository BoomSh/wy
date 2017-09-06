<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
		<meta charset="utf-8">
		<!--让IE读取最高的文档模式-->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--使用 viewport meta 标签在手机浏览器上控制布局-->
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<!--隐藏状态栏-->
		<meta name="apple-mobile-web-app-status-bar-style" content="blank" />
	    <!--iPhone会将看起来像电话号码的数字添加电话连接，应当关闭-->
		<meta name="format-detection" content="telephone=no" />
		<!--将不识别邮箱-->
		<meta content="email=no" name="format-detection" />
		<!--winphone系统a、input标签被点击时产生的半透明灰色背景怎么去掉-->
		<meta name="msapplication-tap-highlight" content="no">
	  <title>HYIMMI--LEADING OFFSHORE INVESTMENT SERVICE</title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<!-- Bootstrap -->
		<link rel="shortcut icon" href="http://oms8e6h6f.bkt.clouddn.com/label/png/label_logo%EF%BC%93.ico" type="image/x-icon">
		<link href="/Public/home/css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="/Public/home/css/swiper.min.css"/>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<link rel="stylesheet" type="text/css" href="/Public/home/css/fancynav.min.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/home/css/font-awesome.min.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/home/css/styles.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/home/css/public.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/home/css/index_e.css"/>
		
       <script src="/Public/home/js/jquery-3.1.1.min.js"></script>
       <script src="/Public/home/js/bootstrap.min.js"></script>
       <script src="/Public/home/js/swiper.min.js" type="text/javascript" charset="utf-8"></script>
       <script src="/Public/home/js/jquery.fancynav.min.js" type="text/javascript" charset="utf-8"></script>
   
  </head>
  <body>
  	<!--头部信息开始-->
   	<header class="hidden-xs">
   		<div class="container">
   			<div class="row">
   				<div class="col-sm-8">
   					<h6 class="h_brand">Welcome to Hyimmi—professional services, casting perfect quality</h6>
   				</div>
   				<div class="col-sm-4">
   					<h6><a href="">ENGLISH</a></h6>
   					<h6><a href="http://www.hyimmi.com/">中文</a></h6>
   				</div>
   			</div>
   		</div>
   	</header>
   	<!--头部信息结束-->
   	
   	<!--logo信息开始-->
     <section class="top hidden-xs">
       <div class="container">
         <div class="row">
           <div class="col-sm-6 logo">
             <a href="<?php echo U('Index/index');?>"><img class="img-responsive" src="http://oms8e6h6f.bkt.clouddn.com/home_e/png/logo_e02.png" alt="" title=""/></a>    
           </div>
           <div class="col-sm-6 top_phone">
             <h5 class="phone_number">+60123062336</h5>
             <img class="img-responsive phone_img" src="http://oms8e6h6f.bkt.clouddn.com/home_e/png/phone.png"/>
           </div>
         </div>
       </div>
     </section>
     <!--logo信息结束-->
   	
   	<!--导航菜单开始-->
   	<section class="menus">
   			<div class="container menus_container">
   				<!--固定导航-->
   				<div class="row hidden-xs fixation_pc_nav">
   					<div class="col-sm-12">
   						<div class="menus_nav">
								<ul>
									<li class="menus_nav_li">
										<a href="<?php echo U('Index/index');?>" class="mainNav">Home Page</a>
									</li>
									<li class="menus_nav_li">
										<a href="#" class="mainNav">Immigrant Country</a>
										<div class="menu_lists">
											<ul>
												 <?php if(is_array($countries)): foreach($countries as $key=>$vo): ?><li><a href="<?php echo U('Home/Index/countries_page',array('cid'=>$vo['cid'],''));?>"><?php echo ($vo["typename"]); ?></a></li><?php endforeach; endif; ?>
											</ul>
										</div>
									</li>
									<li class="menus_nav_li hidden-xs">
										<a href="<?php echo U('Index/project_selection');?>" class="mainNav">Project Selection</a>
									</li>
									<li class="menus_nav_li">
										<a href="<?php echo U('Index/aboutUs');?>" class="mainNav">About Us</a>
									</li>
								</ul>
							</div>
   					</div>
   				</div>
   				<!--滚动导航-->
   				<div class="row hidden-xs pc_nav">
   					<div class="pc_nav_main">
   						<div class="col-sm-2 small_logo">
   							<img class="img-responsive center-block" src="http://oms8e6h6f.bkt.clouddn.com/home_e/png/s_logo_02.png"/>	
   						</div>
	   					<div class="col-sm-10">
	   						<div class="menus_nav">
									<ul>
										<li class="menus_nav_li">
											<a href="<?php echo U('Index/index');?>" class="mainNav">Home Page</a>
										</li>
										<li class="menus_nav_li">
											<a href="#" class="mainNav">Immigrant Country</a>
											<div class="menu_lists">
												<ul>
													<?php if(is_array($countries)): foreach($countries as $key=>$vo): ?><li><a href="<?php echo U('Home/Index/countries_page',array('cid'=>$vo['cid'],''));?>"><?php echo ($vo["typename"]); ?></a></li><?php endforeach; endif; ?>
												</ul>
											</div>
										</li>
										<li class="menus_nav_li hidden-xs">
											<a href="<?php echo U('Index/project_selection');?>" class="mainNav">Project Selection</a>
										</li>
										<li class="menus_nav_li">
											<a href="<?php echo U('Index/aboutUs');?>" class="mainNav">About Us</a>
										</li>
									</ul>
								</div>
	   					</div>
   					</div>
   				</div>
   				<!--移动端显示-->
   				<div class="row visible-xs menu_button">
   					<div class="col-sm-12">
						  <div class="wrapper">
								<div class="column demo-buttons">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						        <span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						  		</button>
						  		<div class="m_s_logo" >
						  			<img class="img-responsive" src="http://oms8e6h6f.bkt.clouddn.com/home_e/png/m_s_logo_e.png"/>
						  		</div>
								</div>
								<ul class="demolist fancynav-add" style="display: none;">
									<li><a href="<?php echo U('Index/index');?>">Home Page</a></li>
									<li><a href="#">Immigrant Country</a>
										<ul>
											<<?php if(is_array($countries)): foreach($countries as $key=>$vo): ?><li><a href="<?php echo U('Home/Index/countries_page',array('cid'=>$vo['cid'],''));?>"><?php echo ($vo["typename"]); ?></a></li><?php endforeach; endif; ?>
										</ul>
									</li>
									<li><a href="<?php echo U('Index/more_project');?>">Project Selection</a></li>
									<li><a href="<?php echo U('Index/aboutUs');?>">About Us</a></li>
								</ul>
							</div>
   					</div>
   				</div>
   			</div>
   	</section>
		<!--导航菜单结束-->
   
		
		<!--banner轮播图开始-->
		<section class="banner">
			<!--移动端banner-->
			<div class="container banner_container visible-xs">
				<div class="row banner_row">
					<div class="col-sm-12 banner_12">
							<div class="swiper-container">
				        <div class="swiper-wrapper">
				        		<div class="swiper-slide">
				            	<a href="#">
				            		<!--移动端-->
				            		<img class="img-responsive center-block visible-xs" src="http://oms8e6h6f.bkt.clouddn.com/home_e/png/mbanner_e_1701.png"/>
				            	</a>			            	
				            </div>
				            <div class="swiper-slide">
				            	<a href="#">
				            		<!--移动端-->
				            		<img class="img-responsive center-block visible-xs" src="http://oms8e6h6f.bkt.clouddn.com/home_e/png/mbanner_e_1704.png"/>
				            	</a>			            	
				            </div>
				            <div class="swiper-slide">
				            	<a href="#">
				            		<!--移动端-->
				            		<img class="img-responsive center-block visible-xs" src="http://oms8e6h6f.bkt.clouddn.com/home_e/png/mbanner_e_1705.png"/>
				            	</a>
				            </div>      
				        </div>
        			<!-- Add Pagination -->
        			<div class="swiper-pagination"></div>
        			<!--左右箭头-->
        			<div class="swiper-button-next hidden-xs"></div>
        			<div class="swiper-button-prev hidden-xs"></div>
    				</div>
					</div>
				</div>
			</div>
			<!--pc端banner-->
			<div class="container pc_banner_container hidden-xs">
				<div class="row pc_banner_row">
					<div class="col-sm-12 pc_banner_col_sm_12">					
						<div id="myCarousel" class="carousel slide">
						    <!-- 轮播（Carousel）指标 -->
						    <ol class="carousel-indicators">
						        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						        <li data-target="#myCarousel" data-slide-to="1"></li>
						        <li data-target="#myCarousel" data-slide-to="2"></li>
						    </ol>   
						    <!-- 轮播（Carousel）项目 -->
						    <div class="carousel-inner">
						        <div class="item active">
						            <a href="#">
					            		<!--PC端-->
					            		<img class="img-responsive center-block hidden-xs" src="http://oms8e6h6f.bkt.clouddn.com/home_e/png/pcbanner_e_1703.png"/>
				            		</a>
						        </div>
						        <div class="item">
						            <a href="#">
				            			<!--PC端-->
				            			<img class="img-responsive center-block hidden-xs" src="http://oms8e6h6f.bkt.clouddn.com/home_e/png/pcbanner_e_1704.png"/>
				            		</a>
						        </div>
						        <div class="item">
						            <a href="#">
					            		<!--PC端-->
					            		<img class="img-responsive center-block hidden-xs" src="http://oms8e6h6f.bkt.clouddn.com/home_e/png/pcbanner_e_1705.png"/>
				            		</a>
						        </div>
						    </div>
						    <!-- 轮播（Carousel）导航 -->
						    <a class="carousel-control left" href="#myCarousel" 
						        data-slide="prev"><!--&lsaquo;-->
						    </a>
						    <a class="carousel-control right" href="#myCarousel" 
						        data-slide="next"><!--&rsaquo;-->
						    </a>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!--banner轮播图结束-->
		
		<!--热门话题开始-->
		<section class="hot_topic hidden-xs">
			<div class="container">
				<div class="row">
					<div class="col-sm-7"></div>
					<div class="col-sm-5 hot_topic_5">
						<h3>Hot Topic</h3>
						<ul>
							<li>
								<a href="<?php echo U('Index/project_details',array('tid'=>1,''));?>">
									<h4>Selected Projects</h4>
									<img class="img-responsive" src="http://oms8e6h6f.bkt.clouddn.com/home_e/png/arrows_right.png"/>
								</a>
							</li>
							<li>
								<a href="<?php echo U('Home/Index/countries_page',array('cid'=>1,''));?>">
									<h4>Selected Countries</h4>
									<img class="img-responsive" src="http://oms8e6h6f.bkt.clouddn.com/home_e/png/arrows_right.png"/>
								</a>
							</li>
							<li>
								<a href="<?php echo U('Index/project_selection');?>">
									<h4>Project Selection</h4>
									<img class="img-responsive" src="http://oms8e6h6f.bkt.clouddn.com/home_e/png/arrows_right.png"/>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--热门话题结束-->
		
		<!--热门文章开始-->
		<section class="h_essay">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 h_essay_concent">
						<!--<h4 class="m_title_t visible-xs">移民资讯</h4>-->
						<img class="img-responsive center-block hidden-xs" src="http://oms8e6h6f.bkt.clouddn.com/col_message/png/message_pcimg01.png"/>
						<img class="img-responsive center-block visible-xs" src="http://oms8e6h6f.bkt.clouddn.com/col_message/png/message_pcimg01.png"/>
						<!--<h5 class="m_title_b hidden-xs">移民资讯</h5>-->
						<a href="<?php echo U('Home/Index/countries_page',array('cid'=>1,''));?>">
							<h3 class="headline">AUSTRALIA</h3>
						</a>
						<h4 class="t_description">
							Australia is a highly developed capitalist country, the capital of Canberra.
							As the southern hemisphere’s most economically developed countries and the world’s twelfth big economic body、the world’s fourth largest exporter of agricultural products, 
							it is also a variety of mineral exports in the world, which is called “sitting on a tub of countries”.
						</h4>
						<!--<a href="#">
							<h5 class="more">阅读更多 ></h5>
						</a>-->
					</div>
					<div class="col-sm-4 side">
						<h3 class="side_title">MOST CONCERN</h3>
						<ul>
							<?php if(is_array($hot)): $i = 0; $__LIST__ = $hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>
								<a href="<?php echo U('Index/project_details',array('tid'=>$v['tid'],''));?>">
									<!--<img class="img-responsive" src="images/flower.png"/>-->
									<h4>
										<?php echo ($v["name"]); ?>
									</h4>
								</a>
							</li><?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--热门文章结束-->
		
		<!--热门国家开始-->
		<section class="hot_state">
			<div class="container">
				<div class="row">
					<h3 class="text-center hot_state_bt">HOT COUNTRIES</h3>
					<img class="img-responsive center-block downward" src="http://oms8e6h6f.bkt.clouddn.com/home//png/v.png"/>
				</div>
				<div class="row nation_row">
					<div class="col-sm-3 nation_li">
						<a href="<?php echo U('Home/Index/countries_page',array('cid'=>1,''));?>">
							<img class="img-responsive center-block country_show img-circle" src="http://oms8e6h6f.bkt.clouddn.com/home/png/state_australian.png"/>
						</a>
						<a href="<?php echo U('Home/Index/countries_page',array('cid'=>1,''));?>">
							<h2 class="country_name text-center">Australia</h2>
						</a>
							<h5 class="text-center country_profile">
								Explore new Australian Secret with us
							</h5>	
					</div>
					<div class="col-sm-3 nation_li">
						<a href="<?php echo U('Home/Index/countries_page',array('cid'=>2,''));?>">
							<img class="img-responsive center-block country_show img-circle" src="http://oms8e6h6f.bkt.clouddn.com/home/png/state_new%20zealand.png"/>
						</a>
						<a href="<?php echo U('Home/Index/countries_page',array('cid'=>2,''));?>">
							<h2 class="country_name text-center">New Zealand</h2>
						</a>
							<h5 class="text-center country_profile">
								Immigrants do not mean emigrate,'The last piece of pure land'in the world
							</h5>	
					</div>
					<div class="col-sm-3 nation_li">
						<a href="<?php echo U('Home/Index/countries_page',array('cid'=>4,''));?>">
							<img class="img-responsive center-block country_show img-circle" src="http://oms8e6h6f.bkt.clouddn.com/home/png/state_canada.png"/>
						</a>
						<a href="<?php echo U('Home/Index/countries_page',array('cid'=>4,''));?>">
							<h2 class="country_name text-center">Canada</h2>
						</a>
							<h5 class="text-center country_profile">
								A worthy unlimited exploration of country
							</h5>	
					</div>
					<div class="col-sm-3 nation_li">
						<a href="<?php echo U('Home/Index/countries_page',array('cid'=>7,''));?>">
							<img class="img-responsive center-block country_show img-circle" src="http://oms8e6h6f.bkt.clouddn.com/home/png/state_spain.png"/>
						</a>
						<a href="<?php echo U('Home/Index/countries_page',array('cid'=>7,''));?>">
							<h2 class="country_name text-center">Spain</h2>
						</a>
							<h5 class="text-center country_profile">
								 One person invest， three generation will get European Union Identity
							</h5>	
					</div>
				</div>
				<!--pc端跳转到甄选项目页-->
				<div class="row hidden-xs">
					<a href="<?php echo U('Index/project_selection');?>" class="text-center">
						<h4 class="more_state">MORE ></h4>
					</a>					
				</div>
				<!--移动端跳转到更多国家-->
				<div class="row visible-xs">
					<a href="<?php echo U('Index/more_project');?>" class="text-center">
						<h4 class="more_state">MORE ></h4>
					</a>					
				</div>
			</div>
		</section>
		<!--热门国家结束-->
				
		<!--热门项目开始-->
		<section class="popular_project">
			<div class="container">
				<div class="row item_title">
					<h3 class="text-center popular_project_bt">HOT PROJECTS</h3>
					<img class="img-responsive center-block downward" src="http://oms8e6h6f.bkt.clouddn.com/home//png/v.png"/>
				</div>
				<div class="row show_items">
					<div class="col-sm-4 item_sm_4">
						<a href="<?php echo U('Home/Index/project_details',array('tid'=>12));?>">
							<img class="img-responsive center-block" src="http://oms8e6h6f.bkt.clouddn.com/home/png/project_zelanian.png"/>
							<h2 class="text-center">
								New Zealand Investor 2 Resident Visa
							</h2>
						</a>
					</div>
					<div class="col-sm-4 item_sm_4">
						<a href="<?php echo U('Home/Index/project_details',array('tid'=>9));?>">
							<img class="img-responsive center-block" src="http://oms8e6h6f.bkt.clouddn.com/home/png/project_australia_188A.png"/>
							<h2 class="text-center">
								Australia Business Innovation and Investment-Subclass 188A
							</h2>
						</a>
					</div>
					<div class="col-sm-4 item_sm_4">
						<a href="<?php echo U('Home/Index/project_details',array('tid'=>10));?>">
							<img class="img-responsive center-block" src="http://oms8e6h6f.bkt.clouddn.com/home/png/project_australia_132.png"/>
							<h2 class="text-center">
								Australia Business Talent Visa-Subclass 132
							</h2>
						</a>
					</div>
				</div>
				<div class="row show_items hidden-xs">
					<div class="col-sm-4 item_sm_4">
						<a href="<?php echo U('Home/Index/project_details',array('tid'=>27));?>">
							<img class="img-responsive center-block" src="http://oms8e6h6f.bkt.clouddn.com/home/png/project_spain.png"/>
							<h2 class="text-center">
								Spain Investment Immigrant
							</h2>
						</a>
					</div>
					<div class="col-sm-4 item_sm_4">
						<a href="<?php echo U('Home/Index/project_details',array('tid'=>31));?>">
							<img class="img-responsive center-block" src="http://oms8e6h6f.bkt.clouddn.com/home/png/project_malta.png"/>
							<h2 class="text-center">
							    Malta State Debt Immigration Program
							</h2>
						</a>
					</div>
					<div class="col-sm-4 item_sm_4">
						<a href="<?php echo U('Home/Index/project_details',array('tid'=>60));?>">
							<img class="img-responsive center-block" src="http://oms8e6h6f.bkt.clouddn.com/home/png/project_canada.png"/>
							<h2 class="text-center">
								Canada Manitoba Provincial Nominee Program for Business 
							</h2>
						</a>
					</div>
				</div>
				<!--pc端跳转到甄选项目页-->
				<div class="row hidden-xs">
					<a href="<?php echo U('Index/project_selection');?>" class="text-center">
						<h4 class="more_project">MORE  ></h4>
					</a>					
				</div>
				<!--移动端跳转到更多国家页-->
				<div class="row visible-xs">
					<a href="<?php echo U('Index/more_project');?>" class="text-center">
						<h4 class="more_project">MORE  ></h4>
					</a>					
				</div>
			</div>
		</section>
		<!--热门项目结束-->
		
		 <script type="text/javascript">
//  轮播图
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,  //三个小点切换
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        autoplay : 3000,
				speed:300,
//				effect : 'fade',
        loop : true //循环
    });
    //  pc轮播图
    $('#myCarousel').carousel({
				interval: 5000
			})
    $('#myCarousel_client').carousel({
				interval: 5000
			})
    </script>

<!--底部信息开始-->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <img class="img-responsive flogo" src="http://oms8e6h6f.bkt.clouddn.com/home_e/png/f_logo_e.png"/>
          </div>
          <div class="col-sm-6 contact_info">
            <h5>
              Address: 2.36 Wisma Cosway, 88 Jalan Raja Chulan,50200 Kuala Lumpur
            </h5>
            <h5>Telephone: +60123062336</h5>
            <h5>email: enquiry@hyimmi.com</h5>
          </div>
          <div class="col-sm-3 hidden-xs">
            <div class="qr_code_img">
              <img class="img-responsive qr_code" src="http://oms8e6h6f.bkt.clouddn.com/home_e/png/qr_code.png"/>
            </div>
            <div class="qr_code_attention">
              <h5 class="text-center official_wechat">
                Hyimmi Official Wechat
              </h5>
            </div>
          </div>
        </div>
      </div>
  </footer>
    <!--底部信息结束-->
		
		<!--侧边信息导航开始-->
		<section class="side_consult side_consult_e hidden-xs">
			<ul>
					<li>
						<a href="javascript:void(0)" class="text-center">Give you a call</a>
						<div class="side_lists">
							<input class="helper_input" type="text" placeholder="Phone" name="" id="side_telInput" value="" />
							<span id="side_callBtn">Confirm</span>
							<div class="rightArrow"></div>
						</div>
					</li>
					<li>
						<a href="#" class="text-center" id="btn_top">Top</a>
					</li>
			</ul>
		</section>	
		<!--侧边信息导航结束-->
		
		<!--版权所有开始-->
		<section class="all_copyright hidden-xs">
			<h5 class="text-center">copyright －shenzhen hyimmi investment consulting Ltd</h5>
		</section>
		<!--版权所有结束-->
		
		
    <!--引入bootstrap-->
    
    <script src="/Public/home/js/public.js" type="text/javascript" charset="utf-8"></script>

</body>
  
</html>