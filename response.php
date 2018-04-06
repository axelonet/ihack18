<?php
require 'includes/protected/config.php';
session_start();
$answer = $_POST['solution'];
$level = $_SESSION['level'];
$email = $_SESSION['email'];
$sql = mysql_query("SELECT * FROM `Solutions` WHERE `level`= '".$level."'") or die("Cannot connect to database!");
$row = mysql_fetch_array($sql);
$solution = strtolower($row['solution']);

if ($solution === strtolower($answer)) {
    $result = mysql_query("UPDATE `users` SET `level`= '".$level."'+1,`score` = `score`+ 50 WHERE `email`= '".$email."'") or die("Cannot connect to database!");
    $result = mysql_query("UPDATE `Progress` SET `".$level."`= CURRENT_TIMESTAMP() WHERE `email` = '".$email."'") or die("error");
    header('location:./dashboard.php');
}
else {
  header('location:./dashboard.php');
}
