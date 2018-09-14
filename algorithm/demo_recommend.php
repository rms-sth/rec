<?php 



//displaying all bought items
$conn = new mysqli('localhost','root','','db_recommend');
        
         $sql = "SELECT pd.pname, rating, expiry_date, status 
            FROM tbl_user_register AS u 
            INNER JOIN tbl_bought AS b 
            ON u.uid = b.uid
            INNER JOIN tbl_product AS pd
            ON b.pid = pd.pid";
           
        $res = $conn->query($sql);
// print_r($res);
        $data = [];
        if($res->num_rows > 0){
            while ($row = $res->fetch_assoc()) {
                array_push($data, $row);
                // $data[] = array($row['pname']=>$row['rating']);

            }
        }
        echo "<pre>";
        print_r($data);
        echo "</pre>";

    // return $data;
        // echo $result['bluetooth speaker lenovo'];
        $sql=[];
        

        foreach($result as $element => $namedate){
            // echo '<strong>' . $element . '</strong><br>';
            // foreach($namedate as $both) {
            //     echo $both . '<br>' ;
            // }
            $arr[]=$element;

            echo "<br><br>";
        }
        // print_r($arr);
        // echo $count = sizeof($arr);
        // echo "<br>";
        // // echo "$arr[0]";
        // echo "<br>";
        // for ($xx=0; $xx<$count-1;$xx++){
        //     $s = "'".$arr[$xx]."'" ."," ;
        //     }
        //     $s = $s ."'" .end($arr) ."'";
        //     echo "$s";


        $count = sizeof($arr);
        echo "$count";
        print_r($arr);
        echo "$arr[5]";
        echo "<br>";
        // echo "$arr[0]";
        echo "<br>";
        $s = implode("'|| pd.pname = '", $arr);
        // $s = implode()
        echo "$s";

        // for ($u=0; $u<=($count-2);$u++){
        //     $v = "$arr[$u]";
        //     // $s = "'".$v."'" ." || pd.pname = " ;

        //     }
        //     $s = $s ."'" .end($arr) ."'";
        //     echo "$s";
        
        
echo "<br><br>";

//displaying only recommended items

         $sql = "SELECT pd.pname, product_img, rating, expiry_date, status 
            FROM tbl_user_register AS u 
            INNER JOIN tbl_bought AS b 
            ON u.uid = b.uid
            INNER JOIN tbl_product AS pd
            ON b.pid = pd.pid where pd.pname = '$s'";
            echo "$sql";
            $res = $conn->query($sql);
            $d = [];
        if($res->num_rows > 0){
            while ($row = $res->fetch_assoc()) {
                array_push($d, $row);
                // $data[] = array($row['pname']=>$row['rating']);

            }
        }
         

        echo "<pre>";
        print_r($d );
        print_r($result);
        echo "<pre>";
        

 ?>