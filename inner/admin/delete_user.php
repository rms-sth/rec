<?php
require_once "class/config.php";
 require_once "class/user.class.php";
 $user  = new User();
 $user->id = $_GET['uid'];
$user->remove();


 ?>
