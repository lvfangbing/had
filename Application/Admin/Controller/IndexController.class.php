<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }
    public function dealLogin(){
        header('content-type:text/html;charset="utf-8"');
        if(!IS_POST)  $this->error('非法操作');
        $data['username'] = I('post.username','','htmlspecialchars');
        $data['passwords'] = md5(I('post.passwords','','htmlspecialchars'));
        $model = D('Admin');
        $result = $model->field('id')->where($data)->count();
        if($result){
//            $this->success('登录成功', 'Index/manage');
            $this->redirect('Index/manage', array('cate_id' => 2), 2);
        }else{
            $this->error('操作失败');
        }
    }
    public function manage(){
        $this->display('Public/base');

    }


}