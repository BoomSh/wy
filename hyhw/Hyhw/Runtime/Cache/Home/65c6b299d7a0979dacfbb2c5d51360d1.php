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
   <link rel="stylesheet" type="text/css" href="/Public/home/css/countries_page_e.css"/>
<script src="/Public/home/js/countries_page.js" type="text/javascript" charset="utf-8"></script>	
	<!--专栏列表开始-->
	<section class="project_brief">
		<div class="container">
			<div class="row small_navigation hidden-xs">
				<div class="col-sm-12">
					<h5>current location:</h5>
					<a href="<?php echo U('Index/index');?>"><h5>Home Page ></h5></a>
					<h5>Immigrant Country ></h5>
					<h5 class="present"><?php echo ($country["typename"]); ?></h5></a>
				</div>
			</div>
			
			<!--项目介绍开始-->
			<div class="row project_introduction">
				<div class="col-sm-9 project_btitle">
					<div class="row brief_bt">
						<div class="col-sm-12">
							<h3><?php echo ($country["typename"]); ?></h3>
						</div>
					</div>
					<!--板块-->
					<div class="row project_text">
							<div class="col-sm-12 project_text_body">
								<h4 class="project_text_title">superiority</h4>
							</div>

							<div class="col-sm-2 project_text_passage hidden-xs">
								<img class="img-responsive" src="<?php echo ($country["pic_ad"]); ?>"/>
							</div>
							<div class="col-sm-10 project_text_passage">
								<?php echo ($country["description"]); ?>
							</div>
									
							
					</div>
					
					<!--移民项目开始-->
					<div class="row project_text">
							<div class="col-sm-12 project_text_body project_guide">
								<h4 class="project_text_title">Immigration program</h4>
							</div>
							<div class="col-sm-12 immigrant_tag">
								<ul>
									<?php if($project_1 != null): ?><li >Investment immigration</li><?php endif; ?>
									<?php if($project_2 != null): ?><li>Skilled migration</li><?php endif; ?>
									<?php if($project_3 != null): ?><li>Entrepreneurial migration</li><?php endif; ?>
								</ul>
							</div>
							<?php if($project_1 != null): ?><div class="row immigrant_content investment_immigrant" >
								<!--第一个项目开始-->
								<?php if(is_array($project_1)): $i = 0; $__LIST__ = $project_1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$project_tz): $mod = ($i % 2 );++$i;?><div class="row immigrant_content_lists">
									<div class="col-sm-12 immigrant_content_lists_title">
										<h4><a href="<?php echo U('Index/project_details',array('tid'=>$project_tz['tid'],''));?>"><img class="img-responsive center-block" src="/Public/home/images_e/triangle.png"/><?php echo ($project_tz["name"]); ?></a></h4>
										</h4>
									</div>
									<div class="col-sm-4 content_tag_img">
										<img class="img-responsive center-block" src="<?php echo ($project_tz["ba_pic"]); ?>"/>
									</div>
									<div class="col-sm-8 content_tag_essay content_tag_intro">
										<ul>
											<li>
												<div class="row">
													<div class="col-sm-4">
														<h5 class="text-left">
															Investment amount:
														</h5>
													</div>
													<div class="col-sm-8">
														<h5 class="text-left">
															<?php echo ($project_tz["money"]); ?>
														</h5>
													</div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4">
														<h5 class="text-left">
															Procedure complexity:
														</h5>
													</div>
													<div class="col-sm-8">
														<h5 class="text-left">
															<?php echo ($project_tz["complex"]); ?>
														</h5>
													</div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4">
														<h5 class="text-left">
															Residence requirement:
														</h5>
													</div>
													<div class="col-sm-8">
														<h5 class="text-left">
															<?php echo ($project_tz["live"]); ?>
														</h5>
													</div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4">
														<h5 class="text-left">
															Management cycle:
														</h5>
													</div>
													<div class="col-sm-8">
														<h5 class="text-left"><?php echo ($project_tz["cycle"]); ?>
														</h5>
													</div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4">
														<h5 class="text-left">
															Visa type:
														</h5>
													</div>
													<div class="col-sm-8">
														<h5 class="text-left"><?php echo ($project_tz["visa_type"]); ?></h5>
													</div>
												</div>
											</li>
											<li>
												<div class="row row_btn">										
													<a href="<?php echo U('Index/project_details',array('tid'=>$project_tz['tid'],''));?>"><h5 class="details_btn">details</h5></a>
													<!--<h5 class="order_btn">咨询</h5>-->
												</div>
											</li>
										</ul>
									</div>
								</div>
								<!--第一个项目结束--><?php endforeach; endif; else: echo "" ;endif; ?>
								
								<div class="row more_down_up more_down_up_investment_immigrant">
									<div class="col-sm-12">
										<img class="img-responsive center-block more_down_investment_immigrant" src="/Public/home/images_e/more_down.png"/>
										<img class="img-responsive center-block more_up_investment_immigrant" src="/Public/home/images_e/more_up.png"/>
									</div>
								</div>
							</div><?php endif; ?>
                            <?php if($project_2 != null): ?><div class="row immigrant_content skilled_migration" >
							 <?php if(is_array($project_2)): $i = 0; $__LIST__ = $project_2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$project_js): $mod = ($i % 2 );++$i;?><!--第一个项目开始-->
								<div class="row immigrant_content_lists">
									<div class="col-sm-12 immigrant_content_lists_title">
										<h4><a href="<?php echo U('Index/project_details',array('tid'=>$project_js['tid'],''));?>"><img class="img-responsive center-block" src="/Public/home/images_e/triangle.png"/><?php echo ($project_js["name"]); ?></a></h4>
									</div>
									<div class="col-sm-4 content_tag_img">
										<img class="img-responsive center-block" src="<?php echo ($project_js["ba_pic"]); ?>"/>
									</div>
									<div class="col-sm-8 content_tag_essay content_tag_intro">
										<ul>
											<li>
												<div class="row">
													<div class="col-sm-4">
														<h5 class="text-left">English requirements:</h5>
													</div>
													<div class="col-sm-8">
														<h5 class="text-left"><?php echo ($project_js["english"]); ?></h5>
													</div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4">
														<h5 class="text-left">residence requirements:</h5>
													</div>
													<div class="col-sm-8">
														<h5 class="text-left"><?php echo ($project_js["live"]); ?></h5>
													</div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4">
														<h5 class="text-left"> Processing Time:</h5>
													</div>
													<div class="col-sm-8">
														<h5 class="text-left"><?php echo ($project_js["cycle"]); ?></h5>
													</div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4">
														<h5 class="text-left">working experience:</h5>
													</div>
													<div class="col-sm-8">
														<h5 class="text-left"><?php echo ($project_js["work"]); ?></h5>
													</div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4">
														<h5 class="text-left">Visa Type:</h5>
													</div>
													<div class="col-sm-8">
														<h5 class="text-left"><?php echo ($project_js["visa_type"]); ?></h5>
													</div>
												</div>
											</li>
											<li>
												<div class="row row_btn">										
													<a href="<?php echo U('Index/project_details',array('tid'=>$project_js['tid'],''));?>"><h5 class="details_btn">details</h5></a>
													<!--<h5 class="order_btn">咨询</h5>-->
												</div>
											</li>
										</ul>
									</div>
								</div>
								<!--第一个项目结束--><?php endforeach; endif; else: echo "" ;endif; ?>
								<div class="row more_down_up more_down_up_skilled_migration">
									<div class="col-sm-12">
										<img class="img-responsive center-block more_down_skilled_migration" src="/Public/home/images_e/more_down.png"/>
										<img class="img-responsive center-block more_up_skilled_migration" src="/Public/home/images_e/more_up.png"/>
									</div>
								</div>
							</div><?php endif; ?>
							  <?php if($project_3 != null): ?><div class="row immigrant_content entrepreneurship_immigrant">
								<!--第一个项目开始-->
                                                                <?php if(is_array($project_3)): foreach($project_3 as $key=>$project_cy): ?><div class="row immigrant_content_lists">
									<div class="col-sm-12 immigrant_content_lists_title">
										<h4><a href="<?php echo U('Home/Index/project_details',array('tid'=>$project_cy['tid'],''));?>"><img class="img-responsive center-block" src="/Public/home/images_e/triangle.png"/><?php echo ($project_cy["name"]); ?></a></h4>
									</div>
									<div class="col-sm-4 content_tag_img">
										<img class="img-responsive center-block" src="<?php echo ($project_cy["ba_pic"]); ?>"/>
									</div>
									<div class="col-sm-8 content_tag_essay content_tag_intro">
										<ul>
											<li>
												<div class="row">
													<div class="col-sm-4">
														<h5 class="text-left">Investment Amount:</h5>
													</div>
													<div class="col-sm-8">
														<h5 class="text-left"><?php echo ($project_cy["money"]); ?></h5>
													</div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4">
														<h5 class="text-left">Language requirements:</h5>
													</div>
													<div class="col-sm-8">
														<h5 class="text-left"><?php echo ($project_cy["english"]); ?></h5>
													</div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4">
														<h5 class="text-left">Processing Time:</h5>
													</div>
													<div class="col-sm-8">
														<h5 class="text-left"><?php echo ($project_cy["cycle"]); ?></h5>
													</div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4">
														<h5 class="text-left">Business Plan:</h5>
													</div>
													<div class="col-sm-8">
														<h5 class="text-left"><?php echo ($project_cy["plan"]); ?></h5>
													</div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4">
														<h5 class="text-left">Business Environment:</h5>
													</div>
													<div class="col-sm-8">
														<h5 class="text-left"><?php echo ($project_cy["environment"]); ?></h5>
													</div>
												</div>
											</li>
											<li>
												<div class="row row_btn">										
													<a href="<?php echo U('Index/project_details',array('tid'=>$project_cy['tid'],''));?>"><h5 class="details_btn">details</h5></a>
													<!--<h5 class="order_btn">咨询</h5>-->
												</div>
											</li>
										</ul>
									</div>
								</div><?php endforeach; endif; ?>
								<!--第一个项目结束-->
								
								<div class="row more_down_up more_down_up_entrepreneurship_immigrant">
									<div class="col-sm-12">
										<img class="img-responsive center-block more_down_entrepreneurship_immigrant" src="/Public/images/more_down.png"/>
										<img class="img-responsive center-block more_up_entrepreneurship_immigrant" src="/Public/images/more_up.png"/>
									</div>
								</div>
							</div><?php endif; ?>						
					</div>
					<!--移民项目结束-->
					
					<!--移民指南开始-->
					<div class="row project_text">
							<div class="col-sm-12 project_text_body project_guide">
								<h4 class="project_text_title">Immigration Guide</h4>
							</div>
							<div class="col-sm-12 guide_tag">
								<ul>
									<li class="active">material benefits</li>
									<li>education</li>
									<li>tour</li>
									<li>medical treatment</li>
								</ul>
							</div>
							<?php if(is_array($country_info)): $k = 0; $__LIST__ = $country_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$country_guide): $mod = ($k % 2 );++$k;?><div class="row content" <?php if($k == 1): ?>style="display: block;"<?php endif; ?>>
								<div class="col-sm-3 content_tag_img">
									<img class="img-responsive center-block" src="<?php echo ($country_guide["pic"]); ?>"/>
								</div>
								<div class="col-sm-9 content_tag_essay">
									<?php echo ($country_guide["intro"]); ?>
								</div>
							</div><?php endforeach; endif; else: echo "" ;endif; ?>
							
							
					</div>
					<!--移民指南结束-->	
				</div>
				<div class="col-sm-3 successful_case hidden-xs">		
					<h4>Hot Item</h4>
					<div class="project_side">
						<img class="img-responsive center-block" src="http://oms8e6h6f.bkt.clouddn.com/col_case/png/case_img01.jpg"/>
						<ul>
						  <?php if(is_array($hot)): $i = 0; $__LIST__ = $hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>
								<a href="<?php echo U('Index/project_details',array('tid'=>$v['tid'],''));?>">
									<!--<img class="img-responsive" src="images/flower.png"/>-->
									<h5>
										<?php echo ($v["name"]); ?>
									</h5>
								</a>
							</li><?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
						<a href="<?php echo U('Index/project_selection');?>" class="case_more"><h6>more ></h6></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--专栏列表结束-->
	

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