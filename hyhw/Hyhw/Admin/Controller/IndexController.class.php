<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	/**
	 * 用户登录展示及登陆判断
	 * @return [type] [description]
	 */
    public function index(){
       

       if(!IS_POST){
       	    $this->display();//登陆页面
       }
       else{

          // 登陆判断
           $m = M('manager');
       	   $username = trim(I('username'));
       	   $password = trim(I('password','',md5()));
           if($username==""||$password==""){
               $this->error('用户名和密码不能为空');
          }
           else{
          	 $where['username'] = $username;
	           $where['password'] = md5(trim($password));
	           $i = $m->where($where)->count();
	           $arr = $m->where($where)->select();
	          // p_r($i);die();
	           if($i<=0){

                  $this->error('用户名或密码错误');
	           }
	           else{
	           	    if(0 === $arr[0]['is_lock']){
	           	    	$this->error('此用户已禁用！');
	           	    }
                    $data['load_id'] = get_client_ip();
                    $data['load_time'] = time();
                    $d = D('Manager');

                    $result = $d->editManager($where,$data);
                    $userid = $arr[0]['id'];
                    session('userID', $userid);
                    session('userName', $username);
                    $map['role_id'] = $arr[0]['role_id'];
                    $userRole = M('Role')->where($map)->select();
                    session("userRole", $userRole);

                    //$_SESSION['userID'] = $arr[0]['id'];
                    $this->redirect('Index/loginIndex');
	           }
	      }
       }
      
    }
    /**
     * 用户中心页面
     * @return [type] [description]
     */
    public function loginIndex(){
    	if (!IS_POST) {

            $userInfo = D('Manager')->where(array("id" => $_SESSION['userID']))->find();
            $this->assign("userInfo", $userInfo);
            $this->assign("role_name", $_SESSION['userRole'][0]['name']);
            //p_r($_SESSION);die();
            $this->display();
        } else {
            $event = $_POST['__EVENTTARGET'];
            if ("lbtnExit" == $event) {
                unset($_SESSION['userID']);
                unset($_SESSION['userRole']);
                $this->redirect("Index/index");
            }
        }
    }
}