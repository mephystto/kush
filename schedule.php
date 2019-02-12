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

<link rel="stylesheet" type="text/css" href="dist/bootstrap-clockpicker.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/github.min.css">

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
$sourceinput = $rowsource['name'];  
$rank = $rowsource['rank'];
$password = $rowsource['password'];
$age = $rowsource['age'];
$country = $rowsource['country'];
$privacy = $rowsource['privacy'];
$emailput = $rowsource['email'];
$nameput = $rowsource['name'];
$about = $rowsource['about'];
$thumb = $rowsource['thumb'];
$token = $rowsource['token'];
if($rowsource['status'] == "Banned"){
	echo "<div class='alert alert-danger' role='alert'>
  Your account is currently banned.
</div>";
	return;
}
?>


<?php
include_once("nav.php");
?>

<style>
.panel{

	
	position:relative;
margin:0 auto;
  width:300px;	
  right: 0;
  bottom:0;
  left: 0;
  top:64px;
  padding: 1rem;
  text-align: center;
}
</style>


<?php	

	if(isset($_POST['delete'])){
		$sql = "DELETE FROM schedule WHERE user='$token'";
		mysqli_query($db, $sql);
	}
	
	$sql = "SELECT * FROM schedule WHERE user='$token'";
	$result = $connsource->query($sql);
	$row = $result->fetch_assoc();
	$users = $row['user'];
	
	echo $users;
	if($users != $token){
	
	if(isset($_POST['create'])){
	$sql = "INSERT into schedule (sunday, monday, tuesday, fourth, fifth, friday, saturday, timesun, timemon, timetue, timefou, timefif, timefri, timesat, user) VALUES ('', '', '', '', '', '', '', '', '', '', '', '', '', '', '$token')";	
	header( "refresh:0.1" );
	mysqli_query($db, $sql);
	}
		echo "<form method='post'><h1 class='panel lead text-info'>Aparently you haven't created a schedule yet, <button type='submit' name='create' class='btn btn-dark'>Click Here</button> to have one.</h1></form>";
		
	}else{	
	
	
	
	if(isset($_POST['post'])){
	$error = false;		
		//$hours = $_POST['time'];
		if(isset($_POST['sunday'])){
		$sunday = $_POST['sunday'];
		$timesun = $_POST['timesun'];  
		if(!preg_match("/^(?:2[0-3]|[01][0-9]):[0-5][0-9]$/", $timesun) || $sunday != "" && $sunday != "sunday"){
		$error = true;
		}		
		}else{
		$sunday = "";
		$timesun = "";
		}if(isset($_POST['monday'])){
		$monday = $_POST['monday'];
		$timemon = $_POST['timemon'];
		if(!preg_match("/^(?:2[0-3]|[01][0-9]):[0-5][0-9]$/", $timemon) || $monday != "" && $monday != "monday"){
		$error = true;
		}
		}else{
		$monday =  "";
		$timemon = "";
		}if(isset($_POST['tuesday'])){
		$tuesday = $_POST['tuesday'];
		$timetue = $_POST['timetue'];
		if(!preg_match("/^(?:2[0-3]|[01][0-9]):[0-5][0-9]$/", $timetue) || $tuesday != "" && $tuesday != "tuesday"){
		$error = true;
		}
		}else{
		$tuesday = "";
		$timetue = "";
		}if(isset($_POST['fourth'])){
		$fourth = $_POST['fourth'];
		$timefou = $_POST['timefou'];
		if(!preg_match("/^(?:2[0-3]|[01][0-9]):[0-5][0-9]$/", $timefou) || $fourth != "" && $fourth != "fourth"){
		$error = true;
		}
		}else{
		$fourth = "";	
		$timefou = "";
		}if(isset($_POST['fifth'])){		
		$fifth = $_POST['fifth'];
		$timefif = $_POST['timefif'];
		if(!preg_match("/^(?:2[0-3]|[01][0-9]):[0-5][0-9]$/", $timefif) || $fifth != "" && $fifth != "fifth"){
		$error = true;
		}
		}else{
		$fifth = "";	
		$timefif = "";	
		}if(isset($_POST['friday'])){		
		$friday = $_POST['friday'];
		$timefri = $_POST['timefri'];
		if(!preg_match("/^(?:2[0-3]|[01][0-9]):[0-5][0-9]$/", $timefri) || $friday != "" && $friday != "friday"){
		$error = true;
		}
		}else{
		$friday = "";	
		$timefri =	"";
		}if(isset($_POST['saturday'])){
		$saturday = $_POST['saturday'];
		$timesat = $_POST['timesat'];
		if(!preg_match("/^(?:2[0-3]|[01][0-9]):[0-5][0-9]$/", $timesat) || $saturday != "" && $saturday != "saturday"){
		$error = true;
		}		
		}else{
		$saturday = "";
		$timesat = "";
		}		

		$sql = "UPDATE schedule SET sunday='$sunday', timesun='$timesun', monday='$monday', timemon='$timemon', tuesday='$tuesday', timetue='$timetue', fourth='$fourth', timefou='$timefou', fifth='$fifth', timefif='$timefif', friday='$friday', timefri='$timefri', saturday='$saturday', timesat='$timesat' WHERE user='$token'";
		                                                                                                                                              
  
		

		
		if($error == true){
		echo "<h1 style='position:absolute' class='lead text-danger'>Error!</h1>";
		}else{
		mysqli_query($db, $sql);	
		}		
		                                                                          
		}
		 
?>
	
	
<div class="panel bg-info">
<form class="was-validated" action="schedule.php" method="post">
<p class="lead">Schedule</p>
  <div class="btn btn-group bg-secondary" style="width:220px;">
    <div class="custom-control custom-checkbox mt-1 pt-1 mr-2">
    <input type="checkbox" value="sunday" name="sunday" class="custom-control-input" id="customControlValidation3">
    <label class="custom-control-label" for="customControlValidation3">Sunday </label>
    
  </div>
  <div class="input-group clockpicker">
    <input type="text" name="timesun"  class="form-control" value="18:00">
    <span class="input-group-addon">
        <i class="fa fa-clock-o col btn btn-dark ml-1 "></i>
    </span>
</div>
</div>
<br><br>
  <div class="btn btn-group bg-secondary" style="width:220px;">
    <div class="custom-control custom-checkbox mt-1 pt-1 mr-2">
    <input type="checkbox" value="monday" name="monday" class="custom-control-input" id="customControlValidation4">
    <label class="custom-control-label" for="customControlValidation4">Monday </label>
    
  </div>
  <div class="input-group clockpicker">
    <input type="text" name="timemon"  class="form-control" value="18:00">
    <span class="input-group-addon">
        <i class="fa fa-clock-o col btn btn-dark ml-1 "></i>
    </span>
</div>
</div>
<br><br>
  <div class="btn btn-group bg-secondary" style="width:220px;">
    <div class="custom-control custom-checkbox mt-1 pt-1 mr-2">
    <input type="checkbox" value="tuesday" name="tuesday" class="custom-control-input" id="customControlValidation5">
    <label class="custom-control-label" for="customControlValidation5">Tuesday </label>
    
  </div>
  <div class="input-group clockpicker">
    <input type="text" name="timetue"  class="form-control" value="18:00">
    <span class="input-group-addon">
        <i class="fa fa-clock-o col btn btn-dark ml-1 "></i>
    </span>
</div>
</div>
<br><br>
  <div class="btn btn-group bg-secondary" style="width:220px;">
    <div class="custom-control custom-checkbox mt-1 pt-1 mr-2">
    <input type="checkbox" value="fourth" name="fourth" class="custom-control-input" id="customControlValidation6">
    <label class="custom-control-label" for="customControlValidation6">Fourth </label>
    
  </div>
  <div class="input-group clockpicker">
    <input type="text" name="timefou"  class="form-control" value="18:00">
    <span class="input-group-addon">
        <i class="fa fa-clock-o col btn btn-dark ml-1 "></i>
    </span>
</div>
</div>
<br><br>
  <div class="btn btn-group bg-secondary" style="width:220px;">
    <div class="custom-control custom-checkbox mt-1 pt-1 mr-2">
    <input type="checkbox" value="fifth" name="fifth" class="custom-control-input" id="customControlValidation7">
    <label class="custom-control-label" for="customControlValidation7">Fifth </label>
    
  </div>
  <div class="input-group clockpicker">
    <input type="text" name="timefif"  class="form-control" value="18:00">
    <span class="input-group-addon">
        <i class="fa fa-clock-o col btn btn-dark ml-1 "></i>
    </span>
</div>
</div>
<br><br>
  <div class="btn btn-group bg-secondary" style="width:220px;">
    <div class="custom-control custom-checkbox mt-1 pt-1 mr-2">
    <input type="checkbox" value="friday" name="friday" class="custom-control-input" id="customControlValidation8">
    <label class="custom-control-label" for="customControlValidation8">Friday </label>
    
  </div>
  <div class="input-group clockpicker">
    <input type="text" name="timefri"  class="form-control" value="18:00">
    <span class="input-group-addon">
        <i class="fa fa-clock-o col btn btn-dark ml-1 "></i>
    </span>
</div>
</div>
<br><br>
  <div class="btn btn-group bg-secondary" style="width:220px;">
    <div class="custom-control custom-checkbox mt-1 pt-1 mr-2">
    <input type="checkbox" value="saturday" name="saturday" class="custom-control-input" id="customControlValidation9">
    <label class="custom-control-label" for="customControlValidation9">Saturday </label>
    
  </div>
  <div class="input-group clockpicker">
    <input type="text" name="timesat"  class="form-control" value="18:00">
    <span class="input-group-addon">
        <i class="fa fa-clock-o col btn btn-dark ml-1 "></i>
    </span>
</div>
</div>
  <br><br>

  





<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="dist/bootstrap-clockpicker.min.js"></script>
<script type="text/javascript">
$('.clockpicker').clockpicker()
	.find('input').change(function(){
		console.log(this.value);
	});
var input = $('#single-input').clockpicker({
	placement: 'bottom',
	align: 'left',
	autoclose: true,
	'default': 'now'
});

$('.clockpicker-with-callbacks').clockpicker({
		donetext: 'Done',
		init: function() { 
			console.log("colorpicker initiated");
		},
		beforeShow: function() {
			console.log("before show");
		},
		afterShow: function() {
			console.log("after show");
		},
		beforeHide: function() {
			console.log("before hide");
		},
		afterHide: function() {
			console.log("after hide");
		},
		beforeHourSelect: function() {
			console.log("before hour selected");
		},
		afterHourSelect: function() {
			console.log("after hour selected");
		},
		beforeDone: function() {
			console.log("before done");
		},
		afterDone: function() {
			console.log("after done");
		}
	})
	.find('input').change(function(){
		console.log(this.value);
	});

// Manually toggle to the minutes view
$('#check-minutes').click(function(e){
	// Have to stop propagation here
	e.stopPropagation();
	input.clockpicker('show')
			.clockpicker('toggleView', 'minutes');
});
if (/mobile/i.test(navigator.userAgent)) {
	$('input').prop('readOnly', true);
}
</script>
<script type="text/javascript" src="assets/js/highlight.min.js"></script>
<script type="text/javascript">
hljs.configure({tabReplace: '    '});
hljs.initHighlightingOnLoad();
</script>
  
  
<button type="submit" class="btn btn-outline-dark btn-lg" name="post">Edit</button>
<button type="submit" class="btn btn-outline-danger btn-lg" name="delete">Delete</button>
</form>
</div>
<?php
	}
?>
</body>
</html>	


