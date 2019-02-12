<?php
#mephystto
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
if($rowsource['status'] == "Banned"){
	echo "Sorry! Your account is banned";
	return;
}
if(isset($_GET['id'])){
	$id = $_GET['id'];
}
$sql = "DELETE FROM comments WHERE id=$id";
$res = mysqli_query($db, $sql) or die(msqli_error());
header("Location: del_comment.php");


?>
		
