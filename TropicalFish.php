

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tropical Fish</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <style>
    h1{
      margin-top: 100px;
    }

    .nav-link.active {
       font-weight: bold; /* Example: make the text bold */
       color: #007bff; /* Example: change the text color to blue */
     }


    .title{
      text-align: center;
      margin-top: 10px;
    }

    .sticky-footer{
      margin-top: 200px;
    }

    .footer-paragraph {
    margin: 0;
    white-space: normal; /* Add this line to allow wrapping of text */
   }

   
.custom-logo {
  width: 90px; /* Adjust the width as needed */
  height: 90px; /* Auto-adjust the height to maintain the aspect ratio */
}

   /* Add margin between the logo image and text */
.logo-text {
  margin-left: 10px; /* Adjust the value as needed */
}

.logo-text{
  color: #fff; 
  font-weight: bold;
}
   
    </style>
</head>
<body>
  

<form method="POST" action="TropicalFishResult.php">
<header>
    <!-- Navigation bar code goes here -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top" style="background-color: rgba(0, 0, 0, 0.5);">
      <div class="container">
      <a class="navbar-brand" href="#">
  <img class="logo custom-logo" src="images/logo.png" alt="Aquarium Life Cycle Logo">
  <span class="logo-text">Aquarium Life Cycle</span>
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
              <a class="nav-link active" href="services.php">Services</a>
            </li>
            <li class="nav-item me-4">
              <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item me-4">
              <a class="nav-link" href="contact_us.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>



  <div class="container">
    <h1>Tropical Fish</h1>
    <div class="title">Search Fish Based on User Requirements...</div>
  </div>

  <div class="container mt-5">
    <div class="row mt-3">
    <div class="col">
  <h4 class="text-center">Aquatic Type*</h4>
  <form method="POST" action="TropicalFishResult.php"></form>
    <div class="p-3 text-center">
      <select id="aquaticType" name="aquaticType" class="form-control">
      <option value="" disabled selected>Select Aquatic Type</option>
        <option value="Fresh Water">Fresh Water</option>
        <option value="Marine">Marine</option>
      </select>
    </div>
    <button class="btn btn-primary ms-3" type="submit" name="searchAquaticType">Go</button>
  </form>
</div>

      <div class="col">
        <h4 class="text-center">Breeding Capacity*</h4>
        <form method="POST" action="TropicalFishResult.php"></form>
    <div class="p-3 text-center">
      <select id="breedingCapacity" name="breedingCapacity" class="form-control">
      <option value="" disabled selected>Select Breeding Capacity</option>
        <option value="10-30">10-30</option>
        <option value="10-50">10-50</option>
        <option value="20-50">20-50</option>
        <option value="20-100">20-100</option>
        <option value="20-400">20-400</option>
        <option value="30-100">30-100</option>
        <option value="50-100">50-100</option>
        <option value="50-150">50-150</option>
        <option value="50-200">50-200</option>
        <option value="60-130">60-130</option>
        <option value="100-300">100-300</option>
        <option value="100-500">100-500</option>
        <option value="100-600">100-600</option>
        <option value="100-1000">100-1000</option>
        <option value="200-400">200-400</option>
        <option value="200-500">200-500</option>
      </select>
    </div>
    <button class="btn btn-primary ms-3" type="submit" name="searchBreedingCapacity">Go</button>
  </form>
</div>


      <div class="col">
        <h4 class="text-center">pH Control*</h4>
        <form method="POST" action="TropicalFishResult.php"></form>
        <div class="p-3 text-center">
        <select id="phControl" name="phControl" class="form-control">
      <option value="" disabled selected>Select pH Control</option>
        <option value="6.0-7.0">6.0-7.0</option>
        <option value="6.0-7.5">6.0-7.5</option>
        <option value="7.0-8.0">7.0-8.0</option>
        <option value="7.5-8.5">7.5-8.5</option>
        <option value="8.1-8.4">8.1-8.4</option>
        <option value="8.2-8.4">8.2-8.4</option>
      </select>
    </div>
    <button class="btn btn-primary ms-3" type="submit" name="searchPHControl">Go</button>
  </form>
</div>
  </diV>

    <div class="row mt-3">
      <div class="col">
        <h4 class="text-center">Length Of Fish*</h4>
        <form method="POST" action="TropicalFishResult.php"></form>
        <div class="p-3 text-center">
        <select id="lengthOfFish" name="lengthOfFish" class="form-control">
      <option value="" disabled selected>Select Length Of Fish</option>
        <option value="3-4cm">3-4cm</option>
        <option value="3.8-6.4cm">3.8-6.4cm</option>
        <option value="4cm">4cm</option>
        <option value="4-5cm">4-5cm</option>
        <option value="4-7cm">4-7cm</option>
        <option value="5-6cm">5-6cm</option>
        <option value="5-7cm">5-7cm</option>
        <option value="5-10cm">5-10cm</option>
        <option value="6-8cm">6-8cm</option>
        <option value="6-10cm">6-10cm</option>
        <option value="7-8cm">7-8cm</option>
        <option value="7-9cm">7-9cm</option>
        <option value="7-10cm">7-10cm</option>
        <option value="7.5-10cm">7.5-10cm</option>
        <option value="8-10cm">8-10cm</option>
        <option value="10-15cm">10-15cm</option>
        <option value="15cm">15cm</option>
      </select>
  </div>
        <button class="btn btn-primary ms-3" name="searchLengthOfFish">Go</button>
  </form>
      </div>

      
      <div class="col">
        <h4 class="text-center">Class*</h4>
        <form method="POST" action="TropicalFishResult.php"></form>
        <div class="p-3 text-center">
        <select id="fishClass" name="fishClass" class="form-control">
      <option value="" disabled selected>Select Fish Class</option>
        <option value="Actinopterygii">Actinopterygii</option>
      </select>
  </div>
        <button class="btn btn-primary ms-3" name="searchFishClass">Go</button>
  </form>
      </div>

      <div class="col">
        <h4 class="text-center">kH Control*</h4>
        <form method="POST" action="TropicalFishResult.php"></form>
        <div class="p-3 text-center">
        <select id="khControl" name="khControl" class="form-control">
      <option value="" disabled selected>Select kH Control</option>
        <option value="1-2 dKH">1-2 dKH</option>
        <option value="2-10dKH">2-10dKH</option>
        <option value="3-8 dKH">3-8 dKH</option>
        <option value="4-8 dKH">4-8 dKH</option>
        <option value="4-10 dKH">4-10 dKH</option>
        <option value="6-20 dKH">6-20 dKH</option>
        <option value="7-11dKH">7-11dKH</option>
        <option value="8-11dKH">8-11dKH</option>
        <option value="8-12dKH">8-12dKH</option>
        <option value="10dKH">10dKH</option>
      </select>
  </div>
        <button class="btn btn-primary ms-3" name="searchkHControl">Go</button>
  </form>
      </div>
  </div>


  <div class="row mt-3">
  <div class="col">
    <h4 class="text-center">Temperature*</h4>
    <form method="POST" action="TropicalFishResult.php">
      <div class="p-3 text-center">
        <select id="temperature" name="temperature" class="form-control">
          <option value="" disabled selected>Select Temperature</option>
          <option value="18-26">18-26%C</option>
          <option value="22-26">22-26%C</option>
          <option value="22-28">22-28%C</option>
          <option value="23-26">23-26%C</option>
          <option value="23-27">23-27%C</option>
          <option value="23-28">23-28%C</option>
          <option value="24-28">24-28%C</option>
          <option value="24-30">24-30%C</option>
          <option value="26-30">26-30%C</option>
        </select>
      </div>
      <button class="btn btn-primary ms-3" name="searchTemperature">Go</button>
    </form>
  </div>

  <div class="col">
    <h4 class="text-center">Family*</h4>
    <form method="POST" action="TropicalFishResult.php">
      <div class="p-3 text-center">
      <select id="family" name="family" class="form-control">
          <option value="" disabled selected>Select Family</option>
          <option value="Apogonidae">Apogonidae</option>
          <option value="Callichthyidae">Callichthyidae</option>
          <option value="Callionymidae">Callionymidae</option>
          <option value="Cichlidae">Cichlidae</option>
          <option value="Cobitidae">Cobitidae</option>
          <option value="Cyprinidae">Cyprinidae</option>
          <option value="Grammatidae">Grammatidae</option>
          <option value="Labridae">Labridae</option>
          <option value="Loricariidae">Loricariidae</option>
          <option value="Microdesmidae">Microdesmidae</option>
          <option value="Osphronemidae">Osphronemidae</option>
          <option value="Poeciliidae">Poeciliidae</option>
          <option value="Pomacentridae">Pomacentridae</option>
        </select>
      </div>
      <button class="btn btn-primary ms-3" name="searchFamily">Go</button>
    </form>
  </div>


  <div class="col">
    <h4 class="text-center">Tank Size*</h4>
    <form method="POST" action="TropicalFishResult.php">
      <div class="p-3 text-center">
      <select id="tankEnvironment" name="tankEnvironment" class="form-control">
      <option value="" disabled selected>Select Tank Size</option>
        <option value="5 gallons">5 gallons</option>
        <option value="10 gallons">10 gallons</option>
        <option value="15 gallons">15 gallons</option>
        <option value="20 gallons">20 gallons</option>
        <option value="30 gallons">30 gallons</option>
      </select>
  </div>
        <button class="btn btn-primary ms-3" name="searchTankEnvironment">Go</button>
  </form>
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
              <a href="#!" class="text-white">Aquarium Equipments</a>
            </p>
            <p>
              <a href="#!" class="text-white">Aquarium Design</a>
            </p>
            <p>
              <a href="#!" class="text-white">Aquarium Toolkit</a>
            </p>
            <p>
              <a href="#!" class="text-white">Health & Care</a>
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
  

  
  


    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>

</form>
</body>
</html>
