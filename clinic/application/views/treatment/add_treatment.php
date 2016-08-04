<?php $this->load->view('header', array('num' => 2, 'title' => 'New Treatment')); ?>		
<form method="post" action="<?php echo base_url();?>treatment/add_treatment" role="form">
                <div class="element-container">
                      <div class="row center-block">
                      <?php foreach($prof as $prof):?>
                        <legend>
                            New treatment record for
                            <?php echo $prof->firstname;?> <?php echo $prof->middlename[0];?>. 
                            <?php echo $prof->lastname;?> on <?php echo date("F j, Y",strtotime($date));?>
                        </legend>
                      <input type="hidden" value="<?php echo $prof->patient_id;?>" name="patient_id"/>
                      <input type="hidden" value="<?php echo $date;?>" name="date"/>
                      <?php endforeach;?>                      

                      <div class="col-xs-12 columns">
                        <div class="col-xs-6 col-xs-offset-3 col-lg-4 col-lg-offset-4 columns">
                          <label for="dic">Dentist in Charge *</label>
                          <select id="dic" class="form-control" name="dentist" required>
                            <option value="" disabled default selected style="display:none;"></option>
                            <?php foreach ($dentists as $dent): ?>
                              <option value="<?php echo $dent->firstname ?> <?php echo $dent->middlename[0] ?>. <?php echo $dent->lastname ?>">
                                Dr. <?php echo $dent->firstname ?> <?php echo $dent->middlename[0] ?>. <?php echo $dent->lastname ?>
                              </option>
                            <?php endforeach; ?>
                          </select><br />                        
                        </div>
                        
                        <div class="col-xs-6 columns" style="margin-bottom: 10px;">
                            <label for="cc">Chief Complaint</label>
                            <textarea name="complaint" id="cc" class="form-control" cols="50" rows="2" style="resize: none"></textarea>  
                        </div>

                        <div class="col-xs-6 columns" style="margin-bottom: 10px;">
                            <label for="of">Other Findings</label>
                            <textarea name="finding" id="of" class="form-control" cols="50" rows="2" style="resize: none"></textarea>  
                        </div>
                      </div>

                      <div class="col-xs-12 columns">
                        <hr />
                        <span><h4 class="group-title">Treatments Performed</h4></span>
                      </div>

                      <table id="mytable" style="margin-top: 10px" class="table" cellspacing="0" width="100%">
                        <thead class="alert-info">
                          <tr>
                            <th></th>
                            <th width="35%" style="text-align: center; font-weight: bold; font-size: 100%">Type of treatment</th>
                            <th width="35%" style="text-align: center; font-weight: bold; font-size: 100%">Application</th>
                            <th width="30%" style="text-align: center; font-weight: bold; font-size: 100%">Treatment price (PHP)</th>
                          </tr>
                        </thead>
                        <tbody id="tbl1">
                          <tr>
                            <td colspan="3">
                              <div style="display:flex">
                                <select id="type" style="width:35%; margin-right:5px;" class="form-control" name="type" required>
                                  <option value="" disabled default selected style="display:none;">Treatment Type *</option>
                                  <option value="Tooth">Tooth</option>
                                  <option value="Unit">Unit</option>
                                  <option value="Post">Post</option>
                                  <option value="Canal">Canal</option>
                                  <option value="Arch">Arch</option>
                                  <option value="Appliance">Appliance</option>
                                  <option value="Quadrant">Quadrant</option>
                                  <option value="Unclassified">Unclassified</option>
                                </select>                              
                                <button id="atf" style="margin-right:5px" type="button" class="btn btn-info">
                                  <span class="glyphicon glyphicon-plus"></span> Add treatment 
                                </button>
                              </div>
                            </td>
                          </tr>                                                    
                        </tbody>
                        <tr>
                            <td class="td-total"></td>
                            <td class="td-total"></td>
                            <td class="td-total"></td>
                            <td class="td-total text-center vertical-middle-align">
                              <hr />
                              <label for="tot-amt-of-treatments">Total: </label>
                              <span id="tot-amt-of-treatments" style="width:60%; color:#05BF05; font-weight:bold">0</span><br/>                                    
                            </td>
                          </tr>
                      </table>
                      
                      <hr />
                      <div class="col-xs-4 col-xs-offset-2 col-lg-3 col-lg-offset-3 columns">
                        <label for="amt-rcvd">Amount paid (PHP)</label>
                        <input id="amt-rcvd" class="form-control" name="amount_paid" type="number" value="0" min="0" required/>
                        <input id="total" name="total_amount" class="form-control" type="hidden" value="0" required/>
                      </div>
                      <div class="col-xs-4 col-lg-3 columns">
                        <label for="tot-amt-of-treatments">Override Total Amount (PHP)</label>
                        <input id="override_total" name="override_total_amount" class="form-control" type="number" /> 
                      </div>

                      <input id="tctr" name="tctr" class="form-control" type="hidden" value="0" required/>
                      <input id="uctr" name="uctr" class="form-control" type="hidden" value="0" required/>
                      <input id="qctr" name="qctr" class="form-control" type="hidden" value="0" required/>
                      <input id="apctr" name="apctr" class="form-control" type="hidden" value="0" required/>
                      <input id="pctr" name="pctr" class="form-control" type="hidden" value="0" required/>
                      <input id="cctr" name="cctr" class="form-control" type="hidden" value="0" required/>
                      <input id="arctr" name="arctr" class="form-control" type="hidden" value="0" required/>
                      
                      <div class="col-xs-12 columns">
                        <hr />
                        <button id="sub" type="submit" class="btn btn-success">Submit</button>
                      </div>
                </div>
            </div>
</form>

<?php $this->load->view('footer'); ?>
<script type="text/javascript">
  var ctr=1;
  var tctr = uctr = qctr = apctr = pctr = cctr = arctr = 0;
  var ttcnt = uucnt = qqcnt = aapcnt = ppcnt = cccnt = aarcnt = 0;

$(document).ready(function(){

  $('#atf').click(function(){
    if($('#type').val()!=null){
      temp = ctr;
      ctr+=1;
      $('<tr id="tbl'+ctr+'"><td><button type="button" style="margin-right:5px;margin-top:20px; width:80%;" class="btn btn-danger rmv"><span class="glyphicon glyphicon-remove"></span></button></td><td style="text-align:center"><input type="hidden" value="'+$('#type').val()+'" name="type[]"/><select required id="'+temp+'" style="margin-right:5px; margin-top:20px; width:80%;" class="form-control trtype" name="ttype[]" required></td><td id="ndd'+temp+'" class="text-center" style="display: inline-flex" width="100%"></td><td><span><center id="ptd'+temp+'" class="vprice">0</center></span><input id="count'+temp+'" type="hidden" class="num" value="1"/><input id="pr'+temp+'"type="hidden" value="0" name="price[]" class="price" /></td></tr>').insertAfter("#tbl1");
      $.ajax({
          url:"<?php echo base_url(); ?>treatment/get_services",    
          data: {type: $('#type').val()},
          type: "POST",
          success: function(data){
              
              $("#"+temp).html(data);
          }
      }); 

      if($('#type').val() == 'Tooth'){
        $('<div class="col-md-12"><div id="t'+tctr+'"><div class="col-md-5"><input placeholder="Tooth #" type="text" name="ttoothno'+tctr+'[]" class="form-control toothno" style="margin-right:5px; width:100%;" pattern="[1-4][1-8]" required/></div><div id="surf1" class="col-md-5"><select style="margin-right:5px; width:100%;" class="form-control" name="tttype'+tctr+'[]" required><option value="Mesial">Mesial</option><option value="Distal">Distal</option><option value="Labial">Labial</option><option value="Buccal">Buccal</option><option value="Lingual">Lingual</option></select></div></div><button style="margin-right:5px;margin-top:5px;width:85%" type="button" class="btn btn-info atbtn">Add<input id="atcnt" type="hidden" value="'+tctr+'"><input id="attmp" type="hidden" value="'+temp+'"></button>').insertAfter("#ndd"+ temp);
        tctr++;
      }

      else if($('#type').val() == 'Unit'){
        $('<div id="u'+uctr+'"><div class="col-md-10"><input placeholder="Tooth #" type="text" name="utoothno'+uctr+'[]" class="form-control toothno" pattern="[1-4][1-8]" required/></div></div> <button style="margin-right:5px;margin-top:5px;width:85%" type="button" class="btn btn-info aubtn">Add<input id="aucnt" type="hidden" value="'+uctr+'"><input id="autmp" type="hidden" value="'+temp+'"></button>').insertAfter("#ndd"+ temp);
        uctr++;
      }

      else if($('#type').val() == 'Quadrant'){
        $('<div id="q'+qctr+'"><div class="col-md-10"><select id="apptype" class="form-control" name="qtype'+qctr+'[]" required><option value="Upper right">Upper right</option><option value="Upper left">Upper left</option><option value="Lower left">Lower left</option><option value="All">All</option></select></div> </div> <button style="margin-right:5px;margin-top:5px;width:85%" type="button" class="btn btn-info aqbtn">Add<input id="aqcnt" type="hidden" value="'+qctr+'"><input id="aqtmp" type="hidden" value="'+temp+'"></button>').insertAfter("#ndd"+ temp);
        qctr++;
      }

      else if($('#type').val() == 'Appliance'){
        $('<div id="ap'+apctr+'"><div class="col-md-10"><select id="apptype" name="atype'+apctr+'[]" class="form-control" required><option value="Upper">Upper</option><option value="Lower">Lower</option><option value="Whole">Whole</option></select></div></div> <button style="margin-right:5px;margin-top:5px;width:85%" type="button" class="btn btn-info aapbtn">Add<input id="aapcnt" type="hidden" value="'+apctr+'"><input id="aaptmp" type="hidden" value="'+temp+'"></button>').insertAfter("#ndd"+ temp);
        apctr++;
      }

      else if($('#type').val() == 'Post'){
        $('<div id="p'+pctr+'"><div class="col-md-10"><input placeholder="Tooth #" type="text" name="ptoothno'+pctr+'[]" class="form-control toothno" pattern="[1-4][1-8]" required/></div></div> <button style="margin-right:5px;margin-top:5px;width:85%" type="button" class="btn btn-info apbtn">Add<input id="apcnt" type="hidden" value="'+pctr+'"><input id="aptmp" type="hidden" value="'+temp+'"></button>').insertAfter("#ndd"+ temp);
        pctr++;
      }

      else if($('#type').val() == 'Canal'){
        $('<div id="c'+cctr+'"><div class="col-md-10"><input placeholder="Tooth #" type="text" name="ctoothno'+cctr+'[]" class="form-control toothno" pattern="[1-4][1-8]" required/></div></div> <button style="margin-right:5px;margin-top:5px;width:85%" type="button" class="btn btn-info acbtn">Add<input id="accnt" type="hidden" value="'+cctr+'"><input id="actmp" type="hidden" value="'+temp+'"></button>').insertAfter("#ndd"+ temp);
        cctr++;
      }

      else if($('#type').val() == 'Arch'){
        $('<div id="ar'+arctr+'"><div class="col-md-10"><input placeholder="Tooth #" type="text" name="atoothno'+arctr+'[]" class="form-control toothno" pattern="[1-4][1-8]" required/></div></div> <button style="margin-right:5px;margin-top:5px;width:85%" type="button" class="btn btn-info aarbtn">Add<input id="aarcnt" type="hidden" value="'+arctr+'"><input id="aartmp" type="hidden" value="'+temp+'"></button>').insertAfter("#ndd"+ temp);
        arctr++;
      }


    }else{
      swal('ERROR','Pick treatment type first','error');
    }
  });

  $(document).on("click",".atbtn", function(){
    var sum=0;
    tcnt = $(this).find("input[id=atcnt]").val();
    ttcnt += 1;
    ttmp = $(this).find("input[id=attmp]").val();
    $('<div id="ttcnt'+ttcnt+'" class="col-md-12" style="margin-top:5px;"><button type="button" class="btn btn-danger rmvtt"><span class="glyphicon glyphicon-remove"></span><input id="rttmp" type="hidden" value="'+ttmp+'"></button><div class="col-md-5"><input placeholder="Tooth #" type="text" name="ttoothno'+tcnt+'[]" class="form-control toothno" style="margin-right:5px; width:100%;" pattern="[1-4][1-8]" required/></div><div id="surf1" class="col-md-5"><select style="margin-right:5px; width:100%;" class="form-control" name="tttype'+tcnt+'[]" required><option value="Mesial">Mesial</option><option value="Distal">Distal</option><option value="Labial">Labial</option><option value="Buccal">Buccal</option><option value="Lingual">Lingual</option></select></div></div>').insertAfter("#t"+ tcnt);
    tprice = Number($('#pr'+ttmp).val());
    curprice = Number($('#ptd'+ttmp).html());
    curprice += tprice;
    num = Number($('#count'+ttmp).val());
    num += 1;
    $('#count'+ttmp).val(num);
    $('#ptd'+ttmp).html(curprice);
    $('.vprice').each(function(){
      sum += Number($(this).html());
    });

    $('#tot-amt-of-treatments').html(sum);
    $('#total').val(sum);
    $('#amt-rcvd').attr({"max":sum});
  });

  $(document).on("click",".aqbtn", function(){
    var sum=0;
    qcnt = $(this).find("input[id=aqcnt]").val();
    qqcnt += 1;
    qtmp = $(this).find("input[id=aqtmp]").val();
    $('<div id="qqcnt'+qqcnt+'" class="col-md-12" style="margin-top:5px;"> <button type="button" class="btn btn-danger rmvqq"><span class="glyphicon glyphicon-remove"></span><input id="rqtmp" type="hidden" value="'+qtmp+'"></button> <div class="col-md-10"><select id="apptype" class="form-control" name="qtype'+qcnt+'[]" required><option value="Upper right">Upper right</option><option value="Upper left">Upper left</option><option value="Lower left">Lower left</option><option value="All">All</option></select></div> </div>').insertAfter("#q"+ qcnt);
    qprice = Number($('#pr'+qtmp).val());
    curprice = Number($('#ptd'+qtmp).html());
    curprice += qprice;
    num = Number($('#count'+qtmp).val());
    num += 1;
    $('#count'+qtmp).val(num);
    $('#ptd'+qtmp).html(curprice);
    $('.vprice').each(function(){
      sum += Number($(this).html());
    });

    $('#tot-amt-of-treatments').html(sum);
    $('#total').val(sum);
    $('#amt-rcvd').attr({"max":sum});
  });

  $(document).on("click",".aapbtn", function(){
    var sum=0;
    apcnt = $(this).find("input[id=aapcnt]").val();
    aapcnt += 1;
    aptmp = $(this).find("input[id=aaptmp]").val();
    $('<div id="aapcnt'+aapcnt+'" class="col-md-12" style="margin-top:5px;"> <button type="button" class="btn btn-danger rmvap"><span class="glyphicon glyphicon-remove"></span><input id="raptmp" type="hidden" value="'+aptmp+'"></button> <div class="col-md-10"><select id="apptype" name="atype'+apcnt+'[]" class="form-control" required><option value="Upper">Upper</option><option value="Lower">Lower</option><option value="Whole">Whole</option></select></div></div>').insertAfter("#ap"+ apcnt);
    apprice = Number($('#pr'+aptmp).val());
    curprice = Number($('#ptd'+aptmp).html());
    curprice += apprice;
    num = Number($('#count'+aptmp).val());
    num += 1;
    $('#count'+aptmp).val(num);
    $('#ptd'+aptmp).html(curprice);
    $('.vprice').each(function(){
      sum += Number($(this).html());
    });

    $('#tot-amt-of-treatments').html(sum);
    $('#total').val(sum);
    $('#amt-rcvd').attr({"max":sum});
  });

  $(document).on("click",".apbtn", function(){
    var sum=0;
    pcnt = $(this).find("input[id=apcnt]").val();
    ppcnt += 1;
    ptmp = $(this).find("input[id=aptmp]").val();
    $('<div id="ppcnt'+ppcnt+'" class="col-md-12" style="margin-top:5px;"> <button type="button" class="btn btn-danger rmvpp"><span class="glyphicon glyphicon-remove"></span><input id="rptmp" type="hidden" value="'+ptmp+'"></button> <div class="col-md-10"><input placeholder="Tooth #" type="text" name="ptoothno'+pcnt+'[]" class="form-control toothno" pattern="[1-4][1-8]" required/></div></div>').insertAfter("#p"+ pcnt);
    pprice = Number($('#pr'+ptmp).val());
    curprice = Number($('#ptd'+ptmp).html());
    curprice += pprice;
    num = Number($('#count'+ptmp).val());
    num += 1;
    $('#count'+ptmp).val(num);
    $('#ptd'+ptmp).html(curprice);
    $('.vprice').each(function(){
      sum += Number($(this).html());
    });

    $('#tot-amt-of-treatments').html(sum);
    $('#total').val(sum);
    $('#amt-rcvd').attr({"max":sum});
  });

  $(document).on("click",".acbtn", function(){
    var sum=0;
    ccnt = $(this).find("input[id=accnt]").val();
    cccnt += 1;
    ctmp = $(this).find("input[id=actmp]").val();
    $('<div id="cccnt'+cccnt+'" class="col-md-12" style="margin-top:5px;"> <button type="button" class="btn btn-danger rmvcc"><span class="glyphicon glyphicon-remove"></span><input id="rctmp" type="hidden" value="'+ctmp+'"></button> <div class="col-md-10"><input placeholder="Tooth #" type="text" name="ctoothno'+ccnt+'[]" class="form-control toothno" pattern="[1-4][1-8]" required/></div></div>').insertAfter("#c"+ ccnt);
    cprice = Number($('#pr'+ctmp).val());
    curprice = Number($('#ptd'+ctmp).html());
    curprice += cprice;
    num = Number($('#count'+ctmp).val());
    num += 1;
    $('#count'+ctmp).val(num);
    $('#ptd'+ctmp).html(curprice);
    $('.vprice').each(function(){
      sum += Number($(this).html());
    });

    $('#tot-amt-of-treatments').html(sum);
    $('#total').val(sum);
    $('#amt-rcvd').attr({"max":sum});
  });

  $(document).on("click",".aarbtn", function(){
    var sum=0;
    arcnt = $(this).find("input[id=aarcnt]").val();
    aarcnt += 1;
    artmp = $(this).find("input[id=aartmp]").val();
    $('<div id="aarcnt'+aarcnt+'" class="col-md-12" style="margin-top:5px;"> <button type="button" class="btn btn-danger rmvar"><span class="glyphicon glyphicon-remove"></span><input id="rartmp" type="hidden" value="'+artmp+'"></button> <div class="col-md-10"><input placeholder="Tooth #" type="text" name="atoothno'+arcnt+'[]" class="form-control toothno" pattern="[1-4][1-8]" required/></div></div>').insertAfter("#ar"+ arcnt);
    arprice = Number($('#pr'+artmp).val());
    curprice = Number($('#ptd'+artmp).html());
    curprice += arprice;
    num = Number($('#count'+artmp).val());
    num += 1;
    $('#count'+artmp).val(num);
    $('#ptd'+artmp).html(curprice);
    $('.vprice').each(function(){
      sum += Number($(this).html());
    });

    $('#tot-amt-of-treatments').html(sum);
    $('#total').val(sum);
    $('#amt-rcvd').attr({"max":sum});
  });

  $(document).on("click",".aubtn", function(){
    var sum=0;
    ucnt = $(this).find("input[id=aucnt]").val();
    uucnt += 1;
    utmp = $(this).find("input[id=autmp]").val();
    $('<div id="uucnt'+uucnt+'" class="col-md-12" style="margin-top:5px;"> <button type="button" class="btn btn-danger rmvuu"><span class="glyphicon glyphicon-remove"></span><input id="rutmp" type="hidden" value="'+utmp+'"></button> <div class="col-md-10"><input placeholder="Tooth #" type="text" name="utoothno'+ucnt+'[]" class="form-control toothno" pattern="[1-4][1-8]" required/></div></div>').insertAfter("#u"+ ucnt);
    uprice = Number($('#pr'+utmp).val());
    curprice = Number($('#ptd'+utmp).html());
    curprice += uprice;
    num = Number($('#count'+utmp).val());
    num += 1;
    $('#count'+utmp).val(num);
    $('#ptd'+utmp).html(curprice);
    $('.vprice').each(function(){
      sum += Number($(this).html());
    });

    $('#tot-amt-of-treatments').html(sum);
    $('#total').val(sum);
    $('#amt-rcvd').attr({"max":sum});
  });

  $(document).on("click",".rmvtt", function(){
    var nsum=0;
    var rid=$(this).parent().attr("id");
    $('#' + rid).remove();
    ttmp = $(this).find("input[id=rttmp]").val();
    tprice = Number($('#pr'+ttmp).val());
    curprice = Number($('#ptd'+ttmp).html());
    curprice -= tprice;
    num = Number($('#count'+ttmp).val());
    num -= 1;
    $('#count'+ttmp).val(num);
    $('#ptd'+ttmp).html(curprice);
    $('.vprice').each(function(){
      nsum += Number($(this).html());
    });

    $('#tot-amt-of-treatments').html(nsum);
    $('#total').val(nsum);
    $('#amt-rcvd').attr({"max":nsum});
  });

  $(document).on("click",".rmvqq", function(){
    var nsum=0;
    var rid=$(this).parent().attr("id");
    $('#' + rid).remove();
    qtmp = $(this).find("input[id=rqtmp]").val();
    qprice = Number($('#pr'+qtmp).val());
    curprice = Number($('#ptd'+qtmp).html());
    curprice -= qprice;
    num = Number($('#count'+qtmp).val());
    num -= 1;
    $('#count'+qtmp).val(num);
    $('#ptd'+qtmp).html(curprice);
    $('.vprice').each(function(){
      nsum += Number($(this).html());
    });

    $('#tot-amt-of-treatments').html(nsum);
    $('#total').val(nsum);
    $('#amt-rcvd').attr({"max":nsum});
  });

  $(document).on("click",".rmvap", function(){
    var nsum=0;
    var rid=$(this).parent().attr("id");
    $('#' + rid).remove();
    aptmp = $(this).find("input[id=raptmp]").val();
    apprice = Number($('#pr'+aptmp).val());
    curprice = Number($('#ptd'+aptmp).html());
    curprice -= apprice;
    num = Number($('#count'+aptmp).val());
    num -= 1;
    $('#count'+aptmp).val(num);
    $('#ptd'+aptmp).html(curprice);
    $('.vprice').each(function(){
      nsum += Number($(this).html());
    });

    $('#tot-amt-of-treatments').html(nsum);
    $('#total').val(nsum);
    $('#amt-rcvd').attr({"max":nsum});
  });

  $(document).on("click",".rmvpp", function(){
    var nsum=0;
    var rid=$(this).parent().attr("id");
    $('#' + rid).remove();
    ptmp = $(this).find("input[id=rptmp]").val();
    pprice = Number($('#pr'+ptmp).val());
    curprice = Number($('#ptd'+ptmp).html());
    curprice -= pprice;
    num = Number($('#count'+ptmp).val());
    num -= 1;
    $('#count'+ptmp).val(num);
    $('#ptd'+ptmp).html(curprice);
    $('.vprice').each(function(){
      nsum += Number($(this).html());
    });

    $('#tot-amt-of-treatments').html(nsum);
    $('#total').val(nsum);
    $('#amt-rcvd').attr({"max":nsum});
  });

  $(document).on("click",".rmvcc", function(){
    var nsum=0;
    var rid=$(this).parent().attr("id");
    $('#' + rid).remove();
    ctmp = $(this).find("input[id=rctmp]").val();
    cprice = Number($('#pr'+ctmp).val());
    curprice = Number($('#ptd'+ctmp).html());
    curprice -= cprice;
    num = Number($('#count'+ctmp).val());
    num -= 1;
    $('#count'+ctmp).val(num);
    $('#ptd'+ctmp).html(curprice);
    $('.vprice').each(function(){
      nsum += Number($(this).html());
    });

    $('#tot-amt-of-treatments').html(nsum);
    $('#total').val(nsum);
    $('#amt-rcvd').attr({"max":nsum});
  });

  $(document).on("click",".rmvar", function(){
    var nsum=0;
    var rid=$(this).parent().attr("id");
    $('#' + rid).remove();
    artmp = $(this).find("input[id=rartmp]").val();
    arprice = Number($('#pr'+artmp).val());
    curprice = Number($('#ptd'+artmp).html());
    curprice -= cprice;
    num = Number($('#count'+artmp).val());
    num -= 1;
    $('#count'+artmp).val(num);
    $('#ptd'+artmp).html(curprice);
    $('.vprice').each(function(){
      nsum += Number($(this).html());
    });

    $('#tot-amt-of-treatments').html(nsum);
    $('#total').val(nsum);
    $('#amt-rcvd').attr({"max":nsum});
  });

  $(document).on("click",".rmvuu", function(){
    var nsum=0;
    var rid=$(this).parent().attr("id");
    $('#' + rid).remove();
    utmp = $(this).find("input[id=rutmp]").val();
    uprice = Number($('#pr'+utmp).val());
    curprice = Number($('#ptd'+utmp).html());
    curprice -= uprice;
    num = Number($('#count'+utmp).val());
    num -= 1;
    $('#count'+utmp).val(num);
    $('#ptd'+utmp).html(curprice);
    $('.vprice').each(function(){
      nsum += Number($(this).html());
    });

    $('#tot-amt-of-treatments').html(nsum);
    $('#total').val(nsum);
    $('#amt-rcvd').attr({"max":nsum});
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
    $('#tctr').val(tctr);
    $('#uctr').val(uctr);
    $('#qctr').val(qctr);
    $('#apctr').val(apctr);
    $('#pctr').val(pctr);
    $('#cctr').val(cctr);
    $('#arctr').val(arctr);
    if(ctr==1){
      swal('ERROR','No treatment rendered','error');
      event.preventDefault();
    }
  });

  $(document).on("click",".rmv", function(){
    var nsum=0;
    var rid=$(this).parent().parent().attr("id");
    $('#' + rid).remove();
    $('.vprice').each(function(){
      nsum += Number($(this).html());
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
                  num = Number($('#count'+id).val());
                  num = num*data;
                  $('#ptd'+id).html(num);

        $('.vprice').each(function(){
          sum += Number($(this).html());
        });

        $('#tot-amt-of-treatments').html(sum);
        $('#total').val(sum);
        $('#amt-rcvd').attr({"max":sum});
              }
          });

      });
});
</script>