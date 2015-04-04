<?php
	function getpinpai(){
		return getDatalist("select * from pinpai");
	}
	function getcolors(){
		$sql = "select id,name as text from colors order by name";
		return getDatalist($sql);
	}
	function gettypes(){
		return getDatalist("select * from types");
	}
	function getsizes(){
		$sql = "select id,name as text from size order by name";
		return getDatalist($sql);
	}
	//获取库存表头字段
	function getstoreheader($pid){
		$list = getDatalist("select b.id as id,b.name from stores as a left join(size as b) on(b.id=a.sizeid) where a.pid=$pid and a.static=1 group by b.id");
		$header=array();
		array_push($header,array('id'=>"colorid","value"=>"颜色/尺码"));
		foreach($list as $val){
			array_push($header,array('id'=>"sid_".$val['id'],"value"=>$val['name']));
		}
		return $header;
	}