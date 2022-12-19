<?php 

     $sid = $_GET['sid'];

     $conn = mysqli_connect("localhost", "root", "", "portfolio") or die("Connection Failed");
     
     $sql = "DELETE FROM project WHERE id = {$sid}";
     $result = mysqli_query($conn, $sql) or die("Query Failed");

     header("Location: http://localhost/portfolio/admin.php");

     mysqli_close($conn);

?>