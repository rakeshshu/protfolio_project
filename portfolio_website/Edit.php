<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>update</title>
    <link rel="shortcut icon" href="logo1.png" type="image/x-icon">
</head>
<body style="background-image:linear-gradient(135deg, blue, pink);background-repeat:y-repeat;">
    <div class="row mt-5">
        <div class="col-sm-3">
        <a class="btn btn-light btn-lg" href="admin.php" style="text-align:center;"><i class="fa fa-arrow-circle-left" style="font-size:24px"></i> Back to Home</a>
        </div>
        <div class="col-sm-6 mt-5" style="border:4px solid white;border-radius:5px;">
       
        <div class="container mt-3">
             <h3 class="text-white"><b>Update page</b></h3>
       <?php 
          $conn = mysqli_connect("localhost", "root", "", "portfolio") or die("Connection Failed");
         
          $stu_id = $_GET['sid'];
          $sql  = "SELECT * FROM project WHERE id = {$stu_id}";
          $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

          if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){


      ?>
     <form action="update.php" method="POST" class="text-white">
      <div class="mb-3 mt-3">
      
        <input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
       </div>
      <div class="mb-3">
      <label for="fname" class="p-2"><b>Firstname:</b></label>
      <input type="text" class="form-control" name="fname" value="<?php echo $row['firstname']; ?>">
      </div>
      <div class="mb-3">
      <label for="fname" class="p-2"><b>Lastname:</b></label>
      <input type="text" class="form-control" name="lname" value="<?php echo $row['lastname']; ?>">
      </div>
      <div class="mb-3">
      <label for="lname" class="p-2"><b>Email:</b></label>
      <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>">
      </div>
     <div class="mb-3">
      <label for="lname" class="p-2"><b>Phone No:</b></label>
      <input type="text" class="form-control" name="mobile" value="<?php echo $row['phoneno']; ?>">
    </div>
    <div class="mb-3">
   <!--check start-->
    <div class="contaier mt-2 p-2 text-white">
     <p><b>which type service you want please select</b></p>
    
       <div class="form-check">
       <label class="form-check-label" for="radio1"><b>Web Design</b></label>
       <input type="radio" class="form-check-input" name="optradio" value="Web Design"
       
      <?php 
         if($row['topic'] == "Web Design"){
          echo "checked";
         }
         ?>
         >
      </div>
      <div class="form-check">
       <label class="form-check-label" for="radio2"><b>Web development</b></label>
       <input type="radio" class="form-check-input" name="optradio" value="Web development"
       <?php 
         if($row['topic'] == "Web development"){
          echo "checked";
         }
         ?>
         >
      </div>
      <div class="form-check">
      <label class="form-check-label"><b>Website Template</b></label>
       <input type="radio" class="form-check-input" name="optradio" value="Website Tamplate"
      <?php 
         if($row['topic'] == "Website Template"){
          echo "checked";
         }
         ?>
         >
      </div>
      <div class="form-check">
      <label class="form-check-label"><b>UI Designing</b></label>
      <input type="radio" class="form-check-input" name="optradio" value="Custom old website"
      <?php 
         if($row['topic'] == "UI Designing"){
          echo "checked";
         }
         ?>
         >
      </div>
      </div>
      <!--checkbox end-->
     </div>
     <div class="mb-3">
      <label for="lname" class="p-2"><b>Massege:</b></label>
      <input type="text" class="form-control" name="massege" value="<?php echo $row['massege']; ?>">
      </div>
      <div class="p-2"> 
      <input type="submit" class="btn btn-light" name="save" value="Update"></input>
      </div>
     </form>
      <?php 
      } 
      }
      ?>
    </div>
    </div>

 <div class="col-sm-3"></div>
</div>
</body>
</html>