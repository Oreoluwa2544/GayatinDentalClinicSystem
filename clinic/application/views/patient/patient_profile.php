<?php $this->load->view('header', array('num' => 2, 'title' => 'Patient Profile')); ?>
<?php foreach($profile as $prof):?>
			<div class="col-xs-10 col-xs-offset-1 columns pprofile-content">				
				<div class="col-xs-12 columns col-lg-12 columns" style="margin-bottom:5px" >
					<a href="<?php echo base_url();?>treatment/new_treatment/<?php echo $prof->patient_id;?>">
						<button type="button" class="btn btn-success">
							<span class="glyphicon glyphicon-plus"></span> Add Treatment Record
						</button>
					</a>
					<a target="_blank" href="<?php echo base_url();?>treatment/treatment_history/<?php echo $prof->patient_id;?>">
						<button type="button" class="btn btn-info">
							<span class="glyphicon glyphicon-list-alt"></span> Treatment History
						</button>
					</a>			
				</div>
			
				<!-- START OF LEFT COLUMN -->
				<div class="col-xs-12 col-md-6 col-lg-7 columns">	
					<div class="col-xs-12">
						<div class="panel panel-info">
	                      <div class="panel-heading text-center">                           
	                           <span>Personal Information</span>
	                      </div>
	                      <div class="panel-body">
	                      		<p><strong>Name</strong>: <?php echo $prof->firstname;?> <?php echo $prof->middlename;?> <?php echo $prof->lastname;?></p>
	                      		<p><strong>Username</strong>: <?php echo $prof->username;?></p>
	                            <p><strong>Home address</strong>: <?php echo $prof->address;?></p>
	                            <p><strong>Telephone number</strong>: <?php echo $prof->telno;?></p>
	                            <p><strong>Mobile number</strong>: <?php echo $prof->mobileno;?></p>
	                            <p><strong>Marital status</strong>: <?php echo $prof->maritalstatus;?></p>
	                            <p><strong>Gender</strong>: <?php echo $prof->gender;?></p>
	                            <p><strong>Age</strong>: 10</p>
	                      </div>
						</div>
					</div>							              	
	              	<div class="col-xs-12">
	              		<div class="panel panel-info">
		                      <div class="panel-heading text-center">                           
		                           <span>Dental Information</span>
		                           <a href="<?php echo base_url();?>patient/view_teethprofile/<?php echo $prof->patient_id;?>">
		                           		<button type="button" class="btn btn-primary">
		                         			<span class="glyphicon glyphicon-file"></span> Teeth Profile
		                           		</button>
		                           	</a>
		                      </div>
		                      <div class="panel-body">
		                            <p><strong>OCCLUSION</strong>: <?php echo $prof->occlusion;?></p>
						  			<p><strong>Periodontal condition</strong>: <?php echo $prof->periodontalcondition;?></p>
						  			<p><strong>Oral hygiene</strong>: <?php echo $prof->oralhygiene;?></p>
						  			<p><strong>Previous history of bleeding</strong>: <?php echo $prof->prevhistoryofbleeding;?></p>
							  		<p><strong>Blood pressure</strong>: <?php echo $prof->bloodpressure;?></p>
							  		<p><strong>Denture</strong></p>
							  			<p>Upper Since 1994</p>
							  			<p>Lower Since 1994</p>
		                      </div>
	              		</div>
	              	</div>					
	              	<div class="col-xs-12">
	              		<div class="panel panel-info">
		                      <div class="panel-heading text-center">                           
		                           <span>Work Information</span>
		                      </div>
		                      <div class="panel-body">
		                            <p><strong>Office address</strong>: <?php echo $prof->officeaddress;?></p>
		                            <p><strong>Telephone number</strong>: <?php echo $prof->officetelno;?></p>
		                      </div>
	              		</div>
	              	</div>
				</div>	
				<!-- END OF LEFT COLUMN -->

				<!-- START OF RIGHT COLUMN -->
				<div class="right-elems col-xs-12 col-md-6 col-lg-5">
					<?php endforeach;?>
					<div class="col-xs-12">
						<div class="panel panel-info">
	                      <div class="panel-heading text-center">                           
	                           <span>Remaining Balance</span>
	                      </div>
	                      <div class="panel-body text-center">
	                      		<p class="text-center"><strong>PHP <?php echo Number_format($prof->total_balance);?></strong></p>
	                      		<button type="button" class="btn btn-success" onclick="add_payment()">
									<span class="glyphicon glyphicon-plus"></span> Add Payment
								</button>
								<a target="_blank" href="<?php echo base_url();?>payment/payment_history/<?php echo $prof->patient_id;?>">
								<button type="button" class="btn btn-info">
									<span class="glyphicon glyphicon-list-alt"></span> Payment History
							   </button>
							   </a>
	                      </div>
						</div>
					</div>
					<div class="col-xs-12 columns">
							<div class="panel panel-info">
							  	<!-- Default panel contents -->
							  	<div class="panel-heading text-center">Chronic Ailments</div>		
								<table id="example" class="table table-striped" cellspacing="0" width="100%">							 
									<thead>
										<tr>
											<th class="vertical-middle-align text-center">Name</th>
											<th class="vertical-middle-align text-center">Date Added</th>
										</tr>
									</thead>
							        <tbody>
							          <?php foreach($chronicailment as $ca):?>
							            <tr>					                
							            	<td class="text-center" class="text-center"><?php echo $ca->chronicailmentname;?></td>
							            	<td class="text-center" class="text-center"><?php echo date("F j, Y",strtotime($ca->dateadded));?></td>
							            </tr>
							          <?php endforeach;?>
							        </tbody>
								</table>
							</div>
					</div>			
					<div class="col-xs-12 columns">	
							<div class="panel panel-info">
							  	<!-- Default panel contents -->
							  	<div class="panel-heading text-center">Drugs Taken</div>
								<table id="example" class="table table-striped" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th class="vertical-middle-align text-center">Name</th>
											<th class="vertical-middle-align text-center">Date Added</th>
										</tr>
									</thead>
							        <tbody>
							          <?php foreach($drugstaken as $dt):?>
							            <tr>					                
							            	<td class="text-center"><?php echo $dt->drugname;?></td>
							            	<td class="text-center" class="text-center"><?php echo date("F j, Y",strtotime($dt->dateadded));?></td>
							            </tr>
							          <?php endforeach;?>
							        </tbody>
							    </table>
							</div>
					</div>
					<div class="col-xs-12 columns">
							<div class="panel panel-info">
							  	<!-- Default panel contents -->
							  	<div class="panel-heading text-center">Allergies</div>
								<table id="example" class="table table-striped" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th class="vertical-middle-align text-center">Name</th>
											<th class="vertical-middle-align text-center">Date Added</th>
										</tr>
									</thead>
							        <tbody>
							          <?php foreach($allergies as $al):?>
							            <tr>					                
							            	<td class="text-center"><?php echo $al->allergyname;?></td>
							            	<td class="text-center" class="text-center"><?php echo date("F j, Y",strtotime($al->dateadded));?></td>
							            </tr>
							          <?php endforeach;?>
							        </tbody>
							    </table>
							</div>
					</div>
			</div>
			<!-- END OF RIGHT COLUMN -->
		</div><!--- closing div for the div with a xs-12 class -->

		<!-- START OF MODAL FOR ADDING PAYMENT -->
		<div class="modal fade" id="modal-add-payment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
            <form method="post" role="form" action="<?php echo base_url();?>payment/add_payment">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add payment</h4>
              </div>

              <div class="modal-body" style="display:flex">                                                                      
				<div class="col-xs-10 col-xs-offset-1 columns">	
					<div class="col-xs-6 col-md-6 col-lg-6 columns">
						<p><strong>Remaining balance</strong><br/><?php echo Number_format($prof->total_balance);?></p>
						<input type="hidden" name="pid" value="<?php echo $prof->patient_id;?>">
						<input type="hidden" name="totalbalance" value="<?php echo $prof->total_balance;?>">
					</div>
					<div class="col-xs-6 col-md-6 col-lg-6 columns">
					<?php if($prof->total_balance==0){?>
						<label for="amt-paid" style="color:red">Remaining balance is ZERO (0)</label>
					<?php }else{?>
	                	<label for="amt-paid">Payment amount</label>
	                	<input id="amt-paid" class="form-control" name="amount" type="number" max="<?php echo $prof->total_balance;?>" min="1" required />
	                <?php }?>
                	</div>
                </div>
              </div>
              
              <div class="modal-footer">
              <?php if($prof->total_balance!=0){?>
              	<button id="add-payment" type="submit" class="btn btn-primary">Submit</button>                            
              <?php }?>
              </div>  
              </form>                        
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
      	</div><!-- /.modal -->
		<!-- END OF MODAL FOR ADDING PAYMENT -->

		<!-- START OF MODAL FOR PAYMENT HISTORY -->
		<div class="modal fade" id="modal-payment-history" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Payment history</h4>
              </div>

              <div class="modal-body" style="display:flex">                                                                      
				<div class="col-lg-12 columns">	
					<table class="table table-bordered">
						<tr>
							<th class="text-center vertical-middle-align">Date</th>
							<th class="text-center vertical-middle-align">Date</th>
							<th class="text-center vertical-middle-align">Date</th>
							<th class="text-center vertical-middle-align">Date</th>
							<th class="text-center vertical-middle-align">Amount Paid</th>
							<th class="text-center vertical-middle-align">Paid To</th>
						</tr>
						<tr>
							<td class="text-center vertical-middle-align">August 39</td>
							<td class="text-center vertical-middle-align">1000 </td>
							<td class="text-center vertical-middle-align">fullname of user</td>
							<td class="text-center vertical-middle-align">fullname of user</td>
							<td class="text-center vertical-middle-align">fullname of user</td>
							<td class="text-center vertical-middle-align">fullname of user</td>

						</tr>
					</table>
                </div>
              </div>
              
              <div class="modal-footer">
                <input class="btn btn-info" type="submit" name="submit" value="Submit" name="submit" onclick="add_service()" required />                            
              </div>                          
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
      	</div><!-- /.modal -->
		<!-- END OF MODAL FOR PAYMENT HISTORY -->


<?php $this->load->view('footer'); ?>
<script type="text/javascript">
    var cctr=1;
    var actr=1;

    $(document).ready(function(){
                $("#add_drugs").click(function(){
                	ctemp = cctr;
                	cctr+=1;
                    $('<br id="bdt' + cctr + '"><textarea id="dt' + cctr + '" class="form-control" name="adt[]" placeholder="Drugs Taken ('+ ctemp +')"></textarea>').insertAfter("#dt"+ ctemp);
                });

                $("#rmv_drugs").click(function() {
                    if (cctr != 1) { 
                      $('#bdt' + cctr).remove();
                      $('#dt' + cctr).remove();
                      cctr -= 1; 
                    }
                });

                $("#add_allergy").click(function(){
                	atemp = actr;
                	actr+=1; 
                    $('<br id="bal' + actr + '"><textarea id="al' + actr + '" class="form-control" name="aal[]" placeholder="Allergies ('+ atemp +')"></textarea>').insertAfter("#al"+ atemp);                
                });

                $("#rmv_allergy").click(function() {
                    if (actr != 1) { 
                      $('#bal' + actr).remove();
                      $('#al' + actr).remove();
                      actr -= 1; 
                    }
                });

				$(".top").click(function(){
					$("#view-findings").modal("toggle");
				});

				$(".right").click(function(){
					$("#view-findings").modal("toggle");
				});

				$(".bottom").click(function(){
					$("#view-findings").modal("toggle");
				});

				$(".left").click(function(){
						$("#view-findings").modal("toggle");
				});

				$(".center").click(function(){
					$("#view-findings").modal("toggle");
				});
    });

	function add_payment(){
		$('#modal-add-payment').modal("toggle");
	}

	function view_payment_history(){
		$('#modal-payment-history').modal("toggle");
	}
</script>