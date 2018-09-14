<?php
require_once "../algorithm/alg_recommend_items.php";

$conn = new mysqli('localhost','root','','db_recommend');
if($conn->connect_errno != 0){
    die("Database Connection error!!");
}        
$sql = "SELECT COUNT(pid) FROM tbl_product";
$res = $conn->query($sql);
$row = mysqli_fetch_row($res);
$rows = $row[0];
$page_rows = 6;
$last = ceil($rows/$page_rows);

if($last < 1){
    $last = 1;
}

$pagenum = 1;
if(isset($_GET['page'])){
    $pagenum = preg_replace('#[^0-9]#', '', $_GET['page']);
}
if ($pagenum < 1) { 
    $pagenum = 1; 
} else if ($pagenum > $last) { 
    $pagenum = $last; 
}

$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
$sql3 = "SELECT * FROM tbl_product $limit";

$result = $conn->query($sql3);
// print_r($result);

$textline1 = "Recommended Items Form database : (<b>$rows</b>)";
$textline2 = "Page <b>$pagenum</b> of <b>$last</b>";

$paginationCtrls = '';
if($last != 1){
    if ($pagenum > 1) {
        $previous = $pagenum - 1;
        $paginationCtrls .= '<li><a href="'.$_SERVER['PHP_SELF'].'?page='.$previous.'"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li> &nbsp; &nbsp; ';
        for($i = $pagenum-4; $i < $pagenum; $i++){
            if($i > 0){
                $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?page='.$i.'">'.$i.'</a> &nbsp; ';
            }
        }
    }
    $paginationCtrls .= ''.$pagenum.' &nbsp; ';
    for($i = $pagenum+1; $i <= $last; $i++){
        $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?page='.$i.'">'.$i.'</a> &nbsp; ';
        if($i >= $pagenum+4){
            break;
        }
    }
    if ($pagenum != $last) {
        $next = $pagenum + 1;
        $paginationCtrls .= '<li> &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?page='.$next.'"><i class="fa fa-angle-right" aria-hidden="true"></i></li></a> ';
    }
}

$data = [];
if($result->num_rows > 0){
    while ($row = $result->fetch_assoc()) {
        array_push($data, $row);
    }
}
echo "<pre>";
print_r($data);
echo "</pre>";
?>