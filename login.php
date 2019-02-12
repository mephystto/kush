<?php
session_start();
include_once("db.php");
//if(isset($_POST['activate'])){
//$email = strip_tags($_POST['email']);
//$email = mysqli_real_escape_string($db, $email);
//$email = substr($email, 0, 25);
//$email = strtolower($email);
//$token = bin2hex(openssl_random_pseudo_bytes(16));
//$sql = "UPDATE users SET activate='$token' WHERE email='$email'";
//mail("$email","Email Confirmation",$token);
//mysqli_query($db, $sql);	
//}
$error = false;
if(isset($_POST['login'])){                                                                                               
$email = strip_tags($_POST['email']);
$email = mysqli_real_escape_string($db, $email);
$email = substr($email, 0, 25);
$email = strtolower($email);
$password = strip_tags($_POST['password']);
$password = mysqli_real_escape_string($db, $password);
$password = substr($password, 0, 20);
$sql = "SELECT email, password, name FROM users WHERE email='$email' AND password='$password'"; 
$result = $connsource->query($sql);
if ($result->num_rows > 0) { 
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;
header("Location: index2.php");
}else{
$error = "<div class='mt-3 alert alert-danger' role='alert'>
  Your login or Password is Wrong. </div>";
}	
}
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
<body style="background: rgb(238,238,238)">
<style>
.main{
	margin: auto;
  width: 300px;
  padding: 10px;
  background: rgb(138,138,138);
  margin-top:70px;
  border-radius:10px;
}
</style>

<div class="main">



<form action="login.php" method="post">
<div class="form-group">
<table cellpadding="2" cellspacing="2" border="1">
	
		<label for="exampleInputEmail1">Email address</label>
		<input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
		</div>
		<div class="form-group">
		<label for="exampleInputPassword1">Password</label>
		<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		</div>
		
		</table>
		<button type="submit" name="login" class="btn btn-primary">Submit</button>
		<?php echo $error;?>
		</form>
</div>		
</body>
</html>		