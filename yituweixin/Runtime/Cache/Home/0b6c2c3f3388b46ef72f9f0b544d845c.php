<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>首页轮播图</title>
<link href="/css/admin_add.css" rel="stylesheet" type="text/css">
<script type="text/javascript"    src="/js/jquery-1.2.6.js"></script>
</head>

<body>
<p><a href='/?m=admin&a=add_product_type'>添加分类</a> </p>
	<center>
        <table width=500 border=1>
            <tr>
                <th bgcolor="#9A9A9A">一级分类</th><th bgcolor="#9A9A9A">二级分类</th>
            </tr>
            <?php if(is_array($cptype)): $i = 0; $__LIST__ = $cptype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cptype): $mod = ($i % 2 );++$i;?><tr>
                    <td width="50%"><?php echo ($cptype["title"]); ?></td>
                    <td  width="50%">
                        <table  width="100%" border=1>
                            <?php if(is_array($cptype['nextlist'])): $i = 0; $__LIST__ = $cptype['nextlist'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><tr><td><?php echo ($list["title"]); ?></td></tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </table>
                    </td>

                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
</body>
</html>