<?php
session_start();

$UserName=$_POST["_UserName"];
$UserPassword=$_POST["_UserPassword"];

$Password='12345678';

  if ($UserName=='admin' && $UserPassword==$Password)
  {
    $_SESSION['UlanyjyAdy']=$UserName;
    $_SESSION['_UserType']=$UserType;
    
    
    header("Location: sertificates.php");
    exit();
  }
  else
  {
    header("Location: login.php");
    exit();
  }

?>