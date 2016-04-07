<?php
namespace Home\Model;
use Think\Model;
class ProjectModel extends Model {

    public function find_project($pro_name){
        if(!empty($pro_name)){
            $pro_data             = $this->field('project_name')->where("project_name = '$pro_name'")->find();

            if(!empty($pro_data)){
                return '项目已存在，请使用其他名称';exit;
            }

            return array($pro_name);exit;
        }

        return '请输入项目名称';exit;


    }













}