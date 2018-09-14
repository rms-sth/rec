<?php 
$title = "Profile Page";
require_once "header.php";

require_once "admin/class/profile.class.php";
require_once "admin/class/room.class.php";
$profile = new Profile();
$user_profile=$profile->index();

$profile->reg_id=$_GET['reg_id'];
$profilelist=$profile->SelectUserById();
echo "<pre>";
print_r($profilelist);
echo "</pre>";


$room = new Room();
$room->reg_id=$_GET['reg_id'];
$room_info=$room->profile();
echo "<pre>";
print_r($room_info);
echo "</pre>";


?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        h4,h5{
            font-family: courier;
            
        }
        strong{
            color: green;
        }
    </style>
    

</head>
<body>
    
<?php foreach ($room_info as $in) { ?>
     <div class="row">
        <div class="col-md-offset-1 col-md-2 col-xs-8">

           <p>Room ID:<?php echo $in['room_id']; ?></p>
           <p>Post Data: <?php echo $in['created_date']; ?></p>
           <p>Expiry Date:<?php echo $in['expiry_date']; ?></p>
    </div>
<?php } ?>
    </div>
<br><?php foreach ($user_profile as $user) { ?>
    <div class="row">

   
   <div class="col-md-offset-4 col-md-4 col-xs-8">
    <img class="img-circle" src="images/room_images/1.jpg" width="300px" height="300px" alt="">

    <h4><strong>Name:</strong><?php echo $user['first_name']." ".$user['middle_name']." ".$user['last_name']; ?></h4>
    <h4><strong>Id:</strong><?php echo $user['reg_id']; ?></h4>
    <h4><strong>Username:</strong><?php echo $user['username']; ?></h4>
    <h4><strong>Location:</strong><?php echo $user['location']; ?></h4>
    <h4><strong>Contact:</strong><?php echo $user['phone']; ?></h4>
    <h4><strong>Email:</strong><?php echo $user['email']; ?></h4>
    <h4><strong>Member since:</strong></h4> 
    
    </div>
    </div>

<?php  }  ?>
</div>
</div>
</body>
</html>




<?php require_once "footer.php"; ?>