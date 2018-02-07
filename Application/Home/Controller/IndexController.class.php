<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $Data     = M('Data');// 实例化Data数据模型
        $result     = $Data->find(1);
        $this->assign('result',$result);
        $this->display();
    }

    public function test(){
        echo '这是一个测试方法!';
    }

    protected function hello2(){
        echo '只是protected方法!';
    }

    private function hello3(){
        echo '这是private方法!';
    }

}

