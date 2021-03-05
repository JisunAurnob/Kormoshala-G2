<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="design.css">
	<title>Sign Up</title>
</head>
<body>
	<?php 
	echo "<div>";include 'controler/header.php';echo "</div>";
 ?>
 <h1 style="font-family: cursive; font-size: 30px; color: #008fb3"><center>Create Your Desired Account</center></h1>
 <center>
<div>
	<a class='headerButton'href='seekerSignUp.php'>Are You A Job Seeker?</a><br><br>
	<a class='headerButton'href='corporateEmployerSignUp.php'>Corporate Employer ?</a><br><br>
	<a class='headerButton'href='personalEmployerSignUp.php'>Personal Employer ? </a><br><br>
</div>
</center>
<div><?php include 'controler/footer.php';?></div>
</body>
</html>