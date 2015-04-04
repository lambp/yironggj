<?php
class IndexAction extends Action {
	private function init(){
		//$getmsg = new NavigatModel();
        //$navlist =  $getmsg->getnavlist();
		if(!session('?loginid')){
			$this->error('您还没有登录','/index.php/admin/?a=login');
		}
		
	}
	public function login(){
		$this->display("login");
	}
	//主页	
	public function index(){
		if(!session('?loginid')){
			$this->display("login");
		}else{
			$this->display("index");
		}
	}
	public function top(){
		$this->display("top");
	}
	public function left(){
		$this->display("left_index");
	}
	public function change(){
		$this->display("change");
	}
	public function mainview(){
		$this->display("main");
	}
	public function footer(){
		$this->display("footer");
	}

	public function setflash(){
		$this->init();
		 $this->assign("headerimg",getflash());
		$this->display("flashimgs");
	}
	public function updateimg(){
		$this->init();
		$imgs = getflash('one',$_GET['id']);
		$this->assign('imgs',$imgs[0]);
		$this->display("updateimg");
	}

	public function doupdateimg(){
		$this->init();
		if(strlen($_FILES["image"]["name"])>0){
			$res = img_upload('flash',array('1290,388','1290,388'));
			$prams['link'] = $res['link'];
			$prams['url'] = '/images/flash/'.'m_'.$res['image'];
			update('flashimg',$prams,' where id='.intval($_POST['id']));
				$result = '编辑成功';

		}else{
			$prams['link'] = $_POST['link'];
			update('flashimg',$prams,' where id='.intval($_POST['id']));
				$result ='编辑成功';
		}
		$this->success($result, '/index.php/admin/?m=index&a=setflash');
	}
	public function addimg(){
		$this->init();
		$this->display("addimg");
	}
	public function doaddimg(){
		$this->init();
		$res = img_upload('flash',array('1290,368','1290,368'));
		$prams['link'] = $res['link'];
		$prams['url'] = '/images/flash/'.'m_'.$res['image'];
		if(insert('flashimg',$prams)){
			//header('Location: /index.php/admin/?m=index&a=setflash');
			$this->success("添加成功", '/index.php/admin/?m=index&a=setflash');
		}
	}
	public function dodeleteimg(){
		$this->init();
		$prams['isshow'] = 0;
		update('flashimg',$prams,' where id='.$_GET['id']);
	    //header('Location: /index.php/admin/?m=index&a=setflash');
		$this->success('删除成功', '/index.php/admin/?m=index&a=setflash');
	}
	public function dologin(){
		/*
		if(md5($_POST['cap_code']) != $_SESSION['verify']){
			$this->error('验证码错误！');
		}else{
		*/
			$res = dologin($_POST['username'],$_POST['password']);
			//echo $_POST['password'];exit;
			if($res){
				session('loginid',$res);
				$this->success('登录成功','/index.php/admin');
			}else{
				$this->error('用户名或密码错误','/index.php/admin/?a=login');
			}
		//}

	}
	//首页管理
	public function manageindex(){
			$this->init();
			$indeximsg = getinitmsg();
			$this->assign("initmsg",$indeximsg[0]);
			$this->display("manageindex");

	}
	public function doupdateindex(){
		$this->init();
		$prams['title'] = $_POST['title'];
		$prams['indexurl'] = $_POST['indexurl'];
		$prams['company_name'] =$_POST['company_name'];
		$prams['company_addr'] =$_POST['company_addr'];
		$prams['company_tel'] =$_POST['company_tel'];
		$prams['company_qq'] =$_POST['company_qq'];
		$prams['keywords'] = $_POST['keywords'];
		$prams['company_msg'] = $_POST['company_msg'];
		$prams['lianxi_msg'] =$_POST['msg'];
		$prams['copyright'] = $_POST['copyright'];
		update('indexmsg',$prams,' where id='.$_POST['id']);
		$result ='编辑成功';
		$this->success($result, '/index.php/admin/?m=index&a=manageindex');
	}
	public function loginout(){
		session(null);
		$this->success('成功退出系统','/index.php/admin/?a=login');
	}
	
	//验证码
	public function verify(){
		import('ORG.Util.Image');
		Image::buildImageVerify();
	}
}

