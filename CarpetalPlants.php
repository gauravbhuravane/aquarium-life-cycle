

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Carpetal Plants</title>
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

<form method="POST" action="CarpetalPlantsResult.php">

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
              <a class="nav-link" href="index.php">Home</a>
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
    <h1>Carpetal Plants</h1>
    <div class="title">Search Plants Based on User Requirements...</div>
  </div>

  <div class="container mt-5">
    <div class="row mt-3">
    <div class="col">
      <h4 class="text-center">Hardiness*</h4>
      <form method="POST" action="CarpetalPlantsResult.php"></form>
      <div class="p-3 text-center">
      <select id="hardiness" name="hardiness" class="form-control">
      <option value="" disabled selected>Select Hardiness Type</option>
       <option value="Easy">Easy</option>
       <option value="Easy to Moderate">Easy to Moderate</option>
       <option value="Moderate">Moderate</option>
       <option value="Moderate to Difficult">Moderate to Difficult</option>
      </select>
    </div>
    <button class="btn btn-primary ms-3" type="submit" name="searchHardiness">Go</button>
  </form>
</div>

      <div class="col">
        <h4 class="text-center">Lighting Requirement*</h4>
        <form method="POST" action="CarpetalPlantsResult.php"></form>
        <div class="p-3 text-center">
      <select id="lightingRequirement" name="lightingRequirement" class="form-control">
      <option value="" disabled selected>Select Lighting Requirement Type</option>
       <option value="High">High</option>
       <option value="Low to High">Low to High</option>
       <option value="Low to Moderate">Low to Moderate</option>
       <option value="Moderate">Moderate</option>
       <option value="Moderate to High">Moderate to High</option>
      </select>
    </div>
    <button class="btn btn-primary ms-3" type="submit" name="searchLightingRequirement">Go</button>
  </form>
</div>

      <div class="col">
        <h4 class="text-center">Category*</h4>
        <form method="POST" action="CarpetalPlantsResult.php"></form>
        <div class="p-3 text-center">
      <select id="category" name="category" class="form-control">
      <option value="" disabled selected>Select Category Type</option>
      <option value="Aquarium Plants">Aquarium Plants</option>
      <option value="Floating Aquarium Plants">Floating Aquarium Plants</option>
      </select>
    </div>
    <button class="btn btn-primary ms-3" type="submit" name="searchCategory">Go</button>
  </form>
</div>
  </div>



    <div class="row mt-3">
    <div class="col">
    <h4 class="text-center">Family*</h4>
    <form method="POST" action="CarpetalPlantsResult.php">
        <div class="p-3 text-center">
            <select id="family" name="family" class="form-control">
                <option value="" disabled selected>Select Family</option>
                <option value="Acanthaceae">Acanthaceae</option>
                <option value="Alismataceae">Alismataceae</option>
                <option value="Amaryllidaceae">Amaryllidaceae</option>
                <option value="Amaranthaceae">Amaranthaceae</option>
                <option value="Apiaceae">Apiaceae</option>
                <option value="Apocynaceae">Apocynaceae</option>
                <option value="Aponogetonaceae">Aponogetonaceae</option>
                <option value="Araceae">Araceae</option>
                <option value="Araliaceae">Araliaceae</option>
                <option value="Ceratophyllaceae">Ceratophyllaceae</option>
                <option value="Cyperaceae">Cyperaceae</option>
                <option value="Haloragaceae">Haloragaceae</option>
                <option value="Hydrocharitaceae">Hydrocharitaceae</option>
                <option value="Hypnaceae">Hypnaceae</option>
                <option value="Lythraceae">Lythraceae</option>
                <option value="Menyanthaceae">Menyanthaceae</option>
                <option value="Nymphaeaceae">Nymphaeaceae</option>
                <option value="Onagraceae">Onagraceae</option>
                <option value="Phyllanthaceae">Phyllanthaceae</option>
                <option value="Plantaginaceae">Plantaginaceae</option>
                <option value="Polypodiaceae">Polypodiaceae</option>
                <option value="Pteridaceae">Pteridaceae</option>
            </select>
        </div>
        <button class="btn btn-primary ms-3" name="searchFamily">Go</button>
    </form>
</div>

<div class="col">
    <h4 class="text-center">Category*</h4>
    <form method="POST" action="CarpetalPlantsResult.php">
        <div class="p-3 text-center">
            <select id="genus" name="genus" class="form-control">
                <option value="" disabled selected>Select Genus Type</option>
                <option value="Alternanthera">Alternanthera</option>
                <option value="Anubias">Anubias</option>
                <option value="Aponogeton">Aponogeton</option>
                <option value="Bacopa">Bacopa</option>
                <option value="Blyxa">Blyxa</option>
                <option value="Ceratophyllum">Ceratophyllum</option>
                <option value="Ceratopteris">Ceratopteris</option>
                <option value="Crinum">Crinum</option>
                <option value="Cryptocoryne">Cryptocoryne</option>
                <option value="Echinodorus">Echinodorus</option>
                <option value="Eleocharis">Eleocharis</option>
                <option value="Hydrocotyle">Hydrocotyle</option>
                <option value="Hygrophila">Hygrophila</option>
                <option value="Ludwigia">Ludwigia</option>
                <option value="Limnophila">Limnophila</option>
                <option value="Microsorum">Microsorum</option>
                <option value="Myriophyllum">Myriophyllum</option>
                <option value="Nuphar">Nuphar</option>
                <option value="Nymphaea">Nymphaea</option>
                <option value="Nymphoides">Nymphoides</option>
                <option value="Phyllanthus">Phyllanthus</option>
                <option value="Pistia">Pistia</option>
                <option value="Riccia">Riccia</option>
                <option value="Rotala">Rotala</option>
                <option value="Sagittaria">Sagittaria</option>
                <option value="Staurogyne">Staurogyne</option>
                <option value="Taxiphyllum">Taxiphyllum</option>
                <option value="Vallisneria">Vallisneria</option>
            </select>
        </div>
        <button class="btn btn-primary ms-3" type="submit" name="searchGenus">Go</button>
    </form>
</div>

<div class="col">
    <h4 class="text-center">Can be grown emersed*</h4>
    <form method="POST" action="CarpetalPlantsResult.php">
        <div class="p-3 text-center">
            <select id="grownEmersed" name="grownEmersed" class="form-control">
                <option value="" disabled selected>Select Grown Emersed Type</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
        </div>
        <button class="btn btn-primary ms-3" name="searchGrownEmersed">Go</button>
    </form>
</div>
    </div>

    <div class="row mt-3">
    <div class="col">
    <h4 class="text-center">Temperature*</h4>
    <form method="POST" action="CarpetalPlantsResult.php">
        <div class="p-3 text-center">
            <select id="temperature" name="temperature" class="form-control">
                <option value="" disabled selected>Select Temperature Range</option>
                <option value="05-25">05-25</option>
                <option value="05-28">05-28</option>
                <option value="16-26">16-26</option>
                <option value="18-28">18-28</option>
                <option value="20-28">20-28</option>
                <option value="22-28">22-28</option>
                <option value="24-28">24-28</option>
            </select>
        </div>
        <button class="btn btn-primary ms-3" name="searchTemperature">Go</button>
    </form>
</div>


<div class="col">
    <h4 class="text-center">Aquascape Placement*</h4>
    <form method="POST" action="CarpetalPlantsResult.php">
        <div class="p-3 text-center">
            <select id="aquascapePlacement" name="aquascapePlacement" class="form-control">
                <option value="" disabled selected>Select Placement</option>
                <option value="Attached">Attached</option>
                <option value="Background">Background</option>
                <option value="Floating">Floating</option>
                <option value="Foreground">Foreground</option>
                <option value="Mid-Ground">Mid-Ground</option>
            </select>
        </div>
        <button class="btn btn-primary ms-3" name="searchAquascapePlacement">Go</button>
    </form>
</div>


<div class="col">
    <h4 class="text-center">Plant Type*</h4>
    <form method="POST" action="CarpetalPlantsResult.php">
        <div class="p-3 text-center">
            <select id="plantType" name="plantType" class="form-control">
                <option value="" disabled selected>Select Plant Type</option>
                <option value="Bulb">Bulb</option>
                <option value="Fern">Fern</option>
                <option value="Floating">Floating</option>
                <option value="Moss">Moss</option>
                <option value="Ribbon-Like Leaves">Ribbon-Like Leaves</option>
                <option value="Rhizome">Rhizome</option>
                <option value="Rosette">Rosette</option>
                <option value="Stem">Stem</option>
            </select>
        </div>
        <button class="btn btn-primary ms-3" name="searchPlantType">Go</button>
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
            This project aims to explore the diverse aquatic life suitable for fish tanks, covering fish, plants, and their specific care requirements, disease management, and promoting responsible pet ownership and environmental conservation. It also serves as an educational resource for fisheries students to learn about aquatic lifecycle.
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
  

  


    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>

</form>
</body>
</html>
