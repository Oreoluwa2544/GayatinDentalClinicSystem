<?php $this->load->view('header', array('num' => 2, 'title' => 'New Treatment')); ?>		
<form method="post" action="<?php echo base_url();?>treatment/add_treatment" role="form">
                <div class="element-container">
                      <div class="page-header">
                      <?php foreach($prof as $prof):?>
                        New appointment record for <?php echo $prof->firstname;?> <?php echo $prof->middlename;?> <?php echo $prof->lastname;?> on <?php echo date("F j, Y",strtotime($date));?>
                      <input type="hidden" value="<?php echo $prof->patient_id;?>" name="patient_id"/>
                      <input type="hidden" value="<?php echo $date;?>" name="date"/>
                      <?php endforeach;?>
                      </div>
                      
                      <div class="col-lg-4 col-lg-offset-4 columns">
                        <label for="dic">Dentist in Charge</label>
                        <select id="dic" class="form-control" name="dentist" required>
                                      <option value="" disabled default selected style="display:none;"></option>
                                      <option value="Dr. Cynthia Gayatin">Dr. Cynthia Gayatin</option>
                                      <option value="Dr. John Gayatin">Dr. John Gayatin</option>
                        </select><br>
                      </div>
                      
                      <div class="col-lg-6 columns col-lg-offset-3" style="margin-bottom: 10px;">
                          <label for="cc">Chief Complaint</label>
                          <textarea name="complaint" id="cc" class="form-control" cols="50" rows="2" style="resize: none"></textarea>  
                      </div>

                      <div class="col-lg-6 columns col-lg-offset-3" style="margin-bottom: 10px;">
                          <label for="of">Other Findings</label>
                          <textarea name="finding" id="of" class="form-control" cols="50" rows="2" style="resize: none"></textarea>  
                      </div>

                      <div class="col-lg-5 columns" style="display:inline-flex; margin: 10px 0 10px 0;">
                        <!-- <label for="atf">Treatments Performed</label> -->
                        <select id="type" style="width:50%; margin-right:5px;" class="form-control" name="type" required>
                                      <option value="" disabled default selected style="display:none;">Treatment Type</option>
                                      <option value="Tooth">Tooth</option>
                                      <!-- <option value="Unit">Unit</option> -->
                                      <option value="Post">Post</option>
                                      <option value="Canal">Canal</option>
                                      <option value="Arch">Arch</option>
                                      <option value="Appliance">Appliance</option>
                                      <option value="Quadrant">Quadrant</option>
                        </select>
                        <button id="atf" style="margin-right:5px" type="button" class="btn btn-info">Add treatment</button>
                        <!-- <button id="atf" type="button" class="btn btn-info">Add unit treatment</button> -->
                        <!-- <button id="atf" type="button" class="btn btn-info">Add post treatment</button>
                        <button id="atf" type="button" class="btn btn-info">Add canal treatment</button>
                        <button id="atf" type="button" class="btn btn-info">Add arch treatment</button> -->
                        <!-- <button id="atf" type="button" class="btn btn-info">Add appliance treatment</button> -->
                        <!-- <button id="atf" type="button" class="btn btn-info">Add quadrant treatment</button> -->

                       <!--  <button id="remove" style="margin-right:5px" type="button" class="btn btn-warning">Remove</button> -->
                      </div>

                      <table id="mytable" style="margin-top: 10px" class="table" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th></th>
                            <th width="35%" style="text-align: center; font-weight: bold; font-size: 100%">Type of treatment</th>
                            <th width="35%" style="text-align: center; font-weight: bold; font-size: 100%">Application</th>
                            <th width="30%" style="text-align: center; font-weight: bold; font-size: 100%">Treatment price (PHP)</th>
                            <!-- <th width="15%" style="text-align: center; font-weight: bold; font-size: 100%">Total price (PHP)</th> -->
                          </tr>
                        </thead>
                        <tbody id="tbl1">
                          
                          
                        
                        </tbody>
                      </table>
                      
                      <hr>
                      <div class="col-lg-5 col-lg-offset-2 columns">

                        <label for="tot-amt-of-treatments">Total Amount for Treatment(s) Performed (PHP)</label>
                        <span id="tot-amt-of-treatments" class="form-control" style="width: 60%;">0</span>
                       <!--  <button id="calculate" class="btn btn-info" style="margin-top:5px;" type="button">Calculate Total Amount</button> -->
                        <input id="total" name="total_amount" class="form-control" type="hidden" value="0" required/>
                      </div>
                      <div class="col-lg-3 columns">
                        <label for="amt-rcvd">Amount paid (PHP)</label>
                        <input id="amt-rcvd" class="form-control" name="amount_paid" type="number" value="0" min="0" required/>
                      </div>
                      
                      <br/><br/><br/><br/><br/><br/>
                      <button id="sub" type="submit" class="btn-lg btn-success">Submit</button>
                      
                        
                      
                </div>
</form>


<?php $this->load->view('footer'); ?>
<script type="text/javascript">
  var ctr=1;

$(document).ready(function(){

  $('#atf').click(function(){
    if($('#type').val()!=null){
      temp = ctr;
      ctr+=1;
      $('<tr id="tbl'+ctr+'"><td><button type="button" style="margin-right:5px;margin-top:20px; width:80%;" class="btn btn-danger rmv"><span class="glyphicon glyphicon-remove"></span></button></td><td style="text-align:center"><input type="hidden" value="'+$('#type').val()+'" name="type[]"/><select required id="'+temp+'" style="margin-right:5px; margin-top:20px; width:80%;" class="form-control trtype" name="ttype[]" required></td><td id="ndd'+temp+'" class="text-center" style="display: inline-flex" width="100%"></td><td><span><center id="ptd'+temp+'">0</center></span><input id="pr'+temp+'"type="hidden" value="0" name="price[]" class="price" /></td></tr>').insertAfter("#tbl1");
      $.ajax({
          url:"<?php echo base_url(); ?>treatment/get_services",    
          data: {type: $('#type').val()},
          type: "POST",
          success: function(data){
              
              $("#"+temp).html(data);
          }
      }); 

      if($('#type').val() == 'Tooth'){
        $('<div class="col-md-12"><div id="tno1" class="col-md-6"><input placeholder="Tooth #" type="text" name="ttoothno[]" class="form-control toothno" style="margin-right:5px; width:100%;" pattern="[1-4][1-8]" required/></div><div id="surf1" class="col-md-6"><select style="margin-right:5px; width:100%;" class="form-control" name="tttype[]" required><option value="Mesial">Mesial</option><option value="Distal">Distal</option><option value="Labial">Labial</option><option value="Buccal">Buccal</option><option value="Lingual">Lingual</option></select></div></div>').insertAfter("#ndd"+ temp);
      }

      else if($('#type').val() == 'Quadrant'){
        $('<select id="apptype" style="width:80%; margin-right: 5px" class="form-control" name="qtype[]" required><option value="Upper right">Upper right</option><option value="Upper left">Upper left</option><option value="Lower left">Lower left</option><option value="All">All</option></select>').insertAfter("#ndd"+ temp);
      }

      else if($('#type').val() == 'Appliance'){
        $('<select id="apptype" style="width:80%; margin-right: 5px" name="atype[]" class="form-control" name="apptype" required><option value="Upper">Upper</option><option value="Lower">Lower</option><option value="Whole">Whole</option></select>').insertAfter("#ndd"+ temp);
      }

      else if($('#type').val() == 'Post'){
        $('<input placeholder="Tooth #" type="text" name="ptoothno[]" class="form-control toothno" style="margin-right:5px; width:80%;" pattern="[1-4][1-8]" required/>').insertAfter("#ndd"+ temp);
      }

      else if($('#type').val() == 'Canal'){
        $('<input placeholder="Tooth #" type="text" name="ctoothno[]" class="form-control toothno" style="margin-right:5px; width:80%;" pattern="[1-4][1-8]" required/>').insertAfter("#ndd"+ temp);
      }

      else if($('#type').val() == 'Arch'){
        $('<input placeholder="Tooth #" type="text" name="atoothno[]" class="form-control toothno" style="margin-right:5px; width:80%;" pattern="[1-4][1-8]" required/>').insertAfter("#ndd"+ temp);
      }


    }else{
      swal('ERROR','Pick treatment type first','error');
    }

    // $('.price').each(function() {
    //     sum += Number($(this).val());
    // });
    // $('#total').val(sum);
    // $('#tot-amt-of-treatments').html(sum);
  });

  $("#remove").click(function() {
      if (ctr != 1) { 
        $('#tbl' + ctr).remove();
        ctr -= 1; 
      }else{
        swal('ERROR','No more to remove','error');
      }
  });

  $('#sub').click(function(event){
    if(ctr==1){
      swal('ERROR','No treatment rendered','error');
      event.preventDefault();
    }
  });

  $(document).on("click",".rmv", function(){
    var nsum=0;
    var rid=$(this).parent().parent().attr("id");
    $('#' + rid).remove();
    $('.price').each(function(){
      nsum += Number($(this).val());
    });

    $('#tot-amt-of-treatments').html(nsum);
    $('#total').val(nsum);
    $('#amt-rcvd').attr({"max":nsum});
  });

  $(document).on("change", ".trtype", function(e) {
        sum=0;
        var id = this.id;
          $.ajax({
              url:"<?php echo base_url(); ?>treatment/get_price",    
              data: {name: this.options[e.target.selectedIndex].text},
              type: "POST",
              success: function(data){
                  $('#pr'+id).val(data);
                  $('#ptd'+id).html(data);

        $('.price').each(function(){
          sum += Number($(this).val());
        });

        $('#tot-amt-of-treatments').html(sum);
        $('#total').val(sum);
        $('#amt-rcvd').attr({"max":sum});
              }
          });

      });

});

</script>




