<?php  
namespace Admin\Model;

/**
* 用户 
*/
class ManagerModel extends CommonModel{
	
	/**
	 * 登陆成功更新用户表
	 */
	public function editManager($where,$data){
         return M('manager')->where($where)->save($data);           
	}
}