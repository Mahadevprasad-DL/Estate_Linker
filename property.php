<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
///code
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

    <!-- CSS Links -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/layerslider.css">
    <link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Title -->
    <title>Homex - Real Estate Template</title>

    <style>
        .calculator-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50vh; /* Use full viewport height */
            flex-direction: column; /* Ensure image and calculator are vertically aligned */
        }

        .calculator-widget {
            width: 100%; /* Ensure the widget takes full width */
            max-width: 400px; /* Set a max width for better appearance */
        }

        .full-row {
            background-image: url('images/cal.jpg');
            background-repeat: no-repeat; /* Do not repeat the background image */
            background-size: cover; /* Cover the entire area with the background image */
            background-position: center; /* Center the background image */
        }

    </style>
</head>
<body>

<div id="page-wrapper">
    <div class="row"> 
        <!-- Header start  -->
        <?php include("include/header3.php");?>
        <!-- Header end  -->
        
        <!-- Banner -->
        <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Property Grid</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Property Grid</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Property Grid -->
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <?php 
                            $query = mysqli_query($con, "SELECT property.*, user.uname, user.utype, user.uimage FROM property JOIN user ON property.uid = user.uid");
                            while ($row = mysqli_fetch_array($query)) {
                                $imagePath = "admin/property/" . $row['18']; // Assuming 18 is the index for the image filename
                                if (file_exists($imagePath)) { // Check if the image exists
                            ?>
                            <?php 
                                } else {
                                    echo "<p>Image not found for property ID: " . $row['0'] . "</p>";
                                }
                            } 
                            ?>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="calculator-container">
                            <div class="sidebar-widget calculator-widget">
                                <h4 class="double-down-line-left text-secondary position-relative pb-4 my-4">Instalment Calculator</h4>
                                <form class="d-inline-block w-100" action="calc.php" method="post">
                                    <label class="sr-only">Property Amount</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">$</div>
                                        </div>
                                        <input type="text" class="form-control" name="amount" placeholder="Property Price">
                                    </div>
                                    <label class="sr-only">Month</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                        </div>
                                        <input type="text" class="form-control" name="month" placeholder="Duration Year">
                                    </div>
                                    <label class="sr-only">Interest Rate</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">%</div>
                                        </div>
                                        <input type="text" class="form-control" name="interest" placeholder="Interest Rate">
                                    </div>
                                    <button type="submit" value="submit" name="calc" class="btn btn-primary mt-4">Calculate Instalment</button>
                                </form>
                            </div>

                        
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 

<!-- Javascript --> 
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/bootstrap-slider.js"></script>
<script src="js/layerslider/layerslider.transitions.js"></script>
<script src="js/layerslider/layerslider.kreaturamedia.jquery.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
