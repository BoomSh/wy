<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5shiv.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/Public/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/Public/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/Public/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/Public/admin/static/h-ui.admin/css/style.css" />
<link rel="stylesheet" type="text/css" href="/Public/admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>资讯列表</title>
</head>
<body>
<form method="get" action="/index.php/Admin/Project/project_list" id="form2">
	<input type="hidden" id="txtKeywords" name="txtKeywords" value="<?php echo ($_REQUEST['txtKeywords']); ?>" />
	<input type="hidden" id="ddlCategoryId" name="ddlCategoryId" value="<?php echo ($_REQUEST['ddlCategoryId']); ?>" />
	<input type="hidden" id="startt" name="startt" value="<?php echo ($_REQUEST['startt']); ?>" />
	<input type="hidden" id="deadlinet" name="deadlinet" value="<?php echo ($_REQUEST['deadlinet']); ?>" />
	<input type="hidden" id="txtPageNum" name="txtPageNum" value="<?php echo ($pagenum); ?>" />
	<input type="hidden" id="p" name="p" value="" />
</form>
<form method="post" id="form1" action="/index.php/Admin/Project/project_del">
	<input type="hidden" value="" id="type" name="type"></input>
	<input type="hidden" value="" id="ids" name="ids"></input>
	

<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 资讯管理 <span class="c-gray en">&gt;</span> 资讯列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>


<input type="hidden" value="<?php echo ($result); ?>"  id="msg"></input>
<div class="page-container">
	<div class="text-c">
		<button onclick="removeIframe()" class="btn btn-primary radius">关闭选项卡</button>
	 <span class="select-box inline">
		<select name="" class="select">
			<option value="0">全部分类</option>
			<option value="1">分类一</option>
			<option value="2">分类二</option>
		</select>
		</span> 日期范围：
		<input type="text" onfocus="WdatePicker({ maxDate:'#F{$dp.$D(\'logmax\')||\'%y-%M-%d\'}' })" id="logmin" class="input-text Wdate" style="width:120px;">
		-
		<input type="text" onfocus="WdatePicker({ minDate:'#F{$dp.$D(\'logmin\')}',maxDate:'%y-%M-%d' })" id="logmax" class="input-text Wdate" style="width:120px;">
		<input type="text" name="" id="" placeholder=" 资讯名称" style="width:250px" class="input-text">
		<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜资讯</button>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:__doPostBack(2);"  class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius" data-title="添加资讯" data-href="article-add.html"  href="<?php echo U('Project/project_add');?>"><i class="Hui-iconfont">&#xe600;</i> 添加资讯</a></span> <span class="r">共有数据：<strong>54</strong> 条</span> </div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort">
			<thead>
				<tr class="text-c">
					<th width="25"><input type="checkbox" name="" value=""></th>
					<th width="80">ID</th>
					<th>项目名称</th>
					<th width="80">国家</th>
					<th width="80">项目类别</th>
					<th width="120">投资金额</th>
					<th width="75">办理周期</th>
					<th width="60">摘要图片</th>
					<th width="60">详情图片</th>
					<th width="120">操作</th>
				</tr>
			</thead>
			<tbody>
			   <?php if(is_array($info)): $k = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><tr class="text-c">
					<td><input type="checkbox" id="chkId_<?php echo ($k); ?>"  name="chkId[<?php echo ($k); ?>]"><input type="hidden" name="hidId[<?php echo ($k); ?>]" id="hidId_<?php echo ($k); ?>" value="<?php echo ($v["id"]); ?>"></input></td>
					<td><?php echo ($v["id"]); ?></td>
					<td class="text-l"><?php echo ($v["title"]); ?></td>
					<td><?php echo (country($v["country_id"])); ?></td>
					<td><?php echo (projectCategory($v["category_id"])); ?></td>
					<td><?php echo ($v["investment"]); ?></td>
					<td><?php echo ($v["period"]); ?></td>
					<td><img style="height: 60px" class="img_style" src="<?php echo ($v["img_url"]); ?>"></td>
					<td><img style="height: 60px" class="img_style" src="<?php echo ($v["detail_url"]); ?>"></td>
					<!-- <td class="td-status"><span class="label label-success radius">已发布</span></td> -->
					<td class="f-14 td-manage"><!-- <a style="text-decoration:none" onClick="article_stop(this,'10001')" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a> --> <a style="text-decoration:none" class="ml-5"  href="<?php echo U('Project/project_edit',array('id'=>$v['id']));?>" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5"  href="javascript:__doPostBack(1,<?php echo ($v["id"]); ?>);" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>	
			</tbody>
		</table>
	</div>
	</form>
	<div class="pagelist">
  <div class="l-btns">
    <span>显示</span><input id="txtPageNum" name="txtPageNum" type="text" value="<?php echo ($pagenum); ?>" onblur="javascript:__doPostBack(&#39;textPageNum&#39;,&#39;&#39;);" class="pagenum"  /><span>条/页</span>
  </div> 
  <div id="PageContent" class="default"><?php echo ($page); ?></div>
</div>

</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Public/admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Public/admin/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/Public/admin/static/h-ui.admin/js/H-ui.admin.js"></script>
<!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/Public/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<!-- <script type="text/javascript" src="/Public/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> --> 
<script type="text/javascript" src="/Public/admin/lib/laypage/1.2/laypage.js"></script>
<script>
	$("#PageContent a").click(function(){
		var pathstr = $(this).attr("href");
		var patharr =pathstr.split("/"); 
		var pagestr = patharr[patharr.length-1];
		var parr = pagestr.split(".");
		var clickpage = parr[0];
		
		$("#form2 #p").attr("value",clickpage);
		$("#form2").submit();
		return false;
	});
</script>
<script type="text/javascript">
//操作提示
$(document).ready(function(){
	var $msg = $('#msg').val();
	if($msg!=""){
		layer.alert($msg, {
        icon: 1,
        skin: 'layer-ext-moon' //该皮肤由layer.seaning.com友情扩展。关于皮肤的扩展规则，去这里查阅
       })
     $('#msg').val("");
	}
})
/*$('.table-sort').dataTable({
	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
	"bStateSave": true,//状态保存
	"aoColumnDefs": [
	  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
	  {"orderable":false,"aTargets":[0,8]}// 不参与排序的列
	]
});*/
//删除
function __doPostBack(type,id="",pid=""){
	layer.confirm('确认要删除么？', {
           btn: ['确认','取消'] //按钮
			}, function(){
			  $('#type').val(type);
			    //单个删除
				if(1==type){
			       $('#ids').val(id);
			       
			       $('#form1').submit();
				}
				else{
					if($(".text-c input:checked").size()<1){
						layer.msg('请选择要删除的项目');
					}
					else{
                        $('#form1').submit();
					}
					
				}
			}, function(){
			  
			});
    
}




</script> 
</body>
</html>