<?php
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
<meta name="author" content="mephystto">
<title></title>
</head>
<body style="background: rgb(238,238,238);margin:0 auto">
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
if($rowsource['status'] == "Banned"){
	echo "<div class='alert alert-danger' role='alert'>
  Your account is currently banned.
</div>";
	return;
}
$source = $rowsource['name'];  
$rank = $rowsource['rank'];
$crown = false;
if($rank == "Owner"){
$crown = "<i style='text-shadow: 0.5px 0.5px black;color:#ffff00' class='fas fa-crown'></i>";	
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


<?php
$email = $_SESSION['email'];
$sqlsource = "SELECT * FROM users WHERE email='$email'";
$resultsource = $connsource->query($sqlsource);
$rowsource = $resultsource->fetch_assoc();
$source = $rowsource['name'];  
$status = $rowsource['status'];


?>

<div class="panel">
<?php




$sql = "SELECT id, title, content FROM videos WHERE uploader='$source'";
$sqlowner = "SELECT id, title, content FROM videos ORDER BY id DESC";

if($rowsource['rank'] == 'Owner'){
$sql = $sqlowner;	
}



if(!$connsource) {
	die("Connection failed:" . mysqli_connect_error());
}

$result = $connsource->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
			$id = $row['id'];
			$content = $row['content'];
			$title = strip_tags($row['title']);
			$title = mysqli_real_escape_string($db, $title);
			$title = substr($title, 0, 25);
			$content = strip_tags($row['content']);
			$content = mysqli_real_escape_string($db, $content);
			$content = substr($content, 0, 2500);

			
?>



 <div class="posts">
<form action="edit_post.php?id=<?php echo $id ?>" method="post">
    <div class="form-group">
	<input type="text" class="form-control mt-2" name="title" value="<?php echo $title?>" placeholder="TITLE">
	</div>
	<div class="">
	<textarea rows="3" type="text" class="form-control" name="content" placeholder="CONTENT"><?php echo $content ?></textarea>
	</div>
	<br>
	<div class="">
	<input type="submit" name="post" value="update" class="btn btn-outline-info">
	<a class="btn btn-outline-danger" href="del_post.php?id=<?php echo $id ?>"> DELETE <b>ID:</b> <?php echo $id ?></div></a>
	
	</form>
<?php
} 		

} else {
    echo "0 results";
}



?>
</div>
</div>
</body>
</html>



