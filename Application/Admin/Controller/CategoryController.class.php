<?php
    namespace Admin\Controller;
    use Think\Controller;

    /**
     * 
     **/
    class CategoryController extends CommonController{
        public function index(){
            //抓取数据
            //$data = M('category')->select();
            $data = D('Common/Page')->getPage('category');
            //分配数据 
            $this->title = '分类列表';
            $this->assign('lists',$data['list']);
            $this->assign('page',$data['page']);
            //分配视图
            $this->display();
        }
        public function add(){
            //分配数据 
            $this->title = '添加分类';
            //分配视图
            $this->display();
        }
        public function addDo(){
            //实例化
            $model = D('category'); 
            //验证  静态模型

            //完善  补全时间，用户id
            
            //创建
            if(!$model->create()){
                exit($model->getError());
            }

            //多媒体处理 特殊完善
            $data = D('Common/UpPicOne')->upPicOne('pic'); 
            $model->pic = $data;  
            //添加
            if($model->add()){
                $this->success('添加成功!');
            }else{
                $this->error($model->getError());
            }

        }
        public function edit(){
            //获取id
            $id = I('get.id');
            //抓取数据
            $data = M('category')->find($id);
            //分配数据
            $this->assign('list',$data);
            $this->title = '编辑分类';
            //分配视图
            $this->display();
        }
        public function editDo(){
            //实例化
            $model = D('category'); 
            //验证  使用验证静态模型

            //完善  补全时间用户id等 
            
            //创建
            if(!$model->create()){
                exit($model->getError());
            }

            //多媒体处理 特殊完善
            $data = D('Common/UpPicOne')->upPicOne('pic'); 
            $model->pic = $data;
            //更新
            if($model->save()){
                $this->success('更新成功');
            }else{
                $this->error($model->getError());
            }
        }
        public function delDo(){
            //获取id
            $id = I('get.id');
            //删除数据
            $model = M('category');
            $rel_pic_path = $model->field('pic')->find($id); 
            if ($model->delete($id)) {
                $root_path=dirname(dirname(THINK_PATH));
                $path=$root_path.$rel_pic_path['pic'];
                unlink($path);             
                $this->success('删除成功');
            }else{
                $this->error($model->getError());
            }
        }
    }
?>
