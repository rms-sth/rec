	<?php 


	if(isset($_POST['signup'])){
		if (isset($_POST['username']) && !empty($_POST['username'])) {
			$username = $_POST['username'];
			$email = $_POST['username'];
		}else{
			$errUsername = "Please enter the Username";
		}
		if (isset($_POST['password']) && !empty($_POST['password'])) {
			$password = $_POST['password'];
		}else{
			$errPassword = "Please enter the password";
		}
		if (isset($_POST['firstname']) && !empty($_POST['firstname'])) {
			$firstname = $_POST['firstname'];
		}else{
			$errFirstname = "Please enter the firstname";
		}
		if (isset($_POST['lastname']) && !empty($_POST['lastname'])) {
			$lastname = $_POST['lastname'];
		}else{
			$errLastname = "Please enter the lastname";
		}
		if (isset($_POST['email']) && !empty($_POST['email'])) {
			$email = $_POST['email'];
		}else{
			$errEmail = "Please enter the email";
		}

		$conn=mysqli_connect('localhost','root','','db_recommend');
		if(!$conn){
			echo "Not connected to database";
		}
		else if(isset($email) && isset($password) && isset($firstname) && isset($lastname) &&isset($username)){
			$firstname=$_POST['firstname'];
			$middlename=$_POST['middlename'];
			$lastname=$_POST['lastname'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			$email=$_POST['email'];
			$sql="INSERT INTO tbl_user_register (firstname,middlename,lastname,username,password,email) VALUES ('$firstname','$middlename','$lastname','$username','$password','$email')";
			// echo $sql;
			if (!mysqli_query($conn,$sql)) {
			echo "<h1>Cant register your account</h1>";
		}else{
			echo "<h1>successfully registered. Please login to go to Home Page </h1>";
		}


		}
		
	}
	class User{

		public $username,$password,$status,$email;

		public function login()
		{
			
			$sql1="select * from tbl_user_register where username='$this->username' and password='$this->password'";
			$conn=mysqli_connect('localhost','root','','db_recommend');
			
			if(!$conn){
				echo "Not connected to database";
			}

			
			
			$res = $conn->query($sql1);
			print_r($res);
			if ($res->num_rows == 1) {
				$data = $res->fetch_assoc();
				session_start();
				$_SESSION['username'] = $data['username'];
				$_SESSION['login_message'] = 'Welcome ' . $data['username'] . ', You are successfully logged in';
				/*header('location:/inner/index.php');*/
			} else {
				return false;
			}
			
		}

	}


	?>
