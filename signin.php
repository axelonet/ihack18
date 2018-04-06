<?php
require 'includes/protected/config.php';

  $email = $_POST["email"];
  $password = $_POST["password"];
        $result = mysql_query("SELECT * FROM `users` WHERE `email`= '".$email."'") or die("Cannot connect to database!");
        $row = mysql_fetch_array($result);
        $user_count = mysql_num_rows($result);
        if ($user_count==1) {
            if ($row['password'] === $password) {
                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['registration'] = false;
                $_SESSION['name'] = $row['name'];
                if ($row['registration']=== 'success') {
                    $_SESSION['registration'] = true;
                }
                $login = mysql_query("UPDATE `users` SET `lastlogin`= CURRENT_TIMESTAMP() WHERE `email` = '".$email."'") or die("Cannot connect to database!");
                header('location:./dashboard.php');
            }else {
              echo "Wrong password!";
              header( "refresh:5;url=signin.html" );
            }
        }
        else {
          echo "There was a trouble finding your account... Sign up again or contact us for more info regarding this, ";
          header( "refresh:5;url=index.html" );
        }
