<?php
require 'includes/protected/config.php';
$email = $_POST["email"];
$name = $_POST["name"];
$contact = $_POST["contact"];
$idea = $_POST['idea'];

$sql = mysql_query("INSERT into `Questions` (`name`, `email`, `contact`, `idea`) values('".$name."', '".$email."','".$contact."','".$idea."')");
if ($sql) {
  echo "Question submitted Successfully";
}
else {
  echo "There was an error during sebmission. Please try after sometime.";
}

 ?>
