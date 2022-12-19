<?php 
        
        if(isset($_POST['save'])){
            $conn = mysqli_connect("localhost", "root", "", "portfolio") or die("Connection Failed");

            $sid   = $_POST['id']; 
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $phone = $_POST['mobile'];
            $topic = $_POST['optradio'];
            $massege = $_POST['massege'];

            $sql = "UPDATE project SET firstname = '{$fname}', lastname = '{$lname}', email = '{$email}',
                phoneno = '{$phone}', topic = '{$topic}', massege = '{$massege}' WHERE id = '{$sid}'";

            if(mysqli_query($conn, $sql)){
                header("Location: http://localhost/portfolio/admin.php");
            }     
            
        }
    ?> 
