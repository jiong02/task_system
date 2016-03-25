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
 <link rel="stylesheet" href="/task_system/Public/css/index.css"> 
    <div class="center_left">
        <h4>个人项目</h4>
        <a href="<?php echo U('Task/task');?>">
            <div class="project" style='background-image: url("/task_system/Public/images/project_a.jpg");'>
                    <p>进销存系统</p>
            </div>
        </a>
        
        <a href="<?php echo U('Task/task');?>">
            <div class="project" style='background-image: url("/task_system/Public/images/project_b.jpg");'>
                    <p>进销存系统</p>
            </div>
        </a>

        <a href="<?php echo U('Task/task');?>">
            <div class="project" style='background-image: url("/task_system/Public/images/project_c.jpg");'>
                    <p>进销存系统</p>
            </div>
        </a>

        <a href="<?php echo U('Task/task');?>">
            <div class="project" style='background-image: url("/task_system/Public/images/project_d.jpg");'>
                    <p>进销存系统</p>
            </div>
        </a>

        <a href="<?php echo U('Task/task');?>">
            <div class="project" style='background-image: url("/task_system/Public/images/project_e.jpg");'>
                    <p>进销存系统</p>
            </div>
        </a>

        
        <div class="project click_pro" style='border:1px solid #DFDFDF;cursor:pointer;'>
                <img src="/task_system/Public/images/add.png" alt="">
                <p style='color:#4F4F4F;position:absolute;top:55%;left:32%;font-weight: bold;'>添加项目</p>
        </div>
        
        


    </div>

    <div class="center_right">
        <h4>未完成的任务</h4>
        <div class="center_right_task">
            <input type="checkbox">
            <div class="type">
                <span>紧急</span>
            </div>
            <p>创建系统创建系统创建系统创建系统创建系统创建系统</p>
        </div>

        <div class="center_right_task">
            <input type="checkbox">
            <div class="type">
                <span>紧急</span>
            </div>
            <p>创建系统创建系统创建系统创建系统创建系统创建系统</p>
        </div>
    </div>    

    <div class="clean"></div>

<form action="#" method='post'>

    <div class="new_project" >
        <h4>项目图片</h4>
        
        <div class="imgs">
            <div class="pro_img" style="background-image: url('/task_system/Public/images/project_a.jpg');" data="1">
                <input type="hidden" name='pic' value='1' id='pic'>
            </div>

            <div class="pro_img" style="background-image: url('/task_system/Public/images/project_b.jpg');" data="2">
                <input type="hidden" name='pic' value='2'>
            </div>

            <div class="pro_img" style="background-image: url('/task_system/Public/images/project_c.jpg');" data="3">
                <input type="hidden" name='pic' value='3'>
            </div>

            <div class="pro_img" style="background-image: url('/task_system/Public/images/project_d.jpg');" data="4">
                <input type="hidden" name='pic' value='4'>
            </div>

            <div class="pro_img" style="background-image: url('/task_system/Public/images/project_e.jpg');" data="5">
                <input type="hidden" name='pic' value='5'>
            </div>

            <div class="pro_img" style="background-image: url('/task_system/Public/images/project_f.jpg');" data="6">
                <input type="hidden" name='pic' value='6'>
            </div>
        </div>


        <div class="clean"></div>

        <h4>项目信息</h4>

         <input type="text" class="form-control" placeholder="项目名称" aria-describedby="sizing-addon2">

         <textarea class="form-control" rows="5" placeholder="项目简介" style='margin:15px 0px'></textarea>

         <h4>成员</h4>

         <div class="member">
             <div class="checkbox">
              <label>
                <input type="checkbox" value="">
                火狐
              </label>
            </div>

            <div class="checkbox">
              <label>
                <input type="checkbox" value="">
                火狐
              </label>
            </div>

            <div class="checkbox">
              <label>
                <input type="checkbox" value="">
                火狐
              </label>
            </div>

         </div>
         

        <div class="clean"></div>

        <input type="button" class="btn btn-default" style='background-color:#3278B3;color:#fff;width:80px;' value='创建项目'>

    </div>

    <div class="content_mark"></div>


</form>
    
</body>
<script>
$(function(){
    $('.click_pro').click(function(){
        $('.new_project').show(1000);
        $('.content_mark').show('slow');
    });
    $('.content_mark').click(function(){
        $('.new_project').hide(800);
        $('.content_mark').hide(800);
    });
});

$(function(){
    $(".pro_img").click(function(){
        var pic_number = ' ';
        $("#click_img").remove();
        var html_img = '<img src="/task_system/Public/images/ok.png" id="click_img" alt="">';
        $(this).append(html_img);
        pic_number = $(this).attr("data");
    });
});

</script>
</html>