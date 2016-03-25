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
 <link rel="stylesheet" href="/task_system/Public/css/login_info.css"> 
    <div class="content">
        <div class="con_left">
            <img src="/task_system/Public//images/touxiang/touxiang2.png" alt="" class='con_img'>
        </div>

        <div class="con_right">
            
            <div class="row">
              <div class="col-md-6">
              <p class='col_p'>呢称：</p>
              <input class="form-control input-lg" type="text" placeholder="呢称">
              </div>

              <div class="col-md-6">
              <p class='col_p'>性别：</p>
              <input class="form-control input-lg" type="text" placeholder="性别">
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
              <p class='col_p'>邮箱：</p>
              <input class="form-control input-lg" type="text" placeholder="邮箱">
              </div>

              <div class="col-md-6">
              <p class='col_p'>QQ：</p>
              <input class="form-control input-lg" type="text" placeholder="QQ">
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
              <p class='col_p'>地区：</p>
              <input class="form-control input-lg" type="text" placeholder="地区">
              </div>

              <div class="col-md-6">
              <p class='col_p'>工作情况：</p>
              <input class="form-control input-lg" type="text" placeholder="工作情况">
              </div>
            </div>

            <div class="col-xs-10">
              <p class='col_p'>座右铭：</p>
              <input class="form-control input-lg" type="text" placeholder="座右铭">
            </div>

            <div class="col-xs-10">
              <p class='col_p'>个人标签：</p>
              <div class="con_tag">
                  <span>
                      HTML
                  </span>
              </div>

              <div class="con_tag">
                  <span>
                      PHP
                  </span>
              </div>

              <div class="con_tag">
                  <span>
                      CSS
                  </span>
              </div>

              <div class="con_tag">
                  <span>
                      CSS
                  </span>
              </div>

              <div class="con_tag">
                  <span>
                      CSS
                  </span>
              </div>

              <div class="con_tag">
                  <span>
                      CSS
                  </span>
              </div>

              <div class="con_tag">
                  <span>
                      CSS
                  </span>
              </div>

              <div class="con_tag">
                  <span>
                      CSS
                  </span>
              </div>

            </div>

            <div class="clean"></div>

            <input type="button" class="btn btn-default" style='background-color:#3278B3;color:#fff;width:100px;height:45px;font-size:20px' value='提交'>

        </div>
    

    </div>

    <div class="content_mark"></div>

<div class="login_img">
  <h4>选择头像</h4>
  <div class="img_left">
    <img src="/task_system/Public/images/touxiang/touxiang5.png" alt="">
  </div>
  <div class="img_right">
    <div class="wrap_img" style="background-image: url('/task_system/Public/images/touxiang/touxiang1.png');"></div>
    <div class="wrap_img" style="background-image: url('/task_system/Public/images/touxiang/touxiang2.png');"></div>
    <div class="wrap_img" style="background-image: url('/task_system/Public/images/touxiang/touxiang3.png');"></div>
    <div class="wrap_img" style="background-image: url('/task_system/Public/images/touxiang/touxiang4.png');"></div>
    <div class="wrap_img" style="background-image: url('/task_system/Public/images/touxiang/touxiang5.png');"></div>
    <div class="wrap_img" style="background-image: url('/task_system/Public/images/touxiang/touxiang6.png');"></div>
  </div>
  <input type="button" class="btn btn-defaultt" style='background-color:#3278B3;color:#fff;width:80px;margin:20px 60px 0px 0px;float:right;' value='提交'>
</div>



    
</body>
<script>
$(function(){
    $('.con_img').click(function(){
        $('.login_img').show(1000);
        $('.content_mark').show('slow');
    });
    $('.content_mark').click(function(){
        $('.login_img').hide(800);
        $('.content_mark').hide(800);
    });
});

$(function(){
    $(".wrap_img").click(function(){
        var pic_number = ' ';
        $("#click_img").remove();
        var html_img = '<img src="/task_system/Public/images/ok.png" id="click_img" alt="">';
        $(this).append(html_img);
        pic_number = $(this).attr("data");
    });
});

</script>
</html>