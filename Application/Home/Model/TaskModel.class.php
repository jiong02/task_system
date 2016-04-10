<?php
namespace Home\Model;
use Think\Model;
class TaskModel extends Model {

    protected $_validate = array(
        array('project_id','number','请重新进入项目',1),
        array('grade','require','请选择任务等级',1),
        array('task_content','require','请填写任务内容',1),
        array('do_user','require','请选择任务执行者',1),
        array('deadline','require','请选择截至时间',1),
    );




















}