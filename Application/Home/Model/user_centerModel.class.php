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
    *  修改图片
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

















}


?>