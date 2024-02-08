<?php include("header.php");?>
<?php

$result="";
if(isset($_POST['submit'])){
	require 'phpmailer/PHPMailerAutoload.php';
	$mail=new PHPMailer;
	$mail->Host='smtp.gmail.com';
	$mail->Port=587;
	$mail->SMTPAuth=true;
	$mail->SMTPSecure='tls';
	$mail->Username='keerthankc095@gmail.com';
	$mail->Password='keerthuvidu1';
	
	$mail->setFrom($_POST['email'],$_POST['name']);
	$mail->addAddress('keerthankc095@gmail.com');
	$mail->addReplyTo($_POST['email'],$_POST['name']);
	$mail->isHTML(true);
	$mail->subject='Form Submission: '.$_POST['subject'];
	
	$mail->Body='<h1 align=center>Name:'.$_POST['name'].'<br>EMAIL:'.$_POST['email'].'<br>Message:'.$_POST['messsage'].'</h1>';
	
	if(!$mail->send()){
		$result="Something wrong";
	}else{
		$result="thanks ".$_POST['name']."okay";
	}
}
	
	
?>
<style>
.vl {
    border-left: 6px solid green;
    height: 500px;
}
</style>

			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Contact Us				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="contact.html"> Contact Us</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->				  

			<!-- Start contact-page Area -->
			<section class="contact-page-area section-gap">
				
				<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBTWeIwY1Faf0vvH2C1YIg6rwwWzNYm16Q'></script><div style='overflow:hidden;height:319px;width:1432px;'><div id='gmap_canvas' style='height:271px;width:1429px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://embedmaps.org/'>add a google map to website</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=c9829e5ae9d68d5f1aa95748f1b95df8d80b9650'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(12.88744705494344,74.84173510000004),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(12.88744705494344,74.84173510000004)});infowindow = new google.maps.InfoWindow({content:'<strong>Mangalore Rentals and Taxi</strong><br>Near KSRTC BUS STAND<br>575004 mangalore<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
    
	


				<div class="container">
					<div class="row">
					

						
						<div class="col-lg-4 d-flex flex-column address-wrap">
							<div class="single-contact-address d-flex flex-row">
							
								<div class="icon">
									<span class="lnr lnr-home"></span>
								</div>
								<div class="contact-details">
								
									<h5>Near KSRTC Bus Stand</h5>
									<p>
										Mangalore,Karnataka,India
									</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-phone-handset"></span>
								</div>
								<div class="contact-details">
									<h5>+91 9449022895</h5>
									<p>Availiable in all the Times. We are happy to help you.</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-envelope"></span>
								</div>
								<div class="contact-details">
									<h5>u.alva57@gmail.com</h5>
									<p>Send us your query anytime!</p>
								</div>
							</div>														
						</div>
						<div class="col-lg-8">
							<form class="form-area contact-form text-right" id="myForm" action="mail.php" method="post">
								<div class="row">	
									<div class="col-lg-6 form-group">
										<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
									
										<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

										<input name="subject" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="text">
									</div>
									<div class="col-lg-6 form-group">
										<textarea class="common-textarea form-control" name="message" placeholder="Enter Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required=""></textarea>				
									</div>
									<div class="col-lg-12">
										<div class="alert-msg" style="text-align: left;"></div>
										<button class="genric-btn primary" style="float: right;">Send Message</button>											
									</div>
								</div>
							</form>	
						</div>
					</div>
				</div>	
			</section>
			<!-- End contact-page Area -->
			
			
			<?php include("footer.php");?>