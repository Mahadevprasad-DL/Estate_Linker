<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pricing Plans</title>
<style>
   body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-color: #f7f8fa;
    }
    .pricing-table {
        width: 90%;
        max-width: 1200px;
        text-align: center;
        margin-bottom: 20px; /* Added margin for spacing */
    }
    .pricing-header {
        font-size: 24px;
        margin-bottom: 10px;
    }
    .plans {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 10px;
    }
    .plan {
        background-color: #ffffff;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 20px;
    }
    .plan h3 {
        font-size: 20px;
        margin-bottom: 10px;
    }
    .price {
        font-size: 28px;
        color: #2196F3;
    }
    .subscribe-button {
        display: inline-block;
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        margin-top: 15px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
    }
    .subscribe-button:hover {
        background-color: #45a049;
    }
    .features {
        text-align: left;
        margin-top: 20px;
    }
    .features li {
        list-style: none;
        padding: 5px 0;
        font-size: 14px;
    }
    .features li.check::before {
        content: "✔";
        color: #4CAF50;
        margin-right: 5px;
    }
    .features li.uncheck::before {
        content: "✖";
        color: #f44336;
        margin-right: 5px;
    }

    .pricing-table-container {
        width: 90%;
        max-width: 1200px;
        text-align: center;
        overflow-x: auto;
    }
    .pricing-table {
        width: 100%;
        border-collapse: collapse;
    }
    .pricing-table th, .pricing-table td {
        padding: 15px;
        border: 1px solid #ddd;
    }
    .pricing-header {
        background-color: #f0f8ff;
        font-weight: bold;
    }
    .feature-header {
        text-align: left;
        background-color: #f7f7f7;
        font-weight: bold;
    }
    .pricing-plan-title {
        background-color: #e0f7fa;
        font-size: 18px;
        font-weight: bold;
    }
    .pricing-plan-price {
        color: #00796b;
        font-size: 24px;
        font-weight: bold;
    }
    .check-mark {
        color: #388e3c;
        font-size: 18px;
    }
    .cross-mark {
        color: #d32f2f;
        font-size: 18px;
    }
    .plan-validity {
        font-weight: bold;
        color: #333;
    }
    .plans-container {
        width: 90%;
        max-width: 1200px;
        margin-top: 50px;
        text-align: center;
    }
    .plans-title {
        font-size: 24px;
        color: #333;
        font-weight: bold;
        margin-bottom: 30px;
    }
    .plan-step {
        display: flex;
        align-items: center;
        justify-content: center; /* Centering the content */
        padding: 20px 0;
        border-top: 1px dashed #e57373;
    }
    .plan-step:first-of-type {
        border-top: none;
    }
    .plan-image {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background-color: #e0f7fa;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .plan-content {
        width: 60%;
 text-align: center; /* Centering the content */
        color: #333;
        display: flex; /* Using flexbox to center vertically and horizontally */
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    .plan-heading {
        font-size: 18px;
        font-weight: bold;
        color: #e57373;
        margin-bottom: 8px;
    }
    .plan-description {
        font-size: 14px;
        color: #666;
    }
</style>
</head>
<body>

<div class="pricing-table">
    <div class="pricing-header">Plans and Pricing</div>
    <div class="plans">
        
        <!-- Relax Plan -->
        <div class="plan">
            <h3>Relax Plan</h3>
            <p class="price">₹7,499 <span style="font-size: 14px;">+18% GST</span></p>
            <a href="#" class="subscribe-button">Subscribe</a>
            <ul class="features">
                <li class="check">Property promotion on site</li>
                <li class="check">Personal Field Assistant</li>
                <li class="uncheck">Relationship Manager (RM)</li>
                <li class="uncheck">Photoshoot of your property</li>
                <li class="uncheck">Showing property on your behalf</li>
            </ul>
            <p>Plan Validity: 3 Months</p>
        </div>
        
        <!-- Super Relax Plan -->
        <div class="plan">
            <h3>Super Relax Plan</h3>
            <p class="price">₹13,499 <span style="font-size: 14px;">+18% GST</span></p>
            <a href="#" class="subscribe-button">Subscribe</a>
            <ul class="features">
                <li class="check">Property promotion on site</li>
                <li class="check">Personal Field Assistant</li>
                <li class="check">Relationship Manager (RM)</li>
                <li class="check">Facebook Marketing Of Property</li>
                <li class="uncheck">Showing property on your behalf</li>
            </ul>
            <p>Plan Validity: 3 Months</p>
        </div>
        
        <!-- MoneyBack Plan -->
        <div class="plan">
            <h3>MoneyBack Plan</h3>
            <p class="price">₹16,499 <span style="font-size: 14px;">+18% GST</span></p>
            <a href="#" class="subscribe-button">Subscribe</a>
            <ul class="features">
                <li class="check">Guaranteed buyers or Moneyback</li>
                <li class="check">Personal Field Assistant</li>
                <li class="check">Relationship Manager (RM)</li>
                <li class="check">Facebook Marketing Of Property</li>
                <li class="check">Showing property on your behalf</li>
            </ul>
            <p>Plan Validity: 3 Months</p>
        </div>
        
        <!-- Super MoneyBack Plan -->
        <div class="plan">
            <h3>Super MoneyBack Plan</h3>
            <p class="price">₹20,999 <span style="font-size: 14px;">+18% GST</span></p>
            <a href="#" class="subscribe-button">Subscribe</a>
            <ul class="features">
                <li class="check">Guaranteed buyers or Moneyback</li>
                <li class="check">Personal Field Assistant</li>
                <li class="check">Relationship Manager (RM)</li>
                <li class="check">Facebook Marketing Of Property</li>
                <li class="check">Showing property on your behalf</li>
                <li class="check">Photoshoot of your property</li>
            </ul>
            <p>Plan Validity: 3 Months</p>
        </div>

    </div>
</div>


<div class="pricing-table-container">
    <table class="pricing-table">
        <thead>
            <tr>
                <th class="feature-header">Features</th>
                <th class="pricing-plan-title">Relax Plan</th>
                <th class="pricing-plan-title">Super Relax Plan</th>
                <th class="pricing-plan-title">MoneyBack Plan</th>
                <th class="pricing-plan-title">Super MoneyBack Plan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="feature-header">Guaranteed buyers or Moneyback</td>
                <td><span class="cross-mark">&#10008;</span></td>
                <td><span class="cross-mark">&#10008;</span></td>
                <td><span class="check-mark">&#10004;</span></td>
                <td><span class="check-mark">&#10004;</span></td>
            </tr>
            <tr>
                <td class="feature-header">Personal Field Assistant</td>
                <td><span class="check-mark">&#10004;</span></td>
                <td><span class="check-mark">&#10004;</span></td>
                <td><span class="check-mark">&#10004;</span></td>
                <td><span class="check-mark">&#10004;</span></td>
            </tr>
            <tr>
                <td class="feature-header">Property promotion on site</td>
                <td><span class="check-mark">&#10004;</span></td>
                <td><span class="check-mark">&#10004;</span></td>
                <td><span class="check-mark">&#10004;</span></td>
                <td><span class="check-mark">&#10004;</span></td>
            </tr>
            <tr>
                <td class="feature-header">Relationship Manager (RM)</td>
                <td><span class="cross-mark">&#10008;</span></td>
                <td><span class="check-mark">&#10004;</span></td>
                <td><span class="check-mark">&#10004;</span></td>
                <td><span class="check-mark">&#10004;</span></td>
            </tr>
            <tr>
                <td class="feature-header">Facebook Marketing Of Property</td>
                <td><span class="cross-mark">&#10008;</span></td>
                <td><span class="check-mark">&#10004;</span></td>
                <td><span class="check-mark">&#10004;</span></td>
                <td><span class="check-mark">&#10004;</span></td>
            </tr>
            <tr>
                <td class="feature-header">Privacy of your phone number</td>
                <td><span class="cross-mark">&#10008;</span></td>
                <td><span class="cross-mark">&#10008;</span></td>
                <td><span class="check-mark">&#10004;</span></td>
                <td><span class="check-mark">&#10004;</span></td>
            </tr>
            <tr>
                <td class="feature-header">Showing property on your behalf</td>
                <td><span class="cross-mark">&#10008;</span></td>
                <td><span class="cross-mark">&#10008;</span></td>
                <td><span class="check-mark">&#10004;</span></td>
                <td><span class="check-mark">&#10004;</span></td>
            </tr>
            <tr>
                <td class="feature-header">Photoshoot of your property</td>
                <td><span class="cross-mark">&#10008;</span></td>
                <td><span class="cross-mark">&#10008;</span></td>
                <td><span class="cross-mark">&#10008;</span></td>
                <td><span class="check-mark">&#10004;</span></td>
            </tr>
            <tr>
                <td class="feature-header">Plan Validity</td>
                <td class="plan-validity">3 Months</td>
                <td class="plan-validity">3 Months</td>
                <td class="plan-validity">3 Months</td>
                <td class="plan-validity">3 Months</td>
            </tr>
            <tr>
                <td class="feature-header">Price</td>
                <td class="pricing-plan-price">₹7,499 + 18% GST</td>
                <td class="pricing-plan-price">₹13,499 + 18% GST</td>
                <td class="pricing-plan-price">₹16,499 + 18% GST</td>
                <td class="pricing-plan-price">₹20,999 + 18% GST</td>
            </tr>
        </tbody>
    </table>
</div>

<div class="plans-container">
    <div class="plans-title">HOW ASSISTED PLANS WORK</div>

    <div class="plan-step">
        <div class="plan-content">
            <div class="plan-heading">LOOKING FOR A BUYER?</div>
            <div class="plan-description">Get verified buyer leads through any one of our assisted plans.</div>
        </div>
    </div>

    <div class="plan-step">
        <div class="plan-content">
            <div class="plan-heading">MARKETING & PROMOTION</div>
            <div class="plan-description">Boost your ranking on the listing page and promotion on social media.</div>
        </div>
    </div>

    <div class="plan-step">
        <div class="plan-content">
            <div class="plan-heading">FILTER QUALIFIED BUYERS</div>
            <div class="plan-description">Your Relationship Manager forwards you only buyers meeting your requirements.</div>
        </div>
    </div>

    <div class="plan-step">
        <div class="plan-content">
            <div class="plan-heading">THE HELPING HAND</div>
            <div class="plan-description">A dedicated Relationship Manager is assigned to guide and support you.</div>
        </div>
    </div>
</div>
</body>
</html>
