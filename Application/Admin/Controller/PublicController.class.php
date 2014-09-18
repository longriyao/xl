<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * 
 **/
class PublicController extends Controller{
    public function verify(){
        /*
       	$w=isset($_GET['w']) ? $_GET['w']:0;
        $h=isset($_GET['h']) ? $_GET['h']:0;
        $config =    array(    
            'imageW'    =>    $w,    // 验证码字体大小   
            'imageH'    =>   $h,     // 验证码位数    
        );
         */
        $Verify = new \Think\Verify();
        $Verify->imageW = isset($_GET['w']) ? $_GET['w']:0;
        $Verify->imageH = isset($_GET['h']) ? $_GET['h']:0;
        $Verify->entry();
    }
}

            
   
?>
