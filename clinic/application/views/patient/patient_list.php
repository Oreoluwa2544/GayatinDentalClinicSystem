<?php $this->load->view('header', array('num' => 2, 'title' => 'Patient Profiles')); ?>
<div class="element-container">
    <div class="row center-block">
        <div class="col-xs-12 columns large-centered">
            <legend>Patient Profiles</legend>
                <a href="<?php echo base_url();?>patient/add_patient">
                    <button type="button" class="add-btn btn btn-success">
                        <span class="glyphicon glyphicon-user"></span>
                        Create New Profile
                    </button>
                </a>
                <div class="col-xs-12 columns">
                  <div class="table-responsive large-tables">
                      <table id="example" class="table table-striped" cellspacing="0" width="100%">
                        <thead class="alert-info">
                            <tr height="50">
                                <th class="col-xs-2 text-center vertical-middle-align" width="25%">Name</th>
                                <th class="col-xs-1 text-center vertical-middle-align" width="10%">Username</th>
                                <th class="col-xs-2 text-center vertical-middle-align" width="10%">Phone Number</th>
                                <th class="col-xs-2 text-center vertical-middle-align" width="15%">Date Created</th>
                                <th class="col-xs-1 text-center vertical-middle-align" width="10%">Created by</th>
                                <th class="col-xs-2 text-center vertical-middle-align" width="15%">Date Modified</th>
                                <th class="col-xs-1 text-center vertical-middle-align" width="10%">Modified by</th>  
                                <th class="col-xs-1 text-center vertical-middle-align" width="5%">Action</th>
                            </tr>
                        </thead>
                                     
                        <tbody>
                          <?php foreach($profile as $prof): ?>
                            <tr class="text-center">
                                <td class="text-left vertical-middle-align">
                                    <a style="text-decoration:none;" href="<?php echo base_url();?>patient/view_patient_profile/<?php echo $prof->patient_id;?>">
                                        <?php echo $prof->lastname;?>, <?php echo $prof->firstname;?> <?php echo $prof->middlename;?>
                                    </a>
                                </td>
                                <td class="vertical-middle-align">
                                    <?php echo $prof->username;?>
                                </td>
                                <td class="vertical-middle-align"><?php echo $prof->mobileno;?></td>
                                <td class="vertical-middle-align"><?php echo date("F j, Y ~ h:i A",strtotime($prof->datecreated));?></td>
                                <td class="vertical-middle-align"><?php echo $prof->createdby;?></td>
                                <td class="vertical-middle-align"><?php echo date("F j, Y ~ h:i A",strtotime($prof->datemodified));?></td>
                                <td class="vertical-middle-align"><?php echo $prof->lastmodifiedby;?></td>                            
                                <td class="vertical-middle-align">                                
                                    <a href="<?php echo base_url();?>patient/edit_patient/<?php echo $prof->patient_id;?>">
                                        <button class="btn btn-info">
                                            <span class="glyphicon glyphicon-pencil"></span> 
                                            Edit
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
      </div>
</div>
    
<?php $this->load->view('footer'); ?>
<script>
$(document).ready(function() {
    $('#example').dataTable();
} );
</script>