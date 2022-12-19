<?php

  $conn = mysqli_connect("localhost", "root", "", "portfolio") or die("Connection Failed");
  
  session_start();

  session_unset();

  session_destroy();

  header("Location: http://localhost/portfolio/login.php");


?>