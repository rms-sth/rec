<?php 
$title = "Add User";
require_once "header.php";
require_once "class/user.class.php";
?>

<?php 
if (isset($_POST['btnSubmit'])) {
    if (isset($_POST['firstname']) && !empty($_POST['firstname'])) {
        $firstname =  $_POST['firstname'];
    } else {
        $errfirstName =  "Enter First Name!!";
    }
    /*if (isset($_POST['middlename']) && !empty($_POST['middlename'])) {
        $middlename =  $_POST['middlename'];
    } else {
        $errlastName =  "Enter Middle Name!!";
    }*/
    if (isset($_POST['lastname']) && !empty($_POST['lastname'])) {
        $lastname =  $_POST['lastname'];
    } else {
        $errlastName =  "Enter Last Name!!";
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

    
    if (isset($email) && isset($password) && isset($firstname) &&isset($lastname) &&isset($username)) {    
        $user = new User();
        $user->set('firstname',$_POST['firstname']);
        $user->set('middlename',$_POST['middlename']);
        $user->set('lastname',$_POST['lastname']);
        $user->set('username',$_POST['username']);
        $user->set('password',$_POST['password']);
        $user->set('email',$_POST['email']);
        $status = $user->save();                    
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User management</title>
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
            <h1>Sign Up Form</h1>
            <div class="agile_main_grid">
                <div class="w3l_main_grid1_w3ls_grid">
                    <div class="w3_agile_main_left_grid_w3_agileits">
                        <?php if (isset($status) && $status == false) {
                            echo "<div class='alert alert-danger'>User can not be inserted</div>";
                        } ?>
                        <h3>Sign Up</h3>
                        <h6>Sign into new account</h6>
                        <form action="" method="post" novalidate="" id="userform">
                            
                            <div class="form-group">
                                <label>Frist Name</label><br>
                                <input type="text" name="firstname" placeholder="First Name" required="" value="<?php if(isset($firstname)){ echo $firstname;} ?>">
                            </div><div id="error"><?php if(isset($errfirstName)){echo "<br> $errfirstName <br> <br>";}  ?></div>

                            <div class="form-group">
                                <label>Middle Name</label><br>
                                <input type="text" name="middlename" placeholder="Middle Name" value="<?php if(isset($middlename)){ echo $middlename;} ?>">
                            


                            <div class="form-group">
                                <label>Last Name</label><br>
                                <input type="text" name="lastname" placeholder="Last Name" required="" value="<?php if(isset($lastname)){ echo $lastname;} ?>">
                            </div><div id="error"><?php if(isset($errlastName)){echo "<br> $errlastName <br> <br>";}  ?></div>



                            
                            <div class="form-group">
                                <label>Username</label><br>
                                <input type="text" name="username" placeholder="Username" required=""value="<?php if(isset($username)){ echo $username;} ?>">
                            </div><div id="error"><?php if(isset($errUsername)){echo "<br> $errUsername <br> <br>";}  ?></div>
                            
                            <div class="form-group">
                                <label>Password</label><br>
                                <input type="password" name="password" placeholder="Password" required="" value="<?php if(isset($password)){ echo $password;} ?>">
                            </div><div id="error"><?php if(isset($errPassword)){echo "<br> $errPassword <br> <br>";}  ?></div>
                            
                            
                            
                            <div class="form-group">
                                <label>Email</label><br>
                                <input type="email" name="email" placeholder="Email" required="" value="<?php if(isset($email)){ echo $email; } ?> ">
                            </div><div id="error"><?php if(isset($errEmail)){echo "<br> $errEmail <br> <br>";}  ?></div><br>
                            
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
    <?php require_once "footer.php"; ?>

    <!-- <script src="js/validation/dist/jquery.validate.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#userform').validate();
        });
    </script> -->