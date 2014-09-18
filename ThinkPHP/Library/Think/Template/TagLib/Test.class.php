<?php
namespace Think\Template\Taglib;
use Think\Template\TagLib;

Class Test extends TagLib{
    protected $tags   =  array(  // 定义标签 
        'code'    =>    array('attr'=>'width,height','close'=>0), // input标签 
        //'textarea' =>    array('attr'=>'name,id')， 
    ); 
    
    public function _code($tag,$content)   {
        $width   =   $tag['width'];    
        $height    =    $tag['height'];    
        //$value   =   $this->autoBuildVar($tag['value']);   //从服务器传来的数据 
        $str = "<img src=\"{:U('Admin/Public/verify',array('w'=>".$width.",'h'=>".$height."))}\" onclick=\"this.src = this.src+'?'+Math.random() \"/>"; 
        return $str;
    } 
}
?>
