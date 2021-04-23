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
	$jobId = "1";
	$jobTitle = "Senior PHP Software Engineer";
	$jobType = "Private";
	$salary = "50,000 TK";
	$jobStatus = "Approval required";
	$postUser = "startupbd";
}
?>