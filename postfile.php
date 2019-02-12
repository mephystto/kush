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
<body style="background: rgb(238,238,238)">
<?php
if(isset($_SESSION['email']) && $_SESSION['password']){
		
}else{
echo "<div class='alert alert-danger' role='alert'>
  Please <a href='login.php'>loggin!</a>
</div>";
	return;	
}	

?>


<?php 
$email = $_SESSION['email'];
$sqlsource = "SELECT * FROM users WHERE email='$email'";
$resultsource = $connsource->query($sqlsource);
$rowsource = $resultsource->fetch_assoc();
$source = $rowsource['name'];  
$rank = $rowsource['rank'];
$status = $rowsource['status'];
$token = $rowsource['token'];
$crown = "";
?>
<?php
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
	margin-top:64px;
	margin-left:20px;
	margin-right:20px;
}
</style>





<?php

	

	$error1 = "form-control mt-2";
	$error2 = "form-control mt-2";
	$error3 = "form-control mt-2";
	$error4 = "custom-file-input mt-2";
	$error5 = "custom-file-input mt-2";
	$error6 = "custom-file-input mt-2";

    $nomes = array(0=>'Horror', 1=>'Sitcom', 2=>'Comedy', 3=>'SCI-FI', 4=>'Family', 5=>'Adult', 6=>'Funny', 7=>'War', 8=>'History', 9=>'Geek');
	list($a, $b, $c, $d, $e, $f, $g, $h, $i, $j)=$nomes;
	if(isset($_POST['post'])){
		$reimage = false;
		$reaudio = false;
		$error = false;
		$content = strip_tags($_POST['content']);
		$content = mysqli_real_escape_string($db, $content);
		$content = substr($content, 0, 2500);
		//validation
		$title = strip_tags($_POST['title']);
		$title = mysqli_real_escape_string($db, $title);
		$title = substr($title, 0, 25);
		//validation
		$tag = strip_tags($_POST['tag'][0]);
		$tag = mysqli_real_escape_string($db, $tag);
		$tag = implode(', ', $_POST['tag']);	
		//validation
		date_default_timezone_set('America/Sao_Paulo');
		$date = date("m.d.y");
		$token_path = bin2hex(openssl_random_pseudo_bytes(16)); //.".".$extension;//extensão para o vídeo.
		
		$target_fileaudio = "videos/" . basename($_FILES["fileaudio"]["name"]); //check file
		$target_fileimage = "videos/" . basename($_FILES["fileimage"]["name"]); //check file
		$extensionc = pathinfo($target_fileaudio,PATHINFO_EXTENSION); //check to get extension
		$extensionimage = pathinfo($target_fileimage,PATHINFO_EXTENSION); //check to get extension
		
		
		if(isset($_POST['checkboximage']) && $_FILES["fileimage"]["name"] != ""){
		$token_image = bin2hex(openssl_random_pseudo_bytes(13)).".".$extensionimage;//extensão
		}else{
		$token_image = "";	//check to not send to mysql
		$reimage = true;
		}
		
		
		if(isset($_POST['checkbox']) && $_FILES["fileaudio"]["name"] != ""){
		$token_audio = bin2hex(openssl_random_pseudo_bytes(13)).".".$extensionc;//extensão	
		}else{
		$token_audio = "";	//check to not send to mysql
		$reaudio = true;
		}
		
		
		
		
		

		$sql = "INSERT IGNORE into videos (title, content, date, video_name, uploader, tag, audio, image) VALUES ('$title', '$content', '$date', '$token_path', '$token', '$tag', '$token_audio', '$token_image')";
			

		$email = $_SESSION['email'];
		$sqlsource = "SELECT name FROM users WHERE email='$email'";
		$resultsource = $db->query($sqlsource);
		$rowsource = $resultsource->fetch_assoc();
		$source = $rowsource['name'];
		
		if(strlen($title) < 4 || strlen($title) == "" || strlen($title) > 25){
			$error = true;
			$error1 = "form-control is-invalid mt-2";
		}
		
		if(strlen($content) < 20 || strlen($content) == "" || strlen($content) > 2500){
			$error = true;
			$error2 = "form-control is-invalid";
			
		}	
		

			
		if($_POST['tag'][0] == "" || $_POST['tag'][0] != $a && $_POST['tag'][0] != $b && $_POST['tag'][0] != $c && $_POST['tag'][0] != $d && $_POST['tag'][0] != $e && $_POST['tag'][0] != $f && $_POST['tag'][0] != $g && $_POST['tag'][0] != $h && $_POST['tag'][0] != $i && $_POST['tag'][0] != $j){
			$error = true;
			$error3 = "form-control is-invalid mt-2";	
		}
		
		



		//audio
		if(isset($_POST['checkbox']) && $error != true){ //confirm checkbox	                                           
		if(isset($_FILES["fileaudio"]["name"])){
		$target_fileaudio = "videos/" . basename($_FILES["fileaudio"]["name"]);
		}				
		$extension = pathinfo($target_fileaudio,PATHINFO_EXTENSION);
		if($target_fileaudio == "" || $extension == "" || $extension != "mp3")
		{
			$error = true;
			$error5 = "custom-file-input is-invalid";
		}	
		}
		
		//audio	


		


		//image  
		if(isset($_POST['checkboximage']) && $error != true){ //confirm checkbox			
		if(isset($_FILES["fileimage"]["name"])){
		$target_fileimage = "videos/" . basename($_FILES["fileimage"]["name"]);
		}				
		$extension = pathinfo($target_fileimage,PATHINFO_EXTENSION);
		if($target_fileimage == "" || $extension == "" || $extension != "jpg" && $extension != "png" && $extension != "gif")
		{
			$error = true;
			$error6 = "custom-file-input is-invalid";
		}
		}		
		//image
		
		
		
		
		if($error != true && isset($_POST['checkboximage'])){
		if(move_uploaded_file($_FILES["fileimage"]["tmp_name"],$target_fileimage)){		
		$token_file = "videos/" . basename($_FILES["fileimage"]["name"]);                    
		$fn = $token_file;                                                         
		$newfn = $token_image;  	
		if(rename($fn,$newfn)){ 
		echo "<script>alert('Image Sended Sucessfully!');</script>"; 
		}else{                                                                     
		 echo 'An error occurred during renaming the file';                        
		                                                                           
		}                                                                          
																				                                                                             
		}	
		}
		
		
		
		if($error != true && isset($_POST['checkbox'])){
		if(move_uploaded_file($_FILES["fileaudio"]["tmp_name"],$target_fileaudio)){		
		$token_file = "videos/" . basename($_FILES["fileaudio"]["name"]);                    
		$fn = $token_file;                                                         
		$newfn = $token_audio;  	
		if(rename($fn,$newfn)){ 
		echo "<script>alert('Audio Sended Sucessfully!');</script>"; 
		}else{                                                                     
		 echo 'An error occurred during renaming the file';                        
		                                                                           
		}                                                                          																		                                                                             
		}	
		}
		
		if($error != true){
			mysqli_query($db, $sql); //send all files
			echo "<script>alert('All Files Sended Sucessfully!');</script>";
			//sendmail
			$out_name = substr($token_path,0,7) . "_" . $title;
			$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/display.php?v=$out_name";
			$sqlsources = "SELECT * FROM subscribe";
			$resultsources = $db->query($sqlsources);
			$rowcount=mysqli_num_rows($resultsources);
			while($rowsources = $resultsources->fetch_assoc()){
			if($rowsources['status'] == "active"){
			$mail = $rowsources['email'] . ", ";
			//mail
			$to = "$mail";
			$subject = "$title";
			$message = "
			<html>
			<head>
			<title>HTML email</title>
			</head>
			<body>
			<h1>Check out our latest post</h1>
			<a href='$link' style='text-color:red;font-size:43px;'>$title</a>
			</body>
			</html>
			";
			// Always set content-type when sending HTML email
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			
			mail($to,$subject,$message,$headers);
			//mail
			
			
			
			}
			}
			//sendmail
			
			
			
		}else{
		$btn = false;
		}		
	}
	
//REMIND: INSERT ALL IP INTO A TABLE	
?>



<div class="panel">

<form action="postfile.php" method="post" enctype="multipart/form-data">
<div class="form-group">
		<input class="<?php echo $error1?>" id="colFormLabelsm" placeholder="Title" maxlength="20" placeholder="Title" name="title" type="text" autofocus size="48">
		</div>
		<div class="form-group">
		<textarea class="<?php echo $error2?>" id="exampleFormControlTextarea1" rows="3" maxlength="2500" placeholder="Content" name="content" rows="20" cols="50"></textarea>
		</div>
	
	    <div class="form-group">
        <select name="tag[]" multiple="multiple" class="<?php echo $error3?> js-example-basic-multiple" id="exampleFormControlSelect2">
		<option selected value="">Tags...</option>
		<?php 
		for($row=0;$row<count($nomes);$row++)
		echo "<option value='$nomes[$row]'>$nomes[$row]</option>";
		?>
		</select>
		</div>
		<div class="custom-control custom-checkbox mr-sm-2 mt-3 mb-3 ml-1">
        <input type="checkbox" name="checkbox" class="custom-control-input" id="customControlAutosizing">
        <label class="custom-control-label" for="customControlAutosizing">I wanna Send An Audio <span class="text-danger">(Mp3)</span></label>
      </div>
		<div class="custom-file">
		<input type="file" name="fileaudio" class="<?php echo $error5?>" id="customFile">
		<label class="custom-file-label" for="customFile">Choose file</label>
		</div>
		
		<div class="custom-control custom-checkbox mr-sm-2 mt-3 ml-1">
        <input type="checkbox" name="checkboximage" class="custom-control-input" id="customControlAutosizing1">
        <label class="custom-control-label" for="customControlAutosizing1">I wanna Send An Image <span class="text-danger">(Jpg, Png, Gif)</span></label>
      </div>
		
		
		<div class="custom-file mt-3">
		<input type="file" name="fileimage" class="<?php echo $error6?>" id="customFile">
		<label class="custom-file-label" for="customFile">Choose file</label>
		</div>
		
		<div class="form-group mt-3">
		<button id="loadMore" name="post" type="submit" class="btn btn-primary mb-2">Submit </button><span class="lds-dual-ring ml-3" style="display:none" id="wait"></span>
		</div>
		
	</form>
	



	

<style>
.lds-dual-ring {
  display: inline-block;
  width: 64px;
  height: 64px;
}
.lds-dual-ring:after {
  content: " ";
  display: block;
  width: 46px;
  height: 46px;
  margin: 1px;
  border-radius: 50%;
  border: 5px solid #fff;
  border-color: #007bff transparent #007bff transparent;
  animation: lds-dual-ring 1.2s linear infinite;
}
@keyframes lds-dual-ring {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}


</style>

	
	
</div>	

<script>
$(function () {
    $('#loadMore').on('click', function (e) {
		$('#wait').show();
		document.getElementById('loadMore').style.display = "none";
    });
});
</script>
	


	
		
</body>
</html>		