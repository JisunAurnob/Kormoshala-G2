<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if($_POST['jobtype']=='Approved'){
		header("location:../admin.php");
	}
	else
		header("location:../admin.php");
}
?>