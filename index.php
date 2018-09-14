<?php
session_start();
require_once "database.php";
?>

<?php 
$title = "User Login Page";
require_once "login.user.class.php";

if (isset($_POST['btnSignin'])) {
    if (isset($_POST['username']) && !empty($_POST['username'])) {
        $user = $_POST['username'];
        $email = $_POST['username'];
    }else{
        $errUsername = "Please enter the Username";
    }
    if (isset($_POST['password']) && !empty($_POST['password'])) {
        $password = $_POST['password'];
    }else{
        $errPassword = "Please enter the password";
    }
    if(isset($user) && isset($password)){
        $login = new LoginUser(); 
        $login->username = $user;
        $login->email = $email;
        $login->password = $password;
        $status = $login->login();
    }
   
      
  
}


if (isset($_COOKIE['user']) && !empty($_COOKIE['user'])) {
    $_SESSION['user'] = $_COOKIE['user'];
    redirect('inner/');
} 

?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/form-elements.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Electronic Item Recommendation System</strong></h1>
                            <div class="description">
                            	<h2><strong>Please Log In or Sign up</strong></h2>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
                              <div class="form-top">
                                 <div class="form-top-left">
                                    <h3>Login to our site</h3>
                                    <p>Enter username and password to log on:</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-lock"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <?php if (isset($status) && $status == false) {
                                    echo "<div class='alert alert-danger'>Invalid Login Information</div>";
                                } ?>
                                <?php 
                                @session_start();
                                if (isset($_SESSION['error_message']) ) {
                                    echo "<div class='alert alert-danger'>" . $_SESSION['error_message']. " </div>";
                                    unset($_SESSION['error_message']);
                                } ?>
                                <form role="form" action="" method="post" class="login-form">
                                   <div class="form-group">
                                      <label class="sr-only" for="form-username">Username</label>
                                      <input type="text" name="username" placeholder="Username..." class="form-username form-control" id="username" value = "<?php if(isset($username)){ echo $username;} ?>">
                                      <?php if (isset($errUsername)) { echo $errUsername; } ?>
                                  </div>
                                  <div class="form-group">
                                   <label class="sr-only" for="form-password">Password</label>
                                   <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                                   <?php if (isset($errPassword)) {
                                    echo $errPassword;
                                } ?>
                            </div>
                            <!-- <div class="checkbox">
                                <center><label>
                                    <input type="checkbox" value="Remember Me" name="remember">Remember Me
                                </label></center>
                            </div> -->
                            <button type="submit" class="btn" name="btnSignin">Sign in!</button>
                        </form>
                    </div>
                </div>



            </div>

            <div class="col-sm-1 middle-border"></div>
            <div class="col-sm-1"></div>

            <div class="col-sm-5">

               <div class="form-box">
                  <div class="form-top">
                     <div class="form-top-left">
                        <h3>Sign up now</h3>
                        <p>Fill in the form below to get instant access:</p>
                    </div>
                    <div class="form-top-right">
                        <i class="fa fa-pencil"></i>
                    </div>
                </div>
                <div class="form-bottom">
                    <form role="form" action="index.php" method="post" >
                       <div class="form-group">
                          <label class="sr-only" for="form-first-name">First name</label>
                          <input type="text" name="firstname" placeholder="First name..." class="form-first-name form-control" id="form-first-name">
                      </div>

                      <div class="form-group">
                        <label class="sr-only" for="form-middle-name">Middle name</label>
                        <input type="text" name="middlename" placeholder="Middle name..." class="form-middle-name form-control" id="form-middle-name-name">
                    </div>


                    <div class="form-group">
                       <label class="sr-only" for="form-last-name">Last name</label>
                       <input type="text" name="lastname" placeholder="Last name..." class="form-last-name form-control" id="form-last-name">
                   </div>
                   <div class="form-group">
                    <label class="sr-only" for="form-username">Username</label>
                    <input type="text" name="username" placeholder="Username..." class="form-email form-control" id="form-email">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="form-password">Password</label>
                    <input type="password" name="password" placeholder="Password..." class="form-email form-control" id="form-email">
                </div>

                <div class="form-group">
                   <label class="sr-only" for="form-email">Email</label>
                   <input type="text" name="email" placeholder="Email..." class="form-email form-control" id="form-email">
               </div>

               <button type="submit" class="btn" name="signup">Sign me up!</button>
           </form>
       </div>
   </div>

</div>
</div>

</div>
</div>

</div>

<!-- Footer -->
<footer>
   <div class="container">
      <div class="row">

         <div class="col-sm-8 col-sm-offset-2">
            <div class="footer-border"></div>
            <p>Cool guys Team @copyright 2018</p>
        </div>

    </div>
</div>
</footer>

<!-- Javascript -->
<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.backstretch.min.js"></script>
<script src="assets/js/scripts.js"></script>

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

    </html>