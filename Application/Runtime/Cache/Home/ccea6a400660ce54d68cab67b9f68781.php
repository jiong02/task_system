<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
   
    <link rel="stylesheet" href="/task_system/Public/js/bootstrap-3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/task_system/Public/js/bootstrap-3.3.5/css/bootstrap.css">
    <link rel="stylesheet" href="/task_system/Public/css/login_register.css">
</head>
<body>
    <div class="content">
        <div class="wrap_left">
            <div class="register_title">
                <center><h2>注册</h2></center>
            </div>

            <div class="register_content">
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
                <input class="btn btn-default" type="submit" value="注册" style='width:100%;height:40px'>
                </p>
            </div>



        </div>
        <div class="wrap_center"></div>
        <div class="wrap_right">
            <div class="login_title">
                <center><h2>登录</h2></center>
            </div>

            <div class="login_content">
                <p>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="用户名" name='user_name'>
                </p>

                <p>
                <input type="password" class="form-control" id="exampleInputEmail1" placeholder="密码" name='user_password'>
                </p>

                <p id='verify'>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="验证码" name='verify' style='width:150px'>
                <img src="/task_system/Public//images/verify_img.png" alt="" style='float:right;margin-right:20px'>
                </p>

                <p style='border:0px solid #000;width:200px;margin:0px auto;'>
                <input class="btn btn-default" type="submit" value="登录" style='width:100%;height:40px'>
                </p>

            </div>
        </div>
    </div>





</body>
</html>