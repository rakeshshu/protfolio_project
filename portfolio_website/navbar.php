<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Home</title>
    <link rel="shortcut icon" href="logo1.png" type="image/x-icon">
   <style>
    .nhead{
        text-transform: uppercase;
        font-size: 17px;
        font-weight: bold;
        color:darkviolet;
    }
    
     .active{
         background-color:rgb(245, 245, 250);
         border-radius:4px;
         padding:10px;
         box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.2), 0 2px 3px 0 rgba(0, 0, 0, 0.2);
        
    }
  
   </style>
</head>
<body style="background-color:rgb(240, 240, 240);">
   
       <nav class="navbar navbar-expand-sm bg-white sticky-top navbar-white">
            <div class="container-fluid p-2">
              <a class="navbar-brand fs-2 ms-4" href="index.php" style="color:darkviolet;"><i class="fa fa-user" style="font-size:28px"></i> Portfolio</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a href="index.php" class="nav-link p-3 nhead <?php if(basename($_SERVER['PHP_SELF'])=="index.php"){
                        echo "active";
                    }else{
                        echo "";
                    }?>">Home</a>
                  </li>
                  <li class="nav-item">
                    <a href="about.php" class="nav-link p-3 nhead <?= (basename($_SERVER['PHP_SELF'])=="about.php")?"active":"";?>">About</a>
                  </li>
                  <li class="nav-item">
                    <a href="service.php" class="nav-link p-3 nhead <?= (basename($_SERVER['PHP_SELF'])=="service.php")?"active":"";?>">Service</a>
                  </li>  
                  <li class="nav-item">
                    <a href="contact.php" class="nav-link p-3 nhead <?= (basename($_SERVER['PHP_SELF'])=="contact.php")?"active":"";?>">Contact</a>
                  </li>      
                </ul>
              </div>
            </div>
          </nav>

