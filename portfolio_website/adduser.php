<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adduser</title>
</head>
<body>
    <?php 

      if(isset($_POST['save'])){
        $conn = mysqli_connect("localhost", "root", "", "portfolio") or die("Connection Failed");

        $username = mysqli_real_escape_string($conn, $_POST['user']);
        $password = mysqli_real_escape_string($conn, md5($_POST['pass']));

        $sql = "SELECT username FROM users WHERE username = '{$username}'";
        $result = mysqli_query($conn, $sql) or die("Query Failed");

        if(mysqli_num_rows($result) > 0){
            echo "<p style='color:red;text-align:center;margin:10px 0'>Username already exist</p>";
        }else{
            $sql1 = "INSERT INTO users (username, password)
                  VALUES ('{$username}', '{$password}')";
           
          if(mysqli_query($conn, $sql1)){
            header("Location: http://localhost/portfolio/adduser.php");
          } 
        }

      }

    ?>
    <div class="conatiner">
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
            <label for="">Username</label>
            <input type="text" name="user">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label for="">Username</label>
            <input type="password" name="pass"><br>
            <input type="submit" name="save" value="submit">
        </form>
    </div>
</body>
</html>