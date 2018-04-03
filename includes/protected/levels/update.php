<?php
require '../includes/config.php';
session_start();
$path = 0;
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    if($_POST['level'] == 6){
      $sql = mysql_query("SELECT * FROM `Progress` WHERE `email`= '".$email."'") or die("Cannot connect to database!");
      $row = mysql_fetch_array($sql);
      $solution = $row['pass'];
      if ($solution === $_POST['solution']) {
        $result = mysql_query("UPDATE `Registrars` SET `level`= '".$_POST['level']."'+1,`score` = `score`+ 30 WHERE `email`= '".$email."'") or die("Cannot connect to database!");
        $result = mysql_query("UPDATE `Progress` SET `".$_POST['level']."`= CURRENT_TIMESTAMP() WHERE `email` = '".$email."'") or die("error");
      }
    }
    else{
      $sql = mysql_query("SELECT * FROM `Solutions` WHERE `level`= '".$_POST['level']."'") or die("Cannot connect to database!");
      $row = mysql_fetch_array($sql);
      $solution = strtolower($row['solution']);
      if ($solution === strtolower($_POST['solution'])) {
          $result = mysql_query("UPDATE `Registrars` SET `level`= '".$_POST['level']."'+1,`score` = `score`+ 30 WHERE `email`= '".$email."'") or die("Cannot connect to database!");
          $result = mysql_query("UPDATE `Progress` SET `".$_POST['level']."`= CURRENT_TIMESTAMP() WHERE `email` = '".$email."'") or die("error");
      }
    }
        header('location:./response.php');

} else {
    header('location:../register.php');
}
