<?php
namespace Home\Controller;
use Think\Controller;
class PalController extends CommonController {
    protected $session_user_name = '';

    public function _initialize(){
        $user_name           = session('user_name');
        if(empty($user_name)){
            $this->error('请登录后再进行操作',U('Index/user'),2);
        }

        $this->session_user_name = session('user_name');

        parent::_initialize();
    }

    /**
    *  关注功能
    */
    public function attention(){
        $user_id             = I('user_id');
        if(IS_POST && is_numeric($user_id)){
            $session_id      = session('user_id');
            $pal             = new \Home\Model\PalModel();
            $result          = $pal->attention_friends($user_id,$session_id);

            if(!empty($result) && is_array($result)){
                $this->ajaxReturn($result);exit;
            }else{
                echo $result;exit;
            }

        }
    }

    /**
    *  根据用户ID（user表）确立用户关系
    */
    public function search(){
        $pal                 = new \Home\Model\PalModel();
        $user_id             = session('user_id');
        $friends_list        = $pal->friends_list($user_id);

        if(IS_POST){
            $search          = I('search');
            $pal             = new \Home\Model\user_centerModel();
            $user_data       = $pal->search_user($search);

            if(empty($user_data)){
                return false;exit;
            }

            $this->ajaxReturn($user_data,json);
            
        }
        $this->assign('friends_list',$friends_list);
        $this->display();
    }


    /**
    *  根据用户名添加/修改 用户信息
    */
    public function login_info(){
        //获取用户信息
        $user_name             = session('user_name');
        $pal                   = new \Home\Model\user_centerModel();
        $user_info             = $pal->field('id,groupID',true)->where("user_name='$user_name'")->find();
        $new_tags              = explode(',',$user_info['user_tag']);
        $count                 = count($new_tags) - 1;
        unset($new_tags[$count]);

        //修改用户信息
        $post_type = I('post_type');
        if(IS_POST && $post_type == 'user_info'){
            $pal_data = $pal->create();


            if(!empty($pal_data)){
                $result     = $pal->find_user($user_name);

                if($result == 'in'){
                    unset($pal_data['user_name']);
                    $mysql_data = $pal->where("user_name = '$user_name'")->save($pal_data);
                }else{
                    $mysql_data = $pal->add();
                }

                if(!empty($mysql_data)){
                    echo '信息修改成功';exit;
                }else{
                    echo '信息修改失败，请刷新重新填写';exit;
                }
            }else{
                echo $pal->getError();exit;
            }
        }
        $this->assign('user_tags',$new_tags);
        $this->assign('user_info',$user_info);
        $this->display();
    }

    /**
    *  用户头像
    */
    public function user_img(){
        if(IS_POST){
            $pal = new \Home\Model\user_centerModel();
            $pic_number = I('pic_number');
            $result = $pal->save_pic($pic_number);

                if(!empty($result)){
                    echo 'ok';exit;
                }else{
                    echo '修改失败，请刷新页面进行修改';exit;
                }
        }
    }

    /**
    *  用户标签
    */
    public function user_tag(){
        $user_tag = $_POST['user_tag'];
        if(IS_POST && is_string($user_tag)){
            $user_tag = strtoupper($user_tag);
            $user_name = session('user_name');
            $pal = new \Home\Model\user_centerModel();
            $result = $pal->save_tag($user_tag,$user_name);

                if($result == 'ok'){
                    echo '标签添加成功';exit;
                }else{
                    echo $result;exit;
                }
        }



    }
















}


?>