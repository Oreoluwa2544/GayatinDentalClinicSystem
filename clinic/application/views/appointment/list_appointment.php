<?php $this->load->view('header', array('num' => 7, 'title' => 'Confirmed Appointments')); ?>
<?php $ctr = -1;?>
<div class="row element-container">
    <legend>Clinic Appointments</legend>
    <span id="message" style="color:red"></span>
      <div id="content" style="margin:20px">
        <div class="col-lg-10 columns col-lg-offset-1"> 
          <table id="example" class="table table-striped text-center" cellspacing="0" width="100%">
            <thead class="alert-info">
                <tr>
                    <th class="text-center" width="50%">Date</th>
                    <th class="text-center" width="50%">Timeslots with Appointments</th>
                </tr>
            </thead> 
            <tbody>
             <?php foreach($dates as $date): ?>
                <?php $ctr+=1;?>
                <tr>
                  <td>
                    <a style="text-decoration:none" href="<?php echo base_url();?>appointment/view_appointment_time/<?php echo $date->date;?>"><?php echo date('F j, Y', strtotime($date->date));?></a>
                  </td>
                  <td><?php echo $nop[$ctr];?></td>
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