<?php
class NavigatModel extends Model {
	  
	  protected $navigat = 'qy_navigat'; 
	  
	  //导航列表
	   public function getnavlist(){
		  $sql = "select * from ".$this->navigat." where static=1 order by sortid desc";
		   
		return $this->query($sql);
	   }

}

?>