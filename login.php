<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="design.css">
	<title>Login</title>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<div><?php include 'controler/header.php';?></div>
<?php require 'controler/loginControler.php';?>

<form method="post" action="controler/loginControler.php">
  <fieldset>
<legend><B>LOGIN</B></legend>  
  User Name: <input type="text" name="username">
  <span class="error"> <?php echo $userNameErr;?></span>
  <br><br>
  Password: <input type="Password" name="Password">
  <span class="error"> <?php echo $passErr;?></span>
  <br><br>
  <input type="checkbox" id="reme" name="rememberMe">
  <label for="reme"> Remember Me</label><br>
  <br>
  <input type="submit" name="submit" value="Submit">
  <a href="">Forgot Password?</a>
</fieldset>

</form>

<div><?php include 'controler/footer.php';?></div>
</body>
</html>