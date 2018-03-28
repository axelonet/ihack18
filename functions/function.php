<?php
function no_login($module)
{
  require 'includes/'.$module.'.php';
}
//any one accessing the files from protected folder should have logged in.
function login($module)
{
  require 'includes/protected/'.$module.'.php';
}
 ?>
