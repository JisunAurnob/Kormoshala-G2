<?php
// $username = "jisun";
// $name = "Jisun Abedin Aurnob";
// $email = "jisunabedin@gmail.com";
// $dob = "1999-08-03";
// $gender = "Male";
// $phone = "01767222411";
$flag = 0;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
	$name = $_POST["name"];
	$email = $_POST["email"];
	$dob = $_POST["birthday"];
	$gender = $_POST["gender"];
	$phone = $_POST["phone"];
	$flag = 1;
	header("location:../manageSeeker.php");
}
else if($flag==0){
	$username = "ronaldo";
	$name = "Cristiano Ronaldo";
	$email = "cr7@juventus.com";
	$dob = "1985-02-05";
	$gender = "Male";
	$phone = "767222411";
}

// $username = "jisun";
// $name = "Jisun Abedin Aurnob";
// $email = "jisunabedin@gmail.com";
// $dob = "1999-08-03";
// $gender = "Male";
// $phone = "01767222411";

?>