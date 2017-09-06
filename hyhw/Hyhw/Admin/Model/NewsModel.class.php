<?php
namespace Admin\Model;
/**
 * 新闻
 */
class  NewsModel extends CommonModel{


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
     * 新增新闻
     * @return [type] [description]
     */
	public function news_insert(){
        
        $m = M('News');
		$data['title'] = trim(I('title'));
		$data['sort_id'] = trim(I('sort_id'));
		$data['category_id'] = trim(I('category_id'));
		$data['is_hot'] = trim(I('is_hot'));
		$data['is_index'] = trim(I('is_index'));
		$data['content'] = I('info');
		$data['add_time'] = trim(I('add_time'));
		$data['seo_title'] = trim(I('seo_title'));
		$data['seo_keyword'] = trim(I('seo_keyword'));
		$data['seo_content'] = trim(I('seo_content'));
		$data['img_url'] = trim(I('img_url'));
    
		//p_r($data);die();
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
   * 修改新闻
   * @return [type] [description]
   */
    public function news_save(){
      
	    $m = M('News');
	    $id = I('id');
	    $data['title'] = trim(I('title'));
		$data['sort_id'] = trim(I('sort_id'));
		$data['category_id'] = trim(I('category_id'));
		$data['is_hot'] = trim(I('is_hot'));
		$data['is_index'] = trim(I('is_index'));
		$data['content'] = I('info');
		$data['add_time'] = trim(I('add_time'));
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
   * 删除新闻
   * @return [type] [description]
   */
	public function news_delete(){

		$type = I('type');//1：单个2：批量
		
		$m = M('News');
		
		if(1==$type){
		   $ids = I('ids');
		   
           $resqult = $m->delete($ids);
               
		}
		else{
			$ids = $this->getDelIdStr();
			$id = explode(',',$ids);
				
			$resqult = $m->where(array('id'=>array('in',$id)))->delete();
                 
		}
        

		if($resqult){
             
             $res['msg'] = "删除成功";    
        }
        else{
           	 
           	 $res['msg'] = "删除失败";
        }

        return $res;
		
	}
    /**
   * 获取总记录数
   * @return [type] [description]
   */
  public function getTabcount(){

     return $this->getTabcounts("News","");
  }

  /***
     * @time 2017/05/18
     * @biking
     * @function 获取表的列表数据
     * @param $coum 字段数组、$order 排序字符串、$where 条件数组、$Page 分页类 、$type 类型，不为空为单条数据查询
     */
    public function getTabList($coum="",$order="id asc",$where="",$Page="",$type=""){

        return $this->getList("News",$coum,$order,$where,$Page,$type);
    }


	/**
	 * 获取新闻详情
	 */

	public function getDetails(){


       $id  = I('id');
       $m = M('News');
      
       return $m->select($id);
	}

}  
?>