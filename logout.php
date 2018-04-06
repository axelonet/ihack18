<?php
session_start();
unset($_SESSION['email']);
if (isset($_SESSION['name'])) {
    unset($_SESSION['name']);
}
session_destroy();
header('location:./');
