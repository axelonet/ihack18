<?php
require_once 'functions/function.php';

no_login('header');
no_login('preloader');
login('sidebar');
login('level');
?>

<?php

no_login('footer');

  // session_start();
  // if (isset($_SESSION['email'])) {
  //     getmodule("header");
  //     getmodule("toolbar");?>

  <?php
  // getmodule("footer");
  // } else {
  //     header('location:./logout.php');
  // }
  ?>
