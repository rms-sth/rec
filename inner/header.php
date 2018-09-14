<?php 
session_start();
require_once "admin/class/config.php";
if(!isset($_SESSION['user'])){
    $_SESSION['error_message'] = "You must login to access homepage!!";
    // header('location:index.php');
    redirect('../');
}
 ?>

<?php  
// session_start();
// if (isset($_POST['btnLogin'])) {
//     if (isset($_POST['username']) && !empty($_POST['username'])) {
//         $username = $_POST['username'];
//     }else{
//         $errUsername = "Please enter the username";
//     }
//     if (isset($_POST['password']) && !empty($_POST['password'])) {
//         $password = $_POST['password'];
//     }else{
//         $errPassword = "Please enter the password";
//     }
//     if(isset($username) && isset($password)){
//         $user = new User();
//         $user->username = $username;
//         $user->password = $password;
//         $status = $user->login();
//         if (isset($_POST['remember'])) {
//                     setcookie('username',$username,(time()+7*24*60*60));
//                     setcookie('message_login',$_SESSION['message_login'],(time()+7*24*60*60));       
//         }
//     }  
// }
?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo "$title";?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/icons/favicon.png">

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" href="lib/css/nivo-slider.css"/>
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Template color css -->
    <link href="css/color/color-core.css" data-style="styles" rel="stylesheet">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">


    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper">
    
        <!-- HEADER AREA START -->
        <header class="header-area header-wrapper">
            <div class="header-top-bar bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="images/logo/logo.png" alt="" width="139" height="64">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 hidden-sm hidden-xs">
                            <div class="company-info clearfix">
                                <div class="company-info-item">
                                    <div class="header-icon">
                                        <img src="images/icons/phone.png" alt="">
                                    </div>
                                    <div class="header-info">
                                        <h6>+977-9860-2985-34</h6>
                                        <p>Services for users</p>
                                    </div>
                                </div>
                                <div class="company-info-item">
                                    <div class="header-icon">
                                        <img src="images/icons/mail-open.png" alt="">
                                    </div>
                                    <div class="header-info">
                                        <h6><a href="mailto:ramesrest@gmail.com">ramesrest@gmail.com</a></h6>
                                        <p>You can mail us</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="header-search clearfix">
                                <form action="#">
                                    <button class="search-icon" type="submit">
                                        <img src="images/icons/search.png" alt="">
                                    </button>
                                    <input type="text" placeholder="Search...">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="header-middle-area  transparent-header hidden-xs">
                <div class="container">
                    <div class="full-width-mega-drop-menu">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="sticky-logo">
                                    <a href="index.php">
                                        <img src="images/logo/logo.png" alt="Logo">
                                    </a>
                                </div>
                                <nav id="primary-menu">
                                    <ul class="main-menu text-center">
                                        
                                        <li>
                                            <a href="index.php">
                                                <img src="images/home.png" alt="logo" width="27px" height="27px"/>Home
                                            </a>
                                        </li>
                                                                               
                                        <li>
                                            <a href="inner_recommend2.php">
                                                <img src="images/icons/recommend.png" alt="" width="27px" height="27px"/> Recommended Items
                                            </a>
                                        </li>
                                        
                                        <li>
                                            <a href="purchased_items.php">
                                                <img src="images/icons/purchased_items.png" alt="" width="27px" height="27px"> Rated Items
                                            </a>
                                        </li>
                                        
                                        <?php if (isset($_SESSION['user'])) { ?>
                                        <li >
                                            <a href="../logout.php">
                                                <img src="images/logo/logout.png" alt="" width="35px" height="35px">  Log out <b> <i> [<?php echo $_SESSION['user']; ?>] </b></i>
                                            </a>
                                        </li>  
                                        <?php }?>
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER AREA END -->

        <!-- MOBILE MENU AREA START -->
        <div class="mobile-menu-area hidden-sm hidden-md hidden-lg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li><a href="index.php">Home</a>
                                       
                                    </li>
                                    <li><a href="service.php">Service</a>
                                        <ul>
                                            <li><a href="service.html">Service</a></li>
                                            <li><a href="service-details.html">Service details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="property.php">Properties</a>
                                        <ul>
                                            <li><a href="properties.html">Properties</a></li>
                                            <li><a href="properties-left-sidebar.html">Properties left sidebar</a></li>
                                            <li><a href="properties-right-sidebar.html">Properties right sidebar</a></li>
                                            <li><a href="properties-details.html">Properties details</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="contact.html">Recommended Items</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MOBILE MENU AREA END -->

    

        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">
            
            <!-- FIND HOME AREA START -->
            


 