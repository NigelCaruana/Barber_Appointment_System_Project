<!DOCTYPE html>
<html>
  <head>
      <title>Style</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
      <link rel="stylesheet" type="text/css" href="css/main.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  </head>
  <body>

  <!-- Navbar -->
  <div class="w3-top">
    <div class="w3-bar w3-large w3-black w3-card">
      <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="toggleMenu()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
      <a href="index.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
      <a href="#barbers" class="w3-bar-item w3-button w3-padding-large w3-hide-small">OUR TEAM</a>
      <a href="#products" class="w3-bar-item w3-button w3-padding-large w3-hide-small">PRODUCTS</a>
      <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
      <a href="form.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">BOOK NOW</a>
    </div>
  </div>

  <!-- Navbar on small screens -->
  <div id="navSmall" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#barbers" class="w3-bar-item w3-button w3-padding-large">OUR TEAM</a>
    <a href="#products" class="w3-bar-item w3-button w3-padding-large">PRODUCTS</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large">CONTACT</a>
    <a href="form.php" class="w3-bar-item w3-button w3-padding-large">BOOK NOW</a>
  </div>

  <!-- Page content -->
  <div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!--Carousel-->
  <div id="carousel-active" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img id="img" src="images/img1.jpg"> <!--give a class insert style in main page-->
      </div>
      <div class="carousel-item">
        <img id="img" src="images/img2.jpg">  <!--give a class insert style in main page--> 
      </div>
      <div class="carousel-item">
        <img id="img" src="images/img3.jpg">   <!-- give a class and insert style in main page-->
      </div>
      <br><br><br><br><br><br>
    </div>
    <a class="carousel-control-prev" href="#carousel-active" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#carousel-active" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div> 

    <!-- The Hairdressers Section Section -->
    <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:1300px" id="barbers">
      <h2 class="w3-wide">Our Team</h2>
      <p class="w3-opacity"><i>We give you style</i></p>
      <div class="w3-row w3-padding-32">
        <div class="w3-third">
          <p>Name</p>
          <img src="images/bb1.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:400px" height="345px"> <!--Add image and insert style in main page-->
        </div>
        <div class="w3-third">
          <p>Name</p>
          <img src="images/bb2.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:400px" height="345px"> <!--Add image and insert style in main page-->
        </div>
        <div class="w3-third">
          <p>Name</p>
          <img src="images/bb3.jpg" class="w3-round" alt="Random Name" style="width:400px" height="345px"> <!--Add image and insert style in main page-->
        </div>
      </div>
    </div>

    <!-- The products Section -->
    <div class="w3-black" id="products">
      <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
        <h2 class="w3-wide w3-center">PRODUCTS</h2>
        <p class="w3-opacity w3-center"><i>Every Thing You Need!</i></p><br>

        <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
          <div class="w3-third w3-margin-bottom">
            <img id="comb-image" src="images/comb.jpg" alt="Comb" class="w3-hover-opacity"> <!--Add image Comb -->
            <div class="w3-container w3-white">
              <p><b>Comb</b></p>
                <p><label><i class="fa fa-shopping-cart"></i> 15 Euros</label></p>
              <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
              <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Item</button>
            </div>
          </div>
          <div class="w3-third w3-margin-bottom">
            <img id="shampoo-image" src="images/shampoo.png" alt="Shampoo" class="w3-hover-opacity"> <!--Add image Shampoo -->
            <div class="w3-container w3-white">
              <p><b>Shampoo</b></p>
                <p><label><i class="fa fa-shopping-cart"></i> 60 Euros</label></p>
              <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
              <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Item</button>
            </div>
          </div>
          <div class="w3-third w3-margin-bottom">
            <img id="wax-image" src="images/wax.jpg" alt="Wax" class="w3-hover-opacity"> <!--Add image Wax -->
            <div class="w3-container w3-white">
              <p><b>Wax</b></p>
                <p><label><i class="fa fa-shopping-cart"></i> 10 Euros</label></p>
              <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
              <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Item</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Product Modal -->
    <div id="ticketModal" class="w3-modal">
      <div class="w3-modal-content w3-animate-top w3-card-4">
        <header class="w3-container w3-teal w3-center w3-padding-32"> 
          <span onclick="document.getElementById('ticketModal').style.display='none'" 
        class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
          <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Products</h2>
        </header>
        <div class="w3-container">
          <br>
          <input class="w3-input w3-border" type="text" placeholder="How many?">
          <p><label><i class="fa fa-user"></i> Send To</label></p>
          <input class="w3-input w3-border" type="text" placeholder="Enter email">
          <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">PAY <i class="fa fa-check"></i></button>
          <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
          <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p>
        </div>
      </div>
    </div>

    <!-- The Contact Section -->
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
      <h2 class="w3-wide w3-center">CONTACT</h2>
      <p class="w3-opacity w3-center"><i>Fan? Drop a note!</i></p>
      <div class="w3-row w3-padding-32">
        <div class="w3-col m6 w3-large w3-margin-bottom">
          <i class="fa fa-map-marker" style="width:30px"></i> Chicago, US<br>
          <i class="fa fa-phone" style="width:30px"></i> Phone: +00 151515<br>
          <i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
        </div>
        <div class="w3-col m6">
          <form action="/action_page.php" target="_blank">
            <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
              <div class="w3-half">
                <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
              </div>
              <div class="w3-half">
                <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
              </div>
            </div>
            <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
            <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
          </form>
        </div>
      </div>
    </div>
    
  <!-- End Page Content -->
  </div>
      
  <!-- Footer -->
  <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
    
      <a href="https://www.w3schools.com" class="fa fa-facebook-official w3-hover-opacity"></a>
      <a href="https://www.w3schools.com" class="fa fa-instagram w3-hover-opacity"></a>
      <a href="https://www.w3schools.com" class="fa fa-snapchat w3-hover-opacity"></a>
      <p class="w3-medium">Powered by <u>Nigel Caruana</u> </p>
  </footer>
      
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGDZCHvE4QYrZuQHL7SrjsEEL6N3uMx8M&callback=myMap"></script>  
  <script type="text/javascript" src="js/script.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>