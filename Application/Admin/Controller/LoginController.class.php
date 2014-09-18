<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * 
 **/
class LoginController extends Controller{
    public function login(){
        $this->title = '登陆';
        $this->display();
    }    
    public function loginDo(){
        //接收数据  过滤和验证  此处无法使用模型z中的自动验证，自动完成功能，因为login并不完整对应一个用户表，且不对表进行增加和更新操作
        $username = I('post.username');
        $userpwd = I('post.userpwd');
        $code = I('post.verify'); 
        
        $verify = new \Think\Verify();
        if(!$verify->check($code,$id)){
            $this->error('验证码不正确');
        } 
        //判断用户是否重复
        $user = M('user');
        $where['username'] = $username;
        $where['userpwd'] = md5($userpwd);
        $arr = $user->field('id')->where($where)->find();
        if ($arr) {//存在 允许登陆
            $_SESSION['username'] = $username;
            $_SESSION['userid'] =$arr['id'];
            $this->success('用户登陆成功',U('Admin/Index/index'));
        }else{//不存在显示错误消息
            $this->error('该用户不存在');
        }
         
        
    }

    public function logoutDo(){
        $_SESSION = array();
        if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(),'',time()-1,'/');
        }
        session_destroy();
        $this->success('退出成功',U('Admin/Index/index'));
        //$this->redirect('Admin/Index/index', array('test' => 2), 5, '页面跳转中...');
    }

    public function register(){
        $this->title = '注册';
        $this->display();
    }
    public function registerDo(){
        //验证 静态模型 $_validate

        //完善 时间补全 密码加密 忽略部分未填项 密码未填则保持原样不更新 
        
        //创建
        $model = D('user');
        $data = $model->create();
        //dump($data);
        if (!$data) {
            $this->error($model->getError(),NULL,3);
        }
        //插入
        if ($model->add($data)) {
            $this->success('添加成功');
        }else{
            $this->error($model->getError());
        }
    }
    
} 
?>
