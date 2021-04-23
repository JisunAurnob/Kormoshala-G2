<!DOCTYPE html>
<html>
<head>
	 <link href="bootstrap.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="design.css">
	<title>Profile</title>
</head>
<body>
<?php 
session_start();
	echo "<div>";include 'controler/header.php';echo "</div>";
	$username = "startupbd";
	$jobId = "1";
	$jobTitle = "Senior PHP Software Engineer";
	$jobType = "Private";
	$salary = "50,000 TK";
	$appliedCount = '3';
	$jobStatus = "Approval required";
 ?>


<fieldset>
<legend><B>USER PROFILE</B></legend>
	<div style= 'margin-right: 750px;float: left; text-align: left;color: green;'> Job Id:<?php echo $jobId; ?><hr>
	<br>Job Title: <?php echo  $jobTitle ?><hr>
	<br>Job Type: <?php echo  $jobType; ?><hr>
	<br>Salary: <?php echo  $salary; ?><hr>
	<br>Total Applied Users: <?php echo  $appliedCount; ?><hr>
	<br>Job Status: <?php echo $jobStatus; ?><hr>
	</div>
	<div style= 'float: right;position: absolute;left:500px; top: 180px;color: green;'>
		<form action="controler/jobProfileControler.php?jobId=<?php echo $_GET['jobId']; ?>" method="post" enctype="multipart/form-data">
	<fieldset>
<img src="<?php echo 'resources/uploads/'.$_GET['jobId'].'.jpg' ?>" alt='Profile Picture' width='180' height='200'><br>
<input type="file" name="fileToUpload" id="fileToUpload">
  <br><hr>
  <input type="submit" name="submit" value="Change Profile Pic">
</fieldset>
</form>
	</div></fieldset>

 <div><?php include 'controler/footer.php';?></div>
</body>
</html>