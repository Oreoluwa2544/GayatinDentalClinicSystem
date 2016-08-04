<?php $this->load->view('header', array('num' => 2, 'title' => 'View Treatment')); ?>
<div class="element-container ">
    <div class="row center-block">
        <div class="col-lg-12 columns large-centered">
			<legend>Treatment record for <?php echo date('F j, Y',strtotime($record->date));?></legend>

			<div class="col-xs-6 col-xs-offset-1 columns">
				<h5><label>Dentist in Charge</label>: Dr. <?php echo $record->dentistincharge;?></h5>
				<h5><label>Chief Complaint</label>: <?php echo $record->chiefcomplaint;?></h5>
				<h5><label>Other Findings</label>: <?php echo $record->otherfindings;?></h5>
			</div>
			<div class="col-xs-5 columns">
				<h5><label>Total Amount to Pay</label>: <?php echo number_format($transaction->totalamount);?></h5>
				<h5><label>Payment Received</label>: <?php echo number_format($transaction->amountpaid);?></h5>
				<h5><label>Remaining Balance</label>: <?php echo number_format($transaction->balance);?></h5>
			</div>
			<hr>

			<div class="col-xs-12 columns">
				<table id="example" class="table table-striped" cellspacing="0" width="100%">
			        <thead>
			            <tr class="alert-info">
			            	<th class="text-center vertical-middle-align">Type</th>
			                <th class="text-center vertical-middle-align">Treatment</th>
			                <th class="text-center vertical-middle-align">Tooth #</th>
			                <th class="text-center vertical-middle-align">Part of Tooth</th>
			                <th class="text-center vertical-middle-align">Price of Treatment</th>
			            </tr>
			        </thead>
			 
			        <tbody class="text-center" style="text-align: center">	
				        <?php foreach($treatment as $treatment):?>					          
				            <tr>		
				            	<td class="text-center vertical-middle-align"><?php echo $treatment->type;?> Treatment</td>			                
				            	<td class="text-center vertical-middle-align"><?php echo $treatment->treatment;?></td>
				            	<td class="text-center vertical-middle-align"><?php if($treatment->toothno != 0){echo $treatment->toothno;}else{?>N/A<?php }?></td>
				            	<td class="text-center vertical-middle-align"><?php echo $treatment->toothsurface;?></td>
				            	<td class="text-center vertical-middle-align"><?php echo number_format($treatment->price);?></td>
				            </tr>		
				        <?php endforeach;?>					            						            
			        </tbody>
			    </table>
			</div>
        </div>

        <div class="col-xs-12 columns">
			<hr />
        	<a id="reference" href="<?php echo base_url();?>treatment/view_teethprofile/<?php echo $record->patient_id;?>/<?php echo $record->id;?>">
                <button id="vtt" type="button" class="btn btn-info">View Tooth Treatments</button>
            </a>
			<button id="print" class="btn btn-success" onclick="printpage()">
				<span class="glyphicon glyphicon-print"></span> Print Treatment Record
			</button>
		</div>
    </div>
</div>
<?php $this->load->view('footer'); ?>

<script type="text/javascript">
    function printpage() {
        //Get the print button and put it into a variable
        var ref = document.getElementById("reference");
        var toothButton = document.getElementById("vtt");
        var printButton = document.getElementById("print");
        //Set the print button visibility to 'hidden' 
        ref.style.visibility = 'hidden';
        toothButton.style.visibility = 'hidden';
        printButton.style.visibility = 'hidden';
        //Print the page content
        window.print()
        //Set the print button to 'visible' again 
        //[Delete this line if you want it to stay hidden after printing]
        ref.style.visibility = 'visible';
        toothButton.style.visibility = 'visible';
        printButton.style.visibility = 'visible';
    }
</script>