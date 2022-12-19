<?php 
        
        if(isset($_POST['save'])){
            $conn = mysqli_connect("localhost", "root", "", "portfolio") or die("Connection Failed");

            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $phone = $_POST['mobile'];
            $topic = $_POST['optradio'];
            $massege = $_POST['massege'];

            $sql = "INSERT INTO project (firstname, lastname, email, phoneno, topic, massege)
                 VALUES('{$fname}', '{$lname}', '{$email}', '{$phone}', '{$topic}', '{$massege}')";

            if(mysqli_query($conn, $sql)){

                header("Location: http://localhost/portfolio/contact.php");

            }     
            
        }
    ?> 
