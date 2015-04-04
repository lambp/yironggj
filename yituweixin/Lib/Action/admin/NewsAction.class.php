<?php
class NewsAction extends Action {
	private function init(){
		//$getmsg = new NavigatModel();
        //$navlist =  $getmsg->getnavlist();
		if(!session('?loginid')){
			$this->error('您还没有登录','/index.php/admin/?a=login');
		}
	}
	//主页	
	public function index(){
		import('ORG.Util.Page');// 导入分页类
		$this->init();
		$pagenum = 15;
		isset($_GET['p'])?$np=$_GET['p'] : $np=1;
		$this->assign('newslist',getnewslist('page',$pagenum,$np));
		$count =  getnewslist('all');
		$Page = new Page($count[0][num],$pagenum);// 实例化分页类 传入总记录数和每页显示的记录数
		$show = $Page->show();// 分页显示输出
		$this->assign('page',$show);
		$this->display("lists");

	}
	public function addnews(){
	$this->init();
		$this->assign('typelist',getatypelist());
	
		$this->display("addnews");
	}
	public function doaddnews(){
		$this->init();
		$prams['title'] = $_POST['name'];
		$prams['atype'] = $_POST['typeid'];
		$prams['sortid'] = 1;
		$prams['addtime'] = time();
		$prams['msg'] =$_POST['msg'];
		$prams['isshow'] =1;
		$prams['count'] =1;
		if(insert('artices',$prams)){
			$this->success("添加新闻成功", '/index.php/admin/?m=news&a=index');
		}else{
			$this->error("添加失败", '/index.php/admin/?m=news&a=addnews');
		}
	}



	public function updatenews(){
		$this->init();
		$this->assign('typelist',getatypelist('first'));

		$product = getnews($_GET['id']);
		$this->assign('product',$product[0]);
		$this->display("updatenews");
	}

	public function doupdatenews(){
		$this->init();
		$prams['addtime'] = time();
		$prams['datestr'] = date('Y-m-d');
		$prams['title'] = $_POST['name'];
		$prams['atype'] = $_POST['typeid'];
		$prams['msg'] =$_POST['msg'];
		update('artices',$prams,' where id='.$_POST['id']);
		$result ='编辑成功';
		$this->success($result, '/index.php/admin/?m=news&a=index');
	}


	public function dodeletenews(){
		$this->init();
		$prams['isshow'] = 0;
		update('artices',$prams,' where id='.$_GET['id']);
	   $this->success("删除成功", '/index.php/admin/?m=news&a=index');
		
	}
	//加载二级分类
	public function loadnext(){
		$this->init();
		$typeid = $_GET['typeid'];
		$list = getcplist('second',$typeid);
		if(count($list)>0){
			echo "二级分类:<select name='typeid2'>";
			foreach($list as $v){
				echo "<option value=".$v['id'].">".$v['title']."</option>";
			}
			echo "</select>";
		}
	}
}

