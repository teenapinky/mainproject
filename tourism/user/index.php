<?php
session_start();

if(!isset($_SESSION['username'])  or $_SESSION['type']!='user')
{
	header('location:../login.html');
}

if(isset($_SESSION['username']))
{
	$temp=$_SESSION['username'];
}	
	?>

<!DOCTYPE html>

<html lang="en">
<head>
	
<title>Travelo Tourism
</title>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

	
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


	<link rel="stylesheet" href="css/animate.css">
	
	<link rel="stylesheet" href="css/owl.carousel.min.css">

	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	
<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">

	

	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		
<div class="container">
			
<a class="navbar-brand" href="index.html">Travelo<span></span></a>
		
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav"
 aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			

</button>

		
	<div class="collapse navbar-collapse" id="ftco-nav">
				

<ul class="navbar-nav ml-auto">
				
	<li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
		
			<li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	
				<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Destinations</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="view.php">Beach Areas</a>
              	<a class="dropdown-item" href="view1.php">Winter Spot Areas</a>
                <a class="dropdown-item" href="view3.php">Historical Monuments</a>
                <a class="dropdown-item" href="view2.php">Adventure Spots</a>
                
              </div>
            </li>
	
				<li class="nav-item"><a href="hotel.html" class="nav-link">Hotel</a></li>
					<li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>

					




<li class="nav-item dropdown"> 
			  <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  <?php echo "WELCOME " .$temp." "; ?><i class='fa fa-user-circle'></i>

			  </a>
			  <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="addprofile2.php"><i class="fa fa-user-circle"></i> Edit Profile</a>
              	<a class="dropdown-item" href="changepas.php"><i class="fa fa-lock"></i>Change Password</a>
               <a href="logout.php" class="dropdown-item"><i class="fa fa-sign-out"></i>Sign out</a>
              </div>
			  </li>
				</ul>
		
	</div>
		</div>
	</nav>
	<!-- END nav -->
	
	
<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_4.jpg');">
		
<div class="overlay"></div>
		<div class="container">
			
<div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
	
			<div class="col-md-7 ftco-animate">
					
<span class="subheading">Welcome to Travelo</span>
					
<h1 class="mb-4">Discover Your Favorite Place with Us</h1>
					
<p class="caps">Travel to the any corner of the world, without going around in circles</p>
			
	</div>
			


	
					
				
			</div>
		</div>
	</div>



		<section class="ftco-section services-section">
			<div class="container">
				<div class="row d-flex">
					<div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
						<div class="w-100">
							<span class="subheading">Welcome to Travelo</span>
							<h2 class="mb-4">It's time to start your adventure</h2>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
							A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
							<p><a href="#" class="btn btn-primary py-3 px-4">Search Destination</a></p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
								<div class="services services-1 color-1 d-block img" style="background-image: url(images/services-1.jpg);">
									<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-paragliding"></span></div>
									<div class="media-body">
										<h3 class="heading mb-3">Activities</h3>
										<p>A small river named Duden flows by their place and supplies it with the necessary</p>
									</div>
								</div>      
							</div>
							<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
								
<div class="services services-1 color-2 d-block img" style="background-image: url(images/services-2.jpg);">
									<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
									<div class="media-body">
										<h3 class="heading mb-3">Travel Arrangements</h3>
										<p>A small river named Duden flows by their place and supplies it with the necessary</p>
									</div>
								</div>    
							</div>
							<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
								<div class="services services-1 color-3 d-block img" style="background-image: url(images/services-3.jpg);">
									<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-tour-guide"></span></div>
									<div class="media-body">
										<h3 class="heading mb-3">Private Guide</h3>
										<p>A small river named Duden flows by their place and supplies it with the necessary</p>
									</div>
								</div>      
							</div>
							<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
								<div class="services services-1 color-4 d-block img" style="background-image: url(images/services-4.jpg);">
									<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-map"></span></div>
									<div class="media-body">
										<h3 class="heading mb-3">Location Manager</h3>
										<p>A small river named Duden flows by their place and supplies it with the necessary</p>
									</div>
								</div>      
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section img ftco-select-destination" style="background-image: url(images/bg_3.jpg);">
			<div class="container">
				<div class="row justify-content-center pb-4">
					<div class="col-md-12 heading-section text-center ftco-animate">
						<span class="subheading">Travelo Provide Places</span>
						<h2 class="mb-4">Select Your Destination</h2>
					</div>
				</div>
			</div>
			<div class="container container-2">
				<div class="row">
					<div class="col-md-12">
						<div class="carousel-destination owl-carousel ftco-animate">
							<div class="item">
								<div class="project-destination">
									<a href="#" class="img" style="background-image: url(images/place-1.jpg);">
										<div class="text">
											<h3>Philippines</h3>
											<span>8 Tours</span>
										</div>
									</a>
								</div>
							</div>
							<div class="item">
								<div class="project-destination">
									<a href="#" class="img" style="background-image: url(images/place-2.jpg);">
										<div class="text">
											<h3>Canada</h3>
											<span>2 Tours</span>
										</div>
									</a>
								</div>
							</div>
							<div class="item">
								<div class="project-destination">
									<a href="#" class="img" style="background-image: url(images/place-3.jpg);">
										<div class="text">
											<h3>Thailand</h3>
											<span>5 Tours</span>
										</div>
									</a>
								</div>
							</div>
							<div class="item">
								<div class="project-destination">
									<a href="#" class="img" style="background-image: url(images/place-4.jpg);">
										<div class="text">
											<h3>Autralia</h3>
											<span>5 Tours</span>
										</div>
									</a>
								</div>
							</div>
							<div class="item">
								<div class="project-destination">
									<a href="#" class="img" style="background-image: url(images/place-5.jpg);">
										<div class="text">
											<h3>Greece</h3>
											<span>7 Tours</span>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center pb-4">
					<div class="col-md-12 heading-section text-center ftco-animate">
						<span class="subheading">Destination</span>
						<h2 class="mb-4">Tour Destination</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 ftco-animate">
						<div class="project-wrap">
					
		<a href="#" class="img" style="background-image: url(images/destination-1.jpg);">
								
<span class="price">$550/person</span>
							</a>
							
<div class="text p-4">
								<span class="days">8 Days Tour</span>
								<h3><a href="#">Banaue Rice Terraces</a></h3>
								<p class="location"><span class="fa fa-map-marker"></span> Banaue, Ifugao, Philippines</p>
								<ul>
									<li><span class="flaticon-shower"></span>2</li>
									<li><span class="flaticon-king-size"></span>3</li>
									<li><span class="flaticon-mountains"></span>Near Mountain</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4 ftco-animate">
						<div class="project-wrap">
							<a href="#" class="img" style="background-image: url(images/destination-2.jpg);">
								<span class="price">$550/person</span>
							</a>
							<div class="text p-4">
								<span class="days">10 Days Tour</span>
								<h3><a href="#">Banaue Rice Terraces</a></h3>
							
	<p class="location"><span class="fa fa-map-marker"></span> Banaue, Ifugao, Philippines</p>
							
	<ul>
									
<li><span class="flaticon-shower"></span>2</li>
							

		<li><span class="flaticon-king-size"></span>3</li>
					
				<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
			
					</ul>
							</div>
	
					</div>
					</div>
				
	<div class="col-md-4 ftco-animate">
						<div class="project-wrap">
							<a href="#" class="img" style="background-image: url(images/destination-3.jpg);">
								<span class="price">$550/person</span>
							</a>
							<div class="text p-4">
								<span class="days">7 Days Tour</span>
								<h3><a href="#">Banaue Rice Terraces</a></h3>
								<p class="location"><span class="fa fa-map-marker"></span> Banaue, Ifugao, Philippines</p>
								<ul>
									<li><span class="flaticon-shower"></span>2</li>
									<li><span class="flaticon-king-size"></span>3</li>
									<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
								</ul>
							</div>
						</div>
					</div>

				
	<div class="col-md-4 ftco-animate">
					

	<div class="project-wrap">
							
<a href="#" class="img" style="background-image: url(images/destination-4.jpg);">
				

				<span class="price">$550/person</span>
						
	</a>
							<div class="text p-4">
					
			<span class="days">8 Days Tour</span>
								
<h3><a href="#">Banaue Rice Terraces</a></h3>
								
<p class="location"><span class="fa fa-map-marker"></span> Banaue, Ifugao, Philippines</p>
				
				<ul>
								
	<li><span class="flaticon-shower"></span>2</li>
							
		<li><span class="flaticon-king-size"></span>3</li>
					
				<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
		
						</ul>
						
	</div>
						</div>
					</div>
			
		<div class="col-md-4 ftco-animate">
						<div class="project-wrap">
	
						<a href="#" class="img" style="background-image: url(images/destination-5.jpg);">
								<span class="price">$550/person</span>
							</a>
							<div class="text p-4">
								<span class="days">10 Days Tour</span>
								<h3><a href="#">Banaue Rice Terraces</a></h3>
								<p class="location"><span class="fa fa-map-marker"></span> Banaue, Ifugao, Philippines</p>
							
	<ul>
									<li><span class="flaticon-shower"></span>2</li>
									<li><span class="flaticon-king-size"></span>3</li>
									<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4 ftco-animate">
						<div class="project-wrap">
							<a href="#" class="img" style="background-image: url(images/destination-6.jpg);">
								<span class="price">$550/person</span>
							</a>
							<div class="text p-4">
								<span class="days">7 Days Tour</span>
								<h3><a href="#">Banaue Rice Terraces</a></h3>
								<p class="location"><span class="fa fa-map-marker"></span> Banaue, Ifugao, Philippines</p>
								<ul>
									<li><span class="flaticon-shower"></span>2</li>
									<li><span class="flaticon-king-size"></span>3</li>
									<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="ftco-section ftco-about img"style="background-image: url(images/bg_4.jpg);">
			<div class="overlay"></div>
		
	<div class="container py-md-5">
				<div class="row py-md-5">
					
<div class="col-md d-flex align-items-center justify-content-center">
						

							<span class="fa fa-play"></span>
						</a>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-about ftco-no-pt img">
			<div class="container">
				<div class="row d-flex">
					<div class="col-md-12 about-intro">
						<div class="row">
							<div class="col-md-6 d-flex align-items-stretch">
								<div class="img d-flex w-100 align-items-center justify-content-center" style="background-image:url(images/about-1.jpg);">
								</div>
							</div>
							<div class="col-md-6 pl-md-5 py-5">
								<div class="row justify-content-start pb-3">
									<div class="col-md-12 heading-section ftco-animate">
										<span class="subheading">About Us</span>
										<h2 class="mb-4">Make Your Tour Memorable and Safe With Us</h2>
										<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
										<p><a href="#" class="btn btn-primary">Book Your Destination</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

						
								
										
		
							
	


				
							
						

		
<script src="js/jquery.min.js"></script>
			<script src="js/jquery-migrate-3.0.1.min.js"></script>
		
	<script src="js/popper.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
		
	<script src="js/jquery.easing.1.3.js"></script>
			<script src="js/jquery.waypoints.min.js"></script>
		

	<script src="js/jquery.stellar.min.js"></script>
			<script src="js/owl.carousel.min.js"></script>
		
	<script src="js/jquery.magnific-popup.min.js"></script>
			<script src="js/jquery.animateNumber.min.js"></script>
	
		<script src="js/bootstrap-datepicker.js"></script>
			<script src="js/scrollax.min.js"></script>
		
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		
	<script src="js/google-map.js"></script>
			<script src="js/main.js"></script>
			
		
</body>
		
</html>
