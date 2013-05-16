<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
    <title>登录—网络舆情监测系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../Public/css/bootstrap.min.css" rel="stylesheet" media="screen" />
    <link href="../Public/css/login.css" rel="Stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script type="text/javascript" src="../Public/Js/jquery.min.js"></script>
    <script type="text/javascript" src="../Public/Js/jquery.form.js"></script>
    <script language="JavaScript">
    <!--
    $(function(){
        $('#form1').ajaxForm({
            beforeSubmit:  checkForm,  // pre-submit callback
            success:       complete,  // post-submit callback
            dataType: 'json'
        });
        function checkForm(){
            if( '' == $.trim($('#username').val())){
                $('#result').html('标题不能为空').show();
                return false;
            }
            if( '' == $.trim($('#password').val())){
                $('#result').html('密码不能为空').show();
                return false;
            }			
			
            //可以在此添加其它判断
        }
        function complete(data){
            if (data.status==1){
                $('#result').html(data.info).show();
                // 更新列表
                data = data.data;
                var html =  '<div class="result" style=\'font-weight:normal;background:#A6FF4D\'><div style="border-bottom:1px dotted silver">标题：'+data.title+'  [ '+data.create_time+' ]</div><div class="content">内容：'+data.content+'</div></div>';
                $('#list').prepend(html);
            }else{
                $('#result').html(data.info).show();
            }
        }

    });
    function checkTitle(){
        $.post('__URL__/checkTitle',{'title':$('#title').val()},function(data){
            $('#result').html(data.info).show();
        },'json');
    } 
	
 	function tj(){
	   $('#form1').attr("action","__ROOT__/Public/checkLogin").submit();  		
	}
    //-->
    </script>    
 
</head>
<body>
    <!-- Fixtop Navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar">
                    </span>
                </button>
                <a class="brand" href="default.htm">LOGO</a>
                <div class="nav-collapse collapse">
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content -->
    <div class="container-fluid">
       
        <div class="login" style="margin-top:-200px;">
            <div class="login-boxbg corner-top corner-bottom">
                <div class="login-box corner-bottom2 corner-top2">
                    <div class="loginbox-title">
                        系统登录
                         <div class="notice" id="result" style="display:none"> </div>
                    </div>
                    <form class="form-horizontal" id="form1" action="__ROOT__/Public/checkLogin" method="post">
                    <fieldset>
                        <div class="input-prepend" title="Username">
                            <span class="add-on"><i class="icon-user"></i></span>
                            <input class="input-large" name="account" id="username" type="text" placeholder="账户名" />
                        </div>
                        <div class="hspace15"></div>
                        <div class="hspace15"></div>
                        <div class="input-prepend" title="Password">
                            <span class="add-on"><i class="icon-lock"></i></span>
                            <input class="input-large" name="password" id="password" type="password" placeholder="密码">
                        </div>
                        <div class="hspace15"></div>
                        <div class="hspace10"></div>
                        <div class="button-login">
                            <a  class="btn btn-primary" href="#" onClick="tj()">
                                登&nbsp;&nbsp;录</a> 
                        </div>
                        <hr>
                        <h5>
                            忘记密码?</h5>
                        <a href="#">点击这里</a> 重设密码
                    </fieldset>
                    
                    </form>
                </div>
            </div>
            <div class="footer">
                <p>
                    Copyright &copy; 2013</p>
            </div>
        </div>
    </div>
</body>
</html>