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
    .message{
        width:350px;
        height:200px;
        position:fixed;
        top:0;
        bottom:0;
        margin:auto;
        left:0;
        right:0;
        box-shadow:1px 1px 10px 10px #ccc ;
        font-family: '微软雅黑';
        background:#fff;
        z-index: 9999;
        display:;
    }
    .mess_top{
        width:98%;
        border-bottom:2px solid #CCCCCC;
        height:40px;
        position: relative;
        margin:0px auto;
    }
    .mess_top h3{
        position: absolute;
        font-size: 18px;
        font-weight: bold;
        left:10px;
    }
    .img_mess_top{
        position: absolute;
        right:5px;
        bottom:11px;
        cursor: pointer;
    }
    .p_mess{
        line-height: 130px;
        text-align: center;
        font-size: 18px;
        font-weight: bold;
    }
    </style>
</head>
<body>
<div class="message">
    <div class="mess_top">
        <h3>提示</h3>
        <img src="/task_system/Public/images/close.png" alt="" class='img_mess_top'>
    </div>

    <h4 class='p_mess' style='color:red;'>请输入完整的选项请输入完整的选项</h4>
</div>
     <div class="nav">
        <a href="<?php echo U('Index/index');?>" style='font-weight: bold;margin-left:15px;'>XX系统</a>
        <div class="nav_con">
            <ul>
                <li><a href="<?php echo U('Task/task_all');?>">任务</a></li>
                <li><a href="<?php echo U('Pal/search');?>">好友</a></li>
                <li><a href="<?php echo U('Pal/login_info');?>">个人中心</a></li>
            </ul>
        </div>
        <div style='float:right;margin:5px 50px 0px 0px;cursor:'>
            <h4 style='font-weight: bold;'><?php echo $_SESSION['user_name']; ?></h4>
        </div>
    </div>


    <div class="clean"></div>

</body>
</html>
 <link rel="stylesheet" href="/task_system/Public/css/login_info.css"> 
<style>
    .add_tag{
        width:600px;
        height:250px;
        position:fixed;
        margin:auto;
        left:0;
        right:0;
        bottom:0;
        top:0;
        background:#fff;
        box-shadow:1px 1px 10px 10px #ccc ;
        font-family: '微软雅黑';
        z-index: 9999;
        display:none;
    }
    .add_top{
        width:100%;
        height:100px;
        border:0px solid #000;
    }
    .add_tag h3{
        margin:15px 0px 0px 15px;
        float:left;
    }
    .add_img{
        margin:18px 15px 0px 0px;
        float:right;
        cursor: pointer;
    }
    .tag_input{
        width:80%;
        height:20%;
        margin:0px auto;
        display:block;
        border-radius: 5px;
    }
    #tijiao{
        position:absolute;
        bottom:15px;
        right:15px;
    }
</style>
    <div class="content">
        <div class="con_left">
            <img src="<?php echo ($user_info["user_img"]); ?>" alt="" class='con_img'  id='save_img'>
        </div>

        <div class="con_right">
            
            <input type="hidden" name='post_type' value='user_info'>

            <div class="row">
              <div class="col-md-6">
              <p class='col_p'>用户名：</p>
              <input class="form-control input-lg" type="text" placeholder="呢称" readonly name='user_name' value="<?php echo session('user_name');?>">
              </div>

              <div class="col-md-6">
              <p class='col_p'>性别：</p>
              <input class="form-control input-lg" type="text" placeholder="性别" name='sex' value="<?php echo ($user_info["sex"]); ?>">
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
              <p class='col_p'>邮箱：</p>
              <input class="form-control input-lg" type="text" placeholder="邮箱" name='email' value="<?php echo ($user_info["email"]); ?>">
              </div>

              <div class="col-md-6">
              <p class='col_p'>QQ：</p>
              <input class="form-control input-lg" type="text" placeholder="QQ" name="qq" value="<?php echo ($user_info["qq"]); ?>">
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
              <p class='col_p'>地区：</p>
              <input class="form-control input-lg" type="text" placeholder="地区" name='city' value="<?php echo ($user_info["city"]); ?>">
              </div>

              <div class="col-md-6">
              <p class='col_p'>工作情况：</p>
              <input class="form-control input-lg" type="text" placeholder="工作情况" name='work' value="<?php echo ($user_info["work"]); ?>">
              </div>
            </div>

            <div class="col-xs-10">
              <p class='col_p'>座右铭：</p>
              <input class="form-control input-lg" type="text" placeholder="座右铭" name='motto' value="<?php echo ($user_info["motto"]); ?>">
            </div>

            <div class="col-xs-10">
              <p class='col_p'>个人标签：</p>
              <div class="con_tag" id='add'>
                  <span>
                      添加
                  </span>
              </div>
<?php if(is_array($user_tags)): foreach($user_tags as $key=>$vo): ?><div class="con_tag">
                  <span>
                      <?php echo ($vo); ?>
                  </span>
              </div><?php endforeach; endif; ?>

            </div>

            <div class="clean"></div>

            <input type="button" class="btn btn-default" style='background-color:#3278B3;color:#fff;width:100px;height:45px;font-size:20px' value='提交' id='user_info'>

        </div>
  

    </div>

    <div class="content_mark"></div>

<div class="login_img">
  <h4>选择头像</h4>
  <div class="img_left">
    <img src="<?php echo ($user_info["user_img"]); ?>" alt="" id='save_img_'>
  </div>
  <div class="img_right">
    <div class="wrap_img" style="background-image: url('/task_system/Public/images/touxiang/touxiang1.png');" data='1'></div>
    <div class="wrap_img" style="background-image: url('/task_system/Public/images/touxiang/touxiang2.png');" data='2'></div>
    <div class="wrap_img" style="background-image: url('/task_system/Public/images/touxiang/touxiang3.png');" data='3'></div>
    <div class="wrap_img" style="background-image: url('/task_system/Public/images/touxiang/touxiang4.png');" data='4'></div>
    <div class="wrap_img" style="background-image: url('/task_system/Public/images/touxiang/touxiang5.png');" data='5'></div>
    <div class="wrap_img" style="background-image: url('/task_system/Public/images/touxiang/touxiang6.png');" data='6'></div>
  </div>
  <input type="button" class="btn btn-defaultt" style='background-color:#3278B3;color:#fff;width:80px;margin:20px 60px 0px 0px;float:right;' value='提交' id='user_img'>
</div>

<div class="add_tag">
    <div class="add_top">
        <h3>标签</h3>
        <img src="/task_system/Public/images/close.png" alt="" class='add_img'>
    </div>

    <input type="text" class='tag_input form-control' id='tag'>
    <input type="button" class="btn btn-default" style="background-color:#3278B3;color:#fff;width:100px;height:45px;font-size:20px;position: absolute;bottom:15px;right:15px;" value="提交" id='user_tag'>
</div>

    
</body>
<script>
//添加标签
$('#user_tag').click(function(){
  var tag = $('#tag').val();
    if(tag.length >0){
      $.post(
        "<?php echo U('Pal/user_tag');?>",
        {'user_tag':tag},
        function(data){
          if(data == 'ok'){
            window.location.reload();
          }else{
            alert(data);
            $('.add_tag').hide(800);
          }
          
        }
      );
    }
});

//选择头像
$('#user_img').click(function(){
  var click_img = $("#click_img").parent().attr('data');
  if(click_img.length > 0){
    $.post(
      "<?php echo U('Pal/user_img');?>",
      {'pic_number':click_img},
      function(data){
        if(data == 'ok'){
        var pic_add = "/task_system/Public//images/touxiang/touxiang"+click_img+".png";
        $('#save_img').attr('src',pic_add);
        $('#save_img_').attr('src',pic_add);
        }else{
          alert(data);

        }

      }

    );
  }
});





//用户信息
$('#user_info').click(function(){
  var post_type   = $("input[name='post_type']").val();
  var user_name   = $("input[name='user_name']").val();
  var sex         = $("input[name='sex']").val();
  var email       = $("input[name='email']").val();
  var qq          = $("input[name='qq']").val();
  var city        = $("input[name='city']").val();
  var work        = $("input[name='work']").val();
  var motto       = $("input[name='motto']").val();
  console.log(sex+'+'+email+'+'+qq+'+'+city+'+'+work+'+'+motto);
  if(user_name.length > 0 && sex.length > 0 && email.length > 0 && qq.length > 0 && city.length > 0 && work.length > 0 && motto.length > 0){
    $.post(
      "<?php echo U('Pal/login_info');?>",
      {'post_type':post_type,
      'user_name':user_name,
      'sex':sex,
      'email':email,
      'qq':qq,
      'city':city,
      'work':work,
      'motto':motto,},
      function(data){
        $(".p_mess").html(data);
        $(".message").show(800);
      }
    )


  }else{
    $(".p_mess").html('请输入完整的选项');
    $(".message").show(800);
  }



});

//展示 添加标签
$('#add').click(function(){
  $('.add_tag').show(800);
});

//隐藏 添加标签
$(".add_img").click(function(){
        $('.add_tag').hide(800);
    });

//头像的展示/隐藏
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

//选择头像
$(function(){
    $(".wrap_img").click(function(){
        var pic_number = ' ';
        $("#click_img").remove();
        var html_img = '<img src="/task_system/Public/images/ok.png" id="click_img" alt="">';
        $(this).append(html_img);
        var pic_number = $(this).attr("data");
        // console.log(pic_number);
    });
});


</script>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
    
</body>
<script>
    $('.message').css('display','none');
    $(".img_mess_top").click(function(){
        $('.message').hide(800);
    });



    
</script>
</html>