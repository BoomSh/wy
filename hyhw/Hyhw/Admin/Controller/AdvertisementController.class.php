<?php
namespace Admin\Controller;
/**
* 广告管理
*/
class AdvertisementController extends CommonController{

	/**
	 * 广告列表
	 * @return [type] [description]
	 */
	public function advertisement_list(){

		


        
        $result = isset($_REQUEST['flag'])?$_REQUEST['flag']:"";//操作的结果 
        $D=D('Advertisement');
       
        $count  = $D->getTabcount();
        $Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(10)
        $show       = $Page->show();// 分页显示输出
        $info = $D->getTabList("","","",$Page);//获取分页数据
        $this->assign("result",$result);
        $this->assign("pagenum",10);
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('totalcount',$count);//总条数 
        $this->assign('info',$info);
		$this->display();
	}
    
    /**
	 * 新增广告
	 * @return [type] [description]
	 */
    public function advertisement_add(){

       
    	if(IS_POST){
             $D=D('Advertisement');
             $res = $D->advertisement_insert();
             
             $this->redirect('advertisement_list', array('flag' =>$res['msg']));
    	}
        $D=D('AdvPlace');

        $where['capacity'] = array('NEQ',0); 
        $field = array('id','name');
        $place = $D->getTabList($field,"",$where);//获取数据
        $this->assign('place',$place);
       
		$this->display();
	}

	/**
     * 修改广告
     * @return [type] [description]
     */
    public function advertisement_edit(){
        
       $D=D('Advertisement');
       if(IS_POST){

          $res = $D->advertisement_save();
          $this->redirect('advertisement_list', array('flag' =>$res['msg']));
         

       }

       
       $info  = $D->getDetails();
       $this->assign('info',$info);
       $this->display();
    }
    /**
     * 删除广告
     * @return [type] [description]
     */
    public function advertisement_del(){
       $D=D('Advertisement');
       $res = $D->advertisement_delete();

       $this->redirect('advertisement_list', array('flag' =>$res['msg']));
    }
    /**
	 * 广告位列表
	 * @return [type] [description]
	 */
	public function advertisement_cat_list(){

		$result = isset($_REQUEST['flag'])?$_REQUEST['flag']:"";//操作的结果 
		$D=D('AdvPlace');
       
        $count  = $D->getTabcount();
		$Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(10)
		$show       = $Page->show();// 分页显示输出
        $info = $D->getTabList("","","",$Page);//获取分页数据
        $this->assign("pagenum",10);
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('totalcount',$count);//总条数 
        $this->assign('info',$info);
        $this->assign("result",$result);
        $this->display();
	}

    /**
	 * 新增广告位
	 * @return [type] [description]
	 */
	public function advertisement_cat_add(){

		if(IS_POST){//保存
             $D=D('AdvPlace');
             $res = $D->place_insert();

             $this->redirect('advertisement_cat_list', array('flag' =>$res['msg']));
		}

		$this->display();//新增页面
	}
    /**
     * 删除广告位
     * @return [type] [description]
     */
    public function advertisement_cat_del(){
       $D=D('AdvPlace');
       $res = $D->advertisement_cat_delete();

       $this->redirect('advertisement_cat_list', array('flag' =>$res['msg']));
    }

    /**
     * 修改广告位
     * @return [type] [description]
     */
    public function advertisement_cat_edit(){

        $D=D('AdvPlace');
    	if(IS_POST){


            $res = $D->advertisement_cat_save();
            $this->redirect('advertisement_cat_list', array('flag' =>$res['msg']));
         

    	}
        $info  = $D->getDetails();
    
        $this->assign('info',$info);  
        $this->display();
    }
	

}