	<?php include("header.php")?>
			  
			  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
			  <script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places&language=en"></script>
<script src="js/registration.js"></script>
<script src="js/riderent.js"></script>
 <link rel="stylesheet" href="css/ridecab.css">

			<!-- start banner Area -->
	
	 <div class="row active-with-click">
        <div class="col-md-3 col-sm-6 col-xs-6">
            <article class="material-card Red">
                <h2>
                    
                    <strong>
                        <i class="fa fa-fw fa-star"></i>
                        Small Ride
                    </strong>
                </h2>
                <div class="mc-content">
                    <div class="img-container">
                        <img class="img-responsive" src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-christopher-walken.jpg">
                    </div>
                    <div class="mc-description">
                       4 seater - Tata Indica, Maruti Ritz (10 Rs Additional Fare after 120km && 1.7/min after 12 hours) 
					   </div>
                </div>
                <a class="mc-btn-action">
                    <i class="fa fa-bars"></i>
                </a>
                
            </article>
        </div>
    

		
		</section>

  
			
			
			<!-- End home-about Area -->
			
			
			


 <script>
    function serviceSelect(value) {
   document.getElementById("service").value="Service : "+value;
}
</script>

<?php
 include("modals.php");
 include("footer.php");
 ?>