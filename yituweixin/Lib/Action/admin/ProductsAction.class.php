<?php
class ProductsAction extends Action {
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
		$this->assign('typelist',getcplist('first'));
		$pagenum = 15;
		isset($_GET['p'])?$np=$_GET['p'] : $np=1;
		$this->assign('productlist',getproductlist('page',$pagenum,$np));
		$count =  getproductlist('all');
		$Page       = new Page($count[0][num],$pagenum);// 实例化分页类 传入总记录数和每页显示的记录数

		$show       = $Page->show();// 分页显示输出

		$this->assign('page',$show);
		$this->display("lists");
	}
	//分类管理
	public function types(){
		$this->init();
		$this->assign('cptype',getcplist());
		$this->display("types");
	}
	
	public function addtype(){
		$this->init();
		$this->assign('typelist',getcplist('first'));
		$this->display("addtype");
	}

	public function doaddtype(){
		$this->init();
		$prams['title'] = trim($_POST['typename']);
		$prams['preid'] = $_POST['typeid'];

		if(!empty($prams['title'])){
			$rs = checkval("select * from ".PRE."cptype where title='".$prams['title']."' and preid='".$prams['preid']."'");
			if(1==count($rs)){
				$this->error("分类名:".$prams['title'],'/index.php/admin/?m=products&a=addtype');
			}else{

				insert('cptype',$prams);
				$this->success("添加成功", '/index.php/admin/?m=products&a=types');
			}

		}else{
			$this->error("分类名不能为空",'/index.php/admin/?m=products&a=addtype');
			
		}
	}
	public function updatetype(){
		$this->init();
		extract($_REQUEST);
		$rs = checkval("select * from ".PRE."cptype where id='".$id."'");
		$this->assign('oldrs',$rs[0]);
		$this->assign('typelist',getcplist('first'));
		$this->display("updatetype");

	}
	public function doupdatetype(){
		$this->init();
		extract($_REQUEST);
		if(empty($typename)){
			$this->error("分类名称不能为空", '/index.php/admin/?m=products&a=updatetype&id=$id');
		}
		$rs = checkval("select * from ".PRE."cptype where preid='".$toptypeid."' and title='".$typename."' and id!='".$id."'");
		if(count($rs)>0){
			$this->error("分类:".$typename."已经存在", "/index.php/admin/?m=products&a=updatetype&id='$id'");
		}else{
			$prams['title'] = $typename;
			$prams['preid'] = $toptypeid;
			update('cptype',$prams," where id='$id'");
			$this->success($result, '/index.php/admin/?m=products&a=types');
		}
	}
	public function addproduct(){
		$this->init();
		$this->assign('typelist',getcplist('first'));
		$this->display("addproduct");
	}
	public function doaddproduct(){
		$this->init();
		$res = img_upload('products');
		$prams['title'] = $res['name'];
		$prams['typename'] = $res['typename'];
		$prams['typeid'] = $res['typeid'];
		$prams['typeid2'] = isset($res['typeid2'])?$res['typeid2']:-1;
		$prams['img'] = $res['image'];
		$prams['sortid'] = 1;
		$prams['showindex'] = 1;
		$prams['addtime'] = time();
		$prams['msg'] =$res['msg'];
		if(insert('cplist',$prams)){
			$this->assign('result',"添加成功");
			$this->assign('typelist',getcplist('first'));
			$this->display("addproduct");
		}else{
			$this->assign('result',"添加失败，请联系管理员");
		}
	}

	public function uploadimg(){
		$this->init();
		$res = img_upload('products');
		$restr= '/images/products/m_'.$res['image']."";
		echo $restr;
	}

	public function updateproduct(){
		$this->init();
		$this->assign('typelist',getcplist('first'));

		$product = getproduct($_GET['id']);
		$this->assign('product',$product[0]);
		$this->assign('secondid',$product[0]['typeid2']);
		$this->assign('secondlist',getcplist('second',$product[0]['typeid']));
		$this->display("updateproduct");
	}

	public function doupdateproduct(){
		$this->init();
		if(strlen($_FILES["image"]["name"])>0){
			$res = img_upload('products');
				$prams['title'] = $res['name'];
				$prams['typename'] = $res['typename'];
				$prams['typeid'] = $res['typeid'];
				$prams['typeid2'] = isset($res['typeid2'])?$res['typeid2']:-1;
				$prams['img'] = $res['image'];
				$prams['msg'] =$res['msg'];
				update('cplist',$prams,' where id='.$res['id']);
				$result = '编辑成功';

		}else{
				$prams['title'] = $_POST['name'];
				$prams['typename'] = $_POST['typename'];
				$prams['typeid'] = $_POST['typeid'];
				$prams['typeid2'] = isset($_POST['typeid2'])?$_POST['typeid2']:-1;
				$prams['msg'] =$_POST['msg'];
				update('cplist',$prams,' where id='.$_POST['id']);
				$result ='编辑成功';
			
		}
		$this->success($result, '/index.php/admin/?m=products&a=index');
		//  header('Location: /index.php/admin/?m=products&a=index');
	}


	public function dodeleteproduct(){
		$this->init();
		$prams['showindex'] = 0;
		update('cplist',$prams,' where id='.$_GET['id']);
	    header('Location: /index.php/admin/?m=products&a=index');
		
	}
	//加载二级分类
	public function loadnext(){
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

