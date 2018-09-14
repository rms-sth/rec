<?php
require_once "class/common.php";
require_once "class/config.php";
class User extends Common{
	public $uid, $firstname,$middlename,$lastname, $username, $email, $password;

	public function login()
	{
		
		$sql = "SELECT * FROM tbl_admin_register WHERE (username = '$this->username' || email = '$this->email') and password='$this->password' ";
		$conn = new mysqli('localhost','root','','db_recommend');
		
		if($conn->connect_errno != 0){
			die("Database Connection error!!");
		}
		$res = $conn->query($sql);
		// print_r($res);
		if($res->num_rows == 1 ){
			$data = $res->fetch_assoc();
			@session_start();
			// print_r($data);
			//$_SESSION['email'] = $this->email;
			
			$_SESSION['username'] = $data['username'];
			$_SESSION['email'] = $data['email'];
			$_SESSION['message_login'] = 'Welcome, ' .$data['username']. '!! You are successfully logged in!!';
			// header('location:dashboard.php');
			redirect('dashboard.php');
		}else{
			return false;
		}
	}

	public function save()
	{
		
		$sql = "insert into tbl_admin_register (firstname,middlename,lastname,username,password,email) values('$this->firstname','$this->middlename','$this->lastname','$this->username', '$this->password', '$this->email') ";
		echo $sql;
		$conn = new mysqli('localhost','root','','db_recommend');
		$result = $this->insert($sql);
		if($result){
			$_SESSION['success_message'] = "User Inserted successfully with $result";
			redirect('list_user.php');
		}else{
			return false;
		}
	}

	public function index() //listing
	{
		$sql = "SELECT * FROM tbl_admin_register";
		$list = $this->select($sql);
		return $list;
	}
	public function edit()
	{
		$this->password=md5($this->password);
		$sql = "UPDATE tbl_admin_register SET name='$this->name',username='$this->username', password='$this->password', email='$this->email', status='$this->status' WHERE id='$this->id'";
		//print_r($sql);
		$result = $this->update($sql);
		if($result){
			$_SESSION['success_message'] = "User Updated successfully";
			//header('location:list_category.php');
			redirect('list_user.php');
		}else{
			return false;
		}
		
	}
	public function remove()
	{
		$sql = "DELETE FROM tbl_admin_register where id='$this->id'";
		$this->delete($sql);
		redirect('list_user.php');
	}

	public function selectUserByID(){
		$sql = "SELECT * FROM tbl_admin_register WHERE id='$this->id' ";
		$list = $this->select($sql);
		return $list;
	}

}


?>