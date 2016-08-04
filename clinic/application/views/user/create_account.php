<?php $this->load->view('header', array('num' => 5, 'title' => 'Add New Account')); ?>
	<div class="row">		
			<!-- <div class="col-xs-10 columns col-xs-offset-1 col-md-8 columns col-md-offset-2 col-lg-6 columns col-lg-offset-3 columns"> -->
			<div class="col-xs-10 col-xs-offset-1 col-lg-8 col-lg-offset-2 columns">

				<div class="element-container">
					<div class="row center-block">
						<legend>Add New Account</legend>
						<form id="cacc" method="post" action="<?php echo base_url();?>admin/create_account" role="form">
							<div class="personal-inf col-xs-12 col-sm-12 col-md-12 columns">
								<div class="col-xs-6 columns">	
									<label class="form-elem" for="username">Username *</label>
									<input id="username" class="form-control" name="username" type="text" required />							
									
									<label class="form-elem" for="fname">First Name *</label>
									<input id="fname" class="form-control" name="fname" type="text" required/>														  			
									<label class="form-elem" for="mname">Middle Name *</label>
									<input id="mname" class="form-control" name="mname" type="text" required/>														  												
								</div>
								<div class="col-xs-6 columns">	
									<label class="form-elem" for="lname">Last Name *</label>
									<input id="lname" class="form-control" name="lname" type="text" required/>
									<label class="form-elem" for="type">Account Type</label>
		                                <select id="type" class="form-control" name="type" style="width:50%" required >
		                                  <option value="1">Clinic Staff</option>
		                                  <option value="0">Dentist</option>
		                                </select>  
								</div>
							</div>			
							<div class="account-inf col-xs-12 col-sm-12 col-md-12 columns" style="margin-top: 10px">	
								<div class="col-xs-12 columns">
									<span class="alert-success" style="margin: 10px 0; padding:5px; display:block">
										<b>NOTE</b>: The default password is <b><i>password</i></b>. 
										You may change your password once you have logged-in to your account.
									</span>
								</div>
							</div>							
							<div class="col-xs-12 columns">
								<hr />
								<button id="sub" type="submit" class="btn btn-success">Submit</button>
							</div>
						</form>
					</div>
				</div>
		</div>
	</div>
<?php $this->load->view('footer'); ?>
<script type="text/javascript">
	$(document).ready(function(){

		$("#sub").click(function(event){
			if($('#cacc').valid()){
		event.preventDefault();
	        $.getJSON("<?php echo base_url();?>admin/check_username/",{username:$('#username').val()},success=function(data){
	                if(data == '1'){
	                  swal('ERROR','Username already exists','error');
	                  event.preventDefault();
	                }
	                else{
	                	event.preventDefault();
				        $.getJSON("<?php echo base_url();?>admin/check_staff/",{
				        			firstname:$('#fname').val(),
				        			middlename:$('#mname').val(),
				        			lastname:$('#lname').val(),
				        			type:$('#type').val()
				        	}, success=function(data){
				                if(data == '1'){
				                  swal('ERROR','The person already has an account','error');
				                  event.preventDefault();
				                }
				                else
				       				$("#cacc").submit();
				       		});
			       }
	        });
	      }

	    });

	});	
</script>