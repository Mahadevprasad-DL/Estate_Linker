<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");								
?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Homex template">
<meta name="keywords" content="">
<meta name="author" content="Unicoder">
<link rel="shortcut icon" href="images/favicon.ico">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!-- Css Link -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<!-- Include Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<!-- Title -->
<title>Homex - Real Estate Template</title>

<style>
    /* Custom styles for "Why Use NoBroker" section */
    body {
        font-family: Arial, sans-serif;
    }
    .feature {
        text-align: center;
        max-width: 200px;
        transition: transform 0.3s;
    }
    .feature:hover {
        transform: scale(1.1); /* Slight zoom effect on hover */
    }
    .feature a {
        text-decoration: none;
        color: inherit;
    }
    .feature i {
        font-size: 50px;
        color: #ff5252;
        margin-bottom: 10px;
    }
    .feature h3 {
        font-size: 18px;
        font-weight: bold;
        margin: 10px 0;
        color: #333;
    }
    .feature p {
        font-size: 14px;
        color: #555;
    }
    .container {
        text-align: center;
        padding: 20px;
    }
    .title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
    }
    .features {
        display: flex;
        justify-content: space-around;
        margin-top: 20px;
    }
    .feature {
        text-align: center;
        max-width: 200px;
    }
    .feature i {
        font-size: 50px;
        color: #ff5252;
        margin-bottom: 10px;
    }
    .feature h3 {
        font-size: 18px;
        font-weight: bold;
        margin: 10px 0;
    }
    .feature p {
        font-size: 14px;
        color: #555;
    }
    /* Add extra space at the bottom of the page */
    .full-row {
        padding-bottom: 100px; /* Extra space at the bottom */
    }
    #page-wrapper {
        min-height: 1500px; /* Increase scrolling length */
    }
</style>
</head>
<body>

<div id="page-wrapper">
    <div class="row"> 
        <!-- Header start -->
        <?php include("include/header2.php");?>
        <!-- Header end -->
        
        <!-- Banner Section -->
        <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>About US</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">About Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        
     <!-- About Our Company Section -->
<div class="full-row" style="background-color: #f7f7f7; padding: 40px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3 class="text-uppercase mb-4" style="font-size: 28px; color: #333; font-weight: bold;">About FlatValue Services and Rentals</h3>
                <p style="
                    font-size: 16px; 
                    line-height: 1.8; 
                    color: #555;
                    max-width: 800px; 
                    margin: 0 auto; 
                    background: #ffffff;
                    padding: 20px 30px; 
                    border-radius: 8px; 
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    FlatValue Services and Rentals is your trusted partner in finding affordable, high-quality rental homes and properties. With years of experience in the real estate industry, we aim to simplify the renting process for both tenants and property owners.<br><br>
                    
                    Whether you're looking for a cozy apartment, a spacious family home, or a short-term rental solution, FlatValue ensures a hassle-free experience with a diverse range of property listings. At FlatValue, we understand the importance of finding the right place to call home, and we're here to help you every step of the way.
                </p>
            </div>
        </div>
    </div>
</div>

        
      <!-- Why Use NoBroker Section -->
<div class="container">
    <div class="title" style="font-size: 28px; font-weight: bold; margin-bottom: 20px; color: #333;">Why Use FlatValue Services and Rentals</div>
    <div class="features">
        <div class="feature">
            <a href="avoid_brokers.html" style="text-decoration: none; color: inherit;">
                <i class="fas fa-user-slash"></i>
                <h3>Avoid Brokers</h3>
                <p>We directly connect you to verified owners to save brokerage</p>
            </a>
        </div>
        <div class="feature">
            <a href="free_listing.html" style="text-decoration: none; color: inherit;">
                <i class="fas fa-list-alt"></i>
                <h3>Free Listing</h3>
                <p>Easy listing process. Also using WhatsApp</p>
            </a>
        </div>
        <div class="feature">
            <a href="avoid_brokers.html" style="text-decoration: none; color: inherit;">
                <i class="fas fa-home"></i>
                <h3>Shortlist without Visit</h3>
                <p>Extensive Information makes it easy</p>
            </a>
        </div>
        <div class="feature">
            <a href="rental_agreement.php" style="text-decoration: none; color: inherit;">
                <i class="fas fa-file-contract"></i>
                <h3>Rental Agreement</h3>
                <p>Assistance in creating Rental agreement & Paper work</p>
            </a>
        </div>
    </div>
</div>
        
       <!-- Footer -->
       <?php include("include/footer.php");?>
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
    </div>
</div>

<!-- JavaScript Links --> 
<script src="js/jquery.min.js"></script> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/jquery.cookie.js"></script> 
<script src="js/custom.js"></script>

</body>
</html>
