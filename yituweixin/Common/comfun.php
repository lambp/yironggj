<?php
	//查询数据-列表
	function getDatalist($sql){
		$db = new Model();
		return $db->query($sql);
	}
	//查询获取单个数据
	function getoneres($sql){
		$db = new Model();
		$res = $db->query($sql);
		if(count($res)>0){
		   return $res[0];
		}else{
			return false;
		}
	}
    function get_all($table,$where='',$option='*',$limit='',$sort=''){
        $sql = 'select '.$option.' from '.$table.'';
        $where_sql = ' where ';
        if(is_array($where)){
            $count = count($where);
            foreach($where as $key=>$val){
                if($count>1){
                    $where_sql.= ' '.$key.'='."'$val' and ";
                }else{
                    $where_sql.= ' '.$key.'='."'$val'";
                }
                $count--;
            }
        }elseif($where==''){
            $where_sql = '';
        }

        $sql.=$where_sql.$sort.$limit;
        return getDatalist($sql);
    }
    function get_one($table,$where,$option='*'){

        $where_sql=' where ';
        if(is_array($where)){
            $count = count($where);
            foreach($where as $key=>$val){
                if($count>1){
                    $where_sql.= ' '.$key.'='."'$val' and ";
                }else{
                    $where_sql.= ' '.$key.'='."'$val'";
                }
                $count--;
            }
        }
        $sql = 'select '.$option.' from '.$table.$where_sql;
        return getoneres($sql);
    }

//return str_replace(
//    array($this->_like_escape_chr, '%', '_'),
//    array($this->_like_escape_chr.$this->_like_escape_chr, $this->_like_escape_chr.'%', $this->_like_escape_chr.'_'),
//    $str
//);
	//插数据
	function insert($table,$prams){
		$db = new Model();
		$sql = "";
		$keys = " (";
		$values = " (";
		$count = count($prams);
		$i=1;
		foreach($prams as $key=>$value){
			if($i==$count){
				$keys .= $key.')';
				$values .= "'".$value."'".')';
			}else{
				$keys .= $key.',';
				$values .= "'".$value."'".',';
			}
			$i++;
		}
		$sql = "insert into ".$table.$keys.' values '.$values;
		return $db->execute($sql);
	}
	//修改数据
	function update($table,$prams,$where){
		$db = new Model();
		$count = count($prams);
		$set = " set ";
		$i=1;
		foreach($prams as $key=>$value){
			if($i==$count){
				$set .= $key."='".$value."' ";
			}else{
				$set .= $key."='".$value."',";
			}
			$i++;
		}
        $where_sql=' where ';
        if(is_array($where)){

            $count=count($where);
            $i=1;
            foreach($where as $key=>$value){
                if($i==$count){
                    $where_sql .= $key."='".$value."' ";
                }else{
                    $where_sql .= $key."='".$value."' and ";
                }
                $i++;
            }

        }else{
            $where_sql=$where;
        }
	    $sql = "update ".$table.$set.$where_sql;
		return $db->execute($sql);

	}
	//
	function dologin($name,$pass){
		$db = new Model();
		$password=md5($pass);
		$sql = "select * from "."members where username='$name' and password='$password'";
		//echo $sql;exit;
		$res = $db->query($sql);
		if(count($res)>0){
			return $res[0]['id'];
		}
		else{
			return false;
		}
	}
	//上传图片
	function img_upload($savepath,$width=array('600,600','240,240'),$gif=false) {
        import("@.ORG.UploadFile");
        //导入上传类
        $upload = new UploadFile();       //设置上传文件大小
        $upload->maxSize = 3292200;       //设置上传文件类型
        $upload->allowExts = explode(',', 'jpg,gif,png,jpeg');        //设置附件上传目录
        $upload->savePath = ROOT.'/images/'.$savepath.'/';        //设置需要生成缩略图，仅对图像文件有效
        $upload->thumb = true;        // 设置引用图片类库包路径
        $upload->imageClassPath = '@.ORG.Image';        //设置需要生成缩略图的文件后缀
        $upload->thumbPrefix = 'm_,s_';  //生产2张缩略图        
        $upload->thumbMaxWidth = $width[0];         //设置缩略图最大宽度
        $upload->thumbMaxHeight = $width[1];        //设置缩略图最大高度
        $upload->saveRule = uniqid;         //设置上传文件规则
        $upload->thumbRemoveOrigin = false;//删除原图
		if($gif){
		   $upload->thumbPrefix = 's_';  //生产2张缩略图
			 //设置缩略图最大宽度
			$upload->thumbMaxWidth = '50';
			//设置缩略图最大高度
			$upload->thumbMaxHeight = '50';
      
			 //删除原图
			$upload->thumbRemoveOrigin = false;
		}
        if (!$upload->upload()) {
            //捕获上传异常
            print_r($upload->getErrorMsg());
        } else {
            //取得成功上传的文件信息
            $uploadList = $upload->getUploadFileInfo();
            import("@.ORG.Image");
            //给m_缩略图添加水印, Image::water('原文件名','水印图片地址')
           // Image::water($uploadList[0]['savepath'] . 'm_' . $uploadList[0]['savename'], ROOT.'/Public/Images/logo2.png');
            $_POST['image'] = $uploadList[0]['savename'];
        }
		return $_POST;
	}
#去标签
function uhtml($str)
{
    $farr = array(
        "/(法轮功|好孕网|&middot;|&rdquo;|&ldquo;|&hellip;)/isU",          //过滤敏感词
        "/<\/(div|script|i?frame|a|input)>/i", //过滤div等标签
        "/<(\/?)(div|script|i?frame|a)([^>]*?)>/isU"
    );
    $tarr = array(
        "",
        "",
        "",
    );
    $str = preg_replace( $farr,$tarr,$str);
    //echo $str;
    return $str;
}
#获取文章里面的图片地址
function get_img_url($msg){
        $preg1 = '/<img(.*?)src="(.*?)"(.*?)>/i';
        $preg2 = "/<img(.*?)src='(.*?)'(.*?)>/i";
       preg_match_all($preg1,$msg,$res1);
       preg_match_all($preg2,$msg,$res2);
      $res=array_merge_recursive($res1[2],$res2[2]);

    return $res;
}
#图片抓取并保存
function load_img_data($img_url,$paths){
    #root需要配置
    $root = '/Users/lambp/Documents/phpsource/fineCMS/static';
    $filepath= $root.'/images/';
    $path = $filepath.$paths[0].'/'.$paths[1].'/';
    if(!is_dir($filepath.$paths[0])){
        mkdir($filepath.$paths[0]);
    }

    if(!is_dir($filepath.$paths[0].'/'.$paths[1])){
        mkdir($filepath.$paths[0].'/'.$paths[1]);
    }

    if(!empty($img_url)){
        $res = array();
        $i=1;
        foreach($img_url as $url){
            $name = explode('.',$url);
            $imgdata= file_get_contents($url);

            $filename=$paths[0].$paths[1].$paths[2].'-'.$i.".".$name[count($name)-1];
            $fp = @fopen($path.$filename,"w"); //以写方式打开文件
            @fwrite($fp,$imgdata); //
            fclose($fp);
            if(is_file($path.$filename)){
                $res[$filename]='/static/images/'.$paths[0].'/'.$paths[1].'/';
            }else{
                //$res[$filename]=$url;       #如果
            }
            $i++;
        }
        return $res;
    }

}
#获取链接
function get_urls($msg,$langs){
    preg_match_all('/<a(.*?)href="(.*?)"(.*?)>(.*?)<\/a>/i',$msg,$res1);
    preg_match_all("/<a(.*?)href='(.*?)'(.*?)>(.*?)<\/a>/i",$msg,$res2);
    $reg=array();
    $reg=array_merge_recursive($res1,$res2);
    if(count($reg[4])){
        if($langs){
            foreach($reg[4] as &$v){
                $v =  iconv($langs,'utf-8',$v);
            }
            foreach($reg[2] as &$v){
                $v =  iconv($langs,'utf-8',$v);
            }
        }
    }
    return $reg;
}
#检查编码是否为utf-8
function check_lang($msg){

    preg_match('/content="(.*?)charset=(.*?)"/i',$msg,$lang);
    // print_r($lang);
    $langs=str_replace("'",'',$lang[2]);
    $langs=strtolower($langs);
    if($langs!='utf-8'){
        return $langs;
    }else{
        return false;
    }
}

function replace_image($str,$local_img,$img_url){

}
