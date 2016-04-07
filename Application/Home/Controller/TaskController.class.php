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
        $project             = new \Home\Model\ProjectModel();
        $user                = new \Home\Model\UserModel();
        // $task             = new \Home\Model\TaskModel();
        $project_id          = I('project_id');
        $member_id           = $project->field('member')->where("id = $project_id")->find();
        $member_id           = trim($member_id['member'],",");
        $member              = $user->field('id,user_name')->where("id in ($member_id)")->select();


        $this->assign('member_list',$member);
        $this->display();
    }

    public function task_all(){
        $this->display();
    }

    /**
    *  创建项目
    */    
    public function create_project(){ 
        if(IS_POST){
            $pro_name            = $_POST['project_name'];
            $project             = new \Home\Model\ProjectModel();
            $pro_data            = $project->find_project($pro_name);

            if(is_string($pro_data)){
                echo $pro_data;exit;
            }

            $img_code            = I('project_img');
            $pro_img             = "/task_system/Public/images/project_$img_code.jpg";
            $explain             = I('explain')?I('explain'):'';
            $member              = I('member');
            $cre_pro_user        = session('user_name');
            $add_array           = array(
                'projected_creater'        => $cre_pro_user,
                'project_name'             => $pro_name,
                'member'                   => $member,
                'project_img'              => $pro_img,
                'explain'                  => $explain,
                );

            $pro_data            = $project->add($add_array);

            if(!empty($pro_data)){
                echo '添加成功';exit;
            }else{
                echo '添加失败';exit;
            }


        }



    }








}
?>