<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Locations in Bangalore</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #e9ecef;
            color: #333;
            text-align: center;
        }
        h1, h2 {
            color: #007BFF;
        }
        .grid-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 0 auto;
            padding: 0 20px;
            max-width: 1200px;
        }
        .area-card {
            border: 2px solid #007BFF;
            border-radius: 10px;
            overflow: hidden;
            background-color: #fff;
            transition: transform 0.3s, box-shadow 0.3s;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .area-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
        .area-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }
        .area-name {
            padding: 15px;
            font-size: 1.8em;
            font-weight: bold;
            background-color: #f0f8ff;
        }
        .price-details {
            padding: 15px;
            background-color: #f9f9f9;
        }
        .price-details p {
            margin: 5px 0;
        }
        .confirm-btn {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            margin-top: 10px;
            width: 80%;
        }
        .confirm-btn:hover {
            background-color: #218838;
        }
        @media (max-width: 768px) {
            .grid-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 576px) {
            .grid-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

<h1>Explore Home Locations in Bangalore</h1>
<h2>Bangalore</h2>
<div class="grid-container">
    <div class="area-card">
        <img src="images/kor.jpg" alt="Koramangala">
        <div class="area-name">Koramangala</div>
        <div class="price-details">
            <p>1BHK: ₹60 Lakhs</p>
            <p>2BHK: ₹1.2 Crores</p>
            <p>3BHK: ₹2 Crores</p>
            <button class="confirm-btn" onclick="window.location.href='otp.html'">Confirm Booking</button>
        </div>
    </div>
    <div class="area-card">
        <img src="images/whi.jpg" alt="Whitefield">
        <div class="area-name">Whitefield</div>
        <div class="price-details">
            <p>1BHK: ₹50 Lakhs</p>
            <p>2BHK: ₹1 Crore</p>
            <p>3BHK: ₹1.8 Crores</p>
            <button class="confirm-btn" onclick="window.location.href='otp.html'">Confirm Booking</button>
        </div>
    </div>
    <div class="area-card">
        <img src="images/in.jpg" alt="Indiranagar">
        <div class="area-name">Indiranagar</div>
        <div class="price-details">
            <p>1BHK: ₹70 Lakhs</p>
            <p>2BHK: ₹1.3 Crores</p>
            <p>3BHK: ₹2.5 Crores</p>
            <button class="confirm-btn" onclick="window.location.href='otp.html'">Confirm Booking</button>
        </div>
    </div>
    <div class="area-card">
        <img src="images/mart.jpg" alt="Marathahalli">
        <div class="area-name">Marathahalli</div>
        <div class="price-details">
            <p>1BHK: ₹45 Lakhs</p>
            <p>2BHK: ₹90 Lakhs</p>
            <p>3BHK: ₹1.6 Crores</p>
            <button class="confirm-btn" onclick="window.location.href='otp.html'">Confirm Booking</button>
        </div>
    </div>
    <div class="area-card">
        <img src="images/hsrjpg.jpg" alt="HSR Layout">
        <div class="area-name">HSR Layout</div>
        <div class="price-details">
            <p>1BHK: ₹55 Lakhs</p>
            <p>2BHK: ₹1.1 Crores</p>
            <p>3BHK: ₹2 Crores</p>
            <button class="confirm-btn" onclick="window.location.href='otp.html'">Confirm Booking</button>
        </div>
    </div>
    <div class="area-card">
        <img src="images/bana.jpg" alt="Banashankari">
        <div class="area-name">Banashankari</div>
        <div class="price-details">
            <p>1BHK: ₹40 Lakhs</p>
            <p>2BHK: ₹85 Lakhs</p>
            <p>3BHK: ₹1.5 Crores</p>
            <button class="confirm-btn" onclick="window.location.href='otp.html'">Confirm Booking</button>
        </div>
    </div>
</div>

<!-- Link for more information -->
<a href="https://www.99acres.com/single-rooms-for-rent-in-bangalore-ffid" class="info-link" target="_blank">You want more information? Click here</a>

</body>
</html>
