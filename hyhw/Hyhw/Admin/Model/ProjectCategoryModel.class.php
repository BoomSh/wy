<?php
namespace Admin\Model;

class ProjectCategoryModel extends CommonModel{
	 /**
     * 新增类别
     * @return [type] [description]
     */
	public function projectCategory_insert(){
            
      $m = M('ProjectCategory');
		  $data['title'] = trim(I('title'));
		
		 
		  // p_r($data);die();
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
   * 修改国家
   * @return [type] [description]
   */
    public function projectCountry_save(){
          
        $m = M('Country');
        $id = I('id');
        $data['name'] = trim(I('name'));
    
        $data['seo_title'] = trim(I('seo_title'));
        $data['seo_keyword'] = trim(I('seo_keyword'));
        $data['seo_content'] = trim(I('seo_content'));
        $data['advantage_img'] = trim(I('img_url1'));
        $data['welfare_img'] = trim(I('img_url2'));
        $data['education_img'] = trim(I('img_url3'));
        $data['travel_img'] = trim(I('img_url4'));
        $data['medical_img'] = trim(I('img_url5'));
        $data['advantage'] = trim(I('info1'));
        $data['welfare'] = trim(I('info2'));
        $data['education'] = trim(I('info3'));
        $data['travel'] = trim(I('info4'));
        $data['medical'] = trim(I('info5'));

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
   * 获取总记录数
   * @return [type] [description]
   */
  public function getTabcount(){

     return $this->getTabcounts("ProjectCategory","");
  }
  /***
     * @time 2017/05/18
     * @biking
     * @function 获取表的列表数据
     * @param $coum 字段数组、$order 排序字符串、$where 条件数组、$Page 分页类 、$type 类型，不为空为单条数据查询
     */
    public function getTabList($coum="",$order="id asc",$where="",$Page="",$type=""){

        return $this->getList("ProjectCategory",$coum,$order,$where,$Page,$type);
    }

    /**
   * 获取国家详情
   */

  public function getDetails(){


       $id  = I('id');
       $m = M('Country');
      
       return $m->select($id);
  }

}
?>