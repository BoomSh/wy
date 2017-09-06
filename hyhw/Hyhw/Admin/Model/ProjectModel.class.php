<?php
namespace Admin\Model;

class ProjectModel extends CommonModel{

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
     * 新增项目
     * @return [type] [description]
     */
	public function project_insert(){
            
        $m = M('Project');
	    $data  = $m->create();
		
	    switch ($data['category_id']) {
	     	case 1:
	     		$data['investment'] = trim(I('investment1'));
	     		$data['complex'] = trim(I('complex1'));
	     		$data['dwell'] = trim(I('dwell1'));
	     		$data['visa'] = trim(I('visa1'));
	     		break;
	     	case 2:
	     		$data['language'] = trim(I('language2'));
	     		$data['dwell'] = trim(I('dwell2'));
	     		$data['work_long'] = trim(I('work_long2'));
	     		$data['visa'] = trim(I('visa2'));
	     		break;
	     	case 3:
	     		$data['investment'] = trim(I('investment3'));
	     		$data['language'] = trim(I('language3'));
	     		$data['business_plan'] = trim(I('business_plan3'));
	     		$data['entre_envir'] = trim(I('entre_envir3'));
	     		break;	
	     	
	     } 
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
   * 修改项目
   * @return [type] [description]
   */
    public function project_save(){
      
	    $m = M('Project');
	    $id = I('id');

	     $data  = $m->create();
		
	    switch ($data['category_id']) {
	     	case 1:
	     		$data['investment'] = trim(I('investment1'));
	     		$data['complex'] = trim(I('complex1'));
	     		$data['dwell'] = trim(I('dwell1'));
	     		$data['visa'] = trim(I('visa1'));
	     		break;
	     	case 2:
	     		$data['language'] = trim(I('language2'));
	     		$data['dwell'] = trim(I('dwell2'));
	     		$data['work_long'] = trim(I('work_long2'));
	     		$data['visa'] = trim(I('visa2'));
	     		break;
	     	case 3:
	     		$data['investment'] = trim(I('investment3'));
	     		$data['language'] = trim(I('language3'));
	     		$data['business_plan'] = trim(I('business_plan3'));
	     		$data['entre_envir'] = trim(I('entre_envir3'));
	     		break;	
	     	
	    } 

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
	public function project_delete(){

		$type = I('type');//1：单个2：批量
		
		$m = M('Project');
		
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

     return $this->getTabcounts("Project","");
  }
  /***
     * @time 2017/05/18
     * @biking
     * @function 获取表的列表数据
     * @param $coum 字段数组、$order 排序字符串、$where 条件数组、$Page 分页类 、$type 类型，不为空为单条数据查询
     */
    public function getTabList($coum="",$order="id asc",$where="",$Page="",$type=""){

        return $this->getList("Project",$coum,$order,$where,$Page,$type);
    }

    /**
   * 获取项目详情
   */

  public function getDetails(){


       $id  = I('id');
       $m = M('Project');
      
       return $m->select($id);
  }

}
?>