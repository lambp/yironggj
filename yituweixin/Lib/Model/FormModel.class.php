<?php
class FormModel extends Model {
	protected $trueTableName = 'android_joken'; 
	protected $tableName = 'joken'; 
	   public function getuser(){
		return $this->query("select * from android_joken");
	   }
}

?>