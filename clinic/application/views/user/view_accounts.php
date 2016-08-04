<?php $this->load->view('header', array('num' => 5, 'title' => 'User Accounts')); ?>
    <div class="row element-container">
       <legend>User Accounts</legend>
       <a href="<?php echo base_url();?>admin/add_staff">
          <button id="add" type="button" class="add-btn btn btn-success">
            <span class="glyphicon glyphicon-user"></span>
            Add New Account
          </button>
       </a>
        <div class="col-xs-12 columns"> 
            <div class="table-responsive large-tables">
              <table id="example" class="table table-striped" cellspacing="0" width="100%" style="text-align: center">
                <thead class="alert-info">
                    <tr>
                        <th class="text-center vertical-middle-align" width="30%">Name</th>
                        <th class="text-center vertical-middle-align" width="20%">Username</th>
                        <th class="text-center vertical-middle-align" width="15%">Type</th>
                        <th class="text-center vertical-middle-align" width="35%">Action</th>
                    </tr>
                </thead>                 
                <tbody>
                  <?php foreach($staff as $stf): ?>
                    <tr>
                        <td class="vertical-middle-align"><?php echo $stf->firstname;?> <?php echo $stf->middlename;?> <?php echo $stf->lastname;?></td>
                        <td class="vertical-middle-align"><?php echo $stf->username;?></td>
                        <td class="vertical-middle-align">
                          <?php 
                              if($stf->type === "0") 
                                echo "Dentist";
                              else if($stf->type === "1") 
                                echo "Clinic Staff";
                          ?>
                        </td>
                        <td>
                          <a style="text-decoration:none;" href="<?php echo base_url();?>admin/reset_password/<?php echo $stf->user_id;?>" onclick="return confirm('Are you sure you want to reset the password of <?php echo $stf->username;?>?');">
                              <button id="add" type="button" class="table-btn-users btn btn-info">
                                <span class="glyphicon glyphicon-refresh"></span>
                                Reset Password
                              </button>                 
                          </a>
                          <a style="text-decoration:none;" href="<?php echo base_url();?>admin/delete_staff/<?php echo $stf->user_id;?>" onclick="return confirm('Are you sure you want to delete <?php echo $stf->username;?>?');">
                              <button id="add" type="button" class="table-btn-users btn btn-danger">
                                <span class="glyphicon glyphicon-remove"></span>
                                Remove
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
    } );
</script>