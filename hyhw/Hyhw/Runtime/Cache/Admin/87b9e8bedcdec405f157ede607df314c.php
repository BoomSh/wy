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

</head>
<body>
<div class="page-container">
	<form class="form form-horizontal" id="form-article-add" action="<?php echo U('Project/projectCountry_edit');?>" method="post">
	<input type="hidden" value="<?php echo ($info[0]['id']); ?>" name="id"></input>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>国家名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($info[0]['name']); ?>" placeholder="" id="" name="name">
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
			    <dt class="col-xs-4 col-sm-2" style="text-align: right">优势图片：</dt>
			    <dd class="col-xs-8 col-sm-9">
			     <input name="img_url1" id="img_url1" value="<?php echo ($info[0]['advantage_img']); ?>" class="input normal upload-path" type="text" style="width: 500px;height: 30px;border: solid 1px #ddd;">
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
			    <dt class="col-xs-4 col-sm-2" style="text-align: right">福利图片：</dt>
			    <dd class="col-xs-8 col-sm-9">
			     <input name="img_url2" id="img_url2" value="<?php echo ($info[0]['welfare_img']); ?>" class="input normal upload-path" type="text" style="width: 500px;height: 30px;border: solid 1px #ddd;">
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
			    <dt class="col-xs-4 col-sm-2" style="text-align: right">教育图片：</dt>
			    <dd class="col-xs-8 col-sm-9">
			     <input name="img_url3" id="img_url3" value="<?php echo ($info[0]['education_img']); ?>" class="input normal upload-path" type="text" style="width: 500px;height: 30px;border: solid 1px #ddd;">
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
			    <dt class="col-xs-4 col-sm-2" style="text-align: right">旅游图片：</dt>
			    <dd class="col-xs-8 col-sm-9">
			     <input name="img_url4" id="img_url4" value="<?php echo ($info[0]['travel_img']); ?>" class="input normal upload-path" type="text" style="width: 500px;height: 30px;border: solid 1px #ddd;">
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
			    <dt class="col-xs-4 col-sm-2" style="text-align: right">医疗图片：</dt>
			    <dd class="col-xs-8 col-sm-9">
			     <input name="img_url5" id="img_url5" value="<?php echo ($info[0]['medical_img']); ?>" class="input normal upload-path" type="text" style="width: 500px;height: 30px;border: solid 1px #ddd;">
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
			<label class="form-label col-xs-4 col-sm-2">优势内容：</label>
			<div class="formControls col-xs-8 col-sm-9"> 
				<script id="editor1" type="text/plain" style="width:100%;height:400px;"></script> 
			</div>
			<input name="info1" value="<?php echo ($info[0]['advantage']); ?>" type="hidden" id="info1">
			<!-- <input type="button" value="预览"></input> -->
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">福利内容：</label>
			<div class="formControls col-xs-8 col-sm-9"> 
				<script id="editor2" type="text/plain" style="width:100%;height:400px;"></script> 
			</div>
			<input name="info2" value="<?php echo ($info[0]['welfare']); ?>" type="hidden" id="info2">
			<!-- <input type="button" value="预览"></input> -->
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">教育内容：</label>
			<div class="formControls col-xs-8 col-sm-9"> 
				<script id="editor3" type="text/plain" style="width:100%;height:400px;"></script> 
			</div>
			<input name="info3" value="<?php echo ($info[0]['education']); ?>" type="hidden" id="info3">
			<!-- <input type="button" value="预览"></input> -->
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">旅游内容：</label>
			<div class="formControls col-xs-8 col-sm-9"> 
				<script id="editor4" type="text/plain" style="width:100%;height:400px;"></script> 
			</div>
			<input name="info4" value="<?php echo ($info[0]['travel']); ?>" type="hidden" id="info4">
			<!-- <input type="button" value="预览"></input> -->
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">医疗内容：</label>
			<div class="formControls col-xs-8 col-sm-9"> 
				<script id="editor5" type="text/plain" style="width:100%;height:400px;"></script> 
			</div>
			<input name="info5" value="<?php echo ($info[0]['medical']); ?>" type="hidden" id="info5">
			<!-- <input type="button" value="预览"></input> -->
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
        var ue5 = UE.getEditor('editor5');
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
        ue5.ready(function() {
		    //设置编辑器的内容
		    ue5.setContent($('#info5').val());
   
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
			$('#info5').val(UE.getEditor('editor5').getContent());//将编辑器内容赋值隐藏域
            
			$('#form-article-add')[0].submit();
			
		//}
	}

    </script>
</body>
</html>