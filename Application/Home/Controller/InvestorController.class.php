<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/3/1
 * Time: 13:49
 */

namespace Home\Controller;

use Think\Controller;
class InvestorController extends Controller {
    public function index(){
        echo 'InvestorController';
        $this->display();
    }
}