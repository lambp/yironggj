<?php
class AboutsAction extends Action {
	private function init(){
		//$getmsg = new NavigatModel();
        //$navlist =  $getmsg->getnavlist();
		if(!session('?loginid')){
			$this->error('您还没有登录','/index.php/admin/?a=login');
		}
	}
	//主页	
	public function index(){
		$this->init();
		import('ORG.Util.Page');// 导入分页类
		$this->init();
		$pagenum = 15;
		isset($_GET['p'])?$np=$_GET['p'] : $np=1;
		$this->assign('newslist',getaboutslist('page',$pagenum,$np));
		$count =  getaboutslist('all');
		$Page = new Page($count[0][num],$pagenum);// 实例化分页类 传入总记录数和每页显示的记录数
		$show = $Page->show();// 分页显示输出
		$this->assign('page',$show);
		$this->display("lists");
	}
	public function addabouts(){
	$this->init();
		$this->display("addabouts");
	}
	public function doaddabouts(){
		$this->init();
		$prams['title'] = $_POST['name'];
		$prams['sortid'] = 1;
		$prams['addtime'] = time();
		$prams['msg'] =$_POST['msg'];
		$prams['isshow'] =1;
		$prams['count'] =1;
		if(strlen($_FILES["image"]["name"])>0){
			$res = img_upload('aimg');
		    $prams['image'] = $res['image'];
		}
		if(insert('abouts',$prams)){
			$this->success("添加成功", '/index.php/admin/?m=abouts&a=index');
		}else{
			$this->error("添加失败", '/index.php/admin/?m=abouts&a=addabouts');
		}
	}


	public function updateabouts(){
		$this->init();
		$product = getabouts($_GET['id']);
		$this->assign('product',$product[0]);
		$this->display("updateabouts");
	}

	public function doupdateabouts(){
		$this->init();
		$prams['addtime'] = time();
		$prams['title'] = $_POST['name'];
		$prams['msg'] =$_POST['msg'];
		if(strlen($_FILES["image"]["name"])>0){
			$res = img_upload('aimg');
		    $prams['image'] = $res['image'];
		}
		update('abouts',$prams,' where id='.$_POST['id']);
		$this->success('编辑成功', '/index.php/admin/?m=abouts&a=index');
	}


	public function dodeleteabouts(){
		$this->init();
		$prams['isshow'] = 0;
		update('abouts',$prams,' where id='.$_GET['id']);
	   $this->success("删除成功", '/index.php/admin/?m=abouts&a=index');
		
	}

}

