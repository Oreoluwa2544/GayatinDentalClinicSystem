<?php $this->load->view('header', array('num' => 1, 'title' => 'Clinic Calendar')); ?>
<?php 
$dates=$date["closed"];
$ctr=$date["ctr"];
$i;
;?>
<div class="col-xs-12 columns">
	<div class="element-container">
		<div class="row center-block">
			<div class="text-center" id="clockbox"></div>
				<div class="alert-success text-center" style="margin: 10px 10%; padding: 15px">
					<strong>Note</strong>: To create an appointment booking, 
					select an available date (<i>the one which has a white background</i>) on the calendar. 
					<br/>The earliest date for an appointment booking is at least 2 days after the current date. 
					<br/>If your appointment is very urgent, please contact the clinic directly. Thank you.
				</div>	
		<?php echo $calendar; ?>	
		<div class="col-lg-6 col-lg-offset-3 columns">
				<hr />
			<?php if(!$this->session->userdata('username')){?>
				<a href="<?php echo base_url();?>appointment/reschedule_appointment">
							<button class="btn btn-info btn-moveapp" style="margin-left:12%">
								<span class="glyphicon glyphicon-share-alt"></span> Reschedule an appointment
							</button>
						</a>
						<button class="btn btn-warning btn-cancelapp">
							<span class="glyphicon glyphicon-remove"></span> Cancel an appointment
						</button>
			<?php } else {?>
				<a href="<?php echo base_url();?>appointment/reschedule_appointment/"><button style="display:none" class="btn btn-info btn-moveapp"><span class="glyphicon glyphicon-share-alt"></span>Reschedule an appointment</button></a>
						<button style="display:none" class="btn btn-danger btn-cancelapp"><span class="glyphicon glyphicon-remove"></span>Cancel an appointment</button>
			<?php }?>

			<?php if($this->session->userdata("username")){?>
				<button type="button" class="btn-opensched btn btn-info" style="margin-left:24%" data-target="#modal-opensched">
							<span class="glyphicon glyphicon-plus"></span> Open a Schedule
						</button>
				<button type="button" class="btn-closesched btn btn-warning" data-target="#modal-closesched">
							<span class="glyphicon glyphicon-minus"></span> Close a Schedule
						</button>
			<?php } else {?>
			<button type="button" style="display:none" class="btn-opensched btn btn-info" data-target="#modal-opensched">Open a Schedule</button>
			<button type="button" style="display:none" class="btn-closesched btn btn-info" data-target="#modal-closesched">Close a Schedule</button>
			<?php }?>
				</hr>
			</div>
				</div>
		</div>
</div>
		<div class="row">
	  		<div class="col-md-12 columns">
	  						<div class="col-md-6 col-md-offset-3 columns">	

											<!-- MODAL FOR CANCELLING AN APPOINTMENT -->									
	  								     <!-- MODAL FOR CANCELLING AN APPOINTMENT -->	

	  								      <div class="modal fade" id="modal-cancelappointment" tabindex="-1" role="dialog" aria-labelledby="Cance an appointment" aria-hidden="true">
											  <div class="modal-dialog">
											    <div class="modal-content">
												  <form id="cancelapp_form" method="post" role="form" action="<?php echo base_url();?>appointment/cancel_appointment_byappno">
											      <div class="modal-header">
											        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											        <h4 class="modal-title">Cancel Appointment</h4>
											      </div>

											      <div class="modal-body" style="width:50%; margin: 0 auto">
												        <label for="appointmentno">Appointment Code *</label>
														<input id="appointmentno" class="form-control" name="appointmentnumber"  placeholder="Input your appointment number" required/>												      	
											     	<br>
											      </div>

											      <div class="modal-footer">
											        <button id="cancelappointment_btn" type="submit" class="btn btn-primary">Submit</button>
											      </div>
											      </form>
											    </div><!-- /.modal-content -->
											  </div><!-- /.modal-dialog -->
										  </div><!-- /.modal -->
										 <!-- END OF MODAL FOR CANCELLING A APPOINTMENT -->

										  <!-----MODAL FOR MOVING AN APPOINTMENT------>
										    <div class="modal fade" id="modal-moveppointment" tabindex="-1" role="dialog" aria-labelledby="Cance an appointment" aria-hidden="true">
											  <div class="modal-dialog">
											    <div class="modal-content">
												  <form method="post" role="form" action="<?php echo base_url();?>appointment/move_appointment">
											      <div class="modal-header">
											        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											        <h4 class="modal-title">Move an appointment</h4>
											      </div>

											      <div class="modal-body" style="width:50%; margin: 0 auto">
											        	<label>
											        		Username	
											        		<input id="uid" style="width:138%; font-weight:normal" name="username" type="text" placeholder="Input your assigned username" class="form-control" required/>
											        	</label>
												        <br/>
												        <label for="opsched-date">Appointment Number / Reservation Number</label>
														<input id="opsched-date" class="form-control" name="appnumber"  placeholder="Input your appointment number" required/>												      	
														<br>
														<label for="opsched-date">Choose Date</label>
														<input class="form-control" id="close-date2" type="date"  onchange="selectdate()" name="date"  min=<?php echo date("Y-m-d");?> required />
														<br>
														<label for="opsched-date">Choose Schedule</label>
														<select required id="close-sched1" class="form-control" name="time"  >
														
														</select>
												  </div>

											      <div class="modal-footer">
											        <button id="cancelappointment" type="submit" class="btn btn-primary">Submit</button>
											      </div>
											      </form>
											    </div><!-- /.modal-content -->
											  </div><!-- /.modal-dialog -->
										  </div>
										  
										 
	  								      <!-- MODAL FOR OPENING A SCHEDULE -->									
	  								      <div class="modal fade" id="modal-opensched" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											  <div class="modal-dialog">
											    <div class="modal-content">
										
											      <div class="modal-header">
											        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											        <h4 class="modal-title">Open a day</h4>
											      </div>

											      <div class="modal-body">
												          
												        <form method="post" role="form" action="<?php echo base_url()."calendar/openday";?>" />
														<label for="clsched-date">Open a closed date</label>
											
														
														<select id="open-sched" class="form-control" name="date" onchange="getSched()" required />
														<option value></option>
														<?php for($i=0;$i<$ctr;$i++){?>
															<option value="<?php echo $dates[$i];?>"><?php echo date("F j, Y",strtotime($dates[$i]));?> </option>
														<?php }?>
														</select>
														<br>
														<label for="clsched-date">Open Schedule(s)</label>
														<select id="sched" class="form-control" name="time" required>
														
														</select>
														<br>
														<input class="btn btn-info" type="submit" value="submit" name="submit" required />
												      </form>	
												      	<!-- <label for="open-type">Open Type</label>
								  						<select id="open-type" class="form-control" name="open-type" required>
												          <option value="wholeday">Whole Day</option>
												          <option value="tslotsonly">Time Slots Only</option>
												        </select>	 -->
															</div>
												        

												      

											      <div class="modal-footer">
											        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											        
											      </div>
											    </div><!-- /.modal-content -->
											  </div><!-- /.modal-dialog -->
										  </div><!-- /.modal -->

										  <!-- END OF OPENING A SCHEDULE MODAL -->	

										    								      

	  								      <!-- MODAL FOR CLOSING A SCHEDULE -->
	  								      <div class="modal fade" id="modal-closesched" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											  <div class="modal-dialog">
											    <div class="modal-content">

											      <div class="modal-header">
											        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											        <h4 class="modal-title">Close a Schedule</h4>
											      </div>

											      <div class="modal-body">
												    
												  <form method="post" action=<?php echo base_url()."calendar/closeday";?> />
												        <label for="clsched-date">Choose a date	</label>
														<input class="form-control" id="close-date" type="date"  onchange="CheckDate()" name="date"  min=<?php echo date("Y-m-d");?> required />
														<br>
														<label for="clsched-date">Close a time slot</label>
														<select required id="close-sched" class="form-control" name="time"  >
														
														</select>
														<br>
														<label for="clsched-date">Reason for closing</label>
														<input class="form-control" id="close-reason" type="text" name="reason" value="" required />
														<br>
														<input class="btn btn-info" type="submit" value="submit" name="submit" required />
														
													  
													  
													  </form>	
												      	<!-- <label for="close-type">Close Type</label>
								  						<select id="close-type" class="form-control" name="close-type" required>
												          <option value="wholeday">Whole Day</option>
												          <option value="tslotsonly">Time Slots Only</option>
												        </select>	 -->

												        

												    									        
											      </div>

											      <div class="modal-footer">
											        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											        
											      </div>
											    </div><!-- /.modal-content -->
											  </div><!-- /.modal-dialog -->
										  </div><!-- /.modal -->
	  								      <!-- END OF CLOSTING A SCHEDULE MODAL -->
	  								      
	  									  
			</div>
	  						</div>

		</div>

		

<?php $this->load->view('footer');?>

<script type="text/javascript">
 $(document).ready(function(){
 var day=document.getElementsByClassName('day'); 
	var content=document.getElementsByClassName('content');
	var i;	
	var x=0;
	var content;
	var data;
var date=document.getElement	
	for(i=0; i<day.length && day[i].innerText!=1;i++)
		$(day[i]).css("background-color","grey");
			for(;x<content.length;x++,i++){
			data=content[x].innerText;
			data=data.split("/");
				if(data[8]=="Passed" || data[8]=="Sunday")
			$(day[i]).css("background-color","grey");
			else if(data[8]=="Closed")
			$(day[i]).css("background-color","rgb(200, 39, 39)");	
			else
			$(day[i]).css("background-color","white");
			}
		
			for(;i<day.length;i++)
					$(day[i]).css("background-color","grey");
				
  	document.getElementsByClassName('btn-opensched')[0].onclick = function(){
  		$('#modal-opensched').modal('toggle');
		
  	};

  	document.getElementsByClassName('btn-closesched')[0].onclick = function(){
  		
		$('#modal-closesched').modal('toggle');
		
  	};	
	
	document.getElementsByClassName('btn-cancelapp')[0].onclick = function(){
  		$('#modal-cancelappointment').modal('toggle');
  	};
	document.getElementsByClassName("btn-moveapp")[0].onclick = function(){
		$('#modal-moveppointment').modal('toggle');
	};

	
		$('.day').mouseover(function(){
		data=$(this).find('.content').text();
		data=data.split("/");
		if(data[8]=="Passed" || data[8]=="Closed" || data[8]=="Sunday")
		$(this).css('cursor','default');	
			else if(data[8]=="Active")
			{
				
				$(this).css("background-color","rgba(68, 159, 207, 1)");
				$(this).css('cursor','pointer');
			}
	});
		
		$('.day').mouseleave(function(){
			if(data[8]){
		if(data[8]=="Active"){
		$(this).css("background-color","white");
			$("#box").hide();
		}
			}
		
		});

		$('#cancelappointment_btn').click(function(event){
			if($('#cancelapp_form').valid()){
				event.preventDefault();
				$.getJSON("<?php echo base_url();?>appointment/check_appointmentno/",{appointmentno:$('#appointmentno').val()},success=function(data){
				    if(data == '0'){
				    	event.preventDefault();
				        swal("ERROR","Appointment number doesn't exists","error");
				    }else{
				    	if(confirm('Are you sure to cancel your appointment?')){
						    $('#cancelapp_form').submit();
						}
					}
				});
			}
		});
		
		
          $('.calendar').show("slide", { direction: "up" }, 500);
		
		
	$('.calendar .day').click(function(){	
		var d= new Date();
		var m=d.getMonth()+1;
		var y=d.getFullYear();
			d=d.getDate();
		day_num=$(this).find('.day_num').text();
			 data=$(this).find('.content').text();
			var temp1 = data.split("/");
			var temp2=temp1[7].split("-");
			var bool=1;
									if(temp1[8]=="Closed")
										
										swal({title:"Sorry the clinic is closed on that date",	
										imageUrl:"<?php echo base_url();?>assets/img/sad-face.jpg"
									
									});
									
									
										
										
												else if(temp1[8]=="Active")
													window.location.assign(data);
											
											
											
											  
													
										
  });
  
  
});

tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
    tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

      function GetClock(){
        var d=new Date();
        var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear(),nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

               if(nhour==0){ap=" AM";nhour=12;}
          else if(nhour<12){ap=" AM";}
          else if(nhour==12){ap=" PM";}
          else if(nhour>12){ap=" PM";nhour-=12;}

          if(nyear<1000) nyear+=1900;
          if(nmin<=9) nmin="0"+nmin;
          if(nsec<=9) nsec="0"+nsec;

          document.getElementById('clockbox').innerHTML="<br/><br/><h4><strong style='text-transform: uppercase'>"+tday[nday]+"</strong><br/> "+tmonth[nmonth]+" "+ndate+", "+nyear+" <br/><br/><span class='glyphicon glyphicon-time'></span> "+nhour+":"+nmin+":"+nsec+ap+"</h4>";
      }

      window.onload=function(){
        GetClock();
        setInterval(GetClock,1000);
      }
function CheckDate(){
$.ajaxSetup ({
        cache: false
    });
date=document.getElementById('close-date');
$.post("<?php echo base_url();?>calendar/get_sched",{date:date.value},function(data){
	
	
	
	var close="CLOSE ALL SCHEDULE";
	var list="";
	data=data.split("space");
	var x;

	if(data!="empty" && data[0]!="Clinic is not open during Sunday's")
	list+="<option value='"+close+"'>"+ close+"</option>";
	
	for(x=0;x<data.length-1;x++)
	list+="<option value='"+data[x]+"'>"+ data[x] +"</option>";
	$("#close-sched").html(list);
});
}

function getSched(){
$.ajaxSetup ({
        cache: false
    });
date=document.getElementById('open-sched');

var open="OPEN ALL SCHEDULE"
$.post("<?php echo base_url();?>calendar/openSched",{date:date.value},function(data){
if(data!="empty"){
data=data.split("space");
var x;
var list="";
list+="<option value='"+open+"'>"+open+"</option>";
for(x=0;x<data.length-1;x++)
	list+="<option value='"+data[x]+"'>"+ data[x] +"</option>";
}	
else
	list+="<option value></option>";
$("#sched").html(list);
});
}

function selectdate(){
$.ajaxSetup ({
        cache: false
    });
	date=document.getElementById('close-date2');
$.post("<?php echo base_url();?>calendar/gitSched",{date:date.value},function(data){
	
	
	
	var list="";
	data=data.split("space");
	var x;
	
	for(x=0;x<data.length-1;x++)
	list+="<option value='"+data[x]+"'>"+ data[x] +"</option>";
	$("#close-sched1").html(list);
	});
}	  
	  
</script>

