<!DOCTYPE html>
<html lang="en">
<head>
  <title>Car Verse - Select Your Car</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

body {
  animation: fadeInUp 0.8s ease-out;
}


.btn:hover {
  transform: scale(1.05);
  transition: all 0.3s ease;
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}


.car-info-box .car-section {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  padding: 10px;
  border-radius: 8px;
}

.car-info-box .car-section:hover {
  transform: translateY(-5px);
  background-color: #f9f9f9;
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
}


.content-section img {
  width: 100%;
  border-radius: 12px;
  transition: transform 0.5s ease, opacity 0.5s ease;
  opacity: 0;
  animation: imageFadeIn 1s ease forwards;
  animation-delay: 0.3s;
}

@keyframes imageFadeIn {
  from {
    opacity: 0;
    transform: scale(0.98);
  }
  to {
    opacity: 1;
    transform: scale(1);
  }
}

    .topnav {
      overflow: hidden;
      background-color: #333;
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

    .car-info-box {
      background-color: #ffffff;
      border-radius: 12px;
      box-shadow: 0 8px 24px rgba(0,0,0,0.15);
      padding: 20px;
      transition: all 0.3s ease-in-out;
    }

    .car-info-box h3 {
      font-size: 1.2rem;
      color: #333;
    }

    .car-info-box .car-section {
      margin-bottom: 15px;
    }

    .car-info-box .car-section span {
      font-size: 1.2rem;
      margin-right: 8px;
    }

    .car-info-box strong {
      display: block;
      margin-bottom: 5px;
      font-size: 1rem;
      color: #222;
    }

    .car-info-box p {
      margin: 0;
      font-size: 0.85rem;
      color: #555;
      
    }
    .car-info-box {
  background-color: #ffffff;
  border-radius: 12px;
  box-shadow: 0 8px 24px rgba(0,0,0,0.15);
  padding: 20px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  transform: scale(1); /* default */
  will-change: transform;
}

.car-info-box:hover {
  transform: scale(1.05);
  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
  z-index: 10;
  position: relative;
}

  </style>
</head>
<body>

  <div style="padding-left:16px">
    <center>
      <h1 style="background-image: url('types images 1.JPG');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        height: 200px;
        line-height: 200px;
        color: white;">
        CAR VERSE<br>
      </h1>
    </center>

    <a class="active" href="index.php"><button class="btn btn-dark">Home</button></a>
  </div>

  <div class="container mt-3">
    <h2 class="text-center">Select Your Favorite Type of Car</h2>
    <div class="text-center">
      <a href="sports.php" class="btn btn-primary">Sports</a>
      <a href="suv.php" class="btn btn-danger">SUV</a>
      <a href="sedan.php" class="btn btn-success">Sedan</a>
      <a href="coupe.php" class="btn btn-warning text-white">Coupes</a>
    </div>
  </div>

  <div class="container content-section">
    <div class="row align-items-start">
      <div class="col-md-6 mb-4">
        <img src="types page.png" alt="Car Verse Image" class="img-fluid">
      </div>

      <div class="col-md-6">
        <div class="car-info-box">
        
          <p style="font-size: 0.85rem; color: #666; margin-bottom: 15px;">
            Explore the world of cars tailored to your style and needs. Whether you're chasing thrills, luxury, space, or comfort — we've got the perfect ride for you. Choose your type:
          </p>

          <div class="car-section">
            <span>🏁</span>
            <strong>Sports Car</strong>
            <p>For the thrill-seekers and speed lovers. Experience high-performance engines, aerodynamic designs, and lightning-fast acceleration.</p>
          </div>

          <div class="car-section">
            <span>🎯</span>
            <strong>Coupe</strong>
            <p>For sleek design and sporty elegance. Compact, stylish, and built for dynamic driving. Perfect for those who value looks and agility.</p>
          </div>

          <div class="car-section">
            <span>🚙</span>
            <strong>SUV</strong>
            <p>For versatility, space, and adventure. From city cruising to off-road exploring, SUVs offer comfort, power, and room for everyone.</p>
          </div>

          <div class="car-section">
            <span>🚘</span>
            <strong>Sedan</strong>
            <p>For everyday comfort and classic style. A balanced blend of efficiency, space, and smooth driving. Ideal for families or daily commuting.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
