<?php 
    $conn = mysqli_connect("localhost", "root", "", "portfolio") or die("Connection Failed");
    
    session_start();

    if(!isset($_SESSION["username"])){
        header("Location: http://localhost/portfolio/login.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Admin</title>
    <link rel="shortcut icon" href="logo1.png" type="image/x-icon">
</head>
<body style="background:#dddd;">

    <div class="container-fluid p-4" style="background-image:linear-gradient(135deg, rgb(75, 159, 255), rgb(133, 241, 253));">
      <div class="row">
        <div class="col-sm-4"><img src="admin4.png" alt="admin" width="60px" height="60px"></div>
        <div class="col-sm-4"><h2 style="color:white;text-shadow:1px 1px 1px #000000;"><b>Admin Panel</b></h2></div>
        <div class="col-sm-4 text-white">
          <h3 style="color:white;text-shadow:1px 1px 1px #000000;"><b>Hello <?php echo $_SESSION["username"];?>&nbsp;&nbsp;<a href="logout.php" class="btn btn-danger btn-lg"style="width:100px;"> Logout</b></a></h3>
        </div>
      </div>
    </div>
    <div class="container mt-3 p-3 bg-white">
      <h3 class="text-secondary"><b>All Record</b></h3>
      <?php 
          $conn = mysqli_connect("localhost", "root", "", "portfolio") or die("Connection Failed");
         
          $sql  = "SELECT * FROM project";
          $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

          if(mysqli_num_rows($result) > 0){

      ?>
        <div class="table-responsive">
        <table class="table table-bordered" style="text-align:center;">
            <thead class="bg-primary text-white">
              <tr>
                <th>Id</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>PhoneNo</th>
                <th>Topic</th>
                <th>Massege</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                   while($row = mysqli_fetch_assoc($result)){
     
              ?>
              <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['lastname']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phoneno']; ?></td>
                <td><?php echo $row['topic']; ?></td>
                <td><?php echo $row['massege']; ?></td>
                <td><a href="Edit.php?sid=<?php echo $row['id']; ?>"><i class='fa fa-edit'style="font-size:22px;"></i></a></td>
                <td><a href="delete.php?sid=<?php echo $row['id']; ?>"><i class='fa fa-trash-o'style="font-size:22px;"></i></a></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
          <?php }else{
            echo "<h2>No Recoed Found</h2>";
            }
            mysqli_close($conn);
            ?>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>