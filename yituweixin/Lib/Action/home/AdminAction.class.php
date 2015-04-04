<?php
class AdminAction extends Action {
	private function init(){
		//$getmsg = new NavigatModel();
        //$navlist =  $getmsg->getnavlist();
		if(!session('?loginid')){
			$this->error('您还没有登录','/?m=admin&a=login');
		}
		
	}
	public function login(){
		$this->display("login");
	}

    public function dologin(){
        /*
        if(md5($_POST['cap_code']) != $_SESSION['verify']){
            $this->error('验证码错误！');
        }else{
        */
        #$res = dologin($_POST['username'],$_POST['password']);
        //echo $_POST['password'];exit;
        $res=false;
       if($_POST['username']=='admin'&&$_POST['password']=='admin'){
           $res=true;
       }

        if($res){
            session('loginid',$res);
            $this->success('登录成功','/?m=admin');
        }else{
            $this->error('用户名或密码错误','/?m=admin&a=login');
        }
        //}

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

    //首页管理
    public function manageindex(){
        $this->init();
        $indeximsg = get_one('index_msg',array('id'=>1));
        $this->assign("initmsg",$indeximsg);
        $this->display("manageindex");

    }

    #修改主页内容
    public function doupdateindex(){
        $this->init();
        $prams['title'] = $_POST['title'];
        $prams['url']   = $_POST['url'];
        $prams['company'] =$_POST['company'];
        $prams['qq_weibo'] =$_POST['qq_weibo'];
        $prams['sina_weibo'] =$_POST['sina_weibo'];
        $prams['weixin'] =$_POST['weixin'];
        $prams['beian'] = $_POST['beian'];

        if(false!==update('index_msg',$prams,' where id='.$_POST['id'])){
            $result ='编辑成功';
            $this->success($result, '/?m=admin&a=manageindex');
        }else{
            $result ='编辑出错';
            $this->error($result, '/?m=admin&a=manageindex');
        }

    }
    #伊融国际
    public function about(){

        $this->init();
        $param = $_REQUEST;

        if(isset($param['type'])&&$param['type']=='about'){
            $aboutlist = get_all('about_msg',array('type_id'=>$param['type']));
            $this->assign("aboutlist",$aboutlist);
            $this->display("about_list");
        }else{
            $about = get_one('about_msg',array('id'=>$param['id']));
            $this->assign("about",$about);
            $this->display("about_detail");
        }

    }

    #伊融国际
    public function update_about(){

        $this->init();
        $param = $_REQUEST;
        $id = intval($param['id']);
        if($id>0&&$param['type']=='about'){
            if(strlen($_FILES["image"]["name"])>0){

                $res = img_upload('about',array('800,600','400,300'));
                $prams['message'] = $param['msg'];
                $prams['image'] = $res['image'];

            }else{

                $prams['message'] = $param['msg'];
            }

            if(false!==update('about_msg',$prams,' where id='.intval($id))){
                $result = '编辑成功';
                $this->success($result, '/?m=admin&a=about&type=about');
            }else{
                $result = '编辑出错';
                $this->error($result, '/?m=admin&a=about&id='.$id);
            }
        }else{
            $result = '编辑出错';
            $this->error($result, '/?m=admin&a=about&type=about');
        }

    }

   #团队组成
    public function group(){

        $this->init();
        $param = $_REQUEST;

        if(isset($param['type'])&&$param['type']=='group'){
            $aboutlist = get_all('about_msg',array('type_id'=>$param['type']));
            $this->assign("aboutlist",$aboutlist);
            $this->display("group_list");
        }else{
            $about = get_one('about_msg',array('id'=>$param['id']));
            $this->assign("about",$about);
            $this->display("group_detail");
        }

    }

    #团队组成
    public function update_group(){

        $this->init();
        $param = $_REQUEST;

        $id = intval($param['id']);
        if($id>0&&$param['type']=='group'){
            if(strlen($_FILES["image"]["name"])>0){

                $res = img_upload('about',array('800,600','400,300'));
                $prams['message'] = $param['msg'];
                $prams['title'] = $param['title'];
                $prams['image'] = $res['image'];

            }else{
                $prams['title'] = $param['title'];
                $prams['message'] = $param['msg'];
            }

            if(false!==update('about_msg',$prams,' where id='.intval($id))){
                $result = '编辑成功';
                $this->success($result, '/?m=admin&a=group&type=group');
            }else{
                $result = '编辑出错';
                $this->error($result, '/?m=admin&a=group&id='.$id);
            }
        }else{
            $result = '编辑出错';
            $this->error($result, '/?m=admin&a=group&type=group');
        }

    }


    #资讯活动
    public function news(){

        $this->init();
        $param = $_REQUEST;
        if(isset($param['id'])&&$param['id']>0){
            $about = get_one('news_list',array('id'=>intval($param['id'])));
            $this->assign("about",$about);
            $this->display("news_detail");
        }else{

            $news_list = get_all('news_list');
            $this->assign("news_list",$news_list);
            $this->display("news_list");
        }

    }

    ##资讯活动
    public function update_news(){

        $this->init();
        $param = $_REQUEST;
        $id = intval($param['id']);
        if($id>0){
            if(strlen($_FILES["image"]["name"])>0){

                $res = img_upload('about',array('800,600','400,300'));
                $prams['title'] = $param['title'];
                $prams['message'] = $param['msg'];
                $prams['summary'] = $param['summary'];
                $prams['image'] = $res['image'];
                $prams['add_time'] = time();

            }else{
                $prams['title'] = $param['title'];
                $prams['summary'] = $param['summary'];
                $prams['message'] = $param['msg'];
                $prams['add_time'] = time();
            }

            if(false!==update('news_list',$prams,' where id='.intval($id))){
                $result = '编辑成功';
                $this->success($result, '/?m=admin&a=news');
            }else{
                $result = '编辑出错';
                $this->error($result, "/?m=admin&a=news&id=$id");
            }
        }else{
            $result = '找不到';
            $this->error($result, '/?m=admin&a=news');
        }

    }

    #产品分类
    public function product_type(){
        $cptype =  get_all('product_type',array('pre_id'=>0));
        if(!empty($cptype)){
            foreach($cptype as &$v){
                $v['nextlist']=get_all('product_type',array('pre_id'=>$v['id']));
            }
            $this->assign("cptype",$cptype);
        }
        $this->display("product_type");
    }
    public function add_product_type(){
        $typelist=get_all('product_type',array('pre_id'=>0));
        $this->assign("typelist",$typelist);
        $this->display("add_product_type");
    }
    public function do_add_product_type(){
        $param = array();
        $param['pre_id'] = intval($_REQUEST['typeid']);
        $param['title']  = trim($_REQUEST['typename']);
        if(false!==insert('product_type',$param)){
            $result = '添加成功';
            $this->success($result, '/?m=admin&a=product_type');
        }else{
            $result = '添加出错';
            $this->error($result, '/?m=admin&a=add_product_type');
        }
    }

    #产品列表
    public function product_list(){
        $type_list = get_all('product_list');
        $this->assign("product_list",$type_list);

        $this->display("product_list");
    }
    #新增产品
    public function product_new(){
        $top_list = get_all('product_top',array('type_id'=>1));
        $this->assign("top_list",$top_list);

        $type_list = get_all('product_type',array('pre_id'=>0));
        $this->assign("type_list",$type_list);

        $this->display("product_new");
    }

    public function do_product_new(){
        $this->init();
            $param = $_REQUEST;
            $prams=array();
            if(strlen($_FILES["image"]["name"])>0){

                $res = img_upload('products',array('800,800','400,400'));

                $prams['image'] = $res['image'];

            }else{
                $this->error("至少要上传一张主图", '/?m=admin&a=product_new');
            }

            $prams['title'] = $param['name'];
            $prams['pcode'] = $param['typename'];
            $prams['message'] = $param['msg'];
            $prams['top_id'] = $param['top_id'];
            $prams['type_id_1'] = $param['type_id'];
            $prams['type_id_2'] = $param['type_id_2'];
            $prams['addtime'] = time();
            $prams['click_num'] = 5;
            if(false!==insert('product_list',$prams)){
                $result = '添加成功';
                $this->success($result, '/?m=admin&a=product_new');
            }else{
                $result = '添加出错';
                $this->error($result, '/?m=admin&a=product_new');
            }

    }

    #案例列表
    public function project(){
        $type_list = get_all('project');
        $this->assign("project_list",$type_list);
        $this->display("project_list");
    }
    public function update_project(){
        $id = intval($_REQUEST['id']);
        $project = get_one('project',array('id'=>$id));
        $this->assign("project",$project);
        $this->display("project_update");
    }
    public function project_new(){


        $this->display("project_new");
    }

    public function do_project_new(){
        $this->init();
        $param = $_REQUEST;

            if(strlen($_FILES["image"]["name"])>0){
                $res = img_upload('products',array('800,600','400,300'));
                $prams['image'] = $res['image'];
            }
            $prams['title'] = trim($param['title']);
            $prams['typeid'] = intval($param['typeid']);
            $prams['addtime'] = time();
            if(false!==insert('project',$prams)){
                $result = '添加成功';
                $this->success($result, '/?m=admin&a=project_new');
            }else{
                $result = '添加出错';
                $this->error($result, "/?m=admin&a=project_new");
            }

    }
    public function do_update_project(){
        $this->init();
        $param = $_REQUEST;
        $id = intval($param['id']);
        if($id>0){
            if(strlen($_FILES["image"]["name"])>0){
                $res = img_upload('products',array('800,600','400,300'));
                $prams['image'] = $res['image'];
            }
            $prams['title'] = trim($param['title']);
            $prams['typeid'] = intval($param['typeid']);
            $prams['addtime'] = time();
            if(false!==update('project',$prams,' where id='.intval($id))){
                $result = '编辑成功';
                $this->success($result, '/?m=admin&a=update_project&id='.$id);
            }else{
                $result = '编辑出错';
                $this->error($result, "/?m=admin&a=update_project&id=".$id);
            }
        }else{
            $result = '添加出错';
            $this->error($result, "/?m=admin&a=project");
        }

    }

    public function update_product(){
        $id = intval($_REQUEST['id']);
    }

    public function delete_product(){
        $id = intval($_REQUEST['id']);
        $this->success("删除成功", '/?m=admin&a=product_list');

    }
    #案例工程




    public function get_type_list(){
        $typeid = $_GET['typeid'];
        $list = get_all('product_type',array('pre_id'=>$typeid));
        if(!empty($list)>0){
            echo "二级分类:<select name='type_id_2' id='type_id_2'>";
                foreach($list as $v){
                    echo "<option value=".$v['id'].">".$v['title']."</option>";
                }
            echo "</select>";
        }else{
            echo "二级分类:<select name='type_id_2' id='type_id_2'>";

                echo "<option value=0>".'暂无'."</option>";

            echo "</select>";
        }
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

