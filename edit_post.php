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
if($rowsource['status'] == "Banned"){
	echo "Your account is currently Banned. </a>";
	return;
}


if(!isset($_GET['id'])){
	header("Location: postfile.php");
}
$id = $_GET['id'];
if(isset($_POST['post'])){
	$error = false;
	$content = strip_tags($_POST['content']);
	$content = mysqli_real_escape_string($db, $content);
	$content = substr($content, 0, 2500);
	$title = strip_tags($_POST['title']);
	$title = mysqli_real_escape_string($db, $title);
	$title = substr($title, 0, 25);
	date_default_timezone_set('America/Sao_Paulo');	
	$date = date("m.d.y");
	$sql = "UPDATE videos SET title='$title', content='$content', date='$date' WHERE id=$id";
	if(strlen($title) < 4 || strlen($title) == "" || strlen($title) > 25){
	$error = true;
	}
	if(strlen($content) < 20 || strlen($content) == "" || strlen($content) > 2500){
	$error = true;		
	}	
	if($error == true){
	header("Location: index2.php");
	}else{
	mysqli_query($db, $sql);
	header("Location: index2.php");
	}
	}
	?>	



