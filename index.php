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

    <!-- Title -->
    <title>Homex - Real Estate Template</title>
</head>

<style>
/* Container for BHK sections */
.bhk-container {
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* 2 columns */
    gap: 30px;
    margin: 40px auto; /* Center the container */
    max-width: 1200px; /* Set maximum width for the container */
}

/* BHK section styling */
.bhk-section {
    border: 1px solid #ccc;
    padding: 20px;
    border-radius: 8px;
    text-align: center;
    background-color: #f8f9fa;
}

.bhk-heading {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 1.2em;
    font-weight: bold;
    margin-bottom: 15px;
}

.bhk-heading .vip-prize {
    font-size: 1em;
    color: #ff6f61;
}

/* Logo grid layout */
.logos-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
    margin-bottom: 10px;
}

.logos-grid img {
    width: 50px;
    height: 50px;
    object-fit: contain;
}

/* Caption below each logo */
.logo-caption {
    font-size: 0.75em;
    margin-top: 5px;
}

/* View details button */
.view-details-btn {
    display: block;
    width: 200px;
    margin: 0 auto;
    text-align: center;
    padding: 8px;
    background-color: #28a745;
    color: white;
    text-decoration: none;
    border-radius: 4px;
}

.view-details-btn:hover {
    background-color: #218838;
}
</style>

<body>

<!-- Page Wrapper -->
<div id="page-wrapper">
    <div class="row"> 
        <!-- Header start -->
        <?php include("include/header3.php");?>
        
        <!-- BHK Container -->
        <div class="container bhk-container">
            <!-- 1BHK Section -->
            <div class="bhk-section">
                <div class="bhk-heading">
                    <span>1BHK</span>
                    <span class="vip-prize">VIP Price:- 4,039rs</span>
                </div>
                <div class="logos-grid">
                    <div>
                        <img src="images/living-room.png" alt="Living Room">
                        <div class="logo-caption">Living Room</div>
                    </div>
                    <div>
                        <img src="images/bathroom.png" alt="Bathroom">
                        <div class="logo-caption">Bathroom (1)</div>
                    </div>
                    <div>
                        <img src="images/kitchen.png" alt="Kitchen">
                        <div class="logo-caption">Kitchen</div>
                    </div>
                    <div>
                        <img src="images/bedroom.png" alt="Bedroom">
                        <div class="logo-caption">Bedroom (1)</div>
                    </div>
                    <div>
                        <img src="images/decor.png" alt="Decor">
                        <div class="logo-caption">Decor items</div>
                    </div>
                    <div>
                        <img src="images/balcony.png" alt="Balcony">
                        <div class="logo-caption">Balcony</div>
                    </div>
                    <div>
                        <img src="images/windows.png" alt="Windows">
                        <div class="logo-caption">Windows</div>
                    </div>
                    <div>
                        <img src="images/sofa.png" alt="Sofa">
                        <div class="logo-caption">Sofa (All Types)</div>
                    </div>
                    <div>
                        <img src="images/other-furniture.png" alt="Furniture">
                        <div class="logo-caption">Furniture</div>
                    </div>
                </div>
                <a href="1bhk.html" class="view-details-btn">View Details</a>
            </div>
            
            <!-- 2BHK Section -->
            <div class="bhk-section">
                <div class="bhk-heading">
                    <span>2BHK</span>
                    <span class="vip-prize">VIP Price:- 4,679</span>
                </div>
                <div class="logos-grid">
                    <div>
                        <img src="images/living-room.png" alt="Living Room">
                        <div class="logo-caption">Living Room</div>
                    </div>
                    <div>
                        <img src="images/bathroom.png" alt="Bathroom">
                        <div class="logo-caption">Bathroom (2)</div>
                    </div>
                    <div>
                        <img src="images/kitchen.png" alt="Kitchen">
                        <div class="logo-caption">Kitchen</div>
                    </div>
                    <div>
                        <img src="images/bedroom.png" alt="Bedroom">
                        <div class="logo-caption">Bedroom(2)</div>
                    </div>
                    <div>
                        <img src="images/decor.png" alt="Decor">
                        <div class="logo-caption">Decor items</div>
                    </div>
                    <div>
                        <img src="images/balcony.png" alt="Balcony">
                        <div class="logo-caption">Balcony</div>
                    </div>
                    <div>
                        <img src="images/windows.png" alt="Windows">
                        <div class="logo-caption">Windows</div>
                    </div>
                    <div>
                        <img src="images/sofa.png" alt="Sofa">
                        <div class="logo-caption">Sofa (All Types)</div>
                    </div>
                    <div>
                        <img src="images/other-furniture.png" alt="Furniture">
                        <div class="logo-caption">Furniture</div>
                    </div>
                </div>
                <a href="2bhk.html" class="view-details-btn">View Details</a>
            </div>

            <!-- 3BHK Section -->
            <div class="bhk-section">
                <div class="bhk-heading">
                    <span>3BHK</span>
                    <span class="vip-prize">VIP Price:- 5,279</span>
                </div>
                <div class="logos-grid">
                    <div>
                        <img src="images/living-room.png" alt="Living Room">
                        <div class="logo-caption">Living Room</div>
                    </div>
                    <div>
                        <img src="images/bathroom.png" alt="Bathroom">
                        <div class="logo-caption">Bathroom (3)</div>
                    </div>
                    <div>
                        <img src="images/kitchen.png" alt="Kitchen">
                        <div class="logo-caption">Kitchen</div>
                    </div>
                    <div>
                        <img src="images/bedroom.png" alt="Bedroom">
                        <div class="logo-caption">Bedroom (3)</div>
                    </div>
                    <div>
                        <img src="images/decor.png" alt="Decor">
                        <div class="logo-caption">Decor items</div>
                    </div>
                    <div>
                        <img src="images/balcony.png" alt="Balcony">
                        <div class="logo-caption">Balcony</div>
                    </div>
                    <div>
                        <img src="images/windows.png" alt="Windows">
                        <div class="logo-caption">Windows</div>
                    </div>
                    <div>
                        <img src="images/sofa.png" alt="Sofa">
                        <div class="logo-caption">Sofa (All Types)</div>
                    </div>
                    <div>
                        <img src="images/other-furniture.png" alt="Furniture">
                        <div class="logo-caption">Furniture</div>
                    </div>
                </div>
                <a href="3bhk.html" class="view-details-btn">View Details</a>
            </div>

            <!-- 4BHK Section -->
            <div class="bhk-section">
                <div class="bhk-heading">
                    <span>4BHK</span>
                    <span class="vip-prize">VIP Price:- 5,979</span>
                </div>
                <div class="logos-grid">
                    <div>
                        <img src="images/living-room.png" alt="Living Room">
                        <div class="logo-caption">Living Room</div>
                    </div>
                    <div>
                        <img src="images/bathroom.png" alt="Bathroom">
                        <div class="logo-caption">Bathroom (4)</div>
                    </div>
                    <div>
                        <img src="images/kitchen.png" alt="Kitchen">
                        <div class="logo-caption">Kitchen</div>
                    </div>
                    <div>
                        <img src="images/bedroom.png" alt="Bedroom">
                        <div class="logo-caption">Bedroom (4)</div>
                    </div>
                    <div>
                        <img src="images/decor.png" alt="Decor">
                        <div class="logo-caption">Decor items</div>
                    </div>
                    <div>
                        <img src="images/balcony.png" alt="Balcony">
                        <div class="logo-caption">Balcony</div>
                    </div>
                    <div>
                        <img src="images/windows.png" alt="Windows">
                        <div class="logo-caption">Windows</div>
                    </div>
                    <div>
                        <img src="images/sofa.png" alt="Sofa">
                        <div class="logo-caption">Sofa (All Types)</div>
                    </div>
                    <div>
                        <img src="images/other-furniture.png" alt="Furniture">
                        <div class="logo-caption">Furniture</div>
                    </div>
                </div>
                <a href="4bhk.html" class="view-details-btn">View Details</a>
            </div>

            <!-- 4BHK Section -->
            <div class="bhk-section">
                <div class="bhk-heading">
                    <span>5BHK</span>
                    <span class="vip-prize">VIP Price:- 8,169</span>
                </div>
                <div class="logos-grid">
                    <div>
                        <img src="images/living-room.png" alt="Living Room">
                        <div class="logo-caption">Living Room</div>
                    </div>
                    <div>
                        <img src="images/bathroom.png" alt="Bathroom">
                        <div class="logo-caption">Bathroom (5)</div>
                    </div>
                    <div>
                        <img src="images/kitchen.png" alt="Kitchen">
                        <div class="logo-caption">Kitchen</div>
                    </div>
                    <div>
                        <img src="images/bedroom.png" alt="Bedroom">
                        <div class="logo-caption">Bedroom(5)</div>
                    </div>
                    <div>
                        <img src="images/decor.png" alt="Decor">
                        <div class="logo-caption">Decor items</div>
                    </div>
                    <div>
                        <img src="images/balcony.png" alt="Balcony">
                        <div class="logo-caption">Balcony</div>
                    </div>
                    <div>
                        <img src="images/windows.png" alt="Windows">
                        <div class="logo-caption">Windows</div>
                    </div>
                    <div>
                        <img src="images/sofa.png" alt="Sofa">
                        <div class="logo-caption">Sofa (All Types)</div>
                    </div>
                    <div>
                        <img src="images/other-furniture.png" alt="Furniture">
                        <div class="logo-caption">Furniture</div>
                    </div>
                </div>
                <a href="5bhk.html" class="view-details-btn">View Details</a>
            </div>
        </div>
    </div>
</div>



<!-- Required Javascript -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-slider.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/layerslider.utils.js"></script>
<script src="js/layerslider.kreaturamedia.jquery.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
