<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_WARNING",false);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>爱的许愿墙后台管理首页</title>
	<link rel="stylesheet" href="http://localhost/wish/Admin/Tpl/Public/css/sf_admin.css" />
	<link rel="shortcut icon" href="http://localhost/wish/Admin/Tpl/Public/images/favicon.ico"/>
	<script src="http://localhost/wish/Admin/Tpl/Public/js/jquery.js"></script>
	<script src="http://localhost/wish/Admin/Tpl/Public/js/sf_admin.js"></script>
</head>
<body>
	<div id="header">
		<div class="cont">
			<h2>爱的许愿墙-后台管理首页
				<span>www.xuyanqiang.com</span>
			</h2>
		</div>
	</div>
	<div id="nav">
		<div id="left">
			<p class="date">今天是<span> <?php echo date("Y-m-d H:m:s"); ?></span></p>
			<p class="address">您当前位置是：<span>首页</span></p>
		</div>
		<div id="manage">
			<p>
				管理员：<span><?php echo $_SESSION['username'];?></span>
			</p>
		</div>
		<a href="<?php echo U('Login/out');?>" target="_self">退出</a>
	</div>
	<div id="cont">
		<div id="l_nav">
			<dl class="menu">
				<dt>常用菜单</dt>
				<dd><a href="http://localhost/wish">前台首页</a></dd>
				<dd><a href="<?php echo U('check');?>" target="iframe">查看愿望</a></dd>
				<dd><a href="<?php echo U('copy');?>" target="iframe">系统信息</a></dd>
				<dd><a href="<?php echo U('passwd');?>" target="iframe">修改密码</a></dd>
			</dl>
		</div>
		<div id="r_content">
			<iframe src="<?php echo U('copy');?>" frameborder="0" border="0" scrolling="yes" name="iframe"></iframe>
		</div>
	</div>
	<div id="footer">
		<span class="footer_one">
		</span>
		<span class="footer_two">
			许一个愿.暖一颗心
		</span>
		<span class="footer_three">
		</span>
	</div>
</body>
</html>