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
    <title>service</title>
    <link rel="shortcut icon" href="logo1.png" type="image/x-icon">
    <style>
        .card{
            transition: all 0.3s;
        }
        .card:hover{
            transform: scale(1.1);
            color:black;
            background-image: -webkit-linear-gradient(135deg, #8f71ff,#8bffff);
        }
    </style>
</head>
<body>
    <?php include 'navbar.php';?>
    <div class="container-fluid p-5" style="background-image: linear-gradient(to right,rgb(148, 152, 243), pink);">
    <h1 style="color:white;text-align:center;text-shadow:2px 2px 2px #000000;"><b>Web Design & Development</b></h1>
    <div class="row mt-5">
         <div class="col-sm-3 p-2">
            <div class="card w3-animate-zoom" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <div class="card-header" style="color:navy;">
                      <img src="webdesign.png" alt="web design" height="70px" width="70px">
                        <h2>Web Designing</h2>
               </div>
                 <div class="card-body">
                    <p style="font-size:18px;">
                       Website are the presence of your business in the digital media and we programmics are using most latest and diversified
                       technologies to build you your dream. The website will help you showcase your brands and also will help you generate 
                       lead and help boost your sales.
                    </p>
            
                 </div>
            </div>
         </div>
         <div class="col-sm-3 p-2">
            <div class="card w3-animate-zoom" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <div class="card-header" style="color:navy;">
                <img src="coding.png" alt="web development" height="70px" width="70px">
                     <h2>Web Development</h2>
                </div>
                 <div class="card-body">
                    <p style="font-size:18px;">
                       A Website, Web Portal, or Web Application is the life of a company, and having it designed by us will be nothing 
                       short of a privilege for us. Set a benchmark for your contemporaries by developing your website using ReactJS,
                       Bootstrap, JQuery and make resposible.
                    </p>
                   
                 </div>
            </div>
         </div>
         <div class="col-sm-3 p-2">
            <div class="card w3-animate-zoom" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <div class="card-header" style="color:navy;">
                <img src="template.png" alt="web design" height="70px" width="70px">
                        <h2>Website Tamplete</h2>
                </div>
                 <div class="card-body">
                    <p style="font-size:18px;">
                      I can make easily the best in class website templates that are ready to use for any website. Our templates
                      come with contact form, bright color palettes and modern design. We have both HTML, CSS and Bootstrap
                      templates. Making a professional website has never been easier.
                    </p>
                 
                 </div>
            </div>
         </div>
         <div class="col-sm-3 p-2">
            <div class="card w3-animate-zoom" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <div class="card-header" style="color:navy;">
                <img src="ui.png" alt="web design" height="70px" width="70px">
                    <h2>UI Designing</h2>
                </div>
                 <div class="card-body">
                    <p style="font-size:18px;">
                      The more attractive your visuals are, the more you connect to your targeted consumers. It’s no brainer to 
                      understand the importance of UI designing, and we are here to boost your consumer perspective through 
                      incredible UI designing and looking more atractive for every users.
                    </p>
                
                 </div>
            </div>
         </div>
        </div>
    </div>
   <!--design part is end-->
   <div class="container-fluid bg-white">
    <div class="row p-5">
        <div class="col-sm-6">
            <img src="device_logo1.png" alt="decive" width="100%" height="auto">
        </div>
        <div class="col-sm-6">
            <h3 style="color:navy;"><b>Mobile First Responsive</b></h3>
            <p style="font-size:18px;">
               A responsive web design automatically adjusts for different-sized screens and viewports. With a responsive
               website, someone can browse your website from any device and it will still look and function perfectly.
            </p>
            <p style="font-size:18px;">
               Responsive web design is the practice of building a website suitable to work on every device and every 
               screen size, no matter how large or small, mobile or desktop. It is a principal that focuses on optimizing 
               a website so that it is flexible, adaptive and provides superior user experience.
            </p>
            <p style="font-size:18px;">
               <b>Benifit of responsive website</b>
            </p>
            <p style="font-size:18px;">
               Access to content that is appropriately adapted on any device greatly improves the user experience. A good 
               responsive design also improves readability, increases the time spent on a website, it enhances interaction 
               or, in the case of e-commerce, improves sales.
            </p>
        </div>
    </div>
   </div>
    <!--footer-->
    <?php include 'footer.php';?>
</body>
</html>
