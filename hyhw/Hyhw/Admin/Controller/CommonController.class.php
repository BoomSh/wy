<?php
namespace Admin\Controller;
use Think\Controller;
/**
* 
*/
class CommonController extends Controller
{
	

     public function __construct() {
        parent::__construct();
        
        $this->checkAdminSession();

    }
	public function checkAdminSession() {
        if (!isset($_SESSION['userID'])) {
            echo "<script language=\"javascript\">alert('登录已失效或没有登录，请登录！');window.top.location.href='" . U('Index/index') . "';</script>";
        }
    }
}
