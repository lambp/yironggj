<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>首页轮播图</title>
<link href="/css/admin_add.css" rel="stylesheet" type="text/css">
<script type="text/javascript"    src="/js/jquery-1.2.6.js"></script>
</head>

<body>
    <p><span style="color:#F00">案例管理</span> </p>
    <p><span style="color:#F00"><a href="?m=admin&a=project_new">添加案例</a> </span> </p>
	<p></p>
	<center>
		<table width="80%" border="0"  cellspacing="0" cellpadding="0" class="tableborder">
		  <tr>


			<td>案例分类</td>
			<td>案例名称</td>
              <td>案例图片</td>
			<td>编辑</td>
		  </tr>
		  <?php if(is_array($project_list)): foreach($project_list as $key=>$list): ?><tr>
              <td><?php if($list[typeid] == 1 ): ?>高端定制
                  <?php elseif($list[typeid] == 2): ?>
                  工程案例
                  <?php elseif($list[typeid] == 3): ?>
                    产品出口<?php endif; ?>
              </td>
			<td><?php echo ($list["title"]); ?></td>

              <td>
                  <?php if($list[image] != '' ): ?><img src="/images/products/m_<?php echo ($list[image]); ?>" width="50"><?php endif; ?>
              </td>

			<td>
                <!--a href='/?m=admin&a=update_product&id=<?php echo ($list["id"]); ?>' >编辑</a-->
				<a href='/?m=admin&a=update_project&id=<?php echo ($list["id"]); ?>' >修改</a></td>
		  </tr><?php endforeach; endif; ?>
		</table>
		<p><?php echo ($page); ?></p>
</body>
</html>