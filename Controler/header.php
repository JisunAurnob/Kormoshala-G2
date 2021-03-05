<header>
	<div style="float: left;"><a href='home.php'><img src="controler/Logo.png"></a></div><br><br>
<?php

if (empty($_SESSION['username'])) {
	echo "<div style='float: right';><a class='headerButton'href='home.php'>Home</a>";
	echo "<a class='headerButton' href='login.php'>Login</a>";
	echo "<a class='headerButton' href='Sign Up.php'>Sign Up</a> </div><br><br><br><br><hr>";
	
}

else{
	echo "<div style='float: right';>"." Welcome <a style='text-decoration: none;color: #0066ff;' href='profile.php'>".$_SESSION['username']."</a> | ";
	echo "<a class='headerButton' href='controler/logout.php'>Logout</a><br>";
	echo "</div><br><br><br><br><hr>";
}
?>
	
</header>