<?php 
$title ="Products Available";
require_once "header.php"; 
require_once "items.php";
?>

<?php


$conn=mysqli_connect('localhost','root','','db_recommend');
if(!$conn){
    echo "Not connected to database";
}


$user = $_SESSION['user'];
    // echo "$user";    
    $sqls = "SELECT uid from tbl_user_register where username = '$user' ";
    $res = $conn->query($sqls);
    // print_r($res);
    if ($res->num_rows == 1) {
        $userid = $res->fetch_assoc();
    } else {
        return false;
    }
    // print_r($data);
    $uid = $userid['uid'];
    // echo "$uid";


/***
    Validating rating 
    After validating inserting into database
***/

if(isset($_POST['btnRate'])){
    if (isset($_POST['rating']) && !empty($_POST['rating'])) {
        $rating = $_POST['rating'];
    }else{
        $errRatings = "Please enter the Rating";
    }
    if(isset($rating) && !empty($rating) && is_numeric($rating)){
        if($rating >= 1 && $rating <=5){
            $rating=$_POST['rating'];
            // $uid = $ui
            // $uid=3;
            $pid=$_POST['pid'];
            $sql="INSERT INTO tbl_bought (uid,pid,rating) VALUES ('$uid','$pid','$rating')";
            if (!mysqli_query($conn,$sql)) {
                $errRating = "Cant rate into database please login";
            }else{
                $success =  "Successfully rated products";
            }
        }else{
                $errRating = "Rating is invalid!!! Rating value must be within range (1-5)";
            }
    }else{
        $errRating = "Rating value is invalid!!! Rating cant be empty or Non-Numerics!!";
    }
}

?>



<!-- BREADCRUMBS AREA START -->
<div class="breadcrumbs-area bread-bg-1 bg-opacity-black-70">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="breadcrumbs">

                    <ul class="breadcrumbs-list">
                        <li><a href="index.html">Home</a></li>
                        <li>Room</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMBS AREA END -->

<!-- Start page content -->
<section id="page-content" class="page-wrapper">

    <!-- FEATURED FLAT AREA START -->
    <div class="featured-flat-area pt-115 pb-60">
        <div class="container">
            <div class="featured-flat">
                <div class="row">

                    <!-- flat-item -->
                    <?php 
                    if(isset($_SESSION['message'])) { 
                        echo "<div class = 'alert alert-success'>" .$_SESSION['message'] ."</div>"; 
                    } 
                    unset($_SESSION['message']);
                    ?>
                    <h1>
                     <?php 
                       // @session_start();
                        // echo "<h1> Session ID: ".session_id() ."</h1>";
                        // echo "<div class = 'alert alert-success'> Hello</div>";
                        // echo $_SESSION['username'];

                    ?>
                        <?php
                        // @session_start();
                        // echo "<h1> Welcome  " .$_COOKIE['user'] ."</h1>";
                        ?>
                        <?php 
                        if(isset($errRating)) {
                            echo "<span style = 'color: red;'>".$errRating ."</span>";
                        }else if(isset($success)){
                            echo "<span style = 'color: green;'>". $success ."</span>";
                        }
                    ?>   
                    </h1><br>
                    <center><h1><?php echo $textline1; ?> Electronics Item available</h1    ><br></center>

                    <?php $i = 1; foreach($data as $app){ ?>
                        <div class="col-md-4 col-sm-6 col-xs-12">

                            <div class="flat-item">
                                <div class="flat-item-image">
                                    <span class="for-sale"><?php if($app['status']==1){ 
                                        echo"Available";
                                    }else{ 
                                        echo "Unavailable";
                                    } ?></span></span>
                                    <a href="properties-details.html"><img src="images/room_images/<?php echo $app['product_img']; ?>" alt="" width="365px" height="235px"></a>
                                    <div class="flat-link">
                                        <a href="properties-details.html">More Details</a>
                                    </div>
                                    <ul class="flat-desc">
                                        <li>
                                            <img src="images/icons/4.png" alt="">
                                            <span>
                                                <?php if($app['status']==1){ 
                                                    echo"Available";
                                                }else{ 
                                                    echo "Unavailable";
                                                } ?></span>
                                            </li>

                                            <!-- <li>
                                                <img src="images/icons/6.png" alt="">
                                                <span>3</span>
                                            </li> -->
                                        </ul>
                                    </div>
                                    <div class="flat-item-info">
                                        <div class="flat-title-price">
                                            <h5><a href="properties-details.html"><?php echo $app['pname']; ?></a></h5>
                                            <span class="price"><?php
                                            $price = $app['price']; 
                                            // print_r($price);
                                            // require_once "admin/class/currency.class.php";
                                            // $currency = new Currency();
                                            // $x=$currency->numberToCurrency($price);
                                            // print_r($x);
                                            echo "Rs. " .$price;
                                            ?></span>
                                        </div>
                                        



                                        <form method="post" action="" name="rate">
                                           <center>
                                                <span>
                                                    <input type="text" name="rating" placeholder="Enter the rating..." />
                                                </span>   
                                                <span>
                                                    <input type="submit" name="btnRate" value="Rate Me"/>
                                                </span>
                                            </center>
                                            <input type="hidden" name="pid" value="<?php echo $app['pid']; ?>" />
                                            <h5>
                                                <?php 
                                                    echo $app['pid']; 
                                                    // if(isset($errRating)) {
                                                    //     echo "$errRating";
                                                    // }else{
                                                    //     echo "Successfully rated";
                                                    // }
                                                ?>   
                                            </h5>
                                        </form>
                                           

                                    
                                    <div>
                                        <p>Expiry Date: <?php echo $app['expiry_date'] ;
                                            $now = time(); // or your date as well
                                            $your_date = strtotime($app['expiry_date']) ;
                                            $datediff =  $your_date-$now;
                                            $remaining_days =round($datediff / (60 * 60 * 24));
                                            if ($remaining_days>0) {
                                                echo "<span class='p-3 mb-2 text-info'>" ."&nbsp;(" .$remaining_days ." days remaining)" ."</span>";
                                            }else{
                                                echo "<span class='text-danger'>&nbsp; (Out of stock!!!)</span>";
                                            }
                                            ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <!-- pagination-area -->
                        <div class="col-xs-12">
                            <div class="pagination-area mb-60">
                                <ul class="pagination-list text-center">

                                   <?php echo $paginationCtrls; ?>
                                   <p><?php echo $textline2; ?></p>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- FEATURED FLAT AREA END -->


   </section>
   <!-- End page content -->


   <?php require_once "footer.php"; ?>