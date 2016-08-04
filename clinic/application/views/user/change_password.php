<?php $this->load->view('header', array('num' => 9, 'title' => 'Edit Staff Account')); ?>
<div class="row">		
	<div class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4 columns">						
			<div class="element-container">
				<div class="row" style="margin:0">
					<legend>Change Password</legend>	
					<div class="col-xs-10 col-xs-offset-1 columns">											
					<form id="chpass" method="post" action="<?php echo base_url();?>admin/update_password" role="form">
						<input id="uid" class="form-control" value="<?php echo $id;?>" name="staffid" type="hidden" />
						<input id="op" class="form-control" name="old_password" type="password" placeholder="Old Password" required/><br>
						<input id="pass" class="form-control" name="password" minlength="5" type="password" placeholder="New Password" required/><br>
						<input id="cpass" class="form-control" name="confirm_password" minlength="5" type="password" placeholder="Confirm password" required/><br>
						<legend></legend>
						<button type="submit" id="sub" class="btn btn-success">Submit</button>
					</form>
					</div>
				</div>
			</div>
	</div>
</div>
<?php $this->load->view('footer'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('.datepicker').datepicker();	
		$('#changepass').hide();
		$('#cchpa').hide();
		$('#chpa').click(function(){
			$('#changepass').fadeIn(700);
			$('#chpa').hide();
			$('#cchpa').show();
		});
		$('#cchpa').click(function(){
			$('#changepass').hide();
			$('#np').val("");
			$('#cp').val("");
			$('#cchpa').hide();
			$('#chpa').show();
		});
		$('#sub').click(function(event){

			event.preventDefault();
	        $.getJSON("<?php echo base_url();?>admin/check_password/",{password:$('#op').val(),userid:$('#uid').val()},success=function(data){
	                if(data == '0'){
	                  swal('ERROR','Wrong old password','error');
	                  event.preventDefault();
	                }
	                else{
	                 	if($('#pass').val()!=$('#cpass').val()){
				        	swal("ERROR","Password/confirm password do not match","error");
				        	event.preventDefault();
				       	}
				       	else
				       		$("#chpass").submit();
			       }
	        });

			
		});
	});	
</script>