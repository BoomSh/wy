<?php
namespace Admin\Controller;
use Think\Controller;
/**
*七牛文件上传 
*/
class UploadQiniuController extends Controller
{
	/**
     * 图片上传
     * @return [type] [description]
     */
     public function uploadImg(){
            $setting=C('UPLOAD_SITEIMG_QINIU');
            $Upload = new \Think\Upload($setting);
            $info = $Upload->upload($_FILES);
          
            if($info){
                print_r("{\"status\": 1,\"thumb\":\"".substr($thumb, 1)."\", \"path\": \"".$info['Filedata']['url']."\"}");
            }
            else {// 上传错误提示错误信息
                $msg = $upload->getErrorMsg();
                print_r("{\"error\": 1, \"msg\": \"".$msg."\"}");
            }
     }
     
    
}