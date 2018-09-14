<?php 
require_once"inner/admin/class/config.php";
session_start();
session_destroy();
$name = "user";
setcookie($name);
redirect('index.php');

?>
