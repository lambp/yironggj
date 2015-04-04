<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>首页轮播图</title>
<link href="/css/admin_add.css" rel="stylesheet" type="text/css">
<script type="text/javascript"    src="/js/jquery-1.2.6.js"></script>
</head>

<body>
    <p> >> <span style="color:#F00">资讯活动</span></p>
	<p></p>
	<center>
		<table width="80%" border="0"  cellspacing="0" cellpadding="0" class="tableborder">
		  <tr>
			<td>标题</td>

			<td>操作</td>
		  </tr>
		  <?php if(is_array($news_list)): foreach($news_list as $key=>$list): ?><tr>
			<td><?php echo ($list["title"]); ?></td>

			<td><a href='/?m=admin&a=news&id=<?php echo ($list["id"]); ?>' >编辑</a>
		    </tr><?php endforeach; endif; ?>
		</table>
		<p><?php echo ($page); ?></p>
</body>
</html>