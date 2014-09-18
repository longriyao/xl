<?php
    namespace Admin\Controller;
    use Think\Controller;

    /**
     * 
     **/
    class ArticleController extends CommonController{
        public function index(){
            //抓取数据
            $data = D('article')->getPage();
            //var_dump($data);
            //分配数据 
            $this->title = '文章列表';
            $this->assign('lists',$data['list']);
            $this->assign('page',$data['page']);
            //分配视图
            $this->display();
        }
        public function add(){
            //分配数据 
            $this->title = '添加文章';
            $data = M('category')->field('id,name')->select();
            $this->assign('plists',$data);
            //分配视图
            $this->display();
        }
        public function addDo(){
            //dump($_POST);
            //实例化
            $model = D('article'); 
            //验证  静态模型 $_validate

            //完善  静态模型 $_auto 补全时间，用户id
            
            //创建
            $data = $model->create();
            if(!$data){
                $this->error($model->getError());
            }
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
            //抓取数据 分配数据
            $data = M('category')->field('id,name')->select();
            $this->assign('plists',$data);
                //---这里是与add操作多出来的部分
            $data = M('article')->find($id);
                //---内容反处理
                $data['content'] = htmlspecialchars_decode($data['content']);
            $this->assign('list',$data);

            $this->title = '编辑分类';
            //分配视图
            $this->display();
        }
        public function editDo(){
            //实例化
            $model = D('article'); 
            //验证  使用验证静态模型

            //完善  补全时间用户id等 
            
            //创建
            if(!$model->create()){
                $this->error($model->getError());
            }

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
            $model = M('article');
            if ($model->delete($id)) {
                $this->success('删除成功');
            }else{
                $this->error($model->getError());
            }
        }
    }
?>
