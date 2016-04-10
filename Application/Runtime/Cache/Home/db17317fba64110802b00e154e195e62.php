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
 <link rel="stylesheet" href="/task_system/Public/css/task.css"> 
    <div class="content">
        <div class="con_left">
            <h3>新建任务</h3>

            <input type="hidden" name='project_id' value="<?php echo ($pro_id); ?>" id='project_id'>

            <div class="col-sm-10">
                <h4>任务等级</h4>
            </div>

            <div class="col-sm-10">
                <select name="grade" id="grade" class=" btn btn-default dropdown-toggle">
                    <option value="">请选择</option>
                    <option value="紧急">紧急</option>
                    <option value="一般">一般</option>
                    <option value="正常">正常</option>
                </select>
            </div>


            <div class="col-sm-10">
                <h4>任务内容</h4>
                <textarea class="form-control" rows="10" style='height:200px' name='task_content' id='task_content'></textarea>
            </div>

            <div class="col-sm-10">
                <h4>任务分配</h4>
<?php if(is_array($member_list)): foreach($member_list as $key=>$vo): ?><div class="checkbox">
                    <label>
                      <input type="checkbox" name='do_user' value="<?php echo ($vo["user_name"]); ?>" id='do_user'><?php echo ($vo["user_name"]); ?>
                    </label>
                </div><?php endforeach; endif; ?>
            </div>

            <div class="col-sm-10">
                <h4>截止时间</h4>
                <input type='date' class="form-control" id='deadline' name='deadline' /> 


            </div>

            <div class="clean"></div>

            <input type="button" class="btn btn-default" style='background-color:#3278B3;color:#fff;width:90px;height:40px;font-size:20px;margin:20px 0px 0px 20px' value='提交' id='create_task'>

        </div>

        <div class="con_right">
<?php if(is_array($task_list)): foreach($task_list as $key=>$vo): ?><div class="wrap">
                <div class="wrap_top">
                    <input type="checkbox" id="get_task_id" value="<?php echo ($vo["id"]); ?>" style='float:left'>
                    <?php if($vo['grade'] == '紧急'): ?><div class="wrap_tag" style='background:#FF3636'>
                            <p id='get_grade'><?php echo ($vo["grade"]); ?></p>
                        </div>
                    <?php elseif($vo['grade'] == '一般'): ?>
                    <div class="wrap_tag" style='background:#FFAF60'>
                            <p id='get_grade'><?php echo ($vo["grade"]); ?></p>
                        </div>
                    <?php else: ?>
                        <div class="wrap_tag" style='background:#5BBD72'>
                            <p id='get_grade'><?php echo ($vo["grade"]); ?></p>
                        </div><?php endif; ?>
                    <p class='wrap_top_p'><?php echo ($vo["do_user"]); ?></p>
                    <div class="wrap_date">
                        <p><?php echo ($vo["deadline"]); ?></p>
                    </div>
                </div>
                <div class="clean"></div>
                <p class='wrap_p' id='get_task_content' data="<?php echo ($vo["id"]); ?>" user="<?php echo ($vo["do_user"]); ?>"><?php echo ($vo["task_content"]); ?></p>
            </div><?php endforeach; endif; ?>          
        </div>




    </div>



        <div class="edit">
            <h3>编辑任务</h3>

            <input type="hidden" value="" id='edit_task_id'>

            <div class="col-sm-10">
                <h4>任务等级</h4>
            </div>

            <div class="col-sm-10">
                <select id="edit_grade" class=" btn btn-default dropdown-toggle">
                    <option value="">请选择</option>
                    <option value="紧急">紧急</option>
                    <option value="一般">一般</option>
                    <option value="正常">正常</option>
                </select>
            </div>


            <div class="col-sm-10">
                <h4>任务内容</h4>
                <textarea class="form-control" rows="10" style='height:200px' id='edit_task_content'></textarea>
            </div>

            <div class="col-sm-10">
                <h4>截止时间</h4>
                <input type='date' class="form-control" id='edit_deadline' /> 
            </div>

            <div class="clean"></div>

            <input type="button" class="btn btn-default" style='background-color:#3278B3;color:#fff;width:90px;height:40px;font-size:20px;margin:20px 0px 0px 20px' value='提交' id='edit'>

        </div>



    <div class="content_mark"></div>

</body>
<script>
$('#create_task').click(function(){
    var project_id        = $('#project_id').val();
    var grade             = $('#grade').val();
    var task_content      = $('#task_content').val();
    var users             = '';
    var do_user           = $('input:checked').each(function(){
        users += $(this).val()+','; 
    });
    var deadline          = $('#deadline').val();
    // console.log(project_id+'+'+grade+'+'+task_content+'+'+users+'+'+deadline);

    if(project_id.length > 0 & grade.length > 0 & task_content.length >0 & users.length > 0 & deadline.length > 0){
        $.post(
            "<?php echo U('Task/create_task');?>",
            {
             'project_id':project_id,
             'grade':grade,
             'task_content':task_content,
             'do_user':users,
             'deadline':deadline,
            },
            function(data){
                $(".p_mess").html(data);
                $(".message").show(800);

                if(data == '创建任务成功'){
                    $(".img_mess_top").click(function(){
                    $('.message').hide(800);
                    window.location.reload();
                });
                }
                
        });
    }else{
        $(".p_mess").html('请选择完整所有选项');
        $(".message").show(800);
    }
});




$(function(){
    $('.wrap_p').click(function(){
        $("#edit_task_id").val(' ');
        $("#edit_task_content").html(' ');

        var edit_task_id             = $(this).attr('data');
        var edit_task_content        = $(this).html();
        var edit_do_user             = $(this).attr('user');
        var project_id               = $('#project_id').val();

        $("#edit_task_id").val(edit_task_id);
        $("#edit_task_content").html(edit_task_content);

        $('.edit').show(1000);
        $('.content_mark').show('slow');

        $('#edit').click(function(){
            var edit_grade              = $('#edit_grade').val();
            var edit_deadline           = $('#edit_deadline').val();
            var task_content            = $('#edit_task_content').val();

            console.log(edit_task_id+'+'+task_content+'+'+edit_do_user+'+'+edit_grade+'+'+edit_deadline);

            if(edit_task_id.length > 0 & task_content.length > 0 & edit_do_user.length > 0 & edit_grade.length > 0 & edit_deadline.length > 0 & project_id.length > 0){
                // alert(edit_task_id+'+'+task_content+'+'+edit_do_user+'+'+edit_grade+'+'+edit_deadline);
                $.post(
                    "<?php echo U('Task/edit_task');?>",
                    {
                     'id':edit_task_id,
                     'task_content':task_content,
                     'do_user':edit_do_user,
                     'grade':edit_grade,
                     'deadline':edit_deadline,
                     'project_id':project_id,
                    },
                    function(data){
                        $(".p_mess").html(data);
                        $(".message").show(800);

                        if(data == '修改成功'){
                            $(".img_mess_top").click(function(){
                            $('.message').hide(800);
                            window.location.reload();
                        });
                        }
                    }
                );
            }else{
                $(".p_mess").html('请选择完整所有选项');
                $(".message").show(800);
            }});
    });

    $('.content_mark').click(function(){
        $('.edit').hide(800);
        $('.content_mark').hide(800);
    });
});

$(function(){
    $(".pro_img").click(function(){
        var pic_number = ' ';
        $("#click_img").remove();
        var html_img = '<img src="./images/ok.png" id="click_img" alt="">';
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