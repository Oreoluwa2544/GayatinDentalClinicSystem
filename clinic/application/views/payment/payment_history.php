<?php $this->load->view('header', array('num' => 2, 'title' => 'Payment History')); ?>
<div class="element-container ">
    <div class="row center-block">
        <div class="col-xs-12 columns large-centered">
            <?php foreach($prof as $prof):?>
				<h2 colspan="2" style="text-align: center; font-weight: bold; font-size: 150%"><?php echo $prof->firstname;?> <?php echo $prof->middlename[0];?>. <?php echo $prof->lastname;?>'s Payment History</h2>
			<?php endforeach;?>				
                <div class="col-xs-12 columns">
                	<div class="large-tables">
						<table id="example" class="table table-striped" cellspacing="0" width="100%">
					        <thead class="alert-info">
					            <tr>
					            	<th class="vertical-middle-align" width="15%" style="text-align:center">Date</th>
					            	<th class="vertical-middle-align" width="20%" style="text-align:center">Payment Type</th>
					            	<th class="vertical-middle-align" width="15%" style="text-align:center">Previous Balance</th>
					            	<th class="vertical-middle-align" width="15%" style="text-align:center">Treatment Fee</th>
					            	<th class="vertical-middle-align" width="10%" style="text-align:center">Payment</th>
					            	<th class="vertical-middle-align" width="10%" style="text-align:center">Paid To</th>
					            	<th class="vertical-middle-align" width="15%" style="text-align:center">New Balance</th>
					            </tr>
					        </thead>
					        <tbody id="tbody" style="text-align: center">	
					        <?php foreach($paymentdata as $paymentdata):?>					          
					            <tr>			                
					            	<td><?php echo date("F j, Y",strtotime($paymentdata->date));?></td>
					            	<td><?php echo $paymentdata->type;?></td>
					            	<td><?php echo number_format($paymentdata->old_balance);?></td>
					            	<td><?php if($paymentdata->treatment_fee!=0){echo number_format($paymentdata->treatment_fee);}else{?>N/A<?php }?></td>
					            	<td><?php echo number_format($paymentdata->payment);?></td>
					            	<td><?php echo $paymentdata->paid_to;?></td>
					            	<td><?php echo number_format($paymentdata->new_balance);?></td>
					            </tr>
					          <?php endforeach;?>
					        </tbody>
						</table>
					</div>
					<div class="col-xs-12 columns">
						<hr />
						<button id="print" class="btn btn-success" onclick="printpage()">
							<span class="glyphicon glyphicon-print"></span> Print Payment History
						</button>
					</div>
				</div>

         </div>
      </div>
</div>
<?php $this->load->view('footer'); ?>

<script type="text/javascript">
    $(document).ready(function() {
    	$('#example').dataTable();
     });

    function printpage() {
        //Get the print button and put it into a variable
        // var ref = document.getElementById("reference");
        // var toothButton = document.getElementById("vtt");
        var printButton = document.getElementById("print");
        //Set the print button visibility to 'hidden' 
        // ref.style.visibility = 'hidden';
        // toothButton.style.visibility = 'hidden';
        printButton.style.visibility = 'hidden';
        //Print the page content
        window.print()
        //Set the print button to 'visible' again 
        //[Delete this line if you want it to stay hidden after printing]
        // ref.style.visibility = 'visible';
        // toothButton.style.visibility = 'visible';
        printButton.style.visibility = 'visible';
    }
</script>