<!DOCTYPE html>
<html lang="en">
<head>
  <title>Aquarium Life Cycle</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <style>

    body {
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    /* Add styles for the active link */
    .nav-link.active {
       font-weight: bold; /* Example: make the text bold */
       color: #007bff; /* Example: change the text color to blue */
     }


    h1.display-4 {
      white-space: nowrap;  
      text-overflow: ellipsis;
      font-size: 50px;
    }

    p.lead{
      text-align: center;
    }

    .video-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 110vh; /* Adjust the video container height as needed */
      overflow: hidden;
      color: white;
    }

    .vid_parent {
      flex: 2;
      display: flex;
      justify-content: center;
    }

    .vid_parent video {
      width: 100%;
      height: 200%; /* Set the video height to fill its container */
      object-fit: cover; /* Ensures the video covers the entire container */
    }

    /* Added styles for scrolling */
    main {
      flex: 1;
      display: flex;
      flex-direction: column;
      overflow-y: auto;
      padding: 20px;
    }

    .sticky-footer{
      padding-bottom: 100px;
    }

    .footer-paragraph {
    
    margin: 0;
    white-space: normal; /* Add this line to allow wrapping of text */
   }

   /* Increase the height and width of the logo */
.custom-logo {
  width: 90px; /* Adjust the width as needed */
  height: 90px; /* Auto-adjust the height to maintain the aspect ratio */
}

   /* Add margin between the logo image and text */
.logo-text {
  margin-left: 10px; /* Adjust the value as needed */
}

.navbar {
  position: sticky;
  top: 0;
  z-index: 100;
}

    
  </style>
</head>
<body>
  
<header>
    <!-- Navigation bar code goes here -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: rgba(0, 0, 0, 0.5);">
      <div class="container">
      <a class="navbar-brand" href="#">
  <img class="logo custom-logo" src="images/logo.png" alt="Aquarium Life Cycle Logo">
  <span style="font-weight: bold;"><span class="logo-text">Aquarium Life Cycle</span></span>
</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item me-4">
              <a class="nav-link active" href="index.php">Home</a>
            </li>
            <li class="nav-item me-4">
              <a class="nav-link" href="services.php">Services</a>
            </li>
            <li class="nav-item me-4">
              <a class="nav-link" href="about_us.php">About Us</a>
            </li>
            <li class="nav-item me-4">
              <a class="nav-link" href="contact_us.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="video-container">
    <!-- Video container -->
    <div class="vid_parent">
      <video playsinline autoplay muted loop>
        <source src="videos/fish_video.mp4" type="video/mp4">
      </video>
    </div>

    <div class="video-description-overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2 text-center">
        <h1 class="display-4"><strong>Aquarium Life Cycle: A Fascinating Journey</strong></h1>
<p class="lead">
<strong>Our project is an exciting exploration of the diverse aquatic animals and plants that flourish within a fish tank environment. From fascinating fishes to vibrant aquatic flora, we unravel the mysteries of their existence. We delve into the requirements and care needed for each animal, including water conditions, temperature, pH levels, and feeding habits. Through this project, we also aim to find out the diseases of fishes and explore home and medical treatments for them. Join us in this mesmerizing journey of understanding the delicate balance needed to create a healthy and thriving fish tank ecosystem, while promoting the importance of responsible pet ownership and environment conservation</strong>.
</p>

        </div>
      </div>
    </div>
  </div>
</div>
  

    <!-- Footer -->
  <footer class="sticky-footer text-center text-lg-start text-white" style="background-color: #1c2331">
    <!-- Section: Social media -->
   
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold">Aquarium Life Cycle</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #2860FF; height: 2px">
            <p class="footer-paragraph">
            "This project aims to explore the diverse aquatic life suitable for fish tanks, covering fish, plants, and their specific care requirements, disease management, and promoting responsible pet ownership and environmental conservation. It also serves as an educational resource for fisheries students to learn about aquatic lifecycle."
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Services</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #2860FF; height: 2px">
            <p>
              <a href="TropicalFish.php" class="text-white">Topical Fish</a>
            </p>
            <p>
              <a href="CarpetalPlants.php" class="text-white">Carpet Plants</a>
            </p>
            <p>
              <a href="aqua_equipment.php" class="text-white">Aquarium Equipments</a>
            </p>
            <p>
              <a href="aqua_design.php" class="text-white">Aquarium Design</a>
            </p>
            <p>
              <a href="tankcalc.php" class="text-white">Aquarium Toolkit</a>
            </p>
            <p>
              <a href="health_care.php" class="text-white">Health & Care</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Useful links</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px">
            <p>
              <a href="index.php" class="text-white">Home</a>
            </p>
              <a href="#!" class="text-white">Help</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contact</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px">
            <p><i class="fas fa-home mr-3"></i> Devrukh, Maharashtra, India</p>
            <p><i class="fas fa-envelope mr-3"></i> aqualifecycle45@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 91 9021042998</p>
           
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      © 2023 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">Aquarium Life Cycle</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
  




<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>