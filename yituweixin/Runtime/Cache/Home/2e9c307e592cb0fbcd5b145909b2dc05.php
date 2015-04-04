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
			if( '' == $.trim($('#msg').val())){
                alert('内容不能为空');
                return false;
            }
		
            //可以在此添加其它判断
        }
</script>
    <p><span style="color:#F00">修改内容</span> <a href="/?m=admin&a=about&type=about" target="mainFrame"'>返回</a></p>
	<p></p>
	<center>
	<form action='/?m=admin&a=update_group&type=group' method='post' onsubmit='return checkForm()' enctype="multipart/form-data" id="form1">


        <table width="80%" border="0" cellspacing="0" cellpadding="0" class="tableborder">
			<tr>
			<td colspan=2><center><?php echo ($about["title"]); ?><input type='hidden' value='<?php echo ($about["id"]); ?>' name='id'></td>
		  </tr>
            <?php if(''!=$about[image]){ ?>
            <tr>
                <td>图片:</td>
                <td><img src='/images/about/m_<?php echo ($about["image"]); ?>' width=300></td>
            </tr>
            <?php } ?>
            <tr>
                <td>更新图片:</td>
                <td><input type='file' id='image' name='image' >可选</td>
            </tr>
            <tr>
                <td>人物名称:</td>
                <td><input type='text' id='title' name='title' value="<?php echo ($about["title"]); ?>"></td>
            </tr>
		  <tr>
			<td>人物介绍:</td>
			<td><textarea id='msg' name='msg'  rows=10 cols=80><?php echo ($about["message"]); ?></textarea><script type="text/javascript">var editor = CKEDITOR.replace( 'msg',{language:'zh-cn'});</script></td>
		  </tr>

		  <tr>
			<td colspan=2><center><input type='submit' value='保存'></td>
		  </tr>
		</table>
	</form>

</body>
</html>