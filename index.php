<?php

	
include("header.php");	


?>
 <link rel="stylesheet" href="css/tab.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script src="js/registration.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129315796-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-129315796-1');
</script>




			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-6 col-md-6 ">
							<h6 class="text-white ">Want to Book? just call</h6>
							<h1 style="font-size:18px">
								Mangalore rentals - rental car in Mangaluru				
							</h1>
                                                         <h1 class="text-uppercase"><a href="tel:+919449022895">9449022895</a></h1>
							<hr>
							<h6 class="text-white ">Email Us At</h6>
							<h1 >
									<a href="mailto:u.alva57@gmail.com">u.alva57@gmail.com</a>			
							</h1>
							<hr>
							<a href="tel:+919449022895" class="btn btn-danger text-uppercase">Call for taxi</a>
							<hr>
							<p class="pt-10 pb-10 text-white">
								Mangalore Rentals offer cab Service for Airpot pickup/drop, Tours and travels across the KARNATAKA GOA KERALA with reasonable package. Mangalore Rentals Offers wide variety of Cabs, Travelers , Buses. We Provide Flexible service
							</p>
						</div>
						
						
								
							
						
						<div class="col-lg-4  col-md-4">
						
							  <div class="header-right first-form">
							  
							  <ul class="tab-group">
								<li class="tab active"><a href="#bookride">Book Ride</a></li>
								<li class="tab"><a href="#rentedcar">Rent Car</a></li>
							  </ul>
							  
							  <div class="tab-content">
								<div id="bookride">   
								  
										<form >
									<h5 class="text-center text-success"></h5>
										<div class="from-group">
											<input class="form-control txt-field" type="text" id="name" name="name" placeholder="Your name"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your name'">
											<input class="form-control txt-field" type="email" id="email" name="email" placeholder="Email(optional)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email(optional)'">
											<input class="form-control txt-field" type="tel"  minlength="10" maxlength="10" id="number"name="number" placeholder="Contact Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mobile Number'" required>
										</div>								
										<div class="form-group">
											<div class="default-select" id="default-select">
												<input class="form-control txt-field" type="text" id="pickup" name="pickup" placeholder="pickuplocation"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your location'">
											
											</div>
										</div>
										<div class="form-group">
											<div class="default-select" id="default-select2">
													<input class="form-control txt-field" type="text" id="drop" name="drop" placeholder="droplocation"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your location'">
											</div>
										</div>							    
										<div class="form-group">
											<div class="input-group dates-wrap">                                              
												<input  class="dates form-control"  placeholder="Date" id="date1" type="text" name="date">  
												<input  class="times form-control" type="text" placeholder="Time" id="time1" name="time">
																						
												<div class="input-group-prepend">
													
													
												</div>											
											</div>
										</div>							    
										<div class="form-group">
												 <input type="button" name="submit" id="submit" class="genric-btn danger radius" value="RESERVE">

										</div>
									</form>

								</div>
								
								<div id="rentedcar">   
								 
								  
								  <form action="/" method="post">
									<div class="form-group"><h6>Select Distance or Hours</h6>
							       	<div class="default-select" id="default-select">
										<select id="rentpackage" class="depart-select" required>
										<option value="" disabled="" selected="">Select a package</option>
										<option value="10">1 hrs 10 km</option>
										<option value="30">2 hrs 30 km</option>
										<option value="40">4 hrs 40 km</option>
										<option value="60">6 hrs 60 km</option>
										<option value="80">8 hrs 80 km</option>
										<option value="100">10 hrs 100 km</option>
										<option value="120">12 hrs 120 km</option>
										</select>
									</div>
							    </div>
								  <ul id="packagelist"class="list-group">
									 
									</ul>
								  
								  </form>

								</div>
								
							  </div><!-- tab-content -->
							  
						</div> <!-- /form -->
			</div>

								<!--  <img src="img/paytm/qrcode.png"  id="paytm">  -->	
					</div>
				</div>					
			</section>

			<!-- End banner Area -->	

			
			
			
			<!-- Start home-about Area -->
			<section class="services-area section-gap">
				<div class="container">
					<div class="row section-title">
						<h1>What Services we offer to our clients</h1>
						<h4>*Note : Package are offered Based On Avalibility</h4>
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
			
			
			
			
			
		
			
			<!-- Start image-gallery Area -->
			<!-- Start top-category-widget Area -->
			<section class="top-category-widget-area pt-90 pb-90 ">
				<div class="container">
				<div class="row section-title">
						<h1>Types of Vehicals Available To Book</h1>
						<p>Wide variety of all sorts cabs, buses- 40 seaters, traveler 8-16 seaters.</p>
					</div>
					<div class="row">	
								
						<div class="col-lg-4">
							<div class="single-cat-widget">
								<div class="content relative">
									<div class="overlay overlay-bg"></div>
								    <a href="#" data-toggle="modal" data-target="#rentcar" onclick="vehicleSelect('Swift Desire')">
								      <div class="thumb">
								  		 <img class="content-image img-fluid d-block mx-auto" src="img/vehicles/swift.png" alt="">
								  	  </div>
								      <div class="content-details">
								        <h4 class="content-title mx-auto text-uppercase">Swift Desire</h4>
								        <span></span>								        
								        <p>Capacity:4+1 seater.</p>
								      </div>
								    </a>
								</div>
							</div>
						</div>
				
						<div class="col-lg-4">
							<div class="single-cat-widget">
								<div class="content relative">
									<div class="overlay overlay-bg"></div>
								    <a href="#" data-toggle="modal" data-target="#rentcar" onclick="vehicleSelect('Toyota Eitos')">
								      <div class="thumb">
								  		 <img class="content-image img-fluid d-block mx-auto" src="img/vehicles/etions.png" alt="">
								  	  </div>
								      <div class="content-details">
								        <h4 class="content-title mx-auto text-uppercase">Toyota Eitos</h4>
								        <span></span>	
								        <p>Capacity : 4+1 Seater</p>
								      </div>
								    </a>
								</div>
							</div>
						</div>	
						
						<div class="col-lg-4">
							<div class="single-cat-widget">
								<div class="content relative">
									<div class="overlay overlay-bg"></div>
								    <a href="#" data-toggle="modal" data-target="#rentcar" onclick="vehicleSelect('Ritz')">
								      <div class="thumb">
								  		 <img class="content-image img-fluid d-block mx-auto" src="img/vehicles/ritzs.png" alt="">
								  	  </div>
								      <div class="content-details">
								        <h4 class="content-title mx-auto text-uppercase">Ritz</h4>
								        <span></span>
								        <p>Capacity : 4+1 Seater</p>
								      </div>
								    </a>
								</div>
							</div>
						</div>	
							
					</div>
					<hr>
					<div class="row">	
								
						<div class="col-lg-4">
							<div class="single-cat-widget">
								<div class="content relative">
									<div class="overlay overlay-bg"></div>
								    <a href="#" data-toggle="modal" data-target="#rentcar" onclick="vehicleSelect('Temp Travellor')">
								      <div class="thumb">
								  		 <img class="content-image img-fluid d-block mx-auto" src="img/vehicles/tempotraveler.png" alt="">
								  	  </div>
								      <div class="content-details">
								        <h4 class="content-title mx-auto text-uppercase">Temp Travellor (AC/Non-AC)</h4>
								        <span></span>								        
								        <p>Capacity : 12+1 Seater</p>
								      </div>
								    </a>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-cat-widget">
								<div class="content relative">
									<div class="overlay overlay-bg"></div>
								    <a href="#" data-toggle="modal" data-target="#rentcar" onclick="vehicleSelect('Toyota Innova')">
								      <div class="thumb">
								  		 <img class="content-image img-fluid d-block mx-auto" src="img/vehicles/innova.png" alt="">
								  	  </div>
								      <div class="content-details">
								        <h4 class="content-title mx-auto text-uppercase">Toyota Innova</h4>
								        <span></span>								        
								        <p>Capacity : 6+1 Seater</p>
								      </div>
								    </a>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-cat-widget">
								<div class="content relative">
									<div class="overlay overlay-bg"></div>
								    <a href="#" data-toggle="modal" data-target="#rentcar" onclick="vehicleSelect('Mini-Bus')">
								      <div class="thumb">
								  		 <img class="content-image img-fluid d-block mx-auto" src="img/vehicles/luxurybus.png" alt="">
								  	  </div>
								      <div class="content-details">
								        <h4 class="content-title mx-auto text-uppercase">Mini-Bus</h4>
								        <span></span>
								        <p>Capacity : 18,31+1 Seater</p>
								      </div>
								    </a>
								</div>
							</div>
						</div>	
					</div>
					
					
					<hr>
					
				</div>	
			</section>
			<!-- End top-category-widget Area -->
			<!-- End image-gallery Area -->
		
	<!-- Start of popup -->



					
			<!-- end of poup -->	







					
			<!-- end of poup -->		
			

<script  src="js/tab.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTWeIwY1Faf0vvH2C1YIg6rwwWzNYm16Q&v=3.exp&sensor=false&libraries=places"></script>
  	
			 <script>

			 function initialize() {
  var input = document.getElementById('drop');
  var input1 = document.getElementById('pickup');
  new google.maps.places.Autocomplete(input);
  new google.maps.places.Autocomplete(input1);
}

google.maps.event.addDomListener(window, 'load', initialize);
			 
              $(function () {
			 $("#rentpackage").change(function () {
            var selectedText = $(this).find("option:selected").text();
            var selectedValue = $(this).val();
			var dataString = 'km='+ selectedValue;
            // alert("Selected Text: " + selectedText + " Value: " + selectedValue);
			    $.ajax({
				type: "POST",
				url: "fetchpackage.php",
				data: dataString,
				cache: false,
				success: function(result){
				  $("#packagelist").html(result);
				
				}
				});
			
			  });
           });

    function serviceSelect(value) {
		document.getElementById("service").value="Service : "+value;
	}
	function vehicleSelect(value) {
		document.getElementById("rentvehicle").value="Vehical : "+value;
	}
	
</script>
			
			<!-- start footer Area -->		
		<?php include("modals.php");
		include("footer.php");?>