<?php
#mephystto
session_start();
include_once("db.php");
?>
<html>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script type="text/javascript" src='js/bootstrap.min.js'></script>
<link rel="stylesheet" href="css/bootstrap.css" />
<title></title>
</head>
<body style="background: rgb(238,238,238)">
<?php
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
echo "<div class='alert alert-danger' role='alert'>
  You don't have permision to <a href='index2.php'>proceed</a>
</div>";
	return;	
}
?>

<?php
include_once("nav.php");
?>

<style>
.panel{
	margin-top:64px;
	margin-left:20px;
	margin-right:20px;
}
</style>





<div class="panel">
<?php





$sql = "SELECT * FROM users";
if(!$connsource) {
	die("Connection failed:" . mysqli_connect_error());
}

$result = $connsource->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
			$id = $row['id'];
			$email = $row['email'];
			$password = $row['password'];
			$name = $row['name'];
			$status = $row['status'];
			$badge = "Ban";
			if($row['status'] == "Banned"){
			$badge = "Unban";	
			}
	}
}
	$sql = "SELECT * FROM comments";
	$result = $connsource->query($sql);
    while($row = $result->fetch_assoc()) {
			$id = $row['id'];
			$name = $row['name'];
			$comment = $row['comment'];
			$email = $row['email'];		
?>

 


    <div class="form-group">
	<span  class="form-control mt-2"><?php echo $name?></span>
	<span  class="form-control mt-2"><?php echo $comment?></span>
	<span  class="form-control mt-2"><?php echo $email?></span>
	<a class="btn btn-outline-danger mt-2" href="del_comment_act.php?id=<?php echo $id ?>"> DELETE <b>ID:</b> <?php echo $id ?></a>
	</div>
	

	
	
	
<?php
} 		






?>
</div>
</body>
</html>



