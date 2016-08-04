<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title?> | Gayatin DC</title>
    <link rel="icon" href="<?php echo base_url();?>assets/img/gayatinlogo.png"/>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/customized.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/datepicker.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/dataTables.bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/sweetalerts/sweet-alert.css" />
    <!-- owl carousel css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl/owl.carousel.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl/owl.theme.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl/owl.transitions.css" />
    
    <script src="<?php echo base_url();?>assets/js/jquery.md5.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-2.1.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/dataTables.bootstrap.js"></script>   
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>     
    <script src="<?php echo base_url();?>assets/js/jquery-ui.min.js"></script> 
    <script src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/additional-methods.min.js"></script>
    <script src="<?php echo base_url();?>assets/sweetalerts/sweet-alert.js"></script>
    <!-- owl carousel js -->
    <script src="<?php echo base_url();?>assets/js/owl/owl.carousel.js"></script>
    <script src="<?php echo base_url();?>assets/js/owl/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/canvasjs.min.js"></script>
	<script src="<?php echo base_url();?>assets/Chart.js-master/Chart.js"></script>
  </head>

  <body>

<!--- start of navbar-->
      <div class="container page-container">
        <div class="page-content"> <!-- Will be closed at the footer -->
              <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                  <div class="container">            
                      <!-- Brand and toggle get grouped for better mobile display -->
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                        <?php if(!$this->session->userdata('username')){?>
                          <a class="navbar-brand" href="<?php echo base_url();?>">
                            <img src="<?php echo base_url();?>/assets/img/gayatinlogo.png" alt="Tooth Logo">Gayatin Dental Clinic
                          </a>
                        <?php } ?>
                        <?php if($this->session->userdata('username')){?>
                          <a class="navbar-brand" href="#">
                            <img src="<?php echo base_url();?>/assets/img/gayatinlogo.png" alt="Tooth Logo">Gayatin Dental Clinic
                          </a>
                        <?php } ?>
                      </div>
                
                      <!-- Collect the nav links, forms, and other content for toggling -->
                      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                                <!-- HOMEPAGE FOR PATIENT -->
                                <?php if(!$this->session->userdata('username')){?>
                                  <li class="<?php if($num == 0): ?>active<?php endif;?>">
                                      <a href="<?php echo base_url();?>">Home</a>
                                  </li>                                
                                <?php }?>
      
                                <!-- APPOINTMENTS  -->
                                <?php if($this->session->userdata('username')){?>                  
                                <li class="dropdown <?php if($num == 7): ?>active<?php endif;?>">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Appointments<span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="<?php echo base_url();?>appointment/view_appointment_by_date">By Date</a></li>
                                        <li><a href="<?php echo base_url();?>appointment/view_appointment_by_appno">View All</a></li>                  
                                    </ul>
                                </li>
                                <?php } ?>

                                <!-- CLINIC CALENDAR -->      
                                <li class="<?php if($num == 1): ?>active<?php endif;?>">
                                    <a href="<?php echo base_url();?>calendar/display">Clinic Calendar</a>
                                </li>
                                <?php if($this->session->userdata('username')){?>                  
                                  <!-- PATIENT PROFILES -->
                                  <li class="dropdown <?php if($num == 2): ?>active<?php endif;?>">
                                      <a href="<?php echo base_url();?>patient/view_patients">Patient Profiles</a>
                                  </li>                      
                                  <!-- CLINIC SERVICES -->
                                  <li class="<?php if($num == 8): ?>active<?php endif;?>">
                                    <a href="<?php echo base_url();?>services/view_services">Clinic Services</a>
                                  </li>
                                  <!-- USER ACCOUNTS -->
                                  <?php if($this->session->userdata('handler')){?>
                                          <li class="<?php if($num == 5): ?>active<?php endif;?>"><a href="<?php echo base_url();?>admin/view_staffs">User Accounts</a></li>
                                  <?php }?>
                                  <!-- REPORTS -->
                                 <?php if($this->session->userdata('username')){?>                  
                                <li class="dropdown <?php if($num == 6): ?>active<?php endif;?>">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Reports<span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                  										<li><a href="<?php echo base_url();?>reporting/customer_ratio">Patients Treated</a></li>
                  										<li><a href="<?php echo base_url();?>reporting/gender_age">Gender/Age Classification</a></li>
                  									   <li><a href="<?php echo base_url();?>reporting/services_rendered">Services Rendered</a></li>
                  										<li><a href="<?php echo base_url();?>reporting/app_statuses">Appointment Statuses</a></li>                  
                                    </ul>
                                </li>
                                <?php } ?>
                                  <!-- ACCOUNT -->
                                  <li class="dropdown <?php if($num == 9): ?>active<?php endif;?>">
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Account<span class="caret"></span></a>
                                      <ul class="dropdown-menu" role="menu">
                                           <li><a href="<?php echo base_url();?>admin/change_password/<?php echo $this->session->userdata('id');?>">Change Password</a></li>
                                          <li><a href="<?php echo base_url();?>admin/logout">Logout</a></li>                  
                                      </ul>
                                  </li>
                                <?php }?>
                                <?php if(!$this->session->userdata('username')){?>                
                                  <!-- ABOUT US -->
                                  <li class="<?php if($num == 4): ?>active<?php endif;?>">
                                    <a href="<?php echo base_url();?>main/aboutus">About Us</a>
                                  </li>
                                <?php }?>            
                        </ul>                 
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
          </nav>
                <!--- end of navbar -->

