<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Services</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- Link to Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Your existing CSS styles */
    .rounded-icon {
      border: 2px solid #d4d0d0;
      border-radius: 50%;
      padding: 10px;
      margin-right: 10px;
    }

    .row {
      margin-top: 150px;
    }

    .col {
      color: #0D6EFD;
    }

    .service-icon {
      color: #f8f9fa; 
    }

    .service-text {
      color: #f8f9fa; 
    }

    .title {
      text-align: center;
    }

    /* Add the CSS rule for h4 elements */
    h4 {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      text-align: center;
      color: blue;
      margin: 0; /* Remove default margin */
      margin-bottom: 10px;
    }

    P {
      white-space: nowrap;
      color: rgb(40, 96, 255);
      margin: 0; /* Remove default margin */
    }

    .navbar .navbar-brand {
      color: white;
    }

    .nav-link.active {
       font-weight: bold; /* Example: make the text bold */
       color: #007bff; /* Example: change the text color to blue */
     }


    .navbar .navbar-nav .nav-link {
      color: white;
    }

    .table-container {
      margin-bottom: 200px; /* Adjust the margin value as needed */
    }

    /* Remove the border completely */
    table.table {
      border: none;
    }

    table.table td {
      border: none;
    }

    /* Remove horizontal lines (spacing between table rows) */
    table.table tbody tr {
      border-bottom: none;
    }

    /* Remove default Bootstrap table styling */
    table.table {
      border-collapse: collapse;
    }

    table.table tbody tr {
      border: none;
    }

    table.table th,
    table.table td {
      border: none;
    }

    .footer-paragraph {
    margin: 0;
    white-space: normal; /* Add this line to allow wrapping of text */
   }

   a{
    text-decoration: none;
   }

   .nav-link.active {
  font-weight: bold; /* Example: make the text bold */
  color: #007bff; /* Example: change the text color to blue */
}

.row.mt-3{
  margin-top: 10px;
}

.custom-logo {
  width: 90px; /* Adjust the width as needed */
  height: 90px; /* Auto-adjust the height to maintain the aspect ratio */
}

   /* Add margin between the logo image and text */
.logo-text {
  margin-left: 10px; /* Adjust the value as needed */
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

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-12 text-center">
        <h1>Services</h1>
        <div class="paragraph">
          <div id="p1">Easy to use our Services</div>
          <div id="p2">Aquarium Life-Cycle User Friendly</div>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="table-container">
    <table class="table">
      <tbody>
        <tr>
          <td>
            <a href="TropicalFish.php">
              <!-- New content -->
              <div class="row h-100">
                <div class="col-6 mb-4 d-flex align-items-center">
                  <div class="rounded-icon">
                    <i class="fa fa-fw fa-3x fa-fish" style="font-size: 40px;"></i>
                  </div>
                  <div>
                    <h4>Tropical Fish</h4>
                    <p>Aquatic Tropical Environment</p>
                  </div>
                </div>
              </div>
            </a>
          </td>
          
          <td>
          <a href="CarpetalPlants.php">
            <!-- New content -->
            <div class="row h-100">
              <div class="col-6 mb-4 d-flex align-items-center">
                <div class="rounded-icon">
                  <i class="fa fa-fw fa-3x fa-leaf" style="font-size: 40px;"></i>
                </div>
                <div>
                  <h4>Carpet Plants</h4>
                  <p>Aquatic beginner plants</p>
                </div>
              </div>
            </div>
          </td>
        </a>
          <td>
            <a href="aqua_equipment.php">
            <!-- New content -->
            <div class="row h-100">
              <div class="col-6 mb-4 d-flex align-items-center">
                <div class="rounded-icon">
                  <i class="fa fa-fw fa-3x fa-wrench" style="font-size: 40px;"></i>
                </div>
                <div>
                  <h4>Aquarium Equipments</h4>
                  <p>Electrical/other</p>
                </div>
              </div>
            </div>
          </td>
  </a>
        </tr>
        <tr>
          <td>
            <a href="aqua_design.php">
            <!-- New content -->
            <div class="row h-100">
              <div class="col-6 mb-4 d-flex align-items-center">
                <div class="rounded-icon">
                  <i class="fa fa-fw fa-3x fa-pencil" style="font-size: 40px;"></i>
                </div>
                <div>
                  <h4>Aquarium Design</h4>
                  <p>Maintenance/Cleaning</p>
                  <p>Aquarium</p>
                </div>
              </div>
            </div>
  </a>
          </td>
          <td>
          <a href="tankcalc.php">
            <!-- New content -->
            <div class="row h-100">
              <div class="col-6 mb-4 d-flex align-items-center">
                <div class="rounded-icon">
                  <i class="fa fa-fw fa-3x fa-calculator" style="font-size: 40px;"></i>
                </div>
                <div>
                  <h4>Aquarium Toolkit</h4>
                  <p>Capacity calculator</p>
                </div>
              </div>
            </div>
</a>
          </td>
          <td>
          <a href="health_care.php">
            <!-- New content -->
            <div class="row h-100">
              <div class="col-6 mb-4 d-flex align-items-center">
                <div class="rounded-icon">
                  <i class="fa fa-fw fa-3x fa-medkit" style="font-size: 40px;"></i>
                </div>
                <div>
                  <h4>Health & Care</h4>
                  <p>Find diseases/Treatment</p>
                </div>
              </div>
            </div>
</a>
          </td>
        </tr>
        <!-- Add more rows if necessary -->
      </tbody>
    </table>
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
  

  

  <!-- Link to Bootstrap JS and Popper.js (required for some Bootstrap features) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
