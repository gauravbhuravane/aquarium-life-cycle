

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Carpetal Plants Results</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <style>

.nav-link.active {
       font-weight: bold; /* Example: make the text bold */
       color: #007bff; /* Example: change the text color to blue */
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
    <table class="table table-bordered">
      <thead>
        <tr>
          <th class="text-center">Image</th>
          <th class="text-center">Plant Name</th>
          <th class="text-center">Region</th>
          <th class="text-center">Family</th>
        </tr>
      </thead>
      <tbody>
        
        <?php
    require_once('db.php');

    // Search by Hardiness
    if (isset($_POST['searchHardiness'])) {
    if (isset($_POST['searchHardiness'])) {
      $searchTerm = $_POST['hardiness'];

      // Prepare the query to search for related content by Hardiness
      $query = "SELECT * FROM plants WHERE Hardiness LIKE ?";
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

      // Display the search results for hardiness
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr class="table-row-lg">';
            echo '<td class="text-center"><img src="data:image/jpeg;base64,' . base64_encode($row['Image']) . '" alt="Plant Image"></td>';
            echo '<td class="text-center"><a href="CarpetalPlantsMoreResult.php?name=' . urlencode($row['Plant_Name']) . '">' . $row['Plant_Name'] . '</a></td>';
            echo '<td class="text-center">' . $row['Region'] . '</td>';
            echo '<td class="text-center">' . $row['Family'] . '</td>';
            echo '</tr>';
        }
      } else {
        echo '<div class="text-center">No results found for the selected hardiness type.</div>';
      }
    } else {
        echo '<div class="text-center">Please provide a Hardiness value.</div>';
    }
  }

        // Search by Lighting Reqirement
        if (isset($_POST['searchLightingRequirement'])) {
          if (isset($_POST['lightingRequirement'])) {
            $searchTerm = $_POST['lightingRequirement'];
        
            // Prepare the query to search for related content by Lighting Requirement
            $query = "SELECT * FROM plants WHERE Lighting_Requirement LIKE ?";
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
        
            // Display the search results for Lighting Requirement
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr class="table-row-lg">';
                echo '<td class="text-center"><img src="data:image/jpeg;base64,' . base64_encode($row['Image']) . '" alt="Plant Image"></td>';
                echo '<td class="text-center"><a href="CarpetalPlantsMoreResult.php?name=' . urlencode($row['Plant_Name']) . '">' . $row['Plant_Name'] . '</a></td>';
                echo '<td class="text-center">' . $row['Region'] . '</td>';
                echo '<td class="text-center">' . $row['Family'] . '</td>';
                echo '</tr>';
              }
            } else {
              echo '<div class="text-center">No results found for the selected lighting requirement.</div>';
            }
          } else {
            echo '<div class="text-center">Please provide a Lighting Requirement value.</div>';
          }
        }
        

        // Search by Category
        if (isset($_POST['searchCategory'])) {
          if (isset($_POST['category'])) {
            $searchTerm = $_POST['category'];
        
            // Prepare the query to search for related content by Category
            $query = "SELECT * FROM plants WHERE Category LIKE ?";
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
        
            // Display the search results for Category
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr class="table-row-lg">';
                echo '<td class="text-center"><img src="data:image/jpeg;base64,' . base64_encode($row['Image']) . '" alt="Plant Image"></td>';
                echo '<td class="text-center"><a href="CarpetalPlantsMoreResult.php?name=' . urlencode($row['Plant_Name']) . '">' . $row['Plant_Name'] . '</a></td>';
                echo '<td class="text-center">' . $row['Region'] . '</td>';
                echo '<td class="text-center">' . $row['Family'] . '</td>';
                echo '</tr>';
              }
            } else {
              echo '<tr><td colspan="4" class="text-center">No results found for the selected category.</td></tr>';
            }
          } else {
            echo '<div class="text-center">Please provide a Category value.</div>';
          }
        }
        
        // Search by Family
        if (isset($_POST['searchFamily'])) {
          if (isset($_POST['family'])) {
            $searchTerm = $_POST['family'];
        
            // Prepare the query to search for related content by Family
            $query = "SELECT * FROM plants WHERE Family LIKE ?";
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
        
            // Display the search results for Family
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr class="table-row-lg">';
                echo '<td class="text-center"><img src="data:image/jpeg;base64,' . base64_encode($row['Image']) . '" alt="Plant Image"></td>';
                echo '<td class="text-center"><a href="CarpetalPlantsMoreResult.php?name=' . urlencode($row['Plant_Name']) . '">' . $row['Plant_Name'] . '</a></td>';
                echo '<td class="text-center">' . $row['Region'] . '</td>';
                echo '<td class="text-center">' . $row['Family'] . '</td>';
                echo '</tr>';
              }
            } else {
              echo '<tr><td colspan="4" class="text-center">No results found for the selected family.</td></tr>';
            }
          } else {
            echo '<div class="text-center">Please provide a Family value.</div>';
          }
        }
        
        // Search by Genus
        if (isset($_POST['searchGenus'])) {
          if (isset($_POST['genus'])) {
            $searchTerm = $_POST['genus'];
        
            // Prepare the query to search for related content by Genus
            $query = "SELECT * FROM plants WHERE Genus LIKE ?";
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
        
            // Display the search results for Genus
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr class="table-row-lg">';
                echo '<td class="text-center"><img src="data:image/jpeg;base64,' . base64_encode($row['Image']) . '" alt="Plant Image"></td>';
                echo '<td class="text-center"><a href="CarpetalPlantsMoreResult.php?name=' . urlencode($row['Plant_Name']) . '">' . $row['Plant_Name'] . '</a></td>';
                echo '<td class="text-center">' . $row['Region'] . '</td>';
                echo '<td class="text-center">' . $row['Family'] . '</td>';
                echo '</tr>';
              }
            } else {
              echo '<tr><td colspan="4" class="text-center">No results found for the selected genus.</td></tr>';
            }
          } else {
            echo '<div class="text-center">Please provide a Genus value.</div>';
          }
        }
        

        // Search by Can be grown emersed
        if (isset($_POST['searchGrownEmersed'])) {
          if (isset($_POST['grownEmersed'])) {
            $searchTerm = $_POST['grownEmersed'];
        
            // Prepare the query to search for related content by Can be grown emersed
            $query = "SELECT * FROM plants WHERE Grown_Emersed LIKE ?";
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
        
            // Display the search results for Can be grown emersed
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr class="table-row-lg">';
                echo '<td class="text-center"><img src="data:image/jpeg;base64,' . base64_encode($row['Image']) . '" alt="Plant Image"></td>';
                echo '<td class="text-center"><a href="CarpetalPlantsMoreResult.php?name=' . urlencode($row['Plant_Name']) . '">' . $row['Plant_Name'] . '</a></td>';
                echo '<td class="text-center">' . $row['Region'] . '</td>';
                echo '<td class="text-center">' . $row['Family'] . '</td>';
                echo '</tr>';
              }
            } else {
              echo '<tr><td colspan="4" class="text-center">No results found for plants that can be grown emersed.</td></tr>';
            }
          } else {
            echo '<div class="text-center">Please provide a value for plants that can be grown emersed.</div>';
          }
        }
        

        // Search by Temperature
        if (isset($_POST['searchTemperature'])) {
          if (isset($_POST['temperature'])) {
            $searchTerm = $_POST['temperature'];
        
            // Prepare the query to search for related content by temperature
            $query = "SELECT * FROM plants WHERE Temperature LIKE ?";
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
        
            // Display the search results for temperature
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr class="table-row-lg">';
                echo '<td class="text-center"><img src="data:image/jpeg;base64,' . base64_encode($row['Image']) . '" alt="Plant Image"></td>';
                echo '<td class="text-center"><a href="CarpetalPlantsMoreResult.php?name=' . urlencode($row['Plant_Name']) . '">' . $row['Plant_Name'] . '</a></td>';
                echo '<td class="text-center">' . $row['Region'] . '</td>';
                echo '<td class="text-center">' . $row['Family'] . '</td>';
                echo '</tr>';
              }
            } else {
              echo '<tr><td colspan="4" class="text-center">No results found for the selected temperature.</td></tr>';
            }
          } else {
            echo '<div class="text-center">Please provide a temperature value.</div>';
          }
        }
        

        // Search by Aquascape Placement
        if (isset($_POST['searchAquascapePlacement'])) {
          if (isset($_POST['aquascapePlacement'])) {
            $searchTerm = $_POST['aquascapePlacement'];
        
            // Prepare the query to search for related content by Aquascape Placement
            $query = "SELECT * FROM plants WHERE Aquascape_Placement LIKE ?";
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
        
            // Display the search results for Aquascape Placement
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr class="table-row-lg">';
                echo '<td class="text-center"><img src="data:image/jpeg;base64,' . base64_encode($row['Image']) . '" alt="Plant Image"></td>';
                echo '<td class="text-center"><a href="CarpetalPlantsMoreResult.php?name=' . urlencode($row['Plant_Name']) . '">' . $row['Plant_Name'] . '</a></td>';
                echo '<td class="text-center">' . $row['Region'] . '</td>';
                echo '<td class="text-center">' . $row['Family'] . '</td>';
                echo '</tr>';
              }
            } else {
              echo '<tr><td colspan="4" class="text-center">No results found for the selected Aquascape Placement.</td></tr>';
            }
          } else {
            echo '<div class="text-center">Please provide a value for Aquascape Placement.</div>';
          }
        }
        

        // Search by Plant Type
        if (isset($_POST['searchPlantType'])) {
          if (isset($_POST['plantType'])) {
            $searchTerm = $_POST['plantType'];
        
            // Prepare the query to search for related content by Plant Type
            $query = "SELECT * FROM plants WHERE Plant_Type LIKE ?";
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
        
            // Display the search results for Plant Type
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr class="table-row-lg">';
                echo '<td class="text-center"><img src="data:image/jpeg;base64,' . base64_encode($row['Image']) . '" alt="Plant Image"></td>';
                echo '<td class="text-center"><a href="CarpetalPlantsMoreResult.php?name=' . urlencode($row['Plant_Name']) . '">' . $row['Plant_Name'] . '</a></td>';
                echo '<td class="text-center">' . $row['Region'] . '</td>';
                echo '<td class="text-center">' . $row['Family'] . '</td>';
                echo '</tr>';
              }
            } else {
              echo '<tr><td colspan="4" class="text-center">No results found for the selected Plant Type.</td></tr>';
            }
          } else {
            echo '<div class="text-center">Please provide a value for Plant Type.</div>';
          }
        }
        
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

</body>
</html>
