<?php
require_once 'ProductRatingByUser.php';
class DistinctUsers{
	function findDistinctUsers(){
		
		$conn = new mysqli('localhost','root','','db_recommend');
		$sql = "SELECT DISTINCT username FROM tbl_user_register ORDER BY username ASC";
		$res = $conn->query($sql);
// print_r($res);
		$data = [];
		if($res->num_rows > 0){
			while ($row = $res->fetch_assoc()) {
				array_push($data, $row);
			}
		}
		return $data;
	}
}
?>