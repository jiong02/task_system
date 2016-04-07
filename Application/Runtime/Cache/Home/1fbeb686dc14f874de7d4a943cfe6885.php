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
 <link rel="stylesheet" href="/task_system/Public/css/search.css"> 
    <div class="content">
        <div class="content_search">
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="请输入你需要查找的好友">
            <input type="button" class="btn btn-defaultt" style='background-color:#3278B3;color:#fff;width:80px;' value='搜索' id='search'>
        
        
    
    <div class="content_left">
        <div class="fri_pic" >
            
        </div>
        
        <input type="hidden" name='user_id' value="">

        <div class="fri_info">
            <div class="infos_left">
                <h4>呢称：</h4>
                <span id='user_name'></span>
            </div>

            <div class="infos_right">
                <h4>性别：</h4>
                <span id='sex'></span>
            </div>

            <div class="infos_left">
                <h4>邮箱：</h4>
                <span id='email'></span>
            </div>

            <div class="infos_right">
                <h4>QQ：</h4>
                <span id='qq'></span>
            </div>

            <div class="clean"></div>

            <div class="infos_content">
                <h4>座右铭：</h4>
                <span id='motto'></span>
            </div>

            <div class="infos_tag" style='height:75px'>
                <p id='add_tag'>个人标签:</p>

            </div>

            <input type="button" class="btn btn-default" style='background-color:#FF6600;color:#fff;width:100px;display:block;margin:0px auto;' value='关注' id='attention'>

        </div>

    </div>
</div>
    <div class="content_right">
    <?php if(is_array($friends_list)): foreach($friends_list as $key=>$vo): ?><div class="con_left">
            <p class='left_p'><?php echo ($vo["user_name"]); ?></p>
            <div class="fri_tag">
                <p>已关注</p>
            </div>
        </div><?php endforeach; endif; ?>
    </div>

    </div>



    
</body>
<script>
$('#attention').click(function(){
    var user_id = $('input[name="user_id"]').val();
    if(user_id.length > 0){
        $.post(
            "<?php echo U('Pal/attention');?>",
            {'user_id':user_id},
            function(data){
                if(data.user_name){
                    $('.content_right').append('<div class="con_left"><p class="left_p">'+data.user_name+'</p><div class="fri_tag"><p>已关注</p></div></div>');
                }else{
                    $(".p_mess").html(data);
                    $(".message").show(800);    
                }
            }
        );
    }
});



    $("#search").click(function(){
        var search = $('#exampleInputEmail1').val();

        if(search.length > 0){
            $.post(
                "<?php echo U('Pal/search');?>",
                {'search':search},
                function(data){
                    console.log(data);
                    if(data.sex){
                        $('.fri_pic').css('display','block');
                        $('input[name="user_id"]').val(data.id);
                        $('#user_name').html(data.user_name);
                        $('#sex').html(data.sex);
                        $('#email').html(data.email);
                        $('#qq').html(data.qq);
                        $('#motto').html(data.motto);
                        $('.fri_pic').css('background',"url("+"'"+data.user_img+"'"+")");

                        var test = data.user_tag;
                        var array_test = test.split(",");
                        var arr_length = array_test.length - 1;
                        var new_arr    = array_test.splice(0,arr_length);
                            for(var i=0;i<arr_length;i++){
                                $("#add_tag").after('<div class="info_tag"><p id="pp">'+new_arr[i]+'</p></div>');
                            }
                    }else{
                        $('input[name="user_id"]').val(data.id);
                        $('#user_name').html(data.user_name);
                        $('#sex').html(' ');
                        $('#email').html(' ');
                        $('#qq').html(' ');
                        $('#motto').html(' ');
                        $('.fri_pic').css('display','none');
                        $(".info_tag").css('display','none');
                    }

                    if(data == false){
                        $(".p_mess").html('用户不存在');
                        $(".message").show(800);
                    }
                }
            );
        }




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