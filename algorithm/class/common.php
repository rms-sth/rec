<?php

abstract class Common{
	abstract function save();
	abstract function index();//listing
	abstract function edit();
	abstract function remove();

	function set($key, $value){
		$conn = new mysqli('localhost','root','','db_recommend');
		$value = $conn->real_escape_string($value);
		$this->$key = $value;
	}

	function insert($sql){
		$conn = new mysqli('localhost','root','','db_recommend');
		if($conn->connect_errno != 0){
			die("Database Connection error!!");
		}
		$conn->query($sql);
		if($conn->affected_rows == 1 && $conn->insert_id != 0 ){
			return $conn->insert_id;
		}else{
			return false;
		}
	}

	function select($sql){
		$conn = new mysqli('localhost','root','','db_recommend');
		// echo "<pre>";
		// print_r($conn);
		// echo "</pre>";
		if($conn->connect_errno != 0){
			die("Database Connection error!!");
		}
		$res = $conn->query($sql);
		//print_r($res);
		$data = [];
		if($res->num_rows > 0){
			while ($row = $res->fetch_assoc()) {
				array_push($data, $row);
			}
		}
		return $data ;
	}

	function delete($sql){
		$conn = new mysqli('localhost','root','','db_recommend');
		if($conn->connect_errno != 0){
			die("Database Connection error!!");
		}
		$conn->query($sql);
	}

	function update($sql){
		$conn = new mysqli('localhost','root','','db_recommend');
		if($conn->connect_errno != 0){
			die("Database Connection error!!");
		}
		$conn->query($sql);
		if($conn->affected_rows == 1){
			return true;
		}else{
			return false;
		}
	}
}

?>