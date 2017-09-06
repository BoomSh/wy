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
	<form class="form form-horizontal" id="form-article-add" action="<?php echo U('Advertisement/advertisement_edit');?>" method="post">
	    <input type="hidden" value="<?php echo ($info[0]['id']); ?>" name="id"></input>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>广告标题：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($info[0]['title']); ?>" placeholder="" id="" name="title">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">连接地址：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($info[0]['link_url']); ?>" placeholder="" id="" name="link_url">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>广告位置：</label>
			<div class="formControls col-xs-8 col-sm-9">
				
				<input type="text" class="input-text" value="<?php echo (advPlace($info[0]["place_id"])); ?>" readonly="readonly" id="" name="place_id"></input>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">排序值：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="number" class="input-text" value="<?php echo ($info[0]['sort_id']); ?>"  placeholder="" id="" name="sort_id">
			</div>
		</div>
		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>添加日期：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" value="<?php echo ($info[0]['add_time']); ?>" onfocus="WdatePicker({ dateFmt:'yyyy-MM-dd HH:mm:ss' })"  name="add_time" class="input-text Wdate">
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
			    <dt class="col-xs-4 col-sm-2" style="text-align: right">上传图片</dt>
			    <dd class="col-xs-8 col-sm-9">
			     <input name="img_url" id="img_url" class="input normal upload-path" value="<?php echo ($info[0]['img_url']); ?>" type="text" style="width: 500px;height: 30px;border: solid 1px #ddd;">
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
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				
				<button  class="btn btn-secondary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存草稿</button>
				<button  class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
			</div>
		</div>
	</form>
</div>



<


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
</body>
</html>