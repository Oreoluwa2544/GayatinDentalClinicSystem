<?php $this->load->view('header', array('num' => 2, 'title' => 'Create New Profile')); ?>
<div class="row">
  <div class="col-xs-10 col-xs-offset-1 col-lg-10 col-lg-offset-1 columns">
      <div class="element-container">
              <legend>Create New Profile</legend>
              <center><span style="color:red;"><?php echo $message;?></span></center>
              <form id="add_patient" method="post" action="<?php echo base_url();?>patient/create_patient" role="form">
                  
                  <div class="row clearfix">
                      <div class="col-xs-10 col-xs-offset-1 columns">
                        <!-- START OF PERSONAL INFORMATION -->
                        <div class="col-xs-12 columns">
                          <span><h4 class="group-title">Personal Information</h4></span>
                          <!-- START OF LEFT COLUMN OF PERSONAL INFORMATION -->
                          <div class="col-xs-6 col-lg-6 columns">  
                            <label for="username" class="form-elem">Username *</label>
                            <input id="username" class="form-control" placeholder="This serves as your identifier" name="uname" type="text" required />

                            <label for="firstname" class="form-elem">First Name *</label>
                            <input id="firstname" class="form-control" name="fname" type="text" required />
                            
                            <label for="middlename" class="form-elem">Middle Name *</label>
                            <input id="middlename" class="form-control" name="mname" type="text" required />

                            <div class="col-xs-12 col-lg-6 columns">
                              <label for="lastname" class="form-elem">Last Name *</label>
                              <input id="lastname" class="form-control" name="lname" type="text" required />
                            </div>

                            <div class="col-xs-12 col-lg-6 columns">
                              <label for="bdate" class="form-elem">Birthdate *</label>
                              <input id="bdate" class="form-control" name="bdate" type="date" required />
                            </div>
                          </div>
                          <!-- END OF LEFT COLUMN OF PERSONAL INFORMATION -->
                          
                          <!-- START OF RIGHT COLUMN OF PERSONAL INFORMATION -->
                          <div class="col-xs-6 col-lg-6 columns">  
                            <label class="form-elem" for="profile-tel">Telephone Number</label>
                            <input placeholder="format: 561-7002" id="profile-tel" class="form-control" name="htno" pattern="[0-9]{3}[-][0-9]{4}" type="text" />                               
                          
                            <label class="form-elem" for="profile-mobile">Mobile Number *</label>
                            <input placeholder="format: 09059217529" id="profile-mobile" class="form-control" name="mno" type="text" pattern="[0][9][0-9]{9}" required/>

                            <label class="form-elem" for="profile-email">Email Address *</label>
                            <input id="profile-email" class="form-control" name="email" type="email" required />                          

                            <div class="col-xs-12 columns">
                              <div class="col-xs-6 columns">
                                <label class="form-elem" for="profile-gender">Gender *</label>
                                <select id="profile-gender"class="form-control" name="gender" required>
                                  <option value="" disabled default selected style="display:none;"></option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                </select>
                              </div>                                  
                              <div class="col-xs-6 columns">
                                <label class="form-elem" for="profile-mstatus">Marital Status *</label>
                                <select id="profile-mstatus" class="form-control" name="mstat" required>
                                  <option value="" disabled default selected style="display:none;"></option>
                                  <option value="Single">Single</option>
                                  <option value="Married">Married</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <!-- END OF RIGHT COLUMN OF PERSONAL INFORMATION -->                         
                          <div class="col-xs-12 columns">
                            <label class="form-elem" for="profile-address">Home Address *</label>
                            <input id="profile-address" class="form-control" name="hadd" type="text" required />
                          </div>                          
                          
                        </div>
                        <!-- END OF PERSONAL INFORMATION -->  

                        <!-- START OF WORK INFORMATION -->
                        <div class="col-xs-12 columns">
                          <span style="display:block; margin-top:22px"><h4 class="group-title">Work Information</h4></span>                         
                          <label class="form-elem" for="profile-oaddress">Office Address</label>
                          <input id="profile-oaddress"class="form-control" name="oadd" type="text" />
                                              
                          <div class="col-xs-6 col-lg-6 columns">
                            <label class="form-elem" for="profile-otel">Office Telephone Number</label>
                            <input placeholder="format: 561-7003" id="profile-otel" class="form-control" name="otno" pattern="[0-9]{3}[-][0-9]{4}" type="text" />
                          </div>
                        </div>
                        <!-- END OF WORK INFORMATION -->        

                        <!-- START OF DENTAL INFORMATION -->  
                        <div class="col-xs-12 columns">
                        <span style="display:block; margin-top:22px"><h4 class="group-title">Dental Information</h4></span>                         
                            
                            <div class="col-xs-6 col-lg-6 columns">  
                              <div class="col-xs-12 col-lg-6 columns">
                                <label class="form-elem" for="profile-occ">OCCLUSION *</label>
                                <select id="profile-occ" class="form-control" name="occ" required>
                                  <option value="" disabled default selected style="display:none;"></option>
                                  <option value="Class I">Class I</option>
                                  <option value="Class II (Div.1)">Class II (Div.1)</option>
                                  <option value="Class II (Div.2)">Class II (Div.2)</option>
                                  <option value="Class III">Class III</option>
                                  <option value="None">None</option>
                                </select>
                              </div>

                              <div class="col-xs-12 col-lg-6 columns">
                                <label class="form-elem" for="profile-pc">Periodontal Condition *</label> 
                                <select id="profile-pc" class="form-control" name="perdon" required>
                                    <option value="" disabled default selected style="display:none;"></option>
                                    <option value="Normal">Normal</option>
                                    <option value="With Periodontal Problem">With Periodontal Problem</option>
                                </select>
                              </div>
                            </div>

                            <div class="col-xs-6 col-lg-6 columns">  
                              <div class="col-xs-12 col-lg-6 columns">
                                <label class="form-elem" for="profile-oh">Oral Hygiene *</label>  
                                <select id="profile-oh" class="form-control" name="orhy" required>
                                  <option value="" disabled default selected style="display:none;"></option>
                                  <option value="Good">Good</option>
                                  <option value="Poor">Poor</option>
                                </select>
                              </div>

                              <div class="col-xs-12 col-lg-6 columns">
                                <label class="form-elem" for="profile-hob">History of Bleeding *</label>
                                <select id="profile-hob" class="form-control" name="phb" required>
                                  <option value="" disabled default selected style="display:none;"></option>
                                  <option value="Yes">Yes</option>
                                  <option value="No">No</option>
                                </select>
                              </div>
                            </div>

                            <div class="col-xs-12 columns">
                              <hr />
                              <label>Denture</label>
                            </div>
                              <div class="col-xs-6 col-lg-6 columns" style="display:inline-flex">
                                <input id="checkbox1" name-"dupper" class="checkbox" type="checkbox">
                                <label style="margin:4px" for="checkbox1">Upper</label>
                                <input id="usince" class="form-control" style="width:50%; margin-left:5px; margin-bottom:5px" name="usince" disabled type="text"  placeholder="Since" />                            
                              </div>
                              <br/>
                              <div class="col-xs-6 col-lg-6 columns" style="display:inline-flex">
                                <input id="checkbox2" name="dlower" class="checkbox" type="checkbox">
                                <label style="margin:4px" for="checkbox2">Lower</label>
                                <input id="lsince" class="form-control" style="width:50%; margin-left:5px" name="lsince" disabled type="text" placeholder="Since" />
                              </div>
                            
                        </div>    
                        <!-- END OF DENTAL INFORMATION -->        

                        <!-- START OF MEDICAL INFORMATION --> 
                        <div id="dtcon">
                          <div class="col-xs-12 columns">                    
                                <span style="display:block; margin-top:22px"><h4 class="group-title">Medical Information</h4></span>                         

                                <div class="col-xs-12 columns">
                                  <div class="col-xs-4 columns">
                                    <label class="form-elem" for="profile-bp">Blood Pressure</label>
                                    <input id="profile-bp" class="form-control" name="bp" type="text" />
                                  </div>
                                </div>
                                <div class="col-xs-12 columns">
                                  <hr />
                                </div>

                                <div class="col-xs-4 col-lg-4 columns">
                                  <label>Chronic Ailments</label><br />
                                  <div id="ca1">
                                    <button id="add_chrail"  type="button" class="btn btn-info">Add Chronic Ailment</button>        
                                  </div><br>
                                </div>
                                
                                <div class="col-xs-4 col-lg-4 columns">
                                  <label>Drugs Taken</label>
                                  <div id="dt1">
                                    <button id="add_drugs" type="button" class="btn btn-info">Add Drug Taken</button>       
                                  </div><br>
                                </div>

                                <div id="alcon">        
                                  <div class="col-xs-4 col-lg-4 columns">
                                    <label>Allergies</label><br />
                                    <div id="al1">
                                      <button id="add_allergy" type="button" class="btn btn-info">Add Allergy </button><br>    
                                      <!-- <button id="rmv_allergy" type="button" class="btn btn-danger">Remove</button> -->
                                    </div><br>
                                  </div>
                                </div>
                          </div>      
                        </div>       
                        <!-- END OF MEDICAL INFORMATION -->        
                        <legend></legend>  
                        <button id="sub" type="submit" class="btn btn-success">Submit</button><br><br>
                    </div>
                </div>    
              </form>
      </div>            
  </div>
</div>    
<?php $this->load->view('footer'); ?>
<script type="text/javascript">
    var cctr=1;
    var actr=1;
    var rctr=1;

    $(document).ready(function(){
                $("#checkbox1").change(function() {
                  if(this.checked){
                    $('#checkbox1').val('Yes');
                    $('#usince').prop('disabled',false);
                  }
                  else{
                    $('#checkbox1').val('');
                    $('#usince').prop('disabled',true);
                  }
                });

                $("#checkbox2").change(function() {
                  if(this.checked){
                    $('#checkbox2').val('Yes');
                    $('#lsince').prop('disabled',false);
                  }
                  else{
                    $('#checkbox2').val('');
                    $('#lsince').prop('disabled',true);
                  }
                });

                $("#add_drugs").click(function(){
                  ctemp = cctr;
                  cctr+=1;
                    $('<div id="bdt' + cctr +'" style="position:relative; margin-top:5px;"><button type="button" style="right:0;width:20px;height:20px;text-align:center;" class="btn btn-danger rmvdt"><span class="glyphicon glyphicon-remove" style="position:absolute;top:4px;left:7px;"></span></button><textarea id="dt' + cctr + '" class="form-control" name="adt[]" required></textarea>').insertAfter("#dt1");
                });

                $("#rmv_drugs").click(function() {
                    if (cctr != 1) { 
                      $('#bdt' + cctr).remove();
                      $('#dt' + cctr).remove();
                      cctr -= 1; 
                    }
                });

                $("#add_allergy").click(function(){
                  atemp = actr;
                  actr+=1; 
                    $('<div id="bal' + actr +'" style="position:relative; margin-top:5px;"><button type="button" style="right:0;width:20px;height:20px;text-align:center;" class="btn btn-danger rmval"><span class="glyphicon glyphicon-remove" style="position:absolute;top:4px;left:7px;"></span></button><textarea id="al' + actr + '" class="form-control" name="aal[]" required></textarea></div>').insertAfter("#al1");                
                });

                $("#add_chrail").click(function(){
                  rtemp = rctr;
                  rctr+=1;
                    $('<div id="bca' + rctr +'" style="position:relative; margin-top:5px;"><button type="button" style="right:0;width:20px;height:20px;text-align:center;" class="btn btn-danger rmvca"><span class="glyphicon glyphicon-remove" style="position:absolute;top:4px;left:7px;"></span></button><textarea id="ca' + rctr + '" class="form-control" name="aca[]" required></textarea></div>').insertAfter("#ca1");
                });
                
                $(document).on("click",".rmvca",function() {
                    var rca = $(this).parent().attr("id");
                    $('#' + rca).remove();
                });

                $(document).on("click",".rmval",function() {
                    var ral = $(this).parent().attr("id");
                    $('#' + ral).remove();
                });

                $(document).on("click",".rmvdt",function() {
                    var rdt = $(this).parent().attr("id");
                    $('#' + rdt).remove();
                });

                $("#sub").click(function(event){
                  if($('#add_patient').valid()){
                event.preventDefault();
                      $.getJSON("<?php echo base_url();?>patient/check_username/",{username:$('#username').val()},success=function(data){
                              if(data == '1'){
                                swal('ERROR','Username already exists','error');
                                event.preventDefault();
                              }
                              else{
                                event.preventDefault();
                            $.getJSON("<?php echo base_url();?>patient/check_patient/",{firstname:$('#firstname').val(),lastname:$('#lastname').val(),middlename:$('#middlename').val()},success=function(data){
                                    if(data == '1'){
                                      swal('ERROR','The person already have an account','error');
                                      event.preventDefault();
                                    }
                                    else
                                  $("#add_patient").submit();
                            });
                         }
                      });
                  }
                });

    });
</script>