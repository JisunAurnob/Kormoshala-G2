<?php


$flag = 0;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
$name = $_POST["compName"];
$email = $_POST["email"];
$address = $_POST["address"];
$picture = "gg";
$phone = $_POST["phone"];
	$flag = 1;
	header("location:../manageFreelanceEmployer.php");
}
else if($flag==0){
	$username = "aurnob";
	$name = "Aurnob Abedin";
	$email = "aurnob@zaptail.com";
	$address = "Thakurgaon,Rangpur,Bangladesh";
	$picture = "gg";
	$phone = "+8801724888233";
}
?>