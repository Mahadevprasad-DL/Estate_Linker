<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Plan Comparison</title>
<style>
    * {
        box-sizing: border-box;
    }
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        padding: 20px;
        flex-direction: column;
    }
    .plan-container {
        max-width: 1200px;
        width: 100%;
        text-align: center;
        margin-bottom: 40px;
    }
    .header {
        font-size: 24px;
        margin-bottom: 10px;
    }
    .sub-header {
        font-size: 16px;
        color: #333;
        margin-bottom: 20px;
    }
    .contact {
        color: red;
        font-weight: bold;
    }
    .plans {
        display: flex;
        justify-content: space-between;
        gap: 20px;
        flex-wrap: wrap;
    }
    .plan {
        background-color: #ffffff;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        width: 30%;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: left;
    }
    .plan-header {
        background-color: #009688;
        color: white;
        font-size: 18px;
        font-weight: bold;
        padding: 10px;
        border-radius: 8px 8px 0 0;
        text-align: center;
    }
    .plan.red .plan-header {
        background-color: #e57373;
    }
    .plan-price {
        font-size: 24px;
        color: #009688;
        text-align: right;
        margin-top: 10px;
        font-weight: bold;
    }
    .plan.red .plan-price {
        color: #e57373;
    }
    .plan-price small {
        font-size: 14px;
        color: #666;
    }
    .plan-details {
        font-size: 14px;
        margin: 20px 0;
    }
    .plan-details ul {
        padding-left: 20px;
        list-style: disc;
    }
    .plan-details li {
        margin: 10px 0;
    }
    .plan-checklist {
        font-size: 14px;
    }
    .plan-checklist .check-item {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
    }
    .subscribe-btn {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #009688;
        color: white;
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        border-radius: 4px;
        text-decoration: none;
        margin-top: 20px;
    }
    .plan.red .subscribe-btn {
        background-color: #e57373;
    }
    .how-it-works {
        max-width: 1200px;
        width: 100%;
        text-align: center;
    }
    .how-it-works h2 {
        font-size: 24px;
        margin-bottom: 30px;
        color: #333;
    }
    .circle-container {
        display: flex;
        justify-content: space-around;
        gap: 20px;
        flex-wrap: wrap;
    }
    .circle {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        background-color: #ffffff;
        border: 2px solid #009688;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        flex-direction: column;
        padding: 10px;
    }
    .circle img {
        width: 60%;
        height: 60%;
        border-radius: 50%;
    }
    .circle-text {
        margin-top: 10px;
        text-align: center;
    }
    .circle-text h3 {
        font-size: 16px;
        color: #009688;
        margin: 10px 0 5px;
    }
    .circle-text p {
        font-size: 12px;
        color: #666;
    }
</style>
</head>
<body>

<div class="plan-container">
    <div class="header">Choose a Buyer Plan and <span style="color: red;">SAVE LAKHS</span> on brokerage.</div>
    <div class="sub-header">For assistance call us at : <span class="contact">+91-7619161661, 9448521094</span></div>

    <div class="plans">
        <!-- Power Plan -->
        <div class="plan">
            <div class="plan-header">Power Plan</div>
            <div class="plan-price">₹ 2,899 <small>+18% GST</small></div>
            <div class="plan-details">
                Choose your dream home from lots of options!
            </div>
            <div class="plan-checklist">
                <div class="check-item">
                    <span>Number of Contacts</span>
                    <span>upto 25</span>
                </div>
                <div class="check-item">
                    <span>Legal Assistance</span>
                    <span>&#10004;</span>
                </div>
                <div class="check-item">
                    <span>Loan Assistance</span>
                    <span>&#10004;</span>
                </div>
                <div class="check-item">
                    <span>On-Demand Support</span>
                    <span>&#10004;</span>
                </div>
            </div>
            <a href="#" class="subscribe-btn">Subscribe</a>
        </div>

        <!-- Property Expert Plan -->
        <div class="plan">
            <div class="plan-header">Property Expert Plan</div>
            <div class="plan-price">₹ 2,999 <small>+18% GST</small></div>
            <div class="plan-details">
                Get FREE Loan Assistance + 100% Cashback on plan amount* + Property Expert
            </div>
            <div class="plan-checklist">
                <strong>Dedicated Property Expert</strong>
                <ul>
                    <li>Negotiates to get you the BEST PRICE for the property</li>
                    <li>FREE Loan Assistance</li>
                    <li>Finds you the BEST PROPERTY and schedule property visits</li>
                    <li>FREE Interior Consultation and Design Inspection after you finalise your property</li>
                </ul>
                <div class="check-item">
                    <span>Number of Contacts</span>
                    <span>upto 50</span>
                </div>
                <div class="check-item">
                    <span>Legal Assistance</span>
                    <span>&#10004;</span>
                </div>
                <div class="check-item">
                    <span>FREE Loan Assistance</span>
                    <span>&#10004;</span>
                </div>
                <div class="check-item">
                    <span>FREE Interior Design Consultation</span>
                    <span>&#10004;</span>
                </div>
            </div>
            <a href="#" class="subscribe-btn">Subscribe</a>
        </div>

        <!-- Property Expert MoneyBack Plan -->
        <div class="plan red">
            <div class="plan-header">Property Expert MoneyBack Plan</div>
            <div class="plan-price">₹ 4,999 <small>+18% GST</small></div>
            <div class="plan-details">
                Get Guaranteed property or 100% Refund
            </div>
            <div class="plan-checklist">
                <strong>Dedicated Property Expert</strong>
                <ul>
                    <li>Negotiates to get you the BEST PRICE for the property</li>
                    <li>FREE Loan Assistance</li>
                    <li>Finds you the BEST PROPERTY and schedule property visits</li>
                    <li>FREE Interior Consultation and Design Inspection after you finalise your property</li>
                </ul>
                <div class="check-item">
                    <span>Number of Contacts</span>
                    <span>upto 50</span>
                </div>
                <div class="check-item">
                    <span>Legal Assistance</span>
                    <span>&#10004;</span>
                </div>
                <div class="check-item">
                    <span>FREE Loan Assistance</span>
                    <span>&#10004;</span>
                </div>
                <div class="check-item">
                    <span>FREE Interior Design Consultation</span>
                    <span>&#10004;</span>
                </div>
            </div>
            <a href="#" class="subscribe-btn">Subscribe</a>
        </div>
    </div>
</div>

<!-- How Assisted Plans Work Section -->
<div class="how-it-works">
    <h2>HOW ASSISTED PLANS WORK</h2>
    <div class="circle-container">
        <div class="circle">
            <div class="circle-text">
                <h3>LOOKING FOR A HOUSE?</h3>
                <p>just get one of our Assisted Plans and make your lives simpler..</p>
            </div>
        </div>
        <div class="circle">
            <div class="circle-text">
                <h3>HOUSE-HUNT ASSISTANT</h3>
                <p>Say HELLO to your</p>
            </div>
        </div>
        <div class="circle">
            <div class="circle-text">
               <h3>CITY LEVEL EXPERTISE</h3>
                <p> Who gather all your requirements and provides you with.</p>
            </div>
        </div>
        <div class="circle">
            <div class="circle-text">
               
                <p>Contacts Owners, Schedule property visits, and Negotiates Rent .</p>
            </div>
        </div>
        <div class="circle">
            <div class="circle-text">
                <h3>HOUSE FOR YOUR NEEDS</h3>
                <p>Helping you find best</p>
            </div>
        </div>
    </div>
</div>

</body>
</html>
