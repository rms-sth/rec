<?php 
class ProductRatingByUser{
	function findProductRatingByUser($username){
		$conn = new mysqli('localhost','root','','db_recommend');
		
		 $sql = "SELECT pd.pname, rating, expiry_date, status 
            FROM tbl_user_register AS u 
            INNER JOIN tbl_bought AS b 
            ON u.uid = b.uid
            INNER JOIN tbl_product AS pd
            ON b.pid = pd.pid
            WHERE u.username = '" .$username ."'";
           
		$res = $conn->query($sql);
// print_r($res);
		$data = [];
		if($res->num_rows > 0){
			while ($row = $res->fetch_assoc()) {
				// array_push($data, $row);
				$data[] = array($row['pname']=>$row['rating']);

			}
		}
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";

	return $data;

	}
}

	?>