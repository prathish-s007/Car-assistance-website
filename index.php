<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Car Verse</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

 
  <link rel="stylesheet" href="style.css">

  <style>
    body { margin: 0; font-family: Arial, Helvetica, sans-serif; }

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

    marquee { color: white; }

    .paragraph-container {
      padding: 80px;
      font-size: 20px;
    }

    .mar{
      font-size: 18px;
    }

    .c-img{
      height:350px;
      width:600px;
    }

    .tab-img {
      height: 150px;
      width: 150px;
      margin-top: 10px;
    }

    table {
      border-collapse: collapse;
      width: 80%;
      margin: auto;
    }

    th, td {
      border: 2px solid black;
      text-align: center;
      padding: 30px;
      vertical-align: middle;
    }

    footer {
      background-color: #210476;
      color: rgb(241, 239, 243);
      padding: 20px 0;
      text-align: center;
      margin-top: 40px;
    }

    footer a {
      color: #f4b1b1;
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
    }

    .carousel-inner img {
      height: 400px;
      object-fit: cover;
    }
  </style>
</head>
<body>

<div style="padding-left:16px">
  <center>
    <h1 style="background-image: url('cropped_car_lineup.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      height: 200px;
      line-height: 200px;
      color: white;">
      CAR VERSE<br>
    </h1>
  </center>
</div>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="types.php">Types</a>
  <a href="about.php" >About Us</a>
  <a href="logphp.php">Login</a>
  <a href="signphp.php">Sign in</a>
</div>


<marquee bgcolor=" #210478" width="100%" scrollamount="12">
  <h4 class="mar">Join thousands of satisfied drivers who’ve found their perfect match with Car Verse. Why Choose Car Verse? ▫ Real-World Performance Data ▫ Tailored Recommendations</h4>
</marquee>

<div id="demo" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <center><div class="carousel-inner">
    <div class="carousel-item active ">
      <img src="bmw home.png" alt="Coupe" class="d-block w-50 h-20">
    </div>
    <div class="carousel-item active ">
      <img src="suv home.png" alt="Sedan" class="d-block w-50 h-20">
    </div>
    <div class="carousel-item">
      <img src="sports home.png" alt="Sports" class="d-block w-50 h-20">
    </div>
  </div></center>
  

  
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>


<div class="paragraph-container">
  <p>At Car Verse, we help you drive your dream. Whether you're looking for a powerful SUV, a sleek sports car, or a stylish coupe, stunning sedan, we make car shopping easier with expert insights, curated comparisons, and up-to-date recommendations.</p>
  <p>Our goal is to guide you through the decision-making process by offering in-depth information tailored to your lifestyle, budget, and preferences.</p>
  <p>We do the research so you don’t have to. Here are our Top 5 Cars in each category, handpicked for their innovation, performance, and customer satisfaction. Updated regularly to reflect the latest trends and expert reviews.</p>
</div>


<table>
  <tr>
    <th>Feature</th>
    <th>Car Type</th>
  </tr>
  <tr>
    <td>Speed</td>
    <td>
      Sports Cars<br>
      <img src="SPORTS CAR.jpg" class="tab-img" alt="Sports Car">
    </td>
  </tr>
  <tr>
    <td>Driver-Focused Experience</td>
    <td>
      Coupe Cars<br>
      <img src="COUPE.jpg" class="tab-img" alt="Coupe Car">
    </td>
  </tr>
  <tr>
    <td>Spacious Interior and Offroading</td>
    <td>
      SUV Cars<br>
      <img src="SUV.jpg" class="tab-img" alt="SUV Car">
    </td>
  </tr>
  <tr>
    <td>Professional Appeal</td>
    <td>
      Sedan Cars<br>
      <img src="SEDAN.jpg" class="tab-img" alt="Sedan Car">
    </td>
  </tr>
</table>


<footer id="contact">
  <p><strong>Contact Us</strong></p>
  <p>Email: <a href="mailto:support@carverse.com">support@carverse.com</a> | Perundurai Erode-638060</p>
  <p>&copy; 2025 Car Verse. All rights reserved.</p>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
