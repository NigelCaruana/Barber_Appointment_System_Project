<!DOCTYPE html>
<html>
<head>
    <title>Book Now</title>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<!-- Custom Theme files -->
	<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!--fonts--> 
	<link href="//fonts.googleapis.com/css?family=Signika:300,400,600,700&amp;subset=latin-ext" rel="stylesheet">
	<!--//fonts--> 
	<meta charset="UTF-8">    
	<meta name="viewport" content="width=device-width, initial-scale=1">   
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
	<meta name="keywords" content="Beauty Salon Appointment Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs Sign up Web Templates, 
	Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design"> 
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-large w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="toggleMenu()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="form.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">BOOK NOW</a>
  </div>
</div>

<!-- Navbar on small screens -->
<div id="navSmall" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="index.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
  <a href="form.php" class="w3-bar-item w3-button w3-padding-large">BOOK NOW</a>
</div>
<br> 
<br>
<h1>Beauty Salon Appointment Form </h1>
<div class="bg-agile">
	<div class="book-appointment">
	<h2>Make an appointment</h2>
			<form method="get" action="form.php">
				<div class="left-agileits-w3layouts same">
					<div class="gaps">
						<p>Your Name</p>
						<input type="text" name="name" placeholder="" required=""/>
					</div>
					<div class="gaps">
						<p>Your Surname</p>
						<input type="text" name="surname" placeholder="" required=""/>
					</div>
					<div class="gaps">
						<p>Email Id</p>
						<input type="email" name="email" placeholder="" required="" />
					</div>	
					<div class="gaps">	
						<p>Contact Number</p>
						<input type="text" name="contactNumber" placeholder="" required=""/>
					</div>
				</div>
				<div class="right-agileinfo same">
				<div class="gaps">
					<p>Book Your Date</p>		
					<input  id="datepicker1" name="date" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
				</div>
				<div class="gaps">
					<p>Book Your Time</p>		
					<input type="text" id="timepicker" name="time" class="timepicker form-control" value="" required="">	
				</div>
				<div class="gaps">
					<p>Services</p>	
					<select name="services" class="form-control" required="">
						<option></option>
						<option value = "1">Hair Cut</option>
						<option value = "2">Beard Cut</option>
						<option value = "3">Blow Dry</option>
						<option value = "4">Full Shave</option>
					</select>
				</div>
				<div class="gaps">
					<p>Stylist</p>	
					<select name="stylist" class="form-control" required="">
						<option></option>
						<option value="0">First Available</option>
						<option value="1">Brian Davis</option>
						<option value="2">Frances Nazario</option>
						<option value="3">Victor Francis</option>
					</select>
				</div>
				</div>
				<!--<div class="clear"></div>-->
				<input name="Submit" type="Submit" value="Make an appointment">
			</form>
		</div>
   </div>
<!--copyright-->
<!--//copyright-->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/wickedpicker.js"></script>
<script type="text/javascript">
	$('.timepicker').wickedpicker({twentyFour: false});
</script>
<!-- Calendar -->
<link rel="stylesheet" href="css/jquery-ui.css" />
<script src="js/jquery-ui.js"></script>
<script>
	$(function() {
		$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
	});
</script>
<!-- //Calendar --> 
<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <p class="w3-medium">Powered by <u>Nigel Caruana</u> </p>
</footer>
<script type="text/javascript" src="js/script.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <?php
        	if (isset($_GET["Submit"])) {

                $name = $_GET['name'];
                $surname = $_GET['surname'];
                $email = $_GET['email'];
                $contactNumber = $_GET['contactNumber'];
                $date = $_GET['date'];
                $time = $_GET['time'];
                $services = $_GET['services'];
                $stylist = $_GET['stylist'];
                
                $conn = mysqli_connect("localhost", "root", "", "appointments_db", "3306");
                
                if(mysqli_connect_errno()){
                    echo"Error: Could not connect to database. Please try again later";
                    exit;
                }
 
                $query = "INSERT INTO client_tbl (name, surname, email,contactNumber, date, time, services, stylist) 
                    VALUES ('$name','$surname', '$email', '$contactNumber', '$date','$time','$services', '$stylist' )";

                $result = mysqli_query($conn, $query)
                    or die("Error in query: ". mysqli_error($conn));
					//the above sends a unique query to the currently active database   
            }
        ?>
</body>
</html>