<?php
namespace Admin\Model;

/**
* 广告表
*/
class AdvertisementModel extends CommonModel{


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
   * 新增广告
   * @return [type] [description]
   */
	public function advertisement_insert(){

     $m = M('Advertisement');
     $p = M('AdvPlace');
		 $data['title'] = trim(I('title'));
		 $data['add_time'] = trim(I('add_time'));
		 $data['link_url'] = trim(I('link_url'));
		 $data['place_id'] = trim(I('place_id'));
		 $data['sort_id'] = trim(I('sort_id'));
		 // $data['link_img'] = trim(I('link_img'));
		 $data['seo_title'] = trim(I('seo_title'));
		 $data['seo_keyword'] = trim(I('seo_keyword'));
		 $data['seo_content'] = trim(I('seo_content'));

     
    
		 $data['img_url'] = trim(I('img_url'));
    
		 $m->startTrans();//开启事务
		 $resqult = $m->add($data);
        
         $resqults = $p->where(array('id'=>$data['place_id']))->setDec('capacity');//广告位可用数量减一
	     if($resqult&&$resqults){
	     	 $m->commit();
	         $res['msg'] = "保存成功";
	     }
	     else{
	     	 $m->rollback();
	         $res['msg'] = "保存失败";
	     }

	     return $res;
		 
	}


  /**
   * 修改广告
   * @return [type] [description]
   */
  public function advertisement_save(){
      
      $m = M('Advertisement');
      $id = I('id');
      $data['title'] = trim(I('title'));
      $data['add_time'] = trim(I('add_time'));
      $data['link_url'] = trim(I('link_url'));
      // $data['place_id'] = trim(I('place_id'));
      $data['sort_id'] = trim(I('sort_id'));
      $data['img_url'] = trim(I('img_url'));
      $data['seo_title'] = trim(I('seo_title'));
      $data['seo_keyword'] = trim(I('seo_keyword'));
      $data['seo_content'] = trim(I('seo_content'));

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
   * 删除广告
   * @return [type] [description]
   */
	public function advertisement_delete(){

		$type = I('type');//1：单个2：批量
		
		$m = M('Advertisement');
		$p = M('AdvPlace');
		$m->startTrans();//开启事物
		
		if(1==$type){
		   $ids = I('ids');
		   $pids = I('pids');
           $resqult = $m->delete($ids);
          
           $resqults = $p->where(array('id'=>$pids))->setInc('capacity');//广告位加一
          
		}
		else{
			$ids = $this->getDelIdStr();
			$id = explode(',',$ids);
			$adv=array();
			$adv_p = array();
			foreach ($id as $key => $value) {
				$temp[$key] = explode('|',$id[$key]);
				$adv[$key] = $temp[$key][0];
				$adv_p[$key] = $temp[$key][1];
			}
			$resqult = $m->where(array('id'=>array('in',$adv)))->delete();
            $resqults = true;

            foreach ($adv_p as $key => $value) {
            	$resqultc = $p->where(array('id'=>$adv_p[$key]))->setInc('capacity');//广告位加一
            	if(!$resqultc){
            		$resqults = false;
            	}
            }
            
           
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
	 * 获取广告详情
	 */

	public function getDetails(){


       $id  = I('id');
       $m = M('Advertisement');
      
       return $m->select($id);
	}
     
	/**
   * 获取总记录数
   * @return [type] [description]
   */
  public function getTabcount(){

     return $this->getTabcounts("Advertisement","");
  }

  /***
     * @time 2017/05/18
     * @biking
     * @function 获取表的列表数据
     * @param $coum 字段数组、$order 排序字符串、$where 条件数组、$Page 分页类 、$type 类型，不为空为单条数据查询
     */
    public function getTabList($coum="",$order="id asc",$where="",$Page="",$type=""){

        return $this->getList("Advertisement",$coum,$order,$where,$Page,$type);
    }
}