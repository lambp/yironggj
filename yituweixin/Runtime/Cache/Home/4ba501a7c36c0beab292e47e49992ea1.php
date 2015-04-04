<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>登录</title>
<style>
* {
	margin: 0;
	padding: 0
}

body {
	font: 12px/1.6em Arial, Helvetica, sans-serif;
	color: #fff;
	background: #008bc2 url('/resources/img/login/bg_body.jpg')
		center 0 repeat-y
}

.txt {
	border: none;
	width: 171px;
	height: 35px;
	line-height: 35px;
	background: none;
	padding: 0 10px 0 38px
}

.btn {
	border: none;
	background: none;
	width: 445px;
	height: 39px;
	cursor: pointer
}
</style>
<script type="text/javascript" src="/resources/js/jquery-1.8.3.js"	charset="UTF-8"></script>
</head>
<div style="width: 694px; margin: 0 auto" id="box">
	<div
		style=" height:222px;margin-bottom:10px;background:url('/resources/img/login/bg_login.jpg') no-repeat">
		<div style="padding: 89px 0 0 185px">
			<div style="height: 35px; margin-bottom: 10px">
				<input type="text" id="username" class="txt"
					style="float: left; margin-right: 10px" />
                <input type="password" id="psw" class="txt" style="float: left;" />
			</div>

			<input type="submit" value="" id="loginin" class="btn"
				style="margin-bottom: 10px" />
			<p id="msg" style="width: 445px; text-align: center; color: red"></p>
		</div>
	</div>
	<div style="text-align: center; color: #fff"><br>瑞创信息技术 版权所有
	</div>
</div>
<script>
$('#loginin').click(function(){
	var username = $.trim($('#username').val());
	var psw = $.trim($('#psw').val());
	if(username=='' || psw==''){
		$('#msg').text('用户名或密码不能为空!');
	}else{
        $.post('?m=login&a=dologin',{name:username,psw:psw},function(data){
            if(data.msg==1){
                location.href="?m=getmsg";
            }else{
                $('#msg').text('用户名或密码不对!');
            }

        },'json');
        $.submit("#");
    }
});
function checkpsw(){
	var username = $.trim($('#username').val());
	var psw = $.trim($('#psw').val());
	if(username=='' || psw==''){

		$('#msg').text('用户名或密码不能为空!');
		return false;
	}
    return true;
}

if($('#box').height() < $(window).height()){
	$('#box').css({marginTop:($(window).height()-$('#box').height())/2+'px'});
}
</script>
</html>