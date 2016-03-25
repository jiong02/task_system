<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
   
    <link rel="stylesheet" href="/task_system/Public/js/bootstrap-3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/task_system/Public/js/bootstrap-3.3.5/css/bootstrap.css">
    <script src='/task_system/Public/js/bootstrap-3.3.5/js/jquery.min.js'></script>
    <style>

    </style>
</head>
<body>

     <div class="nav">
        <a href="<?php echo U('Index/index');?>" style='font-weight: bold;margin-left:15px;'>XX系统</a>
        <div class="nav_con">
            <ul>
                <li><a href="<?php echo U('Task/task_all');?>">任务</a></li>
                <li><a href="<?php echo U('Pal/search');?>">好友</a></li>
                <li><a href="<?php echo U('Pal/login_info');?>">个人中心</a></li>
            </ul>
        </div>
    </div>


    <div class="clean"></div>




</body>
</html>
 <link rel="stylesheet" href="/task_system/Public/css/task_all.css"> 
    <div class="content">
        <div class="content_left">
            <strong style='display:block;'>未完成</strong>
            <div class="task_info">
                <div class="info_top">
                    <input type="checkbox" class='check'>
                    <div class="info_grade">
                        <p class='grade_p'>紧急</p>
                    </div>
                    <p class='name_p'>奇怪的机器人</p>
                    <div class="date">
                        <p>2016-03-18</p>
                    </div>
                </div>
                <div class="sys_name">
                    <p>&nbsp;进销存系统&nbsp;</p>
                </div>
                <p class='ac_info'>添加销售功能</p>
            </div>
            
            <div class="task_info">
                <div class="info_top">
                    <input type="checkbox" class='check'>
                    <div class="info_grade">
                        <p class='grade_p'>紧急</p>
                    </div>
                    <p class='name_p'>奇怪的机器人</p>
                    <div class="date">
                        <p>2016-03-18</p>
                    </div>
                </div>
                <div class="sys_name">
                    <p>&nbsp;进销存系统&nbsp;</p>
                </div>
                <p class='ac_info'>添加销售功能</p>
            </div>
        </div>

        <div class="content_right">
            <strong style='display:block;'>已完成</strong>
            <div class="task_info">
                <div class="info_top">
                    <input type="checkbox" class='check'>
                    <div class="info_grade">
                        <p class='grade_p'>紧急</p>
                    </div>
                    <p class='name_p'>奇怪的机器人</p>
                    <div class="date">
                        <p>2016-03-18</p>
                    </div>
                </div>
                <div class="sys_name">
                    <p>&nbsp;进销存系统&nbsp;</p>
                </div>
                <p class='ac_info'>添加销售功能</p>
            </div>
        </div>
    </div>


<!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->


        <div class="edit">
            <h3>编辑任务</h3>

            <div class="col-sm-10">
                <h4>任务等级</h4>
            </div>

            <div class="col-sm-10">
                <select name="" id="" class=" btn btn-default dropdown-toggle">
                    <option value="1">紧急</option>
                    <option value="2">一般</option>
                    <option value="3">正常</option>
                </select>
            </div>


            <div class="col-sm-10">
                <h4>任务内容</h4>
                <textarea class="form-control" rows="10" style='height:200px'></textarea>
            </div>

            <div class="col-sm-10">
                <h4>任务分配</h4>
                <div class="checkbox">
                    <label>
                      <input type="checkbox" value='' > Check me out
                    </label>
                </div>

                <div class="checkbox">
                    <label>
                      <input type="checkbox" value='' > Check me out
                    </label>
                </div>

                <div class="checkbox">
                    <label>
                      <input type="checkbox" value='' > Check me out
                    </label>
                </div>

                                <div class="checkbox">
                    <label>
                      <input type="checkbox" value='' > Check me out
                    </label>
                </div>

                <div class="checkbox">
                    <label>
                      <input type="checkbox" value='' > Check me out
                    </label>
                </div>

                <div class="checkbox">
                    <label>
                      <input type="checkbox" value='' > Check me out
                    </label>
                </div>

                                <div class="checkbox">
                    <label>
                      <input type="checkbox" value='' > Check me out
                    </label>
                </div>

                <div class="checkbox">
                    <label>
                      <input type="checkbox" value='' > Check me out
                    </label>
                </div>

            </div>

            <div class="col-sm-10">
                <h4>截止时间</h4>
                <input type='date' class="form-control" id='datetimepicker4'/> 


            </div>

            <div class="clean"></div>

            <input type="button" class="btn btn-default" style='background-color:#3278B3;color:#fff;width:90px;height:40px;font-size:20px;margin:20px 0px 0px 20px' value='提交'>

        </div>


<div class="content_mark"></div>
    
</body>
<script>
$(function(){
    $('.ac_info').click(function(){
        $('.edit').show(1000);
        $('.content_mark').show('slow');
    });
    $('.content_mark').click(function(){
        $('.edit').hide(800);
        $('.content_mark').hide(800);
    });
});
</script>
</html>