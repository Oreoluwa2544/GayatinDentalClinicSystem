<?php $this->load->view('header', array('num' => 2, 'title' => 'Teeth Profile')); ?>
		</div>
		</div>
			<div class="col-xs-12 columns">
		        <div class="element-container">
		        <?php foreach($info as $info):?>
				  <legend><?php echo $info->firstname;?>'s Teeth Profile</legend>	
				  
				<?php endforeach;?>
		          <div class="table-responsive">		          
		          	<table class="table teethprof-table table-condensed text-center" style="background-color:#fff; margin-bottom: 5px !important">
		          	     <tbody>
								<tr>
									<td class="tooth-elem">
										<div class="tooth">					
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){ ?>
												<?php if($teeth[$i]->toothno == '18' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{ ?>
													<div class="top">
													</div>
												<?php } ?>
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){ ?>
												<?php if($teeth[$i]->toothno == '18' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left">
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '18' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center"></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '18' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right"></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '18' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom"></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '17' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top"></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '17' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left">
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '17' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center"></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '17' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right"></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '17' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom"></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '16' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top"></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '16' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left">
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '16' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center"></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '16' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right"></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '16' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom"></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '15' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top"></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '15' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left">
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '15' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center"></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '15' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right"></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '15' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom"></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '14' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top"></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '14' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left">
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '14' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center"></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '14' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right"></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '14' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom"></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '13' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top"></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '13' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left">
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '13' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center"></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '13' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right"></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '13' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom"></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '12' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top"></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '12' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left">
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '12' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center"></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '12' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right"></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '12' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom"></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '11' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top"></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '11' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left">
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '11' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center"></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '11' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right"></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '11' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom"></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '21' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top"></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '21' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left">
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '21' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center"></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '21' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right"></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '21' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom"></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '22' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top"></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '22' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left">
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '22' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center"></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '22' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right"></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '22' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom"></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '23' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top"></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '23' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left">
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '23' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center"></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '23' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right"></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '23' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom"></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '24' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top"></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '24' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left">
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '24' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center"></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '24' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right"></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '24' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom"></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '25' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top"></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '25' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left">
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '25' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center"></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '25' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right"></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '25' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom"></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '26' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top"></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '26' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left">
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '26' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center"></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '26' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right"></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '26' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom"></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '27' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top"></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '27' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left">
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '27' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center"></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '27' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right"></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '27' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom"></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '28' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top"></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '28' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left">
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '28' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center"></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '28' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right"></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '28' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom"></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
								</tr>
								<tr class="text-center tooth-label">
									<td class="tooth-num">18</td>
									<td class="tooth-num">17</td>
									<td class="tooth-num">16</td>
									<td class="tooth-num">15</td>
									<td class="tooth-num">14</td>
									<td class="tooth-num">13</td>
									<td class="tooth-num">12</td>
									<td class="tooth-num">11</td>
									<td class="tooth-num">21</td>
									<td class="tooth-num">22</td>
									<td class="tooth-num">23</td>
									<td class="tooth-num">24</td>
									<td class="tooth-num">25</td>
									<td class="tooth-num">26</td>
									<td class="tooth-num">27</td>
									<td class="tooth-num">28</td>
								</tr>
								<tr>
									<td colspan="16"></td>
								</tr>
								<tr class="text-center tooth-label">
									<td class="tooth-num">48</td>
									<td class="tooth-num">47</td>
									<td class="tooth-num">46</td>
									<td class="tooth-num">45</td>
									<td class="tooth-num">44</td>
									<td class="tooth-num">43</td>
									<td class="tooth-num">42</td>
									<td class="tooth-num">41</td>
									<td class="tooth-num">31</td>
									<td class="tooth-num">32</td>
									<td class="tooth-num">33</td>
									<td class="tooth-num">34</td>
									<td class="tooth-num">35</td>
									<td class="tooth-num">36</td>
									<td class="tooth-num">37</td>
									<td class="tooth-num">38</td>
								</tr>
								<tr>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '48' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top"></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '48' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left">
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '48' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center"></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '48' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right"></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '48' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom"></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '47' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="top">
														
													</div>
												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '47' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left">
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '47' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center"></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '47' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right"></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '47' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom"></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '46' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top"></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '46' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left">
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '46' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center"></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '46' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right"></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '46' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom"></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '45' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top"></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '45' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left">
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '45' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center"></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '45' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right"></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '45' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom"></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '44' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top"></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '44' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left">
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '44' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center"></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '44' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right"></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '44' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom"></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '43' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top"></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '43' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left">
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '43' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center"></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '43' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right"></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '43' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom"></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '42' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top"></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '42' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left">
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '42' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center"></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '42' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right"></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '42' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom"></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '41' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top"></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '41' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left">
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '41' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center"></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '41' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right"></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '41' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom"></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '31' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top"></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '31' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left">
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '31' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center"></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '31' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right"></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '31' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom"></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '32' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top"></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '32' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left">
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '32' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center"></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '32' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right"></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '32' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom"></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '33' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top"></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '33' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left">
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '33' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center"></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '33' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right"></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '33' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom"></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '34' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top"></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '34' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left">
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '34' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center"></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '34' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right"></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '34' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom"></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '35' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top"></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '35' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left">
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '35' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center"></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '35' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right"></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '35' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom"></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '36' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top"></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '36' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left">
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '36' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center"></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '36' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right"></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '36' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom"></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '37' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top"></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '37' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left">
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '37' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center"></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '37' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right"></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '37' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom"></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '38' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top"></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '38' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left">
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '38' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center"></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '38' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right"></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '38' ){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="treatmentid" type="hidden" value="<?php echo $teeth[$k]->treatment_id;?>"/>
														<input id="toothno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom"></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
								</tr>
							</tbody>
		          	 </table>	
		          	 <hr>
		          	 <!-- <div class="teethprof-buttons" style="margin: 0 0 20px 0">
				  	<a href="<?php echo base_url();?>cadmin/update_teethprof/<?php echo $info->id;?>">
		          		<button type="button" class="btn btn-info">
		          			Update Teeth Profile
		          		</button>
		            </a>			
		            <a href="<?php echo base_url();?>cadmin/view_teethprofile_updates/<?php echo $info->id;?>">
		          		<button type="button" class="btn btn-info">
		          			View History of Teeth Profile
		          		</button>
		            </a>
				  </div> -->

				  <a href="<?php echo base_url();?>treatment/treatment_record_history/<?php echo $teeth[0]->treatment_id;?>">
		          	 <button type="button" class="btn btn-warning">
		          	 	<span class="glyphicon glyphicon-arrow-left"></span> Back to Treatment Record
		          	 </button> </a>
				</div>
			</div>
		          <!-- MODAL FOR VIEWING TOOTH FINDINGS -->									
				      <div class="modal fade" id="view-findings" tabindex="-1" role="dialog" aria-labelledby="View tooth treatment" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
							  <!-- <form method="post" role="form" action="<?php echo base_url();?>cadmin/update_teeth_info"> -->
							      <div class="modal-header">
							      	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title">Treatment made for the  specified tooth</h4>
							        		<input id="aapid" name="pid" type="hidden" value=""/>
							      			<input id="ttno" name="no" type="hidden" value=""/>
							      			<input id="ttsu" name="surface" type="hidden" value=""/></button></h4>
							      </div>

							      <div class="modal-body" style="width:80%; margin: 0 auto">
							      		
							      		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
						                    <thead>
						                        <tr>
						                            <th class="text-center" width="30%">Treatment</th>
						                            <th class="text-center" width="20%">Part</th>
						                        </tr>
						                    </thead>
						                                 
						                    <tbody id="trid">
						                    </tbody>
						                </table>
							      			<!-- <input id="upid" name="pid" type="hidden" value=""/>
							      			<input id="utid" name="tid" type="hidden" value=""/>
							        		<textarea class="form-control" name="note" id="ufindings" cols="30" rows="3" required></textarea> -->
							      </div>
							      <div class="modal-footer">
							        <!-- <button id="submit-findings" type="submit" class="btn btn-primary">Submit</button> -->
							      </div>
						     <!--  </form> -->
						    </div><!-- /.modal-content -->
						  </div><!-- /.modal-dialog -->
					  </div><!-- /.modal -->
				  <!-- END OF MODAL FOR ADDING TOOTH FINDINGS -->	

<?php $this->load->view('footer'); ?>
<script type="text/javascript">
	$(document).ready(function(){	
		$(".test").click(function(){
			$("#view-findings").modal("toggle");
			$.ajax({
		          url:"<?php echo base_url();?>treatment/tooth_treatment",    
		          data: {tid:$(this).find("input[id=treatmentid]").val(),tno: $(this).find("input[id=toothno]").val()},
		          type: "POST",
		          success: function(data){
		              
		              $("#trid").html(data);
		          }
		     }); 
		});
	});
</script>