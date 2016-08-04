<?php $this->load->view('header', array('num' => 7, 'title' => 'Confirmed Appointments')); ?>
<?php $ctr = -1;?>
<div class="row element-container">
    <legend>Clinic Appointments</legend>
    <span id="message" style="color:red"></span>
      <div id="content" style="margin:20px">
        <div class="col-xs-12 columns large-tables"> 
            <table id="example" class="table table-striped" cellspacing="0" width="100%" style="text-align: center">
              <thead class="alert-info">
                  <tr>
                      <th class="text-center vertical-middle-align" width="5%">Appointment Code</th>
                      <th class="text-center vertical-middle-align" width="18%">Name</th>
                      <th class="text-center vertical-middle-align" width="16%">Date</th>
                      <th class="text-center vertical-middle-align" width="16%">Time</th>
                      <th class="text-center vertical-middle-align" width="5%">Status</th>
                      <th class="text-center vertical-middle-align" width="40%">Action</th>
                  </tr>
              </thead> 
              <tbody>
               <?php foreach($appno as $ts): ?>
                  <tr>
                    <?php $this->load->model('appointment_model');$name = $this->appointment_model->get_name($ts->username);?>
                    <td class="vertical-middle-align"><?php echo $ts->appointmentno;?></td>
                    <td class="vertical-middle-align"><?php echo $name->firstname;?> <?php echo $name->middlename[0];?>. <?php echo $name->lastname;?></td>
                    <td class="vertical-middle-align"><?php echo date("F j, Y",strtotime($ts->date));?></td>
                    <td class="vertical-middle-align"><?php echo $ts->time;?></td>
                    <td class="vertical-middle-align" <?php if($ts->status == 'Confirmed'){?> style="color:orange"<?php } else {?>style="color:green"<?php } ?>><b><?php echo $ts->status;?></td>
                    <td class="vertical-middle-align">
                      <a href="<?php echo base_url();?>appointment/arrived_appointment/<?php echo $ts->id;?>" onclick="return confirm('Proceed with the confirmation of the patient's presence?');">
                        <button type="button" class="table-btn btn btn-success add" <?php if((strtotime($ts->date))==(strtotime(date('Y-m-d'))) && $ts->status=='Confirmed'){} else{?> disabled <?php } ?>>
                          <span class="glyphicon glyphicon-ok"></span> Accept
                        </button>
                      </a>  
                      <a href="<?php echo base_url();?>appointment/reschedule_appointment/<?php echo $ts->id;?>" onclick="return confirm('Proceed with the moving of the appointment to another schedule?');">
                        <button type="button" class="table-btn btn btn-info move" <?php if($ts->status=='Confirmed'){} else{?> disabled <?php } ?>>
                          <span class="glyphicon glyphicon-share-alt"></span> Reschedule
                        </button>
                      </a>
                      <a href="<?php echo base_url();?>appointment/cancel_appointment/0/<?php echo $ts->id;?>" onclick="return confirm('Proceed with the cancellation of the appointment?');">
                        <button type="button" class="table-btn btn btn-danger remove" <?php if((strtotime($ts->date))>=(strtotime(date('Y-m-d'))) && $ts->status=='Confirmed'){} else{?> disabled <?php } ?>>
                          <span class="glyphicon glyphicon-remove"></span>  Cancel
                        </button>
                      </a>
                    </td>
                  </tr>
                <?php endforeach;?>
              </tbody>
            </table>
        </div>
      </div>
</div>
<?php $this->load->view('footer'); ?>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').dataTable();    
        setInterval(function(){
          window.location.reload();
        },30000);    
    });
</script>