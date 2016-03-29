<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
        if(empty(session('user_name'))){
            $this->error('请登录后再进行操作',U('Index/user'),2);
        }
        $this->display();
    }

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
                            if($check[0] === '验证合法'){
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

    public function img_verify(){
        $config = array('imageW'=>'100','imageH'=>'30','fontSize'=>'15','length'=>'4','useNoise'=>false,'useCurve'=>false,'useImgBg'=>false);
        $Verify = new \Think\Verify($config);
        $Verify->entry();
    }

}