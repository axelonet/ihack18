<?php
require_once 'functions/function.php';
session_start();

no_login('header');
no_login('preloader');
login('sidebar');
login('profile');
no_login('footer');
