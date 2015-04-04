<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<link href="/css/admin_add.css" rel="stylesheet" type="text/css">
<script type="text/javascript"    src="/js/jquery-1.2.6.js"></script>
<script type="text/javascript" src="/ckeditor/ckeditor.js"></script> 
</head>
<body>

    <p> >> <span style="color:#F00">网站设置</span></p>
	<p></p>
	<center>
	<form action='/?m=admin&a=doupdateindex' method='post'  enctype="multipart/form-data" id="form1">
		<table width="80%" border="0" cellspacing="0" cellpadding="0" class="tableborder">
			<tr>
			<td colspan=2><center>网站设置<input type='hidden' name='id' value='<?php echo ($initmsg["id"]); ?>'></td>
		  </tr>
		  <tr>
			<td>网站域名</td>
			<td><input type='text' class="txt_01" id='url' name='url' value='<?php echo ($initmsg["url"]); ?>' width='400px'/>*</td>
		  </tr>
		  <tr>
			<td>网站名称</td>
			<td><input type='text' class="txt_01" id='title' name='title' value='<?php echo ($initmsg["title"]); ?>'  >*</td>
		  </tr>
		  <tr>
			<td>公司名称:</td>
			<td><input type='text' class="txt_01" id='company' name='company' value='<?php echo ($initmsg["company"]); ?>' >*</td>
		  </tr>
		    <tr>
			<td>腾讯微博:</td>
			<td><input type='text' class="txt_01" id='qq_weibo' name='qq_weibo' value='<?php echo ($initmsg["qq_weibo"]); ?>' >*</td>
		  </tr>
		   <tr>
			<td>新浪微博</td>
			<td><input type='text' class="txt_01" id='sina_weibo' name='sina_weibo' value='<?php echo ($initmsg["sina_weibo"]); ?>' >*</td>
		  </tr>
		   <tr>
			<td>官方微信号:</td>
			<td><input type='text' class="txt_01" id='weixin' name='weixin' value='<?php echo ($initmsg["weixin"]); ?>' >*</td>
		  </tr>

		  <tr>
			<td>备案号:</td>
			<td><input type='text' id='baian' class="txt_01" name='beian' value='<?php echo ($initmsg["beian"]); ?>'  >*</td>
		  </tr>

		  <tr>
			<td colspan=2><center><input type='submit' value='保存'></td>
		  </tr>
		</table>
	</form>
	<p><span style="color:#F00"><?php echo ($result); ?></span></p>
</body>
</html>