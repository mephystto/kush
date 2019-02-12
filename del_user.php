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


$id = $_GET['id'];
$sql2 = "SELECT * FROM users WHERE id='$id'";
$res2 = mysqli_query($db, $sql2) or die(msqli_error());


if (mysqli_num_rows($res2) > 0) {
    // output data of each row
    while($row = $res2->fetch_assoc()) {
			$id2 = $row['id'];
			$thumb = $row['thumb'];
        		
    }
}

$file = "$thumb";
$sql = "DELETE FROM users WHERE id=$id";
$res = mysqli_query($db, $sql) or die(msqli_error());


if (!unlink($file)) {
    // output data of each row
	header("Location: users.php");
        		
} else {
    header("Location: users.php");
}



?>
		
