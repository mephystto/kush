<?php
#mephystto
$disabled = false;
if($rowsource['rank'] != "Owner"){
$disabled = "disabled";	
}
?>
<nav class="nav nav-pills nav-justified">
<ul class="nav nav-tabs justify-content-center mb-2" style="background-color:rgb(238,238,238);position:fixed;left:0;right:0;">
  <li class="nav-item">
	<a class="nav-link" href="edit_account.php"><?php echo $source?></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="postfile.php">New Post</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index2.php">Edit Post</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo $disabled?>" href="create.php">Create Accout</a>
  </li>
      <li class="nav-item">
    <a class="nav-link <?php echo $disabled?>" href="users.php">Manage Users</a>
  </li>
        <li class="nav-item">
    <a class="nav-link <?php echo $disabled?>" href="del_comment.php">Manage Comments</a>
  </li>
          <li class="nav-item">
    <a class="nav-link" href="schedule.php">Schedule</a>
  </li> 
</ul>
</nav>