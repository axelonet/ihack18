<?php
require_once 'functions/function.php';
session_start();
if(isset($_SESSION['email']))
{
  header('location:./dashboard.php');
}
no_login('preloader');
no_login('header');
no_login('index');
no_login('footer');
 ?>
