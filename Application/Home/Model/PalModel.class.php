<?php
namespace Home\Model;
use Think\Model;
class PalModel extends Model {


    /**
    *  获得好友列表
    */
    public function friends_list($user_id){
        $friends_id          = $this->field('attention_user')->where("login_user = '$user_id'")->select();
        $friends             = '';
        foreach($friends_id as $k=>$v){
            $friends        .=  $v['attention_user'].',';     
        }

        $friends             = trim($friends,',');
        $user_mod            = M('user');
        $friends_list        = $user_mod->field('user_name')->where("id in ($friends)")->select();
        return $friends_list;exit;
    }

    /**
    *  关注好友并返回前端页面
    */
    public function attention_friends($user_id,$session_id){
        $user                = D('User');
        $user_data           = $user->field('user_name,id')->find($user_id);

        if(empty($user_data)){
            return '查找不到用户';exit;
        }

        if($session_id == $user_id){
            return '自己关注自己，你太自恋啦';exit;
        }

        $result          = $this->where("login_user = $session_id and attention_user = $user_id")->select();

        if(!empty($result)){
            return '你已经关注你的好友啦';exit;
        }

        $mysql           = array('login_user'=>$session_id,'attention_user'=>$user_id);
        $result          = $this->add($mysql);

        if(!empty($result)){
            return $user_data;exit;
        }else{
            return '关注失败，刷新页面重新操作';exit;
        }

    }
















}

?>