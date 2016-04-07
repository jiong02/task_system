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

            <div class="col-sm-10">
                <h4>任务等级</h4>
            </div>

            <div class="col-sm-10">
                <select name="" id="" class=" btn btn-default dropdown-toggle">
                    <option value="1">紧急</option>
                    <option value="2">一般</option>
                    <option value="3">正常</option>
                </select>
            </div>


            <div class="col-sm-10">
                <h4>任务内容</h4>
                <textarea class="form-control" rows="10" style='height:200px'></textarea>
            </div>

            <div class="col-sm-10">
                <h4>任务分配</h4>
<?php if(is_array($member_list)): foreach($member_list as $key=>$vo): ?><div class="checkbox">
                    <label>
                      <input type="checkbox" name='member' value="<?php echo ($vo["id"]); ?>" ><?php echo ($vo["user_name"]); ?>
                    </label>
                </div><?php endforeach; endif; ?>
            </div>

            <div class="col-sm-10">
                <h4>截止时间</h4>
                <input type='date' class="form-control" id='datetimepicker4'/> 


            </div>

            <div class="clean"></div>

            <input type="button" class="btn btn-default" style='background-color:#3278B3;color:#fff;width:90px;height:40px;font-size:20px;margin:20px 0px 0px 20px' value='提交'>

        </div>

        <div class="con_right">
            <div class="wrap">
                <div class="wrap_top">
                    <input type="checkbox" id="checkboxSuccess" value="option1">
                    <div class="wrap_tag">
                        <p>紧急</p>
                    </div>
                    <p class='wrap_top_p'>奇怪的机器人</p>
                    <div class="wrap_date">
                        <p>2016-03-15</p>
                    </div>
                </div>
                <div class="clean"></div>
                <p class='wrap_p'>添加订单入库功能</p>

            </div>

            <div class="wrap">
                <div class="wrap_top">
                    <input type="checkbox" id="checkboxSuccess" value="option1">
                    <div class="wrap_tag">
                        <p>紧急</p>
                    </div>
                    <p class='wrap_top_p'>奇怪的机器人</p>
                    <div class="wrap_date">
                        <p>2016-03-15</p>
                    </div>
                </div>
                <div class="clean"></div>
                <p class='wrap_p'>添加订单入库功能</p>

            </div>

            <div class="wrap">
                <div class="wrap_top">
                    <input type="checkbox" id="checkboxSuccess" value="option1">
                    <div class="wrap_tag">
                        <p>紧急</p>
                    </div>
                    <p class='wrap_top_p'>奇怪的机器人</p>
                    <div class="wrap_date">
                        <p>2016-03-15</p>
                    </div>
                </div>
                <div class="clean"></div>
                <p class='wrap_p'>添加订单入库功能</p>

            </div>            



        </div>




    </div>



        <div class="edit">
            <h3>编辑任务</h3>

            <div class="col-sm-10">
                <h4>任务等级</h4>
            </div>

            <div class="col-sm-10">
                <select name="" id="" class=" btn btn-default dropdown-toggle">
                    <option value="1">紧急</option>
                    <option value="2">一般</option>
                    <option value="3">正常</option>
                </select>
            </div>


            <div class="col-sm-10">
                <h4>任务内容</h4>
                <textarea class="form-control" rows="10" style='height:200px'></textarea>
            </div>

            <div class="col-sm-10">
                <h4>任务分配</h4>
                <div class="checkbox">
                    <label>
                      <input type="checkbox" value='' > Check me out
                    </label>
                </div>



            </div>

            <div class="col-sm-10">
                <h4>截止时间</h4>
                <input type='date' class="form-control" id='datetimepicker4'/> 


            </div>

            <div class="clean"></div>

            <input type="button" class="btn btn-default" style='background-color:#3278B3;color:#fff;width:90px;height:40px;font-size:20px;margin:20px 0px 0px 20px' value='提交'>

        </div>



    <div class="content_mark"></div>

</body>
<script>
$(function(){
    $('.wrap_p').click(function(){
        $('.edit').show(1000);
        $('.content_mark').show('slow');
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