<?php
require_once 'functions/function.php';
session_start();
$level =  $_SESSION['level'];

no_login('header');
login('sidebar');
if($level > 5)
{
  login('dev');
}
else {
  no_login('dev');
}
no_login('footer');
 ?>
