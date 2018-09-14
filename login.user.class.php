<?php
require_once "inner/admin/class/common.php";
require_once "inner/admin/class/config.php";
class LoginUser extends Common{
	public $id, $name, $username, $email, $password, $status;

	public function login()
	{
		// $this->password = md5($this->password);
		$sql = "SELECT * FROM tbl_user_register WHERE (username = '$this->username' || email = '$this->email') and password='$this->password' ";
		$conn = new mysqli('localhost','root','','db_recommend');
		
		if($conn->connect_errno != 0){
			die("Database Connection error!!");
		}
		$res = $conn->query($sql);
		if($res->num_rows == 1 ){
			$data = $res->fetch_assoc();
			// $_SESSION['email'] = $this->email;
			$_SESSION['user'] = $data['username'];
			$_SESSION['email'] = $data['email'];
			$_SESSION['message'] = 'Welcome, ' .$data['username']. '!! You are successfully logged in!!';
			
			if($data['username'] == $this->username && $data['password']==$this->password){
				setcookie('user',$this->username,(time()+2*24*60*60));
			}
			// header('location:dashboard.
			redirect('inner/');
		}else{
			return false;
		}
	}

	public function save()
	{
		$this->password= md5($this->password);
		$sql = "insert into tbl_user_register (name,username,email,password) values('$this->name', '$this->username', '$this->email', '$this->password') ";
		$conn = new mysqli('localhost','root','','db_newsportal');
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
		$sql = "SELECT * FROM tbl_user_register";
		$list = $this->select($sql);
		return $list;
	}
	public function edit()
	{
		$this->password=md5($this->password);
		$sql = "UPDATE tbl_user_register SET name='$this->name',username='$this->username', password='$this->password', email='$this->email', status='$this->status' WHERE id='$this->id'";
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
		$sql = "DELETE FROM tbl_user_register where id='$this->id'";
		$this->delete($sql);
		redirect('list_user.php');
	}

	public function selectUserByID(){
		$sql = "SELECT * FROM tbl_user_register WHERE id='$this->id' ";
		$list = $this->select($sql);
		return $list;
	}

}


?>