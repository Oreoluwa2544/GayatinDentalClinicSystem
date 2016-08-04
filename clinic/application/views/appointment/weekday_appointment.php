<?php $this->load->view('header', array('num' => 7, 'title' => 'List of Appointments')); ?>
<div class="element-container">
    <legend>Clinic Appointments for <?php echo date("F j, Y", strtotime($date));?></legend>
    <span id="message" style="color:red"></span>

      <div id="content" style="margin:20px">
      <table id="example" class="table queue" cellspacing="0" width="100%" style="text-align: center">
        <thead>
        </thead>
        <tbody id="tbody" style="text-align: center">                     
            <tr id="tslota">                
              <td width="100%" class="time">
                <div class="panel panel-primary" width="100%">
                      <div class="panel-heading">
                           <span>7:30 AM - 8:30 AM</span>
                      </div>
                      <div class="panel-body">  
                        <table id="example" class="table table-striped" cellspacing="0" width="100%" style="text-align: center">
                        <thead>
                            <tr class="alert-info">
                                <th class="text-center vertical-middle-align" width="25%">Name</th>
                                <th class="text-center vertical-middle-align" width="20%">Treatment Type</th>
                                <th class="text-center vertical-middle-align" width="5%">Appointment Code</th>
                                <th class="text-center vertical-middle-align" width="5%">Status</th>
                                <th class="text-center vertical-middle-align" width="45%">Action</th>
                            </tr>
                        </thead>
                          <tbody>
                            <?php $actr=0; foreach($time_reservations as $ts):?>
                            <?php if($ts->time == '7:30 AM - 8:30 AM'){ $actr+=1;?>
                            <tr>

                              <?php $this->load->model('appointment_model');$name = $this->appointment_model->get_name($ts->username);?>
                              
                              <td class="vertical-middle-align text-left"><?php echo $name->firstname;?> <?php echo $name->middlename[0];?>. <?php echo $name->lastname;?></td>
                              <td class="vertical-middle-align"><?php echo $ts->reason;?></td>
                              <td class="vertical-middle-align"><?php echo $ts->appointmentno;?></td>
                              <td class="vertical-middle-align" <?php if($ts->status == 'Confirmed'){?> style="color:orange"<?php } else {?>style="color:green"<?php } ?>><b><?php echo $ts->status;?></td>
                              <td class="vertical-middle-align">
                                <a href="<?php echo base_url();?>appointment/arrived_appointment/<?php echo $ts->id;?>" onclick="return confirm('Proceed with the confirmation of the patient's presence?');">
                                  <button type="button" class="table-btn btn btn-success add" <?php if((strtotime($date))==(strtotime(date('Y-m-d'))) && $ts->status=='Confirmed'){} else{?> disabled <?php } ?>>
                                    <span class="glyphicon glyphicon-ok"></span> Accept
                                  </button>
                                </a>  
                                <a href="<?php echo base_url();?>appointment/reschedule_appointment/<?php echo $ts->id;?>" onclick="return confirm('Proceed with the moving of the appointment to another schedule?');">
                                  <button type="button" class="table-btn btn btn-info move" <?php if($ts->status=='Confirmed'){} else{?> disabled <?php } ?>>
                                    <span class="glyphicon glyphicon-share-alt"></span> Reschedule
                                  </button>
                                </a>
                                <a href="<?php echo base_url();?>appointment/cancel_appointment/<?php echo $date;?>/<?php echo $ts->id;?>" onclick="return confirm('Proceed with the cancellation of the appointment?');">
                                  <button type="button" class="table-btn btn btn-danger remove" <?php if((strtotime($date))>=(strtotime(date('Y-m-d'))) && $ts->status=='Confirmed'){} else{?> disabled <?php } ?>>
                                    <span class="glyphicon glyphicon-remove"></span>  Cancel
                                  </button>
                                </a>
                            </td>
                          
                            </tr>
                            <?php } ?>
                            <?php endforeach;?>
                          </tbody>
                        </table>
                      </div>
                  </div>
              </td> 
            </tr>

            <tr id="tslotb">          
              <td width="100%" class="time">
                <div class="panel panel-primary">
                      <div class="panel-heading">
                           <span>8:30 AM - 9:30 AM</span>
                      </div>
                        <div class="panel-body">
                        <table id="example" class="table table-striped" cellspacing="0" width="100%" style="text-align: center">
                        <thead>
                            <tr class="alert-info">
                                <th class="text-center vertical-middle-align" width="25%">Name</th>
                                <th class="text-center vertical-middle-align" width="20%">Treatment Type</th>
                                <th class="text-center vertical-middle-align" width="5%">Appointment Code</th>
                                <th class="text-center vertical-middle-align" width="5%">Status</th>
                                <th class="text-center vertical-middle-align" width="45%">Action</th>
                            </tr>
                        </thead>
                          <tbody>
                            <?php $bctr=0; foreach($time_reservations as $ts): ?>
                            <?php if($ts->time == '8:30 AM - 9:30 AM'){ $bctr+=1;?>
                            <tr>

                              <?php $this->load->model('appointment_model');$name = $this->appointment_model->get_name($ts->username);?>
                              
                              <td class="vertical-middle-align text-left"><?php echo $name->firstname;?> <?php echo $name->middlename[0];?>. <?php echo $name->lastname;?></td>
                              <td class="vertical-middle-align"><?php echo $ts->reason;?></td>
                              <td class="vertical-middle-align"><?php echo $ts->appointmentno;?></td>
                              <td class="vertical-middle-align" <?php if($ts->status == 'Confirmed'){?> style="color:orange"<?php } else {?>style="color:green"<?php } ?>><b><?php echo $ts->status;?></td>
                              <td class="vertical-middle-align">
                                <a href="<?php echo base_url();?>appointment/arrived_appointment/<?php echo $ts->id;?>" onclick="return confirm('Proceed with the confirmation of the patient's presence?');">
                                  <button type="button" class="table-btn btn btn-success add" <?php if((strtotime($date))==(strtotime(date('Y-m-d'))) && $ts->status=='Confirmed'){} else{?> disabled <?php } ?>>
                                    <span class="glyphicon glyphicon-ok"></span> Accept
                                  </button>
                                </a>  
                                <a href="<?php echo base_url();?>appointment/reschedule_appointment/<?php echo $ts->id;?>" onclick="return confirm('Proceed with the moving of the appointment to another schedule?');">
                                  <button type="button" class="table-btn btn btn-info move" <?php if($ts->status=='Confirmed'){} else{?> disabled <?php } ?>>
                                    <span class="glyphicon glyphicon-share-alt"></span> Reschedule
                                  </button>
                                </a>
                                <a href="<?php echo base_url();?>appointment/cancel_appointment/<?php echo $date;?>/<?php echo $ts->id;?>" onclick="return confirm('Proceed with the cancellation of the appointment?');">
                                  <button type="button" class="table-btn btn btn-danger remove" <?php if((strtotime($date))>=(strtotime(date('Y-m-d'))) && $ts->status=='Confirmed'){} else{?> disabled <?php } ?>>
                                    <span class="glyphicon glyphicon-remove"></span>  Cancel
                                  </button>
                                </a>
                            </td>
                          
                            </tr>
                            <?php } ?>
                            <?php endforeach;?>
                          </tbody>
                        </table>
                        </div>
                  </div>
              </td>
             
            <tr id="tslotc">                
              <td width="100%" class="time">
                <div class="panel panel-primary">
                      <div class="panel-heading">
                           <span>9:30 AM - 10:30 AM</span>
                      </div> 
                        <div class="panel-body">
                        <table id="example" class="table table-striped" cellspacing="0" width="100%" style="text-align: center">
                        <thead>
                            <tr class="alert-info">
                                <th class="text-center vertical-middle-align" width="25%">Name</th>
                                <th class="text-center vertical-middle-align" width="20%">Treatment Type</th>
                                <th class="text-center vertical-middle-align" width="5%">Appointment Code</th>
                                <th class="text-center vertical-middle-align" width="5%">Status</th>
                                <th class="text-center vertical-middle-align" width="45%">Action</th>
                            </tr>
                        </thead>
                          <tbody>
                            <?php $cctr=0; foreach($time_reservations as $ts): ?>
                            <?php if($ts->time == '9:30 AM - 10:30 AM'){ $cctr+=1;?> 
                            <tr>

                              <?php $this->load->model('appointment_model');$name = $this->appointment_model->get_name($ts->username);?>
                              
                              <td class="vertical-middle-align text-left"><?php echo $name->firstname;?> <?php echo $name->middlename[0];?>. <?php echo $name->lastname;?></td>
                              <td class="vertical-middle-align"><?php echo $ts->reason;?></td>
                              <td class="vertical-middle-align"><?php echo $ts->appointmentno;?></td>
                              <td class="vertical-middle-align" <?php if($ts->status == 'Confirmed'){?> style="color:orange"<?php } else {?>style="color:green"<?php } ?>><b><?php echo $ts->status;?></td>
                              <td class="vertical-middle-align">
                                <a href="<?php echo base_url();?>appointment/arrived_appointment/<?php echo $ts->id;?>" onclick="return confirm('Proceed with the confirmation of the patient's presence?');">
                                  <button type="button" class="table-btn btn btn-success add" <?php if((strtotime($date))==(strtotime(date('Y-m-d'))) && $ts->status=='Confirmed'){} else{?> disabled <?php } ?>>
                                    <span class="glyphicon glyphicon-ok"></span> Accept
                                  </button>
                                </a>  
                                <a href="<?php echo base_url();?>appointment/reschedule_appointment/<?php echo $ts->id;?>" onclick="return confirm('Proceed with the moving of the appointment to another schedule?');">
                                  <button type="button" class="table-btn btn btn-info move" <?php if($ts->status=='Confirmed'){} else{?> disabled <?php } ?>>
                                    <span class="glyphicon glyphicon-share-alt"></span> Reschedule
                                  </button>
                                </a>
                                <a href="<?php echo base_url();?>appointment/cancel_appointment/<?php echo $date;?>/<?php echo $ts->id;?>" onclick="return confirm('Proceed with the cancellation of the appointment?');">
                                  <button type="button" class="table-btn btn btn-danger remove" <?php if((strtotime($date))>=(strtotime(date('Y-m-d'))) && $ts->status=='Confirmed'){} else{?> disabled <?php } ?>>
                                    <span class="glyphicon glyphicon-remove"></span>  Cancel
                                  </button>
                                </a>
                            </td>
                          
                            </tr>
                            <?php } ?>
                            <?php endforeach;?>
                          </tbody>
                        </table>
                        </div>
                    <span></span>
                  </div>
              </td>             
            </tr>

            <tr id="tslotd">          
              <td width="100%" class="time">
                <div class="panel panel-primary">
                      <div class="panel-heading">
                           <span>10:30 AM - 11:30 AM</span>
                      </div>
                      <div class="panel-body">  
                        <table id="example" class="table table-striped" cellspacing="0" width="100%" style="text-align: center">
                        <thead>
                            <tr class="alert-info">
                                <th class="text-center vertical-middle-align" width="25%">Name</th>
                                <th class="text-center vertical-middle-align" width="20%">Treatment Type</th>
                                <th class="text-center vertical-middle-align" width="5%">Appointment Code</th>
                                <th class="text-center vertical-middle-align" width="5%">Status</th>
                                <th class="text-center vertical-middle-align" width="45%">Action</th>
                            </tr>
                        </thead>
                          <tbody>
                            <?php $dctr=0; foreach($time_reservations as $ts): ?>
                            <?php if($ts->time == '10:30 AM - 11:30 AM'){ $dctr+=1;?>
                            <tr>

                              <?php $this->load->model('appointment_model');$name = $this->appointment_model->get_name($ts->username);?>
                              
                              <td class="vertical-middle-align text-left"><?php echo $name->firstname;?> <?php echo $name->middlename[0];?>. <?php echo $name->lastname;?></td>
                              <td class="vertical-middle-align"><?php echo $ts->reason;?></td>
                              <td class="vertical-middle-align"><?php echo $ts->appointmentno;?></td>
                              <td class="vertical-middle-align" <?php if($ts->status == 'Confirmed'){?> style="color:orange"<?php } else {?>style="color:green"<?php } ?>><b><?php echo $ts->status;?></td>
                              <td class="vertical-middle-align">
                                <a href="<?php echo base_url();?>appointment/arrived_appointment/<?php echo $ts->id;?>" onclick="return confirm('Proceed with the confirmation of the patient's presence?');">
                                  <button type="button" class="table-btn btn btn-success add" <?php if((strtotime($date))==(strtotime(date('Y-m-d'))) && $ts->status=='Confirmed'){} else{?> disabled <?php } ?>>
                                    <span class="glyphicon glyphicon-ok"></span> Accept
                                  </button>
                                </a>  
                                <a href="<?php echo base_url();?>appointment/reschedule_appointment/<?php echo $ts->id;?>" onclick="return confirm('Proceed with the moving of the appointment to another schedule?');">
                                  <button type="button" class="table-btn btn btn-info move" <?php if($ts->status=='Confirmed'){} else{?> disabled <?php } ?>>
                                    <span class="glyphicon glyphicon-share-alt"></span> Reschedule
                                  </button>
                                </a>
                                <a href="<?php echo base_url();?>appointment/cancel_appointment/<?php echo $date;?>/<?php echo $ts->id;?>" onclick="return confirm('Proceed with the cancellation of the appointment?');">
                                  <button type="button" class="table-btn btn btn-danger remove" <?php if((strtotime($date))>=(strtotime(date('Y-m-d'))) && $ts->status=='Confirmed'){} else{?> disabled <?php } ?>>
                                    <span class="glyphicon glyphicon-remove"></span>  Cancel
                                  </button>
                                </a>
                            </td>
                          
                            </tr>
                            <?php } ?>
                            <?php endforeach;?>
                          </tbody>
                        </table>
                      </div>
                  </div>
              </td>             
            </tr>

            <tr id="tslote">          
              <td width="100%" class="time">
                <div class="panel panel-primary">
                      <div class="panel-heading">
                           <span>1:00 PM - 2:00 PM</span>
                      </div>
                      <div class="panel-body">  
                        <table id="example" class="table table-striped" cellspacing="0" width="100%" style="text-align: center">
                        <thead>
                            <tr class="alert-info">
                                <th class="text-center vertical-middle-align" width="25%">Name</th>
                                <th class="text-center vertical-middle-align" width="20%">Treatment Type</th>
                                <th class="text-center vertical-middle-align" width="5%">Appointment Code</th>
                                <th class="text-center vertical-middle-align" width="5%">Status</th>
                                <th class="text-center vertical-middle-align" width="45%">Action</th>
                            </tr>
                        </thead>
                          <tbody>
                            <?php $ectr=0; foreach($time_reservations as $ts): ?>
                            <?php if($ts->time == '1:00 PM - 2:00 PM'){ $ectr+=1;?>
                            <tr>

                              <?php $this->load->model('appointment_model');$name = $this->appointment_model->get_name($ts->username);?>
                              
                              <td class="vertical-middle-align text-left"><?php echo $name->firstname;?> <?php echo $name->middlename[0];?>. <?php echo $name->lastname;?></td>
                              <td class="vertical-middle-align"><?php echo $ts->reason;?></td>
                              <td class="vertical-middle-align"><?php echo $ts->appointmentno;?></td>
                              <td class="vertical-middle-align" <?php if($ts->status == 'Confirmed'){?> style="color:orange"<?php } else {?>style="color:green"<?php } ?>><b><?php echo $ts->status;?></td>
                              <td class="vertical-middle-align">
                                <a href="<?php echo base_url();?>appointment/arrived_appointment/<?php echo $ts->id;?>" onclick="return confirm('Proceed with the confirmation of the patient's presence?');">
                                  <button type="button" class="table-btn btn btn-success add" <?php if((strtotime($date))==(strtotime(date('Y-m-d'))) && $ts->status=='Confirmed'){} else{?> disabled <?php } ?>>
                                    <span class="glyphicon glyphicon-ok"></span> Accept
                                  </button>
                                </a>  
                                <a href="<?php echo base_url();?>appointment/reschedule_appointment/<?php echo $ts->id;?>" onclick="return confirm('Proceed with the moving of the appointment to another schedule?');">
                                  <button type="button" class="table-btn btn btn-info move" <?php if($ts->status=='Confirmed'){} else{?> disabled <?php } ?>>
                                    <span class="glyphicon glyphicon-share-alt"></span> Reschedule
                                  </button>
                                </a>
                                <a href="<?php echo base_url();?>appointment/cancel_appointment/<?php echo $date;?>/<?php echo $ts->id;?>" onclick="return confirm('Proceed with the cancellation of the appointment?');">
                                  <button type="button" class="table-btn btn btn-danger remove" <?php if((strtotime($date))>=(strtotime(date('Y-m-d'))) && $ts->status=='Confirmed'){} else{?> disabled <?php } ?>>
                                    <span class="glyphicon glyphicon-remove"></span>  Cancel
                                  </button>
                                </a>
                            </td>
                          
                            </tr>
                            <?php } ?>
                            <?php endforeach;?>                            
                          </tbody>
                        </table>
                      </div>
                  </div>
              </td>             
            </tr>

            <tr id="tslotf">          
              <td width="100%" class="time">
                <div class="panel panel-primary">
                      <div class="panel-heading">
                           <span>2:00 PM - 3:00 PM</span>
                      </div>
                      <div class="panel-body">  
                        <table id="example" class="table table-striped" cellspacing="0" width="100%" style="text-align: center">
                        <thead>
                            <tr class="alert-info">
                                <th class="text-center vertical-middle-align" width="25%">Name</th>
                                <th class="text-center vertical-middle-align" width="20%">Treatment Type</th>
                                <th class="text-center vertical-middle-align" width="5%">Appointment Code</th>
                                <th class="text-center vertical-middle-align" width="5%">Status</th>
                                <th class="text-center vertical-middle-align" width="45%">Action</th>
                            </tr>
                        </thead>
                          <tbody>
                            <?php $fctr=0; foreach($time_reservations as $ts): ?>
                            <?php if($ts->time == '2:00 PM - 3:00 PM'){ $fctr+=1;?>
                            <tr>

                              <?php $this->load->model('appointment_model');$name = $this->appointment_model->get_name($ts->username);?>
                              
                              <td class="vertical-middle-align text-left"><?php echo $name->firstname;?> <?php echo $name->middlename[0];?>. <?php echo $name->lastname;?></td>
                              <td class="vertical-middle-align"><?php echo $ts->reason;?></td>
                              <td class="vertical-middle-align"><?php echo $ts->appointmentno;?></td>
                              <td class="vertical-middle-align" <?php if($ts->status == 'Confirmed'){?> style="color:orange"<?php } else {?>style="color:green"<?php } ?>><b><?php echo $ts->status;?></td>
                              <td class="vertical-middle-align">
                                <a href="<?php echo base_url();?>appointment/arrived_appointment/<?php echo $ts->id;?>" onclick="return confirm('Proceed with the confirmation of the patient's presence?');">
                                  <button type="button" class="table-btn btn btn-success add" <?php if((strtotime($date))==(strtotime(date('Y-m-d'))) && $ts->status=='Confirmed'){} else{?> disabled <?php } ?>>
                                    <span class="glyphicon glyphicon-ok"></span> Accept
                                  </button>
                                </a>  
                                <a href="<?php echo base_url();?>appointment/reschedule_appointment/<?php echo $ts->id;?>" onclick="return confirm('Proceed with the moving of the appointment to another schedule?');">
                                  <button type="button" class="table-btn btn btn-info move" <?php if($ts->status=='Confirmed'){} else{?> disabled <?php } ?>>
                                    <span class="glyphicon glyphicon-share-alt"></span> Reschedule
                                  </button>
                                </a>
                                <a href="<?php echo base_url();?>appointment/cancel_appointment/<?php echo $date;?>/<?php echo $ts->id;?>" onclick="return confirm('Proceed with the cancellation of the appointment?');">
                                  <button type="button" class="table-btn btn btn-danger remove" <?php if((strtotime($date))>=(strtotime(date('Y-m-d'))) && $ts->status=='Confirmed'){} else{?> disabled <?php } ?>>
                                    <span class="glyphicon glyphicon-remove"></span>  Cancel
                                  </button>
                                </a>
                            </td>
                          
                            </tr>
                            <?php } ?>
                            <?php endforeach;?>
                          </tbody>
                        </table>
                      </div>
                  </div>
              </td>             
            </tr>  

            <tr id="tslotg">          
              <td width="100%" class="time">
                <div class="panel panel-primary">
                      <div class="panel-heading">
                           <span>3:00 PM - 4:00 PM</span>
                      </div>
                      <div class="panel-body">  
                        <table id="example" class="table table-striped" cellspacing="0" width="100%" style="text-align: center">
                        <thead>
                            <tr class="alert-info">
                                <th class="text-center vertical-middle-align" width="25%">Name</th>
                                <th class="text-center vertical-middle-align" width="20%">Treatment Type</th>
                                <th class="text-center vertical-middle-align" width="5%">Appointment Code</th>
                                <th class="text-center vertical-middle-align" width="5%">Status</th>
                                <th class="text-center vertical-middle-align" width="45%">Action</th>
                            </tr>
                        </thead>
                          <tbody>
                          <?php $gctr=0; foreach($time_reservations as $ts): ?>
                          <?php if($ts->time == '3:00 PM - 4:00 PM'){ $gctr+=1;?>
                            <tr>

                              <?php $this->load->model('appointment_model');$name = $this->appointment_model->get_name($ts->username);?>
                              
                              <td class="vertical-middle-align text-left"><?php echo $name->firstname;?> <?php echo $name->middlename[0];?>. <?php echo $name->lastname;?></td>
                              <td class="vertical-middle-align"><?php echo $ts->reason;?></td>
                              <td class="vertical-middle-align"><?php echo $ts->appointmentno;?></td>
                              <td class="vertical-middle-align" <?php if($ts->status == 'Confirmed'){?> style="color:orange"<?php } else {?>style="color:green"<?php } ?>><b><?php echo $ts->status;?></td>
                              <td class="vertical-middle-align">
                                <a href="<?php echo base_url();?>appointment/arrived_appointment/<?php echo $ts->id;?>" onclick="return confirm('Proceed with the confirmation of the patient's presence?');">
                                  <button type="button" class="table-btn btn btn-success add" <?php if((strtotime($date))==(strtotime(date('Y-m-d'))) && $ts->status=='Confirmed'){} else{?> disabled <?php } ?>>
                                    <span class="glyphicon glyphicon-ok"></span> Accept
                                  </button>
                                </a>  
                                <a href="<?php echo base_url();?>appointment/reschedule_appointment/<?php echo $ts->id;?>" onclick="return confirm('Proceed with the moving of the appointment to another schedule?');">
                                  <button type="button" class="table-btn btn btn-info move" <?php if($ts->status=='Confirmed'){} else{?> disabled <?php } ?>>
                                    <span class="glyphicon glyphicon-share-alt"></span> Reschedule
                                  </button>
                                </a>
                                <a href="<?php echo base_url();?>appointment/cancel_appointment/<?php echo $date;?>/<?php echo $ts->id;?>" onclick="return confirm('Proceed with the cancellation of the appointment?');">
                                  <button type="button" class="table-btn btn btn-danger remove" <?php if((strtotime($date))>=(strtotime(date('Y-m-d'))) && $ts->status=='Confirmed'){} else{?> disabled <?php } ?>>
                                    <span class="glyphicon glyphicon-remove"></span>  Cancel
                                  </button>
                                </a>
                            </td>
                          
                            </tr>
                          </tbody>
                          <?php } ?>
                          <?php endforeach;?>
                        </table>
                      </div>
                  </div>
              </td>             
            </tr>

        </tbody>
      </table>

    </div>
</div>
<?php $this->load->view('footer'); ?>
<script type="text/javascript">
    $(document).ready(function() {
        var actr = <?php echo $actr;?>;
        var bctr = <?php echo $bctr;?>;
        var cctr = <?php echo $cctr;?>;
        var dctr = <?php echo $dctr;?>;
        var ectr = <?php echo $ectr;?>;
        var fctr = <?php echo $fctr;?>;
        var gctr = <?php echo $gctr;?>;

        if(actr==0){
          $('#tslota').hide();       
        }

        if(bctr==0){
          $('#tslotb').hide();
        }

        if(cctr==0){
          $('#tslotc').hide();
        }

        if(dctr==0){
          $('#tslotd').hide();
        }

        if(ectr==0){
          $('#tslote').hide();
        }

        if(fctr==0){
          $('#tslotf').hide();
        }

        if(gctr==0){
          $('#tslotg').hide();
        }
        $('#example').dataTable();
    });
</script>