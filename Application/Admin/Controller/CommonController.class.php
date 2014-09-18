<?php
namespace Admin\Controller;
use Think\Controller;

class CommonController extends Controller {
    public function _initialize(){
        if (!isset($_SESSION['username']) || $_SESSION['username'] == '') {
            $this->redirect('Admin/Login/login');
        }
    }
}
?>
