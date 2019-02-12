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


$id = $_GET['id'];
$sql2 = "SELECT * FROM videos WHERE id='$id'";
$res2 = mysqli_query($db, $sql2) or die(msqli_error());


if (mysqli_num_rows($res2) > 0) {
    // output data of each row
    while($row = $res2->fetch_assoc()) {
			$id2 = $row['id'];
			$video_name = $row['video_name'];
			$audio = $row['audio'];
			$image = $row['image'];
        		
    }
}
header( "refresh:2.0" );
$file = "$image";
$file2 = "$audio";
$sql = "DELETE FROM videos WHERE id=$id";
$res = mysqli_query($db, $sql) or die(msqli_error());
if (!unlink($file2)) {
    // output data of each row
	header("Location: index2.php");       		
}else {
    header("Location: index2.php");
}

if (!unlink($file)) {
    // output data of each row
	header("Location: index2.php");       		
}else {
    header("Location: index2.php");
}



?>
		
