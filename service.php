	<?php include("header.php")?>
			  
			  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
			  <script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places&language=en"></script>
<script src="js/registration.js"></script>

			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Services				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="service.html"> Services</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start services Area -->
		<section class="services-area section-gap">
				<div class="container">
					<div class="row section-title">
						<h1>What Services we offer to our clients</h1>
						
					</div>
					<div class="row">
						<div class="col-lg-4 ">
						<div class="widget-wrap" style="background-image: url(img/package/tour1.jpg);">
						<div class="single-sidebar-widget user-info-widget">
									<span class="fa fa-briefcase" style="font-size:48px"></span>
									<a href="#"><h4 style="color:#f7f62e">Tour Packages</h4></a>
									<p>
										Looking for Domestic tour packages? Choose your domestic holidays by interests like Religious, adventure, beach & more.
									</p>
									
									<button class="genric-btn danger circle arrow" data-toggle="modal" data-target="#myModal" onclick="serviceSelect('Tour Packages')">Book Now</button>
								</div>
								</div>
						</div>
						
						
						
						<div class="col-lg-4">
							<div class="widget-wrap" style="background-image: url(img/package/airport.jpg);">
							<div class="single-sidebar-widget user-info-widget">
									<span class="fa fa-plane" style="font-size:48px"></span>
									<a href="#"><h4 style="color:#f7f62e">Airport Pickup/Drop</h4></a>
									<p>
										We offers Airport taxi Service in Mangalore at best tariff rates. We provide on time Car Rental Service for airport pick and drop.
									</p>
									<button class="genric-btn danger circle arrow" data-toggle="modal" data-target="#myModal" onclick="serviceSelect('Airport Pickup/Drop')">Book Now</button>
							</div>
								</div>
						</div>
						
						
						<div class="col-lg-4">
							<div class="widget-wrap" style="background-image: url(img/package/office.png);">
							<div class="single-sidebar-widget user-info-widget">
									<span class="fa fa-briefcase" style="font-size:48px"></span>
									<a href="#"><h4 style="color:#f7f62e">Office/Corporate Trip</h4></a>
									<p>
										Experience premium Corporate Cab Services for your business meetings, Daily Commute. Partner with us for all your Travel Needs.
									</p>	
									<button class="genric-btn danger circle arrow" data-toggle="modal" data-target="#myModal" onclick="serviceSelect('Office/Corporate Trip')">Book Now</button>
						</div>
								</div>
						</div>												
					</div>	
					
					<hr>
					
					<div class="row">
						<div class="col-lg-4 ">
						<div class="widget-wrap" style="background-image: url(img/package/car_rental.jpg);">
							<div class="single-sidebar-widget user-info-widget">
										<span class="fa fa-car" style="font-size:48px"></span>
										<a href="#"><h4 style="color:#f7f62e">Car Rental Services</h4></a>
										<p>
											Mangalores Finest Car rental service with experienced drivers we promise to deliver a prompt.
										</p>	
										<button class="genric-btn danger circle arrow" data-toggle="modal" data-target="#myModal" onclick="serviceSelect('Car Rental Services')">Book Now</button>
							</div>
						</div>
						</div>
						
						
						
						<div class="col-lg-4">
							<div class="widget-wrap" style="background-image: url(img/package/picnic.jpg);">
										<div class="single-sidebar-widget user-info-widget">
												<span class="fa fa-child" style="font-size:48px"></span>
												<a href="#"><h4 style="color:#f7f62e">College Picnics/Tours</h4></a>
												<p>
													We are one of the best Solution for College picnics.The best of the packages, with the best seasonal locations to offer.
												</p>
													<button class="genric-btn danger circle arrow" data-toggle="modal" data-target="#myModal" onclick="serviceSelect('College Picnics/Tours')">Book Now</button>
									</div>
								</div>
						</div>
						
						
						<div class="col-lg-4">
							<div class="widget-wrap" style="background-image: url(img/package/shirdi.jpg);">
							<div class="single-sidebar-widget user-info-widget">
									<span class="fa fa-bus" style="font-size:48px"></span>
									<a href="#"><h4 style="color:#f7f62e">Shiradi & Tirupathi Packages</h4></a>
									<p>
										We are specialised in operating Shirdi & Tirupathi Package. We provide complete Service for Family & Group Tour Packages.
									</p>
													<button class="genric-btn danger circle arrow" data-toggle="modal" data-target="#myModal" onclick="serviceSelect('Shiradi & Tirupathi Packages')">Book Now</button>
									</div>
								</div>
						</div>												
					</div>

				    <hr>
					
					<div class="row">
						<div class="col-lg-4 ">
						<div class="widget-wrap" style="background-image: url(img/package/wedding.jpg);">
						<div class="single-sidebar-widget user-info-widget">
									<span class="fa fa-car" style="font-size:48px"></span>
									<a href="#"><h4 style="color:#f7f62e">Wedding Package</h4></a>
									<p>
										We are providing vehicles for Wedding in customer friendly fixed charges with decorated vehicles.
									</p>
								
													<button class="genric-btn danger circle arrow" data-toggle="modal" data-target="#myModal" onclick="serviceSelect('Wedding Package')">Book Now</button>
										</div>
								</div>
						</div>
						
						
						
						<div class="col-lg-4">
							<div class="widget-wrap" style="background-image: url(img/package/coorg.jpg);">
							<div class="single-sidebar-widget user-info-widget">
									<span class="fa fa-pagelines" style="font-size:48px"></span>
									<a href="#"><h4 style="color:#f7f62e">Coorg Special Package</h4></a>
									<p>
										We Offering the Special Package to the Coorg with Offerable prices and best comfort and experience.
									</p>
													<button class="genric-btn danger circle arrow" data-toggle="modal" data-target="#myModal" onclick="serviceSelect('Coorg Special Package')">Book Now</button>
									</div>
								</div>
						</div>
						
						
						<div class="col-lg-4">
							<div class="widget-wrap" style="background-image: url(img/package/sabarimala.jpg);">
							<div class="single-sidebar-widget user-info-widget">
									<span class="fa fa-optin-monster" style="font-size:48px"></span>
									<a href="#"><h4 style="color:#f7f62e">Sabarimala Temple Package</h4></a>
									<p>
										We are providing a car for rent with the customer friendly prices, and also best package available here .
									</p>
													<button class="genric-btn danger circle arrow" data-toggle="modal" data-target="#myModal" onclick="serviceSelect('Sabarimala Temple Package')">Book Now</button>
									</div>
								</div>
						</div>												
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->
			
			
			
			<!-- Start of popup -->
				    



					
			<!-- end of poup -->		
			
			
			<!-- start footer Area -->		
	
			<!-- End footer Area -->

 <script>
    function serviceSelect(value) {
   document.getElementById("service").value="Service : "+value;
}
</script>

<?php
 include("modals.php");
 include("footer.php");
 ?>