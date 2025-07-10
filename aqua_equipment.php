<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tropical Fish</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Your additional custom CSS styles here */

    /* Style for the hero image */
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

    .sticky-footer{
      margin-top: 200px;
    }

    /* .hero-image {
      width: 100%;
      height: 400px;
      background-image: url('path-to-your-hero-image.jpg');
      background-size: cover;
      background-position: center;
      display: flex;
      justify-content: center;
      align-items: center;
      color: #fff;
      text-align: center;
    } */

    .card-body {
    height: 420px; /* Adjust the height as needed */
    overflow-y: auto; /* Add scroll if content overflows */
  }

    /* Add some padding to the content */
    .content-section {
      padding: 50px;
    }

    /* Style for equipment icons */
    .equipment-icon {
      font-size: 40px;
      color: #007BFF;
    }

    /* Style for equipment name */
    .equipment-name {
      color: #007BFF;
    }

    h1{
      text-align: center;
      margin-top: 50px;
    }

    

     * CSS for the animation container and positioning */
.animation-container {
  position: relative;
  overflow: hidden;
  width: 100%;
  height: 100vh; /* Adjust this value to match your desired height */
}

/* CSS for the green screen video animation */
.green-screen-video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 166%;
  object-fit: cover; /* Ensures the video covers the entire container */
  opacity: 0.6; /* Adjust the opacity as needed to make it look good with the cards */
  z-index: -1; /* Push the video behind the cards */
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

.footer-paragraph {
    margin: 0;
    white-space: normal; /* Add this line to allow wrapping of text */
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


  <!-- Hero Image Section -->
  <section class="hero-image">
    <h1>Explore Aquarium Equipments</h1>
  </section>

  <style>
  .card-body {
    height: 300px; /* Adjust the height as needed */
    overflow-y: auto; /* Add scroll if content overflows */
  }
</style>

<!-- Container for the green screen video animation -->
<div class="animation-container">
    <!-- Green screen video animation element -->
    <video class="green-screen-video" autoplay loop muted playsinline>
      <source src="videos/fishvid.mp4" type="video/mp4">
      <!-- Add more video sources for cross-browser compatibility if needed -->
    </video>

<!-- Equipment Cards Section -->
<section class="content-section">
  <div class="container">
    <div class="row">

      <!-- Filtration Systems -->
      <div class="col-md-4">
        <!-- Use Bootstrap's Collapse component -->
        <div class="card mb-4 shadow-sm">
          <div class="card-body" data-bs-toggle="collapse" href="#filtrationInfo" role="button" aria-expanded="false"
            aria-controls="filtrationInfo">
            <i class="fa fa-fw fa-3x fa-filter equipment-icon"></i>
            <h4 class="equipment-name">Filtration Systems</h4>
            <p class="card-text">
              Filtration is crucial for maintaining a healthy aquarium environment. It helps keep the water clean, clear, and free
              from harmful substances, providing a conducive habitat for your fish and plants to thrive. There are three main types
              of filtration systems:
            </p>
          </div>
          <!-- Collapsible content -->
          <div id="filtrationInfo" class="collapse">
            <div class="card-body">
              <!-- Mechanical Filtration -->
              <div class="mb-3">
                <img src="images/mechanicalfilter.jpg" alt="Mechanical Filtration" class="img-fluid">
                <strong>Mechanical Filtration:</strong>
                <p>
                  This type of filtration removes debris and particles from the water using filter media like sponges or floss.
                  It prevents visible impurities from clouding the water and clogging other filter components.
                </p>
              </div>
              <!-- Biological Filtration -->
              <div class="mb-3">
                <img src="images/biologicalfilter.jpg" alt="Biological Filtration" class="img-fluid"><br>
                <strong>Biological Filtration:</strong>
                <p>
                  Biological filtration is responsible for breaking down harmful ammonia and nitrite produced by fish waste into less toxic nitrate.
                  Beneficial bacteria colonize in the filter media, providing a natural way to maintain water quality.
                </p>
              </div>
              <!-- Chemical Filtration -->
              <div class="mb-3">
                <img src="images/chemicalfilter.jpg" alt="Chemical Filtration" class="img-fluid">
                <strong>Chemical Filtration:</strong>
                <p>
                  Chemical filtration uses chemical media like activated carbon or resins to remove dissolved impurities and toxins from the water.
                  It helps in removing odors, discoloration, and pollutants.
                </p>
              </div>
              <p class="card-text">
                To ensure effective filtration, choose a filter suitable for your aquarium's size and consider the needs of the fish and plants you have.
                Regular maintenance of the filtration system, such as cleaning or replacing filter media, is essential for optimal performance.
                Remember that a well-maintained filtration system is key to a healthy and thriving aquarium ecosystem.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Add more equipment cards here as needed -->

      <!-- Heating and Lighting -->
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <div class="card-body" data-bs-toggle="collapse" href="#heatingLightingInfo" role="button"
            aria-expanded="false" aria-controls="heatingLightingInfo">
            <i class="fa fa-fw fa-3x fa-lightbulb equipment-icon"></i>
            <h4 class="equipment-name">Heating and Lighting</h4>
            <p class="card-text">
              Create an ideal environment for your aquatic friends by understanding the importance of proper heating and
              lighting. Explore different heaters and lighting options to provide the right temperature and a natural day-night
              cycle for your fish and plants.
            </p>
          </div>
          <!-- Collapsible content -->
          <div id="heatingLightingInfo" class="collapse">
            <div class="card-body">
              <!-- Heating Image -->
              <div class="mb-3">
                <img src="images/aquariumheater.jpg" alt="Aquarium Heating" class="img-fluid">
                <strong>Heating:</strong>
                <p>
                  Fish and plants have specific temperature requirements for optimal health. Choose a reliable aquarium heater that can
                  maintain a stable temperature within the desired range. A heater with a thermostat is essential to prevent overheating
                  or freezing the water.
                </p>
              </div>
              <!-- Lighting Image -->
              <div class="mb-3">
                <img src="images/aquariumlight.jpg" alt="Aquarium Lighting" class="img-fluid"><br>
                <strong>Lighting:</strong>
                <p>
                  Providing the right amount and type of lighting is essential for the growth of plants and the well-being of fish. LED
                  lights are popular due to their energy efficiency and customizable features, allowing you to create a natural
                  day-night cycle for your aquatic ecosystem.
                </p>
              </div>
              <p class="card-text">
                Remember to monitor the temperature and lighting duration regularly to ensure they align with the needs of your fish and
                plants. Consistency in lighting and temperature helps maintain a stress-free environment, encouraging healthy growth and
                behavior.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Water Testing Tools -->
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <div class="card-body" data-bs-toggle="collapse" href="#waterTestingInfo" role="button"
            aria-expanded="false" aria-controls="waterTestingInfo">
            <i class="fa fa-fw fa-3x fa-water equipment-icon"></i>
            <h4 class="equipment-name">Water Testing Tools</h4>
            <p class="card-text">
              Monitoring water parameters is essential to ensure a thriving aquarium. Discover various water testing kits and tools
              to keep track of pH, ammonia, nitrite, nitrate, and more. Regular testing and maintenance will keep your aquarium
              inhabitants happy and healthy.
            </p>
          </div>
          <!-- Collapsible content -->
          <div id="waterTestingInfo" class="collapse">
            <div class="card-body">
              <!-- pH Testing Image -->
              <div class="mb-3">
                <img src="images\phtesting.jpg" alt="pH Testing" class="img-fluid"><br>
                <strong>pH Testing:</strong>
                <p>
                  Monitoring pH levels helps ensure that the water is within the appropriate range for your fish and plants. Different
                  species have different pH preferences, so it's essential to know their specific requirements.
                </p>
              </div>
              <!-- Ammonia, Nitrite, and Nitrate Testing Image -->
              <div class="mb-3">
                <img src="images\ammoniatest.jpg" alt="Ammonia, Nitrite, and Nitrate Testing" class="img-fluid"><br>
                <strong>Ammonia, Nitrite, and Nitrate Testing:</strong>
                <p>
                  These parameters are indicators of the water's overall quality. Elevated ammonia and nitrite levels can be harmful to
                  fish, while high nitrate levels can lead to algae growth. Regular testing allows you to take corrective actions if
                  needed.
                </p>
              </div>
              <!-- Other Water Parameters Image -->
              <div class="mb-3">
                <img src="images\otherwaterparameter.jpg" alt="Other Water Parameters" class="img-fluid"><br>
                <strong>Other Water Parameters:</strong>
                <p>
                  Depending on your aquarium setup, you may need to monitor additional parameters like dissolved oxygen, carbonate
                  hardness, and phosphate. These parameters also play a role in the well-being of your aquatic pets.
                </p>
              </div>
              <p class="card-text">
                Use reliable water testing kits and tools to ensure accurate results. Regular testing and maintenance, along with proper
                water changes, will help create a stable and healthy environment for your fish and plants to thrive.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Water Pumps -->
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <div class="card-body" data-bs-toggle="collapse" href="#waterPumpsInfo" role="button" aria-expanded="false"
            aria-controls="waterPumpsInfo">
            <i class="fa fa-fw fa-3x fa-tint equipment-icon"></i>
            <h4 class="equipment-name">Water Pumps</h4>
            <p class="card-text">
              <strong>Water pumps are essential</strong> for creating water movement and circulation in the aquarium. They help distribute
              nutrients and oxygen to plants and prevent stagnation, improving water quality and supporting fish health.
            </p>
          </div>
          <!-- Collapsible content -->
          <div id="waterPumpsInfo" class="collapse">
            <div class="card-body">
              <!-- Types of Water Pumps -->
              <p class="card-text">
                <strong>Types of Water Pumps:</strong>
              </p>
              <ul>
                <li>
                  <strong>Submersible Water Pump:</strong>
                  <img src="images\submersiblepump.jpg" alt="Submersible Water Pump" style="max-width: 100%;">
                  Submersible water pumps are highly accurate and provide real-time temperature readings directly from the water. They are easy to read and give precise measurements, making them a popular choice for most aquarium hobbyists.
                </li>
                <li>
                  <strong>In-line Water Pump:</strong>
                  <img src="images\inlinepump.jpg" alt="In-line Water Pump" style="max-width: 100%;">
                  In-line water pumps are installed outside the aquarium and connected to the tank via tubing. They offer more power and flexibility in flow rates and are suitable for larger aquariums or systems with higher water volume requirements. In-line pumps are often used in more complex setups that require external filtration or water circulation.
                </li>
                <li>
                  <strong>DC Water Pump:</strong>
                  <img src="images\dcmotor.jpg" alt="DC Water Pump" style="max-width: 100%;">
                  DC water pumps are powered by direct current (DC) and offer energy efficiency and controllability. They allow you to adjust the flow rate and customize water movement patterns. DC pumps are suitable for aquariums where precise flow control is required and are known for their quiet operation and low energy consumption.
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Aquarium Decorations -->
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <div class="card-body" data-bs-toggle="collapse" href="#decorationsInfo" role="button" aria-expanded="false"
            aria-controls="decorationsInfo">
            <i class="fa fa-fw fa-3x fa-couch equipment-icon"></i>
            <h4 class="equipment-name">Aquarium Decorations</h4>
            <p class="card-text">
              <strong>Decorations add beauty and functionality</strong> to the aquarium. They provide hiding spots for fish, create
              territories, and enhance the overall aesthetics of the tank.
            </p>
          </div>
          <!-- Collapsible content -->
          <div id="decorationsInfo" class="collapse">
            <div class="card-body">
              <p class="card-text">
                <strong>Choose decorations that are safe for aquarium use</strong> and won't leach harmful substances into the water.
                Popular options include driftwood, rocks, artificial plants, and ceramic ornaments. Create a natural and visually appealing
                environment that mimics the fish's natural habitat.
              </p>
              <p class="card-text">
                <strong>Arrange the decorations thoughtfully</strong> to provide hiding spots for shy fish and create distinct territories
                for aggressive species. Rocks and caves can also serve as breeding sites for certain fish.
              </p>
              <p class="card-text">
                <strong>Regularly clean the decorations</strong> to prevent the buildup of algae and debris. Remove any decaying plant
                matter or uneaten food that may accumulate around the decorations to maintain water quality.
              </p>
              <p class="card-text">
                <strong>Rotate the decorations occasionally</strong> to prevent excessive wear and tear on specific spots in the tank.
                Changing the layout can also provide mental stimulation for the fish, preventing boredom and stress.
              </p>
              <p class="card-text">
                <strong>By choosing the right decorations</strong> and arranging them thoughtfully, you can create an attractive and
                stimulating environment for your fish, supporting their natural behaviors and improving their overall well-being.
              </p>
              <!-- Best Types of Aquarium Decorations -->
              <h5 class="card-title">Best Types of Aquarium Decorations</h5>
              <ul>
                <li>
                  <strong>Live Plants:</strong> Live aquatic plants are considered one of the best decorations for an aquarium. They not only add a
                  natural and aesthetically pleasing look but also provide numerous benefits. Live plants help oxygenate the water, absorb harmful
                  chemicals, and provide hiding places and grazing areas for fish. They also contribute to the overall ecosystem's health by reducing
                  algae growth and providing a more natural habitat for aquatic life.
                  <img src="images\liveplants.jpg" alt="Live Plants" style="width: 200px; height: 150px;">
                </li>
                <li>
                  <strong>Aquascaping Elements (Rocks and Wood):</strong> Incorporating natural elements like rocks, stones, and driftwood into your
                  aquarium can create a beautiful and captivating aquascape. These elements not only add visual appeal but also serve as functional
                  hiding places and territories for fish. Aquascaping allows you to design unique underwater landscapes and recreate natural
                  environments, enhancing the well-being of your aquatic pets.<br>
                  <img src="images\rocksandwood.jpg" alt="Aquascaping Elements" style="width: 200px; height: 150px;">
                </li>
                <li>
                  <strong>Caves and Hideouts:</strong> Providing caves and hideouts is essential, especially for species that are shy or territorial.
                  Caves and hiding spots offer a sense of security for fish, reduce stress, and encourage natural behaviors. You can choose artificial
                  caves or use natural materials like coconut shells or clay pots to create safe retreats for your fish.<br>
                  <img src="images\caves.jpg" alt="Caves and Hideouts" style="width: 200px; height: 150px;">
                </li>
              </ul>

            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <div class="card-body" data-bs-toggle="collapse" href="#thermometersInfo" role="button" aria-expanded="false"
            aria-controls="thermometersInfo">
            <i class="fa fa-fw fa-3x fa-thermometer-half equipment-icon"></i>
            <h4 class="equipment-name">Aquarium Thermometers</h4>
            <p class="card-text">
              <strong>Monitoring the water temperature</strong> is crucial for the well-being of your aquarium inhabitants. Thermometers
              help ensure the water stays within the appropriate range for the fish and plants.
            </p>
          </div>
          <!-- Collapsible content -->
          <div id="thermometersInfo" class="collapse">
            <div class="card-body">
              <p class="card-text">
                <strong>Choose a reliable thermometer</strong> that can be easily read and placed at different depths in the aquarium.
                Digital and floating thermometers are common options. Some advanced thermometers come with remote probes that allow you to
                monitor the temperature at specific locations in the tank.
              </p>
              <p class="card-text">
                <strong>Place the thermometer in a central location</strong> away from direct sunlight, heaters, and water pumps, as these
                factors can affect the accuracy of the readings.
              </p>
              <p class="card-text">
                <strong>Regularly check the temperature</strong> and make adjustments as needed to maintain a stable and comfortable
                environment for your aquatic pets. Rapid temperature fluctuations can stress the fish and compromise their immune system.
              </p>
              <p class="card-text">
                <strong>Use a heater or chiller</strong> if necessary to maintain the desired water temperature, especially in tropical
                aquariums where stable warm temperatures are essential for the health of the fish and plants.
              </p>
              <p class="card-text">
                <strong>By monitoring and controlling the water temperature</strong>, you can create a stable and stress-free environment
                for your aquarium inhabitants, supporting their overall health and vitality.
              </p>
              <p class="card-text">
                <strong>Types of Aquarium Thermometers:</strong>
              </p>
              <ul>
                <li>
                  <strong>Submersible Thermometer:</strong>
                  <img src="images\subthermo.jpg" alt="Submersible Thermometer"><br>
                  Submersible thermometers are highly accurate and provide real-time temperature readings directly from the water. They are easy to read and give precise measurements, making them a popular choice for most aquarium hobbyists.
                </li>
                <li>
                  <strong>Digital Thermometer:</strong>
                  <img src="images\digithermo.jpg" alt="Digital Thermometer"><br>
                  Digital thermometers use electronic sensors to measure water temperature. They often come with a probe that can be submerged in the water for accurate readings. Digital thermometers are easy to read and provide quick and precise measurements.
                </li>
                <li>
                  <strong>Strip Thermometer:</strong>
                  <img src="images\stripthermo.jpg" alt="Strip Thermometer"><br>
                  Strip thermometers are easy-to-use adhesive strips that are placed on the outside of the aquarium glass. They provide a quick and simple way to monitor the water temperature and are suitable for basic temperature checks.
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div id="fishAnimationContainer">
    <!-- Fish images will be added here -->
  </div>
</section>


  <!-- Additional Equipment Cards Section -->
  <!-- Add more cards here as needed -->

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
  

  <!-- Link to Bootstrap JS and Popper.js (required for some Bootstrap features) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- ... Your existing HTML code ... -->

<!-- JavaScript to generate fish elements -->
<!-- <script>
  document.addEventListener('DOMContentLoaded', function () {
    const fishContainer = document.getElementById('fishAnimationContainer');

    // Fish images to use in the animation
    const fishImages = [
      'images/2-PhotoRoom.png',
      'images/fish-png-7-PhotoRoom.png',
      'images/2-PhotoRoom.png',
    ];

    // Number of fish to create
    const numFish = 3;

    for (let i = 0; i < numFish; i++) {
      // Randomly select a fish image
      const randomFishIndex = Math.floor(Math.random() * fishImages.length);
      const fishImageSrc = fishImages[randomFishIndex];

      // Create a new fish element
      const fishElement = document.createElement('img');
      fishElement.src = fishImageSrc;
      fishElement.className = 'fish';

      // Set the fish size and position
      const fishSize = Math.floor(Math.random() * 80) + 50; // Increase the size range if needed
      fishElement.style.width = `${fishSize}px`;
      fishElement.style.top = `${Math.random() * 100}%`;
      fishElement.style.left = `${Math.random() * 100}%`; // Set initial horizontal position
      fishElement.style.animationDuration = `${Math.random() * 10 + 5}s`;

      // Append the fish element to the fish container
      fishContainer.appendChild(fishElement);
    }
  });
</script> -->
</body>

</html>
