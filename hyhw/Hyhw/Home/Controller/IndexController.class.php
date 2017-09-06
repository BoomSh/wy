<?php
namespace Home\Controller;

class IndexController extends CommonController {

	
    /**
     * wcl
     * 网站首页
     * @return [type] [description]
     */
    public function index(){
        
        $this->display();
    }
    /**
     * wcl
     * 关于我们
     * @return [type] [description]
     */
    public function aboutUs(){

        $this->display();
    }

    /**
     * wcl
     * 国家详情
     * @return [type] [description]
     */
    public function countries_page(){
        
        $cid = I('cid');
        
        /**获取国家信息**/
        $country = M('country_typelist')->where("cid=$cid")->find();
        /**获取国家项目信息**/
        $project_1 = M('country_project_content')->where("p_id=1 AND cid=$cid")->select();
        $project_2 = M('country_project_content')->where("p_id=2 AND cid=$cid")->select();
        $project_3 = M('country_project_content')->where("p_id=3 AND cid=$cid")->select();
        /**获取国家详细信息**/
        $country_info = M('country_info')->where("cid=$cid")->select();
        
        $this->assign('project_1',$project_1);
        $this->assign('project_2',$project_2);
        $this->assign('project_3',$project_3);
        $this->assign('country', $country);
        $this->assign('country_info',$country_info);
      // / p_r($project_2);die();
        $this->display();    
           
        
    }



    /**
     * wcl
     * 项目详情
     * @return [type] [description]
     */
    public function project_details(){
         /**项目编号**/
        $tid = I('tid');
        
       
        
        /**获取项目详细信息**/
        $country_details = M('country_project_content')->where("tid=$tid")->find();

        

        $this->assign('country_details',$country_details);
        
        
        $this->display();     
    }

    /**
     * wcl
     * 项目甄选
     * @return [type] [description]
     */
    public function project_selection(){
       
        /**获取国家信息**/
        $countries = M('country_typelist')->select();
       
        /**获取国家项目信息**/
        $project_1 = M('country_project_content')->where("p_id=1")->select();
        $project_2 = M('country_project_content')->where("p_id=2")->select();
        $project_3 = M('country_project_content')->where("p_id=3")->select();
         
       
        
       
       
        $this->assign('project_1',$project_1);
        $this->assign('project_2',$project_2);
        $this->assign('project_3',$project_3);

        $this->assign('countries',$countries);
        $this->display();
    }

    /**
     * wcl
     * 移动端项目甄选
     * @return [type] [description]
     */
    public function more_project(){
       
       $project = M('country_project_content')->order("cid")->select();

        
        $countries = M('country_typelist')->select();
        
        
        
        $this->assign('project',$project);
        $this->assign('countries',$countries);
        $this->display();
    }
}