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

    .table thead i {
  color: #007bff; 
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

   .table-row-lg td {
      padding: 70px;
      font-size: 18px;
    }
    .table-row-lg td:nth-child(1) {
      width: 30%;
    }
    .table-row-lg img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .table{
      margin-top: 50px;
    }

    .heading{
      text-align: center;
    }

    /* Style for font awesome icons */
.table thead i {
  color: #007bff; 
}

.custom-logo {
  width: 90px; /* Adjust the width as needed */
  height: 90px; /* Auto-adjust the height to maintain the aspect ratio */
}

   /* Add margin between the logo image and text */
.logo-text {
  margin-left: 10px; /* Adjust the value as needed */
}

.table th i {
  margin-right: 10px; 

}

.table tbody tr:hover {
  background: #f5f5f5;
}

.table th {
  font-weight: bold;
  text-align: center;

}

/* Nav link text color */
.navbar .nav-link {
  color: #fff; 
}

/* Active nav link text color */  
.navbar .nav-link.active {
  color: #fff;
  font-weight: bold;
}

.logo-text{
  color: #fff; 
  font-weight: bold;
}

nav {
  margin-bottom: 6.25rem; /* 20px */
}

.heading {
  margin-top: 0;
}

.heading .icon {
  color: #007bff;
  margin-right: 0.5rem; 
}

.sticky-footer{
      margin-top: 200px;
    }

    .footer-paragraph {
    color: rgb(40, 96, 255);
    margin: 0;
    white-space: normal; /* Add this line to allow wrapping of text */
    }

    </style>
</head>

<body>
  <header>
    <!-- Navigation bar code goes here -->
    <nav class="navbar navbar-expand-lg bg-primary sticky-top">
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

  <h2 class="heading">Search Fish Diseases <i class="fas fa-fish icon"></i></h2>

  <div class="container mt-5">
    <div class="row mt-3">
      <div class="col">
        <h4 class="text-center">Fish Disease*</h4>
        <form method="POST" action="health_care.php">
          <div class="p-3 text-center">
            <select id="disease" name="disease" class="form-control">
              <option value="" disabled selected>Select Fish Disease</option>
              <option value="Neon Tetra Disease">Neon Tetra Disease</option>
              <option value="Cloudy Eye">Cloudy Eye</option>
            </select>
          </div>
          <button class="btn btn-primary ms-3" type="submit" name="searchDisease">Go</button>
        </form>
      </div>
      <div class="col">
        <h4 class="text-center">Fish Symptom*</h4>
        <form method="POST" action="health_care.php">
          <div class="p-3 text-center">
            <select id="symptom" name="symptom" class="form-control">
              <option value="" disabled selected>Select Symptom</option>
              <option value="Cloudy, opaque eyes">Cloudy, opaque eyes</option>
              <option value="Loss of color, spinal curvature, lethargy.">Loss of color, spinal curvature, lethargy.</option>
            </select>
          </div>
          <button class="btn btn-primary ms-3" type="submit" name="searchSymptom">Go</button>
        </form>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col"></div>
    <table class="table table-bordered">
      <tbody>
       
      
        <?php
        require_once('db.php');

        if (isset($_POST['searchDisease'])) {
          if (isset($_POST['disease'])) {
            $searchTerm = $_POST['disease'];

            // Prepare the query to search for related content by disease
            $query = "SELECT * FROM healthcare WHERE disease LIKE ?";
            $stmt = mysqli_prepare($con, $query);
            if (!$stmt) {
              die("Statement preparation error: " . mysqli_error($con));
            }
            $searchTerm = '%' . $searchTerm . '%';
            mysqli_stmt_bind_param($stmt, "s", $searchTerm);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if (!$result) {
              die("Result set retrieval error: " . mysqli_error($con));
            }

            // Display the search results for disease
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo '<table class="table table-bordered">';
                echo '<tr>';
                echo '<th>Diagnosis <i class="fas fa-notes-medical" style="color: blue;"></i> </th>';
                echo '<td>' . $row['diagnosis'] . '</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<th>Treatment <i class="fas fa-hand-holding-medical" style="color: blue;"></i> </th>';
                echo '<td>' . $row['treatment'] . '</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<th>Medicine <i class="fas fa-pills" style="color: blue;"></i> </th>';
                echo '<td>' . $row['medicine'] . '</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<th>In House Treatment <i class="fas fa-house-medical" style="color: blue;"></i> </th>';
                echo '<td>' . $row['in_house_treatment'] . '</td>';
                echo '</tr>';
                echo '</table>';

              }
            } else {
              echo '<tr class="table-row-lg"><td colspan="4" class="text-center">No results found for the selected disease.</td></tr>';
            }
          } else {
            echo '<tr class="table-row-lg"><td colspan="4" class="text-center">Please provide a disease value.</td></tr>';
          }
        }

        if (isset($_POST['searchSymptom'])) {
          if (isset($_POST['symptom'])) {
            $searchTerm = $_POST['symptom'];

            // Prepare the query to search for related content by symptom
            $query = "SELECT * FROM healthcare WHERE symptom LIKE ?";
            $stmt = mysqli_prepare($con, $query);
            if (!$stmt) {
              die("Statement preparation error: " . mysqli_error($con));
            }
            $searchTerm = '%' . $searchTerm . '%';
            mysqli_stmt_bind_param($stmt, "s", $searchTerm);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if (!$result) {
              die("Result set retrieval error: " . mysqli_error($con));
            }

            // Display the search results for symptom
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo '<table class="table table-bordered">';
                echo '<tr>';
                echo '<th>Diagnosis <i class="fas fa-notes-medical" style="color: blue;"></i> </th>';
                echo '<td>' . $row['diagnosis'] . '</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<th>Treatment <i class="fas fa-hand-holding-medical" style="color: blue;"></i> </th>';
                echo '<td>' . $row['treatment'] . '</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<th>Medicine <i class="fas fa-pills" style="color: blue;"></i> </th>';
                echo '<td>' . $row['medicine'] . '</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<th>In House Treatment <i class="fas fa-house-medical" style="color: blue;"></i> </th>';
                echo '<td>' . $row['in_house_treatment'] . '</td>';
                echo '</tr>';
                echo '</table>';
              }
            } else {
              echo '<tr class="table-row-lg"><td colspan="4" class="text-center">No results found for the selected symptom.</td></tr>';
            }
          } else {
            echo '<tr class="table-row-lg"><td colspan="4" class="text-center">Please provide a symptom value.</td></tr>';
          }
        }
        ?>
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
              "Maintaining a healthy and thriving aquarium necessitates a comprehensive grasp of the aquarium life cycle. This intricate cycle encompasses essential processes that significantly influence the welfare of aquatic life within the tank. By comprehending the intricacies of the aquarium life cycle, enthusiasts are empowered to craft a harmonious and dynamic underwater realm, nurturing the well-being of aquatic life for the years that lie ahead."
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
            <p>
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
</body>
</html>