<?php $this->load->view('header', array('num' => 2, 'title' => 'Treatment History')); ?>
<div class="row element-container">
    <div class="col-xs-12 columns large-centered">
        <?php foreach($prof as $prof):?>
			<h2 colspan="2" style="text-align: center; font-weight: bold; font-size: 150%"><?php echo $prof->firstname;?> <?php echo $prof->middlename[0];?>. <?php echo $prof->lastname;?>'s Treatment History</h2>
		<?php endforeach;?>				
        <div style="margin:20px">
        	<div class="col-lg-10 col-lg-offset-1 columns"> 
				<table id="example" class="table table-striped" cellspacing="0" width="100%">
			        <thead>
			            <tr class="alert-info">
			            	<th class="text-center">Date</th>
			            	<th class="text-center">Dentist in Charge</th>
			            </tr>
			        </thead>
			        <tbody id="tbody" style="text-align: center">	
			        	<?php $ctr=0;foreach($record as $record):$ctr+=1;?>					          
				            <tr>			                
				            	<td width="40%">
				            		<a href="<?php echo base_url();?>treatment/treatment_record_history/<?php echo $record->id;?>" style="text-decoration:none">
				            			<?php echo date("F j, Y",strtotime($record->date));?>
				            		</a>
				            	</td>
				            	<td width="60%"><?php echo $record->dentistincharge;?></td>
				            </tr>
			          	<?php endforeach;?>
			        </tbody>
				</table>
        	</div>
        </div>
    </div>
</div>
<?php $this->load->view('footer'); ?>

<script type="text/javascript">
    $(document).ready(function() {
    	$('#example').dataTable();
     });
</script>