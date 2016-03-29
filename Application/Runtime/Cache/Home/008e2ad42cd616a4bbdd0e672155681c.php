<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
   
    <link rel="stylesheet" href="/task_system/Public/js/bootstrap-3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/task_system/Public/js/bootstrap-3.3.5/css/bootstrap.css">
    <link rel="stylesheet" href="/task_system/Public/css/login_register.css">
    <script src="/task_system/Public/js/jquery.js"></script>
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
        display:none;
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
        bottom:0px;
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
        <img src="/task_system/Public//images/close.png" alt="" class='img_mess_top'>
    </div>

    <h4 class='p_mess' style='color:red;'>请输入完整的选项请输入完整的选项</h4>
</div>





    <div class="content">
        <div class="wrap_left">
            <div class="register_title">
                <center><h2>注册</h2></center>
            </div>
<form action="<?php echo U(Index/register);?>" method='post'>
            <div class="register_content">
            <input type="hidden" name='register' value='register'>
                <p>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="用户名" name='user_name'>
                </p>

                <p>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </p>

                <p>
                <input type="password" class="form-control" id="exampleInputEmail1" placeholder="密码" name='user_password'>
                </p>

                <p>
                <input type="password" class="form-control" id="exampleInputEmail1" placeholder="确认密码" name='user_password_again'>
                </p>

                <p style='border:0px solid #000;width:200px;margin:0px auto;'>
                <input class="btn btn-default" id='register' type="button" value="注册" style='width:100%;height:40px'>
                </p>
            </div>
</form>


        </div>
        <div class="wrap_center"></div>
        <div class="wrap_right">
            <div class="login_title">
                <center><h2>登录</h2></center>
            </div>
<form action="<?php echo U('Index/user');?>" method='post'>
            <div class="login_content">
            <input type="hidden" name='login' value='login'>
                <p>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="用户名" name='login_user_name'>
                </p>

                <p>
                <input type="password" class="form-control" id="exampleInputEmail1" placeholder="密码" name='login_user_password'>
                </p>

                <p id='verify'>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="验证码" name='verify' style='width:150px'>
                <img src="<?php echo U('Index/img_verify');?>" id='img_verify' alt="" style='float:right;margin-right:20px'>
                </p>

                <p style='border:0px solid #000;width:200px;margin:0px auto;'>
                <input class="btn btn-default" type="button" id='login' value="登录" style='width:100%;height:40px'>
                </p>

            </div>
</form>
        </div>
    </div>



</body>
<script>

    $('#img_verify').click(function(){
        $('#img_verify').attr('src',"<?php echo U('Index/img_verify');?>");
    });

    //关闭提示信息
    $(".img_mess_top").click(function(){
        $('.message').hide(800);
        window.location.reload();
    });

    //注册功能
    $("#register").click(function(){
        var register = $("input[name='register']").val();
        var user_name = $("input[name='user_name']").val();
        var user_password = $("input[name='user_password']").val();
        var user_password_again = $("input[name='user_password_again']").val();
        if(register.length >0 & user_name.length > 0 & user_password.length > 0 & user_password_again.length > 0){
            $.post(
                "<?php echo U('Index/user');?>",
                {'register':register,
                'user_name':user_name,
                'user_password':user_password,
                'user_password_again':user_password_again,},
                function(data){
                    if(data.substr(0,2) == 'ok'){
                        $('.p_mess').css('color','green');
                    }
                        $(".p_mess").html(data);
                        $(".message").show(800);
                }
            );
        }else{
            $(".p_mess").html('请输入完整的选项');
            $(".message").show(800);
        }
    });


    //登录功能
    $("#login").click(function(){
        var login = $("input[name='login']").val();
        var user_name = $("input[name='login_user_name']").val();
        var user_password = $("input[name='login_user_password']").val();
        var verify = $("input[name='verify']").val();
        if(login.length > 0 & user_name.length > 0 & user_password.length > 0 & verify.length > 0){
            // alert(login+'+'+user_name+'+'+user_password+'+'+verify);
            $.post(
                "<?php echo U('Index/user');?>",
                {'login':login,
                'user_name':user_name,
                'user_password':user_password,
                'verify':verify,},
                function(data){
                    if(data.substr(0,2) == 'ok'){
                        window.location.href="<?php echo U('Index/index');?>"
                    }
                        $(".p_mess").html(data);
                        $(".message").show(800);
                }

            )
        }else{
            $(".p_mess").html('请输入完整的选项');
            $(".message").show(800);
        }
    });



</script>
</html>