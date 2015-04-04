<?php
class BaseAction extends Action {
	function _initialize(){
		 if(!in_array(MODEL_NAME.'_'.ACTION_NAME,explode(',',"Public/login,Public/LoginOn,Public/verify"))){
			 if(!isset($_SESSION['login'])||!session('?login')){
                 $this->error('请先登录', '?m=login');
			 }
		}
	}
}

