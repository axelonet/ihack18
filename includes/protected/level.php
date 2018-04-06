<?php

require 'config.php';

if(isset($_SESSION['email']))
{
  $email = $_SESSION['email'];
  $result = mysql_query("SELECT * FROM `users` WHERE `email`= '".$email."'") or die("Cannot connect to database!");
  $row = mysql_fetch_array($result);
  $user_count = mysql_num_rows($result);
  if ($user_count==1) {
    $level = $row['level'];
    $_SESSION['level'] = $level;
    require 'levels/level'.$level.'.php';
  }
}
 ?>
