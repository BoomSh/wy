<?php
namespace Admin\Controller;
/**
 * 新闻
 */
class NewsController extends CommonController{



    /**
     * 新闻列表
     * @return [type] [description]
     */
    public function news_list(){

        $result = isset($_REQUEST['flag'])?$_REQUEST['flag']:"";//操作的结果 

        $D=D('News');
       
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
     * 新增新闻
     * @return [type] [description]
     */
    public  function news_add(){
       
        if(IS_POST){
            $res = D('News')->news_insert();

            $this->redirect('news_list', array('flag' =>$res['msg']));

           
        }
        $D=D('NewsCategory');

       
        $field = array('id','title');
        $category = $D->getTabList($field,"",$where);//获取数据
      //  p_r($category);die();
        $this->assign('category',$category);
        $this->display();
    }
     
    /**
     * 修改新闻
     * @return [type] [description]
     */
    public function news_edit(){


        
       $D=D('News');
       if(IS_POST){

          $res = $D->news_save();
          $this->redirect('news_list', array('flag' =>$res['msg']));
         

       }

        $m=D('NewsCategory');

       
        $field = array('id','title');
        $category = $m->getTabList($field,"",$where);//获取数据
      //  p_r($category);die();
        $this->assign('category',$category);
       $info  = $D->getDetails();
       //p_r( $info);die();
       $this->assign('info',$info);
       $this->display();
   

    }
     /**
     * 删除新闻
     * @return [type] [description]
     */
    public function news_del(){
       $D=D('News');
       $res = $D->news_delete();

       $this->redirect('news_list', array('flag' =>$res['msg']));
    }
    /**
     * 新闻类别列表
     * @return [type] [description]
     */
	public function newscategory_list(){

         


		$result = isset($_REQUEST['flag'])?$_REQUEST['flag']:"";//操作的结果 
		$D=D('NewsCategory');
       
        $count  = $D->getTabcount();
        $Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(10)
        $show       = $Page->show();// 分页显示输出
        $info = $D->getTabList("","","",$Page);//获取分页数据
        $this->assign("result",$result);
        $this->assign("pagenum",10);
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('totalcount',$count);//总条数 
        $this->assign('info',$info);
     //   p_r($info);die();
         $this->display();
	}
    /**
     * 新增新闻类别
     * @return [type] [description]
     */
	public  function newscategory_add(){
        

        if(IS_POST){//保存
             $D=D('NewsCategory');
             $res = $D->newscategory_insert();

             $this->redirect('newscategory_list', array('flag' =>$res['msg']));
		}

		$this->display();//新增页面
	}
    /**
     * 修改新闻类别
     * @return [type] [description]
     */
    public function newscategory_edit(){

        $D=D('NewsCategory');
        if(IS_POST){

          $res = $D->newscategory_save();
          $this->redirect('newscategory_list', array('flag' =>$res['msg']));
         

        }

        
        $info  = $D->getDetails();
       // p_r( $info);die();
        $this->assign('info',$info);
        $this->display();
    }

    /**
     * 删除新闻类别
     * @return [type] [description]
     */
    public function newscategory_del(){
    
       $D=D('NewsCategory');
       $res = $D->newscategory_delete();

       $this->redirect('newscategory_list', array('flag' =>$res['msg']));   
    }

}