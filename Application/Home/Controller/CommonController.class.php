<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
    public function _initialize(){
        import('ORG.Util.Auth');
        //加载Auth类库
       $auth=new \Auth();
/*       if(!$auth->check(MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME,session('uid'))){
            $this->error('你没有权限');
       }*/


    }








}