<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Gayatin DC</title>
    <link rel="icon" href="<?php echo base_url();?>assets/img/gayatinlogo.png"/>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/customized.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/sweetalerts/sweet-alert.css" />  
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-2.1.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/sweetalerts/sweet-alert.js"></script>
  </head>

  <body>
    <div class="login-bground"></div>
        <div id="loginbox" class="login-loginbox mainbox col-xs-6 col-xs-offset-3 col-lg-4 col-lg-offset-4 text-center">                    
          <div class="panel login-panel panel-info text-center" >                               
            <div class="panel-body login-panel-body">
              <div class="panel-heading">
               <span>
                <img src="<?php echo base_url();?>/assets/img/gayatinlogo.png" alt="Tooth">
                <img src="<?php echo base_url()?>/assets/img/gayatindc-logo.png " alt="Gayatin Dental Clinic Logo" />        
               </span>
              </div>
              <span class="text-center login-errormsg"><?php echo $message;?></span>
              <div style="display:none" id="login-alert" class="alert alert-danger col-xs-12"></div>
                 
              <form id="login" action="<?php echo base_url();?>admin/login" class="form-horizontal" method="post" role="form">    
                <div style="margin-bottom: 10px" class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="username" class="form-control" type="text" name="user" placeholder="Username" aria-label="Username" required>                                        
                </div>
                    
                <div style="margin-bottom: 10px" class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input id="password" class="form-control" type="password" name="pass" placeholder="Password" aria-label="Password" required>
                </div>                                  
                <button id="loginbtn" type="submit" class="btn btn-primary pull-right">Login</button>
              </form>
            </div>                     
          </div>  
        </div>

<script type="text/javascript">
  $(document).ready(function(){
    $('#loginbtn').click(function(event){
        event.preventDefault();
        $.getJSON("<?php echo base_url();?>admin/check_login/",{username:$('#username').val(),password:$('#password').val()},success=function(data){
                if(data == '0'){
                  swal('ERROR','Invalid Username/Password','error');
                }
                else
                  $('#login').submit();
        });
    });
  });
</script>