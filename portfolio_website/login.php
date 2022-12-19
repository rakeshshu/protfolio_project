<?php 
    $conn = mysqli_connect("localhost", "root", "", "portfolio") or die("Connection Failed");
    
    session_start();

    if(isset($_SESSION["username"])){
        header("Location: http://localhost/portfolio/admin.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>login</title>
    <link rel="shortcut icon" href="logo1.png" type="image/x-icon">
</head>
<body style="background-image:linear-gradient(135deg, rgb(255, 247, 154), rgb(150, 3, 249));background-repeat:y-repeat;">
     <div class="container-fluid">
        <div class="row">
        <div class="col-sm-12 p-3" style="text-align:center;color:rgb(79, 2, 109);">
            <h1 style="color:white;text-align:center;text-shadow:2px 2px 2px #000000;"><b>Admin Login</b></h1>
        </div>
        </div>

        <div class="container mt-3 p-5">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                <div class="row">
                <div class="col-sm-12 p-2">
        <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
          <div class="card-header"><h3 style="color:rgb(79, 2, 109);"><b>Login here</b></h3></div>
          <div class="card-body">
            <!--form open-->
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="col-sm-12 p-2">
                    <div class="wrapper">
                        <div class="input-data">
                            <input type="text" name="username"  required>
                            <div class="underline"></div>
                            <label for=""><b>Username</b></label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 p-2">
                    <div class="wrapper">
                        <div class="input-data">
                            <input type="password" name="password" required>
                            <div class="underline"></div>
                            <label for=""><b>Password</b></label>
                        </div>
                    </div>
                </div>
                <div class=" col-sm-12 d-grid p-2">
                    <input type="submit" name="login" class="btn btn-primary btn-block btn-lg" value="login"></input>
                 </div> 
                 </form> 
                 <!--form close -->
                 <?php 
                    if(isset($_POST['login'])){
                        $conn = mysqli_connect("localhost", "root", "", "portfolio") or die("Connection Failed");
                        $username = mysqli_real_escape_string($conn, $_POST['username']);
                        $password = md5($_POST['password']);

                        $sql = "SELECT id, username, password FROM users WHERE username ='{$username}' AND password ='{$password}'";
            
                        $result = mysqli_query($conn, $sql) or die("Query Failed");

                        if(mysqli_num_rows($result) > 0){
                            
                            while($row = mysqli_fetch_assoc($result)){
                                session_start();
                                $_SESSION["username"] = $row['username'];
                                $_SESSION["id"] = $row['id'];
                                $_SESSION["password"] = $row['password'];
 
                              header("Location: http://localhost/portfolio/admin.php");
                            }

                        }else{
                            echo '<div class="alert alert-danger">Username and Password are not matched.</div>';
                        }
                    }
                 ?>
                </div>
                <div class="card-footer" style="color:rgb(79, 2, 109);">
                      
                Only for Admin &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="index.php" class="btn btn-secondary btn-sm">Back Home</a>
                </div>
            </div>
            </div>
        </div>
        </div>
       </div>
            <div class="col-sm-3"></div>  
      </div>
     </div>
</body>
</html>