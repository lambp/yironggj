<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<link href="/css/admin_add.css" rel="stylesheet" type="text/css">
<script type="text/javascript"    src="/js/jquery-1.2.6.js"></script>
<script type="text/javascript" src="/resources/ckeditor/ckeditor.js"></script>
</head>
<body>
<script>
        function checkForm(){
			if( '-1' == $.trim($('#typeid').val())){
                alert('请选择产品类别');
                return false;
            }
			if( '' == $.trim($('#title').val())){
                alert('名称不能为空');
                return false;
            }

            //可以在此添加其它判断
        }

</script>
    <p><span style="color:#F00">修改案例</span></p>
	<p></p>
	<center>
	<form action='/?m=admin&a=do_update_project' method='post' onsubmit='return checkForm()' enctype="multipart/form-data" id="form1">
		<table width="80%" border="0" cellspacing="0" cellpadding="0" class="tableborder">
			<tr>
			<td colspan=2><center>添加案例</center></td>
		  </tr>
            <tr>
                <td>分类:</td>
                <td><select id='typeid' name='typeid'>
                    <?php if($project["typeid"] == 1 ): ?><option value='1' selected>高端定制</option>
                    <option value='2' >工程案例</option>
                    <option value='3' >产品出口</option>
                    <?php elseif($project["typeid"] == 2 ): ?>
                        <option value='1' >高端定制</option>
                        <option value='2' selected>工程案例</option>
                        <option value='3' >产品出口</option>
                        <?php elseif($project["typeid"] == 3 ): ?>
                        <option value='1' >高端定制</option>
                        <option value='2' >工程案例</option>
                        <option value='3' selected>产品出口</option><?php endif; ?>
                    </select>
                 </tr>

		  <tr>
			<td>案例名称:</td>
			<td><input type='text' id='title' name='title' width=200 value="<?php echo ($project["title"]); ?>">*</td>
		  </tr>

            <tr>
                <td>已有图片:</td>
                <td><img src="/images/products/m_<?php echo ($project["image"]); ?>" width="80" alt=""/></td>
            </tr>
		  <tr>
			<td>图片:</td>
			<td><input type='file' name='image' id='image'> 建议图片大小 (800 X 800)</td>
		  </tr>

		  <tr>
			<td colspan=2><center><input type='submit' value='保存'></center></td>
		  </tr>
		</table>
	</form>

</body>
</html>