
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
    <title>About</title>
    <link rel="shortcut icon" href="logo1.png" type="image/x-icon">
</head>
<body>  
  <?php include 'navbar.php'; ?>
    <div class="container mt-3">
       <div class="card w3-animate-zoom">
        <div class="cord-body bg-white">
            <div class="row">
                <div class="col-sm-4">
                    <img src="Rakesh.jpg" alt="rakesh" width="100%" height="100%">
                </div>
                <div class="col-sm-8 p-4" style="color:rgb(2, 2, 99);">
                    <h3>About Me</h3>
                    <p>Hello, I am Rakesh Sahu. My profession is web development. I live in India and my home town is in Chhattisgarh. I have completed 
                         my PG Master of Computer Application, I am a good student at my college and I was also involved in extra-academic activities like 
                         a sport and arts. Initially, my interest was in web development. I think this is the best turning point of my life and I have 
                         started the journey of a web developer. I have learned new technologies and increased my knowledge. it was challenging for me 
                         but have done this with my consistency. Recently I completed the frontend development course from Simplilearn and this company
                         gave me a certificate after completing this course. I am a fresher and  I want to start my career in the IT field. I have basic 
                         skills in web development. Ability to work with  HTML5, CSS3, JavaScript, Bootstrap5, PHP, and MySQL. I am particular about my schedule and 
                         always manage my time efficiently. I am a quick learner and ready to take on new challenges required to perform better.
 </p>
                        <p><b> Certificate of Frontend Development</b></p>
                        <a href="front.pdf" download="front" class="w3-button w3-teal w3-round w3-hover-light-grey"><i class="fa fa-cloud-download" style="font-size:20px;"></i> Certificate</a>
                </div>
                </div>
            </div>
        </div>
       </div>
    </div>

    <!--Addres section-->
    <div class="container mt-3">
        <div class="card">
            <div class="card-header"><h4 style="color:navy;"><b>Key Skill</b></h4></div>
            <div class="card body p-4" style="color:rgb(0, 0, 112);">
                <p><i class="fa fa-plus-circle" style="font-size:24px;color:cornflowerblue;"></i> <b>Web Development</b></p>
                <p><i class="fa fa-plus-circle" style="font-size:24px;color:darkorange;"></i> <b>Frontend Development</b></p>
                <p><i class="fa fa-plus-circle" style="font-size:24px;color:brown;"></i> <b>JavaScript Developer</b></p>
                <p><i class="fa fa-plus-circle" style="font-size:24px;color:crimson;"></i> <b>PHP Developer</b></p>
                <p><i class="fa fa-plus-circle" style="font-size:24px;color:lawngreen;"></i> <b>HTML, CSS, Bootstrap</b></p>
            </div>
        </div>
    </div>
    <!--company logo-->
    <div class="container mt-3">
     <div class="card">
        <div class="card-header bg-white" style="color:navy;">I love this company</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-2"><img src="tcs.png" alt="tcs" height="100px" width="100px"></div>
                <div class="col-sm-2"><img src="tech.png" alt="tech" height="100px" width="110px"></div>
                <div class="col-sm-2"><img src="flipcart.png" alt="flipcart" height="100px" width="100px"></div>
                <div class="col-sm-2"><img src="microsoft.png" alt="microsoft" height="100px" width="100px"></div>
                <div class="col-sm-2"><img src="google.png" alt="google" height="100px" width="120px"></div>
                <div class="col-sm-2"><img src="Cognizant.png" alt="cogni" height="100px" width="100px"></div>
            </div>
        </div>
     </div>
    </div>
     <!--footer-->
     <?php include 'footer.php';?>
</body>
</html>