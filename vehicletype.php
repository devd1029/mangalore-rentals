	<?php include("header.php")?>
			  
			  
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script src="js/registration.js"></script>

			  
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


					
			<!-- end of poup -->		
<script>
function vehicleSelect(value) {
		document.getElementById("vehicle").value="Vehical : "+value;
	}
	
</script>			

			
<?php
 include("modals.php");
 include("footer.php");
 ?>