<?php
class IndexAction extends Action {
    private function index_msg(){
        $index_msg = get_one('index_msg',array('id'=>1));
        $this->assign("index_msg",$index_msg);
    }
    private function menu_list(){
        $product_type =  get_all('product_type',array('pre_id'=>0));
        if(!empty($product_type)){
            foreach($product_type as &$v){
                $v['next_list']=get_all('product_type',array('pre_id'=>$v['id']));
            }
            $this->assign("product_type",$product_type);
        }
    }
	//主页	
	public function index(){

        $this->index_msg();

		$this->display("index");


	}
    public function about(){
        $about_id = $_REQUEST['about_id'];
        $this->assign('about_id',$about_id);

        $about = get_one('about_msg',array('id'=>$about_id));
        $this->assign("about",$about);

        $this->display("about");
    }
    public function products(){

        $this->index_msg();
        $this->menu_list();

        $product_id = $_REQUEST['pid'];
        $product_detail = get_one('product_list',array('id'=>$product_id));
        $this->assign("product_detail",$product_detail);

        $this->display('product');


    }
    public function products_list(){
        $this->index_msg();
        $this->menu_list();

        $product_list = get_all('product_list');
        $this->assign("product_list",$product_list);


        $this->display('product_list');


    }
    public function messages(){
        $this->display('message');
    }

    public function news_list(){

        $news_list = get_all('news_list');
        $this->assign("news_list",$news_list);
        $this->display("news_list");

    }

    public function news_detail(){
        $about_id = intval($_REQUEST['id']);
        if($about_id>0){
            $about = get_one('news_list',array('id'=>$about_id));
            $this->assign("about",$about);
            $this->display('news_detail');
        }else{
            $this->error('页面不存在','/');
        }

    }
    public function project(){
        $type_id = intval($_REQUEST['list_id']);
        if(empty($type_id)) $type_id=1;
        $project_list = get_all('project',array('typeid'=>$type_id),'*','limit 6');
        $this->assign("project_list",$project_list);
        $this->display('project');
    }
    public function group_list(){
        $group_list = get_all('about_msg',array('type_id'=>'group'),'*','limit 5');
        $this->assign("group_list",$group_list);

        $this->display('group_list');
    }
    public function group_detail(){
        $id = intval($_REQUEST['id']);
        if($id>0){
            $group = get_one('about_msg',array('id'=>$id));
            $this->assign("group",$group);
            $this->display('group_detail');
        }else{
            $this->error('找不到页面','/');
        }

    }

    public function appweb(){
        $this->display('appweb');
    }
}

