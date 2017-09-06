<?php
namespace Admin\Controller;
/**
 * 移民项目
 */
class ProjectController extends CommonController{

    /**
     * 国家列表
     * @return [type] [description]
     */
    public function projectCountry_list(){


        $result = isset($_REQUEST['flag'])?$_REQUEST['flag']:"";//操作的结果 


        
        $D=D('Country');
       
        $count  = $D->getTabcount();
        $Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(10)
        $show       = $Page->show();// 分页显示输出
        $info = $D->getTabList("","","",$Page);//获取分页数据
        $this->assign("result",$result);
        $this->assign("pagenum",10);
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('totalcount',$count);//总条数 
       // p_r($info);die();
        $this->assign('info',$info);



        $this->assign("result",$result);
    	$this->display();

    }
    /**
     * 新增国家
     * @return [type] [description]
     */
    public function projectCountry_add(){


        if(IS_POST){
            $res = D('Country')->projectCountry_insert();

            $this->redirect('projectCountry_list', array('flag' =>$res['msg']));
        }

    	$this->display();

    }
    /**
     * 修改国家
     * @return [type] [description]
     */
    public function projectCountry_edit(){

        
        $D=D('Country');
        if(IS_POST){

          $res = $D->projectCountry_save();
          $this->redirect('projectCountry_list', array('flag' =>$res['msg']));
         

        }

        
        $info  = $D->getDetails();
       // p_r( $info);die();
        $this->assign('info',$info);
        $this->display();

    }
    /**
     * 删除国家
     * @return [type] [description]
     */
    public function projectCountry_del(){
         
        $D=D('Country');
        $res = $D->projectCountry_delete();

        $this->redirect('projectCountry_list', array('flag' =>$res['msg']));
    }
    /**
     * 项目类别列表
     * @return [type] [description]
     */
    public function projectCategory_list(){
       $result = isset($_REQUEST['flag'])?$_REQUEST['flag']:"";//操作的结果 


        
        $D=D('ProjectCategory');
       
        $count  = $D->getTabcount();
        $Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(10)
        $show       = $Page->show();// 分页显示输出
        $info = $D->getTabList("","","",$Page);//获取分页数据
        $this->assign("result",$result);
        $this->assign("pagenum",10);
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('totalcount',$count);//总条数 
       // p_r($info);die();
        $this->assign('info',$info);



        $this->assign("result",$result);
        $this->display();
    }
    /**
     * 项目类别
     * @return [type] [description]
     */
    public function projectCategory_add(){
        if(IS_POST){
            $res = D('ProjectCategory')->projectCategory_insert();

            $this->redirect('projectCategory_list', array('flag' =>$res['msg']));
        }

        $this->display();
    }
    /**
     * 项目列表
     * @return [type] [description]
     */
    public function project_list(){
        
        $result = isset($_REQUEST['flag'])?$_REQUEST['flag']:"";//操作的结果 


        
        $D=D('Project');
       
        $count  = $D->getTabcount();
        $Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(10)
        $show       = $Page->show();// 分页显示输出
        $info = $D->getTabList("","","",$Page);//获取分页数据
        $this->assign("result",$result);
        $this->assign("pagenum",10);
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('totalcount',$count);//总条数 
       // p_r($info);die();
        $this->assign('info',$info);



        $this->assign("result",$result);
        $this->display();
    }
    
    /**
     * 新增项目
     * @return [type] [description]
     */
    public function project_add(){
    
        if(IS_POST){
            $res = D('Project')->project_insert();

            $this->redirect('project_list', array('flag' =>$res['msg']));
        }
        $D=D('ProjectCategory');
        $P = D('Country');
       
        $field = array('id','title');
        $fields = array('id','name');
        $category = $D->getTabList($field,"",$where);//获取数据
        $country = $P->getTabList($fields,"",$where);//获取数据
    
        $this->assign('country',$country);
        $this->assign('category',$category);
        $this->display();
    }
    /**
     * 删除项目
     * @return [type] [description]
     */
    public function project_del(){
         
        $D=D('Project');
        $res = $D->project_delete();

        $this->redirect('project_list', array('flag' =>$res['msg']));
    }
    /**
     * 修改项目
     * @return [type] [description]
     */
    public function project_edit(){

        $D=D('Project');
        if(IS_POST){

          $res = $D->project_save();
          $this->redirect('project_list', array('flag' =>$res['msg']));
         

        }

        $m=D('ProjectCategory');
        $P = D('Country');
       
        $field = array('id','title');
        $fields = array('id','name');
        $category = $m->getTabList($field,"",$where);//获取数据
        $country = $P->getTabList($fields,"",$where);//获取数据
    
        $this->assign('country',$country);
        $this->assign('category',$category);
        $info  = $D->getDetails();
        //p_r( $info);die();
        $this->assign('info',$info);
        $this->display();


    }
} 
?>