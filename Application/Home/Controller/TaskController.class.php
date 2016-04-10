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
        $task                = new \Home\Model\TaskModel();   

        $project_id          = I('project_id');
        $member_id           = $project->field('member')->where("id = $project_id")->find();
        $member_id           = trim($member_id['member'],",");
        $member              = $user->field('id,user_name')->where("id in ($member_id)")->select();

        $task_list           = $task->field('status',true)->where("project_id = '$project_id' and status = 1")->select();

        $this->assign('task_list',$task_list);
        $this->assign('pro_id',$project_id);
        $this->assign('member_list',$member);
        $this->display();
    }

    public function create_task(){
        if(IS_POST){
            $task                    = new \Home\Model\TaskModel();   
            $task_info               = $task->create();
            $task_info['give_user']  = session('user_name'); 
            $task_info['status']     = 1;

            if(empty($task_info)){
                echo $task->getError();exit;
            }

            $do_user                 = trim($task_info['do_user'],',');
            $do_user                 = explode(',',$do_user);
            
            foreach($do_user as $k=>$v){
                $task_info['do_user']             = $v;
                $result                           = $task->add($task_info);

                if(empty($result)){
                    echo '创建任务失败，请刷新页面重新操作';exit;
                }
            }

            echo '创建任务成功';exit;
        }
    }

    public function edit_task(){
        if(IS_POST){
            $task             = new \Home\Model\TaskModel();
            $task_info        = $task->create();

            if(empty($task_info)){
                echo $task->getError();exit;
            }

            unset($task_info['project_id']);
            unset($task_info['do_user']);
            
            $result            = $task->save();

            if(!empty($result)){
                echo '修改成功';exit;
            }else{
                echo '修改失败';exit;
            } 


        }

        return false;exit;

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