<?php

            $config = array(    
            'maxSize' => 3145728,
            'saveName' => array('uniqid',''),
            //'exts' => $exts,
            'exts'=>  array('jpg', 'gif', 'png', 'jpeg'),
            'autoSub' => true,
            'subName' => array('date','Ymd'),
            //$upload->rootPath ='.';  //若这样设置就会和下面的组合成 ../Public/Uploads/
            'rootPath' => './',  //相对网站根路径  即主入口文件所在目录。
            'savePath' => './Public/Uploads/',
            );

            $upload = new \Think\Upload($config);// 实例化上传类   
            $info  =  $upload->upload();
            if(!$info) {// 上传错误提示错误信息    
                $this->error($upload->getError());
            }else{// 上传成功 获取上传文件信息    
                $arr=array();
                foreach($info as $file){        
                    array_push($arr,$file['savepath'].$file['savename']);    
                }
                var_dump($arr);
            } 

?>
