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
	<form class="form form-horizontal" id="form-article-add" action="<?php echo U('News/news_add');?>" method="post">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>新闻标题：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="" name="title">
			</div>
		</div>
		

		
		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>新闻类别：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<span class="select-box">
				<select name="category_id" class="select">
				   <?php if(is_array($category)): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>	
				</select>
				</span>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">排序值：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="number" class="input-text" value="0"  placeholder="" id="" name="sort_id">
			</div>
		</div>
		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>添加日期：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" onfocus="WdatePicker({ dateFmt:'yyyy-MM-dd HH:mm:ss' })"  name="add_time" class="input-text Wdate">
			</div>
		</div>
		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>是否热门：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="radio" name="is_hot" id="is_hot_1" value="1"></input>
				<input type="radio" name="is_hot" id="is_hot_2" value="2"></input>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>是否放在首页：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="radio" name="is_index" id="is_index_1" value="1"></input>
				<input type="radio" name="is_index" id="is_index_2" value="2"></input>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">SEO关键词：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="" name="seo_keyword">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">SEO标题：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="" name="seo_title">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">SEO描述：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="" name="seo_content">
			</div>
		</div>
		
		<div class="row cl">
		    <dl id="div_albums_container" style="margin-bottom: ">
			    <dt class="col-xs-4 col-sm-2" style="text-align: right">上传图片</dt>
			    <dd class="col-xs-8 col-sm-9">
			     <input name="img_url" id="img_url" class="input normal upload-path" type="text" style="width: 500px;height: 30px;border: solid 1px #ddd;">
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
			<label class="form-label col-xs-4 col-sm-2">详细内容：</label>
			<div class="formControls col-xs-8 col-sm-9"> 
				<script id="editor" type="text/plain" style="width:100%;height:400px;"></script> 
			</div>
			<input name="info" type="hidden" id="info">
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
        var ue = UE.getEditor('editor');

      })
      function uptext(){
		if (!UE.getEditor('editor').hasContents()){
		          alert('请先填写内容!');
		}else{
			
			$('#info').val(UE.getEditor('editor').getContent());//将编辑器内容赋值隐藏域
            
			$('#form-article-add')[0].submit();
			
		}
	}

    </script>
</body>
</html>