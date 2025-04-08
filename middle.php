<?php 
session_start();
include("config.php");

$error = "";
$msg = "";

// Check if login form was submitted
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if (!empty($email) && !empty($pass)) {
        // Query to check if user exists
        $sql = "SELECT * FROM user WHERE uemail='$email' AND upass='$pass'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);
        
        if ($row) {
            // Storing user information in the session
            $_SESSION['uid'] = $row['uid'];
            $_SESSION['uemail'] = $email;

            // Redirecting to middle.php after successful login
            header("Location: middle.php");
            exit(); // Ensure redirection
        } else {
            $error = "<p class='alert alert-warning'>Login Not Successful</p>";
        }
    } else {
        $error = "<p class='alert alert-warning'>Please Fill All Fields</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Homex - Real Estate Template</title>

    <!-- Meta Tags -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/color.css">

    <!-- Custom CSS for buttons -->
    <style>
        .btn-buyer,
        .btn-home,
        .btn-seller {
            padding: 15px 30px;
            font-size: 18px;
            color: #fff;
            background-color: #28a745;
            border: none;
            border-radius: 5px;
            margin: 10px;
            text-transform: uppercase;
            transition: background-color 0.3s ease;
        }

        .btn-buyer:hover,
        .btn-seller:hover {
            background-color: #218838;
        }

        .btn-seller {
            background-color: #17a2b8;
        }

        .btn-seller:hover {
            background-color: #138496;
        }

        /* Custom styles */
        .feature-box {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            margin: 10px;
            cursor: pointer;
        }

        .feature-box:hover {
            background-color: #28a745;
            color: #fff;
            transform: scale(1.05);
        }

        .circle {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #f8f9fa;
            border: 4px solid #28a745;
            margin: 0 auto 10px;
        }

        .line {
            width: 100%;
            height: 4px;
            background-color: #28a745;
        }
        .review-section {
            background-color: #f9f9f9;
            padding: 40px 0;
        }
        .review-card {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            text-align: center;
            margin: 10px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .review-card img {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            margin-bottom: 10px;
        }
        .star-rating {
            color: #FFD700;
        }
        .member-name {
            font-weight: 600;
            font-size: 1.9em;
            color: #333;
        }
        .nickname{
            font-weight: 400;
            font-size: 1.9em;
            color: #333;
        }
        .star {
            font-size: 80px;
            color: #FFD700;
        }
        .review-text {
            font-size: 25px;
            color: #555;
        }
    </style>
</head>

<body>
    <div id="page-wrapper">
        <div class="row">
            <!-- Header start -->
            <?php include("include/header2.php"); ?>
            <!-- Header end -->

            <!-- Banner -->
            <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Choose Your Role</b></h2>
                        </div>
                        <div class="col-md-6 text-center">
                            <nav aria-label="breadcrumb" class="float-left float-md-right">
                                <ol class="breadcrumb bg-transparent m-0 p-0">
                                    <button class="btn btn-buyer" onclick="window.location.href='index.php';">Buyer</button>
                                    <button class="btn btn-seller" onclick="window.location.href='submitproperty.php';">Seller</button>
                                    <button class="btn btn-buyer" onclick="window.location.href='ser.html';">Services</button>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner End -->

            <!-- Why Choose Us Section -->
            <div class="container my-5 large-bottom-gap">
                <h2 class="text-center mb-4"><b>Why Choose Us</b></h2>
                <div class="row justify-content-center">
                    <div class="col-md-2 text-center feature-box">
                        <div class="feature-content">
                            <img src="images/logo1.png" alt="Logo 1" class="feature-logo">
                            <h5>Dedicated Project Team</h5>
                            <p>Proficient team of professionals, skilled designers, and experienced project managers.</p>
                        </div>
                    </div>
                    <div class="col-md-2 text-center feature-box">
                        <div class="feature-content">
                            <img src="images/logo2.png" alt="Logo 2" class="feature-logo">
                            <h5>End to End Execution</h5>
                            <p>Turning your dream home interior into reality from design to installation and finishing touches.</p>
                        </div>
                    </div>
                    <div class="col-md-2 text-center feature-box">
                        <div class="feature-content">
                            <img src="images/logo3.png" alt="Logo 3" class="feature-logo">
                            <h5>Personalized Designs</h5>
                            <p>Personalized interior design that truly fits your needs and complements your lifestyle.</p>
                        </div>
                    </div>
                    <div class="col-md-2 text-center feature-box">
                        <div class="feature-content">
                            <img src="images/logo4.png" alt="Logo 4" class="feature-logo">
                            <h5>Value for Money</h5>
                            <p>We provide Services at competitive prices with the highest standards of Quality.</p>
                        </div>
                    </div>
                    <div class="col-md-2 text-center feature-box">
                        <div class="feature-content">
                            <img src="images/logo5.png" alt="Logo 5" class="feature-logo">
                            <h5>Quality Assurance</h5>
                            <p>Maintaining unwavering high standards throughout with 250++ quality checks.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- How It Works Section -->
            <div class="container my-5">
                <h2 class="text-center mb-4"><b>How It Works</b></h2>
                <div class="row justify-content-center align-items-center">
                    <!-- Circle 1 -->
                    <div class="col-md-2 text-center">
                        <div class="circle d-flex justify-content-center align-items-center">
                            <img src="images/logo1.png" alt="Logo 1" class="circle-logo">
                        </div>
                        <h5 class="mt-2">Free Design Consultation</h5>
                        <p>Explore the latest design trends with our designer.</p>
                    </div>

                    <!-- Line linking circles -->
                    <div class="col-md-1 text-center">
                        <div class="line"></div>
                    </div>

                    <!-- Circle 2 -->
                    <div class="col-md-2 text-center">
                        <div class="circle d-flex justify-content-center align-items-center">
                            <img src="images/logo2.png" alt="Logo 2" class="circle-logo">
                        </div>
                        <h5 class="mt-2">Dream Home Design</h5>
                        <p>Personalized Detailed design Based on your need and lifestyle</p>
                    </div>

                    <!-- Line linking circles -->
                    <div class="col-md-1 text-center">
                        <div class="line"></div>
                    </div>

                    <!-- Circle 3 -->
                    <div class="col-md-2 text-center">
                        <div class="circle d-flex justify-content-center align-items-center">
                            <img src="images/logo3.png" alt="Logo 3" class="circle-logo">
                        </div>
                        <h5 class="mt-2">Booking Confirmation</h5>
                        <p>Confirm the dream home design by Paying Token.</p>
                    </div>

                    <!-- Line linking circles -->
                    <div class="col-md-1 text-center">
                        <div class="line"></div>
                    </div>

                    <!-- Circle 4 -->
                    <div class="col-md-2 text-center">
                        <div class="circle d-flex justify-content-center align-items-center">
                            <img src="images/logo4.png" alt="Logo 4" class="circle-logo">
                        </div>
                        <h5 class="mt-2">Onsite Services And Installation</h5>
                        <p>On-site Service works and installation of Modular units.</p>
                    </div>
                </div>
            </div>
            <!-- How It Works Section End -->

            <div class="container">
            <h2 class="text-center mb-4"><b>Reviews on FlatValue Services and Rentals</b></h2>
        <div class="review-card">
            <img src="images/me1.jpg" alt="John Doe" class="member-image">
            <div class="review-header">
                <div class="member-name">Kiran Kumar</div>
                <div class="nickname">Mysuru</div>
                <div class="star-rating">★★★★☆</div>
            </div>
            <div class="review-text">
                "The real estate company helped me find the perfect home in the city. Their services were outstanding!"
            </div>
        </div>

        <div class="review-card">
            <img src="images/me2.jpg" alt="Jane Smith" class="member-image">
            <div class="review-header">
                <div class="member-name">Amar</div>
                <div class="nickname">Koramangala, Bangalore</div>
                <div class="star-rating">★★★★★</div>
            </div>
            <div class="review-text">
                "I was amazed by how easy it was to find a room with the help of this real estate service. Highly recommended!"
            </div>
        </div>

        <div class="review-card">
            <img src="images/me33.jpg" alt="Michael Johnson" class="member-image">
            <div class="review-header">
                <div class="member-name">Madhu Shree</div>
                <div class="nickname">Hebbal, Bangalore</div>
                <div class="star-rating">★★★★☆</div>
            </div>
            <div class="review-text">
                "Finding a home in the city was stress-free thanks to their fantastic team. I’m so happy with my purchase!"
            </div>
        </div>

        <div class="review-card">
            <img src="images/me4.jpg" alt="Emily Davis" class="member-image">
            <div class="review-header">
                <div class="member-name">Deepak Rajan</div>
                <div class="nickname">Perungudi, Chennai</div>
                <div class="star-rating">★★★★★</div>
            </div>
            <div class="review-text">
                "This service exceeded my expectations. They guided me every step of the way. I love my new apartment!"
            </div>
        </div>

        <div class="review-card">
            <img src="https://randomuser.me/api/portraits/men/24.jpg" alt="Chris Wilson" class="member-image">
            <div class="review-header">
                <div class="member-name">Lakshmi Narayanan</div>
                <div class="nickname">Alwarpet, Chennai</div>
                <div class="star-rating">★★★★☆</div>
            </div>
            <div class="review-text">
                "I couldn't have asked for better support while searching for a home. These guys are the best!"
            </div>
        </div>

        <div class="review-card">
            <img src="https://randomuser.me/api/portraits/women/54.jpg" alt="Laura Brown" class="member-image">
            <div class="review-header">
                <div class="member-name">Divya Chandrasekar</div>
                <div class="nickname">Gokulam, Mysuru</div>
                <div class="star-rating">★★★★★</div>
            </div>
            <div class="review-text">
                "The team made buying my dream home an enjoyable experience. I highly recommend their services."
            </div>
        </div>
    </div>

            
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
