<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="stylesheet" type="text/css" href="/Public/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/Public/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/Public/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/Public/admin/static/h-ui.admin/css/style.css" />
<title>新增图片</title>
<link href="/Public/admin/lib/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="/Public/admin/css/style.css">
<style type="text/css">
	.tag_add_left{color: #666666;float: left;text-align: right;padding-right:25px; }
	.tag_add_right{float: left;}
	.tag_add_right ul.tag_add_tag li{float: left;width: 200px;text-align: center;}
	.tag_add_content{width: 100%;float: left;padding-bottom:20px; }
	/*.tag_add_content{display: none;}
	.tag_add_content:nth-of-type(1){display: block;}*/
	.tag_add_tag_active{background: #0092ff;color:#ffffff;}
</style>

</head>
<body>
<div class="page-container">
	<form class="form form-horizontal" id="form-article-add" action="<?php echo U('Project/project_edit');?>" method="post">
	     <input type="hidden" value="<?php echo ($info[0]['id']); ?>" name="id"></input>
		<div class="tag_add">
			<div class="tag_add_left col-xs-4 col-sm-2 ">类别：</div>
			<div class="tag_add_right col-xs-8 col-sm-9">
				<ul class="tag_add_tag">
				  <?php if(is_array($category)): $k = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><li > <?php echo ($v["title"]); ?> <input type="hidden" value="<?php echo ($v["id"]); ?>" id="category_<?php echo ($k); ?>"></input></li><?php endforeach; endif; else: echo "" ;endif; ?>	
				</ul>
				<input type="hidden" value="<?php echo ($info[0]['category_id']); ?>" id="category_id" name="category_id"></input>
			</div>
			<div class="tag_add_content">
			   <div class="row cl">
			      <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>投资金额：</label>
			         <div class="formControls col-xs-8 col-sm-9">
			  	         <input type="text" class="input-text" value="<?php echo ($info[0]['investment']); ?>" placeholder="" id="" name="investment1">
			         </div>
		        </div>
		        <div class="row cl">
			      <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>手续复杂度：</label>
			         <div class="formControls col-xs-8 col-sm-9">
			  	         <input type="text" class="input-text" value="<?php echo ($info[0]['complex']); ?>" placeholder="" id="" name="complex1">
			         </div>
		        </div>
		        <div class="row cl">
			      <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>居住要求：</label>
			         <div class="formControls col-xs-8 col-sm-9">
			  	         <input type="text" class="input-text" value="<?php echo ($info[0]['dwell']); ?>" placeholder="" id="" name="dwell1">
			         </div>
		        </div>
		         <div class="row cl">
			      <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>签证类型：</label>
			         <div class="formControls col-xs-8 col-sm-9">
			  	         <input type="text" class="input-text" value="<?php echo ($info[0]['visa']); ?>" placeholder="" id="" name="visa1">
			         </div>
		        </div>
		    </div>
				<div class="tag_add_content">
					<div class="row cl">
			      <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>外语要求：</label>
			         <div class="formControls col-xs-8 col-sm-9">
			  	         <input type="text" class="input-text" value="<?php echo ($info[0]['language']); ?>" placeholder="" id="" name="language2">
			         </div>
		        </div>
		        <div class="row cl">
			      <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>居住要求：</label>
			         <div class="formControls col-xs-8 col-sm-9">
			  	         <input type="text" class="input-text" value="<?php echo ($info[0]['dwell']); ?>" placeholder="" id="" name="dwell2">
			         </div>
		        </div>
		        <div class="row cl">
			      <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>工作年限：</label>
			         <div class="formControls col-xs-8 col-sm-9">
			  	         <input type="text" class="input-text" value="<?php echo ($info[0]['work_long']); ?>" placeholder="" id="" name="work_long2">
			         </div>
		        </div>
		         <div class="row cl">
			      <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>签证类型：</label>
			         <div class="formControls col-xs-8 col-sm-9">
			  	         <input type="text" class="input-text" value="<?php echo ($info[0]['visa']); ?>" placeholder="" id="" name="visa2">
			         </div>
		        </div>
				</div>
				<div class="tag_add_content">
					<div class="row cl">
			      <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>投资金额：</label>
			         <div class="formControls col-xs-8 col-sm-9">
			  	         <input type="text" class="input-text" value="<?php echo ($info[0]['investment']); ?>" placeholder="" id="" name="investment3">
			         </div>
		        </div>
		        <div class="row cl">
			      <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>语言要求：</label>
			         <div class="formControls col-xs-8 col-sm-9">
			  	         <input type="text" class="input-text" value="<?php echo ($info[0]['language']); ?>" placeholder="" id="" name="language3">
			         </div>
		        </div>
		        <div class="row cl">
			      <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>商业计划：</label>
			         <div class="formControls col-xs-8 col-sm-9">
			  	         <input type="text" class="input-text" value="<?php echo ($info[0]['business_plan']); ?>" placeholder="" id="" name="business_plan3">
			         </div>
		        </div>
		         <div class="row cl">
			      <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>创业环境：</label>
			         <div class="formControls col-xs-8 col-sm-9">
			  	         <input type="text" class="input-text" value="<?php echo ($info[0]['entre_envir']); ?>" placeholder="" id="" name="entre_envir3">
			         </div>
		        </div>
				</div>
		</div>

   





		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>项目名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($info[0]['title']); ?>" placeholder="" id="" name="title">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>国家：</label>
			<div class="formControls col-xs-8 col-sm-9">

				<span class="select-box">
				<select name="country_id" class="select">
				   <?php if(is_array($country)): $i = 0; $__LIST__ = $country;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option <?php if($v["id"] == $info[0]['country_id']): ?>selected="selected"<?php endif; ?> value="<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>	
				</select>
				</span>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">转永居条件：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($info[0]['perpetual_condition']); ?>" placeholder="" id="" name="perpetual_condition">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">办理周期：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($info[0]['period']); ?>" placeholder="" id="" name="period">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">SEO关键词：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($info[0]['seo_keyword']); ?>" placeholder="" id="" name="seo_keyword">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">SEO标题：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($info[0]['seo_title']); ?>" placeholder="" id="" name="seo_title">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">SEO描述：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($info[0]['seo_content']); ?>" placeholder="" id="" name="seo_content">
			</div>
		</div>
		
		<div class="row cl">
		    <dl id="div_albums_container" style="margin-bottom: ">
			    <dt class="col-xs-4 col-sm-2" style="text-align: right">摘要图片：</dt>
			    <dd class="col-xs-8 col-sm-9">
			     <input name="img_url" id="img_url" value="<?php echo ($info[0]['img_url']); ?>" class="input normal upload-path" type="text" style="width: 500px;height: 30px;border: solid 1px #ddd;">
			      <div class="upload-box upload-img"></div>
			      <input name="hidFocusPhoto" type="hidden" id="hidFocusPhoto" class="focus-photo" />
			      <div class="photo-list">
			        <ul>
			          
			        </ul>
			      </div>
			    </dd>
			  </dl>
		</div>
		<div class="row cl">
		    <dl id="div_albums_container" style="margin-bottom: ">
			    <dt class="col-xs-4 col-sm-2" style="text-align: right">详情图片：</dt>
			    <dd class="col-xs-8 col-sm-9">
			     <input name="detail_url" id="detail_url" value="<?php echo ($info[0]['detail_url']); ?>" class="input normal upload-path" type="text" style="width: 500px;height: 30px;border: solid 1px #ddd;">
			      <div class="upload-box upload-img"></div>
			      <input name="hidFocusPhoto" type="hidden" id="hidFocusPhoto" class="focus-photo" />
			      <div class="photo-list">
			        <ul>
			          
			        </ul>
			      </div>
			    </dd>
			  </dl>
		</div>
	
			     <div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">项目优势：</label>
			<div class="formControls col-xs-8 col-sm-9"> 
				<script id="editor1" type="text/plain" style="width:100%;height:400px;"></script> 
			</div>
			<input name="advantage" value="<?php echo ($info[0]['advantage']); ?>" type="hidden" id="info1">
			<input type="button" value="预览"></input>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">申请条件：</label>
			<div class="formControls col-xs-8 col-sm-9"> 
				<script id="editor2" type="text/plain" style="width:100%;height:400px;"></script> 
			</div>
			<input name="apply_condition" value="<?php echo ($info[0]['apply_condition']); ?>" type="hidden" id="info2">
			<input type="button" value="预览"></input>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">办理流程：</label>
			<div class="formControls col-xs-8 col-sm-9"> 
				<script id="editor3" type="text/plain" style="width:100%;height:400px;"></script> 
			</div>
			<input name="handing_proce" value="<?php echo ($info[0]['handing_proce']); ?>" type="hidden" id="info3">
			<input type="button" value="预览"></input>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">入籍条件：</label>
			<div class="formControls col-xs-8 col-sm-9"> 
				<script id="editor4" type="text/plain" style="width:100%;height:400px;"></script> 
			</div>
			<input name="natur_condition" value="<?php echo ($info[0]['natur_condition']); ?>" type="hidden" id="info4">
			<input type="button" value="预览"></input>
		</div>
		
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				
				<button  class="btn btn-secondary radius" type="button"  onclick="uptext()"><i class="Hui-iconfont">&#xe632;</i> 保存草稿</button>
				<button  class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
			</div>
		</div>
	</form>
</div>






<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Public/admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Public/admin/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/Public/admin/static/h-ui.admin/js/H-ui.admin.js"></script>


<script type="text/javascript" charset="utf-8" src="/Public/admin/js/uploader.js"></script>
<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/Public/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/Public/admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="/Public/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="/Public/admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>

<script type="text/javascript" charset="utf-8" src="/Public/admin/webuploader/webuploader.min.js"></script>
<script type="text/javascript" src="/Public/admin/lib/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" src="/Public/admin/lib/ueditor/1.4.3/ueditor.all.min.js"> </script>
<script type="text/javascript" src="/Public/admin/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>

<script type="text/javascript">
  $(document).ready(function(){

      //初始化上传控件
        $(".upload-img").InitUploader({ filesize: "102400", sendurl: "<?php echo U('UploadQiniu/uploadImg');?>", swf: "/Public/Admin/scripts/webuploader/uploader.swf", filetypes: "gif,jpg,png,bmp,rar,zip,doc,xls,txt,mov" });
        $(".upload-video").InitUploader({ filesize: "102400", sendurl: "<?php echo U('Uploadjson/uploadVideo');?>", swf: "/Public/Admin/scripts/webuploader/uploader.swf", filetypes: "flv,mp3,mp4,avi,mov" });
        $(".upload-album").InitUploader({ btntext: "批量上传", multiple: true, water: true, thumbnail: true, filesize: "0", sendurl: "<?php echo U('UploadJson/uploadImg');?>", swf: "/Public/Admin/scripts/webuploader/uploader.swf" });  })
</script>

<script type="text/javascript">
      $(function(){
        $(".upload-box").children("div:last-child").css({"width":"61px","height":"26px"});
      })
    </script>
    <script type="text/javascript">
      $(function(){
        $(".upload-box").children("div:last-child").css({"width":"61px","height":"26px"});
        var ue1 = UE.getEditor('editor1');
        var ue2 = UE.getEditor('editor2');
        var ue3 = UE.getEditor('editor3');
        var ue4 = UE.getEditor('editor4');
        
       ue1.ready(function() {
		    //设置编辑器的内容
		    ue1.setContent($('#info1').val());
   
        });
        ue2.ready(function() {
		    //设置编辑器的内容
		    ue2.setContent($('#info2').val());
   
        });
        ue3.ready(function() {
		    //设置编辑器的内容
		    ue3.setContent($('#info3').val());
   
        });
        ue4.ready(function() {
		    //设置编辑器的内容
		    ue4.setContent($('#info4').val());
   
        });
        

      })
      function uptext(){
		// if (!UE.getEditor('editor').hasContents()){
		//           alert('请先填写内容!');
		// }else{
			
			$('#info1').val(UE.getEditor('editor1').getContent());//将编辑器内容赋值隐藏域
			$('#info2').val(UE.getEditor('editor2').getContent());//将编辑器内容赋值隐藏域
			$('#info3').val(UE.getEditor('editor3').getContent());//将编辑器内容赋值隐藏域
			$('#info4').val(UE.getEditor('editor4').getContent());//将编辑器内容赋值隐藏域
			
			$('#form-article-add')[0].submit();
			
		//}
	}

    </script>
    <script type="text/javascript">
    $(function(){
    	var  category_id = $('#category_id').val();

    	if(category_id==""){
    		
            $(".tag_add_right ul li").eq(0).addClass("tag_add_tag_active");
    	    $('#category_id').val($(".tag_add_right ul li").eq(0).children('input').val());
    	    $(".tag_add_content").hide();
    	    $(".tag_add_content").eq(0).show();
    	}
    	else{
    		var i = category_id-1;
    		$(".tag_add_right ul li").eq(i).addClass("tag_add_tag_active");
    	    $('#category_id').val($(".tag_add_right ul li").eq(i).children('input').val());
    	    $(".tag_add_content").hide();
    	    $(".tag_add_content").eq(i).show();
    	}
    	
    	
    	$(".tag_add_right ul li").click(function(){
    		var i = $(this).index();
    		$(".tag_add_content").hide().eq(i).show();
    		$(".tag_add_right ul li").removeClass().eq(i).addClass("tag_add_tag_active");
    		//$(".tag_add_right ul li ").children('input').attr('checked',false);
    		$('#category_id').val($(this).children('input').val());
    	})
    })
    </script>
</body>
</html>