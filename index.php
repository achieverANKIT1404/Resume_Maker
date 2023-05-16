<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Quick Resume</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <style>
            .bg{
                background-color: darkslategray;
            }
            .footer{
                background-color: darkslategray;
                height: 110px;
            }
            .copy{
                padding: 10px;
                color: whitesmoke;
                text-align: center;
            }
            .nav{
                background-color: darkslategray;
                color: whitesmoke;
                padding: 15px;
                font-size: larger;
            }
            .navbar1{
                margin-left: 600px;
                font-size: 18px;
                color: whitesmoke;
            }
            .navbar2{
                margin-left: 50px;
                font-size: 18px;
                color: whitesmoke;
            }
            .navbar3{
                margin-left: 50px;
                font-size: 18px;
                color: whitesmoke;
            }
            .navbar4{
                margin-left: 50px;
                font-size: 18px;
                color: whitesmoke;
            }
           .nav a{
            text-decoration: none;
           }
        </style>
    </head>
    <body>
        <nav>
            <div class="nav">
                <h4>Quick Resume</h4>
                <a href="index.php"><P class="navbar1">Home</P></a>
                <a href="templatepage.php"><P class="navbar2">Templates</P></a>
                <a href="about.php"><P class="navbar3">About</P></a>
                <a href="contact.php"><P class="navbar4">Contact</P></a>
            </div>
        </nav>
    
        <!-- Header-->
        <header class="bg">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder text-white mb-2">Build Your Resume</h1>
                            <p class="lead text-white-50 mb-4"> Create a Professional Resume in Minutes. Quickly create a professional resume with our easy-to-use resume builder. </p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="templatepage.php">Get Started</a>
                                <a class="btn btn-outline-light btn-lg px-4" href="about.php">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
       
        <!-- Pricing section-->
        <section class="bg-light py-5 border-bottom">
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h2 class="fw-bolder">Select Your Resume</h2>
                    
                </div>
                <div class="row gx-5 justify-content-center">
                    <!-- Pricing card free-->

<div class="row template-container">
    <div class="col-md-4  template-file">
        <button id="" class="template-file__image" type="submit">
            <img alt="Elegant" src="images/tem1.jpg"class = "img-fluid" alt = "Responsive Image" width = "300" height = "300">
            <br><a href="form1.php"><span class="btn btn-primary btn--xlarge">Select </span></a></button>
            <!-- <div class="template-name">Elegant </div> -->
    </div>
    <div class="col-md-4  template-file"><button id="" class="template-file__image" type="submit">
        <img alt="Quo" src="images/temp2.jpg"class = "img-fluid" alt = "Responsive Image" width = "300" height = "300">
        <a href="form2.php"><span class="btn btn-primary btn--xlarge">Select</span></a></button><div class="template-name"><br><br></div></div><div class="col-md-4  template-file">
            <button id="" class="template-file__image" type="submit"><img alt="Original" src="images/temp3.jpg"class = "img-fluid" alt = "Responsive Image" width = "300" height = "300">
            <a href="form3.php"><span class="btn btn-primary btn--xlarge">Select</span></a></button><div class="template-name"><br><br></div></div>
            <div class="col-md-4  template-file">

            </div>
        </div></div>
     
        </section>
                    
 
     <section>
     <?php

               include("footer.php");

    ?>
     </section>            
       
        <!-- Footer-->
        <!-- <footer class="footer">
            <div class="container px-5"><p class="copy">Copyright &copy; Quick Resume 2022</p></div>
        </footer> -->
        <!-- Bootstrap core JS-->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->
        <!-- Core theme JS-->
        <!-- <script src="js/scripts.js"></script> -->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> -->
    </body>
</html>
