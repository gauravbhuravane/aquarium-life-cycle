<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tropical Fish More Info</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <style>
    .container {
      margin-top: 10px;
    }

    .nav-link.active {
       font-weight: bold; /* Example: make the text bold */
       color: #007bff; /* Example: change the text color to blue */
     }

    

    .table {
      border-collapse: collapse;
      width: 100%;
    }

    .table th,
    .table td {
      border: 1px solid #dee2e6;
      padding: 10px;
      text-align: left;
    }

    .table th {
      background-color: #f8f9fa;
      font-size: 20px;
      width: 30%; /* Adjust the width of th (column size) */
    }

    .table td {
      font-size: 20px;
      width: 70%; /* Adjust the width of td (column size) */
    }

    .sticky-footer{
      margin-top: 200px;
    }

    .wrap-text {
        white-space: pre-wrap;
    }

    .description-cell .description-content {
    max-height: 95px; /* Adjust the max height to control the visible text */
    overflow: hidden;
  }

  .description-cell button.read-more-btn {
    display: none;
    
  }

  .fish-image {
    width: 200px; /* Set the desired width */
    height: 200px; /* Set the desired height */
    object-fit: cover; /* Maintain aspect ratio and crop if necessary */
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
    <div class="row">
      <div class="col">
        <table class="table table-bordered">
          <tbody>
          <?php
    // Perform database query to retrieve fish details using the fish ID
    $con = mysqli_connect("localhost", "root", "", "fish_info");

    if (!$con) {
        die("Connection Error");
    }

    // Get the selected fish name from the URL parameter
    if (isset($_GET['name'])) {
        $selectedFishName = $_GET['name'];

        // Query to retrieve fish details for the selected fish name
        $query = "SELECT * FROM fishes WHERE Fish_Name = '" . mysqli_real_escape_string($con, $selectedFishName) . "'";

        $result = mysqli_query($con, $query);

        if (!$result) {
            die("Query Error: " . mysqli_error($con));
        }

        // Display the fish details in a table
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            echo '<table class="table table-bordered">';
            echo '<tr>';
            echo '<th>Fish Name</th>';
            echo '<td>' . $row['Fish_Name'] . '</td>';
            echo '</tr>';
            
            echo '<tr>';
            echo '<th class="fish-image">Fish Image</th>';
            echo '<td>';
            if ($row['Image']) {
                echo '<div><img src="data:image/jpeg;base64,' . base64_encode($row['Image']) . '" alt="Fish Image" class="fish-image"></div>';
            } else {
                echo '<div><img src="path/to/placeholder-image.jpg" alt="No Image" class="fish-image"></div>';
            }
            echo '</td>';
            echo '</tr>';
            // Display other fish details
            echo '<tr>';
            echo '<th>Aquatic Type</th>';
            echo '<td>' . $row['Aquatic_Type'] . '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<th>Breeding Capacity</th>';
            echo '<td>' . $row['Breeding_Capacity'] . '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<th>pH Control</th>';
            echo '<td>' . $row['pH_Control'] . '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<th>Length of Fish</th>';
            echo '<td>' . $row['Length_Of_Fish'] . '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<th>Class</th>';
            echo '<td>' . $row['Class'] . '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<th>kH Control</th>';
            echo '<td>' . $row['kH_Control'] . '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<th>Temperature</th>';
            echo '<td>' . $row['Temperature'] . '%C</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<th>Family</th>';
            echo '<td>' . $row['Family'] . '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<th>Tank Environment</th>';
            echo '<td>' . $row['Tank_Environment'] . '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<th>Description</th>';
            echo '<td class="description-cell">';
            echo '<div class="description-content">';
            echo $row['Description'];
            echo '</div>';
            echo '<button class="read-more-btn btn-primary">Read More</button>';
            echo '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<th>Location</th>';
           echo '<td style="white-space: pre-wrap;">' . $row['Location'] . '</td>';
           echo '</tr>';
            echo '</table>';
        } else {
            echo "Fish not found.";
        }

        mysqli_free_result($result);
    } else {
        echo "No fish name provided.";
    }

    mysqli_close($con);
    ?>
          </tbody>
        </table>
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
  <script>
  document.addEventListener('DOMContentLoaded', function () {
    const descriptionCell = document.querySelector('.description-cell');
    const descriptionContent = descriptionCell.querySelector('.description-content');
    const readMoreBtn = descriptionCell.querySelector('.read-more-btn');

    // Check if the description content is overflowing
    if (descriptionContent.scrollHeight > descriptionContent.clientHeight) {
      readMoreBtn.style.display = 'block';
    }

    // Toggle the display of the full text when "Read More" button is clicked
    readMoreBtn.addEventListener('click', function () {
      if (descriptionContent.style.maxHeight) {
        descriptionContent.style.maxHeight = null;
        readMoreBtn.textContent = 'Read More';
      } else {
        descriptionContent.style.maxHeight = descriptionContent.scrollHeight + 'px';
        readMoreBtn.textContent = 'Read Less';
      }
    });
  });
</script>


</body>
</html>
