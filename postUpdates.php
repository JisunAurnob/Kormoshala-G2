<?php 
session_start();
if(isset($_SESSION['username'])){ ?>
<!DOCTYPE html>
<html>
<head>
	 <link href="bootstrap.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="design.css">
	<title>Post Updates</title>
	<style>
	table, th, td {
  	border: 1px solid black;
	}
	th, td {
  	padding: 15px;
	}
</style>
</head>
<body>
<?php 
	echo "<div>";include 'controler/header.php';echo "</div>";
	require_once 'controler/managePostsControler.php';
 ?>

<fieldset>
<legend><B>Update Post</B></legend>
<div style= 'margin-right: 750px;float: left; text-align: left;color: green; font-size: 20px;'>Job Id: <a class='headerButton' href="jobProfile.php?username=<?php echo $_GET['jobId']; ?>"><?php echo $_GET['jobId']; ?></a><hr>
	<br>Job Title: <?php echo  $jobTitle ?><hr>
	<br>Job Type: <?php echo  $jobType ?><hr>
	<br>Email: <?php echo  $salary ?><hr>
	<br>Post User: <?php echo  $postUser ?><hr>
	<form method="post" action="<?php echo htmlspecialchars('Controler/postUpdatesControler.php');?>"
	<hr><br>JOB STATUS:
  	<select name="jobtype">
  	<option name="jobtype" value="Approved" <?php if($jobStatus=="Approved"){echo "selected";} ?>>Approve</option>
  	<option name="jobtype" value="Rejected" <?php if($jobStatus=="Rejected"){echo "selected";} ?>>Reject</option>
  	<option name="jobtype" value="Approval required" <?php if($jobStatus=="Approval required"){echo "selected";} ?>>Pending</option>
  </select><hr><br>
  <input type="submit" name="submit" value="Update"> <input type="reset" value="Reset">
</form>
	</div>
	<div style= 'float: right;position: absolute;left:500px; top: 180px;color: green;'>
	<fieldset>
<img src='resources/propiclogo.png' alt='Profile Picture' width='180' height='200'>
</fieldset>
	</div></fieldset>
 
<div><?php include 'controler/footer.php';?></div>

</body>
</html>
<?php }
else{
$msg="<script>alert('You Have To Login First To Access This Page!')</script>";
    header("location:login.php?alert=" . $msg);
}
 ?>