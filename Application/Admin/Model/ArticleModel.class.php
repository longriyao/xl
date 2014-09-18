<?php
namespace Admin\Model;
use Think\Model\RelationModel;

/**
 * 
 **/
class ArticleModel extends RelationModel{
    protected $_validate = array(
        array('title','require','必须填写名称',0),
        array('title','3,6','字符长度必须3-6',0,'length'), 
        array('content','require','必须填写文章内容',1),//1表示必须验证
    );

    protected $_auto = array(
        //array(user_id),
        array('time','time',3,'function'),
        array('status','1'), //新增数据默认状态为1
    );

    protected $_link = array(
        //以article的角度来看
        'Category'=> array(  
            'mapping_type'=>self::BELONGS_TO,
            'class_name'=>'Category',
            'foreign_key'=>'category_id',
            //子数组的形式
            //'mapping_name'=>'category',
            //'mapping_fields'=>'name,description',

           //字段的形式 
            //'as_fields'=>'name:category,description:desn',
            'as_fields'=>'name:category',
        ),
    
    );



     public function getPage() {
        $model = D('article'); 
        
        $count = $model->count(); 
        $Page = new \Think\Page($count, C('sitePageNum')); // 实例化分页类 传入总记录数和每页显示的记录数(25)
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $Page->rollPage = 10;
        $Page->lastSuffix = false; // 最后一页是否显示总页数
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        //$ext = C('DB_PREFIX');
        $list = $model->relation(true)->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $data['page'] = $Page->show();
        $data['list'] = $list;
        return $data; // 分页显示输出
    }
}

?>
