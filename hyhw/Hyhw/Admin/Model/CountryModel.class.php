<?php
namespace Admin\Model;

class CountryModel extends CommonModel{

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
     * 新增国家
     * @return [type] [description]
     */
	public function projectCountry_insert(){
            
      $m = M('Country');
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
   * 删除项目
   * @return [type] [description]
   */
  public function projectCountry_delete(){

    $type = I('type');//1：单个2：批量
   
    $m = M('Country');
    $d = M('Project');
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
        
    $temp = $d->where(array('country_id'=>array('in',$id)))->select();//判断该国家下有无项目
    if($temp){
        $resqults = $d->where(array('country_id'=>array('in',$id)))->delete();//国家对应的项目
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

     return $this->getTabcounts("Country","");
  }
  /***
     * @time 2017/05/18
     * @biking
     * @function 获取表的列表数据
     * @param $coum 字段数组、$order 排序字符串、$where 条件数组、$Page 分页类 、$type 类型，不为空为单条数据查询
     */
    public function getTabList($coum="",$order="id asc",$where="",$Page="",$type=""){

        return $this->getList("Country",$coum,$order,$where,$Page,$type);
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