<?php
require_once "common.php";
require_once "config.php";
class Profile extends Common {
	public $reg_id, $username, $password, $email,$phone, $location, $sex, $profile_picture, $first_name, $middle_name, $last_name,$question ;

	public function save()
	{
		$sql = "insert into tbl_appointment (location,) values('$this->location') ";
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
		$sql = "SELECT * FROM tbl_register";
		$list = $this->select($sql);
		return $list;
	}
	public function SelectUserById() //listing
	{
		// $sql = "SELECT * FROM tbl_appointment";
		$sql = "SELECT * FROM tbl_register WHERE reg_id='$this->reg_id'";
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

	public function selectPagination(){
		$page = $_GET["page"];
        if($page=="" || $page=="1"){
            $page1 = 0;
        }else{
            $page1 = ($page*5)-5;
        }
		$sql = "SELECT * FROM tbl_room limit $page1, 5 ";
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