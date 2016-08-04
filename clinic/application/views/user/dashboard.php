<?php $this->load->view('header', array('num' => 0, 'title' => 'Dashboard')); ?>
<div class="col-xs-12" style="margin-top:20px">
  <div class="col-xs-8">
    <div class="jumbotron dboard-jumbotron" style="margin-bottom:5px; height: 350px">
      <h2>Welcome <?php echo $this->session->userdata('firstname');?> !</h2>
      <div id="clockbox"></div>
    </div>
    <!-- <div class="col-xs-12" style="display:inline-flex">
      <div class="col-xs-4">
        <div class="panel panel-info text-center" style="margin-right:5px">
          <div class="panel-heading">
            <h3 class="panel-title">Pending appointments</h3>
          </div>
          <div class="panel-body">
            <strong><?php echo $nop;?></strong><br/><br/>
            <a class="btn btn-info btn-sm" href="<?php echo base_url();?>appointment/view_appointment_queue" role="button">
            <span class="glyphicon glyphicon-eye-open"></span> View
            </a>          
          </div>
        </div>
      </div>
      <div class="col-xs-4">
        <div class="panel panel-info text-center" style="margin-right:5px">
          <div class="panel-heading">
            <h3 class="panel-title">Upcoming appointments</h3>
          </div>
          <div class="panel-body">
            <strong><?php echo $nou;?></strong><br/><br/>
            <a class="btn btn-info btn-sm" href="<?php echo base_url();?>appointment/view_upcoming_appointments" role="button">
            <span class="glyphicon glyphicon-eye-open"></span> View
            </a>
          </div>
      </div>
      </div>
      <div class="col-xs-4">
        <div class="panel panel-info text-center">
          <div class="panel-heading">
            <h3 class="panel-title">People served today</h3>
          </div>
          <div class="panel-body">
            <strong><?php echo $pst;?></strong><br>
            Person/s<br/>
          </div>
        </div>
      </div>
    </div> -->
  </div>
  <!-- <div class="col-xs-4">
    <div class="panel panel-info text-center">
        <div class="panel-heading">
          <h3 class="panel-title">New patients</h3>
        </div>
        <div class="list-group list-grp-services">
            <?php foreach($np as $np):?>
                <li class="list-group-item"><?php echo $np->firstname;?> <?php echo $np->middlename;?> <?php echo $np->lastname;?></li>
            <?php endforeach;?>    
            <li class="list-group-item">
              <a class="btn btn-info btn-sm" href="<?php echo base_url();?>cadmin/view_patients" role="button">
              <span class="glyphicon glyphicon-eye-open"></span> View All
              </a>
            </li>
        </div>
      </div>    
  </div> -->

<!-- <div class="col-xs-4">
        <div class="panel panel-info text-center">
          <div class="panel-heading">
            <h3 class="panel-title"><?php echo date('F Y');?> total appointments</h3>
          </div>
          <div class="panel-body">
            <strong><?php echo $oan;?></strong><br>
            Person/s<br/>
            <!-- <a class="btn btn-info btn-sm" href="<?php echo base_url();?>cadmin/generate_report" role="button">
            <span class="glyphicon glyphicon-eye-open"></span> Report
            </a> -->
          </div>
        </div>
      </div>

</div> -->
<?php $this->load->view('footer');?>
<script type="text/javascript">
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

          document.getElementById('clockbox').innerHTML="<br/><br/><h4><strong>"+tday[nday]+"</strong> || "+tmonth[nmonth]+" "+ndate+", "+nyear+" <br/><br/><span class='glyphicon glyphicon-time'></span> "+nhour+":"+nmin+":"+nsec+ap+"</h4>";
      }

      window.onload=function(){
        GetClock();
        setInterval(GetClock,1000);
      }
</script>

