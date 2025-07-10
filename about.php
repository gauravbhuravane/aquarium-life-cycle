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
    /* Add styles for the active link */
    .nav-link.active {
       font-weight: bold; /* Example: make the text bold */
       color: #007bff; /* Example: change the text color to blue */
     }
        /* body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #fff; /* Change the background color to white 
        } */

        h2 {
            position: relative;
            font-family: sans-serif;
            text-transform: uppercase;
            font-size: 2em;
            letter-spacing: 4px;
            overflow: hidden;
            background: linear-gradient(90deg, #000, #fff, #000);
            background-repeat: no-repeat;
            background-size: 80%;
            animation: animate 3s linear infinite;
            -webkit-background-clip: text;
            -webkit-text-fill-color: rgba(255, 255, 255, 0);
            text-align: center; /* Center the text */
        }

        @keyframes animate {
            0% {
                background-position: -500%;
            }
            100% {
                background-position: 500%;
            }
        }

        /* Text animation for list items */
        .animated-text {
            animation: fadeInUp 1s ease;
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

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


    .about-text {
        font-size: 18px; /* Adjust the font size as needed */
        line-height: 1.5; /* Adjust the line height for better readability */
    }

    @keyframes bounceIn {
  0% {
    transform: scale(0.1);
    opacity: 0;
  }
  60% {
    transform: scale(1.2);  
    opacity: 1;
  }
  100% {
    transform: scale(1);
  }
}

.about-text {
  animation: bounceIn 2s;
  
}

/* Add this CSS to create the lighting animation */
.center-text {
    text-align: center;
    position: relative;
    margin-top: 20px;
}

.thanks-text {
    font-size: 24px;
    font-weight: bold;
    text-transform: uppercase;
    animation: lighting 2s linear infinite;
}

@keyframes lighting {
    0% {
        text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
    }
    50% {
        text-shadow: 0 0 20px rgba(255, 255, 255, 0.9);
    }
    100% {
        text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
    }
}


    </style>
</head>
<body>
    <header>
        <!-- Navigation bar code goes here -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top" style="background-color: rgba(0, 0, 0, 0.5);">
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
                  <a class="nav-link " href="index.php">Home</a>
                </li>
                <li class="nav-item me-4">
                  <a class="nav-link" href="services.php">Services</a>
                </li>
                <li class="nav-item me-4">
                  <a class="nav-link active" href="about.php">About Us</a>
                </li>
                <li class="nav-item me-4">
                  <a class="nav-link" href="contact_us.php">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>

<!-- About Us Section -->
<section id="about" class="py-5 bg-light">
  <div class="container">
      <div class="row align-items-center">
          <div class="col-md-6">
              <img src="images/logo.png" class="img-fluid rounded mb-4 mb-md-0" alt="">
          </div>
          <div class="col-md-6 top">  
              <h2>About Us</h2>
              <p class="about-text animated-text" style="font-size: 18px;">Welcome to Aquarium Life Cycle! We're your aquatic companions on the journey of underwater discovery.</p>
              <div class="text-block">
                  <p class="about-text animated-text" style="font-size: 18px;">This project aims to explore the different types of aquatic animals that can thrive in a fish tank environment, including fishes and plants.</p>
              </div>
              <div class="text-block">
                  <p class="about-text animated-text" style="font-size: 18px;">The project will also delve into the requirements and care needed for each animal such as water, temperature, pH levels, and feeding habits. Through this project, we will try to find out the diseases of fishes and what are the home and medical treatment for them.</p>
              </div>
              <!-- Add similar styled text blocks for other paragraphs -->
              <div class="center-text">
                  <p class="thanks-text">Thanks For Visiting Us</p> <!-- Add this line -->
              </div>
          </div>
          
      </div>
  </div>
</section>









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
            </p>
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
  <!-- Footer -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
  <script src="./js/bootstrap.min.js"></script>
</body>
</html>

