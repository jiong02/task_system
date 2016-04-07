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
 <link rel="stylesheet" href="/task_system/Public/css/index.css"> 
    <div class="center_left">
        <h4>个人项目</h4>
<?php if(is_array($project_list)): foreach($project_list as $key=>$vo): ?><a href="/task_system/index.php/Home/Task/task?project_id=<?php echo ($vo["id"]); ?>">
            <div class="project" style='background-image: url("<?php echo ($vo["project_img"]); ?>");'>
                    <p><?php echo ($vo["project_name"]); ?></p>
            </div>
        </a><?php endforeach; endif; ?>        
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

    </div>    

    <div class="clean"></div>

<form action="#" method='post'>

    <div class="new_project" >
        <h4>项目图片</h4>
        
        <div class="imgs">
            <div class="pro_img" style="background-image: url('/task_system/Public/images/project_a.jpg');" data="a">
                <input type="hidden" name='pic' value='1' id='pic'>
            </div>

            <div class="pro_img" style="background-image: url('/task_system/Public/images/project_b.jpg');" data="b">
                <input type="hidden" name='pic' value='2'>
            </div>

            <div class="pro_img" style="background-image: url('/task_system/Public/images/project_c.jpg');" data="c">
                <input type="hidden" name='pic' value='3'>
            </div>

            <div class="pro_img" style="background-image: url('/task_system/Public/images/project_d.jpg');" data="d">
                <input type="hidden" name='pic' value='4'>
            </div>

            <div class="pro_img" style="background-image: url('/task_system/Public/images/project_e.jpg');" data="e">
                <input type="hidden" name='pic' value='5'>
            </div>

            <div class="pro_img" style="background-image: url('/task_system/Public/images/project_f.jpg');" data="f">
                <input type="hidden" name='pic' value='6'>
            </div>
        </div>


        <div class="clean"></div>

        <h4>项目信息</h4>

         <input type="text" class="form-control" placeholder="项目名称" aria-describedby="sizing-addon2" id='pro_name'>

         <textarea class="form-control" rows="5" placeholder="项目简介" style='margin:15px 0px' id='pro_explain'></textarea>

         <h4>成员</h4>

         <div class="member">
        <?php if(is_array($friend_list)): foreach($friend_list as $key=>$vo): ?><div class="checkbox">
              <label>
                <input type="checkbox" value="<?php echo ($vo["id"]); ?>">
                <?php echo ($vo["user_name"]); ?>
              </label>
            </div><?php endforeach; endif; ?>

         </div>
         

        <div class="clean"></div>

        <input type="button" class="btn btn-default" style='background-color:#3278B3;color:#fff;width:80px;' value='创建项目' id='create_pro'>

    </div>

    <div class="content_mark"></div>


</form>
    
</body>
<script>
$('#create_pro').click(function(){
    var pro_img             = $("#click_img").parent().attr('data');
    var pro_name            = $('#pro_name').val();
    var pro_explain         = $('#pro_explain').val();
    var ids                 = ''; 
    var pro_member          = $("input:checked").each(function(){
        ids += $(this).val()+','; 
    });
    
    if(pro_img.length > 0 & pro_name.length > 0 & ids.length >0){
        $.post(
            "<?php echo U('Task/create_project');?>",
            {'project_img':pro_img,
            'project_name':pro_name,
            'explain':pro_explain,
            'member':ids,},
            function(data){
                $(".p_mess").html(data);
                $(".message").show(800);
                if(data == '添加成功'){
                    $(".img_mess_top").click(function(){
                    $('.message').hide(800);
                    window.location.reload();
                });
                }
            }
        )
    }else{
        $(".p_mess").html('请选择完整所有选项');
        $(".message").show(800);
    }



});



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