<?php 
session_start();
if(isset($_SESSION['username'])){ ?>
<!DOCTYPE html>
<html>
<head>
   <link href="bootstrap.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="design.css">
	<title>Edit Freelance Employer</title>
</head>
<body>
<?php 
	echo "<div>";include 'controler/header.php';echo "</div>";
	require_once 'controler/manageFreelanceEmployerControler.php'
	//$_GET['username'];
 ?>
<form method="post" action="<?php echo htmlspecialchars('Controler/manageFreelanceEmployerControler.php');?>">
  <fieldset>
<legend>Freelance Employer:</legend><div style="float: left;">  
  Name: <input type="text" name="name" value="<?php echo $name; ?>">
  <br><hr>
  E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
  <br><hr>
  User Name: <input type="text" name="username" value="<?php echo $_GET['username']; ?>">
  <br><hr>
  Phone: <input type="text" name="phone" value="<?php echo $phone; ?>">
  <br><hr>
  Address: <input type="text" name="address" value="<?php echo $address; ?>">
  <br><hr>
  <input type="submit" name="submit" value="Submit"> <input type="reset" value="Reset"></div></fieldset>
</form>

<div><?php include 'controler/footer.php';?></div>
</body>
</html>
<?php }
else{
$msg="<script>alert('You Have To Login First To Access This Page!')</script>";
    header("location:login.php?alert=" . $msg);
}
 ?>