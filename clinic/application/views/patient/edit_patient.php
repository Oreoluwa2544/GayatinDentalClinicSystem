<?php $this->load->view('header', array('num' => 2, 'title' => 'Edit Profile')); ?>
<div class="row">
  <div class="col-xs-10 col-xs-offset-1 col-lg-10 col-lg-offset-1 columns">
    <div class="element-container"> 
        <legend>Edit Profile</legend>
        <center><span style="color:red;"><?php echo $message;?></span></center>
        <form id="update_patient" method="post" action="<?php echo base_url();?>patient/update_patient" role="form">
        
        <div class="row clearfix">
          <div class="col-xs-10 col-xs-offset-1 columns">

            <?php foreach($profile as $prof):?>
            <!-- START OF PERSONAL INFORMATION -->
            <div class="col-xs-12 columns">
              <span><h4 class="group-title">Personal Information</h4></span>
              <!-- START OF LEFT COLUMN OF PERSONAL INFORMATION -->
              <div class="col-xs-6 col-lg-6 columns">
                <input id="pid" type="hidden" name="profid" value="<?php echo $prof->patient_id; ?>"/>
                  
                <label class="form-elem" for="username">Username</label>
                <input id="username" class="form-control" value="<?php echo $prof->username;?>" name="uname" type="text" required />

                <label class="form-elem" for="fname">First Name</label>
                <input id="fname" class="form-control" value="<?php echo $prof->firstname;?>" name="fname" type="text" disabled />
                
                <label class="form-elem" for="editp-mname">Middle Name</label>
                <input id="mname" class="form-control" value="<?php echo $prof->middlename;?>" name="mname" type="text" disabled />

                <div class="col-xs-12 col-lg-6 columns">
                  <label class="form-elem" for="editp-lname">Last Name</label>
                  <input id="lname" class="form-control" value="<?php echo $prof->lastname;?>" name="lname" type="text" disabled />                
                </div>
                <div class="col-xs-12 col-lg-6 columns">
                  <label class="form-elem" for="profile-bdate">Birthdate</label>
                  <input id="bdate" class="form-control" value="<?php echo $prof->birthdate;?>" name="bdate" type="date" disabled />
                </div>
              </div>
              <!-- END OF LEFT COLUMN OF PERSONAL INFORMATION -->
              <!-- START OF RIGHT COLUMN OF PERSONAL INFORMATION -->
                <div class="col-xs-6 col-lg-6 columns">  
                  <label class="form-elem" for="editp-telno">Telephone Number</label>
                  <input id="editp-telno" class="form-control" value="<?php echo $prof->telno;?>" name="htno" type="text" />
                  
                  <label class="form-elem" for="editp-mno">Mobile Number</label>
                  <input id="editp-mno" class="form-control" value="<?php echo $prof->mobileno;?>" name="mno" type="text" pattern="[0][9][0-9]{9}" required/>

                  <label class="form-elem" for="editp-email">Email Address</label>
                  <input id="editp-email" class="form-control" value="<?php echo $prof->email;?>" name="email" type="email" required />

                  
                    <div class="col-xs-6 columns">
                      <label class="form-elem" for="editp-gender">Gender</label>  
                      <select id="editp-gender" class="form-control" name="gender" disabled>
                            <option value="<?php echo $prof->gender;?>" style="display:none;"><?php echo $prof->gender;?></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                      </select>
                    </div>
              
                    <div class="col-xs-6 columns">
                      <label class="form-elem" for="editp-mstatus">Marital Status</label>  
                      <select id="editp-mstatus" class="form-control" name="mstat" required>
                            <option value="<?php echo $prof->maritalstatus;?>" style="display:none;"><?php echo $prof->maritalstatus;?></option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                          </select>
                    </div>
                  
              </div>
              <!-- END OF RIGHT COLUMN OF PERSONAL INFORMATION -->
              <div class="col-xs-12 columns">
                <label class="form-elem" for="editp-hadd">Home Address</label>
                <input id="editp-hadd" class="form-control" value="<?php echo $prof->address;?>" name="hadd" type="text" required />
              </div>
            </div>
            <!-- END OF PERSONAL INFORMATION -->

            <!-- START OF WORK INFORMATION -->
            <div class="col-xs-12 columns">
              <span style="display:block; margin-top:22px"><h4 class="group-title">Work Information</h4></span>                         

              <label class="form-elem" for="editp-oadd">Office Address</label>  
              <input id="editp-oadd" class="form-control" value="<?php echo $prof->officeaddress;?>" name="oadd" type="text" />
              
              <div class="col-xs-6 col-lg-6 columns">
                <label class="form-elem" for="editp-otelno">Office Telephone Number</label>  
                <input id="editp-otelno" class="form-control" value="<?php echo $prof->officetelno;?>" name="otno" type="text"  />
              </div>
            </div>
            <!-- END OF WORK INFORMATION -->

            <!-- START OF DENTAL INFORMATION -->
            <div class="col-xs-12">
            <span style="display:block; margin-top:22px"><h4 class="group-title">Dental Information</h4></span>                         
              
              <div class="col-xs-6 col-lg-6 columns"> 
                <div class="col-xs-12 col-lg-6 columns">
                  <label class="form-elem" for="editp-occ">OCCLUSION</label>    
                  <select id="editp-occ"class="form-control" name="occ" required>
                    <option value="<?php echo $prof->occlusion;?>" style="display:none;"><?php echo $prof->occlusion;?></option>
                    <option value="Class I">Class I</option>
                    <option value="Class II (Div.1)">Class II (Div.1)</option>
                    <option value="Class II (Div.2)">Class II (Div.2)</option>
                    <option value="Class III">Class III</option>
                    <option value="None">None</option>
                  </select>
                </div>

                <div class="col-xs-12 col-lg-6 columns">
                  <label class="form-elem" for="editp-pdc">Periodontal Condition</label>  
                  <select id="editp-pdc" class="form-control" name="perdon" required>
                        <option value="<?php echo $prof->periodontalcondition;?>" style="display:none;"><?php echo $prof->periodontalcondition;?></option>
                        <option value="Normal">Normal</option>
                        <option value="With Periodontal Problem">With Periodontal Problem</option>
                  </select>
                </div>
              </div>

              <div class="col-xs-6 col-lg-6 columns">                  
                <div class="col-xs-12 col-lg-6 columns">
                  <label class="form-elem" for="editp-oh">Oral Hygiene</label>  
                  <select id="editp-oh" class="form-control" name="orhy" required>
                      <option value="<?php echo $prof->oralhygiene;?>" style="display:none;"><?php echo $prof->oralhygiene;?></option>
                      <option value="Good">Good</option>
                      <option value="Poor">Poor</option>
                  </select>
                </div>
                <div class="col-xs-12 col-lg-6 columns">
                  <label class="form-elem" for="phb">History of Bleeding</label>  
                  <select id="phb" class="form-control" name="phb" required>
                      <option value="<?php echo $prof->prevhistoryofbleeding;?>" style="display:none;"><?php echo $prof->prevhistoryofbleeding;?></option>
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
                  <input id="checkbox1" name-"dupper" class="checkbox" type="checkbox" <?php if($prof->upper_denture!=''){?>checked<?php }?>>
                  <label style="margin:4px" for="checkbox1">Upper</label>
                  <input id="usince" class="form-control" style="width:50%; margin-left:5px; margin-bottom:5px" name="usince" disabled type="text"  placeholder="Since" <?php if($prof->upper_since!=''){?>value="<?php echo $prof->upper_since;?>"<?php }?>/>                            
                </div>
                <br/>
                <div class="col-xs-6 col-lg-6 columns" style="display:inline-flex">
                  <input id="checkbox2" name="dlower" class="checkbox" type="checkbox" <?php if($prof->lower_denture!=''){?>checked<?php }?>>
                  <label style="margin:4px" for="checkbox2">Lower</label>
                  <input id="lsince" class="form-control" style="width:50%; margin-left:5px" name="lsince" disabled type="text" placeholder="Since" <?php if($prof->lower_since!=''){?>value="<?php echo $prof->lower_since;?>"<?php }?>/>
                </div>
            </div>
            <!-- END OF DENTAL INFORMATION -->

            <!-- START OF MEDICAL INFORMATION -->
            <div id="cacon">
                <div class="col-xs-12 columns" style="margin-bottom: 20px;">
                    <span style="display:block; margin-top:22px"><h4 class="group-title">Medical Information</h4></span>                         
                   
                    <div class="col-xs-12 columns">
                      <div class="col-xs-4 columns">
                        <label class="form-elem" for="bp">Blood Pressure</label>
                        <input id="bp" class="form-control" value="<?php echo $prof->bloodpressure;?>" name="bp" type="text" />
                      </div>    
                    </div>
                    <div class="col-xs-12 columns">
                      <hr />
                    </div>

                    <div class="col-xs-4 col-lg-4 columns">
                      <label>Chronic Ailments</label>
                      <?php $rctr=0;foreach($chronicailment as $ca):$rctr+=1;?>
                        <input type="hidden" name="caid<?php echo $rctr;?>" value="<?php echo $ca->id; ?>"/>
                        <textarea id="ca<?php echo $rctr;?>" class="form-control" name="ca<?php echo $rctr;?>" ><?php echo $ca->chronicailmentname;?></textarea><br>
                      <?php endforeach;?>
                      <div id="ca0">
                        <button id="add_chrail" type="button" class="btn btn-info">Add Chronic Ailment</button>       
                      </div>
                    </div>
              
                    <div id="dtcon" class="col-xs-4 col-lg-4 columns">
                            <label>Drugs Taken</label>
                            <?php $cctr=0;foreach($drugstaken as $dt):$cctr+=1;?>
                              <input type="hidden" name="drugid<?php echo $cctr;?>" value="<?php echo $dt->id; ?>"/>
                              <textarea id="dt<?php echo $cctr;?>" class="form-control" name="dt<?php echo $cctr;?>" ><?php echo $dt->drugname;?></textarea><br>
                            <?php endforeach;?>
                            <div id="dt0">
                                <button id="add_drugs" type="button" class="btn btn-info">Add Drug Taken</button>       
                            </div>                
                    </div>                
          
                    <div id="alcon" class="col-xs-4 col-lg-4 columns">
                            <label>Allergies</label>
                            <?php $actr=0;foreach($allergies as $al):$actr+=1;?>
                              <input type="hidden" name="allergyid<?php echo $actr;?>" value="<?php echo $al->id; ?>"/>
                              <textarea id="al<?php echo $actr;?>" class="form-control" name="al<?php echo $actr;?>"><?php echo $al->allergyname;?></textarea><br>
                            <?php endforeach;?>
                            <div id="al0">
                                <button id="add_allergy" type="button" class="btn btn-info">Add Allergy</button>       
                            </div>                                                    
                    </div>
                </div>
              </div>              
            <!-- END OF MEDICAL INFORMATION -->
            <?php endforeach;?>

            <legend></legend>  
            <input type="hidden" name="cctr" value="<?php echo $cctr; ?>"/>
            <input type="hidden" name="actr" value="<?php echo $actr; ?>"/>
            <input type="hidden" name="rctr" value="<?php echo $rctr; ?>"/>
            <button id="sub" type="submit" class="btn btn-success">Save</button>
          </div>
      </div><!-- row clearfix closing div -->
    </form>
    </div>
  </div>
</div>
<?php $this->load->view('footer'); ?>
<script type="text/javascript">
    var cctr=<?php echo $cctr;?>;
    var actr=<?php echo $actr;?>;
    var rctr=<?php echo $rctr;?>;

    $(document).ready(function(){
                if($('#checkbox1').is(':checked')){
                  $('#usince').prop('disabled',false);
                }
                if($('#checkbox2').is(':checked')){
                  $('#lsince').prop('disabled',false);
                }
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
                    $('<div id="bdt' + cctr + '" style="position:relative; margin-top:5px;"><button type="button" style="right:0;width:20px;height:20px;text-align:center;" class="btn btn-danger rmvdt"><span class="glyphicon glyphicon-remove" style="position:absolute;top:4px;left:7px;"></span></button><textarea id="dt' + cctr + '" class="form-control" name="adt[]" required></textarea></div>').insertAfter("#add_drugs");
                });

                $("#add_allergy").click(function(){
                  atemp = actr;
                  actr+=1; 
                    $('<div id="bal' + actr + '" style="position:relative; margin-top:5px;"><button type="button" style="right:0;width:20px;height:20px;text-align:center;" class="btn btn-danger rmval"><span class="glyphicon glyphicon-remove" style="position:absolute;top:4px;left:7px;"></span></button><textarea id="al' + actr + '" class="form-control" name="aal[]" required></textarea></div>').insertAfter("#add_allergy");                
                });

                $("#add_chrail").click(function(){
                  rtemp = rctr;
                  rctr+=1;
                    $('<div id="bca' + rctr + '" style="position:relative; margin-top:5px;"><button type="button" style="right:0;width:20px;height:20px;text-align:center;" class="btn btn-danger rmvca"><span class="glyphicon glyphicon-remove" style="position:absolute;top:4px;left:7px;"></span></button><textarea id="ca' + rctr + '" class="form-control" name="aca[]" required></textarea></div>').insertAfter("#add_chrail");
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
                  if($('#update_patient').valid()){
                event.preventDefault();
                      $.getJSON("<?php echo base_url();?>patient/check_new_username/",{username:$('#username').val(),pid:$('#pid').val()},success=function(data){
                              if(data == '1'){
                                swal('ERROR','Username already exists','error');
                                event.preventDefault();
                              }
                              else{
                                $("#update_patient").submit();
                              }
                      });
                  }
                });
    });
</script>