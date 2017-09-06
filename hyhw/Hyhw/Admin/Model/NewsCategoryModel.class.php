<?php
namespace Admin\Model;

/**
* 广告表
*/
class NewsCategoryModel extends CommonModel{


   /***
     * @time 2017/05/25
     * @function 获取删除的id字符串
     * 
     */
    public function getDelIdStr(){
        $hideid = $_REQUEST['hidId'];//列表的id
        $checkid = $_REQUEST['chkId'];//选中的id的下标
        //获取选中的产品的id字符串
        $checkidstr = "";
        foreach($checkid as $k=>$v){
            $checkidstr .= $hideid[$k].",";
        }

        $checkidstr = substr($checkidstr,0,-1);//选中的id的字符串
        return $checkidstr;      
    }
	/**
   * 新增新闻类别
   * @return [type] [description]
   */
	public function newscategory_insert(){

     $m = M('NewsCategory');
		$data['title'] = trim(I('title'));
		$data['sort_id'] = trim(I('sort_id'));
		// $data['link_img'] = trim(I('link_img'));
		$data['seo_title'] = trim(I('seo_title'));
		$data['seo_keyword'] = trim(I('seo_keyword'));
		$data['seo_content'] = trim(I('seo_content'));

     
    
		$data['img_url'] = trim(I('img_url'));
    
		 
		$resqult = $m->add($data);
        
         
	    if($resqult){
	     	 
	        $res['msg'] = "保存成功";
	    }
	    else{
	     	
	        $res['msg'] = "保存失败";
	    }

	    return $res;
		 
	}
	/**
	 * 修改新闻类别
	 * @return [type] [description]
	 */
	public function newscategory_save(){

        $m = M('NewsCategory');
	    $id = I('id');
	    $data['title'] = trim(I('title'));
		$data['sort_id'] = trim(I('sort_id'));
		// $data['link_img'] = trim(I('link_img'));
		$data['seo_title'] = trim(I('seo_title'));
		$data['seo_keyword'] = trim(I('seo_keyword'));
		$data['seo_content'] = trim(I('seo_content'));

     
    
		$data['img_url'] = trim(I('img_url'));

        $resqult = $m->where(array('id'=>$id))->save($data);
        if($resqult){
         
           $res['msg'] = "修改成功";
        }
        else{
         
           $res['msg'] = "修改失败";
        }
        return $res;

	}
    /**
    * 删除新闻类别
    * @return [type] [description]
    */
	public function newscategory_delete(){

		$type = I('type');//1：单个2：批量
		
		$m = M('NewsCategory');
		$d = M('News');
		$m->startTrans();//开启事务
		if(1==$type){
		   $id = I('ids');
		   
           $resqult = $m->delete($id);

               
		}
		else{
			$ids = $this->getDelIdStr();
			$id = explode(',',$ids);
				
			$resqult = $m->where(array('id'=>array('in',$id)))->delete();
                 
		}

        $temp = $d->where(array('category_id'=>array('in',$id)))->select();//判断该类别下有无新闻
        if($temp){
            $resqults = $d->where(array('category_id'=>array('in',$id)))->delete();//新闻类别对应的新闻
        }
        else{
            $resqults = true;
        }
        
		if($resqult&&$resqults){
             $m->commit();
             $res['msg'] = "删除成功";    
        }
        else{
           	 $m->rollback();
           	 $res['msg'] = "删除失败";
        }

        return $res;
		
	}	

/**
   * 获取总记录数
   * @return [type] [description]
   */
  public function getTabcount(){

     return $this->getTabcounts("NewsCategory","");
  }
 /***
     * @time 2017/05/18
     * @biking
     * @function 获取表的列表数据
     * @param $coum 字段数组、$order 排序字符串、$where 条件数组、$Page 分页类 、$type 类型，不为空为单条数据查询
     */
    public function getTabList($coum="",$order="id asc",$where="",$Page="",$type=""){

        return $this->getList("NewsCategory",$coum,$order,$where,$Page,$type);
    }

	/**
	 * 获取新闻类别详情
	 */

	public function getDetails(){


       $id  = I('id');
       $m = M('NewsCategory');
      
       return $m->select($id);
	}

}