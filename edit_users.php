<?php
session_start();
include_once("db.php");
if(isset($_SESSION['email']) && $_SESSION['password']){
		
}else{
echo "<div class='alert alert-danger' role='alert'>
  Please <a href='login.php'>loggin!</a>
</div>";
	return;	
}
$email = $_SESSION['email'];
$sqlsource = "SELECT * FROM users WHERE email='$email'";
$resultsource = $connsource->query($sqlsource);
$rowsource = $resultsource->fetch_assoc();
$source = $rowsource['name'];  
$rank = $rowsource['rank'];
if($rowsource['rank'] == "Member"){
	echo "You don't have permision to <a href='index2.php'>proceed</a>";
	return;
}




if(!isset($_GET['id'])){
	header("Location: postfile.php");
}
$id = $_GET['id'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tube";
$sqlsource = "SELECT * FROM users WHERE id='$id'";
$resultsource = $connsource->query($sqlsource);
$rowsource = $resultsource->fetch_assoc();
$source = $rowsource['name'];  
$status = $rowsource['status'];
$ban = "Banned";

if($rowsource['status'] == "Banned"){
	$ban = "Normal";
}


if(isset($_POST['post'])){
	$sql = "UPDATE users SET status='$ban' WHERE id=$id";
	mysqli_query($db, $sql);
	header("Location: users.php");
	}		
	?>



