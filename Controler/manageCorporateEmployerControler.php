<?php


$flag = 0;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
$compName = $_POST["compName"];
$email = $_POST["email"];
$address = $_POST["address"];
$picture = "gg";
$phone = $_POST["phone"];
$tradelicense = $_POST["tradelicense"];
	$flag = 1;
	header("location:../manageCorporateEmployer.php");
}
else if($flag==0){
	$username = "startupbd";
	$compName = "Startup Bangladesh";
	$email = "support@startupbd.com";
	$address = "Bashundhora, Dhaka";
	$picture = "gg";
	$phone = "+8801724888233";
	$tradelicense = "65486486435684";
}
?>