<?php $this->load->view('header', array('num' => 0, 'title' => 'HOME')); ?>
            </div></div>
            <div class="hpage-bground"></div>        
            <div class="col-xs-8 col-xs-offset-1 columns" style="width:50%">
              <div class="element-container hpage-content">
                <h3 class="text-center"><strong>Welcome to the official website of <span style="color:rgb(43, 133, 255)">Gayatin Dental Clinic</span>.</strong></h3>                     
                    <p>People often want to know exactly what is a dental clinic and if there is actually a difference between them and dental offices. 
                    The facts are in and we are happy to inform you that they are both the same thing. The lead dentist or owner of the practice makes the call as to if he or 
                    she wants to use the term clinic, office or even center.</p><br>
                    <p>Our dentist primary focus is on providing <i>gentle care</i>.</p><br>
                    <p>We understand that when it comes to choosing a dentist, that you want one that you can trust.</p> <br> 
                    <p><strong>Gayatin Dental Clinic</strong> has been a trusted part of the local community for years because we truly care about your smile.</p><br>  
                    <p>At <strong>Gayatin Dental Clinic</strong>, we provide you with a wide array of dental services. We can perform services from general procedures to prostodontic procedures.</p><br>  
                    <p>So what are you waiting for? <a class="create-app" href="<?php echo base_url();?>calendar/display">book for an appointment</a> now.</p>
              </div>
            </div>
<?php $this->load->view('footer'); ?>
<script type="text/javascript">
  $(document).ready(function(){
    $("#owl-demo").owlCarousel({
          navigation : false, // Show next and prev buttons
          slideSpeed : 300,
          paginationSpeed : 400,
          singleItem:true     
    });
  });
</script>