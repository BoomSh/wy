<?php
namespace Admin\Model;
use Think\Model;
/**
* 
*/
class AdvPlaceModel extends CommonModel{


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
	 * 插入广告位
	 * @return [type] [description]
	 */
	public function place_insert(){
      
      $m=M('AdvPlace');

      $data['name'] = trim(I('name'));
      $data['title'] = trim(I('title'));
      $data['sum'] = trim(I('sum'));
      $data['capacity'] = trim(I('sum'));
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
   * 删除广告
   * @return [type] [description]
   */
  public function advertisement_cat_delete(){

    $type = I('type');//1：单个2：批量
    
    $m = M('AdvPlace');
    $p = M('Advertisement');
    $m->startTrans();//开启事物
    
    if(1==$type){
           $ids = I('ids');
      
           $resqult = $m->delete($ids);
           $temp = $p->where(array('place_id'=>$ids))->select();
           if($temp){
               $resqults = $p->where(array('place_id'=>$ids))->delete();//广告位对应的广告
           }
           else{
               $resqults = true;
           }
           
          
    }
    else{
      $ids = $this->getDelIdStr();
      $id = explode(',',$ids);
     
      
      $resqult = $m->where(array('id'=>array('in',$id)))->delete();
      $temp = $p->where(array('place_id'=>array('in',$id)))->select();//判断该位置下有无广告
      if($temp){
          $resqults = $p->where(array('place_id'=>array('in',$id)))->delete();//广告位对应的广告
      }
      else{
          $resqults = true;
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
   * 修改
   * @return [type] [description]
   */
  public function advertisement_cat_save(){

      $m=M('AdvPlace');
      $id = I('id');
      $info = $m->select($id);
      $data['name'] = trim(I('name'));
      $data['title'] = trim(I('title'));
      $data['sum'] = trim(I('sum'));
      $temp  = $data['sum']-$info[0]['sum'];

      $data['capacity'] = $info[0]['capacity']+$temp;
      if($data['capacity']<0){
          $res['msg'] = "修改失败,请检查广告剩余数量";
      }
      else{
         $resqult = $m->where(array('id'=>$id))->save($data);

        if($resqult){
            $res['msg'] = "保存成功";
        }
        else{
            $res['msg'] = "保存失败";
        }
      }
      

      return $res;

  }
  /**
   * 获取总记录数
   * @return [type] [description]
   */
  public function getTabcount(){

     return $this->getTabcounts("AdvPlace","");
  }

  /***
     * @time 2017/05/18
     * @biking
     * @function 获取表的列表数据
     * @param $coum 字段数组、$order 排序字符串、$where 条件数组、$Page 分页类 、$type 类型，不为空为单条数据查询
     */
    public function getTabList($coum="",$order="id asc",$where="",$Page="",$type=""){
        return $this->getList("AdvPlace",$coum,$order,$where,$Page,$type);
    }
    /**
   * 获取广告详情
   */

  public function getDetails(){


       $id  = I('id');
       $m = M('AdvPlace');
      
       return $m->select($id);
  }
}