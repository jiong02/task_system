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
 <link rel="stylesheet" href="/task_system/Public/css/search.css"> 
    <div class="content">
        <div class="content_search">
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="请输入你需要查找的好友">
            <input type="button" class="btn btn-defaultt" style='background-color:#3278B3;color:#fff;width:80px;' value='搜索'>
        
        
    
    <div class="content_left">
        <div class="fri_pic">
            
        </div>
        
        <div class="fri_info">
            <div class="infos_left">
                <h4>呢称：</h4>
                <span>奇怪的机器人</span>
            </div>

            <div class="infos_right">
                <h4>性别：</h4>
                <span>男</span>
            </div>

            <div class="infos_left">
                <h4>邮箱：</h4>
                <span>1312623396@qq.com</span>
            </div>

            <div class="infos_right">
                <h4>QQ：</h4>
                <span>1312623396</span>
            </div>

            <div class="clean"></div>

            <div class="infos_content">
                <h4>座右铭：</h4>
                <span>刹那的光辉</span>
            </div>

            <div class="infos_tag" style='height:75px'>
                <p>个人标签:</p>
                <div class="info_tag">
                    <p id='pp'>HTML</p>
                </div>

                <div class="info_tag">
                    <p id='pp'>HTML</p>
                </div>

                <div class="info_tag">
                    <p id='pp'>HTML</p>
                </div>
            </div>

            <input type="button" class="btn btn-default" style='background-color:#FF6600;color:#fff;width:100px;display:block;margin:0px auto;' value='关注'>

        </div>

    </div>
</div>
    <div class="content_right">
        <div class="con_left">
            <p class='left_p'>奇怪的机器人</p>
            <div class="fri_tag">
                <p>已关注</p>
            </div>
        </div>

        <div class="con_left">
            <p class='left_p'>奇怪的机器人</p>
            <div class="fri_tag">
                <p>已关注</p>
            </div>
        </div>

        <div class="con_left">
            <p class='left_p'>奇怪的机器人</p>
            <div class="fri_tag">
                <p>已关注</p>
            </div>
        </div>
    </div>

    </div>



    
</body>
</html>