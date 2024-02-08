  <div class="modal fade" id="sucessmodal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">   Booking Message</h4>
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p>Mangalore Rentals : We will revert back soon Based On Availability</p>
        </div>
       
      </div>
    </div>
  </div>
  
  
  
  
   <!-- service booking content-->
  
  
  
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
		  <div class="modal-content header-right" style="padding:13px;">
				<div class="modal-header">
				 
					  <h4 class="modal-title pb-30">Book Your Taxi Online!</h4>
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
										<form class="form">
										<div class="from-group">
											<input class="form-control txt-field" type="text" id="servicename" name="servicename" placeholder="Your name"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your name'">
											<input class="form-control txt-field" type="email" id="serviceemail" name="serviceemail" placeholder="Email address(optional)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'">
											<input class="form-control txt-field" type="tel" minlength="10" maxlength="10" id="servicenumber"name="servicenumber" placeholder="Contact Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mobile Number'" required>
										</div>		

										<div class="form-group">
											<div class="default-select" id="default-select">
												<input class="form-control txt-field" type="text" id="service" name="service" placeholder="package"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Package'" required>
											
											</div>
										</div>
										<div class="form-group">
											<div class="default-select" id="default-select">
												<input class="form-control txt-field" type="text" id="servicepickup" name="servicepickup" placeholder="pickuplocation"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your location'">
											
											</div>
										</div>
										<div class="form-group">
											<div class="default-select" id="default-select2">
													<input class="form-control txt-field" type="text" id="servicedrop" name="servicedrop" placeholder="droplocation"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your location'">
											</div>
										</div>							    
									  <div class="form-group">
										<div class="input-group dates-wrap">                                              
											<input  class="dates form-control"  placeholder="Date" id="servicedate1" type="text" name="servicedate">  
											<input  class="times form-control" type="text" placeholder="Time" id="servicetime1" name="servicetime">
																					
																				
										</div>
									</div>							    
										<div class="form-group">
												 <input type="button"  id="servicesubmit" class="genric-btn danger radius" value="RESERVE">

										</div>
									</form>
				</div>
			
		  </div>
      
    </div>
  </div>
  
  
    
   <!-- service booking content ends-->
   
   
   
   <!-- service booking content ends-->
   
   
   <div class="modal fade" id="rentcar" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content header-right" style="padding:13px;">
        <div class="modal-header">
         
              <h4 class="modal-title pb-30">Book Your Taxi Online!</h4>
			  
			   <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
								<form class="form">
							    <div class="from-group">
							    	<input class="form-control txt-field" type="text" id="rentname" name="rentname" placeholder="Your name"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your name'" required>
							    	<input class="form-control txt-field" type="tel"  minlength="10" maxlength="10" id="rentnumber"name="rentnumber" placeholder="Contact Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mobile Number'"required >
							    	<input class="form-control txt-field" type="text" id="rentvehicle"  placeholder="vehicle" >
								</div>		

								<div class="form-group">
							       	<div class="default-select" id="default-select">
										<select id="packagePicker" class="depart-select ola-select" required>
										<option value="" disabled="" selected="">Select a package</option>
										<option value="1H_10K">1 hrs 10 km</option>
										<option value="2H_30K">2 hrs 30 km</option>
										<option value="4H_40K">4 hrs 40 km</option>
										<option value="6H_60K">6 hrs 60 km</option>
										<option value="8H_80K">8 hrs 80 km</option>
										<option value="10H_100K">10 hrs 100 km</option>
										<option value="12H_120K">12 hrs 120 km</option>
										</select>
									</div>
							    </div>
							    <div class="form-group">
							       	<div class="default-select" id="default-select">
										<input class="form-control txt-field" type="text" id="rentpickup" name="rentpickup" placeholder="pickuplocation"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your location'" >
							    	
									</div>
							    </div>
							    <div class="form-group">
							       	<div class="default-select" id="default-select2">
											<input class="form-control txt-field" type="text" id="rentdrop" name="rentdrop" placeholder="droplocation"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your location'">
							    	</div>
							    </div>							    
							    <div class="form-group">
										<div class="input-group dates-wrap">                                              
											<input  class="dates form-control"  placeholder="Date" id="rentdate1" type="text" name="rentdate">  
											<input  class="times form-control" type="text" placeholder="Time" id="renttime1" name="renttime">
																					
																				
										</div>
								</div>						    
							    <div class="form-group">
										 <input type="button" name="rentsubmit" id="rentsubmit" class="genric-btn danger radius" value="RESERVE">

							    </div>
							</form>
        </div>
      
      </div>
      
    </div>
  </div>
   
   <!-- service booking content ends-->
   
   
   <!-- cab rentals start-->
		  <!-- service booking content ends-->
   
   
   <div class="modal fade" id="cabrent" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content header-right" style="padding:13px;">
        <div class="modal-header">
         
              <h4 class="modal-title pb-30">Book Your Taxi Online!</h4>
			  
			   <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
								<form class="form">
							    <div class="from-group">
							    	<input class="form-control txt-field" type="tel"  minlength="10" maxlength="10" id="cabrentnumber"name="cabrentnumber" placeholder="Contact Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mobile Number'"required >
								</div>		

							    <div class="form-group">
							       	<div class="default-select" id="default-select">
										<input class="form-control txt-field" type="text" id="cabrentpickup" name="cabrentpickup" placeholder="pickuplocation"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your location'" >
							    	
									</div>
							    </div>
							    <div class="form-group">
							       	<div class="default-select" id="default-select2">
											<input class="form-control txt-field" type="text" id="cabrentdrop" name="cabrentdrop" placeholder="droplocation"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your location'">
							    	</div>
							    </div>							    
							    					    
							    <div class="form-group">
										 <input type="button" name="rentsubmit" id="rentsubmit" class="genric-btn danger radius" value="RESERVE">

							    </div>
							</form>
        </div>
      
      </div>
      
    </div>
  </div>
   
   <!-- cab rentals Ends-->
   
   
   