<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/3/1
 * Time: 13:41
 */
namespace Home\Controller;
use Think\Controller;
class NewsController extends Controller {
    /*
     * 新闻列表
     */
    public function index(){
//        $news = M('news');
//        $list = $news->limit(10)->select();
//        $count = $news->field('id')->count();
//        $this->assign('list',$list);
//        $this->assign('count',$count);
//        $Page = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
//        $show = $Page->show();// 分页显示输出
//
//        $list = $news->limit($Page->firstRow.','.$Page->listRows)->select();
//        $this->assign('list',$list);// 赋值数据集
//        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
    /*
     * 新闻详细
     */
    public function showContent($id){
        $newsid = $id;
        $news = M('news');
        $where['id'] = $newsid;
        $data = $news->where($where)->select();
        $this->assign('data',$data);
//        dump($data);
        $this->display('content');
    }
    public function news(){

    }
    public function news_20150306(){
        $this->display('prehomeService');
    }
    public function news_20150225(){
        $this->display('annualMeeting');
    }
    public function news_20150207(){
        $this->display('homeService');
    }
    public function news_20150204(){
        $this->display('productRename');
    }
    public function news_20150117(){
        $this->display('carWash');
    }
    public function news_20150111(){
        $this->display('detection');
    }
    public function news_20150110(){
        $this->display('presentation');
    }
    public function news_20141218(){
        $this->display('kaibei');
    }
    public function news_20141129(){
        $this->display('shaoguang');
    }
    public function news_20141122(){
        $this->display('move');
    }
    public function news_20141116(){
        $this->display('carFriends');
    }
    public function news_20141205(){
        $this->display('dream');
    }
    public function news_20140605(){
    $this->display('innovate');
    }
    public function news_20140930(){
        $this->display('internet');
    }
    public function news_20140931(){
        $this->display('marketsize');
    }
    public function news_20141206(){
        $this->display('upgrade');
    }
    public function news_20141219(){
        $this->display('kb');
    }
    public function news_20140206(){
        $this->display('czsApp');
    }
    public function news_20141220(){
        $this->display('movein');
    }
    public function news_20141113(){
        $this->display('movein');
    }
}