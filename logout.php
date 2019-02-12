<?php
session_start();
if(isset($_SESSION['email']) && $_SESSION['password']){
    session_destroy();
    header("location: login.php");
    exit();
}else{
	header("location: login.php");
}
?>