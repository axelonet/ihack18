<?php
require 'includes/protected/config.php';

$name = $_POST['Name'];
$contact = $_POST['contact'];
$Email = $_POST['email'];
$password = $_POST['password'];

//first, we need to check if the user already exists. If not, then enter him/her into the db.
$result = mysql_query("SELECT * FROM `users` WHERE `email`= '".$Email."' ") or die("Cannot connect to database!");
$user_count = mysql_num_rows($result);
if ($user_count==0) {
    $sql = mysql_query("INSERT into `users` (`email`, `password`, `name`, `contact`, `registration`, `level`) values('".$Email."','".$password."','".$name."','".$contact."','success','1')");
    $sql1 = mysql_query("INSERT into `Progress` (`Email`) values('".$Email."')");

    if ($sql && $sql1) {
        session_start();
        $_SESSION['name'] = $name;
        $_SESSION['success'] = true;
        header('location:./dashboard.php');
      }
}
