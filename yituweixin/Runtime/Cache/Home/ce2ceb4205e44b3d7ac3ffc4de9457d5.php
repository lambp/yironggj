<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="/css/style.css" rel="stylesheet" />
<script type="text/javascript"    src="/js/jquery-1.2.6.js"></script>
</head>
<body style="background:#afae99;padding:0">
<div class="fanwe-header">
	<div class="fh-top">
		<div class="fht-logo"><img src="/css/images/logo.gif" /></div>
		<div class="fht-links">
			<span>欢迎您！</span>			
			<a href="/?m=admin&a=loginout" target="mainFrame">退出</a>
		</div>
		<div class="fht-navs">
			<div class="<?php if($key == 0): ?>active<?php endif; ?>">
				<p>
					<a href="/?m=admin&a=manageindex" target="mainFrame">网站设置</a>
				</p>
			</div>
			<div class="<?php if($key == 1): ?>active<?php endif; ?>">
                <p>
					<a href="?m=admin&a=about&type=about" target="mainFrame">伊融国际</a>
				</p>
			</div>
            <div class="<?php if($key == 2): ?>active<?php endif; ?>">
                <p>
					<a href="?m=admin&a=group&type=group" target="mainFrame">团队组成</a>
				</p>
			</div>
            <div class="<?php if($key == 3): ?>active<?php endif; ?>">
                <p>
                    <a href="?m=admin&a=news" target="mainFrame">咨询活动</a>
                </p>
            </div>
            <div class="<?php if($key == 4): ?>active<?php endif; ?>">
                <p>
                    <a href="?m=admin&a=project" target="mainFrame">工程案例</a>
                </p>
            </div>
		</div>
	</div>
	<!--<div class="fh-bottom">
		<div class="fhb-body">
			
		</div>
	</div>-->
</div>
<div class="ajax-loading" style="top:36px; right:0;"></div>
</body>
<script type="text/javascript">
jQuery(function(){
	$(".fht-navs div").click(function(){
		$(".fht-navs div").removeClass("active");
		$(this).addClass("active");
		$('a',this).blur();
	});
	
	$(".fht-navs div").click(function(){
		$(".fht-navs div").removeClass("active");
		$(this).addClass("active");
		$('a',this).blur();
	});
});
</script>
</html>