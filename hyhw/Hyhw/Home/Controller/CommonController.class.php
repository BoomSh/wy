<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {

	public function __construct(){
        parent::__construct();


        /**获取国家信息**/
        $countries = M('country_typelist')->where("pid=0 and cid<>3")->limit(17)->select();

        /**获取热门项目信息**/
        $hot = M('country_project_content')->where("is_hot=1")->select();
       //p_r($hot);die();
        $this->assign('countries',$countries);
        $this->assign('hot',$hot);
        
        
    }
}