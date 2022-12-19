
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
    <title>contact</title>
    <link rel="shortcut icon" href="logo1.png" type="image/x-icon">
</head>
<body>  

    <?php include 'navbar.php'; ?>


    <div class="container-fluid" style="background-color:rgb(240, 240, 240);">
      <div class="row">
        <div class="col-sm-12 p-3" style="text-align:center;color:rgb(79, 2, 109);">
            <h1><b>Contact Us</b></h1>
            <p>If you want to connect with me for project you can contact me, and discuss project related requirements</p>
        </div>
      </div>
      <div class="container p-4">
      <div class="card w3-card-2 w3-animate-zoom">
            <div class="row">
                <div class="col-sm-4 text-white" style="background-image:linear-gradient(-135deg, rgb(3, 23, 154),rgb(246, 0, 172));text-align:center;">
                    <h3 class="mt-5 p-3"><b>Contact Information</b></h3>
                    <p>Any project related issue direct contact me.</p>
                    <p class=" mt-3 p-3"><i class="fa fa-phone-square"></i> +917898116303</p>
                    <p class="mt-3 p-3"><i class="fa fa-envelope"></i> rs7231833@gmail.com</p>
                    <p class="mt-3 p-3"><i class="fa fa-map-marker"></i> Bilaspur, Chhattisgarh-495001</p>
                    <div class="row">
                       <div class="col-sm-12 mt-5">
                        <ul class="nav justify-content-center">
                            <li class="nav-item"><a href="##" class="nav-link text-white"><i class="fa fa-linkedin-square" style="font-size:30px"></i></a></li>
                            <li class="nav-item"><a href="##" class="nav-link text-white"><i class="fa fa-facebook-square" style="font-size:30px"></i></a></li>
                            <li class="nav-item"><a href="##" class="nav-link text-white"><i class="fa fa-twitter-square" style="font-size:30px"></i></a></li>
                            <li class="nav-item"><a href="##" class="nav-link text-white"><i class="fa fa-git-square" style="font-size:30px"></i></a></li>
                        </ul>
                       </div>
                    </div>
                </div>
                <div class="col-sm-8 bg-white">
                    <div class="container-fluid mt-3">
                        <form action="savedata.php" method="POST">
                        <div class="row">
                            <div class="col-sm-6 p-2">
                                <div class="wrapper">
                                    <div class="input-data">
                                        <input type="text" name="fname" placeholder="" required>
                                        <div class="underline"></div>
                                        <label for=""><b>First Name</b></label>
                                    </div>
                                </div>
                            </div>
                            <!--fist col after contaier-fluid-->
                            <div class="col-sm-6 p-2">
                                <div class="wrapper">
                                    <div class="input-data">
                                        <input type="text" name="lname" placeholder="" required>
                                        <div class="underline"></div>
                                        <label for=""><b>Last Name</b></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--first row end after container-fluid-->
                        <!--second row start-->
                        <div class="row">
                            <div class="col-sm-6 p-2">
                                <div class="wrapper">
                                    <div class="input-data">
                                        <input type="email" name="email" placeholder="" required>
                                        <div class="underline"></div>
                                        <label for=""><b>Email-ID</b></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p-2">
                                <div class="wrapper">
                                    <div class="input-data">
                                        <input type="text" name="mobile" placeholder="" required>
                                        <div class="underline"></div>
                                        <label for=""><b>Mobile No</b></label>
                                    </div>
                                </div>
                            </div>
                       </div>
                       <!--second row end after container-fluid-->
                       <!--checkbox-->
                       <div class="contaier mt-2 p-2 text-secondary">
                        <p><b>which type service you want please select</b></p>
    
                       <div class="form-check">
                        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="Web Design" checked>
                        <label class="form-check-label" for="radio1"><b>Web Designing</b></label>
                      </div>
                      <div class="form-check">
                        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="Web development">
                        <label class="form-check-label" for="radio2"><b>Web development</b></label>
                      </div>
                      <div class="form-check">
                        <input type="radio" class="form-check-input" name="optradio" value="Website Tamplate">
                        <label class="form-check-label"><b>Website Tamplate</b></label>
                      </div>
                      <div class="form-check">
                        <input type="radio" class="form-check-input" name="optradio" value="UI Designing">
                        <label class="form-check-label"><b>UI Designing</b></label>
                      </div>
                    </div>
                       <!--massege area start-->
                       <div class="row mt-2">
                        <div class="col-sm-12">
                            <div class="wrapper">
                                <div class="input-data">
                                    <input type="text" name="massege" placeholder="" required>
                                    <div class="underline"></div>
                                    <label for=""><b>Massage</b></label>
                                </div>
                            </div>
                        </div>
                       </div>
                       <!--massege area end-->
                    </div>
                        <div class="row">
                         <div class=" col-sm-6 d-grid p-3">
                            <input type="reset" name="set" class="btn btn-primary btn-block btn-lg" value="Reset"></input>
                         </div>
                         <div class="col-sm-6 d-grid p-3">
                            <input type="submit" name="save" class="btn btn-primary btn-block btn-lg" value="Send"></input>
                        </div>
                       </div>
                    </form>   
                </div>
<!--second row form-->                      
                </div>
            </div>
       </div>
    </div>
    </div>
    <!--footer-->
    <?php include 'footer.php'; ?>
</body>
</html>