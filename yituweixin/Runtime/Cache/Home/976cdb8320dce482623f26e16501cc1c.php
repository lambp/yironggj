<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="/css/style.css" rel="stylesheet" />
<script type="text/javascript"    src="/js/jquery-1.2.6.js"></script>
</head>
<body style="background:#eceddd;padding:0; overflow:hidden; overflow-y:scroll;">
	<div>
		<div class="fanwe-menu" valign="top">
			<dl>
				<dt><div><strong>产品管理</strong></div></dt>
                <dd style="display:none;"><p><a href="#" target="mainFrame"></a></p></dd>
				<dd><p><a href="/?m=admin&a=product_type" target="mainFrame">分类管理</a></p></dd>
				<dd><p><a href="/?m=admin&a=product_list" target="mainFrame">产品列表</a></p></dd>
				<dd><p><a href="/?m=admin&a=product_new" target="mainFrame">添加产品</a></p></dd>

				<dd class="cur"><p></p></dd>
			</dl>
		</div>
	</div>
	<script>
		if($("a:first").attr("href"))
		{
			top.document.getElementById("mainFrame").src = $("a:first").attr("href");
			$("a:first").parent().parent().addClass("cur");
		};
		
		$("a").click(function(){
			$("a").each(function(){
				$(this).parent().parent().removeClass("cur");
			});
			$(this).parent().parent().addClass("cur");
			$(this).blur();
		});
	</script>
</body>
</html>