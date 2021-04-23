<?php
session_start();
echo "<div>";include 'header.php';echo "</div>";
	$username = "ronaldo";
	$name = "Cristiano Ronaldo";
  $email = "cr7@juventus.com";
  $dob = "1985-02-05";
  $gender = "Male";
  $phone = "767222411";

	$target_dir = "C:/xampp/htdocs/Web Technologies/Project/resources/uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    // echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image<br>";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists<br>";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 4000000) {
  echo "Picture size should not be more than 4MB<br>";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
  echo "Sorry, only JPG, JPEG, & PNG files are allowed<br>";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded<br>";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir . basename($_GET['username'].".jpg"))) {
    echo "Profile Picture Uploaded Succesfully<br>";
    header("location:../userProfile.php");
  } else {
    echo "Sorry, there was a problem uploading your file<br>";
  }
}
include 'footer.php';
?>