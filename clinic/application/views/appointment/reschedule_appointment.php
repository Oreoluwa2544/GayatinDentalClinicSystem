<?php $this->load->view('header', array('num' => 7, 'title' => 'Reschedule Appointment')); ?>					
			
<div class="col-xs-10 col-xs-offset-1 col-lg-10 col-lg-offset-1 columns appointment-form">
						
</div>

<!--- APPOINTMENT FORM FOR OLD PATIENT -->
<div id="old" class="col-xs-10 col-xs-offset-1 col-lg-10 col-lg-offset-1 columns">
	<form id="resched" method="post" action="<?php echo base_url();?>appointment/move_appointment" role="form">
		<div class="element-container">
			<div class="row" style="margin: 0">								
				<legend>Reschedule an Appointment</legend>							
				<div class="col-xs-10 col-xs-offset-1 columns">	
					<div class="col-xs-12 columns">
						<div id="hiddenfield">
						<?php if($check==1){ ?>
							<input id="atime" type="hidden" name="atime" value="<?php echo $info->time;?>" />
							<input id="adate" type="hidden" name="adate" value="<?php echo $info->date;?>" />
						<?php }?>
						</div>	

						<div class="col-xs-6 col-lg-4 columns">
							<label for="appointmentno"class="form-elem">Appointment code *</label>
							<input id="appointmentno" class="form-control" name="appointmentnumber"  placeholder="Input your appointment code" <?php if($check==1){ ?> value="<?php echo $info->appointmentno;?>" <?php } ?> required/>												      	
						</div>
						<div class="col-xs-6 col-lg-4 columns">
							<label for="date"class="form-elem">Choose new date *</label>
							<input class="form-control" id="close-date2" type="date"  onchange="selectdate()" name="date"  min=<?php echo date("Y-m-d",strtotime('tomorrow'));?> required />
						</div>
						
						<div class="col-xs-6 col-lg-4 columns">
							<label for="date"class="form-elem">Choose timeslot *</label>
							<select id="close-sched1" class="form-control" name="time" required>
							</select>
						</div>
						
						<div class="col-xs-12 columns">
							<hr />	
							<button id="sub" type="submit" class="btn btn-success">Submit</button>
						</div>
					</div>										
				</div>									
			</div>	
		</div>
	</form>
</div>

<?php $this->load->view('footer'); ?>
<script type="text/javascript">
	function selectdate(){
	$.ajaxSetup ({
	        cache: false
	});
	date=document.getElementById('close-date2');
	$.post("<?php echo base_url();?>calendar/gitSched",{date:date.value,adate:$('#adate').val(),atime:$('#atime').val()},function(data){
		
		
		
		var list="";
		data=data.split("space");
		var x;

		if(date.value!=$('#adate').val()){
			for(x=0;x<data.length-1;x++)
				list+="<option value='"+data[x]+"'>"+ data[x] +"</option>";
		}
		else{
			for(x=0;x<data.length-1 && data[x]!=$('#atime').val();x++);
			x+=1;
			for(;x<data.length-1;x++)
				
				list+="<option value='"+data[x]+"'>"+ data[x] +"</option>";
		}
		
		$("#close-sched1").html(list);
		});
	}	

	$(document).ready(function(){

		$('#sub').click(function(event){
			if($('#resched').valid()){
				event.preventDefault();
				$.getJSON("<?php echo base_url();?>appointment/check_appointmentno/",{appointmentno:$('#appointmentno').val()},success=function(data){
				    if(data == '0'){
				    	event.preventDefault();
				        swal("ERROR","Appointment number doesn't exists","error");
				    }else{
				    	event.preventDefault();
						if($('#close-sched1').val()=="Clinic is not open during Sunday's"){
							event.preventDefault();
							swal('ERROR','Not open on Sunday','error');
						}
						else{
							if(confirm('Are you sure to reschedule your appointment?')){
							    $('#resched').submit();
							}
						}
					}
				});
			}
		});

		$('#appointmentno').on('input', function() {
			$('#close-date2').val("")
			$('#close-sched1').val("")
		});

		$("#appointmentno").change( function() {
	    	$.ajax({
		          url:"<?php echo base_url(); ?>appointment/appointment_info",    
		          data: {appointmentno: $('#appointmentno').val()},
		          type: "POST",
		          success: function(data){
		              
		              $("#hiddenfield").html(data);
		          }
		     });
			    
		});

	});

</script>