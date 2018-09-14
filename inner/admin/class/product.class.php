<?php

require_once "common.php";

class Product extends Common{
	public $pid,$pname,$price,$cid,$product_img;

	public function save(){
		$sql = "INSERT INTO tbl_product(pname,price,cid,product_img) values('$this->pname', '$this->price', '$this->cid','$this->product_img')";
		// echo "$sql";

		$result = $this->insert($sql);
		if($result){
			$_SESSION['success_message'] = "Product inserted successfully with $result";
			redirect("list_product.php");
		}else{
			return false;
		}
	}
	
	public function index(){
		$sql = "select p.*, c.cname from tbl_product as p join tbl_category as c on c.cid=p.cid";
		$list = $this->select($sql);
		return $list;
	}
	public function edit(){

	}
	public function remove(){

	}
}


?>