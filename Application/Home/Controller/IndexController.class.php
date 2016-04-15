<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    /**
    * 首页
    */
    public function index(){
        $user_name           = session('user_name');
        if(empty($user_name)){
            $this->error('请登录后再进行操作',U('Index/user'),2);
        }

        $project             = M('Project');
        $user_id             = session('user_id');
        $user_name           = session('user_name');
        $project_list        = $project->field('id,project_name,project_img')->where("projected_creater = '$user_name'")->order('id asc')->select();

        $pal                 = M('Pal');
        $friends_id          = $pal->field('attention_user')->where("login_user = $user_id")->select();

        if(!empty($friends_id)){
            foreach($friends_id as $k=>$v){
                $friends         .= $v['attention_user'].',';
            }
                $friends             = trim($friends,',');
                $user                = M('User');
                $friend_list         = $user->field('user_name,id')->where("id in ($friends)")->select();

                $task                = new \Home\Model\TaskModel();
                $task_list           = $task->field('id,grade,task_content')->where("do_user = '$user_name' and status =1")->limit(10)->select();

                $this->assign('friend_list',$friend_list);
        }




        $this->assign('task_list',$task_list);
        
        $this->assign('project_list',$project_list);
        $this->display();
    }

    /**
    * 退出
    */
    public function logout(){
        session(null);

        echo '已退出，请重新登录';exit;
    }

    /**
    * 注册/登录
    */
    public function user(){
        if(IS_POST){
            $user = D('user');
                if(!empty($_POST) && $_POST['register'] == true){
                    $user_data = $user->create();
                        if(empty($user_data)){
                            echo $user->getError();
                            exit;
                        }

                        unset($user_data['user_password_again']);
                        unset($user_data['register']);
                        $result = $user->add($user_data);
                        
                        if(!empty($result)){
                            echo 'ok,注册成功，请前往登录';
                            exit;
                        }else{
                            echo '注册失败，请重新注册';
                            exit;
                        }

                }elseif(!empty($_POST) && $_POST['login'] == true){

                    $user_name = I('user_name');
                    $password = I('user_password');
                    $verify_code = I('verify');
                    $Verify = new \Think\Verify();

                        if($Verify->check($verify_code)){
                            $check = $user->do_login($user_name,$password);
                            // var_dump($check);exit;
                            if($check[0] == '验证合法'){
                                session('user_id',$check['id']);
                                session('user_name',$check['user_name']);
                                echo 'ok';
                                exit;
                            }else{
                                echo $check['0'];
                                exit;
                            }
                        }else{
                            echo '验证码错误';
                            exit;
                        }                 
                }

        }

        layout(false);
        $this->display();
    }

    /**
    * 验证码功能
    */
    public function img_verify(){
        $config = array('imageW'=>'100','imageH'=>'30','fontSize'=>'15','length'=>'4','useNoise'=>false,'useCurve'=>false,'useImgBg'=>false);
        $Verify = new \Think\Verify($config);
        $Verify->entry();
    }

    public function html_error(){
        $this->display();
    }

}