<?php
namespace Home\Model;
use Think\Model;
class user_centerModel extends Model {
    /*protected $fileds = array(
        'id,user_name,sex,email,qq,city,work,motto,user_tag,user_img,groupID,user_info,user_img,user_tag','_pk'=>'user_name'
    );*/

    protected $_validate  = array(
        array('user_name','require','请刷新页面或用户名不存在',1),
        array('sex','require','请填写性别',1),
        array('email','email','请填写Email地址',1),
        array('qq','10','请输入你的QQ号',1,'length'),
        array('work','require','请填写工作情况',1),
        array('city','require','请填写地区信息',1),
        array('motto','require','请填写座右铭',1),
    );

    /**
    * 判断用户是否存在
    */
    public function find_user($user_name){
        $user                      = $this->field('user_name')->where("user_name = '$user_name'")->find();

        if(!empty($user)){
            return 'in';exit;
        }else{
            return 'out';exit;
        }
    }


    /**
    *  搜索用户
    */
    public function search_user($user_name){
        if(!empty($user_name) && is_string($user_name)){
            $user_info             = $this->field('user_name,sex,email,qq,motto,user_tag,user_img')->where("user_name = '$user_name'")->find();
            $user                  = M('User');
            $user_id               = $user->field('id')->where("user_name = '$user_name'")->find();
            if(!empty($user_info)){
                $user_info             = array_merge($user_id,$user_info);
                return $user_info;exit;
            }

            if(!empty($user_id)){
                $user_name             = array('user_name'=>$user_name);
                $user_info             = array_merge($user_id,$user_name);
                return $user_info;exit;
            }

            return false;exit;
        }else{
            return false;exit;
        }    



    }

    /**
    *  修改头像
    */
    public function save_pic($pic_number){
        if(!empty($pic_number)){
            $pic_add = "/task_system/Public//images/touxiang/touxiang$pic_number.png";
            $pic_add = array('user_img'=>$pic_add);
            $user_name = session('user_name');
            $result = $this->where("user_name = '$user_name'")->save($pic_add);
                if(!empty($result)){
                    return true;exit;
                }else{
                    return false;exit;
                }

        }
        
        return false;
    }

    /**
    *  修改标签
    */
    public function save_tag($tags,$user_name){
        if(!empty($tags) && !empty($user_name)){
            $tags = trim($tags,',');
            $tag_data = $this->field('user_tag')->where("user_name = '$user_name'")->find();
                if(!empty($tag_data['user_tag'])){
                    $tags = array($tags);
                    $mysql_tags = explode(',',$tag_data['user_tag']);
                    $tags_number = count($mysql_tags);
                    if($tags_number < 7){
                        $array_tags = array_merge($tags,$mysql_tags);
                        $string_tags = implode(',',$array_tags);
                        $tags = array('user_tag'=>$string_tags);
                        $result = $this->where("user_name = '$user_name'")->save($tags);
                            if(!empty($result)){
                                echo 'ok';exit;
                            }else{
                                echo '添加标签失败，请刷新页面进行操作';exit;
                            }
                    }

                    return '标签已超过6个了';exit;
                }else{
                    $tags = $tags.',';
                    $new_tags = array('user_tag'=>$tags);
                    $result = $this->where("user_name = '$user_name'")->save($new_tags);
                        if(!empty($result)){
                            echo 'ok';exit;
                        }else{
                            echo '添加标签失败，请刷新页面进行操作';exit;
                        }
                }
        }else{
            return false;
        }




    }














}


?>