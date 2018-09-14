<?php
require_once "class/config.php";
require_once "class/user.class.php";
$user  = new User();
$user->id = $_GET['uid'];
$record = $user->selectUserByID();


?>

<?php 
require_once "header.php";
require_once "class/user.class.php";
$title ="Edit Sign Up Form";
?>

<?php 
if (isset($_COOKIE['username']) && !empty($_COOKIE['username'])) {
    session_start();
    $_SESSION['username'] = $_COOKIE['username'];
    header('location:dashboard.php');

}

//if button is clicked
if (isset($_POST['btnSubmit'])) {

    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $name =  $_POST['name'];
    } else {
        $errName =  "Enter Name!!";
    }

    if (isset($_POST['username']) && !empty($_POST['username'])) {
        $username =  $_POST['username'];
    } else {
        $errUsername =  "Enter Username!!";
    }

    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email =  $_POST['email'];
    } else {
        $errEmail =  "Enter Email!!";
    }

    if (isset($_POST['password']) && !empty($_POST['password'])) {
        $password =  $_POST['password'];
    } else {
        $errPassword =  "Enter Password";
    }
    
    if (isset($email) && isset($password) && isset($name) && isset($username)) {

        $user->set('name',$_POST['name']);
        $user->set('username',$_POST['username']);
        $user->set('status',$_POST['status']);
        $user->set('password',$_POST['password']);
        $user->set('email',$_POST['email']);
        $status = $user->edit();                
    }
    

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo "$title"; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Coloured Forms Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&subset=latin-ext" rel="stylesheet">
        <style type="text/css">
            #error{
                color: red;
            }
        </style>
    </head>
    <body>
        <div class="main">
            <h1>Edit Sign Up Form</h1>
            <div class="agile_main_grid">
                <div class="w3l_main_grid1_w3ls_grid">
                    <div class="w3_agile_main_left_grid_w3_agileits">
                        <?php if (isset($status) && $status == false) {
                            echo "<div class='alert alert-danger'>User can not be edited</div>";
                        } ?>
                        
                       
                        <form action="" method="post" novalidate="" id="userform">
                            <div class="form-group">
                            <label>Name</label><br>
                                <input type="text" name="name" placeholder="Name" required="" value="<?php echo $record[0]['name']; ?>">
                            </div><div id="error"><?php if(isset($errName)){echo "<br> $errName <br> <br>";}  ?></div><br>
                            

                            <div class="form-group">
                                <label>Username </label><br>
                                <input type="text" name="username" placeholder="Username" required="" value="<?php echo $record[0]['username']; ?>">
                            </div><div id="error"><?php if(isset($errUsername)){echo "<br> $errUsername <br> <br>";}  ?></div>
                           
                        <div class="form-group">
                        <label>Password </label><br>
                            <input type="password" name="password" placeholder="Confirm Password" required="" value="<?php echo $record[0]['password']; ?>">
                        </div><div id="error"><?php if(isset($errPassword)){echo "<br> $errPassword <br> <br>";}  ?></div><br>


                        <div class="form-group">
                        <label>Email </label><br>
                            <input type="email" name="email" placeholder="Email" required="" value="<?php echo $record[0]['email']; ?>">
                        </div><div id="error"><?php if(isset($errEmail)){echo "<br> $errEmail <br> <br>";}  ?></div><br>

                        <div class="form-group">
                            <label>Status</label><br>
                            <?php if ($record[0]['status'] == 1) { ?>
                            <div class="form-group">
                                <label>
                                    <input type="radio" name="status" id="" value="1" checked="">Active
                                </label>
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="radio" name="status" id="" value="0" >De Active
                                </label>
                            </div>
                            <?php  } else { ?>
                            <div class="form-group">
                                <label>
                                    <input type="radio" name="status" id="" value="1" >Active
                                </label>
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="radio" name="status" id="" value="0" checked>De Active
                                </label>
                            </div>


                            <?php    } ?>


                        </div>

                        <input type="submit" class="green" value="Register Account" name="btnSubmit">
                        <h5>Already a member? <a href="index.php">Sign In</a></h5>
                    </form>
                </div>
                <div class="w3l_main_agile">
                    <ul>
                        <li><label class="pink"></label></li>
                        <li><label class="green"></label></li>
                        <li><label class="violet"></label></li>
                        <li><label class="yellow"></label></li>
                        <li><label class="blue"></label></li>
                        <div class="clear"> </div>
                    </ul>
                </div>
            </div>
            <div class="clear"> </div>
        </div>
        
    </div>
</body>
</html>
<?php require_once "footer.php" ?>
<script src="js/validation/dist/jquery.validate.min.js"></script>
<script type="text/javascript">
   $(document).ready(function(){
    $('#userform').validate();
});
</script>