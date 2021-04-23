<?php 
session_start();
if(isset($_SESSION['username'])){ ?>
<!DOCTYPE html>
<html>
<head>
	 <link href="bootstrap.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="design.css">
	<title>Manage Posts</title>
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
	require 'controler/managePostsControler.php';
 ?>
 <h1 style="font-family: cursive; font-size: 30px; color: #008fb3"><center>Posted Jobs</center></h1>
 <table style="width:100%">
	<thead>
		<tr>
			<th>Job ID</th>
			<th>Job Title</th>
			<th>Job Type</th>
			<th>Salary</th>
			<th>Job Status</th>
			<th>Posted By</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
			<tr>
				<td><a class='headerButton' href="jobProfile.php?jobId=<?php echo $jobId; ?>"><?php echo $jobId; ?></a></td>
				<td><?php echo $jobTitle; ?></td>
				<td><?php echo $jobType; ?></td>
				<td><?php echo $salary; ?></td>
				<td><?php echo $jobStatus; ?></td>
				<td><a class='headerButton' href="profile.php?username=<?php echo $postUser; ?>"><?php echo $postUser; ?></a></td>
				<td><a href="postUpdates.php?jobId=<?php echo $jobId; ?>">Update Status</a>&nbsp&nbsp<a href="controller/deleteStudent.php?id=<?php echo $student['ID']; ?>">Delete</a></td>
			</tr>
		

	</tbody>
</table>
 <div><?php include 'controler/footer.php';?></div>
</body>
</html>
<?php }
else{
$msg="<script>alert('You Have To Login First To Access This Page!')</script>";
    header("location:login.php?alert=" . $msg);
}
 ?>