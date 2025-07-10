<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tank Calculator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <style>

.nav-link.active {
       font-weight: bold; /* Example: make the text bold */
       color: #007bff; /* Example: change the text color to blue */
     }

    .page-header {
        padding-top: 50px;
    }

    .form-wrapper {
        padding-top: 40px;
    }

    .btn {
        margin-right: 10px;
    }

    .btn:last-child {
        margin-right: 0;
    }

    tbody {
        border-left: 2px solid #999;
    }

    td {
        padding-left: 10px;
        /* Add padding to left cell */
    }

    .form-label-bold {
        font-weight: bold;
        font-size: 20px;
        height: 40px;
        /* Adjust the height as needed */
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
        <div class="page-header">
            <h1 class="mb-4">Rectangular Fish Tank Calculator</h1>
        </div>

        <div class="form-wrapper">
            <form class="text-center">
                <div class="mb-3 unit">

                    <div class="row">
                        <div class="col">
                            <label for="length" class="form-label form-label-bold">Tank Length:</label>
                            <input type="number" class="form-control" id="length" required>
                        </div>
                        <div class="col">
                            <label for="width" class="form-label form-label-bold">Tank Width:</label>
                            <input type="number" class="form-control" id="width" required><br><br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="height" class="form-label form-label-bold">Tank Height:</label>
                            <input type="number" class="form-control" id="height" required>
                        </div>
                        <div class="col">
                            <label for="liquid-level" class="form-label form-label-bold">Liquid Level:</label>
                            <input type="number" class="form-control" id="liquid-level" required><br><br>
                        </div>
                    </div>


                    <div class="mb-3">

                        <label for="unit" class="form-label form-label-bold">The numbers input above are in which
                            units?</label><br>


                        <div class="btn-group mb-3" role="group" aria-label="Unit buttons">

                            <div class="col-3 pe-2">
                                <button type="button" class="btn btn-secondary">Inches</button>
                            </div>

                            <div class="col-3 px-2">
                                <button type="button" class="btn btn-secondary">Feet</button>
                            </div>

                            <div class="col-3 px-2">
                                <button type="button" class="btn btn-secondary">Meters</button>
                            </div>

                            <div class="col-3 ps-2">
                                <button type="button" class="btn btn-secondary">Centimeters</button>
                            </div>

                        </div>

                    </div>

                    <div class="mb-3">
                        <label for="increment" class="form-label form-label-bold">Dipstick Increment</label><br>
                        <div class="btn-group" role="group" aria-label="Increment buttons">
                            <button type="button" class="btn btn-secondary" onclick="setIncrement(0.1)">0.1</button>
                            <button type="button" class="btn btn-secondary" onclick="setIncrement(0.125)">0.125</button>
                            <button type="button" class="btn btn-secondary" onclick="setIncrement(0.2)">0.2</button>
                            <button type="button" class="btn btn-secondary" onclick="setIncrement(0.25)">0.25</button>
                            <button type="button" class="btn btn-secondary" onclick="setIncrement(0.5)">0.5</button>
                            <button type="button" class="btn btn-secondary" onclick="setIncrement(1)">1</button>
                            <button type="button" class="btn btn-secondary" onclick="setIncrement(2)">2</button>
                            <button type="button" class="btn btn-secondary" onclick="setIncrement(4)">4</button>
                            <button type="button" class="btn btn-secondary" onclick="setIncrement(5)">5</button>
                            <button type="button" class="btn btn-secondary" onclick="setIncrement(8)">8</button>
                            <button type="button" class="btn btn-secondary" onclick="setIncrement(10)">10</button>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary" onclick="calculateVolume()">Calculate Volume</button>
            </form>
            <div class="mt-4 text-center">

                <h3 class="form-label-bold">Results:</h3>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Liquid Volume:</th>
                            <th>Empty Volume (Air):</th>
                            <th>Tank Volume:</th>
                            <th>Liquid Volume Percentage:</th>
                            <th>Empty Volume Percentage:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span id="liquidVolume">N/A</span> cubic inches</td>
                            <td><span id="emptyVolume">N/A</span> cubic inches</td>
                            <td><span id="tankVolume">N/A</span> cubic inches</td>
                            <td><span id="liquidVolumePercentage">N/A</span>%</td>
                            <td><span id="emptyVolumePercentage">N/A</span>%</td>
                        </tr>
                    </tbody>
                </table>


            </div>
        </div>
    </div>




    <!-- Include Bootstrap 5 JavaScript (Popper.js and Bootstrap.js) and your custom script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    let selectedUnit = 'inches';
    let selectedIncrement = 0.1;

    function setUnit(unit) {
        selectedUnit = unit;
    }

    function setIncrement(increment) {
        selectedIncrement = increment;
    }

    function calculateVolume() {
        // Get input values
        const length = parseFloat(document.getElementById("length").value);
        const width = parseFloat(document.getElementById("width").value);
        const height = parseFloat(document.getElementById("height").value);
        const liquidLevel = parseFloat(document.getElementById("liquid-level").value);

        // Convert units
        let lengthInInches = length;
        let widthInInches = width;
        let heightInInches = height;

        if (selectedUnit === "feet") {
            lengthInInches *= 12;
            widthInInches *= 12;
            heightInInches *= 12;
        } else if (selectedUnit === "meters") {
            lengthInInches *= 39.37;
            widthInInches *= 39.37;
            heightInInches *= 39.37;
        } else if (selectedUnit === "centimeters") {
            lengthInInches *= 0.3937;
            widthInInches *= 0.3937;
            heightInInches *= 0.3937;
        }

        // Calculate tank volume
        const tankVolume = lengthInInches * widthInInches * heightInInches;

        // Calculate liquid volume based on liquid level and selected increment
        const liquidVolume = tankVolume * (liquidLevel / 100) * selectedIncrement;

        // Calculate empty volume (air)
        const emptyVolume = tankVolume - liquidVolume;

        // Calculate liquid volume percentage
        const liquidVolumePercentage = (liquidVolume / tankVolume) * 100;

        // Calculate empty volume percentage
        const emptyVolumePercentage = (emptyVolume / tankVolume) * 100;

        // Display results
        document.getElementById("liquidVolume").textContent = liquidVolume.toFixed(2);
        document.getElementById("emptyVolume").textContent = emptyVolume.toFixed(2);
        document.getElementById("tankVolume").textContent = tankVolume.toFixed(2);
        document.getElementById("liquidVolumePercentage").textContent = liquidVolumePercentage.toFixed(2);
        document.getElementById("emptyVolumePercentage").textContent = emptyVolumePercentage.toFixed(2);
    }
    </script>


    </div>




    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>

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
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #2860FF; height: 2px">
                        <p class="footer-paragraph">
                            "This project aims to explore the diverse aquatic life suitable for fish tanks, covering fish, plants, and their specific care requirements, disease management, and promoting responsible pet ownership and environmental conservation. It also serves as an educational resource for fisheries students to learn about aquatic lifecycle."
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Services</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #2860FF; height: 2px">
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
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px">
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
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px">
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


</body>

</html>