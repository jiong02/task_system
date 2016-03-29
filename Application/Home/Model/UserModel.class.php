<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model {
    protected $fields  = array(
        'id','user_name','user_password','user_password_again',
    );


    protected $_validate = array(
        array('user_name','require','请输入用户名或用户名已存在',1,'unique'),
        array('user_password','require','请输入密码',1),
        array('user_password_again','require','请输入确认密码',1),
        array('user_password_again','user_password','密码不一致',1,'confirm'),
    );

    public function do_login($user_name,$password){
        $user_data = $this->field('id,user_name,user_password')->where("user_name = "."'".$user_name."'")->find();

            if(empty($user_data)){
                return array('用户不存在');
                exit;
            }

            if($user_data['user_password'] == $password){
                $a = array('验证合法');
                $new_array = array_merge($a,$user_data);
                return $new_array;
                exit;
            }else{
                return array('密码错误');
                exit;
            }

    }
















}

?>