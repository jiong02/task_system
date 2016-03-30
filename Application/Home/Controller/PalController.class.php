<?php
namespace Home\Controller;
use Think\Controller;
class PalController extends CommonController {
    protected $session_user_name = '';

    public function _initialize(){
        if(empty(session('user_name'))){
            $this->error('请登录后再进行操作',U('Index/user'),2);
        }

        $this->session_user_name = session('user_name');

        parent::_initialize();
    }

    /**
    *  
    */
    public function search(){
        $this->display();
    }

    public function login_info(){
        $user_name = session('user_name');
        $pal = D('user_center');
        $user_info = $pal->field('id,groupID',true)->where("user_name='$user_name'")->find();
        $new_tags = explode(',',$user_info['user_tag']);
        $count = count($new_tags) - 1;
        unset($new_tags[$count]);

        $post_type = I('post_type');
        if(IS_POST && $post_type == 'user_info'){
            $pal_data = $pal->create();

            if(!empty($pal_data)){
                unset($pal_data['user_name']);
                $mysql_data = $pal->where('user_name='."'".$user_name."'")->save();

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

    public function user_tag(){
        $user_tag = $_POST['user_tag'];
        if(IS_POST && is_string($user_tag)){
            $user_tag = strtoupper($user_tag);
            $user_name = $this->session_user_name;
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