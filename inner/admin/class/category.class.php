<?php

require_once "common.php";

class Category extends Common{
	public $cid,$cname;

	public function save(){
		$sql = "INSERT INTO tbl_category(cname) values('$this->cname')";
		//echo "$sql";

		$result = $this->insert($sql);
		if($result){
			$_SESSION['success_message'] = "Category inserted successfully with $result";
			redirect("list_category.php");
		}else{
			return false;
		}



	}
	public function index(){
		$sql = "select * from tbl_category";
		$list = $this->select($sql);
		return $list;

	}
	public function edit(){

	}
	public function remove(){

	}
}


?>