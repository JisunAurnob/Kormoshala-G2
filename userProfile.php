<!DOCTYPE html>
<html>
<head>
	 <link href="bootstrap.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="design.css">
</head>
<body>
<?php 
session_start();
	echo "<div>";include 'controler/header.php';echo "</div>";
	$username = "ronaldo";
	$name = "Cristiano Ronaldo";
	$email = "cr7@juventus.com";
	$dob = "1985-02-05";
	$gender = "Male";
	$phone = "767222411";
 ?>


<fieldset>
<legend><B>USER PROFILE</B></legend><div style= 'margin-right: 750px;float: left; text-align: left;color: green;'> Username:<?php echo $_GET['username']; ?><hr>
	<br>Name: <?php echo  $name ?><hr>
	<br>Email: <?php echo  $email ?><hr>
	<br>Gender: <?php echo  $gender ?><hr>
	<br>Date Of Birth: <?php echo $dob ?><hr>
	<br>Phone: <?php echo  $phone ?><hr>
	</div>
	<div style= 'float: right;position: absolute;left:500px; top: 180px;color: green;'>
		<form action="controler/userProfileControler.php?username=<?php echo $_GET['username']; ?>" method="post" enctype="multipart/form-data">
	<fieldset>
<img src="<?php echo 'resources/uploads/'.$_GET['username'].'.jpg' ?>" alt='Profile Picture' width='180' height='200'><br>
<input type="file" name="fileToUpload" id="fileToUpload">
  <br><hr>
  <input type="submit" name="submit" value="Change Profile Pic">
</fieldset>
</form>
	</div></fieldset>

 <div><?php include 'controler/footer.php';?></div>
</body>
</html>