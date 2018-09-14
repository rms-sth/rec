<?php
require_once "common.php";
require_once "config.php";
class Product extends Common {
	public $id, $patient_name, $age, $gender,$address, $contact, $description, $doctor_id, $created_date;

	public function save()
	{
		$sql = "insert into tbl_appointment (patient_name,age,gender,address, contact, description, doctor_id, created_date) values('$this->patient_name', '$this->age', '$this->gender', '$this->address',  '$this->contact',  '$this->description', '$this->doctor_id', '$this->created_date') ";
		$result = $this->insert($sql);
		if($result){
			// $_SESSION['success_message'] = "Congratulation!!! Form inserted successfully !!";
			//redirect('list_doctor.php');
			echo "<div class = 'alert alert-success'>" ."<br> Congratulation!!! Form inserted successfully !!" ."</div>";
		}else{
			return false;
		}
	}
	public function index() //listing
	{
		// $sql = "SELECT * FROM tbl_appointment";
	$sql = "SELECT tbl_product.pname, tbl_bought.rating FROM tbl_bought LEFT JOIN tbl_product on tbl_product.pid = tbl_bought.pid";
		$list = $this->select($sql);
		return $list;
	}
	
	public function remove()
	{
		$sql = "DELETE FROM tbl_appointment WHERE id='$this->id'";
		$this->delete($sql);
		
	}

	public function edit()
	{
		
		
	}

	public function selectCategoryByID(){
		$sql = "SELECT * FROM tbl_doctor WHERE id='$this->id' ";
		$list = $this->select($sql);
		return $list;
	}

	public function selectAllActiveCategory(){
		$sql = "SELECT * FROM tbl_doctor WHERE status=1 ORDER BY name";
		$list = $this->select($sql);
		return $list;
	}
	
}


?>