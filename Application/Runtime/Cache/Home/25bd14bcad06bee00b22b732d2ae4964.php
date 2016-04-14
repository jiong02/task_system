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
            <h4 style='font-weight: bold;float:left;margin-right: 10px;;cursor:pointer'><?php echo $_SESSION['user_name']; ?></h4>
            <h4 style='font-weight: bold;float:left;cursor:pointer' id='logout'>退出</h4>
        </div>


    </div>


    <div class="clean"></div>

</body>
<script>
$('#logout').click(function(){
    $.post(
        "<?php echo U('Index/logout');?>",
        {

        },
        function(data){
            $(".p_mess").html(data);
            $(".message").show(800); 

            $(".img_mess_top").click(function(){
                    $('.message').hide(800);
                    window.location.reload();
            });
        }


    );
});



</script>
</html>
 <link rel="stylesheet" href="/task_system/Public/css/task_all.css"> 
    <div class="content">
        <div class="content_left">
            <strong style='display:block;' id="unfinish">未完成</strong>
<?php if(is_array($unfinish)): foreach($unfinish as $key=>$vo): ?><div class='wrap_' data="<?php echo ($vo["id"]); ?>">
            <div class="task_info" data="<?php echo ($vo["id"]); ?>" style='width:300px;height:60px;'>
                <div class="info_top">
                    <input type="checkbox" class='check' data="<?php echo ($vo["id"]); ?>" tag='unfinish'>

                <?php if($vo['grade'] == '紧急'): ?><div class="info_grade" style='background:#FF3636'>
                        <p class='grade_p'>紧急</p>
                    </div>
                <?php elseif($vo['grade'] == '一般'): ?>
                    <div class="info_grade" style='background:#FFAF60'>
                        <p class='grade_p'>一般</p>
                    </div>
                <?php else: ?>
                    <div class="info_grade" style='background:#5BBD72'>
                        <p class='grade_p'><?php echo ($vo["grade"]); ?></p>
                    </div><?php endif; ?>

                    <p class='name_p'><?php echo ($vo["give_user"]); ?></p>
                    <div class="date">
                        <p><?php echo ($vo["deadline"]); ?></p>
                    </div>
                </div>
                <div class="sys_name">
                    <p>&nbsp;<?php echo ($vo["project_name"]); ?>&nbsp;</p>
                </div>
                <p class='ac_info'><?php echo ($vo["task_content"]); ?></p>
            </div>
        </div><?php endforeach; endif; ?>
        </div>

        <div class="content_right">
            <strong style='display:block;' id="finish">已完成</strong>
<?php if(is_array($finish)): foreach($finish as $key=>$vo): ?><div class='wrap_' data="<?php echo ($vo["id"]); ?>">
            <div class="task_info" data="<?php echo ($vo["id"]); ?>" style='width:300px;height:60px;'>
                <div class="info_top">
                    <input type="checkbox" class='check' checked data="<?php echo ($vo["id"]); ?>" tag='finish'>
                <?php if($vo['grade'] == '紧急'): ?><div class="info_grade" style='background:#FF3636'>
                        <p class='grade_p'><?php echo ($vo["grade"]); ?></p>
                    </div>
                <?php elseif($vo['grade'] == '一般'): ?>
                    <div class="info_grade" style='background:#FFAF60'>
                        <p class='grade_p'><?php echo ($vo["grade"]); ?></p>
                    </div>
                <?php else: ?>
                    <div class="info_grade" style='background:#5BBD72'>
                        <p class='grade_p'><?php echo ($vo["grade"]); ?></p>
                    </div><?php endif; ?>
                    <p class='name_p'><?php echo ($vo["give_user"]); ?></p>
                    <div class="date">
                        <p><?php echo ($vo["deadline"]); ?></p>
                    </div>
                </div>
                <div class="sys_name">
                    <p>&nbsp;<?php echo ($vo["project_name"]); ?>&nbsp;</p>
                </div>
                <p class='ac_info'><?php echo ($vo["task_content"]); ?></p>
            </div>
        </div><?php endforeach; endif; ?>
        </div>
    </div>


<!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->


        <div class="edit">
            <h3>查看任务</h3>

            <div class="col-sm-10" style='margin-bottom: 50px;'>
                <h4>任务内容</h4>
                <textarea class="form-control" rows="10" style='height:200px' id='task_text'></textarea>
            </div>

        </div>


<div class="content_mark"></div>
    
</body>
<script>
    $('.check').click(function(){
        var tag             = $(this).attr('tag');
        var task_id         = $(this).attr('data');

        if(tag == 'unfinish' & task_id.length >0 ){
            $.post(
                "<?php echo U('Task/finish_task');?>",
                {
                 'task_id':task_id,
                },
                function(data){
                    if(data == '完成任务'){
                        window.location.reload();
                    }

                    $(".p_mess").html(data);
                    $(".message").show(800);
                }

            );
        }

        if(tag == 'finish' & task_id.length >0 ){
             $.post(
                "<?php echo U('Task/unfinish_task');?>",
                {
                 'task_id':task_id,
                },
                function(data){
                    if(data == '完成任务'){
                        window.location.reload();
                    }

                    $(".p_mess").html(data);
                    $(".message").show(800);
                }

            );   
        }

    });





/*$(function(){
    $('.check').click(function(){
        var tag             = $(this).attr('tag');
        var task_id         = $(this).attr('data');

        if(tag == 'unfinish'){
            var task_info             = $(".wrap_[data='"+task_id+"']").html();
            console.log(task_info);
            $(".wrap_[data='"+task_id+"']").remove();
            $('#finish').after(task_info);
            $('.content_right:input').attr('checked','checked');
            
        }

        if(tag == 'finish'){

        }

    });



});*/



$(function(){
    $('.ac_info').click(function(){
        var task_content             = $(this).html();
        $('#task_text').html(task_content);

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