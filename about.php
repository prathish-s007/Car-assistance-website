
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>About Us - Car Verse</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
    }

    .topnav {
      overflow: hidden;
      background-color: #333;
    }

    .topnav a {
      float: left;
      color: #f2f2f2;
      text-align: center;
      padding: 20px 16px;
      text-decoration: none;
      font-size: 17px;
    }

    .topnav a:hover {
      background-color: #f4f0f0;
      color: black;
    }

    .topnav a.active {
      background-color: #2504aa;
      color: white;
    }

    .hero-section {
      background: url('car_showroom.jpg') center/cover no-repeat;
      color: rgb(26, 21, 21);
      text-align: center;
      padding: 100px 20px;
    }

    .hero-section h1 {
      font-size: 48px;
      font-weight: bold;
      text-shadow: 2px 2px 8px black;
    }

    .content-section {
      padding: 60px 20px;
    }

    .content-section img {
      width: 100%;
      border-radius: 12px;
      transition: transform 0.5s ease;
    }

    .content-section img:hover {
      transform: scale(1.03);
    }

    .feature-card {
      border: 1px solid #ddd;
      border-radius: 12px;
      padding: 20px;
      transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .feature-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    }

    footer {
      background-color: #210476;
      color: #f1f1f1;
      text-align: center;
      padding: 20px;
      margin-top: 40px;
    }

    footer a {
      color: #f4b1b1;
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <br></br>
<a class="active" href="index.php"><button class="btn btn-dark">Home</button></a>


<div class="hero-section">
  <h1>About Car Verse </h1>
  <p>Driven by purpose. Centered on you.</p>
</div>

<div class="container content-section">
  <div class="row align-items-center mb-5">
    <div class="col-md-6">
     <img src="about us img.png" alt="car verse">
    </div>
    <div class="col-md-6">
      <h3>Our Roots</h3>
      <p>Car Verse was created with the concept of <strong>Providing best assistance. </strong>Whether you're looking for a powerful SUV, a sleek sports car, a stylish coupe, or a reliable daily driver, we’re here to help you make the best choice with confidence.</p>
      <p>We’ve created a platform that simplifies the car shopping process by offering carefully curated lists of the top vehicles in each category, detailed comparisons, and easy-to-understand information tailored to your needs and lifestyle.</p>
    </div>
  </div>

  <h3 class="text-center mb-4">Why Choose Car Verse?</h3>
  <div class="row g-4 justify-content-center">
    <div class="col-md-4">
      <div class="feature-card h-100 text-center">
        <h5>🚀 Super Fast Support</h5>
        <p>Get rapid, friendly assistance tailored to your needs.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="feature-card h-100 text-center">
        <h5>💰 Budget Cars</h5>
        <p>Wide range of vehicles to match every budget and lifestyle.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="feature-card h-100 text-center">
        <h5>🚗 All Brands</h5>
        <p>Handpicked cars from trusted brands, inspected for quality.</p>
      </div>
    </div>
  </div>
</div>

<footer>
  <p><strong>Contact Us</strong></p>
  <p>Email: <a href="mailto:support@carverse.com">support@carverse.com</a> | Perundurai, Erode - 638060</p>
  <p>&copy; 2025 Car Verse. All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

