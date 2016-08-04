<?php $this->load->view('header', array('num' => 7, 'title' => 'Appointment Creation')); ?>					
<?php $match=$time["match"];
$max=$time["ret"];
$i;
?>				
<div class="col-xs-10 col-xs-offset-1 col-lg-10 col-lg-offset-1 columns appointment-form">
	<div class="element-container">
		<div class="row center-block">								
			<legend id="title">Appointment Booking for <?php echo date("F j, Y",strtotime($date));?></legend>
				
				<div class="col-xs-6 col-lg-3 col-lg-offset-3 columns">
					<label for="dt" style="margin-bottom:5px; display:flex">Choose an open timeslot</label>	
					<input type="hidden" id="omcode"/>
					<input id="dt" type="hidden" name="date" value="<?php echo $date;?>"/>
						<select class="form-control" name="av-timeslots" id="av-timeslots">
						<option value="" disabled default selected style="display:none;"></option>
						<?php for($i=0;$i<$max;$i++){?>
							<?php
							for($x=0;$reserved[$x]!='' && $reserved[$x]->time!=$match[$i];$x++);
								if($reserved[$x]==''){?>
							<option value="<?php echo $match[$i];?>"><?php echo $match[$i];?></option>
						<?php } }?>
						</select>
				</div>								

				<div class="col-xs-6 col-lg-3 columns">
						<label for="av-timeslots" style="display:flex">Patient type</label>	
						<select id="type" class="form-control" name="av-timeslots" id="av-timeslots">
						 	<option value="" disabled default selected style="display:none;"></option>
							<option value="new-patient">New Patient</option>
						    <option value="old-patient">Old Patient</option>
						</select>
					</div>
				</div>
		</div>
	</div>
</div>

<!--- APPOINTMENT FORM FOR OLD PATIENT -->
<div id="old" class="col-xs-10 col-xs-offset-1 col-lg-10 col-lg-offset-1 columns">
	<form id="op" method="post" action="<?php echo base_url();?>appointment/confirm_appointment" role="form">
		<div class="element-container">
			<div class="row" style="margin: 0">								
				<legend>Old Patient</legend>							
				<div class="col-xs-10 col-xs-offset-1 columns">													
					<input id="odt" type="hidden" name="date" value="<?php echo $date;?>" id="odate"/>
					<input type="hidden" name="time" id="otime"/>
					<div class="col-xs-10 col-xs-offset-1 columns">
						<input type="hidden" value="Old Patient" name="optype">
						<div class="col-xs-12 col-sm-6 col-md-6 columns">	
							<label class="form-elem" for="opatient-usrname">Username *</label>
							<input id="opatient-usrname" class="form-control" placeholder="Please input your username" name="opatient-usrname" type="text" required/>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 columns">	
							<label class="form-elem" for="reason">Type of treatment to avail</label>
							<input id="oreason" class="form-control" name="oreason" type="reason" />
						</div>
					</div>											
					<div class="col-xs-10 col-xs-offset-1 columns">
						<br />
						<label>
							<input id="chck" type="checkbox"> 
							I'm aware that I will receive an email and text message notification about my appointment booking.
						</label>
						<hr />	
						<button id="sub1" type="submit" class="btn btn-success">Continue</button>
					</div>
				</div>									
			</div>	
		</div>
	</form>
</div>
<!--- APPOINTMENT FORM FOR NEW PATIENT -->
<div id="new" class="col-xs-10 col-xs-offset-1 col-lg-10 col-lg-offset-1 columns">
	<form id="np" method="post" action="<?php echo base_url();?>appointment/confirm_appointment" role="form">
						<div class="element-container">
								<div class="row" style="margin: 0">
									<legend>New Patient</legend>
									<div class="col-xs-10 col-xs-offset-1 columns">											
										<input id="idt" type="hidden" name="date" value="<?php echo $date;?>" id="idate"/>
										<input type="hidden" name="time" id="itime"/>
										<input type="hidden" value="New Patient" name="nptype">
										<div class="col-xs-12 col-sm-12 col-md-12 columns">				  				
											<div class="col-xs-12 col-sm-6 col-md-6 columns">	
												<label class="form-elem" for="uname">Username *</label> <br> 
												<span class="alert-success" style="margin: 0 0 5px 0; padding:5px; display:block"><b>NOTE:</b> This will be used for future appointment bookings.<br>&nbsp</span>	
												<input id="uname" class="form-control" placeholder="This serves as your identifier" name="uname" type="text" required/>
											</div>
											<div class="col-xs-12 col-sm-6 col-md-6 columns">	
												<label class="form-elem" for="cno">Mobile number *</label> <br>	 
												<span class="alert-warning" style="margin: 0 0 5px 0; padding:5px; display:block"><b>NOTE:</b> Please input your correct number. The status of your appointment booking is sent to this number.</span>
												<input placeholder="format: 09123456789" id="cno" class="form-control" name="cnum" type="text" required pattern="[0][9][0-9]{9}" />
											</div>
											<br>
										</div>	
											
										<div class="col-xs-12 col-sm-12 col-md-12 columns" style="margin-top: 10px">				  				
											<div class="col-xs-12 col-sm-6 col-md-6 columns">	
												<label class="form-elem" for="fname">First name *</label>
												<input id="fname" class="form-control" name="fname" type="text" required />
											</div>
											<div class="col-xs-12 col-sm-6 col-md-6 columns">
												<label class="form-elem" for="lname">Last name *</label>
												<input id="lname" class="form-control" name="lname" type="text" required />	
											</div>
										</div>	
									
										<div class="col-xs-12 col-sm-12 col-md-12 columns" style="margin-top: 10px">
											<div class="col-xs-12 col-sm-6 col-md-6 columns">
												<label class="form-elem" for="mname">Middle name *</label>
												<input id="mname" class="form-control" name="mname" type="text" required />
											</div>
											<div class="col-xs-12 col-sm-6 col-md-6 columns">	
												<label class="form-elem" for="email">Email address *</label>
												<input id="email" class="form-control" name="email" type="email" required />
											</div>
										</div>			
										<div class="col-xs-12 columns" style="margin-top: 10px">
											<div class="col-xs-6 columns">
												<label class="form-elem" for="bdate">Birthdate *</label>
												<input id="bdate" class="form-control" name="bdate" type="date" required />
											</div>
											<div class="col-xs-6 columns">
												<label class="form-elem" for="profile-gender">Gender *</label>
				                                <select id="profile-gender"class="form-control" name="gender" required>
				                                  <option value="" disabled default selected style="display:none;"></option>
				                                  <option value="Male">Male</option>
				                                  <option value="Female">Female</option>
				                                </select>
											</div>
											<div class="col-xs-12 columns">	
												<label class="form-elem" for="reason">Type of treatment to avail</label>
												<input id="nreason" class="form-control" name="nreason" type="reason" />
											</div>
										</div>
										<br />
										<div class="col-sm-12 col-md-12 col-xs-12 columns" style="margin-top:10px">									
											<label class="form-elem">
												<input id="chk" type="checkbox">	
												I confirm that the information I have supplied are authentic and I'm aware that 
												I will receive an email and text message notification about my appointment booking.
											</label> 
											<hr />
											<button id="sub" type="submit" class="btn btn-success">Continue</button>
										</div>
									</div>
								</div>
						</div>
	</form>
</div>
<!--- END OF APPOINTMENT FORM FOR NEW PATIENT -->

<?php $this->load->view('footer'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		if($('#type').val()=='new-patient'){
			$('#old').hide();
			$('#new').show();
		}
		else if($('#type').val()=='old-patient'){
			$('#old').show();
			$('#new').hide();
		}
		else{
			$('#old').hide();
			$('#new').hide();
		}
		
		$(document).on('change', '#type', function(e) {
		    if(this.options[e.target.selectedIndex].text == "New Patient"){
		    	$('#old').hide();
				$('#new').show();
				$('#opatient-usrname').prop('required',false);
				$('#fname').prop('required',true);
				$('#lname').prop('required',true);
				$('#mname').prop('required',true);
				$('#bdate').prop('required',true);
				$('#cno').prop('required',true);
				$('#tno').prop('required',true);
				$('#opatient-usrname').val('');
				$('#chck').attr('checked', false);
		    }
		    else{
		    	$('#new').hide();
				$('#old').show();
				$('#opatient-usrname').prop('required',true);
				$('#fname').prop('required',false);
				$('#lname').prop('required',false);
				$('#mname').prop('required',false);
				$('#mname').prop('required',false);
				$('#cno').prop('required',false);
				$('#tno').prop('required',false);
				$('#bdate').prop('required',false);
				$('#uname').val('');
				$('#fname').val('');
				$('#lname').val('');
				$('#mname').val('');
				$('#cno').val('');
				$('#tno').val('');
				$('#chk').attr('checked', false);
		    }
		});

		$(document).on('change', '#av-timeslots', function(e) {
			$('#itime').val(this.options[e.target.selectedIndex].text);
			$('#otime').val(this.options[e.target.selectedIndex].text);
		});

		$('#sub').click(function(event){
			if($('#np').valid()){
				if($('#av-timeslots').val()==null){
					event.preventDefault();
					swal('ERROR','Select a timeslot.','error');
				}else if($("#chk").prop("checked")){
					event.preventDefault();
					$.getJSON("<?php echo base_url();?>patient/check_username/",{username:$('#uname').val()},success=function(data){
			        	if(data != '0'){
			        		event.preventDefault();
			        		swal('ERROR','Username already exists','error');
			        	}else{
			        		$.getJSON("<?php echo base_url();?>patient/check_patient/",{firstname:$('#fname').val(), lastname:$('#lname').val(), middlename:$('#mname').val()},success=function(data){
			        			if(data != '0'){
			        				event.preventDefault();
			        				swal('ERROR','You already have a profile','error');
			        			}else{
			        				$.getJSON("<?php echo base_url();?>appointment/check_duplicate_appointment/",{username:$('#uname').val(), date:$('#idt').val()},success=function(data){
			        					if(data != '0'){
			        						event.preventDefault();
			        						swal('ERROR','You can only reserve appointment once per day.','error');
			        					}
			        					else{
							        			$('#np').submit();
										}
									});
			        			}
			        		});
			        	}
			        });
				}else{
						event.preventDefault();
						swal('ERROR','Confirmation not checked.','error');
				}
			}
		});	

		$('#sub1').click(function(event){
			if($('#op').valid()){
				if($('#av-timeslots').val()==null){
					event.preventDefault();
					swal('ERROR','Select a timeslot.','error');
				}else if($("#chck").prop("checked")){
					event.preventDefault();
					$.getJSON("<?php echo base_url();?>patient/check_username/",{username:$('#opatient-usrname').val()},success=function(data){
			        	if(data == '0'){
			        		event.preventDefault();
			        		swal('ERROR','Username doesnt exists.','error');
			        	}else{
			        		event.preventDefault();
			        		$.getJSON("<?php echo base_url();?>appointment/check_duplicate_appointment/",{username:$('#opatient-usrname').val(), date:$('#odt').val()},success=function(data){
			        			if(data != '0'){
			        				event.preventDefault();
			        				swal('ERROR','You can only reserve appointment once per day.','error');
			        			}else{
			        					$('#op').submit();
					        	}
					        });			
			        	}
			        });
				}else{
					event.preventDefault();
					swal('ERROR','Confirmation not checked.','error');
				}	
			}
		});

		

	});
</script>