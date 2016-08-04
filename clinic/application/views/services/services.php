<?php $this->load->view('header', array('num' => 8, 'title' => 'Clinic Services')); ?>
<div class="element-container">
    <div class="row center-block">
        <div class="col-xs-12 columns">
            <legend>Clinic Services</legend>
                
                <button type="button" class="add-btn btn btn-success btn-add-service">
                    <span class="glyphicon glyphicon-user"></span>
                    Add Service
                </button>
                    
                <!-- MODAL FOR ADDING A SERVICE -->                                    
                  <div class="modal fade" id="modal-add-service" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
            
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Add a service</h4>
                          </div>

                          <div class="modal-body" style="display:inline-block">                                                                      
                            <div class="col-xs-10 col-xs-offset-1 columns">
                              <label for="ser-name">Name</label>
                              <input id="ser-name" class="form-control" name="serv-name" type="text" required />                 
                              <br />   
                            </div>

                            <div class="col-xs-5 col-xs-offset-1 columns">
                              <label for="ser-ct">Category</label>
                                <select id="ser-ct" class="form-control" name="serv-ct" required >
                                  <option value="General">General</option>
                                  <option value="Restorative Dentistry">Restorative Dentistry</option>
                                  <option value="Endodontic Dentistry">Endodontic Dentistry</option>
                                  <option value="Orthodontic Dentistry">Orthodontic Dentistry</option>
                                  <option value="Prostodontic Dentistry">Prostodontic Dentistry</option>  
                                </select>  
                            </div>
                            
                            <div class="col-xs-3  columns">
                              <label for="ser-cat">Type</label>
                                <select id="ser-cat" class="form-control" name="serv-cat" required >
                                  <option value="unclassified">unclassified</option>
                                  <option value="post">post</option>
                                  <option value="unit">unit</option>
                                  <option value="tooth">tooth</option>
                                  <option value="arch">arch</option>  
                                  <option value="quadrant">quadrant</option>
                                </select>  
                            </div>                           
                            
                            <div class="col-xs-2 columns">
                              <label for="ser-price">Price</label>
                              <input id="ser-price" class="form-control" name="serv-price" type="number" min="0" step="1" required />
                            </div>
                          </div>
                          
                          <div class="modal-footer">
                            <input class="btn btn-info" type="submit" name="submit" value="Submit" name="submit" onclick="add_service()" required />                            
                          </div>                          
                        </div><!-- /.modal-content -->
                      </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->
                <!-- END OF MODAL FOR ADDING A SERVICE -->

                <!-- MODAL FOR EDITTING A SERVICE -->                                    
                <form method="post" action="<?php echo base_url();?>services/update_service" role="form">  
                  <div class="modal fade" id="modal-edit-service" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
            
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Edit service</h4>
                          </div>

                          <div class="modal-body" style="display:inline-block">                                                                      
                            <div class="col-xs-10 col-xs-offset-1 columns">
                              <div class="col-xs-7 columns">
                                <label for="ser-name">Name</label>
                                <input id="edit-name" class="form-control" name="edit-name" type="text" required />
                              </div>
                              
                              <div class="col-xs-5 columns">
                                <label for="edit-ct">Category</label>
                                    <select id="edit-ct" class="form-control" name="edit-ct" required >
                                      <option value="General">General</option>
                                      <option value="Restorative Dentistry">Restorative Dentistry</option>
                                      <option value="Endodontic Dentistry">Endodontic Dentistry</option>
                                      <option value="Orthodontic Dentistry">Orthodontic Dentistry</option>
                                      <option value="Prostodontic Dentistry">Prostodontic Dentistry</option>  
                                    </select>
                              </div>
                            </div>

                            <div class="col-xs-10 col-xs-offset-1 columns" style="margin-top:10px">
                              <div class="col-xs-4 columns">
                                <label for="ser-cat">Type</label>
                                <select id="edit-cat" class="form-control" name="edit-cat" required >
                                  <option value="unclassified">unclassified</option>
                                  <option value="post">post</option>
                                  <option value="unit">unit</option>
                                  <option value="tooth">tooth</option>
                                  <option value="arch">arch</option>  
                                  <option value="quadrant">quadrant</option>
                                </select>
                              </div>                            
                              <input type="hidden" id="ser-id" name="ser-id" value="" />
                              <div class="col-xs-3 columns">
                                <label for="ser-price">Price</label>
                                <input id="edit-price" class="form-control" name="edit-price" type="number" min="0" step="1" required />
                              </div>
                              <div class="col-xs-3 columns">
                                <label for="ser-stat">Status</label>
                                <select id="edit-stat" class="form-control" name="edit-stat" required >
                                  <option value="1">Active</option>    
                                  <option value="0">Inactive</option>  
                                </select>
                              </div>
                            </div>
                          </div>
                          
                          <div class="modal-footer">
                            <input class="btn btn-info" type="submit" name="submit" value="Submit" name="submit" required />                            
                          </div>                          
                        </div><!-- /.modal-content -->
                      </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->
                 </form>
                 <!-- END OF MODAL FOR EDITTING A SERVICE -->
                
                <div class="col-xs-12 columns">   
                  <div class="table-responsive large-tables">
                    <table id="example" class="table table-striped" cellspacing="0" width="100%">
                      <thead class="alert-info">
                          <tr height="50">
                              <th class="col-xs-1 text-center vertical-middle-align">Service</th>
                              <th class="col-xs-1 text-center vertical-middle-align">Type</th>
                              <th class="col-xs-1 text-center vertical-middle-align">Price</th>
                              <th class="col-xs-1 text-center vertical-middle-align">Created by</th>
                              <th class="col-xs-2 text-center vertical-middle-align">Date Created</th>
                              <th class="col-xs-1 text-center vertical-middle-align">Modified by</th>                            
                              <th class="col-xs-2 text-center vertical-middle-align">Date Modified</th>
                              <th class="col-xs-1 text-center vertical-middle-align">Status</th>
                              <th class="col-xs-1 text-center vertical-middle-align">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                    
                        <?php foreach($service as $serv): ?>
                          <tr id="<?php echo $serv->id; ?>" class="text-center trow">
                              <td class="text-left vertical-middle-align"><?php echo $serv->dental_procedure;?></td>
                              <td class="vertical-middle-align"><?php echo $serv->procedure_type;?></td>
                              <td class="vertical-middle-align"><?php echo $serv->service_fee;?></td>
                              <td class="vertical-middle-align"><?php echo $serv->createdby;?></td>                            
                              <td class="vertical-middle-align"><?php echo date("F j, Y ~ h:i A",strtotime($serv->datecreated));?></td>
                              <td class="vertical-middle-align"><?php echo $serv->lastmodifiedby;?></td>                            
                              <td class="vertical-middle-align"><?php echo date("F j, Y ~ h:i A",strtotime($serv->datemodified));?></td>
                              <td class="vertical-middle-align"><?php if($serv->status)echo"Active";else echo"Inactive";?></td>
                              <td class="vertical-middle-align">                                
                                <button value="<?php echo $serv->id;?>" class="btn btn-info btn-edit-service" onclick="edit_service(this)">
                                  <span class="glyphicon glyphicon-pencil"></span> Edit
                                </button>
                              </td>
                              <input type="hidden" id="c<?php echo $serv->id;?>" value="<?php echo $serv->type ?>" />
                          </tr>                                
                        <?php 
                          endforeach;
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
          </div>
      </div>
</div>
    
<?php $this->load->view('footer'); ?>
<script>
$(document).ready(function(){
    $('#example').dataTable();

    document.getElementsByClassName('btn-add-service')[0].onclick = function(){        
        $('#modal-add-service').modal('toggle');        
    };

});

function add_service(){
  var service_details =  [document.getElementById("ser-cat").value,
                          document.getElementById("ser-ct").value,
                          document.getElementById("ser-name").value,
                          document.getElementById("ser-price").value,
                          document.getElementById("ser-id").value];                                      
  if(service_details[0] === "" || service_details[1] === "" || service_details[2] === "" || service_details[3] === "")
      alert("Please input data on all fields.");

  else{
    $.ajax({
      type: "POST",
      url: "http://localhost/clinic/services/add_service",
      data: {service_details:service_details},
      cache: false,
      success: function(result){
        $('#modal-add-service').modal('toggle');
        alert(result);
        location.reload();
      }
    });
  }
} 

function edit_service(elem){
  var ct = elem.value;
  var x = $('#c'+ct).val();
  // store the elements of the row with data to be passed to the modal
  var t_row = document.getElementById(elem.value);
    // display the stored elements to the modal input fields
    $('#edit-name').val(t_row.getElementsByTagName("td")[0].innerHTML);
    $('#edit-cat').val(t_row.getElementsByTagName("td")[1].innerHTML);  
    $('#edit-price').val(t_row.getElementsByTagName("td")[2].innerHTML);  
    $('#edit-ct').val(x);
    // select the option which corresponds to the value of the status
    if(t_row.getElementsByTagName("td")[7].innerHTML === "Active")

      $('#edit-stat').val("1");
    else
      $('#edit-stat').val("0");  
    $('#ser-id').val(elem.value);
    // display the modal
    $("#modal-edit-service").modal("toggle");  
}
</script>