<?php 
require_once("alg_recommend.php");
require_once("class/ProductRatingByUser.php");
require_once("class/distinctuser.class.php");

//finding distinct users
$users = new DistinctUsers();
$user = $users->findDistinctUsers();

//creating object of User's Product rating
$out = new ProductRatingByUser();

//distinct users;
$finalArray = [];
foreach ($user as $u) {
	$ratings= array($u['username']=>array_flatten($out->findProductRatingByUser($u['username'])));
	$finalArray = array_merge_recursive($finalArray, $ratings);
}


echo "<h1> Items in database are :</h1> ";

if(isset($finalArray)){
    echo '<pre>';
    print_r($finalArray);
    echo '</pre>';
}


//flattening the array into single dimension

function array_flatten($array = null) {
    $result = array();

    if (!is_array($array)) {
        $array = func_get_args();
    }

    foreach ($array as $key => $value) {
        if (is_array($value)) {
            $result = array_merge($result, array_flatten($value));
        } else {
            $result = array_merge($result, array($key => $value));
        }
    }
    return $result;
}
?>

<?php 
// echo $_SESSION['user'];
$user = $_COOKIE['user'];
$re = new Recommend();
// $re->getRecommendations($finalArray, "subodhthakur");
echo "<h1> Recommended Item to <i style = ' color:blue'>" .$user ." </i> is : ";
echo "<pre>";
// print_r($re->getRecommendations($finalArray, "$user"));
$result = $re->getRecommendations($finalArray, "$user");
print_r($result);
echo "</pre>";
echo "</h1>";

?>