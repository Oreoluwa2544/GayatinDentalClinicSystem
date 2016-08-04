<?php $this->load->view('header', array('num' => 7, 'title' => 'Appointment Creation')); ?>					
			
<!-- <div class="col-xs-10 col-xs-offset-1 col-lg-10 col-lg-offset-1 columns appointment-form">						
</div> -->
<div id="old" class="col-xs-10 col-xs-offset-1 columns">
	<form id="confirmation" method="post" action="<?php echo base_url();?>appointment/add_appointment" role="form">
		<div class="element-container">
			<div class="row" style="margin: 0">								
				<legend>Appointment Confirmation</legend>							
				<div class="col-xs-12 columns">												
					<input id="date" type="hidden" name="date" value="<?php echo $date;?>"/>
					<input id="time" type="hidden" name="time" value="<?php echo $time;?>"/>
					<input id="code" type="hidden" name="code" value="<?php echo $code;?>"/>
					<input id="oldusername" type="hidden" name="oldusername" value="<?php echo $oldusername;?>"/>
					<input id="newusername" type="hidden" name="newusername" value="<?php echo $newusername;?>"/>
					<input id="firstname" type="hidden" name="firstname" value="<?php echo $firstname;?>"/>
					<input id="lastname" type="hidden" name="lastname" value="<?php echo $lastname;?>"/>
					<input id="middlename" type="hidden" name="middlename" value="<?php echo $middlename;?>"/>
					<input id="birthdate" type="hidden" name="birthdate" value="<?php echo $birthdate;?>"/>
					<input id="gender" type="hidden" name="gender" value="<?php echo $gender;?>"/>
					<input id="age" type="hidden" name="age" value="<?php echo $age;?>"/>
					<input id="nreason" type="hidden" name="nreason" value="<?php echo $nreason;?>"/>
					<input id="oreason" type="hidden" name="oreason" value="<?php echo $oreason;?>"/>
					<input id="email" type="hidden" name="email" value="<?php echo $email;?>"/>
					<input id="mobileno" type="hidden" name="mobileno" value="<?php echo $mobileno;?>"/>
					<div class="col-xs-5 col-xs-offset-1 columns">
						<label>Schedule Details</label> <br />
						<label>Date</label>: <?php echo date("F j, Y",strtotime($date));?> <br />
						<label>Time</label>: <?php echo $time;?>
					</div>

					<div class="col-xs-5 columns">
						<label for="mycode">Appointment code</label>
							<?php if($this->session->userdata('username')){ ?>
								<input id="mycode" class="form-control" placeholder="Enter the code sent to your phone/email" name="mycode" type="text" value="<?php echo $testcode;?>" required/>
							<?php } else { ?>
								<input id="mycode" class="form-control" placeholder="Enter the code sent to your phone/email" name="mycode" type="text" required/>
							<?php } ?>
					</div>
				</div>
				<div class="col-xs-12 columns">
					<hr />	
					<button id="sub" type="submit" class="btn btn-success">Submit</button> 
				</div>
			</div>	
		</div>
	</form>
</div>

<?php $this->load->view('footer'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#sub').click(function(event){
			if($('#confirmation').valid()){
				event.preventDefault();
				if($('#code').val()!=md5($('#mycode').val())){
					event.preventDefault();
					swal('ERROR','Incorrect Code','error');
				}
				else{
					if(confirm('Are you sure to reserve an appointment on ' + $('#date').val() + ' at ' + $('#time').val())){
				        $('#confirmation').submit();
				    }
				}

			}
		});

	});
</script>