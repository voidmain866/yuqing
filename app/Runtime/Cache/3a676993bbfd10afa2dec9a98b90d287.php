<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>舆情监测系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../Public/css/style.css" />
    <link rel="stylesheet" type="text/css" href="../Public/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../Public/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" type="text/css" href="../Public/css/unicorn.main.css" />
    <link rel="stylesheet" type="text/css" href="../Public/css/unicorn.grey.css" />
    <link rel="stylesheet" type="text/css" href="../Public/css/default.css" />
    <script type="text/javascript" src="../Public/js/jquery.min.js"></script>
　   <script type="text/javascript">
　　  var jQuery=$;
　　 </script>    
    <script type="text/javascript" src="../Public/js/jquery.ui.custom.js"></script>
    <script type="text/javascript" src="../Public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../Public/js/jquery.peity.min.js"></script>
    <script type="text/javascript" src="../Public/js/jquery.flot.min.js"></script>
    <script type="text/javascript" src="../Public/js/jquery.flot.resize.min.js"></script>
    <script type="text/javascript" src="../Public/js/unicorn.js"></script>
    <script type="text/javascript" src="../Public/js/unicorn.dashboard.js"></script>   
    <script type="text/javascript" src="__PUBLIC__/Js/Base.js"></script>
    <script type="text/javascript" src="__PUBLIC__/Js/prototype.js"></script>
    <script type="text/javascript" src="__PUBLIC__/Js/mootools.js"></script>
    <script type="text/javascript" src="__PUBLIC__/Js/Think/ThinkAjax.js"></script>
    <script type="text/javascript" src="__PUBLIC__/Js/Form/CheckForm.js"></script>    
    <script type="text/javascript" src="__PUBLIC__/js/common.js"></script>

<script language="JavaScript">
<!--
//指定当前组模块URL地址 
var ROOT = '__ROOT__';
var URL = '__URL__';
var APP	 =	 '__APP__';
var PUBLIC = '__PUBLIC__';
//-->
</script>    

</head>
<body>
    <!-- logo -->
    <div id="header">
        <h1>
        </h1>
    </div>
    <!-- topbar -->
    <div id="user-nav" class="navbar navbar-inverse">
        <ul class="nav btn-group">
            <li class="btn btn-inverse dropdown" id="menu-profile"><a title="" href="#" data-toggle="dropdown"
                data-target="#menu-profile" class="dropdown-toggle"><i class="icon icon-user"></i>
                <span class="text">Huang shan </span><b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="icon icon-list-alt"></i>个人资料</a></li>
                    <li><a href="#"><i class="icon icon-lock"></i>安全设置</a></li>
                    <li><a href="#"><i class="icon icon-off"></i>退出系统</a></li>
                </ul>
            </li>
            <li class="btn btn-inverse"><a href="#"><i class="icon icon-envelope"></i><span class="text">
                重要信息</span> <span class="label label-important">5</span></a> </li>
        </ul>
    </div>
    <!-- 导航 -->
    <div id="sidebar">
    <ul>
        <li id="li_home"><a href="/yuqing/"><i class="icon icon-home"></i><span>
            起始页</span></a></li>
        <li id="li_mdata" class="submenu"><a href="#"><i class="icon icon-th-list"></i><span>监测数据</span><span
            class="label">4</span></a>
            <ul>
                <li><a href="#">舆情查看</a></li>
                <li><a href="#">热点查看</a></li>
                <li><a href="#">简报生成</a></li>
            </ul>
        </li>
        <li id="li_mset" class="submenu"><a href="#"><i class="icon icon-th"></i><span>监测设置</span></a>
            <ul>
                <li><a href="BlackWords.html">系统黑词</a></li>
                <li><a href="#">系统设置</a></li>
            </ul>
        </li>
        <li id="li_alarm" class="submenu"><a href="#"><i class="icon icon-bell"></i><span>系统预警</span></a>
            <ul>
                <li><a href="/yuqing/index.php/SystemAlarm/index">预警信息</a></li>
                <li><a href="/yuqing/index.php/SystemAlarm/alarmSet">预警设置</a></li>
                <li><a href="/yuqing/index.php/SystemAlarm/smsList">预警短信</a></li>
                <li><a href="/yuqing/index.php/SystemAlarm/mailList">预警邮箱</a></li>
            </ul>
        </li>
        <li id="li_user" class="submenu"><a href="#"><i class="icon icon-user"></i><span>个人中心</span></a>
            <ul>
                <li><a href="/yuqing/index.php/Profile">个人资料</a></li>
                <li><a href="Security.html">安全设置</a></li>
            </ul>
        </li>
        <li id="li_system" class="submenu"><a href="#"><i class="icon icon-wrench"></i><span>系统管理</span></a>
            <ul>
                <li><a href="/yuqing/index.php/SystemManage/userManage">用户管理</a></li>
                <li><a href="">系统设置</a></li>
            </ul>
        </li>
    </ul>
</div>
    <!-- 内容 -->
    <div id="content"><!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html>
<head>
<title>页面提示</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv='Refresh' content='<?php echo ($waitSecond); ?>;URL=<?php echo ($jumpUrl); ?>'>
    <link rel="stylesheet" type="text/css" href="../Public/css/style.css" />
    <link rel="stylesheet" type="text/css" href="../Public/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../Public/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" type="text/css" href="../Public/css/unicorn.main.css" />
    <link rel="stylesheet" type="text/css" href="../Public/css/unicorn.grey.css" />
    <link rel="stylesheet" type="text/css" href="../Public/css/default.css" />
</head>
<body>
<div   style=" padding-top:100px; margin-left:auto; margin-right:auto; width:400px;">
<table class="message"  cellpadding=0 cellspacing=20 >
 	<tr class="row" >
		<th class="tCenter space"><?php echo ($msgTitle); ?></th>
	</tr>
	<?php if(isset($message)): ?><tr class="row">
		<td height="29" style="color:blue"><?php echo ($message); ?></td>
	</tr><?php endif; ?>
	<?php if(isset($error)): ?><tr class="row">
		<td style="color:red"><?php echo ($error); ?></td>
	</tr><?php endif; ?>
	<?php if(isset($closeWin)): ?><tr class="row">
		<td>系统将在 <span id="wait" style="color:blue;font-weight:bold"><?php echo ($waitSecond); ?></span> 秒后自动关闭，如果不想等待,直接点击 <a id="href" href="<?php echo ($jumpUrl); ?>">这里</a> 关闭</td>
	</tr><?php endif; ?>
	<?php if(!isset($closeWin)): ?><tr class="row">
		<td height="62">系统将在 <span id="wait" style="color:blue;font-weight:bold"><?php echo ($waitSecond); ?></span> 秒后自动跳转,如果不想等待,直接点击 <a id="href" href="<?php echo ($jumpUrl); ?>">这里</a> 跳转</td>
	</tr><?php endif; ?>
	</table>
</div>
<script type="text/javascript">
(function(){
var wait = document.getElementById('wait'),href = document.getElementById('href').href;
var interval = setInterval(function(){
	var time = --wait.innerHTML;
	(time == 0) && (location.href = href);
}, 1000);	
})();
</script>
</body>
</html>
</div>
    
    <!-- Footer -->
    <div class="row-fluid">
        <div id="footer" class="span12" style="margin-top: 25px; color: #eeeeee">
            &copy; 2013
        </div>
    </div>
</body>
</html>