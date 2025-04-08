<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Rent Agreement</title>
    <style>
        /* Reset styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Main styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #1f1f5f;
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
            padding: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            max-width: 1000px;
            background-color: #fff;
            padding: 10px 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            color: #333;
        }

        .header-item {
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            color: #333;
        }

        .header-item img {
            width: 50px;
            height: 50px;
            margin-right: 8px;
        }

        .container {
            text-align: center;
            padding: 20px;
            width: 100%;
            max-width: 1000px;
        }

        .container h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            letter-spacing: 1px;
        }

        .container p {
            color: #b3b3b3;
            margin-bottom: 30px;
            font-size: 1rem;
            letter-spacing: 0.5px;
        }

        .renew-button {
            background-color: #3c3c8c;
            color: #ffffff;
            padding: 12px 24px;
            border-radius: 8px;
            display: inline-block;
            font-weight: bold;
            cursor: pointer;
            margin-bottom: 30px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .renew-button:hover {
            background-color: #5757c2;
        }

        .card-container {
            display: flex;
            gap: 30px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .card {
            background-color: #ffffff;
            color: #333;
            width: 280px;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            text-align: left;
            position: relative;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        .card img {
            width: 100%;
            height: auto;
            margin-bottom: 15px;
            border-radius: 8px;
            transition: transform 0.4s ease;
        }

        .card:hover img {
            transform: scale(1.05);
        }

        .card h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
            color: #333;
        }

        .discount {
            position: absolute;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 0.9rem;
            color: #00b300;
            background-color: #e0f7e9;
            padding: 8px 12px;
            border-radius: 5px;
            font-weight: bold;
            text-align: center;
            animation: fadeInDown 0.6s ease forwards;
        }

        /* Add-ons section */
        .con {
            width: 100%;
            max-width: 1000px;
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            color: #333;
        }

        .con h2 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Adjust layout for cards in the add-ons section */
        .card-con {
            display: flex; /* Change to flex for horizontal layout */
            justify-content: center;
            gap: 30px; /* Space between cards */
            position: relative; /* Position for the line */
        }

        .icon-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
        }

        .icon-container img {
            width: 120px;
            height: 120px;
        }

        /* Line connecting the icons */
        .line {
            position: absolute;
            top: 25px; /* Adjust to align with icons */
            left: 50%;
            width: 100%;
            height: 2px;
            background-color: #333; /* Line color */
            transform: translateX(-50%);
            z-index: -1; /* Behind the icons */
            animation: drawLine 1s forwards; /* Animation */
        }
        .workcontainer {
  display: flex;
  justify-content: space-around;
  align-items: center;
  background-color: #f5f5f5;
  padding: 20px;
  flex-wrap: wrap;
  border: 2px solid #ccc;
  border-radius: 8px;
  width: 80%;
  margin: 0 auto;
  margin-top: 50px; 
  gap: 20px;
  padding: 20px;
  margin-bottom: 80px;
}
.image-box {
    background-color: #f8f8f8;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 300px;
    text-align: center;
    padding: 20px;
    transition: transform 0.3s;
}

.image-box:hover {
    transform: scale(1.05);
}
.image-box h2 {
    font-size: 1.5rem;
    color: #0077b6;
    margin-bottom: 10px;
}
.image-box img {
    width: 100%;
    border-radius: 8px;
    margin-bottom: 15px;
}

/* Paragraph within each box */
.image-box p {
    font-size: 1rem;
    color: #555;
    line-height: 1.5;
}
.word {
    text-align: center;
    font-size: 2rem;
    color: #333;
    font-weight: bold;
    margin-bottom: 20px;
}
.workcontainer h3 {
    font-size: 24px;
    font-weight: bold;
    color: #333;
    margin-bottom: 20px;
    text-align: center;
}

.image-box img {
  width: 100%;
  height: auto;
  border-radius: 4px;
}

.image-box h2 {
  font-size: 18px;
  margin: 10px 0 5px;
  color: #333;
}

.image-box p {
  font-size: 14px;
  color: #666;
}
.agreement-comparison {
            background-color: #0e1a36;
            color: #ddd;
            padding: 40px;
            border-radius: 10px;
            width: 80%;
            margin: auto;
            text-align: center;
        }

        /* Title style */
        .comparison-title {
            font-size: 1.8rem;
            font-weight: bold;
            color: #fff;
            margin-bottom: 30px;
        }

        /* Flexbox container for comparison items */
        .options-row {
            display: flex;
            justify-content: space-around;
            gap: 20px;
            margin-bottom: 20px;
        }

        /* Each agreement option style */
        .option-box {
            background-color: #1b2b4a;
            border-radius: 10px;
            padding: 20px;
            width: 30%;
            text-align: left;
            position: relative;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        /* Feature list and title style */
        .option-title {
            font-size: 1.2rem;
            font-weight: bold;
            color: #bbb;
            margin-bottom: 15px;
        }

        .features-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .features-list li {
            color: #8dd677;
            margin: 8px 0;
        }

        .features-list li::before {
            content: "✔️";
            margin-right: 8px;
        }

        /* Special styling for the popular option */
        .popular-badge {
            position: absolute;
            top: -10px;
            left: 10px;
            background-color: #49a942;
            color: #fff;
            padding: 5px 10px;
            font-size: 0.9rem;
            font-weight: bold;
            border-radius: 5px;
        }

        /* Buttons style */
        .button-group {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .btn-preview, .btn-proceed {
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1rem;
            border: none;
            cursor: pointer;
        }

        .btn-preview {
            background-color: #1c2e4a;
            color: #ddd;
        }

        .btn-proceed {
            background-color: #4e70d8;
            color: #fff;
        }

        .btn-proceed i {
            margin-left: 5px;
        }

          /* Main wrapper style */
          .coupon-wrapper {
            background-color: #f0f0f5;
            padding: 30px;
            border-radius: 10px;
            width: 80%;
            margin: 30px auto;
            text-align: left;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }

        /* Title style */
        .coupon-heading {
            font-size: 1.8rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }

        /* Subtitle style */
        .coupon-subtitle {
            font-size: 1rem;
            color: #666;
            margin-bottom: 20px;
        }

        /* Flexbox for coupon cards */
        .coupon-row {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        /* Card style */
        .card-box {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            width: 30%;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: relative;
        }

        /* Logo style */
        .card-logo {
            display: flex;
            justify-content: center;
            margin-bottom: 15px;
        }

        .card-logo img {
            width: 40px;
            height: 40px;
        }

        /* Discount title style */
        .discount-title {
            font-size: 1.2rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }

        /* Description style */
        .discount-description {
            font-size: 0.9rem;
            color: #666;
        }
        .promise-section {
            background-color: #f5f5fa;
            padding: 30px;
            border-radius: 10px;
            width: 80%;
            margin: 30px auto;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Left content styling */
        .promise-details {
            width: 60%;
        }

        /* Title style */
        .promise-title {
            font-size: 1.8rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        /* Each promise item style */
        .promise-item {
            display: flex;
            align-items: start;
            margin-bottom: 15px;
        }

        /* Icon style */
        .icon-wrapper {
            font-size: 1.5rem;
            margin-right: 15px;
            color: #6c63ff;
            width: 30px;
        }

        /* Promise item title style */
        .promise-text-title {
            font-size: 1.1rem;
            font-weight: bold;
            color: #3a3a99;
            margin: 0;
        }

        /* Promise description style */
        .promise-description {
            font-size: 0.9rem;
            color: #666;
            margin: 3px 0 0 0;
        }

        /* Right image styling */
        .promise-image {
            width: 35%;
            text-align: center;
            position: relative;
        }

        .promise-image img {
            width: 100%;
            border-radius: 50%;
        }

        /* Background shapes */
        .background-shapes {
            position: absolute;
            top: 10%;
            left: 10%;
            font-size: 3rem;
            color: #d9d4ff;
            z-index: -1;
        }

        /* Fade-in animation */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Draw line animation */
        @keyframes drawLine {
            from {
                width: 0;
            }
            to {
                width: 100%;
            }
        }


        .service-container {
    text-align: center;
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 800px;
    margin: 20px;
}

.service-container h2 {
    font-size: 24px;
    color: #333;
    margin-bottom: 20px;
}

.service-list {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.service-item {
    width: 150px;
    text-align: center;
    margin: 10px;
    cursor: pointer;
    transition: transform 0.3s ease;
}

.service-item img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    border: 2px solid #ddd;
    padding: 5px;
    transition: box-shadow 0.3s ease;
}

.service-item p {
    font-size: 14px;
    margin-top: 10px;
    color: #555;
}

.service-item:hover {
    transform: scale(1.1);
}

.service-item:hover img {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

/* Different styles for each service item (optional) */
.tenant-verification img {
    border-color: #3498db;
}

.khata-transfer img {
    border-color: #2ecc71;
}

.property-legal img {
    border-color: #e74c3c;
}

.tax-name-change img {
    border-color: #f1c40f;
}
    </style>
</head>
<body>

<div class="container">
    <h1>Online Rent Agreement</h1>
    <p>Now available in 150+ cities in India ✨</p>
    <a href="#" class="renew-button">Renew Your Agreement ➔</a>

    <h2>SELECT A RENT AGREEMENT</h2>
    <div class="card-container">
        <div class="card">
            <div class="discount">Upto ₹100 off</div>
            <a href="form.html">
            <img src="images/rental-service.png" alt="Agreement with Police Intimation" >
             </a>
            <h3>Rental Agreement + Police Intimation</h3>
        </div>

        <div class="card">
            <div class="discount">Upto ₹100 off</div>
            <a href="form.html">
            <img src="images/touch-id.png" alt="Agreement with Biometric">
            </a>
            <h3>Rental Agreement with Biometric</h3>
        </div>

        <div class="card">
            <div class="discount">Upto ₹100 off</div>
            <a href="form.html">
            <img src="images/legal.png" alt="Agreement with E-Stamp & Notary">
             </a>
            <h3>Rental Agreement with E-Stamp & Notary</h3>
        </div>
    </div>
</div>

<div class="header">
    <div class="header-item">
        <img src="images/validation.png" alt="Govt Registered">
        Maharashtra Govt. Registered
    </div>
    <div class="header-item">
        <img src="images/register.png" alt="Legally Valid">
        Legally Valid Agreement
    </div>
    <div class="header-item">
        <img src="images/share.png" alt="Share Form">
        Share form with tenant/Owner
    </div>
</div>

<div class="con">
    <h2>Available Add-ons</h2>
    <div class="card-con">
        <div class="line"></div> <!-- Line element -->
        <div class="icon-container">
            <img src="images/extraVisit.webp" alt="Extra Visit Icon">
            <h3>Extra Visit</h3>
            <p>Book additional biometric appointments in the future.</p>
        </div>

        <div class="icon-container">
            <img src="https://img.icons8.com/ios-filled/50/4a90e2/headset.png" alt="Tech Assistance Icon">
            <h3>Tech Assistance</h3>
            <p>For distant registration via a biometric device.</p>
        </div>

        <div class="icon-container">
            <img src="images/legalIDVerificationAddon.webp" alt="Tenant Verification Icon">
            <h3>Tenant Verification</h3>
            <p>Verify your tenant with the help of our services.</p>
        </div>

        <div class="icon-container">
            <img src="images/legalDeliveryAddon.webp" alt="Legal Consultation Icon">
            <h3>Standard Delivery</h3>
            <p>Hard copy delivery of your agreement</p>
        </div>
    </div>
</div>
 

<div class="workcontainer">
<h3 class="word">How it works!</h3>
    <div class="image-box">
        <img src="images/giri1.jpg" alt="Image 1">
        <h2>Fill Details Online</h2>
        <p>Customise our template agreement as per your requirement and submit the draft.</p>
    </div>
    <div class="image-box">
        <img src="images/giri2.jpg" alt="Image 2">
        <h2>Schedule Biometric Appointment</h2>
        <p>We visit you at your convenience to capture biometrics and execute the agreement as per government process.</p>
    </div>
    <div class="image-box">
        <img src="images/giri3.jpg" alt="Image 3">
        <h2>Agreement is Registered!</h2>
        <p>We get your agreement registered and send a soft copy to you within 3-4 days.</p>
    </div>
</div>

<div class="agreement-comparison">
    <h2 class="comparison-title">Select to Compare Agreement</h2>
    
    <div class="options-row">
        <!-- Option 1 -->
        <div class="option-box">
            <h3 class="option-title">Rental Agreement + Police Intimation</h3>
            <ul class="features-list">
                <li>Agreement registered on Maharashtra state government portal</li>
                <li>Police verification included, Save ₹300 with the Combo!</li>
                <li>Free visit for biometric</li>
            </ul>
        </div>
        
        <!-- Option 2 (Popular) -->
        <div class="option-box">
            <div class="popular-badge">POPULAR</div>
            <h3 class="option-title">Rental Agreement with Biometric</h3>
            <ul class="features-list">
                <li>Agreement registered on Maharashtra state government portal</li>
                <li>Doorstep Biometric KYC</li>
                <li>Free visit for biometric</li>
            </ul>
        </div>
        
        <!-- Option 3 -->
        <div class="option-box">
            <h3 class="option-title">Rental Agreement with E-Stamp & Notary</h3>
            <ul class="features-list">
                <li>Agreement printed with legal E-Stamp</li>
                <li>Hardcopy Delivery</li>
                <li>Legally valid in court of law</li>
            </ul>
        </div>
    </div>
    
    <div class="button-group">
        <button class="btn-preview">Preview</button>
        <button class="btn-proceed">Proceed <i class="fas fa-arrow-right"></i></button>
    </div>
</div>

<div class="coupon-wrapper">
    <h2 class="coupon-heading">Discount Coupons</h2>
    <p class="coupon-subtitle">Apply Coupon at the summary Screen</p>
    
    <div class="coupon-row">
        <!-- Card 1 -->
        <div class="card-box">
            <div class="card-logo">
                <img src="images/nb.svg" alt="NB Logo">
            </div>
            <p class="discount-title">10% NB cash discount</p>
            <p class="discount-description">Upto ₹250</p>
        </div>
        
        <!-- Card 2 -->
        <div class="card-box">
            <div class="card-logo">
                <img src="images/hdfc.png" alt="HDFC Logo">
            </div>
            <p class="discount-title">5% HDFC bank</p>
            <p class="discount-description">Upto ₹1500</p>
        </div>
        
        <!-- Card 3 -->
        <div class="card-box">
            <div class="card-logo">
                <img src="images/amazon.png" alt="Amazon Logo">
            </div>
            <p class="discount-title">₹100 Amazon pay discount</p>
            <p class="discount-description">On spend of ₹2000</p>
        </div>
    </div>
</div>

<div class="promise-section">
    <!-- Left Side - Promise Details -->
    <div class="promise-details">
        <h2 class="promise-title">FlatValue Services and Rentals Promise</h2>
        
        <div class="promise-item">
            <div class="icon-wrapper">💸</div>
            <div>
                <p class="promise-text-title">Lowest Prices</p>
                <p class="promise-description">Best-in-class legal documentation at attractive prices.</p>
            </div>
        </div>

        <div class="promise-item">
            <div class="icon-wrapper">⚖️</div>
            <div>
                <p class="promise-text-title">Legally Valid</p>
                <p class="promise-description">Make genuine documents which are legally valid in court of law.</p>
            </div>
        </div>

        <div class="promise-item">
            <div class="icon-wrapper">❤️</div>
            <div>
                <p class="promise-text-title">100% Convenience. 0% Stress.</p>
                <p class="promise-description">Get delighted with super fast documentation at the convenience of your home.</p>
            </div>
        </div>
    </div>

    <!-- Right Side - Image with Background Shapes -->
    <div class="promise-image">
        <div class="background-shapes">⬤ ◯ ◼</div>
        <img src="images/team.webp" alt="Team Image">
    </div>
</div>

<div class="service-container">
        <h2>Other legal services that we offer</h2>
        <div class="service-list">
            <div class="service-item tenant-verification" onclick="window.location.href='tenant_verification.html'">
                <img src="images/backgroundVerification.webp" alt="Tenant verification">
                <p>Tenant verification</p>
            </div>
            <div class="service-item khata-transfer" onclick="window.location.href='khata_transfer.html'">
                <img src="images/khataTransfer.webp" alt="Khata transfer">
                <p>Khata transfer</p>
            </div>
            <div class="service-item property-legal" onclick="window.location.href='property_legal.html'">
                <img src="images/propertyLegal.webp" alt="Property legal services">
                <p>Property legal services</p>
            </div>
            <div class="service-item tax-name-change" onclick="window.location.href='tax_name_change.html'">
                <img src="images/notary.webp" alt="Property Tax Name Change">
                <p>Property Tax Name Change</p>
            </div>
        </div>
    </div>


</body>
</html>
