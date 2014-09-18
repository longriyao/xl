<?php
namespace Common\Model;

class UpPicOneModel{
    public function upPicOne($field){
         $upload = new \Think\Upload();// 实例化上传类    
            $upload->maxSize   =     3145728 ;// 设置附件上传大小    
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
            $upload->rootPath = '../';  //相对网站根路径  即主入口文件所在目录。

            $upload->savePath  =      '/xl/Uploads/thinkphp/'; // 设置附件上传目录    // 上传单个文件     
            $info = $upload->uploadOne($_FILES[$field]);    
            if(!$info) {// 上传错误提示错误信息        
                echo $upload->getError(); 
                die();    
            }else{// 上传成功 获取上传文件信息         
                return $info['savepath'].$info['savename'];    
            }    
    }

}

