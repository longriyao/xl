<?php
namespace Admin\Model;
use Think\Model;

/**
 * 
 **/
class CategoryModel extends Model{
    protected $_validate = array(
        array('name','require','必须填写名称',0),
        array('description','require','必须填写说明',0),
    );
}

?>
