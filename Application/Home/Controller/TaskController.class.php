<?php
namespace Home\Controller;
use Think\Controller;
class TaskController extends CommonController {
    public function _initialize(){
        if(empty(session('user_name'))){
            $this->error('请登录后再进行操作',U('Index/user'),2);
        }

        parent::_initialize();
    }

    public function task(){
        $this->display();
    }

    public function task_all(){
        $this->display();
    }










}
?>