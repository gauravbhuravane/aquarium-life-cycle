

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tropical Fish Results</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <style>
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

.nav-link.active {
       font-weight: bold; /* Example: make the text bold */
       color: #007bff; /* Example: change the text color to blue */
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
          <th class="text-center">Fish Name</th>
          <th class="text-center">Binomial Name</th>
          <th class="text-center">Family</th>
        </tr>
      </thead>
      <tbody>
        
      <?php
    require_once('db.php');

    if (isset($_POST['searchAquaticType'])) {
      if (isset($_POST['aquaticType'])) {
      $searchTerm = $_POST['aquaticType'];

      // Prepare the query to search for related content by aquatic type
      $query = "SELECT * FROM fishes WHERE Aquatic_Type LIKE ?";
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

      // Display the search results for aquatic type
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo '<tr class="table-row-lg">';
          echo '<td class="text-center"><img src="data:image/jpeg;base64,' . base64_encode($row['Image']) . '" alt="Fish Image"></td>';
          echo '<td class="text-center"><a href="TropicalFishMoreResult.php?name=' . urlencode($row['Fish_Name']) . '">' . $row['Fish_Name'] . '</a></td>';
          echo '<td class="text-center">' . $row['Binomial_Name'] . '</td>';
          echo '<td class="text-center">' . $row['Family'] . '</td>';
          echo '</tr>';
        }

        
      } else {
        echo '<div class="text-center">No results found for the selected aquatic type.</div>';
      }
    } else {
        echo '<div class="text-center">Please provide a aquatic type value.</div>';
    }
  }

    // Search by Aquatic Type
    // if (isset($_POST['searchAquaticType'])) {
    //   $searchTerm = $_POST['aquaticType'];

    //   // Prepare the query to search for related content by aquatic type
    //   $query = "SELECT * FROM fishes WHERE Aquatic_Type LIKE ?";
    //   $stmt = mysqli_prepare($con, $query);
    //   if (!$stmt) {
    //     die("Statement preparation error: " . mysqli_error($con));
    //   }
    //   $searchTerm = '%' . $searchTerm . '%';
    //   mysqli_stmt_bind_param($stmt, "s", $searchTerm);
    //   mysqli_stmt_execute($stmt);
    //   if (mysqli_stmt_errno($stmt)) {
    //     die("Statement execution error: " . mysqli_stmt_error($stmt));
    //   }
    //   $result = mysqli_stmt_get_result($stmt);
    //   if (!$result) {
    //     die("Result set retrieval error: " . mysqli_error($con));
    //   }

    //   // Display the search results for aquatic type
    //   if (mysqli_num_rows($result) > 0) {
    //     while ($row = mysqli_fetch_assoc($result)) {
    //     //  $fishId = $row['fishId']; // Retrieve the fishId from the database
    //       // Display the fish details
    //      echo '<tr class="table-row-lg">';
    //      echo '<td class="text-center"><img src="data:image/jpeg;base64,' . base64_encode($row['Image']) . '" alt="Fish Image"></td>';
    //      echo '<td class="text-center"><a href="TropicalFishMoreResult.php?name=' . urlencode($row['Fish_Name']) . '">' . $row['Fish_Name'] . '</a></td>';
    //      echo '<td class="text-center">' . $row['Binomial_Name'] . '</td>';
    //      echo '<td class="text-center">' . $row['Family'] . '</td>';
    //      echo '</tr>';
    //     }
    //   } else {
    //     echo '<tr><td colspan="6" class="text-center">No results found for aquatic type.</td></tr>';
    //   }
    // }

    if (isset($_POST['searchBreedingCapacity'])) {
      if (isset($_POST['breedingCapacity'])){
      $searchTerm = $_POST['breedingCapacity'];
  
      // Prepare the query to search for related content by breeding capacity
      $query = "SELECT * FROM fishes WHERE Breeding_Capacity = ?";
      $stmt = mysqli_prepare($con, $query);
      if (!$stmt) {
          die("Statement preparation error: " . mysqli_error($con));
      }
  
      mysqli_stmt_bind_param($stmt, "s", $searchTerm);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if (!$result) {
          die("Result set retrieval error: " . mysqli_error($con));
      }
  
      // Display the search results for breeding capacity
      if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
              echo '<tr class="table-row-lg">';
              echo '<td class="text-center"><img src="data:image/jpeg;base64,' . base64_encode($row['Image']) . '" alt="Fish Image"></td>';
              echo '<td class="text-center"><a href="TropicalFishMoreResult.php?name=' . urlencode($row['Fish_Name']) . '">' . $row['Fish_Name'] . '</a></td>';
              echo '<td class="text-center">' . $row['Binomial_Name'] . '</td>';
              echo '<td class="text-center">' . $row['Family'] . '</td>';
              echo '</tr>';
          }
      } else {
          echo '<div class="text-center">No results found for the selected breeding capacity.</div>';
        }
      } else {
          echo '<div class="text-center">Please provide a breeding capacity value.</div>';
      }
    }

        // Search by Breeding Capacity
      //   if (isset($_POST['searchBreedingCapacity'])) {
      //     $searchTerm = $_POST['breedingCapacity'];
      
      //     // Prepare the query to search for related content by breeding capacity
      //     $query = "SELECT * FROM fishes WHERE Breeding_Capacity = ?";
      //     $stmt = mysqli_prepare($con, $query);
      //     if (!$stmt) {
      //         die("Statement preparation error: " . mysqli_error($con));
      //     }
      
      //     mysqli_stmt_bind_param($stmt, "i", $searchTerm);
      //     mysqli_stmt_execute($stmt);
      //     $result = mysqli_stmt_get_result($stmt);
      //     if (!$result) {
      //         die("Result set retrieval error: " . mysqli_error($con));
      //     }
      
      //     // Display the search results for breeding capacity
      //     if (mysqli_num_rows($result) > 0) {
      //         echo '<table>'; // Start your table here
      //         echo '<tr><th>Image</th><th>Fish Name</th><th>Binomial Name</th><th>Family</th></tr>'; // Table header
      //         while ($row = mysqli_fetch_assoc($result)) {
      //             echo '<tr class="table-row-lg">';
      //             echo '<td class="text-center"><img src="data:image/jpeg;base64,' . base64_encode($row['Image']) . '" alt="Fish Image"></td>';
      //             echo '<td class="text-center"><a href="TropicalFishMoreResult.php?name=' . urlencode($row['Fish_Name']) . '">' . $row['Fish_Name'] . '</a></td>';
      //             echo '<td class="text-center">' . $row['Binomial_Name'] . '</td>';
      //             echo '<td class="text-center">' . $row['Family'] . '</td>';
      //             echo '</tr>';
      //         }
      //         echo '</table>'; // End your table here
      //     } else {
      //         echo '<div class="text-center">No results found for the selected breeding capacity.</div>';
      //     }
      // }

        // Search by pH Control
        if (isset($_POST['searchPHControl'])) {
          if (isset($_POST['phControl'])) {
          $searchTerm = $_POST['phControl'];

          // Prepare the query to search for related content by pH Control
      $query = "SELECT * FROM fishes WHERE pH_Control = ?";
      $stmt = mysqli_prepare($con, $query);
      if (!$stmt) {
          die("Statement preparation error: " . mysqli_error($con));
      }
  
      mysqli_stmt_bind_param($stmt, "s", $searchTerm);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if (!$result) {
          die("Result set retrieval error: " . mysqli_error($con));
      }
  
      // Display the search results for breeding capacity
      if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
              echo '<tr class="table-row-lg">';
              echo '<td class="text-center"><img src="data:image/jpeg;base64,' . base64_encode($row['Image']) . '" alt="Fish Image"></td>';
              echo '<td class="text-center"><a href="TropicalFishMoreResult.php?name=' . urlencode($row['Fish_Name']) . '">' . $row['Fish_Name'] . '</a></td>';
              echo '<td class="text-center">' . $row['Binomial_Name'] . '</td>';
              echo '<td class="text-center">' . $row['Family'] . '</td>';
              echo '</tr>';
          }
      } else {
          echo '<div class="text-center">No results found for the selected pH Control.</div>';
        }
      } else {
          echo '<div class="text-center">Please provide a pH Control value.</div>';
      }
    }

        // Search by Length of Fish
        if (isset($_POST['searchLengthOfFish'])) {
          if (isset($_POST['lengthOfFish'])) {
          $searchTerm = $_POST['lengthOfFish'];

          // Prepare the query to search for related content by length of fish
          $query = "SELECT * FROM fishes WHERE Length_Of_Fish = ?";
          $stmt = mysqli_prepare($con, $query);
          if (!$stmt) {
              die("Statement preparation error: " . mysqli_error($con));
          }
      
          mysqli_stmt_bind_param($stmt, "s", $searchTerm);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          if (!$result) {
              die("Result set retrieval error: " . mysqli_error($con));
          }
      
          // Display the search results for length of fish
          if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                  echo '<tr class="table-row-lg">';
                  echo '<td class="text-center"><img src="data:image/jpeg;base64,' . base64_encode($row['Image']) . '" alt="Fish Image"></td>';
                  echo '<td class="text-center"><a href="TropicalFishMoreResult.php?name=' . urlencode($row['Fish_Name']) . '">' . $row['Fish_Name'] . '</a></td>';
                  echo '<td class="text-center">' . $row['Binomial_Name'] . '</td>';
                  echo '<td class="text-center">' . $row['Family'] . '</td>';
                  echo '</tr>';
              }
          } else {
              echo '<div class="text-center">No results found for the selected length of fish.</div>';
          }
            } else {
              echo '<div class="text-center">Please provide a length of fish value.</div>';
          }
        }


        // Search by Class
        if (isset($_POST['searchFishClass'])) {
          if (isset($_POST['fishClass'])) {
          $searchTerm = $_POST['fishClass'];

          // Prepare the query to search for related content by class
          $query = "SELECT * FROM fishes WHERE Class = ?";
          $stmt = mysqli_prepare($con, $query);
          if (!$stmt) {
              die("Statement preparation error: " . mysqli_error($con));
          }
      
          mysqli_stmt_bind_param($stmt, "s", $searchTerm);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          if (!$result) {
              die("Result set retrieval error: " . mysqli_error($con));
          }
      
          // Display the search results for class
          if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                  echo '<tr class="table-row-lg">';
                  echo '<td class="text-center"><img src="data:image/jpeg;base64,' . base64_encode($row['Image']) . '" alt="Fish Image"></td>';
                  echo '<td class="text-center"><a href="TropicalFishMoreResult.php?name=' . urlencode($row['Fish_Name']) . '">' . $row['Fish_Name'] . '</a></td>';
                  echo '<td class="text-center">' . $row['Binomial_Name'] . '</td>';
                  echo '<td class="text-center">' . $row['Family'] . '</td>';
                  echo '</tr>';
              }
          } else {
              echo '<div class="text-center">No results found for the selected class.</div>';
            }
          } else {
            echo '<div class="text-center">Please provide a class value.</div>';
        }
      }


     
      if (isset($_POST['searchkHControl'])) {
          if (isset($_POST['khControl'])) {
              $searchTerm = $_POST['khControl'];
      
              // Prepare the query to search for related content by kH control
              $query = "SELECT * FROM fishes WHERE kH_Control = ?";
              $stmt = mysqli_prepare($con, $query);
              if (!$stmt) {
                  die("Statement preparation error: " . mysqli_error($con));
              }
      
              mysqli_stmt_bind_param($stmt, "s", $searchTerm);
              mysqli_stmt_execute($stmt);
              $result = mysqli_stmt_get_result($stmt);
              if (!$result) {
                  die("Result set retrieval error: " . mysqli_error($con));
              }
      
              // Display the search results for kH control
              if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                      echo '<tr class="table-row-lg">';
                      echo '<td class="text-center"><img src="data:image/jpeg;base64,' . base64_encode($row['Image']) . '" alt="Fish Image"></td>';
                      echo '<td class="text-center"><a href="TropicalFishMoreResult.php?name=' . urlencode($row['Fish_Name']) . '">' . $row['Fish_Name'] . '</a></td>';
                      echo '<td class="text-center">' . $row['Binomial_Name'] . '</td>';
                      echo '<td class="text-center">' . $row['Family'] . '</td>';
                      echo '</tr>';
                  }
              } else {
                  echo '<div class="text-center">No results found for the selected kH control.</div>';
              }
          } else {
              echo '<div class="text-center">Please provide a kH control value.</div>';
          }
      }
     
      


        // Search by Temperature
        if (isset($_POST['searchTemperature'])) {
          if (isset($_POST['temperature'])) {
          $searchTerm = $_POST['temperature'];

          // Prepare the query to search for related content by temperature
          $query = "SELECT * FROM fishes WHERE Temperature = ?";
          $stmt = mysqli_prepare($con, $query);
          if (!$stmt) {
              die("Statement preparation error: " . mysqli_error($con));
          }
      
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
                  echo '<td class="text-center"><img src="data:image/jpeg;base64,' . base64_encode($row['Image']) . '" alt="Fish Image"></td>';
                  echo '<td class="text-center"><a href="TropicalFishMoreResult.php?name=' . urlencode($row['Fish_Name']) . '">' . $row['Fish_Name'] . '</a></td>';
                  echo '<td class="text-center">' . $row['Binomial_Name'] . '</td>';
                  echo '<td class="text-center">' . $row['Family'] . '</td>';
                  echo '</tr>';
              }
          } else {
              echo '<div class="text-center">No results found for the selected temperature.</div>';
            }
          } else {
              echo '<div class="text-center">Please provide a temperature value.</div>';
          }
      }


        // Search by Family
        if (isset($_POST['searchFamily'])) {
          if (isset($_POST['family'])) {
          $searchTerm = $_POST['family'];

          // Prepare the query to search for related content by family
          $query = "SELECT * FROM fishes WHERE Family = ?";
          $stmt = mysqli_prepare($con, $query);
          if (!$stmt) {
              die("Statement preparation error: " . mysqli_error($con));
          }
      
          mysqli_stmt_bind_param($stmt, "s", $searchTerm);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          if (!$result) {
              die("Result set retrieval error: " . mysqli_error($con));
          }
      
          // Display the search results for family
          if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                  echo '<tr class="table-row-lg">';
                  echo '<td class="text-center"><img src="data:image/jpeg;base64,' . base64_encode($row['Image']) . '" alt="Fish Image"></td>';
                  echo '<td class="text-center"><a href="TropicalFishMoreResult.php?name=' . urlencode($row['Fish_Name']) . '">' . $row['Fish_Name'] . '</a></td>';
                  echo '<td class="text-center">' . $row['Binomial_Name'] . '</td>';
                  echo '<td class="text-center">' . $row['Family'] . '</td>';
                  echo '</tr>';
              }
          } else {
              echo '<div class="text-center">No results found for the selected family.</div>';
            }
          } else {
              echo '<div class="text-center">Please provide a family value.</div>';
          }
      }


        // Search by Tank Environment
        if (isset($_POST['searchTankEnvironment'])) {
          if (isset($_POST['tankEnvironment'])) {
          $searchTerm = $_POST['tankEnvironment'];

          // Prepare the query to search for related content by tank environment
          $query = "SELECT * FROM fishes WHERE Tank_Environment = ?";
          $stmt = mysqli_prepare($con, $query);
          if (!$stmt) {
              die("Statement preparation error: " . mysqli_error($con));
          }
      
          mysqli_stmt_bind_param($stmt, "s", $searchTerm);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          if (!$result) {
              die("Result set retrieval error: " . mysqli_error($con));
          }
      
          // Display the search results for tank environment
          if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                  echo '<tr class="table-row-lg">';
                  echo '<td class="text-center"><img src="data:image/jpeg;base64,' . base64_encode($row['Image']) . '" alt="Fish Image"></td>';
                  echo '<td class="text-center"><a href="TropicalFishMoreResult.php?name=' . urlencode($row['Fish_Name']) . '">' . $row['Fish_Name'] . '</a></td>';
                  echo '<td class="text-center">' . $row['Binomial_Name'] . '</td>';
                  echo '<td class="text-center">' . $row['Family'] . '</td>';
                  echo '</tr>';
              }
          } else {
              echo '<div class="text-center">No results found for the selected tank environment.</div>';
            }
          } else {
              echo '<div class="text-center">Please provide a tank environment value.</div>';
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

</body>
</html>
