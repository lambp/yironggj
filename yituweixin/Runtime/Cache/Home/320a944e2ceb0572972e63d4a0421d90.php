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
			if( '' == $.trim($('#name').val())){
                alert('产品名称不能为空');
                return false;
            }
			if( '' == $.trim($('#typename').val())){
                alert('产品型号不能为空');
                return false;
            }
            if( '' == $.trim($('#image').val())){
                alert('产品主图不能为空');
                return false;
            }
            //可以在此添加其它判断
        }
		function gettype2(){
			var typeid = $('#type_id').val();
			var str = "/?m=admin&a=get_type_list&typeid="+typeid;
			$("#showtypeid2").load(str);
		}
</script>
    <p><span style="color:#F00">添加产品</span></p>
	<p></p>
	<center>
	<form action='/?m=admin&a=do_product_new' method='post' onsubmit='return checkForm()' enctype="multipart/form-data" id="form1">
		<table width="80%" border="0" cellspacing="0" cellpadding="0" class="tableborder">
			<tr>
			<td colspan=2><center>添加产品</center></td>
		  </tr>
            <tr>
                <td>核心产业:</td>
                <td><select id='top_id' name='top_id'>
                    <option value='0' selected>请核心产业</option>
                    <?php if(is_array($top_list)): foreach($top_list as $key=>$list): ?><option value='<?php echo ($list["id"]); ?>' ><?php echo ($list["title"]); ?></option><?php endforeach; endif; ?>
                    </select>
                 </tr>
		  <tr>
			<td>产品栏目:</td>
			<td><select id='type_id' name='type_id' onchange='gettype2()'>
				<option value='-1' selected>请选择产品类别</option>
                    <?php if(is_array($type_list)): foreach($type_list as $key=>$list): ?><option value='<?php echo ($list["id"]); ?>' ><?php echo ($list["title"]); ?></option><?php endforeach; endif; ?>
				</select>
				<div id='showtypeid2'></div></td>
		  </tr>
		  <tr>
			<td>产品名称:</td>
			<td><input type='text' id='name' name='name' width=200 >*</td>
		  </tr>
		  <tr>
			<td>产品型号:</td>
			<td><input type='text' id='typename' name='typename' width=200 >*</td>
		  </tr>
		  <tr>
			<td>产品详细:</td>
			<td><textarea id='msg' name='msg' rows=10 cols=50></textarea><script type="text/javascript">var editor = CKEDITOR.replace( 'msg',{language:'zh-cn'});</script></td>
		  </tr>
		
		  <tr>
			<td>主图:</td>
			<td><input type='file' name='image' id='image'> 建议图片大小 (800 X 800)</td>
		  </tr>

		  <tr>
			<td colspan=2><center><input type='submit' value='保存'></center></td>
		  </tr>
		</table>
	</form>

</body>
</html>