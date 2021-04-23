<?php 
session_start();
if(isset($_SESSION['username'])){ ?>
<!DOCTYPE html>
<html>
<head>
	 <link href="bootstrap.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="design.css">
	<title>Manage Seeker</title>
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
	require 'controler/manageSeekerControler.php'
 ?>

 <h1 style="font-family: cursive; font-size: 30px; color: #008fb3"><center>Seekers</center></h1>
 <table style="width:100%">
	<thead>
		<tr>
			<th>Name</th>
			<th>Userame</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Gender</th>
			<th>Date Of Birth</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php if($username=="ronaldo"){ ?>
			<tr>
				<td><?php echo $name; ?></td>
				<td><a class='headerButton' href="userProfile.php?username=<?php echo $username; ?>"><?php echo $username; ?></a></td>
				<td><?php echo $email; ?></td>
				<td><?php echo $phone; ?></td>
				<td><?php echo $gender; ?></td>
				<td><?php echo $dob; ?></td>
				<td><a href="editSeeker.php?username=<?php echo $username; ?>">Edit</a>&nbsp&nbsp<a href="controller/deleteStudent.php?id=<?php echo $student['ID']; ?>">Delete</a></td>
			</tr>
		<?php } ?>
		

	</tbody>
	

</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <?php include 'controler/footer.php';?>
</body>
</html>
<?php }
else{
$msg="<script>alert('You Have To Login First To Access This Page!')</script>";
    header("location:login.php?alert=" . $msg);
}
 ?>