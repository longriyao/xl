<?php
namespace Admin\Model;
use Think\Model;

/**
 * 
 **/
class UserModel extends Model{
    //验证
    protected $_validate = array(
        array('username','require','账号名称已经存在',0,'unique',1),
        array('username','/^\w{3,}$/','用户名必须3个字母以上',0,'regex',1),

        array('userpwd','/^\w{6,12}/','密码必须6-12位数字，字母，下划线',2,'regex'),
     
        array('re_userpwd','userpwd','确认密码不正确',2,'confirm'),//callback：当前模型的方法 function：函数
        array('verify','require','必须填写验证码',1),//1表示必须验证
        array('verify','checkVerify','验证码不正确',1,'callback'),//别忘了最后的附加条件
    );

    //完善  时间补全 忽略部分未填项 密码未填则保持原样不更新
    protected $_auto = array(
        //array(user_id),
        array('userpwd','md5',3,'function'),//增加或更新时都要加密
        //array('userpwd','',2,'ignore'),//更新数据时为空则忽略  一般不要把修改密码和修改其他信息混在一起   
    );

    public function checkVerify($code,$id=''){

        $verify = new \Think\Verify();
        return $verify->check($code,$id);

    }
  
}

?>
